
jQuery(document).ready(function($){

  $('.bxslider').bxSlider({
    mode: 'horizontal',
    infiniteLoop: true,
    speed: 2000,
    pause: 6000,
    auto: true,
    pager: false,
    controls: true
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
    'lower-regular-5'
    ];
  $('.gallery-anchor').each(function(){
    var i = $(this).index();

    if( i === 0 ){
      $(this).addClass(gallery[0]);
    }
    if( i === 1 ){
      // $(this).addClass('flex');
      $(this).addClass(gallery[1]);
    }
    if( i === 2 ){
      // $(this).addClass('flex');
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

  });

});

jQuery(document).ready(function($) {
    var queryFilter = {
      checkedNeigh: '',
      checkedPart: '',
      checkedYear: ''
    };

    $('.foot-sub-menu label').hide();
    $('.neigh-labels').hide();
    $('.part-labels').hide();
    $('.year-labels').hide();
    
    $('.menu-item').hover(function(){
          $(this).children('.foot-sub-menu').toggleClass('current-menu');
    });
    $('.sub-menu-neigh').click(function() {
        if($(this.checked)){
           inputValue = $(this).find('input').val();
           queryFilter.checkedNeigh = ($(this).text()).trim();
           $('.neigh-labels').show().append('<label>'+queryFilter.checkedNeigh+'</label>');
           $(this).parent().hide();
           reloadProjects();
           // Take action to query Database
      }
    });
    $('.sub-menu-part').click(function() {
        if($(this.checked)){
           inputValue = $(this).find('input').val();
           queryFilter.checkedPart = ($(this).text()).trim();
           $('.part-labels').show().append('<label>'+queryFilter.checkedPart+'</label>');
           $(this).parent().hide();
           reloadProjects();
           // Take action to query Database
      }
    });
    $('.sub-menu-year').click(function() {
        if($(this.checked)){
           inputValue = $(this).find('input').val();
           queryFilter.checkedYear = ($(this).text()).trim();
           $('.year-labels').show().append('<label class="visible">'+queryFilter.checkedYear+'</label>');
           $(this).parent().hide();
           reloadProjects();
      }
    });
    console.log(queryFilter);


    function reloadProjects(){

      $.ajax({
        type: 'GET',
        dataType: 'json',
        url: '/wp-json/wp/v2/posts/' + inputValue,
        success: function(data){
  
          console.log(data);
        },
          error: function(data){
      }
      // make ajax request
      // query Database - reqgiester the AJAX and write query in PHP
      //relaoad the UI
    });
    }

});
