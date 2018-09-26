(function($) {
  'use strict';

  $(document).ready(function() {
    $('#menu-toggle').on('click', function() {
      $('body').addClass('open');
    });

    $('#mobile-close').on('click', function() {
      $('body').removeClass('open');
    });

    $('#menu-primary .search-toggle').on('click', function (e) {
      e.preventDefault();
      $('body').toggleClass('search-open');
      $('.search-field:first').focus();
    });

    $('#search-close').on('click', function() {
      $('body').removeClass('search-open');
    });
  });
})(jQuery);