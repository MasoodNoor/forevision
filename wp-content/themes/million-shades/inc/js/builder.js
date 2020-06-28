jQuery(function($) {
	
	
	$('.panel-grid .panel-widget-style').each( function() {
		
		
		var titleTransform = $(this).data('title-text-transform');
		
	
		
		
		
		if ( titleTransform ) {
			$(this).find('.font-heading,h1.nl-widget-title,h2.nl-widget-title,h3.widget-title,h3.nl-widget-title').css('text-transform', titleTransform );
		}
		
		
		
		
		
				
	});
	
	
});