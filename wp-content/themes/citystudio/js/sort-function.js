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

  $('#sort_nav').on('click', function() {
    $('.theme-labels').toggleClass('show-labels');
    $('.part-labels').toggleClass('show-labels');
    $('.year-labels').toggleClass('show-labels');
  }); // close sort

  $('#refresh').on('click', function() {
    checkedTheme = '';
    checkedPart = '';
    checkedYear = '';

    queryFilter = {
      themes: '',
      partners: '',
      year: ''
    }

    $('.theme-labels').empty().hide();
    $('.part-labels').empty().hide();
    $('.year-labels').empty().hide();


    reloadProjects();

  }); // close refresh

  $('.theme-labels').on('click', function(){
    $(this).empty().hide();
    $(this, "label").append('<i class="fa fa-times" aria-hidden="true"></i>');
  });

  $('.part-labels').on('click', function(){
    $(this).empty().hide();
    $(this, "label").append('<i class="fa fa-times" aria-hidden="true"></i>');
  });

  $('.year-labels').on('click', function(){
    $(this).empty().hide();
    $(this, "label").append('<i class="fa fa-times" aria-hidden="true"></i>');
  });

  $('.themes').on('click', function(){
    $(this).toggleClass('toggle-menu-item');
    $(this).children().toggleClass('toggle-menu-item');
    $("i", this).toggleClass("fa-sort-desc fa-sort-asc");
  });

   $('.partners').on('click', function(){
      $(this).toggleClass('toggle-menu-item');
      $(this).children().toggleClass('toggle-menu-item');
      $("i", this).toggleClass("fa-sort-desc fa-sort-asc");
  });

  $('.years').on('click', function(){
      $(this).toggleClass('toggle-menu-item');
      $(this).children().toggleClass('toggle-menu-item');
      $("i", this).toggleClass("fa-sort-desc fa-sort-asc");
  }); 


  $('.fa fa-sort-desc').click('false');
  // Remove class current-menu if mouse isn't hovering over menu-item

  $('.themes').on('click', function(){
    $(this).children('.nav-sub-menu').children().addClass('current-menu');
    // alert('one click')
  });

  $('#refresh.refresh.menu-item').hover(function(){
      $(".refresh-hover").css({"opacity": 1});
  }, function(){
      $(".refresh-hover").css({"opacity": 0});
    } 
  );

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
      queryFilter.year = $(this).find('input').val();
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
    return Object.keys(queryFilter).map(function(filter){
      if(queryFilter[filter] !== '') {
        filteredQuery = 'filter['+filter+']='+queryFilter[filter];
        return filteredQuery;
      }
    }).filter(Array)
      .join('');
  } //close filters function
  // function that queries the database for the values captured in the inputs
  // re-creates the grid based on returned data
  function reloadProjects() {
      $.ajax({
          type: 'GET',
          dataType: 'json',
          url: api_vars.rest_url+'wp/v2/project?'+filters(),
          success: function(response, data, status) {
            var projects = response;
            // create gallery method to append HTML to
            var $gallery = $('.grid');
            var galleryItems = '';
              // Clear the Gallery after each sort data is added to repopulate the Gallery
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
