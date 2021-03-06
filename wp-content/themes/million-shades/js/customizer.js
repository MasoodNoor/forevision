
( function( $ ) {

	var api = wp.customize;
	
	wp.customize( 'site-title-type', function( value ) {
		
		
		value.bind( function( newval ) {
		
		if ( 'three' == newval ) {	
		
			$('.site-title').hide();
			
			$('.site-logo').hide();
			
		}

		
		
		if ( 'two' == newval ) {	
		
			$('.site-title').hide();
			
			$('.site-logo').show();
	
		}
		
		if ( 'one' == newval ) {	
		
			$('.site-title').show();
			
			$('.site-logo').hide();
		
		    
		}
		
		
		} );
		
	});
	
	
	wp.customize( 'header_media_position', function( value ) {
		
		
		value.bind( function( newval ) {
		
		if ( 'top' == newval ) {	
		
			$('#header-media-top').show();
			
			$('#header-media-bottom').hide();
			
		}
		
		if ( 'bottom' == newval ) {	
		
			$('#header-media-top').hide();
			
			$('#header-media-bottom').show();
			
		}

		
		} );
		
	});
	
	
	
	wp.customize( 'site-accent-color', function (value) {
			value.bind(function (to) {
				
				$(million_shades_accent).css('color', to );
				$(million_shades_accentbg).css('background-color', to );
				
				$(million_shades_accentborder).css('border-width', '1px');
				$(million_shades_accentborder).css('border-style', 'solid');
				
				
				var alpha = 0.3;
				var rgb = hexToRgb(to);
				
				$(million_shades_accentborder).css('border-color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
				$(million_shades_accentTopborder).css('border-top-color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
		
				
			});
		});
		
		
		
		wp.customize( 'contact-number', function( value ) {
		
		
		value.bind( function( newval ) {
		if ( '2' == newval ) {	
	
			
			$('#item1').css('display','inline-block');
			$('#item2').css('display','inline-block');
			
			$('#item3').css('display','none');
			$('#item4').css('display','none');
			$('#item5').css('display','none');

		}
		if ( '3' == newval ) {	
		
			$('#item1').css('display','inline-block');
			$('#item2').css('display','inline-block');
			
			$('#item3').css('display','inline-block');
			$('#item4').css('display','none');
			$('#item5').css('display','none');
			
			
			
		}
	
		if ( '4' == newval ) {	
		    $('#item1').css('display','inline-block');
			$('#item2').css('display','inline-block');
			
			$('#item3').css('display','inline-block');
			$('#item4').css('display','inline-block');
			$('#item5').css('display','none');
			
		}
		if ( '5' == newval ) {	
			 $('#item1').css('display','inline-block');
			$('#item2').css('display','inline-block');
			
			$('#item3').css('display','inline-block');
			$('#item4').css('display','inline-block');
			$('#item5').css('display','inline-block');
			
		}
	} );
	});	
	
	
	// Topar Social
	wp.customize( 'social-number', function( value ) {
		
		
		value.bind( function( newval ) {
		if ( '2' == newval ) {	
	
			
		$('#ha1').css('display','inline-block');
			$('#ha2').css('display','inline-block');
			$('#ha3').css('display','none');
			$('#ha4').css('display','none');
			
			$('#ha5').css('display','none');
			$('#ha6').css('display','none');
			$('#ha7').css('display','none');
			$('#ha8').css('display','none');
			

		}
		if ( '3' == newval ) {	
		
		$('#ha1').css('display','inline-block');
			$('#ha2').css('display','inline-block');
			$('#ha3').css('display','inline-block');
			$('#ha4').css('display','none');
			
			$('#ha5').css('display','none');
			$('#ha6').css('display','none');
			$('#ha7').css('display','none');
			$('#ha8').css('display','none');
			
			
			
		}
	
		if ( '4' == newval ) {	

			$('#ha1').css('display','inline-block');
			$('#ha2').css('display','inline-block');
			$('#ha3').css('display','inline-block');
			$('#ha4').css('display','inline-block');
			
			$('#ha5').css('display','none');
			$('#ha6').css('display','none');
			$('#ha7').css('display','none');
			$('#ha8').css('display','none');
			
		}
		
		if ( '5' == newval ) {	
			$('#ha1').css('display','inline-block');
			$('#ha2').css('display','inline-block');
			$('#ha3').css('display','inline-block');
			$('#ha4').css('display','inline-block');
			
			$('#ha5').css('display','inline-block');
			
			$('#ha6').css('display','none');
			$('#ha7').css('display','none');
			$('#ha8').css('display','none');
			
		}
		
		if ( '6' == newval ) {	
			    
			$('#ha1').css('display','inline-block');
			$('#ha2').css('display','inline-block');
			$('#ha3').css('display','inline-block');
			$('#ha4').css('display','inline-block');
			
			$('#ha5').css('display','inline-block');
			
			$('#ha6').css('display','inline-block');
			
			$('#ha7').css('display','none');
			$('#ha8').css('display','none');
			
		}
		
			if ( '7' == newval ) {	
		
		$('#ha1').css('display','inline-block');
			$('#ha2').css('display','inline-block');
			$('#ha3').css('display','inline-block');
			$('#ha4').css('display','inline-block');
			
			$('#ha5').css('display','inline-block');
			
			$('#ha6').css('display','inline-block');
			
			$('#ha7').css('display','inline-block');
			$('#ha8').css('display','none');
			
		}
		
		if ( '8' == newval ) {	
			$('#ha1').css('display','inline-block');
			$('#ha2').css('display','inline-block');
			$('#ha3').css('display','inline-block');
			$('#ha4').css('display','inline-block');
			
			$('#ha5').css('display','inline-block');
			
			$('#ha6').css('display','inline-block');
			
			$('#ha7').css('display','inline-block');
			$('#ha8').css('display','inline-block');
			
			
		}
		
		
	} );
	});	
	
	
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		});
	});
	
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		});
	});
	
	wp.customize( 'header-media-title-input', function( value ) {
		value.bind( function( to ) {
			$( '.nl-media-ovr-title' ).text( to );
		});
	});
	
	wp.customize( 'header-media-subtitle-input', function( value ) {
		value.bind( function( to ) {
			$( '.nl-media-ovr-sub-title' ).text( to );
		});
	});
	
	
	
		
	$.each(million_shades_singleControls, function (index, singleControl){
	
		wp.customize(singleControl, function( value ) {
		
				
				value.bind( function( newval ) {
				
				$(million_shades_singleSelectors[index]).css(million_shades_singleProperty[index], newval+'px');
	
				} );
					
		});
	});
	
		// ALIGNMENT 
	
	$.each(million_shades_alignControls, function (index, alignControl){
	
		wp.customize(alignControl, function( value ) {
		
				value.bind( function( newval ) {
				
				$(million_shades_alignSelectors[index]).css('text-align', newval);
	
					} );
		});
	
	});

	$.each(million_shades_justifyControls, function (index, justifyControl){
	
		wp.customize(justifyControl, function( value ) {
		
				value.bind( function( newval ) {
				
				$(million_shades_justifySelectors[index]).css('text-align', newval);
	
					} );
		});
	
	});




	$.each(million_shades_hideControls, function (index, hideControl){
	
		wp.customize(hideControl, function( value ) {
		
				value.bind( function( newval ) {
				if (newval != 1){
				$(million_shades_hideSelectors[index]).show();   
				}
				if (newval == 1){
				$(million_shades_hideSelectors[index]).hide();  
				}
				
				
					
			});
		});
	});

	$.each(million_shades_checkControls, function (index, checkControl){
	
			wp.customize(checkControl, function( value ) {
		
				value.bind( function( newval ) {
				if (newval != 1){
				$(million_shades_checkSelectors[index]).hide();   
				}
				if (newval == 1){
				$(million_shades_checkSelectors[index]).show(); 
				}
			
					
			});
		});
	});
	
		
		wp.customize( 'all-buttons-text-color', function (value) {
			value.bind(function (to) {
				
				$('button, input[type="button"], input[type="reset"], input[type="submit"]').css('color', to );
				
				
			});
		});
		
		wp.customize( 'all-buttons-background-color', function (value) {
			value.bind(function (to) {
				
				$('button, input[type="button"], input[type="reset"], input[type="submit"]').css('background-color', to );
				
				
			});
		});
		wp.customize( 'button-border-color', function (value) {
			value.bind(function (to) {
				
				$(million_shades_buttonSelectors).css('border-color', to );
				
				
			});
		});
		wp.customize( 'button-border-width', function (value) {
			value.bind(function (to) {
				
				$(million_shades_buttonSelectors).css('border-width', to );
				
				
			});
		});
		wp.customize( 'button-border-style', function (value) {
			value.bind(function (to) {
				
				$(million_shades_buttonSelectors).css('border-style', to );
				
				
			});
		});
		
		wp.customize( 'button-border-radius', function (value) {
			value.bind(function (to) {
				
				$(million_shades_buttonSelectors).css('border-radius', to+'px' );
				
				
			});
		});
		
	
		wp.customize( 'buttons-padding-top', function (value) {
				
			value.bind(function (to) {
				
				$(million_shades_buttonSelectors).css('padding-top', to+'px' );
				
				
			});
		});
		wp.customize( 'buttons-padding-bottom', function (value) {
				
			value.bind(function (to) {
				
				$(million_shades_buttonSelectors).css('padding-bottom', to+'px' );
				
				
			});
		});
		wp.customize( 'buttons-padding-left', function (value) {
				
			value.bind(function (to) {
				
				$(million_shades_buttonSelectors).css('padding-left', to+'px' );
				
				
			});
		});
		
		wp.customize( 'buttons-padding-right', function (value) {
				
			value.bind(function (to) {
				
				$(million_shades_buttonSelectors).css('padding-right', to+'px' );
				
				
			});
		});
		
		wp.customize( 'form-input-color', function (value) {
			value.bind(function (to) {
				
				
				$(million_shades_formSelectors).css('color', to );
				
				
			});
		});
		wp.customize( 'form-background-color', function (value) {
			value.bind(function (to) {
				
				
				$(million_shades_formSelectors).css('background-color', to );
				
				
			});
		});
		wp.customize( 'form-border-color', function (value) {
			value.bind(function (to) {
				
				
				$(million_shades_formSelectors).css('border-color', to );
				
				
			});
		});
		
		wp.customize( 'form-border-width', function (value) {
			value.bind(function (to) {
				
				
				$(million_shades_formSelectors).css('border-width', to );
				
				
			});
		});
		
		wp.customize( 'form-border-style', function (value) {
			value.bind(function (to) {
				
				
				$(million_shades_formSelectors).css('border-style', to );
				
				
			});
		});
		wp.customize( 'form-border-radius', function (value) {
			value.bind(function (to) {
				
				
				$(million_shades_formSelectors).css('border-radius', to );
				
				
			});
		});
		
		
			// PAGE LAYOUT
			
		wp.customize( 'page-layout-option', function (value) {
			value.bind(function (to) {
				$('body').removeClass('layout-rightbar layout-leftbar layout-nosidebar')
					.addClass( 'layout-' + to );
				});
		});
		
			// POST LAYOUT
		wp.customize( 'post-layout-option', function (value) {
			value.bind(function (to) {
				$('body').removeClass('layout-rightbar layout-leftbar layout-nosidebar')
					.addClass( 'layout-' + to );
				});
		});
		
			// SINGLE LAYOUT
		wp.customize( 'single-post-layout-option', function (value) {
			value.bind(function (to) {
				$('body').removeClass('layout-rightbar layout-leftbar layout-nosidebar')
					.addClass( 'layout-' + to );
				});
		});
		
	
		wp.customize( 'topbar-contact-input1', function( value ) {
		value.bind( function( to ) {
			$( '.contacts-body span.one' ).text( to );
		});
	});
	
	wp.customize( 'topbar-contact-input2', function( value ) {
		value.bind( function( to ) {
			$( '.contacts-body span.two' ).text( to );
		});
	});
	
	wp.customize( 'topbar-contact-input3', function( value ) {
		value.bind( function( to ) {
			$( '.contacts-body span.three' ).text( to );
		});
	});
	
	wp.customize( 'topbar-contact-input4', function( value ) {
		value.bind( function( to ) {
		   
			$( '.contacts-body span.four' ).text( to );
		    
		});
	});
	
	wp.customize( 'topbar-contact-input5', function( value ) {
		value.bind( function( to ) {
			$( '.contacts-body span.five' ).text( to );
		});
	});

		
		//TOPBAR SOCIAL ICON INPUT
		
		
			var socials = 'fa-behance fa-codepen fa-deviantart fa-digg fa-dribbble fa-dropbox fa-facebook fa-flickr fa-foursquare fa-google-plus fa-github fa-instagram fa-linkedin fa-envelope-o fa-medium fa-pinterest-p fa-get-pocket fa-reddit-alien fa-skype fa-slideshare fa-snapchat-ghost fa-soundcloud fa-spotify fa-stumbleupon fa-tumblr fa-twitter fa-vine fa-vk fa-wordpress fa-youtube';
			
			wp.customize('topbar-social-icon1', function( value ) {
						
				value.bind( function( newval ) {
						
					
			
					$('#social1').removeClass(socials);
		
					$('#social1').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});
			
		
			wp.customize('topbar-social-icon2', function( value ) {
						
				value.bind( function( newval ) {
						
					
					$('#social2').removeClass(socials);
					$('#social2').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});
			
			wp.customize('topbar-social-icon3', function( value ) {
						
				value.bind( function( newval ) {
						
					
					$('#social3').removeClass(socials);
					$('#social3').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});
			
			wp.customize('topbar-social-icon4', function( value ) {
						
				value.bind( function( newval ) {
						
					
					$('#social4').removeClass(socials);
					$('#social4').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});

			wp.customize('topbar-social-icon5', function( value ) {
						
				value.bind( function( newval ) {
						
					
					$('#social5').removeClass(socials);
					$('#social5').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});
			
			wp.customize('topbar-social-icon6', function( value ) {
						
				value.bind( function( newval ) {
						
					
					$('#social6').removeClass(socials);
					$('#social6').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});
		
			wp.customize('topbar-social-icon7', function( value ) {
						
				value.bind( function( newval ) {
						
					
					$('#social7').removeClass(socials);
					$('#social7').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});
			
			wp.customize('topbar-social-icon8', function( value ) {
						
				value.bind( function( newval ) {
						
					
					$('#social8').removeClass(socials);
					$('#social8').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});

			
			wp.customize('topbar-social-border-radius', function( value ) {
						
				value.bind( function( newval ) {
						
					
			
					$('.social-icon-topbar .icon').css('border-radius', newval+'px');
					
					
					
					
	
				} );
				
		
			});
			
			// TOPBAR CONTACT ICON INPUT
			var contacts ='fa-user-o fa-mobile fa-phone fa-phone-square fa-plane fa-plus-circle fa-plus-square fa-eye fa-eyedropper fa-fax fa-feed fa-female fa-gift fa-home fa-globe fa-minus-circle fa-minus-square fa-mortar-board	fa-info-circle fa-mail-reply fa-male fa-leaf fa-laptop fa-key fa-keyboard-o fa-institution fa-inbox fa-image fa-heart fa-heart-o fa-history	fa-headphones fa-hashtag fa-handshake-o fa-group fa-graduation-cap fa-glass fa-gear fa-folder-open-o fa-folder-open fa-folder-o fa-folder-o fa-flag	fa-flash fa-fire fa-film fa-file-video-o fa-file-pdf-o fa-arrow-circle-o-dow fa-arrow-circle-o-left fa-arrow-circle-o-right fa-arrow-circle-down fa-arrow-circle-left fa-arrow-circle-right fa-arrow-circle-up fa-arrow-circle-o-up fa-arrow-right fa-arrow-up fa-arrow fa-arrow-v fa-arrow-h';
			
			wp.customize('topbar-contact-icon1', function( value ) {
						
				value.bind( function( newval ) {
						
					
			
					$('#contact1').removeClass(contacts);
					
					
					
					$('#contact1').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});
			
		
			wp.customize('topbar-contact-icon2', function( value ) {
						
				value.bind( function( newval ) {
						
					
					$('#contact2').removeClass(contacts);
					$('#contact2').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});
			
			wp.customize('topbar-contact-icon3', function( value ) {
						
				value.bind( function( newval ) {
						
					
					$('#contact3').removeClass(contacts);
					$('#contact3').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});
			
			wp.customize('topbar-contact-icon4', function( value ) {
						
				value.bind( function( newval ) {
						
					
					$('#contact4').removeClass(contacts);
					$('#contact4').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});

			wp.customize('topbar-contact-icon5', function( value ) {
						
				value.bind( function( newval ) {
						
					
					$('#contact5').removeClass(contacts);
					$('#contact5').addClass('fa-'+newval);
					
					
	
				} );
				
		
			});
			
			
			
		// SITE LAYOUT	
		wp.customize( 'site-layout', function (value) {
			value.bind(function (to) {
				
				$('body').removeClass('full-width boxed')
				.addClass(to);
				
				});
		});
		
	

		wp.customize( 'hide-scrollup', function (value) {
			value.bind(function (to) {
				if(to == 1){
				$( '#scroll-up').css('display', 'none' );
				} else {
				$( '#scroll-up').css('display', 'block' );
				} 
			});
		});
		
		
		
	// Bottom Border Color
	
	jQuery.each(million_shades_boderBttmColorControls, function (index, boderBttmColorControl){

	wp.customize( boderBttmColorControl ,function( value ) {
		
			value.bind( function( newval ) {
				
				$(million_shades_boderBttmColorSelectors[index]).css('border-bottom-color', newval );
			} );
		});
	
	});
	
	$.each(million_shades_boderBttmColorControls, function (index, boderBttmColorControl){
		
		var colorOpacity1 = boderBttmColorControl + '-opacity';

		wp.customize( boderBttmColorControl ,function( value ) {
		
		wp.customize( colorOpacity1,function( opvalue ) {
				
		opvalue.bind( function( opnewval ) {
			var alpha = opnewval;
			var rgb = hexToRgb(value.get());
				
				$(million_shades_boderBttmColorSelectors[index]).css('border-color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
		
				} );
			
			} );
		
		});
		
	
		
	});
	
	$.each(million_shades_boderBttmWidthControls, function (index, boderBttmWidthControl){
	
	wp.customize( boderBttmWidthControl ,function( value ) {
		
			value.bind( function( newval ) {
				
				$(million_shades_boderBttmWidthSelectors[index]).css('border-bottom-width', newval+'px' );
				
			} );
		});
	});
		
	$.each(million_shades_boderBttmStyleControls, function (index, boderBttmStyleControl){
	wp.customize( boderBttmStyleControl ,function( value ) {
		
			value.bind( function( newval ) {
				
				$(million_shades_boderBttmStyleSelectors[index]).css('border-bottom-style', newval );
				
			} );
		});

	});	
	// Top Border Color
	
	jQuery.each(million_shades_bodertopColorControls, function (index, bodertopColorControl){
		
	
	wp.customize( bodertopColorControl ,function( value ) {
		
			value.bind( function( newval ) {
				
				$(million_shades_bodertopColorSelectors[index]).css('border-top-color', newval );
			} );
		});
	
	});
	
	$.each(million_shades_bodertopColorControls, function (index, bodertopColorControl){
		
		var colorOpacity1 = bodertopColorControl + '-opacity';

		wp.customize( bodertopColorControl ,function( value ) {
		
		wp.customize( colorOpacity1,function( opvalue ) {
				
		opvalue.bind( function( opnewval ) {
			var alpha = opnewval;
			var rgb = hexToRgb(value.get());
				
				$(million_shades_bodertopColorSelectors[index]).css('border-color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
		
				} );
			
			} );
		
		});
		
	
		
	});
	
	$.each(million_shades_bodertopWidthControls, function (index, bodertopWidthControl){
	
	wp.customize( bodertopWidthControl ,function( value ) {
		
			value.bind( function( newval ) {
				
				$(million_shades_bodertopWidthSelectors[index]).css('border-top-width', newval+'px' );
				
			} );
		});
	});
		
	$.each(million_shades_bodertopStyleControls, function (index, bodertopStyleControl){
	wp.customize( bodertopStyleControl ,function( value ) {
		
			value.bind( function( newval ) {
				
				$(million_shades_bodertopStyleSelectors[index]).css('border-top-style', newval );
				
			} );
		});

	});
	
	// Two Side Border Color
	
	jQuery.each(million_shades_bodertwoColorControls, function (index, bodertwoColorControl){
		
	
	wp.customize( bodertwoColorControl ,function( value ) {
		
			value.bind( function( newval ) {
				
				$(million_shades_bodertwoColorSelectors[index]).css('border-top-color', newval );
				$(million_shades_bodertwoColorSelectors[index]).css('border-bottom-color', newval );
				
			} );
		});
	
	});
	
	$.each(million_shades_bodertwoColorControls, function (index, bodertwoColorControl){
		
		var colorOpacity1 = bodertwoColorControl + '-opacity';

		wp.customize( bodertwoColorControl ,function( value ) {
		
		wp.customize( colorOpacity1,function( opvalue ) {
				
		opvalue.bind( function( opnewval ) {
			var alpha = opnewval;
			var rgb = hexToRgb(value.get());
				
				$(million_shades_bodertwoColorSelectors[index]).css('border-top-color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
				$(million_shades_bodertwoColorSelectors[index]).css('border-bottom-color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
		
				} );
			
			} );
		
		});
		
	
		
	});
	
	
	
	$.each(million_shades_bodertwoWidthControls, function (index, bodertwoWidthControl){
	
	wp.customize( bodertwoWidthControl ,function( value ) {
		
			value.bind( function( newval ) {
				
				$(million_shades_bodertwoWidthSelectors[index]).css('border-top-width', newval+'px' );
				$(million_shades_bodertwoWidthSelectors[index]).css('border-bottom-width', newval+'px' );
				
			} );
		});
	});
		  
	$.each(million_shades_bodertwoSyleControls, function (index, bodertwoStyleControl){
	wp.customize( bodertwoStyleControl ,function( value ) {
		
			value.bind( function( newval ) {
				
				$(million_shades_bodertwoStyleSelectors[index]).css('border-top-style', newval );
				$(million_shades_bodertwoStyleSelectors[index]).css('border-bottom-style', newval );
				
			} );
		});

	});
	

		//Border color
	
	$.each(million_shades_borderBase, function (index, borderControl){
		var borderColor = borderControl + '-border-color';
		var borderWidth = borderControl + '-border-width';
		var borderStyle = borderControl + '-border-style';
		var borderRadius = borderControl + '-border-radius';
		
	
	wp.customize( borderColor ,function( value ) {
		
			value.bind( function( newval ) {
				var widthVal = wp.customize.instance(borderWidth).get();
				var styleVal = wp.customize.instance(borderStyle).get();
				var radiusVal = wp.customize.instance(borderRadius).get();
				
				$(million_shades_borderSelectors[index]).css('border-color', newval );
				$(million_shades_borderSelectors[index]).css('border-width', widthVal+'px' );
				$(million_shades_borderSelectors[index]).css('border-radius', radiusVal+'px' );
				$(million_shades_borderSelectors[index]).css('border-style', styleVal );
				
			
			} );
		});
		
		
	});
	
	
	
	// Border Color Opacity
	
	
	$.each(million_shades_borderBase, function (index, borderControl1){
		var borderColor1 = borderControl1 + '-border-color';
		var colorOpacity1 = borderColor1 + '-opacity';

		wp.customize( borderColor1 ,function( value ) {
		
		wp.customize( colorOpacity1,function( opvalue ) {
				
		opvalue.bind( function( opnewval ) {
			var alpha = opnewval;
			var rgb = hexToRgb(value.get());
				
				$(million_shades_borderSelectors[index]).css('border-color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
		
				} );
			
			} );
		
		});
		
		
		
		
	});

	
	//Border Width
	
	$.each(million_shades_borderBase, function (index, borderControl){
		var borderWidth = borderControl + '-border-width';
		var borderColor = borderControl + '-border-color';
		var borderOpacity = borderControl + '-border-color-opacity';
		var borderStyle = borderControl + '-border-style';
		var borderRadius = borderControl + '-border-radius';
		
		
		wp.customize( borderWidth ,function( value ) {
		
			value.bind( function( newval ) {
				var colorVal = wp.customize.instance(borderColor).get();
				var styleVal = wp.customize.instance(borderStyle).get();
				var radiusVal = wp.customize.instance(borderRadius).get();
				var opacityVal = wp.customize.instance(borderOpacity).get();
				$(borderSelectors[index]).css('border-style', styleVal);
				
				$(million_shades_borderSelectors[index]).css('border-radius', radiusVal+'px' );
				var alpha = opacityVal;
				var rgb = hexToRgb(colorVal);
				
				$(million_shades_borderSelectors[index]).css('border-color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
				$(million_shades_borderSelectors[index]).css('border-width', newval+'px' );
				
				
			} );
		});
		
		
	});
	
	//Border Radius
	$.each(million_shades_borderBase, function (index, borderControl){
		var borderWidth = borderControl + '-border-width';
		var borderColor = borderControl + '-border-color';
		
		var borderStyle = borderControl + '-border-style';
		var borderRadius = borderControl + '-border-radius';
		
		
		wp.customize( borderRadius ,function( value ) {
		
			value.bind( function( newval ) {
				
				var colorVal = wp.customize.instance(borderColor).get();
				var widthVal = wp.customize.instance(borderWidth).get();
				var styleVal = wp.customize.instance(borderStyle).get();
				$(million_shades_borderSelectors[index]).css('border-width', widthVal+'px');
				$(million_shades_borderSelectors[index]).css('border-radius', newval+'px');
				$(million_shades_borderSelectors[index]).css('border-color', colorVal );
				$(million_shades_borderSelectors[index]).css('border-style', styleVal );
				
				
				
			} );
		});
		
		
	});
	
	//Border Style
		$.each(million_shades_borderBase, function (index, borderControl){
		var borderWidth = borderControl + '-border-width';
		var borderColor = borderControl + '-border-color';
		
		var borderStyle = borderControl + '-border-style';
		var borderRadius = borderControl + '-border-radius';
		
		
		wp.customize( borderStyle ,function( value ) {
		
			value.bind( function( newval ) {
				
				var colorVal = wp.customize.instance(borderColor).get();
				var widthVal = wp.customize.instance(borderWidth).get();
				var radiusVal = wp.customize.instance(borderRadius).get();
				$(million_shades_borderSelectors[index]).css('border-width', widthVal+'px' );
				$(million_shades_borderSelectors[index]).css('border-style', newval);
				$(million_shades_borderSelectors[index]).css('border-color', colorVal );
				$(million_shades_borderSelectors[index]).css('border-radius', radiusVal+'px' );
				
				
				
			} );
		});
		
		
	});
	
	// Convert hexadecimal color to RGB.
	
	function hexToRgb(hex) {
	    var output = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
	    return output ? {
	        r: parseInt(output[1], 16),
	        g: parseInt(output[2], 16),
	        b: parseInt(output[3], 16)
	    } : null;
	}
	
	
	// ALL COLORS 
	$.each(million_shades_colorParams, function (index, colorParam){
		
	wp.customize( colorParam ,function( value ) {
		
			value.bind( function( newval ) {
				$(million_shades_selectorParams[index]).css('color', newval );
			} );
		});
		
		
	});
	
	
	$.each(million_shades_colorParams, function (index, colorParam){
		
		var colorOpacity = colorParam + '-opacity';

		wp.customize( colorParam ,function( value ) {
				
		wp.customize( colorOpacity,function( opvalue ) {
				
		opvalue.bind( function( opnewval ) {
			var alpha = opnewval;
			var rgb = hexToRgb(value.get());
				
				$(million_shades_selectorParams[index]).css('color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
		
				} );
			
			} );
		
		});
		
		
		
		
	});

	
	$.each(million_shades_colorParams, function (index, colorParam){
		
		var colorOpacity = colorParam + '-opacity';

		wp.customize( colorParam ,function( value ) {
		
		
		value.bind( function( newval ) {
				
		wp.customize( colorOpacity,function( opvalue ) {
				
		opvalue.bind( function( opnewval ) {
			var alpha = opnewval;
			var rgb = hexToRgb(newval);
				
				$(million_shades_selectorParams[index]).css('color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
		
				} );
			
			} );
		
		});
		
		});
		
		
	});
	
	
	// BACKGROUND COLOR
	
	$.each(million_shades_bgcolorParams, function (index, bgcolorParam){
		
	wp.customize( bgcolorParam ,function( value ) {
		
			value.bind( function( newval ) {
				$(million_shades_bgselectorParams[index]).css('background-color', newval );
			} );
		});
	
	});
	
	
	
	$.each(million_shades_bgcolorParams, function (index, bgcolorParam){
		
		var colorOpacity = bgcolorParam + '-opacity';

		wp.customize( bgcolorParam ,function( value ) {
		
		
		
				
		wp.customize( colorOpacity,function( opvalue ) {
				
		opvalue.bind( function( opnewval ) {
			var alpha = opnewval;
			var rgb = hexToRgb(value.get());
				
				$(million_shades_bgselectorParams[index]).css('background-color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
		
				} );
			
			} );
		
		});
		
		
		
		
	});

	$.each(million_shades_bgcolorParams, function (index, bgcolorParam){
		
		var colorOpacity = bgcolorParam + '-opacity';

		wp.customize( bgcolorParam ,function( value ) {
		
		
		value.bind( function( newval ) {
				
		wp.customize( colorOpacity,function( opvalue ) {
				
		opvalue.bind( function( opnewval ) {
			var alpha = opnewval;
			var rgb = hexToRgb(newval);
				
				$(million_shades_bgselectorParams[index]).css('background-color', 'rgba( ' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',' + alpha + ' )' );
		
				} );
			
			} );
		
		});
		
		});
		
		
	});
	
	
	// ALL FONTS 
	
	
	//Site Primary Font Family
	wp.customize('site-primary-font-family',function( value ) {
		
				value.bind( function( newval ) {
						$('*:not(.fa)').css('font-family', newval);
				} );

	});
	
	//individual font
		$.each(million_shades_fontSizeControls, function (index, fontSizeControl){
	
		wp.customize(fontSizeControl, function( value ) {
		
				value.bind( function( newval ) {
			
					$(million_shades_fontSizeSelectors[index]).css('font-size', newval+'px');
			
	
				} );
			});
	
		});
		
		/***********************/
		if (million_shades_font_pro == 'million_Pro'){
			
		$.each(million_shades_fontParams, function (index, million_shades_fontParam){
		
		
		wp.customize(million_shades_fontParam,function( value ) {
		
				value.bind( function( newval ) {
						$(million_shades_fontselectorParams[index]).css('font-family', newval);
				} );
				
		
			});

	
		
	});
	
		
	$.each(million_shades_fontWeightParams, function (index, million_shades_fontWeightParam){
		
		
		
		wp.customize(million_shades_fontWeightParam,function( value ) {
		
				value.bind( function( newval ) {
						$(million_shades_fontWeightSelectors[index]).css('font-weight', newval);
				} );
				
		
			});

	
		
	});
	
	$.each(million_shades_fontStyleParams, function (index, million_shades_fontStyleParam){
		
		
		
		wp.customize(million_shades_fontStyleParam,function( value ) {
		
				value.bind( function( newval ) {
						$(million_shades_fontStyleSelectors[index]).css('font-style', newval);
				} );
				
		
			});

		
	});
	
	
	$.each(million_shades_fontTransformParams, function (index, million_shades_fontTransformParam){
		
		
		
		wp.customize(million_shades_fontTransformParam,function( value ) {
		
				value.bind( function( newval ) {
						$(million_shades_fontTransformSelectors[index]).css('text-transform', newval);
				} );
				
		
			});

		
		
	});
	
	
	
	
	$.each(million_shades_fontSpacingParams, function (index, million_shades_fontSpacingParam){
		
		
		
		wp.customize(million_shades_fontSpacingParam,function( value ) {
		
				value.bind( function( newval ) {
						$(million_shades_fontSpacingSelectors[index]).css('letter-spacing', newval+'px');
				} );
				
		
			});

		
		
	});
	
	
	
	$.each(million_shades_fontSizesParams, function (index, million_shades_fontSizesParam){
		
		
		
		wp.customize(million_shades_fontSizesParam,function( value ) {
		
				value.bind( function( newval ) {
						$(million_shades_fontSizesSelectors[index]).css('font-size', newval+'px');
				} );
				
		
			});

		
		
	});
	
	$.each(million_shades_fontHeightParams, function (index, million_shades_fontHeightParam){

		wp.customize(million_shades_fontHeightParam, function( value ) {
		
				value.bind( function( newval ) {
						$(million_shades_fontHeightSelectors[index]).css('line-height', newval +'px');
				} );
				
		
			});

	});
		
	}

		//input site credit and read more
		
	$.each(million_shades_readMoreControls, function (index, readMoreControl){
	
	
	wp.customize( readMoreControl,function( value ) {
		
			value.bind( function( newval ) {
				
				$(million_shades_readMoreSelectors[index]).text( newval );
			} );
		});
	
	});	
		
	
// image 


		$.each(million_shades_imgControls, function (index, imgControl){
	
			wp.customize(imgControl, function( value ) {
		
				value.bind( function( newval ) {
						
					
						
					$(million_shades_imgSelectors[index]).css( 'background-image', 'url( ' + newval + ')' );
					
				
				} );
				
		
			});

		});
	
	
	
	
	wp.customize( 'site-background-type' ,function( value ) {
		
			value.bind( function( newval ) {
				if(newval == 'one'){
				$('body.boxed').css('background-image', 'none');
				}
				if (newval == 'two'){
					var oldvaltype = wp.customize.instance('background_image').get();
					
					$('body.boxed').css( 'background-image', 'url( ' + oldvaltype + ')' );
				}
				if (newval == 'three'){
					var oldpattype = wp.customize.instance('site-background-pattern').get();
					
					$('body.boxed').css('background-image', 'url( ' + million_shades_src + oldpattype +'.jpg' +')');
				}
				
			} );
				
		
	});
	
	wp.customize('background_image', function( value ) {
		
				value.bind( function( newval ) {
						
				
						
					$('body.boxed').css( 'background-image', 'url( ' + newval + ')!important' );
					
				
				} );
				
		
	});
	
	wp.customize('site-background-pattern', function( value ) {
		
				value.bind( function( newval ) {
						
				
						
					$('body.boxed').css( 'background-image', 'url( ' + million_shades_src + newval +'.jpg' +')');
					
				
				} );
				
		
	});
	

		wp.customize( 'footer-info-height' ,function( value ) {
		
			value.bind( function( newval ) {
				
				$('.site-info').css('height', newval+'px' );
				
			} );
		});
		
	
	
	/*****    *****/
	
	// Scroll-Bar
	wp.customize('scroll-up-style', function( value ) {
		
		value.bind( function( newval ) {
			var selector = 'scroll-up-'+ newval;
			$('#scroll-up').removeClass('scroll-up-sqaure scroll-up-circle')
			.addClass(selector);

		} );
	});
	
	wp.customize('scroll-up-icon', function( value ) {
		
		value.bind( function( newval ) {
			var selector = 'fa-'+ newval;
			$('#scroll-up i.fa').removeClass('fa-angle-double-up fa-chevron-up fa-angle-up')
			.addClass(selector);

		} );
	});

	wp.customize( 'scroll-up-icon-size',function( value ) {
		
			value.bind( function( newval ) {
			
			var design = wp.customize.instance('scroll-up-style').get();
			var iconsize = $('.scroll-up-circle i.fa,.scroll-up-sqaure i.fa');
			var circle = $('.scroll-up-circle,.scroll-up-sqaure');
	
			var param = newval * 2 ;
			iconsize.css('font-size', newval+'px' );
			circle.css('width', param+'px' );
			circle.css('height', param+'px' );
			circle.css('line-height', param+'px' );
			circle.css('padding', '0px' );
	

			} );
	} );
	
	
	
	
	
	
	

	
} )( jQuery );
