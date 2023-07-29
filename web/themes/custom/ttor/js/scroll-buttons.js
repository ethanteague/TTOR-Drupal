/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.scrollButtons = {
    attach: function () {

      const downButton = document.getElementById("scroll-down-js");
      const upButton = document.getElementById("scroll-up-js");
      const scrollButton = () => {
        const scrollLimit = 300;
        window.onscroll = () => {
          if (window.scrollY >= scrollLimit && (window.innerHeight + window.scrollY) < document.body.scrollHeight) {
            downButton?.classList.add("show-button");
            upButton?.classList.remove("show-button");
          }
          else if ((window.innerHeight + window.scrollY) >= document.body.scrollHeight) {
            downButton?.classList.remove("show-button");
            upButton?.classList.add("show-button");
          }
          else {
            downButton?.classList.remove("show-button");
            upButton?.classList.remove("show-button");
          }
        }
        downButton?.addEventListener("click", () => {
          window.scrollBy(0, 1000);
        })
        upButton?.addEventListener("click", () => {
          window.scrollTo(0, 0);
        })
      }

      window.addEventListener('load', scrollButton);

    }
  }

}(Drupal));
