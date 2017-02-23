$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});



ScrollToTop=function() {
  var s = $(window).scrollTop();
  if (s > 250) {
    $('.scrollup').fadeIn();
  } else {
    $('.scrollup').fadeOut();
  }

  $('.scrollup').click(function () {
      $("html, body").animate({ scrollTop: 0 }, 500);
      return false;
  });
}

StopAnimation=function() {
  $("html, body").bind("scroll mousedown DOMMouseScroll mousewheel keyup", function(){
    $('html, body').stop();
  });
}


$(window).scroll(function() {
  ScrollToTop();
  StopAnimation();
});
