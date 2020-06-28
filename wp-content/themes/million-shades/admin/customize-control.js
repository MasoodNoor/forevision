

(function( $ ) {
 
    wp.customize.bind( 'ready', function() { // Ready?

    var customize = this; // Customize object alias.
	
	
	var titleControls = customize.section( 'site-title' ).controls();
		titleControls.splice(0,1);
		
	
	var logoOnly = ['logo-heading','custom_logo'];
	var titleOnly = ['blogname','site-title-text-color','site-title-color-heading','site-title-text-color-opacity','site-title-font-size','site-title-font-heading'];
	
	
	
	
	customize( 'site-title-type', function( value ) {
		
		
		value.bind( function( newval ) {
		

		if ( 'three' == newval ) {	
		
			
			_.each(titleControls , function(titleControl){
					var setting = titleControl.id;
				customize.control(setting).deactivate({duration: 0});

			});
	
		}

	
	if ( 'one' == newval ) {	
		
		_.each(million_shades_title_only, function(title){
					
				customize.control(title).activate({duration: 0});

			});
			
		_.each(logoOnly, function(logocontrol){
			
				customize.control(logocontrol).deactivate({duration: 0});

		});
		
	}
		
	if ( 'two' == newval ) {	
		
			
		_.each(million_shades_title_only, function(title){
					
				customize.control(title).deactivate({duration: 0});

			});
			
		_.each(logoOnly, function(logocontrol){
			
				customize.control(logocontrol).activate({duration: 0});

		});
		
		
	}
	
	
	
	    });
		
	});
	
	
	
// site description

		var descriptionControls = customize.section( 'site-description' ).controls();
		descriptionControls.splice(0,1);
	
	customize( 'hide-site-description', function( value ) {
		
		value.bind( function( newval ) {
				
			if ( 1 == newval ) {
			
			_.each(descriptionControls , function(descriptionControl){
							var setting = descriptionControl.id;
				customize.control(setting).deactivate({duration: 0});

				});
			
	
			} else {
			
				_.each(descriptionControls , function(descriptionControl){
					var setting = descriptionControl.id;
				customize.control(setting).activate({duration: 0});

				});

				
			}
		});
	});
	
	
	//header media type
	
	var headerImages = customize.section( 'header_image' ).controls();
		headerImages.splice(0,1);
		
	
	customize( 'header-media-type', function( value ) {
		
		
		value.bind( function( newval ) {
		

		if ( 'none' == newval ) {	
		
			
			_.each(headerImages , function(headerImage){
					var setting = headerImage.id;
				customize.control(setting).deactivate({duration: 0});

			});
	
		}

	
	if ( 'image' == newval ) {	
		
		
					
			_.each(headerImages , function(headerImage){
					var setting = headerImage.id;
				customize.control(setting).deactivate({duration: 0});

			});
			
			
			
			_.each(million_shades_media_image_only, function(million_shades_media_image){
			
				customize.control(million_shades_media_image).activate({duration: 0});

			});
			
	
	}
		
	if ( 'video' == newval ) {	
		
		_.each(headerImages , function(headerImage){
					var setting = headerImage.id;
				customize.control(setting).deactivate({duration: 0});

			});
			
			
			
			_.each(million_shades_media_video_only, function(million_shades_media_video){
			
				customize.control(million_shades_media_video).activate({duration: 0});

			});
			
		
		
	}
	
		if ( 'slide' == newval ) {	
		
		_.each(headerImages , function(headerImage){
					var setting = headerImage.id;
				customize.control(setting).deactivate({duration: 0});

			});
			
			
			
			_.each(million_shades_media_slide_only, function(million_shades_media_slide){
			
				customize.control(million_shades_media_slide).activate({duration: 0});

			});
	
	}
	
	
	
	    });
		
	});
	
		
		
		wp.customize( 'site-background-type' ,function( value ) {
		
			value.bind( function( newval ) {
				
				if(newval == 'one'){
					
				customize.control('background_color').activate({duration: 0});
				
				customize.control('site-background-color-heading').activate({duration: 0});
				customize.control('site-content-background-color').activate({duration: 0});
				customize.control('site-content-text-color').activate({duration: 0});
				customize.control('background_image').deactivate({duration: 0});
				
				customize.control('site-background-pattern').deactivate({duration: 0});
				customize.control('site-content-link-color').activate({duration: 0});
				
				
				}
				
				if(newval == 'two'){
					
					customize.control('background_image').activate({duration: 0});
					customize.control('background_color').deactivate({duration: 0});
					customize.control('site-background-pattern').deactivate({duration: 0});
					customize.control('site-background-color-heading').activate({duration: 0});
					customize.control('site-content-background-color').activate({duration: 0});
					customize.control('site-content-text-color').activate({duration: 0});
					customize.control('site-content-link-color').activate({duration: 0});
				}
				
				if(newval == 'three'){
					
					customize.control('background_image').deactivate({duration: 0});
					customize.control('background_color').deactivate({duration: 0});
					customize.control('site-background-color-heading').activate({duration: 0});
					customize.control('site-background-pattern').activate({duration: 0});
					customize.control('site-content-background-color').activate({duration: 0});
					customize.control('site-content-text-color').activate({duration: 0});
		
				}
			
			} );
		
		});
		
	
	

		//SCROLL UP 
		var scrollUp = customize.section( 'scroll-up' ).controls();
		scrollUp.splice(0,1);
		
		wp.customize( 'hide-scrollup' ,function( value ) {
					
	
			value.bind( function( newval ) {
				if (newval == 1){
		_.each( scrollUp, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).deactivate({duration: 0});
				
					});
				}
						if (newval != 1){
		_.each( scrollUp, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).activate({duration: 0});
				
					});
				}
		} );
	});	
		
		
	// PAGING 


	
	var paginations = customize.section( 'pagination' ).controls();
		paginations.splice(0,1);
		
		
		
		wp.customize( 'hide-paging' ,function( value ) {
					

			value.bind( function( newval ) {
				if (newval == 1){
		_.each( paginations, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).deactivate({duration: 0});
				
					});
				}
				
				
						if (newval != 1){
		_.each( paginations, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).activate({duration: 0});
				
					});
					
				}
				
				
				
		} );
	});	
		



// Hide single Meta
		var singlemetas = customize.section( 'single-meta' ).controls();
		singlemetas.splice(0,1);	
		
		wp.customize( 'hide-single-meta' ,function( value ) {
					

			value.bind( function( newval ) {
				if (newval == 1){
		_.each( singlemetas, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).deactivate({duration: 0});
				
					});
				}
				
				
						if (newval != 1){
		_.each( singlemetas, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).activate({duration: 0});
				
					});
	
	
					
				}
			});
		});	

		
		
	// Hide Post Meta
		var postmetas = customize.section( 'post-meta' ).controls();
		postmetas.splice(0,1);	
		
		wp.customize( 'hide-post-meta' ,function( value ) {
					

			value.bind( function( newval ) {
				if (newval == 1){
		_.each( postmetas, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).deactivate({duration: 0});
				
					});
				}
				
				
						if (newval != 1){
		_.each( postmetas, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).activate({duration: 0});
				
					});
		
				}
			});
		});
		
		// Hide Post Title
		

		var posttitles = customize.section( 'post-title' ).controls();
		posttitles.splice(0,1);

		wp.customize( 'hide-post-title' ,function( value ) {
					

			value.bind( function( newval ) {
				if (newval == 1){
		_.each( posttitles, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).deactivate({duration: 0});
				
					});
				}
				
				
						if (newval != 1){
		_.each( posttitles, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).activate({duration: 0});
				
					});
					

				}
				
				
				
		} );
	});	
	

	
	// Hide Single Title
		

		var singletitles = customize.section( 'single-header' ).controls();
		singletitles.splice(0,1);

		wp.customize( 'hide-single-title' ,function( value ) {
					

			value.bind( function( newval ) {
				if (newval == 1){
		_.each( singletitles, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).deactivate({duration: 0});
				
					});
				}
				
				
						if (newval != 1){
		_.each( singletitles, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).activate({duration: 0});
				
					});
				
					
				}
				
				
				
		} );
	});	
	
	
	// Hide Page Title
	
	var pagetitles = customize.section( 'page-header').controls();
		pagetitles.splice(0,1);

	wp.customize( 'hide-page-title' ,function( value ) {
					

		value.bind( function( newval ) {
				if (newval == 1){
		_.each( pagetitles, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).deactivate({duration: 0});
				
					});
				}
				
				
			else {
		_.each( pagetitles, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).activate({duration: 0});
				
					});
					
				
					
				}
				
				
				
		} );
	});	
	
	
	
	//ENABLE SITE LAYOUT

var sitelayouts = customize.section( 'site-layout' ).controls();
		sitelayouts.splice(0,1);
	
	wp.customize( 'site-layout' ,function( value ) {
					

			value.bind( function( newval ) {
				
				if (newval == 'full-width'){
		_.each( sitelayouts, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).deactivate({duration: 0});
				
					});
				}
				
				
				if (newval == 'boxed'){
		_.each( sitelayouts, function ( controlsetting ) {
					var setting = controlsetting.id;
					
				customize.control(setting).activate({duration: 0});
				
					});
						

					
				}
				
				
				
		} );
	});	
	
	
	// TOPBAR SECTION
	
	
	var topbarControls = ['topbar-color-heading','topbar-background-color','topbar-background-color-opacity','topbar-border-heading',
	'topbar-bottom-border-color','topbar-bottom-border-color-opacity','topbar-bottom-border-width','topbar-bottom-border-style'];
	
	// Enable Topbar
	customize('hide-topbar',function( value ) {
		value.bind( function( newval ) {
			if ( 1 == newval) {
			
			_.each(topbarControls , function(topbarControl){
			
				customize.control(topbarControl).deactivate({duration: 0});
				

				});
			customize.section( 'topbar-contact' ).deactivate({duration: 0});
			customize.section( 'topbar-social' ).deactivate({duration: 0});
			
			}
			else {
			
			_.each(topbarControls , function(topbarControl){
			
				customize.control(topbarControl).activate({duration: 0});
				

				});
			customize.section( 'topbar-contact' ).activate({duration: 0});
			customize.section( 'topbar-social' ).activate({duration: 0});
			}
		} );
	});

	
	
	// topbar contact
	
	
		wp.customize( 'contact-number' ,function( value ) {
					

			
				value.bind( function( newval ) {
					if (newval == 2){
					for (i = 1; i < 3; i++) { 
						var contact = 'topbar-contact-input' + i;
						customize.control(contact).activate({duration: 0});
					}
					for (i = 1; i < 3; i++) { 
						var contact = 'topbar-contact-icon' + i;
						customize.control(contact).activate({duration: 0});
					}
					for (i = 3; i < 6; i++) { 
						var contact = 'topbar-contact-input' + i;
						customize.control(contact).deactivate({duration: 0});
					}
					for (i = 3; i < 6; i++) { 
						var contact = 'topbar-contact-icon' + i;
						customize.control(contact).deactivate({duration: 0});
					}
					}
					
					
					if (newval == 3){
					for (i = 1; i < 4; i++) { 
						var contact = 'topbar-contact-input' + i;
						customize.control(contact).activate({duration: 0});
					}
					for (i = 1; i < 4; i++) { 
						var contact = 'topbar-contact-icon' + i;
						customize.control(contact).activate({duration: 0});
					}
					for (i = 4; i < 6; i++) { 
						var contact = 'topbar-contact-input' + i;
						customize.control(contact).deactivate({duration: 0});
					}
					for (i = 4; i < 6; i++) { 
						var contact = 'topbar-contact-icon' + i;
						customize.control(contact).deactivate({duration: 0});
					}
					}
					
					if (newval == 4){
					for (i = 1; i < 5; i++) { 
						var contact = 'topbar-contact-input' + i;
						customize.control(contact).activate({duration: 0});
					}
					for (i = 1; i < 5; i++) { 
						var contact = 'topbar-contact-icon' + i;
						customize.control(contact).activate({duration: 0});
					}
					for (i = 5; i < 6; i++) { 
						var contact = 'topbar-contact-input' + i;
						customize.control(contact).deactivate({duration: 0});
					}
					for (i = 5; i < 6; i++) { 
						var contact = 'topbar-contact-icon' + i;
						customize.control(contact).deactivate({duration: 0});
					}
					}
					
					if (newval == 5){
					for (i = 1; i < 6; i++) { 
						var contact = 'topbar-contact-input' + i;
						customize.control(contact).activate({duration: 0});
					}
					for (i = 1; i < 6; i++) { 
						var contact = 'topbar-contact-icon' + i;
						customize.control(contact).activate({duration: 0});
					}
					
					}
				});
		
			});
	
		// topbar social


	wp.customize( 'social-number' ,function( value ) {
					

			
				value.bind( function( newval ) {
					
				if (newval == '2'){
					for (i = 1; i < 3; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).activate({duration: 0});
					}
					for (i = 1; i < 3; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).activate({duration: 0});
					}
					for (i = 3; i < 9; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).deactivate({duration: 0});
					}
					for (i = 3; i < 9; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).deactivate({duration: 0});
					}
				}
					
					
				if (newval == 3){
					for (i = 1; i < 4; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).activate({duration: 0});
					}
					for (i = 1; i < 4; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).activate({duration: 0});
					}
					for (i = 4; i < 9; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).deactivate({duration: 0});
					}
					for (i = 4; i < 9; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).deactivate({duration: 0});
					}
				}
					
				if (newval == 4){
					for (i = 1; i < 5; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).activate({duration: 0});
					}
					for (i = 1; i < 5; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).activate({duration: 0});
					}
					for (i = 5; i < 9; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).deactivate({duration: 0});
					}
					for (i = 5; i < 9; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).deactivate({duration: 0});
					}
				}
					
				if (newval == 5){
					for (i = 1; i < 6; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).activate({duration: 0});
					}
					for (i = 1; i < 6; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).activate({duration: 0});
					}
					
					for (i = 6; i < 9; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).deactivate({duration: 0});
					}
					for (i = 6; i < 9; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).deactivate({duration: 0});
					}
				}
					
				if (newval == '6'){
					for (i = 1; i < 7; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).activate({duration: 0});
					}
					for (i = 1; i < 7; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).activate({duration: 0});
					}
					
					for (i = 7; i < 9; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).deactivate({duration: 0});
					}
					for (i = 7; i < 9; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).deactivate({duration: 0});
					}
				}
					
				
					
				if (newval == '7'){
					for (i = 1; i < 8; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).activate({duration: 0});
					}
					for (i = 1; i < 8; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).activate({duration: 0});
					}
					
					for (i = 8; i < 9; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).deactivate({duration: 0});
					}
					for (i = 8; i < 9; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).deactivate({duration: 0});
					}
					
				}
					
				if (newval == '8'){
					for (i = 1; i < 9; i++) { 
						var social = 'topbar-social-url' + i;
						customize.control(social).activate({duration: 0});
					}
					for (i = 1; i < 9; i++) { 
						var social = 'topbar-social-icon' + i;
						customize.control(social).activate({duration: 0});
					}
					
				}
				
					
		
				
					
		});
		
	});
	
	customize('ovr_heights',function( value ) {
		
		value.bind( function( newval ) {
			
			
			
			if ( 'all' == newval) {
		
				customize.control('header_ovl_style').deactivate({duration: 0});
			}
			else {
			
				customize.control('header_ovl_style').activate({duration: 0});
				
			
				}
			
		} );
	});

	





 });
 
})( jQuery );