/**
 * @file
 * Same Page Preview javascript.
 */

// I don't love that we're using jQuery here, but Drupal's ajax system still
// seems to be closely tied to it.
(function init($, Drupal, once) {
  // Shared application state for same page preview.
  const samePagePreviewToggle = '#edit-toggle-preview-link';
  const samePagePreviewLive =
    '.node-form .same-page-preview--live-refresh input';
  const samePagePreviewForce = '.node-form .same-page-preview--force-refresh';
  const samePagePreviewForceElementsOnBlur =
    'input, textarea, .ck-editor__editable_inline, .ck-editor__nested-editable';
  const samePagePreviewForceElementsOnChange = 'select';
  const samePagePreviewCloseBtn =
    '.same-page-preview-dialog .ui-dialog-titlebar-close';
  const samePagePreviewPane = 'iframe.preview';
  const defaultPreviewBtn = document.querySelector(
    '[data-drupal-selector="edit-preview"]',
  );
  const previewOnHiddenField = document.querySelector(
    '[data-drupal-selector="edit-ssp-preview-enabled"]',
  );
  const openLink = document.querySelector(samePagePreviewToggle);

  Drupal.samePagePreview = {
    settings: {
      onByDefault: {
        storageName: 'Drupal.samePagePreview.onByDefault',
        label: 'Open preview by default',
        selector: 'edit-toggle-preview-link',
        default: 1,
      },
      toggleNewWindow: {
        storageName: 'Drupal.samePagePreview.toggleNewWindow',
        label: 'Show New Window button',
        selector: 'toggle-new-window',
        target: "[data-drupal-selector='new-window']",
        default: 1,
      },
      toggleFullscreen: {
        storageName: 'Drupal.samePagePreview.toggleFullscreen',
        label: 'Show Full Screen button',
        selector: 'toggle-full-screen',
        target: "[data-drupal-selector='full-screen']",
        default: 1,
      },
      toggleViewModes: {
        storageName: 'Drupal.samePagePreview.toggleViewModes',
        label: 'Show View Mode drop down',
        selector: 'toggle-view-mode',
        target: '.js-form-item-view-mode',
        default: 1,
      },
    },

    activeState: {
      uuid: null,
      viewMode: 'full',
      previewPaneSrc: null,
      newWindowHref: null,
      scrollPosition: 0,
    },

    init: (context) => {
      once('samePagePreviewInit', samePagePreviewToggle, context).forEach(
        (element) => Drupal.samePagePreview.initializeToggle(element),
      );
      once('samePagePreviewInit', samePagePreviewPane, context).forEach(
        (element) =>
          element.addEventListener('load', () =>
            Drupal.samePagePreview.paneRefresh(element),
          ),
      );
      once('samePagePreviewAuto', samePagePreviewLive, context).forEach(
        (element) =>
          element.addEventListener('keyup', () =>
            Drupal.samePagePreview.liveRefresh(element),
          ),
      );
      once('samePagePreviewAuto', samePagePreviewForce, context).forEach(
        (element) => {
          element.addEventListener('change', (event) => {
            if (event.target.matches(samePagePreviewForceElementsOnChange)) {
              Drupal.samePagePreview.forceRefresh();
            }
          });
          element.addEventListener(
            'blur',
            (event) => {
              if (event.target.matches(samePagePreviewForceElementsOnBlur)) {
                Drupal.samePagePreview.forceRefresh();
              }
            },
            true,
          );
        },
      );
    },

    // Force a refresh of the preview pane.
    forceRefresh: () => {
      if (defaultPreviewBtn) {
        const iframe = document.querySelector(samePagePreviewPane);
        const iframeWindow = iframe ? iframe.contentWindow : undefined;
        if (iframeWindow) {
          Drupal.samePagePreview.activeState.scrollPosition =
            iframeWindow.document.documentElement.scrollTop;
        }
        const active = document.activeElement;
        defaultPreviewBtn.click();
        active.focus();
      }
    },

    liveRefresh: (element) => {
      // If no preview iframe, nothing to do.
      const iframe = document.querySelector('iframe.preview');
      if (!iframe) {
        return;
      }
      let preview = iframe.contentWindow || iframe.contentDocument;
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

    initializeToggle: (element) => {
      // Check for a stored state.
      if (localStorage.getItem('Drupal.samePagePreview.onByDefault') === '1') {
        openLink.click();
      }

      element.addEventListener('click', () =>
        Drupal.samePagePreview.forceRefresh(),
      );
    },

    openDialog: () => {
      // @todo trigger the open more directly, so this will wait for dialog.
      openLink.click();
      const active = document.activeElement;
      active.focus();
    },

    closeDialog: (element) => {
      const closeBtn = document.querySelector(samePagePreviewCloseBtn);
      closeBtn.click();
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
        const previewUuid = document
          .querySelector('iframe.preview')
          .src.match(regex)[2];
        Drupal.samePagePreview.activeState.uuid = previewUuid;
      }

      // Update viewMode if it has changed.
      if (
        viewMode &&
        Drupal.samePagePreview.activeState.viewMode !== viewMode
      ) {
        Drupal.samePagePreview.activeState.viewMode = viewMode;
        Drupal.samePagePreview.activeState.scrollPosition = 0;
      }

      // Rather than just refreshing the preview pane, replacing the iframe src
      // using the provided uuid will allow preview to function in cases where the
      // uuid changes.
      if (!Drupal.samePagePreview.activeState.previewPaneSrc) {
        Drupal.samePagePreview.activeState.previewPaneSrc =
          document.querySelector(samePagePreviewPane).src;
      }
      Drupal.samePagePreview.activeState.previewPaneSrc =
        Drupal.samePagePreview.activeState.previewPaneSrc.replace(
          regex,
          `$1${Drupal.samePagePreview.activeState.uuid}/${Drupal.samePagePreview.activeState.viewMode}?mode=same_page_preview`,
        );

      // The new window button should also be updated to point to the new uuid.
      if (!Drupal.samePagePreview.activeState.newWindowHref) {
        Drupal.samePagePreview.activeState.newWindowHref =
          document.querySelector(
            `${Drupal.samePagePreview.settings.toggleNewWindow.target} a`,
          ).href;
      }
      Drupal.samePagePreview.activeState.newWindowHref =
        Drupal.samePagePreview.activeState.newWindowHref.replace(
          regex,
          `$1${Drupal.samePagePreview.activeState.uuid}/${Drupal.samePagePreview.activeState.viewMode}`,
        );
    },

    /**
     * Update preview dom elements if the application state has changed.
     * @param {object} previewPane The preview pane iframe.
     * @param {object} newWindowButton The new window button.
     */
    updateDom: (previewPane, newWindowButton) => {
      // Only update form elements if the application state has changed.
      if (
        Drupal.samePagePreview.activeState.newWindowHref !==
        newWindowButton.href
      ) {
        newWindowButton.href = Drupal.samePagePreview.activeState.newWindowHref;
      }
      // The preview pane src always updates so that the iframe is reloaded
      previewPane.src = Drupal.samePagePreview.activeState.previewPaneSrc;
    },
  };

  Drupal.behaviors.samePagePreview = {
    attach: (context) => {
      if (previewOnHiddenField && previewOnHiddenField.value === '1') {
        Drupal.samePagePreview.init(context);
      }
    },
  };

  // Public functions.

  /**
   * Re-render the preview pane.
   * @param {string} newUuid The new uuid if the value has changed.
   * @param {string} viewMode The view mode to be used for preview.
   */
  $.fn.samePagePreviewRenderPreview = (newUuid = null, viewMode) => {
    const previewPane = document.querySelector(samePagePreviewPane);
    const newWindowButton = document.querySelector(
      Drupal.samePagePreview.settings.toggleNewWindow.target,
    );

    if (!previewPane) {
      defaultPreviewBtn.focus();
      Drupal.samePagePreview.openDialog(samePagePreviewToggle);
    } else {
      Drupal.samePagePreview.updateState(newUuid, viewMode);
      Drupal.samePagePreview.updateDom(previewPane, newWindowButton);
    }
  };
})(jQuery, Drupal, once);
