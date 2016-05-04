jQuery(document).ready(function($) {
	$('.site-header').show();	
  if ($('.home')[0]) {
    $('.social-icons-div').hide();
  } else {
    $('.site-header').show();
    $('.site-footer').show();
  }
});
