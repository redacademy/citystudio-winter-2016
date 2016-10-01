jQuery(document).ready(function($){

   var callToAction = $(".call-to-action");

    if ($(window).width() <= 414){
        callToAction.css({"display": "none"});
        // $('.header-container').css({"position": "fixed"});
        // $('.header-nav').css({"position": "fixed"});
        $("a[href*=#]").toggle(function() {
          $(".sub-menu").css({"display": "block"});
        },
        function(){
          $(".sub-menu").css({"display": "none"});
      });
    };

  $(window).scroll(function(){

    if ($('body').hasClass('home page') ) {
    var sticky = $('.sticky-navigation'),
        nav = $('.homepage-description'),
        scroll = $(window).scrollTop(),
        offset = nav.offset().top;

      if (scroll >= offset) {
         sticky.addClass("fixed");
        }
      else if (scroll <= offset)  {
          sticky.removeClass("fixed");
        }
      }

    if ($('body').hasClass('blog') ) {

      var bar = $('.blog-content-container'),
          sideBar =$('.blog-sidebar'),
          blogScroll = $(window).scrollTop(),
          blogOffset = bar.offset().top;
          
      if (blogScroll >= blogOffset) {
         sideBar.addClass("fixed-sidebar");
        }
      else if(blogScroll <= blogOffset) {
         sideBar.removeClass("fixed-sidebar");
        }
    }
  });


jQuery(document).ready(function($){

  $(".hamburger").click(function(){
    var menuIcon = $("i", this);
    menuIcon.removeClass("fa-bars");
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

  //code for mobile vie

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
