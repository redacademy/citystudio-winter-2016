jQuery(document).ready(function($) {
  $('.container').hide();
  if ($('.home')) {
    $('.site-header').hide();
    $('footer').hide();
  } else {
    $('.site-header').show();
    $('footer').show();
  }
  $('#button').click(function() {
    $('.hero').slideUp();
    $('.container').slideDown();
 	  $('.site-header').show();
  	$('.site-footer').show();
   });
});
