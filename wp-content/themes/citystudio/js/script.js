
jQuery(document).ready(function($){
  // Project Content Slider
$('#slider2').bxSlider({
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

  $('.bxslider').bxSlider({
    mode: 'horizontal',
    infiniteLoop: true,
    speed: 2000,
    pause: 8000,
    auto: true,
    pager: false,
    controls: true
  });

  var gallery = ['featured-square', 'upper-mini', 'lower-regular'];
  $('li').each(function(){
    var i = $(this).index();
    if( i === 1 ){
      $(this).addClass(gallery[0]);
    }
    if( i === 2 ){
      $(this).addClass(gallery[0]);
    }
    if( i === 3 ){
      $(this).addClass(gallery[1]);
    }
    if( i === 4 ){
      $(this).addClass(gallery[1]);
    }
    if( i === 5 ){
      $(this).addClass(gallery[2]);
    }
    if( i === 6 ){
      $(this).addClass(gallery[2]);
    }
    if( i === 7 ){
      $(this).addClass(gallery[2]);
    }
    if( i === 8 ){
      $(this).addClass(gallery[2]);
    }
    if( i === 9 ){
      $(this).addClass(gallery[2]);
    }
    if( i === 10 ){
      $(this).addClass(gallery[2]);
    }


  });
});
