/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal, once) {

  'use strict';

  Drupal.behaviors.ttorResourcesSpanish = {
    attach: function (context, settings) {
      // Only run on Spanish pages with resources.
      if (!document.querySelector('.spanish') || !document.querySelector('.view-resources-list-spanish')) {
        return;
      }

      const tabs = once('spanish-resources-tabs', ".views-field .views-field-name div[class^='tid-']", context);
      if (!tabs.length) {
        return;
      }

      // Get all unique tids from both tabs and resource boxes.
      const tidSet = new Set();
      tabs.forEach(tab => {
        tab.classList.forEach(cls => {
          if (cls.startsWith('tid-')) {
            tidSet.add(cls.replace('tid-', ''));
          }
        });
      });
      document.querySelectorAll(".resource-box").forEach(box => {
        box.classList.forEach(cls => {
          if (cls.startsWith('tid-')) {
            tidSet.add(cls.replace('tid-', ''));
          }
        });
      });
      const tids = Array.from(tidSet);

      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          // Mark clicked tab as active.
          tabs.forEach(t => t.classList.remove('default-tab'));
          tab.classList.add('default-tab');

          // Find which tid this tab represents.
          const tabTid = tids.find(tid => tab.classList.contains('tid-' + tid));
          if (tabTid) {
            // Hide all title wraps and resource boxes.
            tids.forEach(tid => {
              const titleWrap = document.getElementById("wrap-tid-" + tid);
              if (titleWrap) {
                titleWrap.style.display = "none";
              }
              document.querySelectorAll(".resource-box.tid-" + tid).forEach(box => {
                box.style.display = "none";
              });
            });
            // Show the selected category's title wrap and resource boxes.
            const selectedTitleWrap = document.getElementById("wrap-tid-" + tabTid);
            if (selectedTitleWrap) {
              selectedTitleWrap.style.display = "block";
            }
            document.querySelectorAll(".resource-box.tid-" + tabTid).forEach(box => {
              box.style.display = "grid";
            });
          }
        });
      });

      // Select the first tab on load.
      if (tabs[0]) {
        tabs[0].click();
      }

    }
  };

}(Drupal, once));
