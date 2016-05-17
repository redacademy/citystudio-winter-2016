jQuery(document).ready(function($){

  $('.main-carousel').flickity({
    cellAlign: 'left',
    contain: true,
    initialIndex: 0,
    accessibility: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: true,
    autoPlay: 3000
  });

    // var header = $(".site-header");
     $(window).scroll(function(){
      var sticky = $('.sticky-navigation'),
          scroll = $(window).scrollTop();

      if (scroll >= 1115) {
         sticky.addClass('fixed');
     }
         else sticky.removeClass('fixed');
    });


});

