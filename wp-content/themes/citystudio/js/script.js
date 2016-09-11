jQuery(document).ready(function($){

  $(window).scroll(function(){

    if ($('body').hasClass('home page') ) {
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
    if ($(window).width() <= 375){
      $('.header-container').css({"position": "fixed"});
    }
  });
  $('.hamburger').toggle(function() {
      var menuIcon = $("i", this);
      menuIcon.addClass("fa-times-circle");
    }, function() {
<<<<<<< HEAD
  
     var menuIcon = $("i", this);
=======

     var menuIcon = $("i", this)
>>>>>>> 55ebb8255915677d71fc91a2f4effecf7b9502b3

     menuIcon.removeClass("fa-times-circle");
     menuIcon.addClass("fa-bars");
     $('.header-container').css({"position": "relative"});
    }
  );

  var menuSubmenu = $(".menu").children().children();
  menuSubmenu.show();

  //code for mobile view

  $(document).ready(function(){
    var callToAction = $(".call-to-action");

    if ($(window).width() <= 375){
        callToAction.css({"display": "none"});
<<<<<<< HEAD

      $("a[href*=#]").toggle(function() {

          $(".sub-menu").css({"display": "block"});
        }, 
        function(){
          $(".sub-menu").css({"display": "none"});
    }); 
  };
});

});




=======
        mobileMenuItem.toggle(function(){
          menuItem.css({"display": "block"});
        },
        function() { menuItem.css({"display": "none"});
      });
     }
    }
  );
});
>>>>>>> 55ebb8255915677d71fc91a2f4effecf7b9502b3
