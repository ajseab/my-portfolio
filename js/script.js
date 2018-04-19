$(document).ready(function() {
  $('.js--scroll-to-top').click(function() {
    $('html, body').animate({
      scrollTop: $('header').offset().top
    }, 750);
  });

  $('.js--scroll-to-about-me').click(function() {
    $('html, body').animate({
      scrollTop: $('.section-about-me').offset().top
    }, 750);
  });

  $('.js--scroll-to-work').click(function() {
    $('html, body').animate({
      scrollTop: $('.section-work').offset().top
    }, 750);
  });

  $('.js--scroll-to-resume').click(function() {
    $('html, body').animate({
      scrollTop: $('.section-resume').offset().top
    }, 750);
  });

  $('.js--scroll-to-contact').click(function() {
    $('html, body').animate({
      scrollTop: $('.section-contact').offset().top
    }, 750);
  });

  $("ul.work-tabs li").click(function() {
    var tab_id = $(this).attr("data-tab");
    $(".tab-content").removeClass("current");
    $("ul.work-tabs li").removeClass("current");
    $(this).addClass("current");
    $("#" + tab_id).addClass("current");
    $("#" + tab_id).addClass("animate fadeIn");
  });

  $(window).scroll(function() {
    if ($(this).scrollTop() > 550 && $(window).width() > 750) {
      $('.nav-scroll-background').fadeIn(400);
      $('.main-nav').css('color', '#333');
      $('.ion-navicon').css('color', '#333');
    } else if ($(window).width() > 750) {
      $('.nav-scroll-background').fadeOut(400);
      $('.main-nav').css('color', '#fff');
      $('.ion-navicon').css('color', '#fff');
    }
  });

  $("#hamburger").click(function() {
    $(".mobile-nav-links").slideToggle("slow", function() {});
  });
});
