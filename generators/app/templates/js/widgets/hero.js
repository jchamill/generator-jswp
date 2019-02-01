(function($) {
  'use strict';

  $(document).ready(function() {

    $('.so-widget-js-core-hero').slick({
      adaptiveHeight: true,
      autoplay: true,
      autoplaySpeed: 7000,
      slidesToShow: 1,
      fade: true,
      cssEase: 'linear',
      dots: true,
      infinite: true,
      arrows: false,
      mobileFirst: true
    });
  });

})(jQuery);