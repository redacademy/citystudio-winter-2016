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
  var hamburger = document.getElementById("hamburgerMenu");
    hamburger.classList.toggle("show");
}
// Close the dropdown menu if the user clicks outnerside of it
window.onclick = function(e) {
  e.preventDefault;
  ('dropdown-content').show;

}

jQuery(document).ready(function($){


  $(".hamburger").click(function(){
      $("i", this).removeClass("fa-bars");
        if ($(window).width() <= 375){
        $('.header-container').css({"position": "fixed"})
      }
    });
  $('.hamburger').toggle(function() {
    $("i", this).addClass("fa-times-circle")
}, function() {
     $("i", this).removeClass("fa-times-circle");
     $("i", this).addClass("fa-bars");
     $('.header-container').css({"position": "relative"})
});

  var menuSubmenu = $(".menu").children().children();
  
    menuSubmenu.show(); 

    $(document).ready(function(){
      $(".header-nav ul li#menu-item-51").toggle(function(){
         $(this).children().children().css({"display": "block"});
       },
        function() { $(this).children().children().css({"display": "none"});
      });
  });


});






