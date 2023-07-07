/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.ttorResourcesSpanish = {
    attach: function (context, settings) {
      const tabs = document.querySelectorAll(".views-field .views-field-name div");
      const tid9s = document.querySelectorAll(".resource-box.tid-9");
      const tid10s = document.querySelectorAll(".resource-box.tid-10");
      const tid11s = document.querySelectorAll(".resource-box.tid-11");

      const tid9TitleWrap = document.getElementById("wrap-tid-9");
      const tid10TitleWrap = document.getElementById("wrap-tid-10");
      const tid11TitleWrap = document.getElementById("wrap-tid-11");
      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          if (tab.classList.contains("tid-9")) {
            tid9TitleWrap.style.display = "block";
            tid10TitleWrap.style.display = "none";
            tid11TitleWrap.style.display = "none";
            tid11s.forEach(tid11 => {
              tid11.style.display = "none";
            })
            tid10s.forEach(tid10 => {
              tid10.style.display = "none";
            })
            tid9s.forEach(tid9 => {
              tid9.style.display = "grid";
            })
          }
          if (tab.classList.contains("tid-10")) {
            tid9TitleWrap.style.display = "none";
            tid10TitleWrap.style.display = "block";
            tid11TitleWrap.style.display = "none";
            tid9s.forEach(tid9 => {
              tid9.style.display = "none";
            })
            tid11s.forEach(tid11 => {
              tid11.style.display = "none";
            })
            tid10s.forEach(tid10 => {
              tid10.style.display = "grid";
            })
          }
          if (tab.classList.contains("tid-11")) {
            tid9TitleWrap.style.display = "none";
            tid10TitleWrap.style.display = "none";
            tid11TitleWrap.style.display = "block";
            tid9s.forEach(tid9 => {
              tid9.style.display = "none";
            })
            tid10s.forEach(tid10 => {
              tid10.style.display = "none";
            })
            tid11s.forEach(tid11 => {
              tid11.style.display = "grid";
            })
          }
        })
      });

      window.addEventListener('load', () => {
        tid9s.forEach(tid9 => {
          tid9.classList.add('show-tab')
        })
        tid10s.forEach(tid10 => {
          tid10.style.display = "none";
        })
        tid11s.forEach(tid11 => {
          tid11.style.display = "none";
        })
      })

      window.addEventListener('click', () => {
        tid9s.forEach(tid9 => {
          tid9.classList.remove('show-tab')
        })
      })

    }
  };

}(Drupal));
