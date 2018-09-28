(function($) {
  'use strict';

  $(document).ready(function() {
    $('html').removeClass('no-js').addClass('js');

    //AOS.init();

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
  });
})(jQuery);