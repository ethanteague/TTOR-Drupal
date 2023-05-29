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


      const tid12TitleWrap = document.getElementById("wrap-tid-12");
      const tid13TitleWrap = document.getElementById("wrap-tid-13");
      const tid14TitleWrap = document.getElementById("wrap-tid-14");
      const tid15TitleWrap = document.getElementById("wrap-tid-15");
      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          if (tab.classList.contains("tid-12")) {
            console.log(tab)
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
              tid12.style.display = "grid";
            })
          }
          if (tab.classList.contains("tid-13")) {
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
              tid13.style.display = "grid";
            })
          }
          if (tab.classList.contains("tid-14")) {
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
              tid14.style.display = "grid";
            })
          }


          if (tab.classList.contains("tid-15")) {
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
              tid15.style.display = "grid";
            })
          }
        })
      });

    }
  };

}(Drupal));
