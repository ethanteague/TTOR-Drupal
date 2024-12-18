/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.ttorTTAspanish = {
    attach: function (context, settings) {
      const tabs = document.querySelectorAll(".views-field .views-field-name div");
      const tid12s = document.querySelectorAll(".resource-box.tid-12");
      const tid13s = document.querySelectorAll(".resource-box.tid-13");
      const tid14s = document.querySelectorAll(".resource-box.tid-14");
      const tid15s = document.querySelectorAll(".resource-box.tid-15");
      const defaultTabEs = document.querySelector(".views-field-name .tid-12");
      const defaultTitleEs = document.getElementById("wrap-tid-12");

      const tid12TitleWrap = document.getElementById("wrap-tid-12");
      const tid13TitleWrap = document.getElementById("wrap-tid-13");
      const tid14TitleWrap = document.getElementById("wrap-tid-14");
      const tid15TitleWrap = document.getElementById("wrap-tid-15");

      const reset = () => {
        document.querySelector(".views-field-name .tid-12")?.classList.remove('default-tab');
        document.querySelector(".views-field-name .tid-13")?.classList.remove('default-tab');
        document.querySelector(".views-field-name .tid-14")?.classList.remove('default-tab');
        document.querySelector(".views-field-name .tid-15")?.classList.remove('default-tab');
      }
      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          reset();

          if (tab.classList.contains("tid-12")) {

            defaultTabEs?.classList.add('default-tab');
            tid12TitleWrap.style.display = "block";
            tid13TitleWrap.style.display = "none";
            tid14TitleWrap.style.display = "none";
            tid15TitleWrap.style.display = "none";
            tid15s.forEach(tid15 => {
              tid15.style.display = "none";
            })
            tid14s.forEach(tid14 => {
              tid14.style.display = "none";
            })
            tid13s.forEach(tid13 => {
              tid13.style.display = "none";
            })
            tid12s.forEach(tid12 => {
              tid12.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-13")) {
            document.querySelector(".views-field-name .tid-13")?.classList.add('default-tab');

            tid12TitleWrap.style.display = "none";
            tid13TitleWrap.style.display = "block";
            tid14TitleWrap.style.display = "none";
            tid15TitleWrap.style.display = "none";
            tid15s.forEach(tid15 => {
              tid15.style.display = "none";
            })
            tid12s.forEach(tid12 => {
              tid12.style.display = "none";
            })
            tid14s.forEach(tid14 => {
              tid14.style.display = "none";
            })
            tid13s.forEach(tid13 => {
              tid13.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-14")) {
            document.querySelector(".views-field-name .tid-14")?.classList.add('default-tab');

            tid12TitleWrap.style.display = "none";
            tid13TitleWrap.style.display = "none";
            tid14TitleWrap.style.display = "block";
            tid15TitleWrap.style.display = "none";
            tid15s.forEach(tid15 => {
              tid15.style.display = "none";
            })
            tid12s.forEach(tid12 => {
              tid12.style.display = "none";
            })
            tid13s.forEach(tid13 => {
              tid13.style.display = "none";
            })
            tid14s.forEach(tid14 => {
              tid14.style.display = "block";
            })
          }

          if (tab.classList.contains("tid-15")) {
            document.querySelector(".views-field-name .tid-15")?.classList.add('default-tab');

            tid12TitleWrap.style.display = "none";
            tid13TitleWrap.style.display = "none";
            tid14TitleWrap.style.display = "none";
            tid15TitleWrap.style.display = "block";

            tid12s.forEach(tid12 => {
              tid12.style.display = "none";
            })
            tid13s.forEach(tid13 => {
              tid13.style.display = "none";
            })
            tid14s.forEach(tid14 => {
              tid14.style.display = "none";
            })
            tid15s.forEach(tid15 => {
              tid15.style.display = "block";
            })
          }
        })
      });
      window.addEventListener('load', () => {
        defaultTabEs?.classList.add("default-tab");
        defaultTitleEs?.classList.add("default-tab-title");

        tid13s.forEach(tid13 => {
          tid13.style.display = "none";
        })
        tid14s.forEach(tid14 => {
          tid14.style.display = "none";
        })
        tid15s.forEach(tid15 => {
          tid15.style.display = "none";
        })
      })

    }
  };

}(Drupal));
