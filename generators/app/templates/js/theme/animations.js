(function($) {
  'use strict';

  $(document).ready(function() {

    var controller = new ScrollMagic.Controller();

    $('.anim-fade-up').each(function(index, elem) {
      var delay = $(elem).data('anim-delay') || 0;
      var headerTween = TweenMax.fromTo(elem, 0.25, {y: 10, opacity: 0 }, {y: 0, opacity: 1, delay: delay, ease: Linear.easeNone});
      new ScrollMagic.Scene({
        triggerElement: elem,
        offset: 100,
        triggerHook: 'onEnter'
      })
        .setTween(headerTween)
        .addTo(controller);
    });

  });
})(jQuery);