/**
 * @file
 * Global utilities.
 *
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.bootstrap_sass_starter_kit = {
    attach: function (context, settings) {

      var position = window.scrollY;
      window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
          document.querySelector('body').classList.add("scrolled");
        }
        else {
          document.querySelector('body').classList.remove("scrolled");
        }
        var scroll = window.scrollY;
        if (scroll > position) {
          document.querySelector('body').classList.add("scrolldown");
          document.querySelector('body').classList.remove("scrollup");
        } else {
          document.querySelector('body').classList.add("scrollup");
          document.querySelector('body').classList.remove("scrolldown");
        }
        position = scroll;
      });

      document.addEventListener('click', function (event) {

        // If the clicked element doesn't have the right selector, bail
        if (!event.target.matches('.dropdown-item a.dropdown-toggle')) return;

        // Don't follow the link
        event.preventDefault();

        toggle(event.target.next('ul'));
        event.stopPropagation();

      }, false);

      // Toggle element visibility
      var toggle = function (elem) {

        // If the element is visible, hide it
        if (window.getComputedStyle(elem).display === 'block') {
          hide(elem);
          return;
        }

        // Otherwise, show it
        show(elem);

      };

      var show = function (elem) {
        elem.style.display = 'block';
      };

      var hide = function (elem) {
        elem.style.display = 'none';
      };
      
      /**
      * Theme override of the ajax progress indicator for full screen.
      *
      * @return {string}
      *   The HTML markup for the throbber.
      */
      Drupal.theme.ajaxProgressIndicatorFullscreen = () =>
        '<div class="ajax-progress ajax-progress-fullscreen spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>';

      /**
      * Theme override of the tooltips.
      */
      once('tooltips', '[data-bs-toggle="tooltip"]', context).forEach(
        function (element) {
          return new bootstrap.Tooltip(element)
        }
      )

    }
  };

})(Drupal);
