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
          offset = sticky.offset();

      if (scroll >= offset.top) {
         sticky.addClass('fixed');
     }
       if (scroll <= offset.top) {
        sticky.removeClass('fixed');
      }
      else null;
  });

});

