/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {
  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach(context) {
      // Return if not the first attach.
      if (context !== document) {
        return;
      }

      // Fixes for Bootstrap offcanvas menu for scrolling backdrop.
      const offcanvasMenu = document.getElementById("offcanvas-tabbed-menu");
      offcanvasMenu?.addEventListener("hidden.bs.offcanvas", () => {
        document.documentElement.classList.remove("overflow-hidden");
      });
      offcanvasMenu?.addEventListener("show.bs.offcanvas", () => {
        document.documentElement.classList.add("overflow-hidden");
      });

      let position = $(window).scrollTop();
      $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
          $("body").addClass("scrolled");
        } else {
          $("body").removeClass("scrolled");
        }
        const scroll = $(window).scrollTop();
        if (scroll > position) {
          $("body").addClass("scrolldown");
          $("body").removeClass("scrollup");
        } else {
          $("body").addClass("scrollup");
          $("body").removeClass("scrolldown");
        }
        position = scroll;
      });

      // Truncating functionality.
      $(window).resize(truncating);

      // If the view is updated, it will call again Truncating()
      $(document).on(
        "DOMSubtreeModified",
        ".node--view-mode-full .views-element-container .view-filters",
        truncating
      );

      // Initial trigger to attached chevrons.
      $(window).trigger("resize");

      $(document).on("click", ".truncate-arrow-closed", function () {
        $(this).removeClass("truncate-arrow-closed");
        $(this).prev().addClass("open-one-line-truncate");
        $(this).prev().removeClass("one-line-truncate");
        $(this).find("i").removeClass("fa-angle-down");
        $(this).find("i").addClass("fa-angle-up");
        $(this).addClass("truncate-arrow-open");
      });
      $(document).on("click", ".truncate-arrow-open", function () {
        $(this).removeClass("truncate-arrow-open");
        $(this).addClass("truncate-arrow-closed");
        $(this).prev().addClass("one-line-truncate");
        $(this).prev().removeClass("open-one-line-truncate");
        $(this).find("i").removeClass("fa-angle-up");
        $(this).find("i").addClass("fa-angle-down");
      });
    },
  };

  // Prepare NJ Courts Mega Menu
  Drupal.behaviors.ttor_mega_menu = {
    attach(context) {
      // Return if not the first attach.
      if (context !== document) {
        return;
      }

      $(document).on("click", ".ttor-mobile-icon", function () {
        if ($(this).parent("div").hasClass("ttor-mobile-closed")) {
          $(this).parent("div").removeClass("ttor-mobile-closed");
          $(this).parent("div").addClass("ttor-mobile-open");
          $("html").css("overflow", "hidden");
        } else {
          $(this).parent("div").removeClass("ttor-mobile-open");
          $(this).parent("div").addClass("ttor-mobile-closed");
          $("html").css("overflow", "auto");
        }

        // Attach chevron right to all top level items
        $("li.tb-megamenu-item.level-1").each(function () {
          // Only add to items that have sub menu
          if ($(this).hasClass("sub-hidden-collapse")) {
            if (
              !$(this)
                .children("a:first")
                .children("i")
                .hasClass("ttor-sub-chevron")
            ) {
              $(this)
                .children("a:first")
                .append(
                  '<i class="fas fa-chevron-right align-middle ttor-sub-chevron"></i>'
                );
            }
          }

          if ($(this).hasClass("active-trail")) {
            $(this).children("a:first").children("i").hide();
          }
        });
      });

      // Do stuff when clicking the back button
      $("a.ttor-menu-back-link").click(function (e) {
        // Put chevron back on level-1 item
        $("li.active-trail").children("a:first").children("i").show();

        // If on active go back and show all level-1 items
        if ($("li.active-trail").children("a").hasClass("active-trail")) {
          e.preventDefault();
          $("li.active-trail").children("a").removeClass("active-trail");
          $("li.active-trail").removeClass("active-trail");
          $("li.tb-megamenu-item.level-1").each(function () {
            if ($(this).hasClass("ttor-hide-for-sub")) {
              $(this).removeClass("ttor-hide-for-sub");
            }
          });

          // Hide Active trail's list
          $("li.active-trail")
            .children("div.tb-megamenu-submenu")
            .attr("style", "display:none!important");
        }
      });

      // Check if we have an active-trail, and hide all other level 1 items
      if ($("li.active-trail").children("a").hasClass("active-trail")) {
        $("li.tb-megamenu-item.level-1").each(function () {
          if (!$(this).hasClass("active-trail")) {
            $(this).addClass("ttor-hide-for-sub");
          }
        });
      }

      // If showing top levels and we want to expand level-1
      $("li.tb-megamenu-item.level-1 a.dropdown-toggle").click(function (e) {
        const $item = $(this).parent();

        if (
          !$item.hasClass("active-trail") &&
          $item.hasClass("sub-hidden-collapse")
        ) {
          // If mobile we don't want to jump to page initially.
          const isMobile = document.querySelector(".nav-collapse.collapse");
          if (isMobile) {
            e.preventDefault();
          }
          $item.addClass("active-trail");
          $item.children("a:first").addClass("active-trail");
          $item.children("a:first").children("i").hide();
          $(".ttor-menu-back-link").children("i").show();

          // Hide sub menus of other level-1
          $("li.tb-megamenu-item.level-1").each(function () {
            if (!$(this).hasClass("active-trail")) {
              $(this).addClass("ttor-hide-for-sub");
            }
          });
        }
        // if active trail, go to that page.
        else {
        }
      });
    },
  };

  // Using ResizeObserver, much better performance than window resize.
  // We observe class changes on the body element for breakpoint classes.
  var ro = new ResizeObserver(() => {
    document.querySelector('body')?.classList?.contains('ttor-breakpoint-mobile') ? mobileBreakpoint() : desktopBreakpoint();
  });

  // Observe for class changes on body and mobile element.
  ro.observe(document.querySelector('body'));

  // This function gets called when resizing and in a mobile query.
  function mobileBreakpoint() {
    const desktopTranslate = document.querySelector('#block-googletranslator #google_translator_element');
    if (desktopTranslate) {
      document.querySelector('.ttor-mobile-search')?.prepend(desktopTranslate);
    }
  }

  // This function gets called when resizing and in a desktop query.
  function desktopBreakpoint() {
    const mobileTranslate = document.querySelector('.ttor-mobile-search #google_translator_element');
    if (mobileTranslate) {
      document.querySelector('#block-googletranslator .content')?.prepend(mobileTranslate);
    }
  }

  function truncating() {
    $(document)
      .find(".one-line-truncate")
      .each(function () {
        if ($(this)[0].scrollWidth > $(this)[0].clientWidth) {
          // Is being truncated, we need to add the chevron if it does not exist already.
          if (!$(this).next().hasClass("truncating")) {
            $(this).after(
              '<div class="truncate-arrow-closed float-right collapsed truncating"><i class="fas fa-angle-down"></i></div>'
            );
          }
        } else {
          // Has chevron but is not longer truncating, we need to remove.
          if ($(this).next().hasClass("truncating")) {
            $(this).next().remove();
          }
        }
      });
  }
})(jQuery, Drupal);
