jQuery(document).ready(function($){

   var callToAction = $(".call-to-action");

    if ($(window).width() <= 414){
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
        grid = $('.homepage-titles'),
        explore = $('.explore-section'),
        scroll = $(window).scrollTop(),
        bottomOffset = grid.offset().top,
        topOffset = explore.offset().top - 100;

      if (scroll >= bottomOffset) {
        sticky.addClass("fixed");
        sticky.animate({"opacity": 1}, 0);
        sticky.css('height', '5em');
      }

      if(scroll >= topOffset) {
        sticky.removeClass("fixed");
        sticky.animate({"opacity": 0}, 0);
      }

      else if (scroll <= (bottomOffset) )  {
        sticky.removeClass("fixed");
      }

    }
  });

  // $(window).scroll(function(){
  //
  //   if ($('body').hasClass('blog') ) {
  //
  //     var bar = $('.blog-content-container'),
  //         sideBar = $('.blog-sidebar'),
  //         blogArchive = $('.blog-archive-feed'),
  //         blogScroll = $(window).scrollTop(),
  //         blogOffset = bar.offset().top;
  //     if (blogScroll >= blogOffset) {
  //        sideBar.addClass("fixed-sidebar");
  //        blogArchive.addClass('additional');
  //       }
  //     else if(blogScroll <= blogOffset) {
  //        sideBar.removeClass("fixed-sidebar");
  //        blogArchive.removeClass('additional');
  //       }
  //   }
  // });

});

jQuery(document).ready(function($){


  var menuIcon = $(".fa-bars", this);
      hamburger = $('.hamburger'); 

  hamburger.toggle(function(e) {
    
  $('.dropdown-content').css({"visibility": "visible"});
    menuIcon.removeClass("fa-bars");
    menuIcon.addClass("fa-times-circle");
  }, function() {

  $('.dropdown-content').css({"visibility": "hidden"});
    menuIcon.removeClass("fa-times-circle");
    menuIcon.addClass("fa-bars");
  });

  $('.header-container').on('click', function() {
    $('.dropdown-content').css({"visibility": "hidden"});
    menuIcon.removeClass("fa-times-circle");
    menuIcon.addClass("fa-bars");
  });
  
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

// ---  temporary fix for category.php styles
jQuery(document).ready(function($){
  if ($('body').hasClass('archive category')) {
    $('#page').css({"width": "100vw"});
    $('.site-footer').css({"width": "100vw"});
    $('#masthead').css({"position": "absolute", 
                        "margin-top": "-2.5em", 
                        "width": "100%"}
                      );
    $('.citystudio-banner').css({"position": "relative", 
                                "top": "3.8em"});
    $('h2.page-titles').css({"padding": "8% 0"})
    if ($(window).width() >= 600 ) {
      $('#masthead').css({ "margin-top": "-1em"});
    }

     $('.category-post-container').css({"width": "38%", "height": "29vw"});
     $('.header-container').css({"position": "fixed", "top": 0});
     $('.citystudio-banner').css({ "position": "fixed", 
                                    "top": "3.8em",
                                    "height": "90px"});

  }
  if ($('body').hasClass('single')){
    $('h2.page-titles').css({"padding": 0})
  }

});
