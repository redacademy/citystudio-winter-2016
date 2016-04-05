jQuery(document).ready(function($) {

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
      checkedNeigh = '';
      checkedPart = '';
      checkedYear = '';
      $('.neigh-labels').removeClass('current-menu');
      $('.neigh-labels').hide();
      $('.neigh-labels').empty();
      $('.part-labels').removeClass('current-menu');
      $('.part-labels').hide();
      $('.part-labels').empty();
      $('.year-labels').removeClass('current-menu');
      $('.year-labels').hide();
      $('.year-labels').empty();
      $('.foot-sub-menu').removeClass('current-menu');
   }); // close sort


   $('.foot-sub-menu label').hide();

   $('.menu-item').hover(function(){
      $(this).children('.foot-sub-menu').toggleClass('current-menu');
        if(checkedNeigh === '' || checkedPart === '' || checkedYear === '' ) {
              $('.current-menu').toggle(); 
            }
    });

  // Create an empty object to hold the checked navigation values in the properties
  var queryFilter = {
      neighbourhood: '',
      partners: '',
      year: ''
      };

  var checkedNeigh = '',
      checkedPart = '',
      checkedYear = '';

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
          queryFilter.neighValue = $(this).find('input').val();
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
          queryFilter.partValue = $(this).find('input').val();
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
          queryFilter.yearValue = $(this).find('input').val();
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
          return queryFilter[filter];
          debugger;
      }).join('+');
    }

  function reloadProjects() {


    console.log(queryFilter);
      $.ajax({
          type: 'GET',
          dataType: 'json',
          url: api_vars.rest_url+'wp/v2/project?filter[project_tags]='+filters(),

          success: function(response) {

            // create gallery method to append HTML to
            var $gallery = $('.home-slider');
            var galleryItems = '';

              // Clear the Gallery after each sort data is added to repopulate the Gallery
              $gallery.flickity('destroy');
              $gallery.empty();

              $.each(response, function(index, value) {
                galleryItems += '<a class="gallery-anchor featured-square-1" href="' + value.link + '">';
                galleryItems += '<li style="background: url(' + value.featured_image_url + ') no-repeat;">';
                galleryItems += '</li></a>';
              });

              $gallery.append(galleryItems).flickity();

          } // close success

      }); // close ajax call
  } // close reload projects
}); // document ready
