/**
 * @file
 * Treatments for pagers in mobile widths.
 */
(function (Drupal) {
  'use strict';

  Drupal.behaviors.mobilePager = {
    attach: function () {
      const pager = document.querySelectorAll(".pagination.js-pager__items li.page-item");
      pager.forEach(page => {
        console.log(page);
      });
    }
  };
})(Drupal);
