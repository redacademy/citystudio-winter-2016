jQuery(document).ready(function($){

   var callToAction = $(".call-to-action");

//dont show nav sub menu on smaller screens
    if ($(window).width() <= 414){
        $("a[href*=#]").toggle(function() {
          $(".sub-menu").css({"display": "block"});
        },
        function(){
          $(".sub-menu").css({"display": "none"});
      });
    };

  // for nav sub-menu delay
  $('.sub-menu li a').on('click', function(){
    $('.sub-menu').hide();
  })

  $('#refresh').hover(function(){
    $('.refresh-hover').css('opacity', 1);

  }, function(){
    $('.refresh-hover').css('opacity', 0);
  });

});

jQuery(document).ready(function($){

  var menuIcon = $(".fa-bars", this);
      hamburger = $('.hamburger');

  hamburger.toggle(function(e) {

  $('.dropdown-content').css({"display": "block"});
    menuIcon.removeClass("fa-bars");
    menuIcon.addClass("fa-times-circle");
  }, function() {

  $('.dropdown-content').css({"display": "none"});
    menuIcon.removeClass("fa-times-circle");
    menuIcon.addClass("fa-bars");
  });

  // for sub-menu delay
  $('.sub-menu li a').on('click', function(){
    $('.sub-menu').hide();
  })


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
