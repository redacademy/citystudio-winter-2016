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
        grid = $('.homepage-titles'),
        explore = $('.explore-section'),
        scroll = $(window).scrollTop(),
        bottomOffset = grid.offset().top,
        topOffset = explore.offset().top;
        console.log(topOffset);
        console.log(scroll);

      if (scroll >= bottomOffset) {
         sticky.addClass("fixed");
        }
        
      if(scroll >= topOffset) {
        sticky.removeClass("fixed");
      }
      else if (scroll <= bottomOffset)  {
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

    var menuIcon = $("i", this);

  $('.hamburger').bind('click', function(){
    menuIcon.removeClass("fa-bars");
    $(this).data('clicked', true);

  });

  $('.hamburger').toggle(function(e) {
     
    $('.dropdown-content').css({"visibility": "visible"});
      menuIcon.addClass("fa-times-circle");
    }, function() {
     $('.dropdown-content').css({"visibility": "hidden"});
     menuIcon.removeClass("fa-times-circle");
     menuIcon.addClass("fa-bars");
     };
    
  //   $('.dropdown-content').css(''){
  //     alert('something');
  //   }     
  
  // );

});

// $(document).click(function(event) { 
//     if(!$(event.target).closest('.dropdown-content').length) {
//         if($('.dropdown-content').is(":visible")) {
//             $('.dropdown-content').hide();
//         }
//     }        
// })


    //  $('.dropdown-content').click(function(event){
    //   event.stopPropagation();
    // });

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