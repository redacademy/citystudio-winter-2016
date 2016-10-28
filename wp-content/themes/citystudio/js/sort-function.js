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

  var themeLabel = $('.theme-labels');
      partLabel = $('.part-labels');
      yearLabel = $('.year-labels');

  $('.themes.sort-menu-item').on('click', function(){
    $(this).toggleClass('toggle-menu-item');
    $(this).children().toggleClass('toggle-menu-item');
    $("i", this).toggleClass("fa-sort-desc fa-sort-asc");
    var openTheme = ($(this).hasClass('toggle-menu-item'));

  if (openTheme) {
    var themeSelected = '.themes.sort-menu-item';
    function removeThemeMenu(){
      $(themeSelected).removeClass('toggle-menu-item');
      $(themeSelected).children().removeClass('toggle-menu-item');
      $("i", themeSelected).removeClass("fa-sort-asc");
      $("i", themeSelected).addClass("fa-sort-desc");
    }

    $('.refresh, .clickoff, .refresh-hover, .partners.sort-menu-item, .years.sort-menu-item, .hero, .homepage-titles, .grid, .explore-section').on('click', function(){
      removeThemeMenu();
    });

  }

  });

  $('.partners.sort-menu-item').on('click', function(){
      $(this).toggleClass('toggle-menu-item');
      $(this).children().toggleClass('toggle-menu-item');
      $("i", this).toggleClass("fa-sort-desc fa-sort-asc");
  
      var openPartner = ($(this).hasClass('toggle-menu-item'));

  if (openPartner) {
    var partnerSelected = '.partners.sort-menu-item';
    function removePartnerMenu(){
        $(partnerSelected).removeClass('toggle-menu-item');
        $(partnerSelected).children().removeClass('toggle-menu-item');
        $("i", partnerSelected).removeClass("fa-sort-asc");
        $("i", partnerSelected).addClass("fa-sort-desc");
    }

    $('.refresh, .clickoff, .refresh-hover, .themes.sort-menu-item, .years.sort-menu-item, .hero, .homepage-titles, .grid, .explore-section').on('click', function(){
      removePartnerMenu();
    });
  }

  });

  $('.years.sort-menu-item').on('click', function(){
      $(this).toggleClass('toggle-menu-item');
      $(this).children().toggleClass('toggle-menu-item');
      $("i", this).toggleClass("fa-sort-desc fa-sort-asc");
      var openYear = $(this).hasClass('toggle-menu-item');

  if (openYear) {
      var yearSelected = '.years.sort-menu-item';
      
      function removeYearMenu(){
          $(yearSelected).removeClass('toggle-menu-item');
          $(yearSelected).children().removeClass('toggle-menu-item');
          $("i", yearSelected).removeClass("fa-sort-asc fa-times");
          $("i", yearSelected).addClass("fa-sort-desc");
      }

      $('.refresh, .clickoff, .refresh-hover, .themes.sort-menu-item, .partners.sort-menu-item, .hero, .homepage-titles, .grid, .explore-section').on('click', function(){
        removeYearMenu();
      });
    }

  });

  themeLabel.on('click', function(){
    $(this).empty().hide();
    $(this).unbind('mouseenter mouseleave')
  });

  partLabel.on('click', function(){
    $(this).empty().hide();
    $(this).unbind('mouseenter mouseleave')
  });

  yearLabel.on('click', function(){
    $(this).empty().hide();
    $(this).unbind('mouseenter mouseleave')
  });

  // Remove class current-menu if mouse isn't hovering over menu-item
  $('.themes').on('click', function(){
    $(this).children('.nav-sub-menu').children().addClass('current-menu');
  });
  // Create an empty object to hold
  // the checked navigation values in the properties

  $('#refresh').on('click', function() {
    checkedTheme = '';
    checkedPart = '';
    checkedYear = '';
    queryFilter = {
      themes: '',
      partners: '',
      year: ''
    }
    themeLabel.empty().hide();
    partLabel.empty().hide();
    yearLabel.empty().hide();
    reloadProjects();

  


  }); // close refresh

  $('.sub-menu-theme').on('click', function() {
    // debugger;

    if ($(this.checked)) {
      queryFilter.themes = $(this).find('input').val();
      checkedTheme = ($(this).text()).trim();
      themeLabel
          .empty()
          .show()
          .append('<label>' + checkedTheme +'</label>')
      $(this).parent().removeClass('current-menu');
      reloadProjects();
    }
  });

  $('.sub-menu-part').on('click', function() {
    if ($(this.checked)) {
      queryFilter.partners = $(this).find('input').val();
      checkedPart = ($(this).text()).trim();
      partLabel.empty();
      partLabel
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
      yearLabel.empty()
      yearLabel
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
          // url: api_vars.rest_url+'wp/v2/project?'+filters()+'&filter[posts_per_page]=16',
          url: 'http://citystudio.staging.wpengine.com/wp-json/'+'wp/v2/project?'+filters()+'&filter[posts_per_page]=16',
      
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
