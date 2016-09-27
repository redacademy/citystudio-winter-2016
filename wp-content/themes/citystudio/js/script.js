jQuery(document).ready(function($){

<<<<<<< HEAD
=======

>>>>>>> 98a885c6f6638cdafde44a740e78cab0adaf3da5
  $(window).scroll(function(){

    if ($('body').hasClass('home page') ) {
    var sticky = $('.sticky-navigation'),
        nav = $('.homepage-description'),
        scroll = $(window).scrollTop(),
        offset = nav.offset().top

      if (scroll >= offset) {
         sticky.addClass("fixed");
        }
      else if (scroll <= offset)  {
          sticky.removeClass("fixed");
        } 
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
    var menuIcon = $("i", this);
    menuIcon.removeClass("fa-bars");
<<<<<<< HEAD
    if ($(window).width() <= 375){
      $('.header-container').css({"position": "fixed"});
    }
=======
>>>>>>> 98a885c6f6638cdafde44a740e78cab0adaf3da5
  });

  $('.hamburger').toggle(function() {
      var menuIcon = $("i", this);
      menuIcon.addClass("fa-times-circle");
    }, function() {
  
     var menuIcon = $("i", this);

     menuIcon.removeClass("fa-times-circle");
     menuIcon.addClass("fa-bars");
     $('.header-container').css({"position": "relative"});
    }
  );

  var menuSubmenu = $(".menu").children().children();
  menuSubmenu.show();

  //code for mobile view 
<<<<<<< HEAD
  $(document).ready(function(){
    var callToAction = $(".call-to-action");

    if ($(window).width() <= 375){
        callToAction.css({"display": "none"});

      $("a[href*=#]").toggle(function() {

=======
    var callToAction = $(".call-to-action");

    if ($(window).width() <= 414){
        callToAction.css({"display": "none"});
        $('.header-container').css({"position": "fixed"});
        $('.header-nav').css({"position": "fixed"});
        $("a[href*=#]").toggle(function() {
>>>>>>> 98a885c6f6638cdafde44a740e78cab0adaf3da5
          $(".sub-menu").css({"display": "block"});
        }, 
        function(){
          $(".sub-menu").css({"display": "none"});
      }); 
    };
<<<<<<< HEAD
  });
=======
>>>>>>> 98a885c6f6638cdafde44a740e78cab0adaf3da5
});
