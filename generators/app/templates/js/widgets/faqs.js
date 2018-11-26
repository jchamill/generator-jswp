(function($) {
  $('.faq-question').click(function() {
    var $item = $(this).closest('.faq');
    if ($item.hasClass('faq-open')) {
      $item.removeClass('faq-open');
    } else {
      $('.faq-open').removeClass('faq-open');
      $item.addClass('faq-open');
    }
  });
})(jQuery);