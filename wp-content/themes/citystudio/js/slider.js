jQuery(document).ready(function($) {

  $('.home-slider').flickity({
    cellAlign: 'left',
    imagesLoaded: true,
    contain: true,
    initialIndex: 0,
    accessibility: true,
    wrapAround: true,
    setGallerySize: false
  });

  $('.main-carousel').flickity({
    cellAlign: 'left',
    contain: true,
    initialIndex: 0,
    accessibility: true,
    wrapAround: true,
    prevNextButtons: false,
    imagesLoaded: true
  });

});
