jQuery(document).ready(function($) {

  //sorting navigation is open on page load on mobile
    $('#sort').resize(function(){
         if ($('#page').width() <= 480 ){
          $('#sort.nav-div').addClass('open');
         }
  });

//   $('#sort').resize(function(){
//        if (window.matchMedia('(max-width: 480px)')){
//         $('.nav-div').addClass('open');
//        }
// });

  // Sort Button Slides out on desktop size
  $('#sort').click(function() {
     $('#sort').addClass('open');
     if ($(this).data('clicked', true)) {
         $('.refresh').click(function() {
             $('.refresh').removeClass('open');
         });
     }
 }); // close sort

  // Create an empty object to hold the checked navigation values in the properties
  var queryFilter = {};

  var neighValue = '',
      partValue = '',
      yearValue = '';


  function filters(){
    return Object.keys(queryFilter).map(function(filter){
        return queryFilter[filter]
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
          neighValue = $(this).find('input').val();
          queryFilter.checkedNeigh = ($(this).text()).trim();
          $('.neigh-labels')
              .show()
              .append('<label>' + queryFilter.checkedNeigh + '</label>');
          $(this).parent().hide();
          reloadProjects();
      }
  });
  $('.sub-menu-part').click(function() {
      if ($(this.checked)) {
          partValue = $(this).find('input').val();
          queryFilter.checkedPart = ($(this).text()).trim();
          $('.part-labels')
              .show()
              .append('<label>' + queryFilter.checkedPart + '</label>');
          $(this).parent().hide();
          reloadProjects();
      }
  });
  $('.sub-menu-year').click(function() {
      if ($(this.checked)) {
          yearValue = $(this).find('input').val();
          queryFilter.checkedYear = ($(this).text()).trim();
          $('.year-labels')
              .show()
              .append('<label>' + queryFilter.checkedYear + '</label>');
          $(this).parent().hide();
          reloadProjects();
      }
  }); // close sub-menu-year

  console.log(queryFilter);

  function reloadProjects() {

    console.log(queryFilter);
      $.ajax({
          type: 'GET',
          dataType: 'json',
          url: api_vars.rest_url + 'wp/v2/project?filter[project_tags]='+filters(),

          success: function(response) {
              // alert('Got the Values' + partValue + yearValue + neighValue);
              console.log(response);

              var $gallery = $('.home-slider');

              $gallery.empty();

              $.each();

          } // close success

      }); // close ajax call
  } // close reload projects
}); // document ready
