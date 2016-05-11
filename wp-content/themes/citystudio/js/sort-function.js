jQuery(document).ready(function($) {

  if ($('body').hasClass('single-project') || $('body').hasClass('archive') || $('body').hasClass('search') ) {
    $('#sort_nav').remove();
    $('.nav-div').addClass('notransition');
    $('.nav-div').css("background-color", "#006496");
  }

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

  // Sort navigation is open on page load on mobile
  $('#sort').resize(function(){
      $('#sort.nav-div').addClass('open');
  });

  $('#sort_nav').click(function() {
    $('#sort').toggleClass('open');
  }); // close sort

  // Sort navigation dlides out on desktop when clicked
  $('#refresh').click(function() {
    $('#sort').toggleClass('open');
  }); // close sort

  $('#refresh').click(function() {
    checkedNeigh = '';
    checkedPart = '';
    checkedYear = '';

    queryFilter = {
      neighbourhoods: '',
      partners: '',
      year: ''
    }

    $('.neigh-labels').empty().hide();
    $('.part-labels').empty().hide();
    $('.year-labels').empty().hide();
    reloadProjects();
  }); // close refresh

  // If the input label is visible,
  // find foot-sub-menu and add class current-menu
  $('.menu-item').mouseover(function(){
    var labelVisible = $(this).children('div').find('label').length;
     if(!labelVisible){
      $(this).children('.foot-sub-menu').addClass('current-menu');
    }
  });

  // Remove class current-menu if mouse isn't hovering over menu-item
  $('.menu-item').mouseout(function(){
      $(this).children('.foot-sub-menu').removeClass('current-menu');
   });

  // Create an empty object to hold
  // the checked navigation values in the properties
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
  }); // end the check for each sub-menu type


  // A Function that returns the object queryFilter's properties
  // and concatenates them into a url with + signs creates API call
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

  // function that queries the database for the values captured in the inputs
  // re-creates the grid based on returned data
  function reloadProjects() {
      $.ajax({
          type: 'GET',
          dataType: 'json',
          url: api_vars.rest_url+'wp/v2/project?'+filters(),

          success: function(response) {

            console.log(response);` ` 
            // get the length of response and run this IF it is less than 10
            if ( response.length < 14 ) {
              // this object holds the remaining slots left to fill
              var objectPlaceholder = (14 - response.length);

              // loop over the response.length to find empty slots to fill
              for (var i = 0; i < objectPlaceholder; i++ ) {
                // push an object into the blank slots
                response.push(
                  { placeholder: true }
                );
              }
            }

            // create gallery method to append HTML to
            var $gallery = $('.grid');
            var galleryItems = '';

              // Clear the Gallery after each sort data is added to repopulate the Gallery
              // $gallery.flickity('destroy'); -- how do we destroy the old grid now?
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

                    galleryItems += '<a class="gallery-anchor" href="' + value.link + '">';
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

                $gallery.append(galleryItems);
          } // close success
      }); // close ajax call
  } // close reload projects
}); // document ready
