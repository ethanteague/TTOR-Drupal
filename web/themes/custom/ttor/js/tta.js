/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.ttorTTA = {
    attach: function (context, settings) {

      const tabs = document.querySelectorAll(".views-field .views-field-name div");
      const tid5s = document.querySelectorAll(".resource-box.tid-5");
      const tid6s = document.querySelectorAll(".resource-box.tid-6");
      const tid7s = document.querySelectorAll(".resource-box.tid-7");
      const tid8s = document.querySelectorAll(".resource-box.tid-8");
      const defaultTab = document.querySelector(".views-field-name .tid-5");

      const tid5TitleWrap = document.getElementById("wrap-tid-5");
      const tid6TitleWrap = document.getElementById("wrap-tid-6");
      const tid7TitleWrap = document.getElementById("wrap-tid-7");
      const tid8TitleWrap = document.getElementById("wrap-tid-8");
      const reset = () =>{
        document.querySelector(".views-field-name .tid-5")?.classList.remove('default-tab');
        document.querySelector(".views-field-name .tid-6")?.classList.remove('default-tab');
        document.querySelector(".views-field-name .tid-7")?.classList.remove('default-tab');
        document.querySelector(".views-field-name .tid-8")?.classList.remove('default-tab');
      }
      tabs.forEach(tab => {
        tab.addEventListener("click", (t) => {
          reset();

          if (tab.classList.contains("tid-5")) {

            defaultTab?.classList.add('default-tab');
            tid5TitleWrap.style.display = "block";
            tid6TitleWrap.style.display = "none";
            tid7TitleWrap.style.display = "none";
            tid8TitleWrap.style.display = "none";
            tid8s.forEach(tid8 => {
              tid8.style.display = "none";
            })
            tid7s.forEach(tid7 => {
              tid7.style.display = "none";
            })
            tid6s.forEach(tid6 => {
              tid6.style.display = "none";
            })
            tid5s.forEach(tid5 => {
              tid5.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-6")) {

            document.querySelector(".views-field-name .tid-6")?.classList.add('default-tab');
            tid5TitleWrap.style.display = "none";
            tid6TitleWrap.style.display = "block";
            tid7TitleWrap.style.display = "none";
            tid8TitleWrap.style.display = "none";
            tid8s.forEach(tid8 => {
              tid8.style.display = "none";
            })
            tid5s.forEach(tid5 => {
              tid5.style.display = "none";
            })
            tid7s.forEach(tid7 => {
              tid7.style.display = "none";
            })
            tid6s.forEach(tid6 => {
              tid6.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-7")) {

            document.querySelector(".views-field-name .tid-7")?.classList.add('default-tab');
            tid5TitleWrap.style.display = "none";
            tid6TitleWrap.style.display = "none";
            tid7TitleWrap.style.display = "block";
            tid8TitleWrap.style.display = "none";
            tid8s.forEach(tid8 => {
              tid8.style.display = "none";
            })
            tid5s.forEach(tid5 => {
              tid5.style.display = "none";
            })
            tid6s.forEach(tid6 => {
              tid6.style.display = "none";
            })
            tid7s.forEach(tid7 => {
              tid7.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-8")) {

            document.querySelector(".views-field-name .tid-8")?.classList.add('default-tab');
            tid5TitleWrap.style.display = "none";
            tid6TitleWrap.style.display = "none";
            tid7TitleWrap.style.display = "none";
            tid8TitleWrap.style.display = "block";

            tid5s.forEach(tid5 => {
              tid5.style.display = "none";
            })
            tid6s.forEach(tid6 => {
              tid6.style.display = "none";
            })
            tid7s.forEach(tid7 => {
              tid7.style.display = "none";
            })
            tid8s.forEach(tid8 => {
              tid8.style.display = "block";
            })
          }
        })
      });
      window.addEventListener('load', () => {
        defaultTab?.classList.add("default-tab");

        tid6s.forEach(tid6 => {
          tid6.style.display = "none";
        })
        tid7s.forEach(tid7 => {
          tid7.style.display = "none";
        })
        tid8s.forEach(tid8 => {
          tid8.style.display = "none";
        })

      })

    }
  };

}(Drupal));
