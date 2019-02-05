(function($) {
  'use strict';

  var last_scroll_top = 0;

  $(document).ready(function() {
    $(window).scroll(function() {
      debounce(function() {
        var header_height = 110;
        var unfix_threshold = 1;
        if ($('#breakpoint').css('display') == 'none') {
          header_height = 65;
          unfix_threshold = 1;
        }
        var scroll_top = $(window).scrollTop();
        var $body = $('body');

        if (scroll_top > header_height) {
          $body.addClass('fixed-header');
          if (scroll_top > last_scroll_top) {
            $body.removeClass('search-open');
          }
        }

        if (scroll_top >= unfix_threshold && scroll_top < last_scroll_top) {
          $body.addClass('slide-header');
        } else {
          $body.removeClass('slide-header');
          if (scroll_top <= unfix_threshold) {
            $body.removeClass('fixed-header');
          }
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