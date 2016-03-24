jQuery(document).ready(function($) {
	$('.container').hide();
	$( "#button" ).click(function() {
    $('.hero').slideUp();
    $('.container').show();
    $('.container').slideDown();
   });
});