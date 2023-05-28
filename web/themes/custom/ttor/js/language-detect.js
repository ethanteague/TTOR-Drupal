/**
 * @file
 * Adds body classes depending on window width.
 *
 */
((Drupal) => {
  Drupal.behaviors.languageDetect = {
    attach: function (context) {
      // Return if not the first attach.
      if (context !== document) {
        return;
      }

      // Register for cookie changes for google translate to grab current language.
      // Reload page to send new request so language is set.
      let checkCookie = (name) => {
        let lastCookie = getCookie(name);
        return () => {
          let currentCookie = getCookie(name);
          if (currentCookie != lastCookie) {
            lastCookie = currentCookie;
            if ("URLSearchParams" in window) {
              const searchParams = new URLSearchParams(window.location.search);
              searchParams.set("language", lastCookie);
              window.location.search = searchParams.toString();
            }
          }
        };
      };

      // Check for cookie changes in google translate.
      window.setInterval(checkCookie("googtrans"), 200);

      // Parse cookie by name and get value.
      function getCookie(name) {
        const cookies = RegExp(name + "=[^;]+").exec(document.cookie);
        let cookie = decodeURIComponent(
          !!cookies ? cookies.toString().replace(/^.*[\/\\]/, "") : ""
        );
        cookie = cookie.replace(/pt/, "pt-br");
        return cookie;
      }
    },
  };
})(Drupal);
