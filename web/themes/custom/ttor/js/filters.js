/**
 * @file
 * Helpers for form filters.
 *
 */
((Drupal, $) => {
  // Mobile vs not mobile views exposed form filter handling.
  Drupal.behaviors.njcourtFilters = {
    attach: function (context, settings) {
      const filterHandler = () => {
        const form = document.querySelector(".ttor-raw-form");
        const newLocation = document.querySelector(".ttor-new-raw-form-capture");
        const originalWrapper = document.querySelector(".ttor-form-wrapper");
        const originalLocation = document.querySelector(".ttor-original-raw-form-capture");
        if (form && newLocation && !document.body.classList.contains("ttor-breakpoint-mobile")) {
          // Sanity reset.
          document.querySelector(".modal-backdrop")?.remove();
          newLocation?.replaceChildren();
          originalWrapper?.classList.add("d-none");
          newLocation?.classList.remove("d-none");
          newLocation?.appendChild(form);
        }
        else {
          // Sanity reset.
          document.querySelector(".modal-backdrop")?.remove();
          originalLocation?.replaceChildren();
          originalWrapper?.classList.remove("d-none");
          newLocation?.classList.add("d-none");
          originalLocation?.appendChild(form);
        }
      }

      new ResizeObserver(() => {
        filterHandler();
      }).observe(document.body);

      window.addEventListener('load', filterHandler);
      // Non jq method doesn't work https://stackoverflow.com/a/45340510.
      $(document).ajaxComplete(() => {
        filterHandler();
      })
    }
  }

})(Drupal, jQuery);
