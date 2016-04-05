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
    autoPlay: true,
    // resize: true,
    // setGallerySize: false
    //http://flickity.metafizzy.co/options.html
  });

});
