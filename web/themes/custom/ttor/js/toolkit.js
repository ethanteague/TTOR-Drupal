/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.ttorToolkit = {
    attach: function (context, settings) {
      // Only run on English toolkit pages.
      if (!document.querySelector('.english') || !document.querySelector('.view-too')) {
        return;
      }

      const tabs = document.querySelectorAll(".views-field .views-field-name div");
      const tid16s = document.querySelectorAll(".resource-box.tid-16");
      const tid17s = document.querySelectorAll(".resource-box.tid-17");
      const tid18s = document.querySelectorAll(".resource-box.tid-18");
      const blockTitle = document.querySelector('.english #download-h2-text');
      const header = document.querySelector('.view-too .view-header');

      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          if (tab.classList.contains("tid-16")) {
            tid18s.forEach(tid18 => {
              tid18.parentNode.style.display = "none";
            })
            blockTitle.innerHTML = "Download Toolkit Guides";
            tid17s.forEach(tid17 => {
              tid17.parentNode.style.display = "none";
            })
            tid16s.forEach(tid16 => {
              tid16.parentNode.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-17")) {
            tid16s.forEach(tid16 => {
              tid16.parentNode.style.display = "none";
            })
            blockTitle.innerHTML = "Download Powerpoints";
            tid18s.forEach(tid18 => {
              tid18.parentNode.style.display = "none";
            })
            tid17s.forEach(tid17 => {
              tid17.parentNode.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-18")) {
            tid16s.forEach(tid16 => {
              tid16.parentNode.style.display = "none";
            })
            blockTitle.innerHTML = "Download Factsheets";
            tid17s.forEach(tid17 => {
              tid17.parentNode.style.display = "none";
            })
            tid18s.forEach(tid18 => {
              tid18.parentNode.style.display = "block";
            })
          }
        })
      });

      window.addEventListener('load', () => {
        tid16s.forEach(tid16 => {
          tid16.parentNode.classList.add('show-tab')
        })
        tid17s.forEach(tid17 => {
          tid17.parentNode.style.display = "block";
        })
        tid18s.forEach(tid18 => {
          tid18.parentNode.style.display = "block";
        })
      })

      window.addEventListener('click', () => {
        tid16s.forEach(tid16 => {
          tid16.parentNode.classList.remove('show-tab')
        })
      })

      header.addEventListener('click', () => {
        tid16s.forEach(tid16 => {
          tid16.parentNode.style.display = "block";
        })
        tid17s.forEach(tid17 => {
          tid17.parentNode.style.display = "block";
        })
        tid18s.forEach(tid18 => {
          tid18.parentNode.style.display = "block";
        })
        blockTitle.innerHTML = "Download Materials";
      })

    }
  };

}(Drupal));
