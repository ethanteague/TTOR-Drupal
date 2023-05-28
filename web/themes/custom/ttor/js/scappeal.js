(function ($, Drupal) {
    Drupal.behaviors.sccrSetDefaultYear = {
        attach:  function (context, settings) {
            if($("[data-drupal-selector='edit-status']").val() == 'Not Decided' || $("[data-drupal-selector='edit-status']").val() == 'Not Argued'){
                $("[data-drupal-selector^='edit-start']").prop('disabled', 'disabled');
                $("[data-drupal-selector^='edit-end']").prop('disabled', 'disabled');
            }
            $("[data-drupal-selector='edit-status']").on('change', function(e){
                if($("[data-drupal-selector='edit-status']").val() == 'Posted' || $("[data-drupal-selector='edit-status']").val() == 'Argued' || $("[data-drupal-selector='edit-status']").val() == 'Decided'){
                    $("[data-drupal-selector^='edit-start']").removeAttr("disabled");
                    $("[data-drupal-selector^='edit-end']").removeAttr("disabled");
                    var date = new Date();
                    var startDate = new Date(date.setMonth(date.getMonth() - 6));
                    startDate = startDate.getFullYear()+'-'+('0' + (startDate.getMonth()+1)).slice(-2)+'-'+startDate.getDate();
                    var endDate = new Date();
                    endDate = endDate.getFullYear()+'-'+('0' + (endDate.getMonth()+1)).slice(-2)+'-'+endDate.getDate();
                    $("[data-drupal-selector^='edit-start']").val(startDate);
                    $("[data-drupal-selector^='edit-end']").val(endDate);
                } else {
                    $("[data-drupal-selector^='edit-field-case-appeal-dates-']").prop('disabled', 'disabled');
                }
            });
        }
    };
  })(jQuery, Drupal);
