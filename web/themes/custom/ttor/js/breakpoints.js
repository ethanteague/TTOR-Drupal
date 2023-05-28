/**
 * @file
 * Adds body classes depending on window width.
 *
 */
((Drupal) => {
  Drupal.behaviors.njcourtBreakpoints = {
    attach: function (context, settings) {
      const breakpointTargets = [
        "ttor-breakpoint-sm",
        "ttor-breakpoint-md",
        "ttor-breakpoint-lg",
        "ttor-breakpoint-xl",
        "ttor-breakpoint-xxl",
      ];
      const bodyWidthClasses = () => {
        const body = document.body;
        const width = window.innerWidth;
        body?.classList.add("ttor-breakpoint-mobile");
        body?.classList.remove(...breakpointTargets);
        if (width > 575) {
          body?.classList.remove(...breakpointTargets);
          body?.classList.add("ttor-breakpoint-sm");
        }
        if (width > 767) {
          body?.classList.remove(...breakpointTargets);
          body?.classList.add("ttor-breakpoint-md");
        }
        if (width > 991) {
          body?.classList.remove(...breakpointTargets);
          body?.classList.remove("ttor-breakpoint-mobile");
          body?.classList.add("ttor-breakpoint-lg");
        }
        if (width > 1199) {
          body?.classList.remove(...breakpointTargets);
          body?.classList.add("ttor-breakpoint-xl");
        }
        if (width > 1399) {
          body?.classList.remove(...breakpointTargets);
          body?.classList.add("ttor-breakpoint-xxl");
        }
      };

      window.addEventListener("load", bodyWidthClasses);
      window.addEventListener("resize", bodyWidthClasses);
    },
  };
})(Drupal);
