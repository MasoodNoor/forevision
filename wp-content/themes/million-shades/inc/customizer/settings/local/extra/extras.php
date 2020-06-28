<?php

	$accent = million_shades_get_accent_color_mod();
	$accentRgb	= million_shades_hex2rgba($accent, 0.3);
	
	$wp_customize->get_control( 'blogname'  )->section   ='site-title';
	$wp_customize->get_control( 'blogname'  )->label   = __('Site Title Input','million-shades');
	$wp_customize->get_control( 'blogname'  )->priority  = 50;
	$wp_customize->get_control( 'blogdescription'  )->priority  = 71;
	$wp_customize->get_control( 'blogdescription'  )->label  =__('Site Description Input','million-shades');
	$wp_customize->get_control( 'blogdescription'  )->section   ='site-description';
	$wp_customize->get_control( 'custom_logo'  )->section   = 'site-title';
	$wp_customize->get_control( 'custom_logo'  )->priority   = '119';
	$wp_customize->get_control( 'site_icon')->section ='site-header';
	$wp_customize->get_control( 'background_color')->section ='background_image';
	$wp_customize->get_section( 'background_image')->panel ='layout';
	$wp_customize->get_control( 'background_preset')->priority  = 251;
	$wp_customize->get_control( 'background_position')->priority  = 251;
	$wp_customize->get_control( 'background_size')->priority  = 251;
	$wp_customize->get_control( 'background_repeat')->priority  = 251;
	$wp_customize->get_control( 'background_attachment')->priority  = 251;
	$wp_customize->get_section( 'background_image')->title ='Site Background';
	$wp_customize->get_control( 'background_color')->priority  = 248;
	$wp_customize->get_control( 'background_image')->priority  = 48;
	
	
	$wp_customize->get_setting('page-header-background-color-opacity')->default = '0.1';
	
	
	$wp_customize->get_section( 'site-background')->panel  = 'layout';
	$wp_customize->get_section( 'header_image')->panel  = 'site-header';
	$wp_customize->get_section( 'header_image')->description  = '';
	$wp_customize->get_control( 'scroll-up-icon-size')->priority  = 80;
	$wp_customize->remove_control( 'single-entry-footer-color-opacity');
	$wp_customize->get_control( 'category-slug' )->description =__('For all categories leave it blank','million-shades');
	
	
	
	$wp_customize->get_control( 'enable-full-page-header-media' )->description =__('Header media position must be selected "Bottom of header". Check from header media section. You may need to increase height & width of header media so go to header media section and increase desired height/width','million-shades');
	
	$wp_customize->get_control( 'header_media_position' )->description =__('To create full-page header/hero, header media position must be selected "Bottom of header" otherwise you can select "Top of header" or "Bottom of header".','million-shades');
	
	$wp_customize->get_control( 'enable-related-post-home' )->description =__('You have to select one column before enable this setting.','million-shades');
	
	
	
	$wp_customize->get_control('site_icon')->priority = 501;
	$wp_customize->get_control( 'footer-widget-item-top-border-color')->priority = '290';
	$wp_customize->get_control( 'footer-widget-item-top-border-color-opacity')->priority = '290';
	$wp_customize->get_setting('page-layout-option')->default = 'nosidebar';
	$wp_customize->get_setting('enable-sticky-header')->default = '1';
	$wp_customize->get_setting('enable-excerpt')->default = '1';
	$wp_customize->get_setting('main-menu-top-level-hover-background-color-opacity')->default = '0';
	$wp_customize->get_setting('main-menu-top-level-background-color-opacity')->default = '0';
	$wp_customize->get_setting('overlay-background-color-opacity')->default = '0.4';
	$wp_customize->get_setting('enable-overlay-text')->default = '1';
	
	$wp_customize->get_setting('hide-post-comments')->default = '1';
	$wp_customize->get_setting('enable-drop-cap')->default = '1';
	$wp_customize->get_setting('enable-drop-cap-single')->default = '1';
	$wp_customize->get_setting('hide-blog-author-detail')->default = '1';
	
	

	$wp_customize->get_section( 'desktop-width')->description =__( 'Please follow our documentation.', 'million-shades' ) .' <a href="https://themenextlevel.com/docs/site-width/" target="_blank">'. __( 'Visit', 'million-shades' ) .'</a>';
	
	$wp_customize->get_section( 'laptop-width')->description =__( 'Please follow our documentation.', 'million-shades' ) .' <a href="https://themenextlevel.com/docs/site-width/" target="_blank">'. __( 'Visit', 'million-shades' ) .'</a>';
	
	$wp_customize->get_section( 'large-tablet-width')->description =__( 'Please follow our documentation.', 'million-shades' ) .' <a href="https://themenextlevel.com/docs/site-width/" target="_blank">'. __( 'Visit', 'million-shades' ) .'</a>';
	$wp_customize->get_section( 'tablet-width')->description =__( 'Please follow our documentation.', 'million-shades' ) .' <a href="https://themenextlevel.com/docs/site-width/" target="_blank">'. __( 'Visit', 'million-shades' ) .'</a>';
	$wp_customize->get_section( 'phone-width')->description =__( 'Please follow our documentation.', 'million-shades' ) .' <a href="https://themenextlevel.com/docs/site-width/" target="_blank">'. __( 'Visit', 'million-shades' ) .'</a>';
	$wp_customize->get_control( 'page-selection-for-slides-heading' )->description =__( 'Please follow slider documentation.', 'million-shades' ) .' <a href="https://themenextlevel.com/docs/header-media-slider/" target="_blank">'. __( 'Visit', 'million-shades' ) .'</a>';
	

	
	$wp_customize->remove_control( 'site-content-link-color-opacity');
	$removeControl = array('pagination-color-opacity','scroll-up-border-radius',
	'pagination-hover-color-opacity','pagination-hover-background-color-opacity',
	'site-content-background-color-opacity','site-content-text-color-opacity');
	
	
	
	foreach ( $removeControl as $control){
		$wp_customize->remove_control($control);
	}
	

	

	// CONTEXUAL CONTROL
	
			
	$titles = array('blogname','site-title-text-color','site-title-text-color-opacity','site-title-font-heading','site-title-color-heading','site-title-font-size');
			
	$logoOnly = array('logo-heading','custom_logo');
	
	
	foreach ($titles  as $control){
		
		$wp_customize->get_control($control)->active_callback = 'million_shades_site_title_text_active_callback';
	}
	
	
	foreach ($logoOnly as $logocontrol){
		$wp_customize->get_control($logocontrol)->active_callback = 'million_shades_site_logo_active_callback';
	}	
		
		
	$media_controls = million_shades_header_media_control();
			

	foreach ($media_controls['control-all'] as $media_control){
		$wp_customize->get_control($media_control)->active_callback = 'million_shades_header_media_active_callback';
	}

	/*  Topbar Social  */

	$controls = million_shades_get_two_dimension_style('control','social');
	
	foreach ($controls as $control){
		$wp_customize->get_control( $control)->active_callback = 'million_shades_social_input_active_callback';
	}
	
	$controls = million_shades_get_two_dimension_style('control','social-url');
	
	foreach ($controls as $control){
		$wp_customize->get_control( $control)->active_callback = 'million_shades_social_input_active_callback';
	}
	/*  Topbar Social End  */
	

	
	/*  Topbar Contact  */

	$controls = million_shades_get_two_dimension_style('control','icon');
	
	foreach ($controls as $control){
		$wp_customize->get_control( $control)->active_callback = 'million_shades_contact_input_active_callback';
	}
	
	$controls = million_shades_get_two_dimension_style('control','contact');
	
	foreach ($controls as $control){
		$wp_customize->get_control( $control)->active_callback = 'million_shades_contact_input_active_callback';
	}
	
	/*  Topbar Contact End */
	
	$backgrounds = million_shades_background_control();
	
	foreach ($backgrounds   as $background){
		$wp_customize->get_control( $background)->active_callback = 'million_shades_background_active_callback';
	}


	$site_layouts = million_shades_site_background_padding_margin();
	foreach ($site_layouts   as $site_layout){
		$wp_customize->get_control( $site_layout)->active_callback = 'million_shades_box_layout_active_callback';
	}
	
	$wp_customize->get_control('header_ovl_style')->active_callback = 'million_shades_ovl_style_active_callback';
	
