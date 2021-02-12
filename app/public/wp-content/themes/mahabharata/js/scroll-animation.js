$(function () {
  $(window).on("scroll", function () {

     const target = $(".target");

    $(target).each(function (index) {

        const scroll = $(window).scrollTop();
        const winHeight = $(window).height();
        const targetHeight = $(this).offset().top;

      if (scroll > targetHeight - winHeight / 2) {
         if($("li.target ")){
             setTimeout(() => {
                 $(this).addClass('show');
             },200 * index);
         } else {
            $(this).addClass('show');
         }
      }
    });
  });
});
