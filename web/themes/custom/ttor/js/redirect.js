/**
 * @file
 * Redirect utilities.
 *
 */
(function ($, Drupal, drupalSettings) {
  var timeOutLength = 3 * 1000;
  var isRedirect = drupalSettings.ttor.redirect;
  if(isRedirect && isRedirect != ''){
    setTimeout(function(){
      location.href = isRedirect;
    }, timeOutLength);
  }
})(jQuery, Drupal, drupalSettings);
