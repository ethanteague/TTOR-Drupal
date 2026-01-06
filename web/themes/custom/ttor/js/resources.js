/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.ttorResources = {
    attach: function (context, settings) {
      // Only run on English pages with the resources list view.
      if (!document.querySelector('.english') || !document.querySelector('.view-resources-list')) {
        return;
      }

      const tabs = document.querySelectorAll(".views-field .views-field-name div");
      const resourceBoxes = document.querySelectorAll(".resource-box");

      // Get all unique tid classes from resource boxes.
      const tidSet = new Set();
      resourceBoxes.forEach(box => {
        box.classList.forEach(cls => {
          if (cls.startsWith('tid-')) {
            tidSet.add(cls.replace('tid-', ''));
          }
        });
      });
      const tids = Array.from(tidSet);

      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
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
              box.style.display = "block";
            });
          }
        });
      });

      window.addEventListener('load', () => {
        // Show all categories by default.
        tids.forEach((tid) => {
          document.querySelectorAll(".resource-box.tid-" + tid).forEach(box => {
            box.classList.add('show-tab');
          });
        });
      })

      window.addEventListener('click', () => {
        document.querySelectorAll(".resource-box").forEach(box => {
          box.classList.remove('show-tab');
        });
      })

    }
  };

}(Drupal));
