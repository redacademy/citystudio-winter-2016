jQuery(document).ready(function($) {
	$('.site-header').show();	
  if ($('.home')[0]) {
  } else {
    $('.site-header').show();
    $('.site-footer').show();
  }
});
