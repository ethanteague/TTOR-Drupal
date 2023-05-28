(function ($, Drupal) {
  Drupal.behaviors.modalPause = {
    attach: function (context, settings) {
      $('.modal-pause').on('hidden.bs.modal', function (e) {
        $('.modal-pause video').each(function() {
          $(this).get(0).pause();
        });
      });
    }
  };
})(jQuery, Drupal);
