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

     $(window).scroll(function(){
      var sticky = $('.sticky-navigation');
          description = $('.nav-description');
          scroll = $(window).scrollTop();
          offset = sticky.offset();

      if (scroll >= 1345) {
         sticky.addClass("fixed");
         description.addClass("fixed");
     }
      else if (scroll <= 1345)  {
        sticky.removeClass("fixed");
         description.removeClass("fixed");
    }
  });

});

function myFunction() {
    document.getElementById("hamburgerMenu").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(e) {
  e.preventDefault;

  ('dropdown-content').show;

}

