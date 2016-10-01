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

});


// Load More
jQuery(document).ready(function($){
  if ($('body').hasClass('page-template-searchpage') && $('.js-page-numbers').length > 0)  {
      var $loadMoreLink = $('.js-load-more'),
        nextPageNum = parseInt($('.js-page-numbers .current').html()) + 1;

      $loadMoreLink.attr('href', window.location.href + '?pagenum=' + nextPageNum );

      $(document).on('click', '.js-load-more', function (event) {
        event.preventDefault();
        var $this = $(this),
          url = $this.attr('href');

        $('.js-next-search-list').load(url + ' ul.search-list > a' ,function (response) {
          var nextPageNumber = $('.js-next-search-list .search-post').last().data().nextPage;
          if (nextPageNumber !== undefined) {
            console.log("nextPageNumber", nextPageNumber);
            $loadMoreLink.attr('href', window.location.href + '?pagenum=' + nextPageNumber );
          }

          $('.js-next-search-list')
            .removeClass('js-next-search-list')
            .addClass('search-list');
          $('.search-list-inner').append('<div class="js-next-search-list" />');
        });
      });
  }
});
