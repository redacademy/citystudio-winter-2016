
jQuery(document).ready(function($){

  $('.bxslider').bxSlider({
    mode: 'horizontal',
    infiniteLoop: true,
    speed: 2000,
    pause: 6000,
    auto: true,
    pager: false,
    controls: true
  });

  var gallery = [
    'featured-square-1',
    'upper-mini-1',
    'upper-mini-2',
    'featured-square-2',
    'featured-square-3',
    'featured-square-4',
    'lower-regular-1',
    'lower-regular-2',
    'lower-regular-3',
    'lower-regular-4',
    'lower-regular-5'
    ];
  $('.gallery-anchor').each(function(){
    var i = $(this).index();

    if( i === 0 ){
      $(this).addClass(gallery[0]);
    }
    if( i === 1 ){
      $(this).addClass('flex');
      $(this).addClass(gallery[1]);
    }
    if( i === 2 ){
      $(this).addClass('flex');
      $(this).addClass(gallery[2]);
    }
    if( i === 3 ){
      $(this).addClass(gallery[3]);
    }
    if( i === 4 ){
      $(this).addClass(gallery[4]);
    }
    if( i === 5 ){
      $(this).addClass(gallery[5]);
    }
    if( i === 6 ){
      $(this).addClass(gallery[6]);
    }
    if( i === 7 ){
      $(this).addClass(gallery[7]);
    }
    if( i === 8 ){
      $(this).addClass(gallery[8]);
    }
    if( i === 9 ){
      $(this).addClass(gallery[9]);
    }
    if( i === 10 ){
      $(this).addClass(gallery[10]);
    }

  });

// jQuery(document).ready(function($) {
//   $('.description').hide();
//   $('.gallery-anchor').hover(function() {
//     $('.description').show();
// });
// });
});

/* Jquery for Footer Navigation -- should go in own file soon */

jQuery(document).ready(function($) {



    var checkedNeigh = '';
    var checkedPart = '';

    $('.foot-sub-menu label').hide();
    $('.neigh-labels').hide();
    $('.part-labels').hide();

    $('.menu-item').hover(function(){
      	$(this).children('.foot-sub-menu').toggleClass('current-menu');
    });

    $('.sub-menu-neigh').click(function() {
        if($(this.checked)){
           checkedNeigh += ($(this).text());
           $('.neigh-labels').show().append('<label>'+checkedNeigh+'</label>');
           $(this).parent().hide();
      }
    });

    $('.sub-menu-part').click(function() {
        if($(this.checked)){
           checkedPart += ($(this).text());
           $('.part-labels').show().append('<label>'+checkedPart+'</label>');
           $(this).parent().hide();
      }
    });


    // $('.sub-menu-item span').click(function(){
    //     $('.foot-sub-menu').hide();
    //     $('').show();
    // });


    /* Jquery for header and footer display*/


});
