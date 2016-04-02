jQuery(document).ready(function($){
  $('.home-slider').flickity({
    cellAlign: 'left',
    contain: true,
    initialIndex: 0,
    accessibility: true,
    wrapAround: true,
    autoPlay: true
  });
  $('.main-carousel').flickity({
    cellAlign: 'left',
    contain: true,
    initialIndex: 0,
    accessibility: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: true
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
    'lower-regular-5',
    'lower-regular-6'
    ];

    $('.gallery-anchor').each(function() {
        var i = $(this).index();

        if (i === 0) {
            $(this).addClass(gallery[0]);
        }
        if (i === 1) {
            $(this).addClass('flex');
            $(this).addClass(gallery[1]);
        }
        if (i === 2) {
            $(this).addClass('flex');
            $(this).addClass(gallery[2]);
        }
        if (i === 3) {
            $(this).addClass(gallery[3]);
        }
        if (i === 4) {
            $(this).addClass(gallery[4]);
        }
        if (i === 5) {
            $(this).addClass(gallery[5]);
        }
        if (i === 6) {
            $(this).addClass(gallery[6]);
        }
        if (i === 7) {
            $(this).addClass(gallery[7]);
        }
        if (i === 8) {
            $(this).addClass(gallery[8]);
        }
        if (i === 9) {
            $(this).addClass(gallery[9]);
        }
        if (i === 10) {
            $(this).addClass(gallery[10]);
        }
    }); //close each funtciont

});
