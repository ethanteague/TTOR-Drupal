/**
 * @file
 * Same Page Preview javascript for settings page.
 */

((Drupal, once) => {
  Drupal.samePagePreviewAdmin = {
    // Expand this list for additional settings.
    settings: [
      {
        storageName: 'Drupal.samePagePreview.onByDefault',
        selector: '#edit-preview-on-by-default',
      },
    ],

    init: () => {
      Drupal.samePagePreviewAdmin.settings.forEach((setting) =>
        Drupal.samePagePreviewAdmin.getPersonalizedSetting(setting),
      );
    },

    // All personalization settings are expected to be checkboxes.
    getPersonalizedSetting: (setting) => {
      const element = document.querySelector(setting.selector);
      element.checked = localStorage.getItem(setting.storageName) === '1';
      element.addEventListener('change', () =>
        localStorage.setItem(setting.storageName, element.checked ? 1 : 0),
      );
    },
  };

  Drupal.behaviors.samePagePreviewAdmin = {
    attach(context) {
      once('samePagePreviewAdmin', context).forEach(() =>
        Drupal.samePagePreviewAdmin.init(),
      );
    },
  };
})(Drupal, once);
