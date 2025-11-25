Drupal.behaviors.clnMicroModal = {
  attach(context, settings) {
    const mm =
      context.classList && context.classList.contains('modal')
        ? [context]
        : context.querySelectorAll('.modal');
    // Need this to stop the video on iframe close.
    function resetIframe(element) {
      let iframe = element.querySelector('iframe');
      if (iframe !== null) {
        let iframeSrc = iframe.src;
        iframe.src = iframeSrc;
      }
    }
    if (mm.length === 0) {
      return;
    }
    MicroModal.init({
      onClose: function (modal) {
        resetIframe(modal);
      },
    });
  },
};
