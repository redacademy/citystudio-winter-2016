jQuery(document).ready(function($) {

  // queryFilter holds an empty object for the checked navigation values/properties
  var queryFilter = {
    neighbourhoods: '',
    partners: '',
    year: ''
  },
      // values for input names
      checkedNeigh = '',
      checkedPart = '',
      checkedYear = '';

  //sorting navigation is open on page load on mobile
    $('#sort').resize(function(){
         if ($('#page').width() <= 480 ){
          $('#sort.nav-div').addClass('open');
         }
  });

  $('#sort_nav').click(function() {
    $('#sort').toggleClass('open');

 }); // close sort
  // Sort Button Slides out on desktop size
  $('#refresh').click(function() {
    $('#sort').toggleClass('open');

 }); // close sort

   $('.foot-sub-menu label').hide();

    $('.menu-item').hover(function(){
          $(this).children('.foot-sub-menu').toggleClass('current-menu');
    });

    $('.foot-sub-menu .sub-menu-item').click(function(){
    });

  function filters(){
    return Object.keys(queryFilter).map(function(filter){
        return queryFilter[filter];
    }).join('+');
  }

  $('.foot-sub-menu label').hide();
  $('.neigh-labels').hide();
  $('.part-labels').hide();
  $('.year-labels').hide();

  $('.menu-item').hover(function() {
      $(this).children('.foot-sub-menu').addClass('current-menu');
    }, function() {
      $(this).removeClass('current-menu');
  });

  $('.sub-menu-neigh').click(function() {
      if ($(this.checked)) {
          queryFilter.neighbourhoods = $(this).find('input').val();
          checkedNeigh = ($(this).text()).trim();
          $('.neigh-labels')
              .show()
              .append('<label>' + checkedNeigh + '</label>');
          $(this).parent().hide();
          reloadProjects();
      }
  });
  $('.sub-menu-part').click(function() {
      if ($(this.checked)) {
          queryFilter.partners = $(this).find('input').val();
          checkedPart = ($(this).text()).trim();
          $('.part-labels')
              .show()
              .append('<label>' + checkedPart + '</label>');
          $(this).parent().hide();
          reloadProjects();
      }
  });
  $('.sub-menu-year').click(function() {
      if ($(this.checked)) {
          queryFilter.year = $(this).find('input').val();
          checkedYear = ($(this).text()).trim();
          $('.year-labels')
              .show()
              .append('<label>' + checkedYear + '</label>');
          $(this).parent().hide();
          reloadProjects();
      }
  }); // close sub-menu-year

  // A Function that returns the object queryFilter's properties
  // and concatenates them into a url with + signs
  function filters(){
      return Object.keys(queryFilter).map(function(filter){
        if(queryFilter[filter] !== '') {
          return 'filter['+filter+']='+queryFilter[filter];
        } else {
          return false ;
        }
      }).filter(Boolean)
        .join('&');
    } //close filters function

  function reloadProjects() {

    console.log(queryFilter);
      $.ajax({
          type: 'GET',
          dataType: 'json',
          url: api_vars.rest_url+'wp/v2/project?'+filters(),

          // wp-json/wp/v2/posts?filter[job-type]=manager

          success: function(response) {

            console.log(response);

            // create gallery method to append HTML to
            var $gallery = $('.home-slider');
            var galleryItems = '';

              // Clear the Gallery after each sort data is added to repopulate the Gallery
              $gallery.flickity('destroy');
              $gallery.empty();

              // if( filters() !== false ) {
                // If featured is checked add class of
                debugger;
                $.each(response, function(index, value) {
                  galleryItems += '<a class="gallery-anchor featured-square-1" href="' + value.link + '">';
                  galleryItems += '<li style="background: url(' + value.featured_image_url + ') no-repeat;">';
                  galleryItems += '<div class="description"> <h2 class="description-title">' + value.title.rendered + '</h2>';
                  galleryItems += '<div class="subtitle"> ' + value.subtitle + ' </div>'
                  galleryItems += '<br>';
                  galleryItems += '<span class="home-description"> ' + value.excerpt + ' </span>'

                  galleryItems += '</div></div>';
                  galleryItems += '</li></a>';
                });
              // }
              //   else {
              //     debugger;
              //     $.each(response, function(index, value) {
              //       galleryItems += '<a class="gallery-anchor featured-square-1" href="' + value.link + '">';
              //       galleryItems += '<li style="background-color: dark-blue;">';
              //
              //       galleryItems += '</div></div>';
              //       galleryItems += '</li></a>';
              //   });
              // }
              $gallery.append(galleryItems).flickity();

          } // close success

      }); // close ajax call
  } // close reload projects
}); // document ready
