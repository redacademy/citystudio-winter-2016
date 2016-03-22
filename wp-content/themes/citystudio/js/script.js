jQuery(document).ready(function($){
  jQuery('.bxslider').bxSlider({
    mode: 'horizontal',
    infiniteLoop: true,
    speed: 500,
    auto: true, //slides will automatically transition
    autoStart: true, //show will start playing on load
    autoHover: true, //show will pause when the mouse hovers over slider
    minSlides: 5,
    maxSlides: 5,
    moveSlides: 1,
    slideWidth: 2,
    slideMargin: 0,
    randomStart: true
//this will change what projects are displayed on new page load
  });
});
