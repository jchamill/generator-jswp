/**
 * Theme functions file.
 */

(function($) {

  'use strict';

  var last_scroll_top = 0;
  var header_threshold = 400;
  var header_locked = false;

  $(document).ready(function() {
    $('html').removeClass('no-js').addClass('js');

    $('#menu-toggle').on('click', function() {
      $('body').toggleClass('open');
      header_locked = !header_locked;
    });

    $('.modal-inline').magnificPopup({
      type: 'inline',
      midClick: true,
      removalDelay: 300,
      mainClass: 'mfp-zoom-in'
    });

    $('.modal-iframe').magnificPopup({
      type: 'iframe'
    });

    //header_height = $('#site-header').outerHeight();

    $(window).scroll(function() {
      debounce(function() {
        var scroll_top = $(window).scrollTop();
        var $body = $('body');

        if (!header_locked && scroll_top > header_threshold) {
          $body.addClass('slide-header');
          if (scroll_top > last_scroll_top) {
            $body.removeClass('search-open');
          }
        }

        if (scroll_top < last_scroll_top) {
          $body.removeClass('slide-header');
        }
        last_scroll_top = scroll_top;
      }, 200, true)();
    });
  });

  /**
   * Returns a function, that, as long as it continues to be invoked, will not
   * be triggered. The function will be called after it stops being called for
   * N milliseconds. If 'immediate' is passed, trigger the function on the
   * leading edge, instead of the trailing.
   */
  function debounce(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  }
})(jQuery);
