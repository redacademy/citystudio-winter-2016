jQuery(document).ready(function($) {

    $('#sort').click(function(){
      	  $('#sort').addClass('open');
      	if($(this).data('clicked', true)) {
			$('.refresh').click(function(){
        	  $('.refresh').removeClass('open');
      		});		
		}

    });

});
