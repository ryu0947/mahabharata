jQuery(function ($) {
  const target = $(".js-animation");
  $(window).on("scroll", function () {
    $(target).each(function () {
      const scroll = $(window).scrollTop();
      const winHeight = $(window).height();
      const targetHeight = $(this).offset().top;

      if (scroll > targetHeight - winHeight) {
        $(this).addClass("show");
      }
    });
  });
});
