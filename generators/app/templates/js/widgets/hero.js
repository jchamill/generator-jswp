(function($) {
  'use strict';

  $(document).ready(function() {

    $('.hero-slider').slick({
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