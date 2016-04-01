jQuery(document).ready(function($) {


  $('.home-slider').flickity({
    cellAlign: 'left',
    contain: true,
    initialIndex: 0,
    accessibility: true,
    wrapAround: true,
    autoPlay: true
  });

  $('.main-carousel').flickity({
    cellAlign: 'left',
    contain: true,
    initialIndex: 0,
    accessibility: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: true
  });

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

  $('.gallery-anchor').each(function(){
    var i = $(this).index();
    if( i === 0 ){
      $(this).addClass(gallery[0]);
    }
    if( i === 1 ){
      $(this).addClass(gallery[1]);
    }
    if( i === 2 ){
      $(this).addClass(gallery[2]);
    }
    if( i === 3 ){
      $(this).addClass(gallery[3]);
    }
    if( i === 4 ){
      $(this).addClass(gallery[4]);
    }
    if( i === 5 ){
      $(this).addClass(gallery[5]);
    }
    if( i === 6 ){
      $(this).addClass(gallery[6]);
    }
    if( i === 7 ){
      $(this).addClass(gallery[7]);
    }
    if( i === 8 ){
      $(this).addClass(gallery[8]);
    }
    if( i === 9 ){
      $(this).addClass(gallery[9]);
    }
    if( i === 10 ){
      $(this).addClass(gallery[10]);
    }
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
        $(this).children('.foot-sub-menu').addClass('current-menu');
      }, function() {
        $(this).removeClass('current-menu');
    });

//     $( "td" ).hover(
//  function() {
//    $( this ).addClass( "hover" );
//  }, function() {
//    $( this ).removeClass( "hover" );
//  }
// );

  //   $('.nav-div').on('hover', '.menu-item', function(el) {
  //      $(this).children('.foot-sub-menu').toggleClass('current-menu');
  //  });

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

    console.log(queryFilter);

    function reloadProjects() {

      console.log(queryFilter);
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: api_vars.rest_url + 'wp/v2/project?filter[project_tags]=' + queryFilter.neighValue + '+' + queryFilter.yearValue + '+' + queryFilter.partValue,
            success: function(response) {
                // alert('Got the Values' + partValue + yearValue + neighValue);
                console.log(response);
            }, // close success
            // make ajax request
            // query Database - reqgiester the AJAX and write query in PHP
            //relaoad the UI
        }); // close ajax call
    } // close reload projects})
});
