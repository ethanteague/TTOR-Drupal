/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.ttorResources = {
    attach: function (context, settings) {
      const tabs = document.querySelectorAll(".views-field .views-field-name div");
      const tid2s = document.querySelectorAll(".resource-box.tid-2");
      const tid3s = document.querySelectorAll(".resource-box.tid-3");
      const tid4s = document.querySelectorAll(".resource-box.tid-4");

      const tid2TitleWrap = document.getElementById("wrap-tid-2");
      const tid3TitleWrap = document.getElementById("wrap-tid-3");
      const tid4TitleWrap = document.getElementById("wrap-tid-4");
      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          if (tab.classList.contains("tid-2")) {
            tid2TitleWrap.style.display = "block";
            tid3TitleWrap.style.display = "none";
            tid4TitleWrap.style.display = "none";
            tid4s.forEach(tid4 => {
              tid4.style.display = "none";
            })
            tid3s.forEach(tid3 => {
              tid3.style.display = "none";
            })
            tid2s.forEach(tid2 => {
              tid2.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-3")) {
            tid2TitleWrap.style.display = "none";
            tid3TitleWrap.style.display = "block";
            tid4TitleWrap.style.display = "none";
            tid2s.forEach(tid2 => {
              tid2.style.display = "none";
            })
            tid4s.forEach(tid4 => {
              tid4.style.display = "none";
            })
            tid3s.forEach(tid3 => {
              tid3.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-4")) {
            tid2TitleWrap.style.display = "none";
            tid3TitleWrap.style.display = "none";
            tid4TitleWrap.style.display = "block";
            tid2s.forEach(tid2 => {
              tid2.style.display = "none";
            })
            tid3s.forEach(tid3 => {
              tid3.style.display = "none";
            })
            tid4s.forEach(tid4 => {
              tid4.style.display = "block";
            })
          }
        })
      });

      window.addEventListener('load', () => {
        tid2s.forEach(tid2 => {
          tid2.classList.add('show-tab')
        })
        tid3s.forEach(tid3 => {
          tid3.style.display = "none";
        })
        tid4s.forEach(tid4 => {
          tid4.style.display = "none";
        })
      })

      window.addEventListener('click', () => {
        tid2s.forEach(tid2 => {
          tid2.classList.remove('show-tab')
        })
      })

    }
  };

}(Drupal));
