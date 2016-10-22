jQuery(document).ready(function($) {
  if ($('body').hasClass('single-project') || $('body').hasClass('archive') || $('body').hasClass('search') ) {
    $('#sort_nav').remove();
    $('.nav-div').addClass('notransition');
    $('.nav-div').css("background-color", "#006496");
  }
  // queryFilter holds an empty object for the checked navigation values/properties
  var queryFilter = {
    themes: '',
    partners: '',
    year: ''
  }
  // values for input names
  checkedTheme = '',
  checkedPart = '',
  checkedYear = '';
  // Sort navigation is open on page load on mobile

  $('#refresh').on('click', function() {
    checkedTheme = '';
    checkedPart = '';
    checkedYear = '';
    queryFilter = {
      themes: '',
      partners: '',
      year: ''
    }
    $('.theme-labels').empty().append('<i class="fa fa-times" aria-hidden="true"></i>').hide();
    $('.part-labels').empty().append('<i class="fa fa-times" aria-hidden="true"></i>').hide();
    $('.year-labels').empty().append('<i class="fa fa-times" aria-hidden="true"></i>').hide();
    reloadProjects();

  }); // close refresh

  $('.theme-labels').on('click', function(){
    $(this).empty().append('<i class="fa fa-times" aria-hidden="true"></i>').hide();
  });

  $('.part-labels').on('click', function(){
    $(this).empty().append('<i class="fa fa-times" aria-hidden="true"></i>').hide();
  });

  $('.year-labels').on('click', function(){
    $(this).empty().append('<i class="fa fa-times" aria-hidden="true"></i>').hide();
  });

  $('.themes.sort-menu-item').on('click', function(){
    $(this).toggleClass('toggle-menu-item');
    $(this).children().toggleClass('toggle-menu-item');
    $("i", this).toggleClass("fa-sort-desc fa-sort-asc");
  });

  $('.partners.sort-menu-item').on('click', function(){
      $(this).toggleClass('toggle-menu-item');
      $(this).children().toggleClass('toggle-menu-item');
      $("i", this).toggleClass("fa-sort-desc fa-sort-asc");
  });

  $('.years.sort-menu-item').on('click', function(){
      $(this).toggleClass('toggle-menu-item');
      $(this).children().toggleClass('toggle-menu-item');
      $("i", this).toggleClass("fa-sort-desc fa-sort-asc");
  });

  $('.fa.fa-times').on('click', function(){
    $('.theme-labels').empty().append('<i class="fa fa-times" aria-hidden="true"></i>').hide();
    $('.part-labels').empty().append('<i class="fa fa-times" aria-hidden="true"></i>').hide();
    $('.year-labels').empty().append('<i class="fa fa-times" aria-hidden="true"></i>').hide();

    reloadProjects();

  });
  // Remove class current-menu if mouse isn't hovering over menu-item
  $('.themes').on('click', function(){
    $(this).children('.nav-sub-menu').children().addClass('current-menu');
  });
  // Create an empty object to hold
  // the checked navigation values in the properties
  $('.sub-menu-theme').on('click', function() {
    if ($(this.checked)) {
      queryFilter.themes = $(this).find('input').val();
      checkedTheme = ($(this).text()).trim();
      $('.theme-labels')
          .show()
          .append('<label>' + checkedTheme +'</label>');
      $(this).parent().removeClass('current-menu');
      reloadProjects();
    }
  });
  $('.sub-menu-part').on('click', function() {
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
  $('.sub-menu-year').on('click', function() {
    if ($(this.checked)) {
      queryFilter.years = parseInt($(this).find('input').val());
      checkedYear = parseInt(($(this).text()).trim());
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
    var mappedObject = Object.keys(queryFilter).map(function(filter){
      console.log("filter", filter);
      if(queryFilter[filter] !== '') {
        filteredQuery = 'filter['+filter+']='+queryFilter[filter];
        return filteredQuery;
      }
    }).filter(Array)
      .join('&');

    var mappedObjectUrl = mappedObject.split('&&').join('&');
    console.log('mappedobject', mappedObjectUrl);

    return mappedObjectUrl;
  } //close filters function
  // function that queries the database for the values captured in the inputs
  // re-creates the grid based on returned data
  function reloadProjects() {
    console.log(api_vars.rest_url );
      $.ajax({
          type: 'GET',
          dataType: 'json',
<<<<<<< HEAD
          url: api_vars.rest_url+'wp/v2/project?'+filters()+'&filter[posts_per_page]=16',
          // url: 'http://localhost:3000/citystudio-winter-2016/wp-json/wp/v2/project?'+filters()+'&filter[posts_per_page]=16',
=======
          url: 'http://citystudio.staging.wpengine.com/wp-json/'+'wp/v2/project?'+filters()+'&filter[posts_per_page]=16',
          // url: '-2016/wp-json/wp/v2/project?'+filters()+'&filter[posts_per_page]=16',
>>>>>>> be468f5012a6089826182d2b3dab2ee92ca1760d
            success: function(response, data, status) {
            var projects = response;
            // response.addHeader("Access-Control-Allow-Origin", "*");
            // create gallery method to append HTML to
            var $gallery = $('.grid');
            var galleryItems = '';
              // Clear the gallery after each sort data is added to repopulate the Gallery
              $gallery.empty();
            if ( projects.length > 0 ) {
                $.each(projects, function(index, value) {
                    galleryItems +=   '<a class="gallery-anchor" ';
                    galleryItems +=   'href="' + value.link + '">';
                    galleryItems +=   '<li class="gallery-image-wrap" style="background: url(' + value.featured_image_url + ');">';
                    galleryItems +=   '<div class="description">';
                    galleryItems +=     '<h2 class="description-title">' + value.title.rendered + '</h2>';
                    galleryItems +=     '<div class="subtitle"> ' + value.subtitle + ' </div>';
                    galleryItems +=     '<br>';
                    galleryItems +=   '</div>';
                    galleryItems +=   '</li>';
                    galleryItems += '</a>';
                });
                  $gallery.append(galleryItems);
              }
              else{
               $gallery.append('<div class="no-projects"' +
                               '<li><h1>No Projects Found! :( ' +
                               '</h1><h2>' +
                               'Please Refresh and Try Again!</h2>' +
                               '</li></div>'
                  );
              }
          },
          error:function(exception){alert('Exception:'+exception);}
      }); // close ajax call
  } // close reload projects
}); // document ready
