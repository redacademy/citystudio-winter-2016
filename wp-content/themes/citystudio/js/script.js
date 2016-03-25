
jQuery(document).ready(function(){
  // Project Content Slider
  jQuery('#slider2').bxSlider({
    auto: true,
    autoControls: true,
    pause: 3000,
    slideMargin: 20,
    pause: 5000,
    slideMargin: 0,
    slideWidth: 1800,
    autoControlsCombine: true,
    controls: false
  });

  jQuery('.bxslider').bxSlider({
    mode: 'horizontal',
    infiniteLoop: true,
    speed: 2000,
    pause: 8000,
    auto: true,
    pager: false,
    controls: true
  });

});
