/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.ttorToolkit = {
    attach: function (context, settings) {
      const tabs = document.querySelectorAll(".views-field .views-field-name div");
      const tid16s = document.querySelectorAll(".resource-box.tid-16");
      const tid17s = document.querySelectorAll(".resource-box.tid-17");
      const tid18s = document.querySelectorAll(".resource-box.tid-18");
      const blockTitle = document.getElementById('download-h2-text');
      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          if (tab.classList.contains("tid-16")) {
            tid18s.forEach(tid18 => {
              tid18.style.display = "none";
            })
            blockTitle.innerHTML = "Download Toolkit Guides";
            tid17s.forEach(tid17 => {
              tid17.style.display = "none";
            })
            tid16s.forEach(tid16 => {
              tid16.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-17")) {
            tid16s.forEach(tid16 => {
              tid16.style.display = "none";
            })
            blockTitle.innerHTML = "Download Powerpoints";
            tid18s.forEach(tid18 => {
              tid18.style.display = "none";
            })
            tid17s.forEach(tid17 => {
              tid17.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-18")) {
            tid16s.forEach(tid16 => {
              tid16.style.display = "none";
            })
            blockTitle.innerHTML = "Download Factsheets";
            tid17s.forEach(tid17 => {
              tid17.style.display = "none";
            })
            tid18s.forEach(tid18 => {
              tid18.style.display = "block";
            })
          }
        })
      });

      window.addEventListener('load', () => {
        tid16s.forEach(tid16 => {
          tid16.classList.add('show-tab')
        })
        tid17s.forEach(tid17 => {
          tid17.style.display = "none";
        })
        tid18s.forEach(tid18 => {
          tid18.style.display = "none";
        })
      })

      window.addEventListener('click', () => {
        tid16s.forEach(tid16 => {
          tid16.classList.remove('show-tab')
        })
      })

    }
  };

}(Drupal));
