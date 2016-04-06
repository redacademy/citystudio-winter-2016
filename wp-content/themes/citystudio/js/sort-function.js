jQuery(document).ready(function($) {

  // queryFilter holds an empty object for the checked navigation values/properties
  var queryFilter = {
    neighbourhoods: '',
    partners: '',
    year: ''
  }
      // values for input names
    checkedNeigh = '',
    checkedPart = '',
    checkedYear = '';

  //sorting navigation is open on page load on mobile
  $('#sort').resize(function(){
      $('#sort.nav-div').addClass('open');
  });

  $('#sort_nav').click(function() {
    $('#sort').toggleClass('open');
  }); // close sort
  // Sort Button Slides out on desktop size
  $('#refresh').click(function() {
    $('#sort').toggleClass('open');
  }); // close sort

  $('#refresh').click(function() {
    checkedNeigh = '';
    checkedPart = '';
    checkedYear = '';
    $('.neigh-labels').empty().hide();
    $('.part-labels').empty().hide();
    $('.year-labels').empty().hide();

    $('.home-slider').flickity('destroy');
    $('.home-slider').empty();

    $('.home-slider').flickity({
      cellAlign: 'left',
      contain: true,
      initialIndex: 0,
      accessibility: true,
      wrapAround: true,
      autoPlay: true
    });
   }); // close sort

  $('.menu-item').mouseover(function(){
    var labelVisible = $(this).children('div').find('label').length;
     if(!labelVisible){
      $(this).children('.foot-sub-menu').addClass('current-menu');
    }
  });

  $('.menu-item').mouseout(function(){
      $(this).children('.foot-sub-menu').removeClass('current-menu');
   });

  // Create an empty object to hold the checked navigation values in the properties

  $('.sub-menu-neigh').click(function() {
    if ($(this.checked)) {
      queryFilter.neighbourhoods = $(this).find('input').val();
      checkedNeigh = ($(this).text()).trim();
      $('.neigh-labels')
          .show()
          .append('<label>' + checkedNeigh + '</label>');
      $(this).parent().removeClass('current-menu');
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
      $(this).parent().removeClass('current-menu');
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
          $(this).parent().removeClass('current-menu');
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

          success: function(response) {
            console.log(response);
            // get the length of response and run this IF it is less than 10
            if ( response.length < 4 ) {
              // this object holds the remaining slots left to fill
              var objectPlaceholder = (4 - response.length);

              // loop over the response.length to find empty slots to fill
              for (var i = 0; i < objectPlaceholder; i++ ) {
                // push an object into the blank slots
                response.push(
                  { placeholder: true }
                );
              }
            }

            // create gallery method to append HTML to
            var $gallery = $('.home-slider');
            var galleryItems = '';

              // Clear the Gallery after each sort data is added to repopulate the Gallery
              $gallery.flickity('destroy');
              $gallery.empty();

                $.each(response, function(index, value) {
                  // if feature project checkbox is true add large class.
                  // else if feature project checkoc is falso use reg class
                  function featured() {
                    if ( value.featured_project[0] === '1') {
                      return 'featured-rectangle';
                    } else {
                      return 'featured-square';
                    }
                  }

                  if ( !value.placeholder ) {

                    galleryItems += '<a class="gallery-anchor js-flickity" href="' + value.link + '" data-flickity-options="initialIndex:3">';
                    galleryItems +=   '<li class=" ' + featured(); + ' " style="background: url(' + value.featured_image_url + ') no-repeat cover;">';
                    galleryItems +=   ' " style="background: url(' + value.featured_image_url + ') no-repeat;">';

                    galleryItems +=   '<div class="description">';
                    galleryItems +=     '<h2 class="description-title">' + value.title.rendered + '</h2>';
                    galleryItems +=     '<div class="subtitle"> ' + value.subtitle + ' </div>';
                    galleryItems +=     '<br>';
                    galleryItems +=     '<span class="home-description"> ' + value.excerpt + ' </span>';
                    galleryItems +=   '</div>';

                    galleryItems +=   '</li>';
                    galleryItems += '</a>';

                  } else {
                    galleryItems += '<a class="gallery-anchor"><li class="featured-square blue-placeholder">';
                    galleryItems += '</li></a>';
                  }

                });
              $gallery.append(galleryItems).flickity({
                                                cellAlign: 'left',
                                                contain: 'true',
                                                wrapAround: 'true'
                                                // rightToLeft: 'true'
                                          });
          } // close success
      }); // close ajax call
  } // close reload projects
}); // document ready
