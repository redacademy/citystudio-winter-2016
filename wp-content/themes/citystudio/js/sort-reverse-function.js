jQuery(document).ready(function($) {

      $('#sort').click(function(){
    	var element = this;
        $(element).animate({ 'maxWidth':'0%'}, 800, function(){
      	  $('#sort').removeClass('open');
        })
    });
 });
