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
  $('#sort').resize(function(){
      // take out for resizing(1)
      // $('#sort.nav-div').addClass('open');
  });

  $('#sort_nav').click(function() {
    // take out for resizing(2)
    // $('#sort').toggleClass('open');
    $('.theme-labels').toggleClass('show-labels');
    $('.part-labels').toggleClass('show-labels');
    $('.year-labels').toggleClass('show-labels');
  }); // close sort

  // Sort navigation dlides out on desktop when clicked
  $('#refresh').click(function() {
    // take out for resizing(3)
    // $('#sort').toggleClass('open');
    $('#refresh.refresh.menu-item').css("right", "-2px");

  }); // close sort

  $('#refresh').click(function() {
    checkedTheme = '';
    checkedPart = '';
    checkedYear = '';

    queryFilter = {
      themes: '',
      partners: '',
      year: ''
    }

    $('.theme-labels').empty().append('<i class="fa fa-star" aria-hidden="true"></i><br>').hide();
    $('.part-labels').empty().append('<i class="fa fa-star" aria-hidden="true"></i><br>').hide();
    $('.year-labels').empty().append('<i class="fa fa-star" aria-hidden="true"></i><br>').hide();

    reloadProjects();

  }); // close refresh

  // If the input label is visible,
  // find nav-sub-menu and add class current-menu
  $('.sort-menu-item').mouseover(function(){
    var labelVisible = $(this).children('div').find('label').length;
     if(!labelVisible){
      $(this).children('.nav-sub-menu').addClass('current-menu');
    }
  });

  // Remove class current-menu if mouse isn't hovering over menu-item
  $('.sort-menu-item').mouseout(function(){
      $(this).children('.nav-sub-menu').removeClass('current-menu');
   });

  // Create an empty object to hold
  // the checked navigation values in the properties
  $('.sub-menu-theme').click(function() {

    if ($(this.checked)) {
      queryFilter.themes = $(this).find('input').val();
      checkedTheme = ($(this).text()).trim();

      $('.theme-labels')
          .show()
          .append('<label>' + checkedTheme + '</label>');
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
        debugger;
        return filteredQuery;
      }
        if (queryFilter[filter] == 'year'){
          alert('success');
        }
    }).filter(Array)
      .join(' ');
  } //close filters function
  // function that queries the database for the values captured in the inputs
  // re-creates the grid based on returned data
  function reloadProjects() {
      $.ajax({
          type: 'GET',
          dataType: 'json',
          url: api_vars.rest_url+'wp/v2/project?'+filters(),
          success: function(response, data, status) {
            alert(this.url)
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
                    galleryItems +=   '<li class="gallery-image" style="background: url(' + value.featured_image_url + ');">';
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
          error:function(exception){alert('Exeption:'+exception);}
      }); // close ajax call
  } // close reload projects
}); // document ready
