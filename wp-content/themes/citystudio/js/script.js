jQuery(document).ready(function($){

   var callToAction = $(".call-to-action");

    if ($(window).width() <= 414){
        callToAction.css({"display": "none"});
        $('.header-container').css({"position": "fixed"});
        $('.header-nav').css({"position": "fixed"});
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
  });


  $(window).scroll(function(){

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

});

jQuery(document).ready(function($){

  $('.hamburger').on('click', function(){
    var menuIcon = $("i", this);
    menuIcon.removeClass("fa-bars");
  });

  $('.hamburger').toggle(function() {
      $('.dropdown-content').show();
      var menuIcon = $("i", this);
      menuIcon.addClass("fa-times-circle");

    }, function() {
      $('.dropdown-content').hide();
     var menuIcon = $("i", this);
     menuIcon.removeClass("fa-times-circle");
     menuIcon.addClass("fa-bars");
    }
  );

  // Close the dropdown menu if the user clicks outnerside of i

// Add an off menu click functionality
// $(document).click(function(event) {
//   if($('.dropdown-content').is(":visible")) {
//       $('.dropdown-content').hide();
//   }
});

function showMenu() {
  var hamburger = document.getElementById("hamburgerMenu");
  hamburger.classList.toggle("show");

}


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