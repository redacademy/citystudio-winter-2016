jQuery(document).ready(function($) {
  $('.container').hide();
  if ($('.home')[0]) {
    // $('.site-header').hide();
    $('.site-footer').hide();
  } else {
    $('.site-header').show();
    $('.site-footer').show();
  }
  $('#button').click(function() {
    $('.hero').slideUp();
    $('.container').slideDown();
 	  $('.site-header').show();
  	$('.site-footer').show();
   });
});
