(function($) {
  'use strict';

  $(document).ready(function() {
    $('html').removeClass('no-js').addClass('js');

    $('.modal-inline').magnificPopup({
      type: 'inline',
      midClick: true,
      removalDelay: 300,
      mainClass: 'mfp-zoom-in'
    });

    $('.modal-iframe').magnificPopup({
      type: 'iframe',
      iframe: {
        patterns: {
          youtube: {
            index: 'youtube.com',
            id: 'v=',
            src: '//www.youtube.com/embed/%id%?rel=0&autoplay=1'
          }
        }
      }
    });

    $('.jump-to').on('click', function(e) {
      var id = $(this).attr('href');
      if (id.charAt(0) == '#') {
        var $target = $(id);
        if ($target.length) {
          e.preventDefault();
          $('body, html').animate({scrollTop: $target.offset().top}, 600);
        }
      }
    });
  });
})(jQuery);