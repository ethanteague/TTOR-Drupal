/**
 * @file
 * ttor_custom behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.ttorToolkitSpanish = {
    attach: function (context, settings) {
      const tabs = document.querySelectorAll(".views-field .views-field-name div");
      const tid19s = document.querySelectorAll(".resource-box.tid-19");
      const tid20s = document.querySelectorAll(".resource-box.tid-20");
      const tid21s = document.querySelectorAll(".resource-box.tid-21");
      const blockTitle = document.querySelector('.spanish #download-h2-text');
      const header = document.querySelector('.view-too .view-header');

      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          if (tab.classList.contains("tid-19")) {
            tid21s.forEach(tid21 => {
              tid21.parentNode.style.display = "none";
            })
            blockTitle.innerHTML = "Descargar Powerpoints";
            tid20s.forEach(tid20 => {
              tid20.parentNode.style.display = "none";
            })
            tid19s.forEach(tid19 => {
              tid19.parentNode.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-20")) {
            tid19s.forEach(tid19 => {
              tid19.parentNode.style.display = "none";
            })
            blockTitle.innerHTML = "Descargar Guías del kit de herramientas";
            tid21s.forEach(tid21 => {
              tid21.parentNode.style.display = "none";
            })
            tid20s.forEach(tid20 => {
              tid20.parentNode.style.display = "block";
            })
          }
          if (tab.classList.contains("tid-21")) {
            tid19s.forEach(tid19 => {
              tid19.parentNode.style.display = "none";
            })
            blockTitle.innerHTML = "Descargar Hojas Informativas";
            tid20s.forEach(tid20 => {
              tid20.parentNode.style.display = "none";
            })
            tid21s.forEach(tid21 => {
              tid21.parentNode.style.display = "block";
            })
          }
        })
      });

      window.addEventListener('load', () => {
        tid19s.forEach(tid19 => {
          tid19.parentNode.classList.add('show-tab')
        })
        tid20s.forEach(tid20 => {
          tid20.parentNode.style.display = "block";
        })
        tid21s.forEach(tid21 => {
          tid21.parentNode.style.display = "block";
        })
      })

      window.addEventListener('click', () => {
        tid19s.forEach(tid19 => {
          tid19.parentNode.classList.remove('show-tab')
        })
      })


      header.addEventListener('click', () => {
        tid19s.forEach(tid19 => {
          tid19.parentNode.classList.add('show-tab')
        })
        tid20s.forEach(tid20 => {
          tid20.parentNode.style.display = "block";
        })
        tid21s.forEach(tid21 => {
          tid21.parentNode.style.display = "block";
        })
        blockTitle.innerHTML = "Todos los Materiales";
      })

    }
  };

}(Drupal));
