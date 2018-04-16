$(document).ready(function() {
  $('.js--scroll-to-about-me').click(function() {
    $('html, body').animate({
      scrollTop: $('.section-about-me').offset().top
    }, 750);
  });

  $("ul.gear-tabs li").click(function() {
    var tab_id = $(this).attr("data-tab");
    $(".tab-content").removeClass("current");
    $("ul.works-tabs li").removeClass("current");
    $(this).addClass("current");
    $("#" + tab_id).addClass("current");
    $("#" + tab_id).addClass("animate fadeIn");
  });

  // $(window).scroll(function() {
  //   if ($(this).scrollTop() > 500) {
  //     $('.scroll-nav').fadeIn(500);
  //   } else {
  //     $('.scroll-nav').fadeOut(500);
  //   }
  // });
});
