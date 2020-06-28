jQuery( function ( $ ) {

	var get_frame;

	$( document.body ).on( 'click', '.ms-image-uploader', function( event ) {
		var $elem = $( this );

		var desire_target   = $elem.parent().find( '.image_url_id' );
		

		event.preventDefault();

		
		get_frame = wp.media.frames.media_file = wp.media({
			
			title: 'Upload an Image',
				button: { text:  'Use this Background Image' },
				library: { type: 'image' }
		});

	
		get_frame.on( 'select', function() {
			
			var get_attach = get_frame.state().get( 'selection' ).first().toJSON();

			
			desire_target.val( get_attach.url );
			
			
		});

		get_frame.open();
	});
	
	
	
	
});