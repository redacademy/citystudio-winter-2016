jQuery(document).ready(function($){

  $('.home-slider').flickity({
    cellAlign: 'left',
    contain: true,
    initialIndex: 0,
    accessibility: true,
    wrapAround: true
  });
​
  $('.main-carousel').flickity({
    cellAlign: 'left',
    contain: true,
    initialIndex: 0,
    accessibility: true,
    prevNextButtons: false
  });
​
  var gallery = [
    'featured-square-1',
    'upper-mini-1',
    'upper-mini-2',
    'featured-square-2',
    'featured-square-3',
    'featured-square-4',
    'lower-regular-1',
    'lower-regular-2',
    'lower-regular-3',
    'lower-regular-4',
    'lower-regular-5',
    'lower-regular-6'
    ];
​
  }); //close each funtciont

  var queryFilter = {
    checkedNeigh: '',
    checkedPart: '',
    checkedYear: ''
  };

  $('.foot-sub-menu label').hide();
  $('.neigh-labels').hide();
  $('.part-labels').hide();
  $('.year-labels').hide();

  $('.menu-item').hover(function() {
    $(this).children('.foot-sub-menu').toggleClass('current-menu');
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
      } // close if
    }); // close sub-menu-year
​
    function reloadProjects() {
​
        $.ajax({
          type: 'GET',
          dataType: 'json',
          url: api_vars.rest_url + 'wp/v2/project?filter[neighbourhood]=' + queryFilter.neighValue + '+?filter[partner]=' + queryFilter.partValue + '+?filter[year]=' + queryFilter.partValue,
          success: function(response) {
            debugger;
            // alert('Got the Values' + partValue + yearValue + neighValue);
            console.log(response);
          }, // close success
              // make ajax request
              // query Database - reqgiester the AJAX and write query in PHP
              //relaoad the UI
          }); // close ajax call
  } // close reload projects})
});
