/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.ttorTTAtooltip = {
    attach: function (context, settings) {

      const tabs = document.querySelectorAll(".tooltip-trigger");
      const tooltips = document.querySelectorAll(".tooltip-div");

      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          tooltips.forEach(tip => {
            if (tip.classList.contains('show-tooltip')) {
              tip.classList.remove('show-tooltip');
            }
            else {
              tip.classList.add('show-tooltip');
            }
          })
        })
      })
    }
  };

}(Drupal));
