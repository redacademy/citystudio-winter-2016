jQuery(document).ready(function($) {
	$('.container').hide();
	$('.site-header').hide();
  $('.site-footer').hide();
	$( "#button" ).click(function() {
    $('.hero').slideUp();
    $('.container').show();
    $('.container').slideDown();
  $('.site-header').show();
  $('.site-footer').show();
   });
});
