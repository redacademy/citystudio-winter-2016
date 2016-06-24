jQuery(document).ready(function($){
     $(window).scroll(function(){
      var sticky = $('.sticky-navigation'),
          nav = $('.gallery-description-container'),
          description = $('.nav-description'),
          scroll = $(window).scrollTop(),
          offset = nav.offset().top

      if (scroll >= offset) {
         sticky.addClass("fixed");
         description.addClass("fixed");
     }
      else if (scroll <= offset)  {
        sticky.removeClass("fixed");
         description.removeClass("fixed");
    }
  });

});
function myFunction() {
    document.getElementById("hamburgerMenu").classList.toggle("show");
}
// Close the dropdown menu if the user clicks outnerside of it
window.onclick = function(e) {
  e.preventDefault;
  ('dropdown-content').show;
  
}
jQuery(document).ready(function($){

$("#primary-menu li a").click(function(){

        $(".header-nav li ul").show().animate({"left": "+14em"});

    });


  // $(".sub-menu li a").click(function(){
  //     this.css("color": "red")
  // });

});