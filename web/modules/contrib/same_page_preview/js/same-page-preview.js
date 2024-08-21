/**
 * @file
 * Same Page Preview javascript.
 */

// I don't love that we're using jQuery here, but Drupal's ajax system still
// seems to be closely tied to it.
(function ($, Drupal, once) {
  // Shared application state for same page preview.
  const samePagePreviewToggle = '#edit-toggle-preview-link',
    samePagePreviewCheckbox = '#edit-toggle-preview-checkbox',
    samePagePreviewLive = '.node-form .same-page-preview--live-refresh input',
    samePagePreviewInclusionList = '.node-form .same-page-preview--blur-refresh input',
    samePagePreviewTextEditor = '.node-form .ck-editor__editable_inline',
    samePagePreviewCloseBtn = '.same-page-preview-dialog .ui-dialog-titlebar-close',
    samePagePreviewPane = 'iframe.preview',
    defaultPreviewBtn = document.querySelector('[data-drupal-selector="edit-preview"]'),
    previewCheckbox = document.querySelector(samePagePreviewCheckbox),
    openLink = document.querySelector(samePagePreviewToggle),
    toggleStore = 'samePagePreview--onByDefault';

  Drupal.samePagePreview = {
    settings: [
      {
        'storageName': 'onByDefault',
        'selector': '#edit-toggle-preview-link',
      },
    ],

    activeState: {
      uuid: null,
      viewMode: 'full',
      previewPaneSrc: null,
      newWindowHref: null,
      scrollPosition: 0,
    },

    init: context => {
      once('samePagePreviewInit', samePagePreviewToggle, context).forEach(element => element.addEventListener('click', () => Drupal.samePagePreview.forceRefresh()));
      once('samePagePreviewInit', samePagePreviewCheckbox, context).forEach(element => Drupal.samePagePreview.initializeToggle(element));
      once('samePagePreviewInit', samePagePreviewPane, context).forEach(element => element.addEventListener('load', () => Drupal.samePagePreview.paneRefresh(element)));
      once('samePagePreviewAuto', samePagePreviewLive, context).forEach(element => element.addEventListener('keyup', () => Drupal.samePagePreview.liveRefresh(element)));
      once('samePagePreviewAuto', samePagePreviewInclusionList, context).forEach(element => element.addEventListener('blur', () => Drupal.samePagePreview.forceRefresh()));
      once('samePagePreviewAuto', samePagePreviewTextEditor, context).forEach(element => element.addEventListener('blur', () => Drupal.samePagePreview.forceRefresh()));
    },

    // Force a refresh of the preview pane.
    forceRefresh: async () => {
      if (defaultPreviewBtn) {
        const iframe = document.querySelector(samePagePreviewPane);
        const iframeWindow = iframe?.contentWindow;
        Drupal.samePagePreview.activeState.scrollPosition = iframeWindow?.document.documentElement.scrollTop;
        const active = document.activeElement;
        await defaultPreviewBtn.dispatchEvent(new Event("click"));
        active.focus();
      }
    },

    liveRefresh: (element) => {
      // If no preview iframe, nothing to do.
      const iframe = document.querySelector('iframe.preview');
      if (!iframe) {
        return;
      }
      let preview = (iframe.contentWindow || iframe.contentDocument);
      if (preview.document) {
        preview = preview.document;
      }
      // @todo target based on a selector in a data attribute instead.
      let title = preview.querySelector('h1');
      if (title) {
        // Some themes nest the text inside a span.
        if (title.querySelector('span')) {
          title = title.querySelector('span');
        }
        title.textContent = element.value;
      } else {
        // If title element isn't created yet, refresh the preview instead.
        Drupal.samePagePreview.forceRefresh();
      }
    },

    initializeToggle: element => {
      element.addEventListener('change', () => Drupal.samePagePreview.toggleDialog(element));
      // Check for a stored state.
      let toggleInit = localStorage.getItem(toggleStore) === '1';
      previewCheckbox.checked = toggleInit;
      if (toggleInit) {
        openLink.dispatchEvent(new Event('click'));
      }
    },

    toggleDialog: element => {
      element.checked ? Drupal.samePagePreview.openDialog(element) : Drupal.samePagePreview.closeDialog(element);
      const storeVal = element.checked ? 1 : 0;
      localStorage.setItem(toggleStore, storeVal);
    },

    openDialog: async (element) => {
      // @todo trigger the open more directly, so this will wait for dialog.
      await openLink.dispatchEvent(new Event('click'));
      element.focus();
    },

    closeDialog: async (element) => {
      const closeBtn = document.querySelector(samePagePreviewCloseBtn);
      await closeBtn.dispatchEvent(new Event('click'));
      element.focus();
    },

    paneRefresh: (element) => {
      element.contentWindow.scrollTo({
        top: Drupal.samePagePreview.activeState.scrollPosition,
      });
    },

    /**
     * Update Same Page Preview application state.
     * @param {string} uuid The current node uuid.
     * @param {string} viewMode The view mode to be used for preview.
     */
    updateState: (uuid, viewMode) => {
      const regex = /(\/node\/preview\/)(.*)(\/.*)/;

      // Ensure we have the uuid defined.
      if (uuid) {
        Drupal.samePagePreview.activeState.uuid = uuid;
      } else if (!Drupal.samePagePreview.activeState.uuid) {
        Drupal.samePagePreview.activeState.uuid = document.querySelector('iframe.preview').src.match(regex)[2];
      }

      // Update viewMode if it has changed.
      if (viewMode && (Drupal.samePagePreview.activeState.viewMode !== viewMode)) {
        Drupal.samePagePreview.activeState.viewMode = viewMode;
        Drupal.samePagePreview.activeState.scrollPosition = 0;
      }

      // Rather than just refreshing the preview pane, replacing the iframe src
      // using the provided uuid will allow preview to function in cases where the
      // uuid changes.
      if (!Drupal.samePagePreview.activeState.previewPaneSrc) {
        Drupal.samePagePreview.activeState.previewPaneSrc = document.querySelector('iframe.preview').src;
      }
      Drupal.samePagePreview.activeState.previewPaneSrc = Drupal.samePagePreview.activeState.previewPaneSrc.replace(regex, `$1${Drupal.samePagePreview.activeState.uuid}/${Drupal.samePagePreview.activeState.viewMode}?mode=same_page_preview`);

      // The new window button should also be updated to point to the new uuid.
      if (!Drupal.samePagePreview.activeState.newWindowHref) {
        Drupal.samePagePreview.activeState.newWindowHref = document.querySelector('.button.new-window').href;
      }
      Drupal.samePagePreview.activeState.newWindowHref = Drupal.samePagePreview.activeState.newWindowHref.replace(regex, `$1${Drupal.samePagePreview.activeState.uuid}/${Drupal.samePagePreview.activeState.viewMode}`);
    },

    /**
     * Update preview dom elements if the application state has changed.
     * @param {object} previewPane The preview pane iframe.
     * @param {object} newWindowButton The new window button.
     */
    updateDom: (previewPane, newWindowButton) => {
      // Only update form elements if the application state has changed.
      if (Drupal.samePagePreview.activeState.newWindowHref !== newWindowButton.href) {
        newWindowButton.href = Drupal.samePagePreview.activeState.newWindowHref;
      }
      // The preview pane src always updates so that the iframe is reloaded
      previewPane.src = Drupal.samePagePreview.activeState.previewPaneSrc;
    },
  }

  Drupal.behaviors.samePagePreview = {
    attach: context => {
      Drupal.samePagePreview.init(context);
    }
  }

  // Public functions.

  /**
   * Re-render the preview pane.
   * @param {string} newUuid The new uuid if the value has changed.
   * @param {string} viewMode The view mode to be used for preview.
   */
  $.fn.samePagePreviewRenderPreview = (newUuid = null, viewMode) => {
    const previewPane = document.querySelector('iframe.preview');
    const newWindowButton = document.querySelector('.button.new-window');

    Drupal.samePagePreview.updateState(newUuid, viewMode);
    Drupal.samePagePreview.updateDom(previewPane, newWindowButton);
  };
})(jQuery, Drupal, once);

