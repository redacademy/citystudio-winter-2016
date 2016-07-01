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
  $("#hamburgerMenu").click(function(e){
    e.preventDefault();
      $("i", this).toggleClass("fa-bars fa-times-circle");

    });

  var menuSubmenu = $(".menu").children().children();


    menuSubmenu.show(); 

    $(document).ready(function(){
      $(".header-nav li ul li").click(function{
        alert('holy fuck');
      });
});


});






