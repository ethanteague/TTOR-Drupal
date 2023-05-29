/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.ttorTTAtooltip = {
    attach: function (context, settings) {

      const tab = document.querySelector(".tooltip-trigger");
      const tooltip = document.querySelector(".tooltip-div");
      tab.addEventListener("mouseenter", (e) => {
        tooltip.classList.add('show-tooltip')
      })
      tab.addEventListener("mouseleave", (e) => {
        tooltip.classList.remove('show-tooltip')
      })
    }
  };

}(Drupal));
