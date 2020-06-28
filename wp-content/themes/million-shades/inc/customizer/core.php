<?php

/* Customizer settings, controls and style related functions
 * Author: Kudrat E Khuda
 * 
 * @package million-shades
*/


/* 
* All panels of customizer
*/

function million_shades_panels() {
	
return $panels = array('general'=>__("General Panel","million-shades" ),
'body-accent'=>__("Accent Color & Body Font","million-shades" ),
'layout'=>__("Box Layout & Background Panel","million-shades" ),
'site-width'=>__("Site Width & Layout Panel","million-shades" ),
'topbar'=>__("Topbar Panel","million-shades" ),
'site-header'=>__("Site Header Panel","million-shades" ),
'navigation'=>__("Navigation Panel","million-shades" ),
'feature-post'=>__("Featured Post Items Panel","million-shades" ),
'post'=>__("List Post Panel","million-shades" ),
'single'=>__("Single Post Panel","million-shades" ),
'page'=>__("Page Panel","million-shades" ),
'sidebar'=>__("Sidebar & Sidebar Layout Panel","million-shades" ),
'headings'=>__("Headings Panel","million-shades" ),
'footer'=>__("Footer Panel","million-shades" )

);
	
}

/* 
* All sections of customizer
*/

function million_shades_panels_sections() {
	
	
	$panels_sections = array(
	
	'general' =>array('general' =>array('general'=>'general','label'=>__('General','million-shades'),'description'=>''),
	
	'scroll-up' =>array('scroll-up'=>'scroll-up','label'=>__('Scroll Up','million-shades'),'description'=>''),
	
	'pagination' =>array('pagination'=>'pagination','label'=>__('Pagination','million-shades'),'description'=>''),
	'buttons' =>array('buttons'=>'buttons','label'=>__('Buttons','million-shades'),'description'=>''),
	'forms' =>array('forms'=>'forms','label'=>__('Forms','million-shades'),'description'=>'')),

	'body-accent' => array('general' =>
	array('general'=>'general','label'=>__('Accent Color & Body Font','million-shades'),'description'=>'')),
	
	'layout' => array('site-layout' => 
	array('site-layout'=>'site-layout','label'=>__('Site Layout','million-shades'),'description'=>''),
	'site-background' =>array('site-background'=>'site-background','label'=>__('Site Background','million-shades'),'description'=>'')),
	
	
	'site-width' => array('desktop-width' =>
	array('desktop-width'=>'desktop-width','label'=>__('Desktop Width','million-shades'),'description'=>''),
	'laptop-width' =>array('laptop-width'=>'laptop-width','label'=>__('Laptop Width','million-shades'),'description'=>''),
	'large-tablet-width' =>array('large-tablet-width'=>'large-tablet-width','label'=>__('Large Tablet Width','million-shades'),'description'=>''),
	'tablet-width' =>array('tablet-width'=>'tablet-width','label'=>__('Tablet Width','million-shades'),'description'=>''),
	'phone-width' =>array('phone-width'=>'phone-width','label'=>__('Phone Width','million-shades'),'description'=>'')),
	
	'topbar' =>  array('topbar' => 
	array('topbar'=>'topbar','label'=>__('Topbar','million-shades'),'description'=>''),
	'topbar-contact'=>array('topbar-contact'=>'topbar-contact','label'=>__('Topbar Text','million-shades'),'description'=>''),
	'topbar-social'=>array('topbar-social'=>'topbar-social','label'=>__('Topbar Social','million-shades'),'description'=>'')),
	
	'site-header' => array('sticky-header' =>
	array('sticky-header'=>'sticky-header','label'=>__('Sticky & Full Page Header','million-shades'),'description'=>''),
	'site-header'=>array('site-header'=>'site-header','label'=>__('Site Header & Site Icon','million-shades'),'description'=>''),
	'site-title'=>array('site-title'=>'site-title','label'=>__('Site Title','million-shades'),'description'=>''),
	'site-description'=>array('site-description'=>'site-description','label'=>__('Site Description','million-shades'),'description'=>'')),
	
	'navigation' => array('main-menu' =>
	array('main-menu'=>'main-menu','label'=>__('Navigation','million-shades'),'description'=>''),
	'main-menu-top-level'=>array('main-menu-top-level'=>'main-menu-top-level','label'=>__('Main Menu Top Label','million-shades'),'description'=>''),
	'main-menu-sub-level'=>array('main-menu-sub-level'=>'main-menu-sub-level','label'=>__('Main Menu Sub Label','million-shades'),'description'=>'')),
	
	'headings' => array('headings' => 
	array('headings'=>'headings','label'=>__('Heading Fonts','million-shades'),'description'=>'')),
	
	'sidebar' => array('sidebar-layout' =>
	array('sidebar-layout'=>'sidebar-layout','label'=>__('Sidebar Layout','million-shades'),'description'=>''),
	'sidebar-widget'=>array('sidebar-widget'=>'sidebar-widget','label'=>__('Sidebar Widget & Layout','million-shades'),'description'=>'')),
	
	'footer' => array('site-footer' => 
	array('site-footer'=>'site-footer','label'=>__('Site Footer','million-shades'),'description'=>''),
	'footer-widget'=>array('footer-widget'=>'footer-widget','label'=>__('Footer & Footer Widget','million-shades'),'description'=>''),
	'footer-info'=>array('footer-info'=>'footer-info','label'=>__('Footer Info','million-shades'),'description'=>'')),
	
	'page' => array('page-header' => 
	array('page-header'=>'page-header','label'=>__('Page Header','million-shades'),'description'=>''),
	'page-title'=>array('page-title'=>'page-title','label'=>__('Page Title','million-shades'),'description'=>''),
	'page-content'=>array('page-content'=>'page-content','label'=>__('Page Content','million-shades'),'description'=>'')),
	
	'single' => array('single-general' =>
	array('single-general'=>'single-general','label'=>__('Single Post General','million-shades'),'description'=>''),
	'single-header'=>array('single-header'=>'single-header','label'=>__('Single Post Header','million-shades'),'description'=>''),
	'single-meta'=>array('single-meta'=>'single-meta','label'=>__('Single Post Meta','million-shades'),'description'=>''),
	'single-content'=>array('single-content'=>'single-content','label'=>__('Single Post Content','million-shades'),'description'=>'')),
	
	'post' => array( 'post-general' =>
	array('post-general'=>'post-general','label'=>__('List Post General','million-shades'),'description'=>''),
	'post-title'=>array('post-title'=>'post-title','label'=>__('List Post Title','million-shades'),'description'=>''),
	'post-meta'=>array('post-meta'=>'post-meta','label'=>__('List Post Meta','million-shades'),'description'=>''),
	'post-content'=>array('post-content'=>'post-content','label'=>__('List Post Content','million-shades'),'description'=>'')),
	
	'feature-post' => array('feature-item' => 
	array('feature-item'=>'feature-item','label'=>__('Featured Items','million-shades'),'description'=>''),
	'feature-slides'=>array('feature-slides'=>'feature-slides','label'=>__('Feature Slides','million-shades'),'description'=>'')),
	
	
	);
	

	return $panels_sections;
	
}

/* 
* Section creation function of customizer
*/

function  million_shades_panels_sections_style($param) {
	
	
	$settings = million_shades_panels_sections();
	
	$firstlevelkey = array_keys($settings);
	
	for ($i=0; $i<=13; $i++) {
		
		
		
	foreach ($settings[$firstlevelkey[$i]] as $secondlevelkey=>$secondlevelval) {
		
		$thirdlevelval = array_values($secondlevelval);
		$section = $thirdlevelval[0];
		$sections[] = $section;
		$control = $secondlevelkey;
		$controls[]= $control;
	
		$label = $thirdlevelval[1];
		$labels[] = $label;
		
		$description = $thirdlevelval[2];
		$descriptions[] = $description;
		
		$panel =  $firstlevelkey[$i];
		
		$panels[] = $panel;

	}
	
	
	}

	
	if($param =='control'){
	return $controls;	
	}
	elseif($param =='section'){
	return $sections;	
	}
	
	elseif($param =='label'){
	return $labels;	
	}
	elseif($param =='panel'){
	return $panels;	
	}
	
	elseif($param =='description'){
	return $descriptions;
	}
	
}


/*  Customized Controls  */


function million_shades_left_customize_controls(){


$rsections = million_shades_get_border_width_style_radius('section','border');


foreach ($rsections as $rsection){
	$control = $rsection.'-border-width';
	$controls[] = $control;
	$rcontrol = $rsection.'-border-radius';
	$radiuscontrols[] = $rcontrol;
	$scontrol = $rsection.'-border-style';
	$stylecontrols[] = $scontrol;
}

$otherControls = array(
		'scroll-up-button-size','scroll-up-icon-size','scroll-up-color',
		
		'title-length','post-exerpt-length'
		);

		return $leftControls = array($otherControls, $controls,$radiuscontrols,$stylecontrols);
}



function million_shades_checkbox_customized_control(){
	return $checkboxes = array('enable-page-title','enable-single-meta','enable-post-meta','enable-post-title',
	'enable-single-title','enable-topbar','enable-scrollup','hide-featured-images-single',
	'hide-featured-images','enable-full-content-post','enable-excerpt','social-number','contact-number');
	
}

function million_shades_underline_customized_control() {
	
	return $underlines = array('site-background-pattern','site-background',
	'social-item-design','social-item-size','social-item-target','footer_widget_areas',
		'page-header-align','post-header-align','single-header-align',
		'page-layout-option','post-layout-option','single-post-layout-option',
		'site-background-type','site-background-image-style','scroll-up-style',
		'paging-alignment','scroll-up-icon',
		'site-layout','blogdescription','site-title-type',
		'sidebar-widget-title-alignment','footer-widget-title-alignment',
		'footer-widget-areas','page-content-align','post-content-align'
		,'single-content-align','blog-layout','site_icon','social-number',
		'topbar-text-alignment','topbar-social-alignment','footer-info-height',
		'header-media-type','page-title-align','thumbnail-sizes',
		'single-thumbnail-sizes','header_media_position'
		);
		
}



function million_shades_site_background_padding_margin(){
	
return $site_background = array('site-background-margins-heading', 'site-layout-margin-top',
'site-layout-margin-bottom', 'site-layout-margin-left',
'site-layout-margin-right');

}

/*  CONTEXTUAL CONTROL START  */
function million_shades_remove_control(){
	
	return $removeControl = array('colors','background_image','header_image');


}

function million_shades_alter_priority(){
	
	return $removeControl = array('colors','background_image','header_image');

}

function million_shades_alter_label(){
	
	return $removeControl = array('colors','background_image','header_image');

}

function million_shades_blog_description_control() {
	return $dcontrols = array('blogdescription','site-description-text-color','site-description-text-color-opacity');
	
}

function million_shades_site_title_topbar_control() {
	
	return $sitetitlecontrols = array(

	'title-only' => array('blogname','site-title-text-color','site-title-color-heading',
			'site-title-text-color-opacity','site-title-font-heading',
			'site-title-font-size'),
			
	'logoOnly' => array('logo-heading','custom_logo'),
	
	'topbars' => array('topbar-contact','topbar-social'),
	
	'topbar' => array('topbar-color-heading','topbar-background-color','topbar-background-color-opacity')

	);
	
}

function million_shades_header_media_control() {
	
	return $headerMediaControls = array(

	'control-all' => array('header_image','header_video','external_header_video',
	'enable-overlay-text','header-media-subtitle-input','header-media-overlay-heading','header_media_position',
	'header-media-title-input','overlay-text-color','overlay-text-color-opacity',
	'overlay-background-color','overlay-background-color-opacity','page-selection-slide1',
	'page-selection-slide2','page-selection-slide3','page-selection-slide4','page-selection-for-slides-heading','ovr_heights','header_ovl_style'),
			
	'video-only' => array('header_video','external_header_video','header-media-title-input','overlay-text-color'),
	
	'image-only' => array('header_image',
	'enable-overlay-text','header-media-overlay-heading','header_media_position',
	'header-media-title-input','overlay-text-color','overlay-text-color-opacity',
	'overlay-background-color','overlay-background-color-opacity','ovr_heights','header_ovl_style'),
	
	'slide-only' => array(
	'enable-overlay-text','header-media-subtitle-input','header-media-overlay-heading','header_media_position',
	'header-media-title-input','overlay-text-color','overlay-text-color-opacity',
	'overlay-background-color','overlay-background-color-opacity','page-selection-slide1',
	'page-selection-slide2','page-selection-slide3','page-selection-slide4','page-selection-for-slides-heading','ovr_heights','header_ovl_style')

	);
	
}


function million_shades_background_control() {
	
	
	return $backgrounds = array('background_color',
	'site-background-color-heading','site-content-background-color','site-content-text-color',
	'background_image','background_preset','background_size','background_position','background_repeat','background_attachment','site-background-pattern','site-content-link-color');
	
	
}


function million_shades_contact_input_active_callback($control) {
	
	$control_id = $control->id;
	$callback = false;
	
	$contactNum = get_theme_mod('contact-number','2');
		
				for ($i=1; $i <= $contactNum; $i++){
					
					$contactInput = 'topbar-contact-input'.$i;
					
					if ($control_id == $contactInput){
					$callback = true;
					}
					
					$contactIcon = 'topbar-contact-icon'.$i;
					if ($control_id == $contactIcon ){
					$callback = true;
					}
				}
  
	return $callback ;

}

function million_shades_social_input_active_callback($control) {
	
	$control_id = $control->id;
	$callback = false;
	
	$socialNum = get_theme_mod('social-number');
		
				for ($i=1; $i <= $socialNum; $i++){
					

					if ($control_id == 'topbar-social-icon'.$i){
					$callback = true;
					}
					
					
					if ($control_id == 'topbar-social-url'.$i){
					$callback = true;
					}
					
					
				}
  
	return $callback ;

}


function million_shades_background_active_callback($control) {
	
		$control_id = $control->id;
		$callback = false;
	
		$site_background_type = get_theme_mod('site-background-type');
	
		if ($site_background_type == 'one' && ($control_id == 'background_color'|| $control_id == 'site-background-color-heading' 
		|| $control_id == 'site-content-background-color' || $control_id == 'site-content-text-color' || $control_id == 'site-content-link-color')) {
				
		$callback = true;
		
		}
		
		if ($site_background_type == 'two' && ($control_id == 'background_image'|| $control_id == 'site-content-background-color' || 
		$control_id == 'site-content-text-color'|| $control_id == 'site-content-link-color'|| $control_id == 'site-background-color-heading'  )) {
			 
		$callback = true;
		
		}
		
		if ($site_background_type == 'three' && ($control_id == 'site-background-pattern' || $control_id == 'site-content-background-color' || 
		$control_id == 'site-content-text-color'|| $control_id == 'site-content-link-color' || $control_id == 'site-background-color-heading'  )) {
			
		$callback = true;
		
		}
      
	return $callback ;
}


function million_shades_box_layout_active_callback($control) {

	$callback = false;
	$control_id = $control->id;
	$layout = get_theme_mod('site-layout');
	
	
	  
	if ($layout == 'boxed') {
		$callback = true;
	}
	  
	return $callback ;
}


function million_shades_social_item_size_active_callback($control) {

	$callback = false;
	
	$social_item = get_theme_mod('social-item-design','one');
		
		if ($social_item == 'one' && !empty($social_item)){ 
		$callback = true;
		}
      
	return $callback ;
}

function million_shades_enable_topbar_active_callback($section) {

	$callback = false;
	
	$enable_topbar = get_theme_mod('enable-topbar');
		
		if ($enable_topbar == 1){ 
		$callback = true;
		}
      
	return $callback ;
}


function million_shades_site_title_text_active_callback($control) {

	$callback = false;
	
	$control_id = $control->id;
	$site_title_type = get_theme_mod('site-title-type');
	if ($site_title_type =='one'){
		$callback = true;
	}
	
	return $callback;
}

function million_shades_site_logo_active_callback($control) {

	$callback = false;
	
	$control_id = $control->id;
	$site_title_type = get_theme_mod('site-title-type');
	if ($site_title_type =='two'){
		$callback = true;
	}
	
	return $callback;
}

function million_shades_header_media_active_callback($control) {

	$callback = false;
	
	$control_id = $control->id;
	$media_type = get_theme_mod('header-media-type');
	
	if ($media_type =='image' && $control_id == 'header_image'){
		$callback = true;
	}
	
	if ($media_type =='video' && $control_id == 'header_video'){
		$callback = true;
	}
	
	if (($media_type =='video') && ($control_id == 'external_header_video' || $control_id == 'header-media-title-input'|| $control_id == 'overlay-text-color')){
		$callback = true;
	}

	if (($media_type =='image') && ($control_id == 'header-media-overlay-heading' ||
	$control_id == 'enable-overlay-text' ||  $control_id == 'header-media-subtitle-input' ||
	$control_id == 'header-media-title-input' || $control_id == 'overlay-text-color' ||
	$control_id == 'overlay-text-color-opacity' || $control_id == 'overlay-background-color' || $control_id == 'overlay-background-color-opacity'
	|| $control_id == 'header_media_position' || $control_id == 'ovr_heights'|| $control_id == 'header_ovl_style'
	)){
		$callback = true;
	}
	if (($media_type =='video') && ( $control_id == 'header_media_position')){
		$callback = true;
	}
	
	if (($media_type =='slide') && ( $control_id == 'header-media-overlay-heading' ||
	$control_id == 'enable-overlay-text' || $control_id == 'overlay-text-color' ||
	$control_id == 'overlay-text-color-opacity' || $control_id == 'overlay-background-color' || $control_id == 'overlay-background-color-opacity'
	|| $control_id == 'header_media_position' || $control_id == 'page-selection-slide1' ||
	$control_id == 'page-selection-slide2' || $control_id == 'page-selection-slide3' || $control_id == 'page-selection-slide4'|| 
	$control_id == 'page-selection-for-slides-heading' || $control_id == 'ovr_heights'|| $control_id == 'header_ovl_style')){
		$callback = true;
	}
	
	return $callback;
}




function million_shades_site_description_active_callback($control) {
	
	$control_id = $control->id;

	$callback = true;
	
	$description = get_theme_mod('hide-site-description');
	
	return $callback ;
}

function million_shades_ovl_style_active_callback($control){
	
	$control_id = $control->id;
	$callback = true;
	
	$header_media_type = get_theme_mod('header-media-type','image');
	$ovr_heights = get_theme_mod('ovr_heights','box');
	
	if ($control_id == 'header_ovl_style' && $ovr_heights == 'all'){
		$callback = false;
	}
	if ($control_id == 'header_ovl_style' && $header_media_type == 'none'){
		$callback = false;
	}
	
	return $callback ;
	
}





/*    CONTEXUAL FUNCTION END */  

function million_shades_twoD_size(){
	$sections = million_shades_panels_sections();
	return $two_d = array(
	'scroll-up-button-size'=>array(	
				'section'=>$sections['general']['scroll-up']['scroll-up'],
				'selector'=>'.scroll-up a','default'=>'12','priority'=>'157',
		'label'=>__('Button Size','million-shades'),'sanitize'=>'','property'=>'text-transform','unit'=>'',
		'transport'  => 'postMessage','description'  => ''));
	
}

/*
* function of style and different settings
*
*/


function million_shades_get_two_dimension_style($param,$types) {
	
	$style = '';
	$settings = array();
	$controls = array();
	$labels = array();
	$sections = array();
	$defaults = array();
	$priorities = array();
	$descriptions = array();
	$callbacks = array();
	$transports = array();
	$properties = array();
	
	
	if ($types == 'font-size'){
	$settings = million_shades_get_font_icon_size();
	} 
	
	elseif ($types == 'w-px'){
		$settings = million_shades_get_without_px();
	}
	
	elseif ($types == 'single'){
		$settings = million_shades_get_margin_padding_single();
	}elseif ($types == 'icon'){
		$settings = million_shades_get_topbar_contact_input_icon();
	}elseif ($types == 'contact'){
		$settings = million_shades_get_topbar_contact_input();
	}elseif ($types == 'social'){
		$settings = million_shades_get_topbar_social_icon();
	}elseif ($types == 'social-url'){
		$settings = million_shades_get_topbar_social_url();
	}elseif ($types == 'image'){
		$settings = million_shades_get_images();
	}
	elseif ($types == 'four'){
	$settings = million_shades_get_four_alignment();
	}elseif ($types == 'three'){
	$settings = million_shades_get_three_alignment();
	}
	elseif ($types == 'check'){
	$settings = million_shades_get_enable_checkboxes();
	}
	elseif ($types == 'hide'){
	$settings = million_shades_get_hide_checkboxes();
	}
	elseif ($types == 'width-height'){
	$settings = million_shades_get_height_width();
	}elseif ($types == 'read-more'){
	$settings = million_shades_get_more_input();
	}elseif ($types == 'query'){
	$settings = million_shades_get_post_query_input();
	}elseif ($types == 'screen'){
	$settings = million_shades_get_screen_width();
	}
	elseif ($types == 'page'){
	$settings = million_shades_get_page_select();
	}
	elseif ($types == 'more-url'){
	$settings = million_shades_get_more_url();
	}
	
	if ( class_exists('Million_Shades_Pro')) { 
	
		if($types == 'page-pro'){
			$settings = million_shades_pro_get_page_select();
		}
		
		if($types == 'number-pro'){
			$settings = million_shades_pro_number_input();
		}
		
		if($types == 'hide-pro'){
			$settings = million_shades_pro_hide_controls();
		}
		
		/*
		if($types == 'check-pro'){
			$settings = million_shades_pro_enable_controls();
		}*/
			
	}
	
	
	foreach ($settings as $firstlevelkey=>$firstlevelval) {
		
		$secondlevelval = array_values($firstlevelval);
		
		$control = $firstlevelkey;
		$controls[]= $control;
		
		$section = $secondlevelval[0];
		$sections[] = $section;
		
		$selector = $secondlevelval[1];
		$selectors[] = $selector;
		
		$default = $secondlevelval[2];
		$defaults[] = $default;
		
		$priority = $secondlevelval[3];
		$priorities[] = $priority;
		
		$label = $secondlevelval[4];
		$labels[] = $label;
		
		$callback = $secondlevelval[5];
		$callbacks[] = $callback;
		
		$property = $secondlevelval[6];
		$properties[] = $property;
		
		$unit = $secondlevelval[7];
		$units[] = $unit;
		
		$transport = $secondlevelval[8];
		$transports[] = $transport;
		
		$description = $secondlevelval[9];
		$descriptions[] = $description;
		
		
		$singleProperty = $secondlevelval[6];
		$singleProperties[] = $singleProperty;
		
		
		
		$mod_val = get_theme_mod($control);
	
		
		if (! empty( $mod_val ) && $types == 'font-size') {
			$mod_val = get_theme_mod($control,$default);
			$style 	.= "".esc_attr($selector). "{ font-size: " . intval($mod_val) . "px;}"."\n";
		}
	
		if (! empty( $mod_val ) && $types =='four') {
		    
		    $mod_val = get_theme_mod($control,$default);
		    
			$style 	.= "".esc_attr($selector). "{ text-align: " . esc_attr($mod_val). ";}"."\n";
		}
		if ($types =='three') {
		    
		    $mod_val = get_theme_mod($control,$default);
		    
			$style 	.= "".esc_attr($selector). "{ text-align: " . esc_attr($mod_val). ";}"."\n";
		}
		
		if (! empty( $mod_val ) && $types == 'single') {
		    
		    	$mod_val = get_theme_mod($control,$default);
			
			$style 	.= "".esc_attr($selector). "{ ".esc_attr($singleProperty).": " . intval($mod_val)."px;}"."\n";
		}
		if (! empty( $mod_val ) && $types == 'image') {
			$style 	.= "".esc_attr($selector). "{ background-image:url( " . esc_url($mod_val). ");}"."\n";

		}
		
	    if ( $types == 'hide' ) {
		    
		    $hide_val = get_theme_mod($control,$default);
	
			if ($hide_val == 1 ){
				
			$style 	.= "".esc_attr($selector). "{ display: none;}"."\n";
			
			}
			
			
		}
		
		if (! empty( $mod_val ) && ($types == 'check') ) {
		
	        if ($mod_val == 1){
				
			$style 	= "".esc_attr($selector). "{ display: block;}"."\n";
			}else {
			$style 	= "".esc_attr($selector). "{ display: none;}"."\n";
			}
	
		}
		
	}
	
	if($param =='style'){
	return $style;	
	}
	elseif($param == 'control'){
	return $controls;	
	}
	elseif($param == 'section'){
	return $sections;	
	}
	elseif($param == 'selector'){
	return $selectors;	
	}
	elseif($param == 'default'){
	return $defaults;	
	}
	elseif($param == 'property'){
	return $properties;	
	}
	elseif($param == 'label'){
	return $labels;	
	}
	elseif($param == 'callback'){
	return $callbacks;	
	}
	elseif($param == 'description'){
	return $descriptions;	
	}
	elseif($param == 'priority'){
	return $priorities;	
	}
	elseif($param == 'transport'){
	return $transports;	
	}
	
}

// INDIVIDUAL FONT & ICON SIZE
function million_shades_get_font_icon_size() {

$sections = million_shades_panels_sections();
return $get_size = array(

		'h1-font-size'=>array(
				'section'=>$sections['headings']['headings']['headings'],
				'selector'=>'h1','default'=>'32','priority'=>'151',
		'label'=>__('H1 Font Size','million-shades'),'sanitize'=>'','property'=>'font-size','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'h2-font-size'=>array(
				'section'=>$sections['headings']['headings']['headings'],
				'selector'=>'h2','default'=>'24','priority'=>'151',
		'label'=>__('H2 Font Size','million-shades'),'sanitize'=>'','property'=>'font-size','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'h3-font-size'=>array(
				'section'=>$sections['headings']['headings']['headings'],
				'selector'=>'h3,#secondary .widget-title,h3.widget-title,#site-footer h3.widget-title,.sidebar h3.widget-title,.sidebar h3.widget-title span,h3.nl-widget-title','default'=>'22','priority'=>'151',
		'label'=>__('H3 Font Size','million-shades'),'sanitize'=>'','property'=>'font-size','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'h4-font-size'=>array(
				'section'=>$sections['headings']['headings']['headings'],
				'selector'=>'h4,#site-footer h4.widget-title,.sidebar h4.widget-title,h4.widget-title,h4.nl-widget-title','default'=>'20','priority'=>'151',
		'label'=>__('H4 Font Size','million-shades'),'sanitize'=>'','property'=>'font-size','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'h5-font-size'=>array(
				'section'=>$sections['headings']['headings']['headings'],
				'selector'=>'h5,#site-footer h5.widget-title,.sidebar h5.widget-title,h5.widget-title,h5.nl-widget-title','default'=>'18','priority'=>'151',
		'label'=>__('H5 Font Size','million-shades'),'sanitize'=>'','property'=>'font-size','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'site-title-font-size'=>array(
				'section'=>$sections['site-header']['site-title']['site-title'],
				'selector'=>'.site-title','default'=>'24','priority'=>'151',
		'label'=>__('Font Size','million-shades'),'sanitize'=>'','property'=>'font-size','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'main-menu-top-level-font-size'=>array(
				'section'=>$sections['navigation']['main-menu-top-level']['main-menu-top-level'],
				'selector'=>'#main-navigation.main-menu ul li a,.menu-btn,#main-navigation .search-icon','default'=>'12','priority'=>'109',
		'label'=>__('Font Size','million-shades'),'sanitize'=>'','property'=>'font-size','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'main-menu-sub-level-font-size'=>array(
				'section'=>$sections['navigation']['main-menu-sub-level']['main-menu-sub-level'],
				'selector'=>'#main-navigation.main-menu .sub-menu li a','default'=>'12','priority'=>'151',
		'label'=>__('Font Size','million-shades'),'sanitize'=>'','property'=>'font-size','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		
		
				);
		
}


/*
*
* Single padding and margin settings
*
*/

function million_shades_get_margin_padding_single() {
    
	$sections = million_shades_panels_sections();
	
	return $singles = array(
	
				
		'site-header-padding-top'=>array(
				'section'=>$sections['site-header']['site-header']['site-header'],
				'selector'=>'#site-header',
				'default'=>'0','priority'=>'276',
				'label'=>__('Site Header Padding Top','million-shades'),'sanitize'=>'','property'=>'padding-top','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'site-header-padding-bottom'=>array(
				'section'=>$sections['site-header']['site-header']['site-header'],
				'selector'=>'#site-header','default'=>'0','priority'=>'276',
				'label'=>__('Site Header Padding Bottom','million-shades'),'sanitize'=>'','property'=>'padding-bottom','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'main-menu-margin-top'=>array(
				'section'=>$sections['navigation']['main-menu-top-level']['main-menu-top-level'],
				'selector'=>'#main-navigation.main-menu',
				'default'=>'','priority'=>'346',
				'label'=>__('Main Navigation Margin Top','million-shades'),'sanitize'=>'','property'=>'margin-top','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
	
		'main-menu-margin-bottom'=>array(
				'section'=>$sections['navigation']['main-menu-top-level']['main-menu-top-level'],
				'selector'=>'#main-navigation.main-menu,.search-container','default'=>'','priority'=>'346',
				'label'=>__('Main Navigation Margin Bottom','million-shades'),'sanitize'=>'','property'=>'margin-bottom','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'site-layout-margin-top'=>array(
				'section'=>$sections['layout']['site-layout']['site-layout'],
				'selector'=>'body.boxed #page','default'=>'','priority'=>'346',
				'label'=>__('Margin Top','million-shades'),'sanitize'=>'','property'=>'margin-top','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),	
		
		'site-layout-margin-bottom'=>array(
				'section'=>$sections['layout']['site-layout']['site-layout'],
				'selector'=>'body.boxed #page','default'=>'','priority'=>'346',
				'label'=>__('Margin Bottom','million-shades'),'sanitize'=>'','property'=>'margin-bottom','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'site-layout-margin-left'=>array(
				'section'=>$sections['layout']['site-layout']['site-layout'],
				'selector'=>'body.boxed #page','default'=>'','priority'=>'346',
				'label'=>__('Margin Left','million-shades'),'sanitize'=>'','property'=>'margin-left','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'site-layout-margin-right'=>array(
				'section'=>$sections['layout']['site-layout']['site-layout'],
				'selector'=>'body.boxed #page','default'=>'','priority'=>'346',
				'label'=>__('Margin Right','million-shades'),'sanitize'=>'','property'=>'margin-right','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'form-input-padding-top'=>array(
				'section'=>$sections['general']['forms']['forms'],
				'selector'=>'form1',
		'default'=>'7','priority'=>'346',
		'label'=>__('Input Padding Top','million-shades'),'sanitize'=>'','property'=>'padding-top','unit'=>'',
		'transport'  => 'refresh','description'  => ''),
		
		'form-input-padding-bottom'=>array(
				'section'=>$sections['general']['forms']['forms'],
				'selector'=>'form1',
				
				'default'=>'7','priority'=>'346',
		'label'=>__('Input Padding Bottom','million-shades'),'sanitize'=>'','property'=>'padding-bottom','unit'=>'',
		'transport'  => 'refresh','description'  => ''),
		
		'form-input-margin-top'=>array(
				'section'=>$sections['general']['forms']['forms'],
				'selector'=>'form1',
		'default'=>'10','priority'=>'352',
		'label'=>__('Input Margin Top','million-shades'),'sanitize'=>'','property'=>'margin-top','unit'=>'',
		'transport'  => 'refresh','description'  => ''),
		
		'form-input-margin-bottom'=>array(
				'section'=>$sections['general']['forms']['forms'],
				'selector'=>'form1',
				
				'default'=>'0','priority'=>'352',
		'label'=>__('Input Margin Bottom','million-shades'),'sanitize'=>'','property'=>'margin-bottom','unit'=>'',
		'transport'  => 'refresh','description'  => ''),
		
		'footer-bar-padding-top'=>array(
				'section'=>$sections['footer']['footer-info']['footer-info'],
				'selector'=>'.site-info, .footerbar-text',
				'default'=>'','priority'=>'230',
		'label'=>__('Padding Top','million-shades'),'sanitize'=>'','property'=>'padding-top','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
				
		'footer-bar-padding-bottom'=>array(
				'section'=>$sections['footer']['footer-info']['footer-info'],
				'selector'=>'.site-info, .footerbar-text',
				
				'default'=>'','priority'=>'230',
		'label'=>__('Padding Bottom','million-shades'),'sanitize'=>'','property'=>'padding-bottom','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'buttons-padding-top'=>array(
				'section'=>$sections['general']['buttons']['buttons'],
				'selector'=>'.button1',
				
				'default'=>'6','priority'=>'330',
		'label'=>__('Padding Top','million-shades'),'sanitize'=>'','property'=>'padding-top','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'buttons-padding-bottom'=>array(
				'section'=>$sections['general']['buttons']['buttons'],
				'selector'=>'.button1',
				
				'default'=>'6','priority'=>'330',
		'label'=>__('Padding Bottom','million-shades'),'sanitize'=>'','property'=>'padding-bottom','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'buttons-padding-left'=>array(
				'section'=>$sections['general']['buttons']['buttons'],
				'selector'=>'.button1',
				
				'default'=>'15','priority'=>'330',
		'label'=>__('Padding Left','million-shades'),'sanitize'=>'','property'=>'padding-left','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'buttons-padding-right'=>array(
				'section'=>$sections['general']['buttons']['buttons'],
				'selector'=>'.button1',
				
				'default'=>'15','priority'=>'330',
		'label'=>__('Padding Right','million-shades'),'sanitize'=>'','property'=>'padding-right','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		);
}


function million_shades_get_post_query_input() {

$sections = million_shades_panels_sections();

return $get_input = array(
		
		
		
		'category-slug'=>array(
				'section'=>$sections['post']['post-general']['post-general'],
				'selector'=>'','default'=>'','priority'=>'346',
		'label'=>__('Category Slug','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'exclude-category'=>array(
				'section'=>$sections['post']['post-general']['post-general'],
				'selector'=>'','default'=>'','priority'=>'348',
		'label'=>__('Exclude Category','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport'  => 'postMessage','description'  => '')
	
				);
}


function million_shades_get_topbar_contact_input() {

$sections = million_shades_panels_sections();

return $get_input = array(
		
		
		'topbar-contact-input1'=>array(
				'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
				'selector'=>'.contacts-body span','default'=>'','priority'=>'40',
		'label'=>__('Contact Input #1:','million-shades'),'sanitize'=>'','property'=>'text-transform','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'topbar-contact-input2'=>array(
				'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
				'selector'=>'.contacts-body span','default'=>'','priority'=>'42',
		'label'=>__('Contact Input #2:','million-shades'),'sanitize'=>'','property'=>'text-transform','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'topbar-contact-input3'=>array(
				'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
				'selector'=>'.contacts-body span','default'=>'','priority'=>'44',
		'label'=>__('Contact Input #3:','million-shades'),'sanitize'=>'','property'=>'text-transform','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'topbar-contact-input4'=>array(
				'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
				'selector'=>'.contacts-body span','default'=>'','priority'=>'46',
		'label'=>__('Contact Input #4:','million-shades'),'sanitize'=>'','property'=>'text-transform','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'topbar-contact-input5'=>array(
				'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
				'selector'=>'.contacts-body span','default'=>'','priority'=>'48',
		'label'=>__('Contact Input #5:','million-shades'),'sanitize'=>'','property'=>'text-transform','unit'=>'',
		'transport'  => 'postMessage','description'  => '')
		
		);
}


function million_shades_get_topbar_contact_input_icon() {

$sections = million_shades_panels_sections();

return $get_input = array(
		
		'topbar-contact-icon1'=>array(
				'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
				'selector'=>'.contacts-body i.fa','default'=>'none','priority'=>'39',
		'label'=>__('Contact Icon #1:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'topbar-contact-icon2'=>array(
				'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
				'selector'=>'.contacts-body i.fa','default'=>'none','priority'=>'41',
		'label'=>__('Contact Icon #2:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'topbar-contact-icon3'=>array(
				'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
				'selector'=>'.contacts-body i.fa','default'=>'','priority'=>'43',
		'label'=>__('Contact Icon #3:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'topbar-contact-icon4'=>array(
				'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
				'selector'=>'.contacts-body i.fa','default'=>'','priority'=>'45',
		'label'=>__('Contact Icon #4:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport'  => 'postMessage','description'  => ''),
		
		'topbar-contact-icon5'=>array(
				'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
				'selector'=>'.contacts-body i.fa','default'=>'','priority'=>'47',
		'label'=>__('Contact Icon #5:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport'  => 'postMessage','description'  => '')
		

				);
}

function million_shades_get_topbar_social_url() {

$sections = million_shades_panels_sections();

return $get_url = array(
		
		'topbar-social-url1'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'41',
		'label'=>__('Social Url #1:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-url2'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'43',
		'label'=>__('Social Url #2:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-url3'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'45',
		'label'=>__('Social Url #3:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-url4'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'47',
		'label'=>__('Social Url #4:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-url5'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'49',
		'label'=>__('Social Url #5:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-url6'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'51',
		'label'=>__('Social Url #6:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-url7'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'53',
		'label'=>__('Social Url #7:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-url8'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'55',
		'label'=>__('Social Url #8:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		
	
				);
		
}




function million_shades_get_topbar_social_icon() {

$sections = million_shades_panels_sections();

return $get_icon = array(
		
		'topbar-social-icon1'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'40',
		'label'=>__('Social Icon #1:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-icon2'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'42',
		'label'=>__('Social Icon #2:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-icon3'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'44',
		'label'=>__('Social Icon #3:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-icon4'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'46',
		'label'=>__('Social Icon #4:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-icon5'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'48',
		'label'=>__('Social Icon #5:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'topbar-social-icon6'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'50',
		'label'=>__('Social Icon #6:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		'topbar-social-icon7'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'52',
		'label'=>__('Social Icon #7:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		'topbar-social-icon8'=>array(
				'section'=>$sections['topbar']['topbar-social']['topbar-social'],
				'selector'=>'','default'=>'','priority'=>'54',
		'label'=>__('Social Icon #8:','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => '')
	
				);
}


function million_shades_get_more_url() {

$sections = million_shades_panels_sections();

		return $get_url = array(
		
		'footer-info-link-url'=>array(
				'section'=>'footer-info',
				'selector'=>'','default'=> __('www.themenextlevel.com','million-shades'),'priority'=>'21',
		'label'=>__('Site Info Link Url','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		
		
		'feature-item-url1'=>array(
				'section'=>$sections['feature-post']['feature-item']['feature-item'],
				'selector'=>'','default'=>'','priority'=>'22',
		'label'=>__('Featured Item Url','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'feature-item-url2'=>array(
				'section'=>$sections['feature-post']['feature-item']['feature-item'],
				'selector'=>'','default'=>'','priority'=>'32',
		'label'=>__('Featured Item Url','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'feature-item-url3'=>array(
				'section'=>$sections['feature-post']['feature-item']['feature-item'],
				'selector'=>'','default'=>'','priority'=>'42',
		'label'=>__('Featured Item Url','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => '')
		
	
	
				);
		
}

function million_shades_get_more_input(){
	$sections = million_shades_panels_sections();

	return $input = array(

	'post_feature_title1'=>array(
				'section'=>$sections['feature-post']['feature-item']['feature-item'],
				'selector'=>'',
				'default'=>'Featured Title of Item1','priority'=>'21',
		'label'=>__('Featured Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
	
	'post_feature_title2'=>array(
				'section'=>$sections['feature-post']['feature-item']['feature-item'],
				'selector'=>'',
				'default'=>'Featured Title of Item2','priority'=>'31',
		'label'=>__('Featured Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
	'post_feature_title3'=>array(
				'section'=>$sections['feature-post']['feature-item']['feature-item'],
				'selector'=>'',
				'default'=>'Featured Title of Item3','priority'=>'41',
		'label'=>__('Featured Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
		
	'read-more-input'=>array(
				'section'=>$sections['post']['post-general']['post-general'],
				'selector'=>'a.more-link',
				'default'=>'Read More','priority'=>'375',
		'label'=>__('Read More Text','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'footer-info-input'=>array(
				'section'=>$sections['footer']['footer-info']['footer-info'],
				'selector'=>'.site-credit span.text1',
				'default'=>__('Proudly Powered by WordPress','million-shades'),'priority'=>'19',
		'label'=>__('Site Info Text','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'footer-info-link-text'=>array(
				'section'=>$sections['footer']['footer-info']['footer-info'],
				'selector'=>'.site-credit a','default'=>__('Million Shades','million-shades'),'priority'=>'20',
		'label'=>__('Site Info Link Text','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'header-media-title-input'=>array(
				'section'=>'header_image',
				'selector'=>'',
				'default'=>'MILLION SHADES','priority'=>'72',
		'label'=>__('Overlay Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'header-media-subtitle-input'=>array(
				'section'=>'header_image',
				'selector'=>'',
				'default'=>'','priority'=>'73',
		'label'=>__('Overlay Sub-Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	

	
				);
				
}



function million_shades_get_without_px() {
	$sections = million_shades_panels_sections();
	
	
	return $no_px = array(

	
	'post-exerpt-length'=>array(
				'section'=>$sections['post']['post-general']['post-general'],
				'selector'=>'','default'=>'50','priority'=>'74',
		'label'=>__('Exerpt Length','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => '')
	
	
				
	
	);
}



/*
*
* Color related function for style and js
*/

function million_shades_get_color_js($param) {
	
	
	$settings = million_shades_get_fourcolor();
	
	foreach ($settings['color'] as $secondlevelkey=>$secondlevelval) {
		
		$thirdlevelval = array_values($secondlevelval);
		
		$control = $secondlevelkey;
		$controls[]= $control;
		
		$selector = $thirdlevelval[1];
		$selectors[] = $selector;
	}
	
	foreach ($settings['background-color'] as $secondlevelkey=>$secondlevelval) {
		
		$thirdlevelval = array_values($secondlevelval);
		
		$control = $secondlevelkey;
		$bg_controls[]= $control;
		
		$selector = $thirdlevelval[1];
		$bg_selectors[] = $selector;
	}
	
	foreach ($settings['hover-color'] as $secondlevelkey=>$secondlevelval) {
		
		$thirdlevelval = array_values($secondlevelval);
		
		$control = $secondlevelkey;
		$hover_controls[]= $control;
		
		$selector = $thirdlevelval[1];
		$hover_selectors[] = $selector;
	}
	
	foreach ($settings['hover-background-color'] as $secondlevelkey=>$secondlevelval) {
		
		$thirdlevelval = array_values($secondlevelval);
		
		$control = $secondlevelkey;
		$hover_bg_controls[]= $control;
		
		$selector = $thirdlevelval[1];
		$hover_bg_selectors[] = $selector;
	}
	
	if($param =='control'){
	return $controls;	
	}
	elseif($param =='selector'){
	return $selectors;	
	}
	elseif($param =='bg-control'){
	return $bg_controls;	
	}
	elseif($param =='bg-selector'){
	return $bg_selectors;	
	}
	elseif($param =='hover-control'){
	return $hover_controls;	
	}
	elseif($param =='hover-selector'){
	return $hover_selectors;	
	}
	elseif($param =='hover-bg-control'){
	return $hover_bg_controls;	
	}
	elseif($param =='hover-bg-selector'){
	return $hover_bg_selectors;	
	}
	
	
}

function million_shades_hex2rgba($hexstr,$opacity) {
    $int = hexdec($hexstr);
    $rgb = array("red" => 0xFF & ($int >> 0x10), "green" => 0xFF & ($int >> 0x8), "blue" => 0xFF & $int);
    $r = $rgb['red'];
    $g = $rgb['green'];
    $b = $rgb['blue'];

    return "rgba($r,$g,$b, $opacity)";
}

/*
*
* Color related function for style
*/

function  million_shades_get_color_style($param) {
	
	$style = '';
	$properties = array('color','background-color','color','background-color');
	$settings = million_shades_get_fourcolor();
	
	$firstlevelkey = array_keys($settings);
	
	for ($i=0; $i<=3; $i++) {
		
	foreach ($settings[$firstlevelkey[$i]] as $secondlevelkey=>$secondlevelval) {
		
		$thirdlevelval = array_values($secondlevelval);
		$section = $thirdlevelval[0];
		$sections[] = $section;
		$control = $secondlevelkey;
		$controls[]= $control;
		
		$default = $thirdlevelval[2];
		$defaults[] = $default;
		
		$priority = $thirdlevelval[3];
		$priorities[] = $priority;
		
		$label = $thirdlevelval[4];
		$labels[] = $label;
		
		$sanitize = $thirdlevelval[5];
		$sanitizes[] = $sanitize;
		
		$propertyy = $thirdlevelval[6];
		$propertyyy[] = $propertyy;
		
		$transport = $thirdlevelval[7];
		$transports[] = $transport;
		
		$description = $thirdlevelval[8];
		$descriptions[] = $description;

		
		$selector = $thirdlevelval[1];
		$selectors[] = $selector;
		$property = $properties[$i];
		$color ='';
		$color = get_theme_mod($control,$default);
		$opacity_control = $control.'-opacity';
		$opacity_controls[] = $opacity_control;
		$opacity = get_theme_mod($opacity_control,'1');
		$rgba = million_shades_hex2rgba($color, $opacity);
		
		if ($opacity == '1'){
			$rgbaOrHex = $color;
		} else {
			$rgbaOrHex 	= million_shades_hex2rgba($color, $opacity);
		}
	
		if (! empty( $rgbaOrHex ) ) {
			$style 	.= "".esc_attr($selector). "{" .esc_attr($property).":" . esc_attr($rgbaOrHex) . ";}"."\n";
			
		}
		
	}
	
	
	}

	if($param =='style'){
	return $style;	
	}
	elseif($param =='control'){
	return $controls;	
	}
	elseif($param =='section'){
	return $sections;	
	}
	elseif($param =='selector'){
	return $selectors;	
	}
	elseif($param =='opacity'){
	return $opacity_controls;	
	}
	elseif($param =='label'){
	return $labels;	
	}
	elseif($param =='default'){
	return $defaults;
	}
	elseif($param =='description'){
	return $descriptions;
	}
	elseif($param =='priority'){
	return $priorities;
	}
	elseif($param =='transport'){
	return $transports;
	}
}

/*
color related all settings
*/

function million_shades_get_fourcolor(){
	
$sections = million_shades_panels_sections();
$accent = million_shades_get_accent_color_mod();

$fourcolors = array(
	
	'color' => array(
		

		'site-title-text-color'=>array(
			'section'=>$sections['site-header']['site-title']['site-title'],
			'selector'=>'#site-title a,.site-title a','default'=>'#333333',
			'priority'=>'201','label'=>__('Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'site-description-text-color'=>array(
			'section'=>$sections['site-header']['site-description']['site-description'],
			'selector'=>'.site-description','default'=>'#333333',
			'priority'=>'201','label'=>__('Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'overlay-text-color'=>array(
			'section'=>'header_image',
			'selector'=>'.nl-media-ovr-title,.nl-media-ovr-sub-title,.nl-slide-ovr-title,.nl-slide-ovr-sub-title','default'=>'#ffffff',
			'priority'=>'77','label'=>__('Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
	
		'main-menu-top-level-color' => array(
			'section'=>$sections['navigation']['main-menu-top-level']['main-menu-top-level'],
			'selector'=>'#main-navigation.main-menu ul li a,.menu-btn,#main-navigation .search-icon,.cart-value,.total-label,.cart-total-val,.wishlist-icon,.header-cart-icon .fa','default'=>'#333',
			'priority'=>'201','label'=>__('Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'main-menu-top-level-current-page-color' => array(
			'section'=>$sections['navigation']['main-menu-top-level']['main-menu-top-level'],
			'selector'=>'#main-navigation.main-menu li.current-menu-item a,#main-navigation.main-menu li.current-menu-parent a,#main-navigation.main-menu ul li.current_page_item a','default'=>$accent,
			'priority'=>'201','label'=>__('Current Page Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'main-menu-sub-level-color' => array(
			'section'=>$sections['navigation']['main-menu-sub-level']['main-menu-sub-level'],
			'selector'=>'#main-navigation.main-menu .sub-menu li a','default'=>'#555',
			'priority'=>'201','label'=>__('Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'main-menu-sub-level-current-page-color' => array(
			'section'=>$sections['navigation']['main-menu-sub-level']['main-menu-sub-level'],
			'selector'=>'#main-navigation.main-menu ul li ul li.current_page_item a','default'=>$accent,
			'priority'=>'201','label'=>__('Current Page Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		
		'topbar-contact-item-color' => array(
			'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
			'selector'=>'.topbar .contacts-body .one,.two,.three,.four,.five','default'=>'#333',
			'priority'=>'201','label'=>__('Text Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'topbar-contact-icon-color' => array(
			'section'=>$sections['topbar']['topbar-contact']['topbar-contact'],
			'selector'=>'#contact1, #contact2, #contact3, #contact4, #contact5',
			'default'=>'#333','priority'=>'201','label'=>__('Icon Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'topbar-social-item-color' => array(
			'section'=>$sections['topbar']['topbar-social']['topbar-social'],
			'selector'=>'.topbar-social i.fa','default'=>'#333',
			'priority'=>'201','label'=>__('Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),

	
		
		'site-footer-text-color'=>array(
			'section'=>$sections['footer']['footer-info']['footer-info'],
			'selector'=>'.site-info a, .site-info','default'=>'#ffffff',
			'priority'=>'201','label'=>__('Text Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'footer-widget-text-color'=>array(
			'section'=>$sections['footer']['footer-widget']['footer-widget'],
			'selector'=>'#site-footer h4.widget-title,#site-footer .news-widget-media-right span.entry-date, 
			#site-footer .widget.widget_recent_entries span.post-date,
			#site-footer .widget span,#site-footer .widget-cta-txt,
			#site-footer .widget-contacts-body a,#site-footer .widget-contacts-body i.fa,
			#site-footer .widget-contacts-body span,#site-footer .widget.widget_calendar td,
			#site-footer .widget.widget_calendar th, #site-footer .nl-widget-title,#site-footer .nl-widget-position',
			'default'=>'#fff',
			'priority'=>'201','label'=>__('Text Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'footer-widget-link-color'=>array(
			'section'=>$sections['footer']['footer-widget']['footer-widget'],
			'selector'=>'#site-footer .news-widget-media-right a.title, 
			#site-footer .widget.widget_recent_entries a, #site-footer 
			.widget.widget_recent_comments a, #site-footer .widget.widget_categories 
			a,#site-footer .widget.widget_meta a, #site-footer .widget.widget_archive a,
			#site-footer .widget.widget_pages a,#site-footer .widget-selected-link span a,
			#site-footer .hvr-icon .icon a i.fa,#site-footer .widget-socials .icon i.fa','default'=>'#fff',
			'priority'=>'201','label'=>__('Link Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
	
		
		'post-navigation-text-color'=>array(
			'section'=>$sections['single']['single-general']['single-general'],
			'selector'=>'.post-navigation .nav-previous a, .post-navigation .nav-next a',
			'default'=>'#333',
			'priority'=>'201','label'=>__('Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'all-buttons-text-color' => array(
			'section'=>$sections['general']['buttons']['buttons'],
			'selector'=>'button1','default'=>'#ffffff',
			'priority'=>'201','label'=>__('Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'sticky-post-color'=>array(
			'section'=>$sections['post']['post-general']['post-general'],
			'selector'=>'.sticky',
			'default'=>'#000',
			'priority'=>'500','label'=>__('Sticky Post Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'scroll-up-color' => array(
			'section'=>$sections['general']['scroll-up']['scroll-up'],
			'selector'=>'#scroll-up i.fa','default'=>'#333333',
			'priority'=>'201','label'=>__('Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		'site-content-text-color'=>array(
			'section'=>'background_image',
			'selector'=>'.page-content p,.comment-author,.comments-area b.fn a,.comments-area .says,.post-categories a,.ms-related-post-body span a,.right-side-menu.visible a,.news-widget-media-right span.entry-date,.comment-form-comment textarea,.comment-form label,.comment-form,.comment-form a,.comment-reply-title,.comments-title,.comment-body,.comment-body a,.comment-content p,.single-related-meta span,.single-related-meta a,.sidebar .social-icon-widget i.fa,.sidebar .author-box i.fa,.sidebar .nl-widget-position,.sidebar span,.sidebar span a,.single-footer a,.single-meta a,.page-content-header,.tagcloud a,.tags-links a, article.hentry .entry-footer span,article.hentry .entry-footer span a:not(.post-edit-link),.entry-meta span,.entry-meta span a,.entry-meta .entry-format a,
			.entry-format:before,.sidebar .widget-title span,.sidebar .widget ul li a,h1,h2,h2 a,h3,h3 a,h4,h5,h6,.home_blog_border_style, .post-single-entry, .post-archive, .ms-page, .ms-search','default'=>'#000000',
			'priority'=>'501','label'=>__('Site Content Text Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		'site-content-link-color'=>array(
			'section'=>'background_image',
			'selector'=>'.entry-content a,.single-content a,.page-content a','default'=>'#323850',
			'priority'=>'501','label'=>__('Site Content Link Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),



			),
	
	'background-color' => array(
		
	
		'main-menu-top-level-background-color' => array(
			'section'=>$sections['navigation']['main-menu-top-level']['main-menu-top-level'],
			'selector'=>'#main-navigation.main-menu ul,#main-navigation.main-menu ul li a','default'=>'#ffffff',
			'priority'=>'201','label'=>__('Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		'main-menu-sub-level-background-color' => array(
			'section'=>$sections['navigation']['main-menu-sub-level']['main-menu-sub-level'],
			'selector'=>'#main-navigation.main-menu .sub-menu li a,#main-navigation.main-menu ul li ul li','default'=>'#ffffff',
			'priority'=>'201','label'=>__('Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
	
		'topbar-background-color' => array(
			'section'=>$sections['topbar']['topbar']['topbar'],
			'selector'=>'.topbar','default'=>'#ffffff',
			'priority'=>'201','label'=>__('Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		'site-header-background-color'=>array(
			'section'=>$sections['site-header']['site-header']['site-header'],
			'selector'=>'#site-header,.display-menu-toggle','default'=>'#ffffff',
			'priority'=>'201','label'=>__('Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		'site-content-background-color'=>array(
			'section'=>'background_image',
			'selector'=>'.right-side-menu.visible,.sticky,.comments-area,.sidebar .widget,.related-single,.post-author-box,.home_blog_border_style, .post-single-entry, .post-archive, .ms-page, .ms-search','default'=>'#ffffff',
			'priority'=>'502','label'=>__('Site Content Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		'overlay-background-color'=>array(
			'section'=>'header_image',
			'selector'=>'.media-imag-overlay-cta.colorbg, .overlay_media_border_style.full, 
.slide_border_style.full, .media_slide_cta.colorbg','default'=>'#000',
			'priority'=>'78','label'=>__('Overlay Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		'site-footer-background-color'=>array(
			'section'=>$sections['footer']['footer-widget']['footer-widget'],
			'selector'=>'#site-footer,.site-footer','default'=>'#000000',
			'priority'=>'73','label'=>__('Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		
	
		'site-info-background-color'=>array(
			'section'=>$sections['footer']['footer-info']['footer-info'],
			'selector'=>'.site-info','default'=>'#1a1a1a',
			'priority'=>'201','label'=>__('Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		

			
		'page-header-background-color'=>array(
			'color'=>$sections['page']['page-header']['page-header'],
			'selector'=>'.page-content-header','default'=>'',
			'priority'=>'201','label'=>__('Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
			
		
		
		'scroll-up-background-color' => array(
			'section'=>$sections['general']['scroll-up']['scroll-up'],
			'selector'=>'#scroll-up','default'=>'#ffffff',
			'priority'=>'201','label'=>__('Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		
		
	
		'topbar-social-item-background-color' => array(
			'section'=>$sections['topbar']['topbar-social']['topbar-social'],
			'selector'=>'.social-icon-topbar .icon','default'=>'#ffffff',
			'priority'=>'201','label'=>__('Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),

		'post-navigation-background-color'=>array(
			'section'=>$sections['single']['single-general']['single-general'],
			'selector'=>'.post-navigation .nav-previous a, .post-navigation .nav-next a',
			'default'=>'#eeeeee',
			'priority'=>'201','label'=>__('Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		'sticky-post-background-color'=>array(
			'section'=>$sections['post']['post-general']['post-general'],
			'selector'=>'.sticky',
			'default'=>'#eeeeee',
			'priority'=>'501','label'=>__('Sticky Post Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => '')
		
			),
	
	'hover-color' => array(
	
			
		'main-menu-top-level-hover-color' => array(
			'section'=>$sections['navigation']['main-menu-top-level']['main-menu-top-level'],
			'selector'=>'#main-navigation.main-menu ul li a:hover','default'=>'#333',
			'priority'=>'203','label'=>__('Hover Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		'main-menu-sub-level-hover-color' => array(
			'section'=>$sections['navigation']['main-menu-sub-level']['main-menu-sub-level'],
			'selector'=>'#main-navigation.main-menu ul li ul li a:hover','default'=>'#333',
			'priority'=>'203','label'=>__('Hover Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
	
		'topbar-social-item-hover-color'=>array(
			'section'=>$sections['topbar']['topbar-social']['topbar-social'],
			'selector'=>'.social-icon-topbar .icon:hover i.fa','default'=>'#333',
			'priority'=>'203','label'=>__('Hover Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
	
		'post-navigation-hover-color'=>array(
			'section'=>$sections['single']['single-general']['single-general'],
			'selector'=>'.post-navigation .nav-previous a:hover, .post-navigation 
			.nav-next a:hover',
			'default'=>'#1a1a1a',
			'priority'=>'203','label'=>__('Hover Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => ''),
		
		
		'all-buttons-hover-color'=>array(
			'section'=>$sections['general']['buttons']['buttons'],
			'selector'=>'.button1','default'=>'#fff',
			'priority'=>'203','label'=>__('Hover Color','million-shades'),'sanitize'=>'','property'=>'color',
		'transport'  => 'postMessage','description'  => '')),
	
	'hover-background-color' => array(
	
	
		'main-menu-top-level-hover-background-color' => array(
			'section'=>$sections['navigation']['main-menu-top-level']['main-menu-top-level'],
			'selector'=>'#main-navigation.main-menu ul li a:hover','default'=>'#fff',
			'priority'=>'204','label'=>__('Hover Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		'main-menu-sub-level-hover-background-color' => array(
			'section'=>$sections['navigation']['main-menu-sub-level']['main-menu-sub-level'],
			'selector'=>'#main-navigation.main-menu .sub-menu li a:hover','default'=>'#fff',
			'priority'=>'204','label'=>__('Hover Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		
		'post-navigation-hover-background-color'=>array(
			'section'=>$sections['single']['single-general']['single-general'],
			'selector'=>'.post-navigation .nav-previous a:hover, .post-navigation 
			.nav-next a:hover',
			'default'=>'#ddd',
			'priority'=>'204','label'=>__('Hover Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => ''),
		
		
		'all-buttons-hover-background-color'=>array(
			'section'=>$sections['general']['buttons']['buttons'],
			'selector'=>'.button1:hover,.nav-previous a:hover,.nav-next a:hover',
			'default'=>'#06d8e0',
			'priority'=>'204','label'=>__('Hover Background Color','million-shades'),'sanitize'=>'','property'=>'background-color',
		'transport'  => 'postMessage','description'  => '')
	)
			
	);
	
	return $fourcolors;
}	


/* 
*
* All border related color settings
*/

function million_shades_border_top_color(){
		
		$sections = million_shades_panels_sections();
		
		$accent = million_shades_get_accent_color_mod();
		$accent	= million_shades_hex2rgba($accent, 0.3);

		return $top_border_color = array(
	
			'footer-widget-item-top-border-color'=>array(
			'section'=>$sections['footer']['footer-widget']['footer-widget'],
			'selector'=>'.site-footer .widget ul li,.site-footer .news-widget-body-,
			.site-footer .widget-contacts-body span,.site-footer .widget-selected-link span,
		.site-footer .social-icon-widget,.site-footer .cta-overlay','default'=>'#aaa',
			'priority'=>'290','label'=>__('Border Top Color','million-shades'),'sanitize'=>'',
			'property'=>'border-top-color','unit'=>'',
			'transport'  => 'postMessage','description'  => ''),
	
			
			);

}

function million_shades_border_top_width(){
		
		$sections = million_shades_panels_sections();

		return $top_border_width = array(
	
			'footer-widget-item-top-border-width'=>array(
			'section'=>$sections['footer']['footer-widget']['footer-widget'],
			'selector'=>'.site-footer .widget ul li,.site-footer .news-widget-body-,
			.site-footer .widget-contacts-body span,.site-footer .widget-selected-link span,
			.site-footer .social-icon-widget,.site-footer .cta-overlay','default'=>'1',
			'priority'=>'291','label'=>__('Border Top Width','million-shades'),'sanitize'=>'',
			'property'=>'width','unit'=>'',
			'transport'  => 'postMessage','description'  => ''), 
			
			
			);

}

function million_shades_border_top_style(){
		
		$sections = million_shades_panels_sections();

		return $top_border_style = array(
	
			
			'footer-widget-item-top-border-style'=>array(
			'section'=>$sections['footer']['footer-widget']['footer-widget'],
			'selector'=>'.site-footer .widget ul li,.site-footer .news-widget-body-,
			.site-footer .widget-contacts-body span,.site-footer .widget-selected-link span,
			.site-footer .social-icon-widget,.site-footer .cta-overlay','default'=>'solid',
			'priority'=>'292','label'=>__('Border Top Style','million-shades'),'sanitize'=>'','property'=>'border-top-style',
			'unit'=>'',
			'transport'  => 'postMessage','description'  => ''), 
			
			
			);

}

function million_shades_border_bottom_color() {
		
		$sections = million_shades_panels_sections();

		return $bottom_border_color = array(
			
			'topbar-bottom-border-color' => array(
			'section'=>$sections['topbar']['topbar']['topbar'],
			'selector'=>'.topbar','default'=>'#EEEEEE','priority'=>'270','label'=>__('topbar-bottom-border-color','million-shades'),'sanitize'=>'',
			'property'=>'border-bottom-color','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
			
			);

}

function million_shades_border_bottom_width(){
		
		$sections = million_shades_panels_sections();

		return $bottom_border_width = array(
			
			'topbar-bottom-border-width' => array(
			'section'=>$sections['topbar']['topbar']['topbar'],
			'selector'=>'.topbar','default'=>'1','priority'=>'272','label'=>__('topbar-bottom-border-color','million-shades'),'sanitize'=>'',
			'property'=>'border-bottom-width','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
			
			);

}

function million_shades_border_bottom_style(){
		
		$sections = million_shades_panels_sections();

		return $bottom_border_style = array(
			
			'topbar-bottom-border-style' => array(
			'section'=>$sections['topbar']['topbar']['topbar'],
			'selector'=>'.topbar','default'=>'solid','priority'=>'273','label'=>__('Topbar Bottom Border Color','million-shades'),'sanitize'=>'',
			'property'=>'border-bottom-style','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
			
			);

}


function million_shades_two_side_border_color(){
	$sections = million_shades_panels_sections();

		return $two_side_border_color = array(
	
	'post-meta-border-color' => array(
			'section'=>$sections['post']['post-meta']['post-meta'],
			'selector'=>'.entry-meta','default'=>'#ededed','priority'=>'251',
			'label'=>__('Post Meta Border Color','million-shades'),'sanitize'=>'',
			'property'=>'border-color','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
	'single-meta-border-color' => array(
			'section'=>$sections['single']['single-meta']['single-meta'],
			'selector'=>'.single-meta','default'=>'#ededed','priority'=>'251',
			'label'=>__('Single Meta Border Color','million-shades'),'sanitize'=>'',
			'property'=>'border-color','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
	
			);
}


function million_shades_two_side_border_width(){
	$sections = million_shades_panels_sections();

		return $two_side_border_width = array(
	'post-meta-border-width' => array(
			'section'=>$sections['post']['post-meta']['post-meta'],
			'selector'=>'.entry-meta','default'=>'0','priority'=>'274',
			'label'=>__('post-meta-border-width','million-shades'),'sanitize'=>'',
			'property'=>'border-width','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
	'single-meta-border-width' => array(
			'section'=>$sections['single']['single-meta']['single-meta'],
			'selector'=>'.single-meta','default'=>'0','priority'=>'274',
			'label'=>__('single-meta-border-width','million-shades'),'sanitize'=>'',
			'property'=>'border-width','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
	
			);
}

function million_shades_two_side_border_style(){
	$sections = million_shades_panels_sections();

		return $two_side_border_style = array(
	'post-meta-border-style' => array(
			'section'=>$sections['post']['post-meta']['post-meta'],
			'selector'=>'.entry-meta','default'=>'none','priority'=>'275',
			'label'=>__('post-meta-border-style','million-shades'),'sanitize'=>'',
			'property'=>'border-style','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
	'single-meta-border-style' => array(
			'section'=>$sections['single']['single-meta']['single-meta'],
			'selector'=>'.single-meta','default'=>'none','priority'=>'275',
			'label'=>__('single-meta-border-style','million-shades'),'sanitize'=>'',
			'property'=>'border-style','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
	
			);
}



function million_shades_border_color(){
		$sections = million_shades_panels_sections();
		$accent = million_shades_get_accent_color_mod();
		$accent_rgba	= million_shades_hex2rgba($accent, 0.3);
		
		return $borderColor = array(			
		
			'button-border-color'=>array(
			'section'=>$sections['general']['buttons']['buttons'],
			'selector'=>'button1','default'=>'#333','priority'=>'251',
			'label'=>__('button-border-color','million-shades'),'sanitize'=>'',
			'property'=>'border-color','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
			
			
		
	);

}	

function million_shades_border_width(){
	
		$sections = million_shades_panels_sections();
		
		return $borderWidth = array(			
			
			
			'button-border-width'=>array(
			'section'=>$sections['general']['buttons']['buttons'],
			'selector'=>'button1','default'=>'0','priority'=>'275',
			'label'=>__('button-border-width','million-shades'),'sanitize'=>'',
			'property'=>'border-width','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
			
			
		
	);

}	


function million_shades_border_style(){
	
		$sections = million_shades_panels_sections();
		
		return $borderStyle = array(			
	
			'button-border-style'=>array(
			'section'=>$sections['general']['buttons']['buttons'],
			'selector'=>'button1','default'=>'none','priority'=>'280',
			'label'=>__('button-border-style','million-shades'),'sanitize'=>'',
			'property'=>'border-style','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
			
			
		
	);

}	

function million_shades_border_radius(){
		$sections = million_shades_panels_sections();
		
		return $borderRadiuse = array(			
			
			'button-border-radius'=>array(
			'section'=>$sections['general']['buttons']['buttons'],
			'selector'=>'button1','default'=>'0','priority'=>'276',
			'label'=>__('button-border-radius','million-shades'),'sanitize'=>'',
			'property'=>'border-radius','unit'=>'','transport'  => 'postMessage',
			'description'  => ''),
			
			
		
			'topbar-social-border-radius' => array(
			'section'=>$sections['topbar']['topbar-social']['topbar-social'],
			'selector'=>'.social-icon-topbar .icon','default'=>'0','priority'=>'276',
			'label'=>__('topbar-social-border-radius','million-shades'),'sanitize'=>'',
			'property'=>'border-radius','unit'=>'','transport'  => 'postMessage',
			'description'  => '')
			


	);

}	




function million_shades_get_border_width_style_radius($param,$types) {
	
	 $style ='';
	
	 $settings = array();
	 if( $types == 'border'){
	 $settings = million_shades_border_color();
	 }
	elseif ($types == 'top-border-color'){
		$settings = million_shades_border_top_color();
	}elseif ($types == 'top-border-width'){
		$settings = million_shades_border_top_width();
	}elseif ($types == 'top-border-style'){
		$settings = million_shades_border_top_style();
	}
	 elseif ($types == 'bottom-border-color'){
		$settings = million_shades_border_bottom_color();
	}elseif ($types == 'bottom-border-width'){
		$settings = million_shades_border_bottom_width();
	}elseif ($types == 'bottom-border-style'){
		$settings = million_shades_border_bottom_style();
	}
	elseif ($types == 'two-border-color'){
		$settings = million_shades_two_side_border_color();
	}elseif ($types == 'two-border-width'){
		$settings = million_shades_two_side_border_width();
	}elseif ($types == 'two-border-style'){
		$settings = million_shades_two_side_border_style();
	}
	 elseif( $types == 'width'){
	$settings =  million_shades_border_width();
	}elseif ( $types == 'style') {
	 $settings =  million_shades_border_style();
	}elseif ( $types == 'radius') {
	 $settings =  million_shades_border_radius();
	}
	
	
	foreach ($settings as $firstlevelkey=>$firstlevelval) {
		
		$secondlevelval = array_values($firstlevelval);
		
		$section = $secondlevelval[0];
		$sections[] = $section;
		
		
		$control = $firstlevelkey;
		$controls[]= $control;
	

		$selector = $secondlevelval[1];
		$selectors[] = $selector;
		
		$default = $secondlevelval[2];
		$defaults[] = $default;
		
		$priority = $secondlevelval[3];
		$priorities[] = $priority;
		
		
		$label = $secondlevelval[4];
		$labels[] = $label;
		
		$callback = $secondlevelval[5];
		$callbacks[] = $callback;
		
		$property = $secondlevelval[6];
		$properties[] = $property;
		
		$unit = $secondlevelval[7];
		$units[] = $unit;
		
		$transport = $secondlevelval[8];
		$transports[] = $transport;
		
		$description = $secondlevelval[9];
		$descriptions[] = $description;
		
		
		if (($types == 'two-border-color')|| ($types == 'top-border-color')|| ($types == 'bottom-border-color')){
		 
			$color_mod = get_theme_mod($control,$default);
			$opacity = $control.'-opacity';
			$opacity_mod = get_theme_mod($opacity,'1');
			
			if ($opacity_mod < 1) {
				$rgba	= million_shades_hex2rgba($color_mod, $opacity_mod);
			} 
			if ($opacity_mod == 1) {
				$rgba	= $color_mod;
			}
			if ($types == 'two-border-color'){
				$style 	.= "".esc_attr($selector). "{ border-bottom-color:" . esc_attr($rgba) . ";}"."\n";
				$style 	.= "".esc_attr($selector). "{ border-top-color:" . esc_attr($rgba) . ";}"."\n";
			}
			if ($types == 'top-border-color'){
				$style 	.= "".esc_attr($selector). "{ border-top-color:" . esc_attr($rgba) . ";}"."\n";
		
			}
			if ($types == 'bottom-border-color'){
				$style 	.= "".esc_attr($selector). "{ border-bottom-color:" . esc_attr($rgba) . ";}"."\n";
		
			}
			
		}
		
		if ($types == 'border') {
			$color_mod = get_theme_mod($control,$default);
			$opacity = $control.'-opacity';
			$opacity_mod = get_theme_mod($opacity,'1');
			
			if ($opacity_mod < 1) {
				$rgba	= million_shades_hex2rgba($color_mod, $opacity_mod);
			} 
			if ($opacity_mod == 1) {
				$rgba	= $color_mod;
			}
			
			$style 	.= "".esc_attr($selector). "{ border-color:" . esc_attr($rgba) . ";}"."\n";
		
			
		}
		
		if ($types == 'two-border-width'||$types == 'top-border-width'
			||$types == 'bottom-border-width'){
		 
			$width_mod = get_theme_mod($control,$default);
			
			if ($types == 'two-border-width'){
				$style 	.= "".esc_attr($selector). "{ border-bottom-width:" . intval($width_mod) . "px;}"."\n";
				
				$style 	.= "".esc_attr($selector). "{ border-top-width:" . intval($width_mod) . "px;}"."\n";
			}
			if ($types == 'top-border-width'){
				
				$style 	.= "".esc_attr($selector). "{ border-top-width:" . intval($width_mod) . "px;}"."\n";
			}
			if ($types == 'bottom-border-width'){
				
				$style 	.= "".esc_attr($selector). "{ border-bottom-width:" . intval($width_mod) . "px;}"."\n";
			
			}
			
		}
		
		if ($types == 'width'){
		 
			$width_mod = get_theme_mod($control,$default);
			$style 	.= "".esc_attr($selector). "{ border-width:" . intval($width_mod) . "px;}"."\n";
			
		}
		
		if ($types == 'two-border-style'||$types == 'top-border-style'
			||$types == 'bottom-border-style'){
		 
			$style_mod = get_theme_mod($control,$default);
			
			if ($types == 'two-border-style'){
			$style 	.= "".esc_attr($selector). "{ border-bottom-style:" . esc_attr($style_mod) . ";}"."\n";
				
			$style 	.= "".esc_attr($selector). "{ border-top-style:" . esc_attr($style_mod) . ";}"."\n";
			}
			if ($types == 'top-border-style'){
			
			$style 	.= "".esc_attr($selector). "{ border-top-style:" . esc_attr($style_mod) . ";}"."\n";
			}
			if ($types == 'bottom-border-style'){
			
			$style 	.= "".esc_attr($selector). "{ border-bottom-style:" . esc_attr($style_mod) . ";}"."\n";
			}
			
		}
		
		if ($types == 'style'){
		 
			$style_mod = get_theme_mod($control,$default);
			$style 	.= "".esc_attr($selector). "{ border-style:" . esc_attr($style_mod) . ";}"."\n";
			
		}
		
		if ( $types == 'radius') {
			
			if ($control != 'scroll-up-border-radius'){
				
			$style_mod = get_theme_mod($control,$default);
			
			$style 	.= "".esc_attr($selector). "{ border-radius:" . intval($style_mod) . "px;}"."\n";
			
			}
			
		}
		
		
		
		
	}
	
	if($param =='control'){
	return $controls;	
	}
	elseif($param =='style'){
	return $style;	
	}
	elseif($param =='section'){
	return $sections;	
	}
	elseif($param =='default'){
	return $defaults;	
	}
	elseif($param =='description'){
	return $descriptions;	
	}
	elseif($param =='property'){
	return $properties;	
	}
	elseif($param =='priority'){
	return $priorities;	
	}
	elseif($param =='selector'){
	return $selectors;	
	}
	elseif($param =='transport'){
	return $transports;	
	}
	
	
}



/* All Headings  */ 
function million_shades_heading_controls() {
	
	$headings = million_shades_panels_sections();
	
	return	 array(
			'site-title-font'=>array(
					'section'=>$headings['site-header']['site-title']['site-title'],
					'seclector'=>'','priority'=>'150','label'=>__('Site Title Font','million-shades')),
			'site-title-color'=>array(
					'section'=>$headings['site-header']['site-title']['site-title'],
					'seclector'=>'','priority'=>'200','label'=>__('Site Title Color','million-shades')),
			
			'topbar-color'=>array(
					'section'=>$headings['topbar']['topbar']['topbar'],
					'seclector'=>'','priority'=>'200','label'=>__('Topbar Color','million-shades')),
			
			'topbar-contact-color'=>array(
					'section'=>$headings['topbar']['topbar-contact']['topbar-contact'],
					'seclector'=>'','priority'=>'200','label'=>__('Topbar Contact Color','million-shades')),
			
			'topbar-social-color'=>array(
					'section'=>$headings['topbar']['topbar-social']['topbar-social'],
					'seclector'=>'','priority'=>'200','label'=>__('Topbar Social Color','million-shades')),
					
		
			
			'buttons-color'=>array(
					'section'=>$headings['general']['buttons']['buttons'],
					'seclector'=>'','priority'=>'200','label'=>__('Buttons Color','million-shades')),
					
			'scroll-up-color'=>array(
					'section'=>$headings['general']['scroll-up']['scroll-up'],
					'seclector'=>'','priority'=>'200','label'=>__('Scroll-up Color','million-shades')),
					
			'site-background-color'=>array(
					'section'=>'background_image',
					'seclector'=>'','priority'=>'200','label'=>__('Site Background Color','million-shades')),
			
			'site-header-color'=>array(
					'section'=>$headings['site-header']['site-header']['site-header'],
					'seclector'=>'','priority'=>'200','label'=>__('Site Header Color','million-shades')),
			
			'site-description-color'=>array(
					'section'=>$headings['site-header']['site-description']['site-description'],
					'seclector'=>'','priority'=>'200','label'=>__('Site Description Color','million-shades')),
			

			
			'main-menu-sub-level-font'=>array(
					'section'=>$headings['navigation']['main-menu-sub-level']['main-menu-sub-level'],
					'seclector'=>'','priority'=>'150','label'=>__('Navigation Sub Level Font','million-shades')),
			
			'main-menu-top-level-color'=>array(
					'section'=>$headings['navigation']['main-menu-top-level']['main-menu-top-level'],
					'seclector'=>'','priority'=>'200','label'=>__('Navigation Top Level Color','million-shades')),
			
			'main-menu-top-level-margin'=>array(
					'section'=>$headings['navigation']['main-menu-top-level']['main-menu-top-level'],
					'seclector'=>'','priority'=>'300','label'=>__('Navigation Margins','million-shades')),
					
			'main-menu-sub-level-color'=>array(
					'section'=>$headings['navigation']['main-menu-sub-level']['main-menu-sub-level'],
					'seclector'=>'','priority'=>'200','label'=>__('Navigation Sub Level Color','million-shades')),
					
			'page-title-color'=>array(
					'section'=>$headings['page']['page-title']['page-title'],
					'seclector'=>'','priority'=>'200','label'=>__('Page Title Color','million-shades')),
			'page-header-color'=>array(
					'section'=>$headings['page']['page-header']['page-header'],
					'seclector'=>'','priority'=>'200','label'=>__('Page Header Color','million-shades')),
			
			'topbar-border'=>array(
					'section'=>$headings['topbar']['topbar']['topbar'],
					'seclector'=>'','priority'=>'250','label'=>__('Topbar Border','million-shades')),
			'post-meta-border'=>array(
					'section'=>$headings['post']['post-meta']['post-meta'],
					'seclector'=>'','priority'=>'250','label'=>__('List Post Meta Border','million-shades')),
			'single-post-meta-border'=>array(
					'section'=>$headings['single']['single-meta']['single-meta'],
					'seclector'=>'','priority'=>'250','label'=>__('Single Post Meta Border','million-shades')),
			
			'single-general-color'=>array(
					'section'=>$headings['single']['single-general']['single-general'],
					'seclector'=>'','priority'=>'200','label'=>__('Single Post Navigation Color','million-shades')),
			
			'footer-widget-color'=>array(
					'section'=>$headings['footer']['footer-widget']['footer-widget'],
					'seclector'=>'','priority'=>'200','label'=>__('Footer Widget Color','million-shades')),
			
			
			'footer-info-color'=>array(
					'section'=>$headings['footer']['footer-info']['footer-info'],
					'seclector'=>'','priority'=>'198','label'=>__('Site Info Color','million-shades')),
					
			'sticky-header'=>array(
					'section'=>$headings['site-header']['sticky-header']['sticky-header'],
					'seclector'=>'','priority'=>'8','label'=>__('Sticky Header','million-shades')),
					
			'full-page-header-media'=>array(
					'section'=>$headings['site-header']['sticky-header']['sticky-header'],
					'seclector'=>'','priority'=>'48','label'=>__('Full Page Header Media','million-shades')),
					
			'logo'=>array(
					'section'=>$headings['site-header']['site-title']['site-title'],
					'seclector'=>'','priority'=>'61','label'=>__('Logo','million-shades')),
		
			
			'scroll-up-settings'=>array(
					'section'=>$headings['general']['scroll-up']['scroll-up'],
					'seclector'=>'','priority'=>'79','label'=>__('Scroll-up Settings','million-shades')),
			
			'site-background-margins'=>array(
					'section'=>$headings['layout']['site-layout']['site-layout'],
					'seclector'=>'','priority'=>'179','label'=>__('Site Background Margins','million-shades')),
			
			'site-header-paddings'=>array(
					'section'=>$headings['site-header']['site-header']['site-header'],
					'seclector'=>'','priority'=>'275','label'=>__('Site Header Paddings','million-shades')),	
		
			'button-border'=>array(
					'section'=>$headings['general']['buttons']['buttons'],
					'seclector'=>'button1','priority'=>'250','label'=>__('Button Border','million-shades')),
		
			'social-border'=>array(
					'section'=>$headings['topbar']['topbar-social']['topbar-social'],
					'seclector'=>'','priority'=>'250','label'=>__('Social Border','million-shades')),
			'social-input'=>array(
					'section'=>$headings['topbar']['topbar-social']['topbar-social'],
					'seclector'=>'','priority'=>'37','label'=>__('Social Input','million-shades')),
			'contact-input'=>array(
					'section'=>$headings['topbar']['topbar-contact']['topbar-contact'],
					'seclector'=>'','priority'=>'19','label'=>__('Contact Input','million-shades')),
		
		
			'site-credit-input'=>array(
					'section'=>$headings['footer']['footer-info']['footer-info'],
					'seclector'=>'','priority'=>'18','label'=>__('Site Credit Input','million-shades')),
			'footer-info-background'=>array(
					'section'=>$headings['footer']['footer-info']['footer-info'],
					'seclector'=>'','priority'=>'58','label'=>__('Site Info Background','million-shades')),
			'footer-info-padding'=>array(
					'section'=>$headings['footer']['footer-info']['footer-info'],
					'seclector'=>'','priority'=>'225','label'=>__('Site Info Padding','million-shades')),
			
			'single-show/hide-elements'=>array(
					'section'=>$headings['single']['single-general']['single-general'],
					'seclector'=>'','priority'=>'8','label'=>__('Show/hide Elements','million-shades')),
					
			'show/hide-elements'=>array(
					'section'=>$headings['post']['post-general']['post-general'],
					'seclector'=>'','priority'=>'8','label'=>__('Show/hide Elements','million-shades')),
			'blog-post-query'=>array(
					'section'=>$headings['post']['post-general']['post-general'],
					'seclector'=>'','priority'=>'28','label'=>__('Blog Post Query','million-shades')),
			
			'form-input-paddings'=>array(
					'section'=>$headings['general']['forms']['forms'],
					'seclector'=>'','priority'=>'345','label'=>__('Form Input Paddings','million-shades')),
			'form-input-margins'=>array(
					'section'=>$headings['general']['forms']['forms'],
					'seclector'=>'','priority'=>'350','label'=>__('Form Input Margins','million-shades')),
					
			'button-paddings'=>array(
					'section'=>$headings['general']['buttons']['buttons'],
					'seclector'=>'','priority'=>'329','label'=>__('Button Paddings','million-shades')),
			
			'font'=>array(
					'section'=>$headings['general']['general']['general'],
					'seclector'=>'','priority'=>'1','label'=>__('Global Font Settings','million-shades')),
			'first-featured-item'=>array(
					'section'=>$headings['feature-post']['feature-item']['feature-item'],
					'seclector'=>'','priority'=>'20','label'=>__('First Feature Item Detail','million-shades')),
			'second-featured-item'=>array(
					'section'=>$headings['feature-post']['feature-item']['feature-item'],
					'seclector'=>'','priority'=>'30','label'=>__('Second Feature Item Detail','million-shades')),		
			'third-featured-item'=>array(
					'section'=>$headings['feature-post']['feature-item']['feature-item'],
					'seclector'=>'','priority'=>'40','label'=>__('Third Feature Item Detail','million-shades')),
					
			'header-media-overlay'=>array(
					'section'=>'header_image',
					'seclector'=>'','priority'=>'70','label'=>__('Header Medaia Overlay & Text','million-shades')),
			
			
			'footer-widget-item-border'=>array(
					'section'=>$headings['footer']['footer-widget']['footer-widget'],
					'seclector'=>'','priority'=>'289','label'=>__('Footer Widget Item Border','million-shades')),
			
			'page-selection-for-slides'=>array(
					'section'=>'header_image',
					'seclector'=>'','priority'=>'400','label'=>__('Page Selection for Slides','million-shades')),
			'feature-slide-detail'=>array(
					'section'=>$headings['feature-post']['feature-slides']['feature-slides'],
					'seclector'=>'','priority'=>'21','label'=>__('Featured Slider Input Detail','million-shades')),
			
					
			'footer-background-color'=>array(
					'section'=>$headings['footer']['footer-widget']['footer-widget'],
					'seclector'=>'','priority'=>'72','label'=>__('Footer Background Color','million-shades')),

					
		
	);
	
	
}



function million_shades_get_heading_styles($param1,$param2) {
		
		if ($param2 == 'free'){
		$settings = million_shades_heading_controls();	
		}
		if ( class_exists('Million_Shades_Pro')) { 
			if ($param2 == 'pro'){
		$settings = million_shades_pro_heading_controls();
			}
		}
		
			
			foreach ($settings as $firstlevelkey=>$firstlevelval) {
		
				$secondlevelval = array_values($firstlevelval);
				$section = $secondlevelval[0];
				$sections[] = $section;
				$control = $firstlevelkey.'-heading';
				$controls[] = $control;
				$allControls[] = $control;
				
				$label = ucwords(str_replace("-"," ",$firstlevelkey));
				$labels[] = $label;
				$priority = $secondlevelval[2];
				$priorities[] = $priority;
				$title = $secondlevelval[3];
				$titles[] = $title;
				
			}
		
				$colorHeadings =  million_shades_get_color_style('section');
				$uniqueHeads = array_unique($colorHeadings );
				foreach ($uniqueHeads as $uniqueHead) {
					
					$headControl = $uniqueHead.'-color-heading';
					$allControls[] = $headControl;
				}
				
	if($param1 =='control'){
	return $controls;	
	}
	elseif($param1 =='all'){
	return $allControls;	
	}
	elseif($param1 =='section'){
	return $sections;	
	}
	elseif($param1 =='label'){
	return $labels;	
	}
	elseif($param1 =='title'){
	return $titles;	
	}
	elseif($param1 =='priority'){
	return $priorities;	
	}
	
	
}

/*  design-size.php */
function million_shades_get_circle_icon() {
	
	$sections = million_shades_panels_sections();
	return $circle = array(
	'textbox'=>array(
	
	'scroll-up-icon-size'=>array(	
				'section'=>$sections['general']['scroll-up']['scroll-up'],
				'selector'=>'#scroll-up i.fa','default'=>'20','label'=>__('Icon Size','million-shades')),
	
	));
}


/*  creating settings in design-size.php */
function million_shades_get_circle_icon_style($param, $types) {
	
	$settings = million_shades_get_circle_icon();
	
		foreach ($settings[$types] as $firstlevelkey=>$firstlevelval) {
		
				$secondlevelval = array_values($firstlevelval);
				$section = $secondlevelval[0];
				$sections[] = $section;
				$control = $firstlevelkey;
				$controls[] = $control;
				$selector = $secondlevelval[1];
				$selectors[] = $selector;
				$label = $secondlevelval[3];
				$labels[] = $label;
				$default = $secondlevelval[2];
				$defaults[] = $default;
		
		}
	
	if($param =='control'){
	return $controls;	
	}
	elseif($param =='section'){
	return $sections;	
	}
	elseif($param =='default'){
	return $defaults;	
	}
	elseif($param =='selector'){
	return $selectors;	
	}
	elseif($param =='style'){
	return $style;	
	}
	elseif($param =='label'){
	return $labels;	
	}

}



/*  
* all checkbox related settings(hide)
*/

function million_shades_get_hide_checkboxes() {
  
$checkboxes = million_shades_panels_sections();

return array(
    

	'hide-site-description'=>array(
		'section'=>$checkboxes['site-header']['site-description']['site-description'],
		'selector'=>'#site-description,.site-description','default'=>'1','priority'=>'9',
		'label'=>__('Hide Site Description','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'hide-topbar'=>array(
		'section'=>$checkboxes['topbar']['topbar']['topbar'],
		'selector'=>'.topbar','default'=>'','priority'=>'9',
		'label'=>__('Hide Topbar','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'hide-single-title'=>array(
		'section'=>$checkboxes['single']['single-header']['single-header'],
		'selector'=>'h1.single-title','default'=>'','priority'=>'9',
		'label'=>__('Hide Single Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'hide-post-title'=>array(
		'section'=>$checkboxes['post']['post-general']['post-general'],
		'selector'=>'h2.entry-title','default'=>'','priority'=>'9',
		'label'=>__('Hide Post Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'hide-post-meta'=>array(
		'section'=>$checkboxes['post']['post-meta']['post-meta'],
		'selector'=>'.entry-meta','default'=>'','priority'=>'9',
		'label'=>__('Hide Post Meta','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'hide-single-meta'=>array(
		'section'=>$checkboxes['single']['single-meta']['single-meta'],
		'selector'=>'.single-meta','default'=>'','priority'=>'9',
		'label'=>__('Hide Single Meta','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'hide-category-on-top'=>array(
		'section'=>$checkboxes['single']['single-general']['single-general'],
		'selector'=>'.single-header .post-categories','default'=>'','priority'=>'359',
		'label'=>__('Hide Category on Top','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),

	'hide-single-entry-footer'=>array(
		'section'=>$checkboxes['single']['single-general']['single-general'],
		'selector'=>'.single-footer','default'=>'','priority'=>'359',
		'label'=>__('Hide Single Entry Footer','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'hide-page-header'=>array(
		'section'=>$checkboxes['page']['page-header']['page-header'],
		'selector'=>'.page-content-header','default'=>'','priority'=>'9',
		'label'=>__('Hide Page Header','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
	'hide-page-title'=>array(
		'section'=>$checkboxes['page']['page-title']['page-title'],
		'selector'=>'h1.page-title','default'=>'','priority'=>'9',
		'label'=>__('Hide Page Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
	'hide-blog-page-title'=>array(
		'section'=>$checkboxes['page']['page-title']['page-title'],
		'selector'=>'.blog-post-page h1.page-title','default'=>'','priority'=>'9',
		'label'=>__('Hide Blog Page Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
	'hide-archive-page-title'=>array(
		'section'=>$checkboxes['page']['page-title']['page-title'],
		'selector'=>'.archive-header h1.page-title','default'=>'','priority'=>'9',
		'label'=>__('Hide Archive Page Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'hide-search-page-title'=>array(
		'section'=>$checkboxes['page']['page-title']['page-title'],
		'selector'=>'.search-page h1.page-title','default'=>'0','priority'=>'9',
		'label'=>__('Hide Search Page Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),


	'hide-featured-images'=>array(
		'section'=>$checkboxes['post']['post-general']['post-general'],
		'selector'=>'.entry-header .post-thumbnail','default'=>'','priority'=>'9',
		'label'=>__('Hide Featured Images','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'hide-featured-images-single'=>array(
		'section'=>$checkboxes['single']['single-general']['single-general'],
		'selector'=>'.single-header .featured-image','default'=>'','priority'=>'79',
		'label'=>__('Hide Featured Images Single','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
	'hide-single-post-title'=>array(
		'section'=>$checkboxes['single']['single-general']['single-general'],
		'selector'=>'h1.single-title','default'=>'','priority'=>'79',
		'label'=>__('Hide Single Post Title','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'hide-single-post-meta'=>array(
		'section'=>$checkboxes['single']['single-general']['single-general'],
		'selector'=>'.single-meta','default'=>'','priority'=>'79',
		'label'=>__('Hide Single Post Meta','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'hide-single-post-content'=>array(
		'section'=>$checkboxes['single']['single-general']['single-general'],
		'selector'=>'.single-content','default'=>'','priority'=>'79',
		'label'=>__('Hide Single Post Content','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'hide-single-post-navigation'=>array(
		'section'=>$checkboxes['single']['single-general']['single-general'],
		'selector'=>'.single-nav','default'=>'','priority'=>'79',
		'label'=>__('Hide Single Post Navigation','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'hide-single-post-comments'=>array(
		'section'=>$checkboxes['single']['single-general']['single-general'],
		'selector'=>'.single-comments','default'=>'','priority'=>'79',
		'label'=>__('Hide Single Post Comments','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'hide-single-related-post'=>array(
		'section'=>$checkboxes['single']['single-general']['single-general'],
		'selector'=>'.related-single','default'=>'','priority'=>'79',
		'label'=>__('Hide Related Post on Single','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
	'hide-blog-author-detail'=>array(
		'section'=>$checkboxes['single']['single-general']['single-general'],
		'selector'=>'.post-author-box','default'=>'1','priority'=>'79',
		'label'=>__('Hide Blog Author Detail','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),

	'hide-post-meta'=>array(
		'section'=>$checkboxes['post']['post-general']['post-general'],
		'selector'=>'.entry-meta','default'=>'','priority'=>'9',
		'label'=>__('Hide Post Meta','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'hide-post-content'=>array(
		'section'=>$checkboxes['post']['post-general']['post-general'],
		'selector'=>'.entry-content','default'=>'','priority'=>'9',
		'label'=>__('Hide Post Content','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),


	'hide-scrollup'=>array(
		'section'=>$checkboxes['general']['scroll-up']['scroll-up'],
		'selector'=>'#scroll-up','default'=>'','priority'=>'1',
		'label'=>__('Hide Scrollup','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	
	
	'hide-paging'=>array(
		'section'=>$checkboxes['general']['pagination']['pagination'],
		'selector'=>'.pagination .nav-links','default'=>'','priority'=>'9',
		'label'=>__('Hide Paging','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),

	'hide-post-publication-date'=>array(
		'section'=>$checkboxes['post']['post-meta']['post-meta'],
		'selector'=>'.entry-meta span.posted-on','default'=>'','priority'=>'9',
		'label'=>__('Hide Post Publication Date','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'hide-post-author'=>array(
		'section'=>$checkboxes['post']['post-meta']['post-meta'],
		'selector'=>'.entry-meta span.byline','default'=>'','priority'=>'9',
		'label'=>__('Hide Post Author','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'hide-post-comments'=>array(
		'section'=>$checkboxes['post']['post-meta']['post-meta'],
		'selector'=>'.entry-meta span.comments-link','default'=>'','priority'=>'9',
		'label'=>__('Hide Leave a Comment','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
	'hide-publication-date'=>array(
		'section'=>$checkboxes['single']['single-meta']['single-meta'],
		'selector'=>'.single-meta span.posted-on','default'=>'','priority'=>'9',
		'label'=>__('Hide Publication Date','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'hide-author'=>array(
		'section'=>$checkboxes['single']['single-meta']['single-meta'],
		'selector'=>'.single-meta span.byline','default'=>'','priority'=>'9',
		'label'=>__('Hide Author','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'hide-comments'=>array(
		'section'=>$checkboxes['single']['single-meta']['single-meta'],
		'selector'=>'.single-meta span.comments-link','default'=>'','priority'=>'9',
		'label'=>__('Hide Comments','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	
	'hide-categories-on-top'=>array(
		'section'=>$checkboxes['post']['post-general']['post-general'],
		'selector'=>'.entry-header .post-categories','default'=>'','priority'=>'9',
		'label'=>__('Hide Categories on Top','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),

	'hide-post-entry-footer'=>array(
		'section'=>$checkboxes['post']['post-general']['post-general'],
		'selector'=>'.entry-footer','default'=>'','priority'=>'9',
		'label'=>__('Hide Post Entry Footer','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		

		
	
		
		);
  
}

/*  
* all checkbox related settings(enable)
*/

function million_shades_get_enable_checkboxes() {
  
$checkboxes = million_shades_panels_sections();

return array(

	'enable-excerpt'=>array(
		'section'=>$checkboxes['post']['post-general']['post-general'],
		'selector'=>'.post-excerpt','default'=>'1','priority'=>'10',
		'label'=>__('Enable Excerpt','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
		
	'enable-drop-cap'=>array(
		'section'=>$checkboxes['post']['post-general']['post-general'],
		'selector'=>'.drop-cap','default'=>'1','priority'=>'10',
		'label'=>__('Enable Drop Cap','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
	'enable-related-post-home'=>array(
		'section'=>$checkboxes['post']['post-general']['post-general'],
		'selector'=>'.drop-cap','default'=>'0','priority'=>'11',
		'label'=>__('Enable Related Posts on Home Page/Front Page','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
	
	'enable-drop-cap-single'=>array(
		'section'=>$checkboxes['single']['single-general']['single-general'],
		'selector'=>'.drop-cap','default'=>'1','priority'=>'10',
		'label'=>__('Enable Drop Cap','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
	
	'enable-sticky-header'=>array(
		'section'=>$checkboxes['site-header']['sticky-header']['sticky-header'],
		'selector'=>'.sticky-header','default'=>'1','priority'=>'9',
		'label'=>__('Enable Sticky Header','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
	'enable-full-page-header-media'=>array(
		'section'=>$checkboxes['site-header']['sticky-header']['sticky-header'],
		'selector'=>'','default'=>'0','priority'=>'49',
		'label'=>__('Enable Full-Page Header Media','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  =>''),
	'enable-overlay-text'=>array(
		'section'=>'header_image',
		'selector'=>'.media-imag-overlay-cta,.slide_border_style','default'=>'1','priority'=>'71',
		'label'=>__('Enable Overlay & Text','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),	
	'enable-feature-items'=>array(
		'section'=>$checkboxes['feature-post']['feature-item']['feature-item'],
		'selector'=>'','default'=>'0','priority'=>'11',
		'label'=>__('Enable Featured Items','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),	
	'enable-feature-slider'=>array(
		'section'=>$checkboxes['feature-post']['feature-slides']['feature-slides'],
		'selector'=>'','default'=>'0','priority'=>'11',
		'label'=>__('Enable Featured Slider','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),		
		

		
		);

}


/*  
* all image related settings
*/
function million_shades_get_images() {
	
	$images = million_shades_panels_sections();
	
	return array(

		
		'footer-background'=>array(
					'section'=>$images['footer']['footer-info']['footer-info'],
					'selector'=>'.site-footer .site-info','default'=>'','priority'=>'60',
		'label'=>__('Footer Background Image','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'page-header-background'=>array(
					'section'=>$images['page']['page-header']['page-header'],
					'selector'=>'.page-content-header','default'=>'','priority'=>'30',
		'label'=>__('Page Header Background Image','million-shades'),'sanitize'=>'header_image_active_callback','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
		
		'featured-item-image1'=>array(
					'section'=>$images['feature-post']['feature-item']['feature-item'],
					'selector'=>'','default'=>'','priority'=>'24',
		'label'=>__('Upload Image for First Feature Item','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
		
		'featured-item-image2'=>array(
					'section'=>$images['feature-post']['feature-item']['feature-item'],
					'selector'=>'','default'=>'','priority'=>'34',
		'label'=>__('Upload Image for Second Feature Item','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
		
		'featured-item-image3'=>array(
					'section'=>$images['feature-post']['feature-item']['feature-item'],
					'selector'=>'','default'=>'','priority'=>'44',
		'label'=>__('Upload Image for Third Feature Item','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => '')
		
	
			
	);

}

/*  
* height width settings
*/

function million_shades_get_height_width() {
	
	$sections = million_shades_panels_sections();
	
	return array(
	
		
		'footer-info-height'=>array(
					'section'=>$sections['footer']['footer-info']['footer-info'],
					'selector'=>'.site-info','default'=>'200','priority'=>'61',
					'label'=>__('Site Info Height','million-shades'),'sanitize'=>'','property'=>'height','unit'=>'',
		'transport' => 'postMessage','description'  => ''),	
		
		
				
	);
}


/* 
* creates site width settings in height-width.php
*/
function million_shades_get_screen_width() {
	
	$sections = million_shades_panels_sections();

	return array(
		
				
		'desktop-content-container-width'=>array(
					'section'=>$sections['site-width']['desktop-width']['desktop-width'],
					'selector'=>'.inner-content','default'=>'86','priority'=>'29',
					'label'=>__('Desktop Content Container Width(%)','million-shades'),'sanitize'=>'','property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
					
		'desktop-content-width'=>array(
					'section'=>$sections['site-width']['desktop-width']['desktop-width'],
					'selector'=>'#primary','default'=>'69','priority'=>'29',
					'label'=>__('Desktop Content Width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
				
		'desktop-sidebar-width'=>array(
					'section'=>$sections['site-width']['desktop-width']['desktop-width'],
					'selector'=>'#secondary','default'=>'26','priority'=>'29',
					'label'=>__('Desktop Sidebar Width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
					
		'laptop-content-container-width'=>array(
					'section'=>$sections['site-width']['laptop-width']['laptop-width'],
					'selector'=>'.inner-content','default'=>'86','priority'=>'29',
					'label'=>__('Laptop Content Container Width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
					
		'laptop-content-width'=>array(
					'section'=>$sections['site-width']['laptop-width']['laptop-width'],
					'selector'=>'#primary','default'=>'69','priority'=>'29',
					'label'=>__('Laptop Content Width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
				
		'laptop-sidebar-width'=>array(
					'section'=>$sections['site-width']['laptop-width']['laptop-width'],
					'selector'=>'#secondary','default'=>'26','priority'=>'29',
					'label'=>__('Laptop Sidebar Width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
				
						
		'large-tablet-content-container-width'=>array(
					'section'=>$sections['site-width']['large-tablet-width']['large-tablet-width'],
					'selector'=>'.inner-content','default'=>'90','priority'=>'29',
					'label'=>__('Large Tablet Content Container Width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
					
		'large-tablet-content-width'=>array(
					'section'=>$sections['site-width']['large-tablet-width']['large-tablet-width'],
					'selector'=>'#primary','default'=>'69','priority'=>'29',
					'label'=>__('Large Tablet Content width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
				
		'large-tablet-sidebar-width'=>array(
					'section'=>$sections['site-width']['large-tablet-width']['large-tablet-width'],
					'selector'=>'#secondary','default'=>'26','priority'=>'29',
					'label'=>__('Large Tablet Sidebar Width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
					
					
		'tablet-content-container-width'=>array(
					'section'=>$sections['site-width']['tablet-width']['tablet-width'],
					'selector'=>'.inner-content','default'=>'90','priority'=>'29',
					'label'=>__('tablet-content-container-width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
					
		'tablet-content-width'=>array(
					'section'=>$sections['site-width']['tablet-width']['tablet-width'],
					'selector'=>'#primary','default'=>'100','priority'=>'29',
					'label'=>__('tablet-content-width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
				
		'tablet-sidebar-width'=>array(
					'section'=>$sections['site-width']['tablet-width']['tablet-width'],
					'selector'=>'#secondary','default'=>'100','priority'=>'29',
					'label'=>__('tablet-sidebar-width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
				
		'phone-content-container-width'=>array(
					'section'=>$sections['site-width']['phone-width']['phone-width'],
					'selector'=>'.inner-content','default'=>'90','priority'=>'29',
					'label'=>__('phone-content-container-width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
					
		'phone-content-width'=>array(
					'section'=>$sections['site-width']['phone-width']['phone-width'],
					'selector'=>'#primary','default'=>'100','priority'=>'29',
					'label'=>__('phone-content-width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => ''),
				
		'phone-sidebar-width'=>array(
					'section'=>$sections['site-width']['phone-width']['phone-width'],
					'selector'=>'#secondary','default'=>'100','priority'=>'29',
					'label'=>__('phone-sidebar-width(%)','million-shades'),'sanitize'=>'',
					'property'=>'','unit'=>'%',
		'transport' => 'postMessage','description'  => '')
				
		
				
	);
}


/* 
* creates three alignment settings in layout.php
*/
function million_shades_get_three_alignment() {
$sections = million_shades_panels_sections();

return $alignment = array(
	
	
	
	'paging-alignment'=>array(
				'section'=>$sections['general']['pagination']['pagination'],
				'selector'=>'.pagination .nav-links','default'=>'center','priority'=>'71',
				'label'=>__('Page Alignment','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
	'transport' => 'postMessage','description'  => ''),
	
	'sidebar-widget-title-alignment'=>array(
				'section'=>$sections['sidebar']['sidebar-widget']['sidebar-widget'],
				'selector'=>'#secondary h3.widget-title','default'=>'center','priority'=>'71',
				'label'=>__('Sidebar Widget Title Alignment','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'footer-widget-title-alignment'=>array(
				'section'=>$sections['footer']['footer-widget']['footer-widget'],
				'selector'=>'#site-footer h4.widget-title','default'=>'left','priority'=>'71',
				'label'=>__('Footer Widget Title Alignment','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	'page-title-align'=>array(
				'section'=>$sections['page']['page-title']['page-title'],
				'selector'=>'.woo-header,h1.page-title','default'=>'left','priority'=>'71',
				'label'=>__('Page Title Align','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'single-header-align'=>array(
				'section'=>$sections['single']['single-header']['single-header'],
				'selector'=>'h1.single-title,.single-meta,.single-footer,.single-header',
				'default'=>'center','priority'=>'71',
				'label'=>__('Single Header Align','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
	
	'post-header-align'=>array(
				'section'=>$sections['post']['post-general']['post-general'],
				'selector'=>'h2.entry-title,.entry-meta,.entry-header,.post-thumbnail,.blog-buttons',
				'default'=>'center','priority'=>'27',
				'label'=>__('Post Header Align','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => '')
	
);

}

/* 
* creates four alignment settings in layout.php
*/
function million_shades_get_four_alignment() {
$sections = million_shades_panels_sections();

return $alignment = array(
	
	
	'page-content-align'=>array(
				'section'=>$sections['page']['page-content']['page-content'],
				'selector'=>'.page-content, .page-content p','default'=>'left','priority'=>'71',
					'label'=>__('Page Content Align','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	'single-content-align'=>array(
				'section'=>$sections['single']['single-content']['single-content'],
				'selector'=>'.single-content,.single-content p','default'=>'justify','priority'=>'71',
					'label'=>__('Single Content Align','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => ''),
	
		
	'post-content-align'=>array(
				'section'=>$sections['post']['post-content']['post-content'],
				'selector'=>'.entry-content,.entry-content p','default'=>'justify','priority'=>'71',
					'label'=>__('Post Content Align','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'postMessage','description'  => '')
	
	
);

}


/* 
* creates four alignment settings in layout.php
*/
function million_shades_get_page_select() {


return $page_select = array(
	
	
	'page-selection-slide1'=>array(
				'section'=>'header_image',
				'selector'=>'','default'=>'','priority'=>'440',
					'label'=>__('Select a Page for Slide1','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
	'page-selection-slide2'=>array(
				'section'=>'header_image',
				'selector'=>'','default'=>'','priority'=>'440',
					'label'=>__('Select a Page for Slide2','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
	
		
	'page-selection-slide3'=>array(
				'section'=>'header_image',
				'selector'=>'','default'=>'','priority'=>'440',
					'label'=>__('Select a Page for Slide3','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
		'transport' => 'refresh','description'  => ''),
	
	'page-selection-slide4'=>array(
				'section'=>'header_image',
				'selector'=>'','default'=>'','priority'=>'440',
					'label'=>__('Select a Page for Slide4','million-shades'),'sanitize'=>'','property'=>'','unit'=>'',
	'transport' => 'refresh','description'  => '')
	
	
);

}

/* 
* creates sidebar layout settings in layout.php
*/
function million_shades_sidebar_layout(){
	
	return $sections = array('post-layout'=>__('List Post Layout','million-shades'),
	'single-post-layout'=>__('Single Post Layout','million-shades'),'page-layout'=>__('Page Layout','million-shades'));
	
}



/* 
* creates unmatch options settings in position.php
*/
function million_shades_positions_layouts() {
	
	$sections = million_shades_panels_sections();
	
	
	$layouts = array(
	
			'site-layout' =>array('site-layout'=>$sections['layout']['site-layout']['site-layout'],
			'selector'=>'body','default'=>'full-width','priority'=>'100',
			'label'=>__('Site Layout','million-shades'),'sanitize'=>'million_shades_radio_sanitize_webpagelayout','property'=>'','unit'=>'',
			'transport' => 'postMessage','description'  => '',
			'choices' => array('full-width'     => __('Full-Width', 'million-shades'),
                'boxed'   => __('Box', 'million-shades')
			),'control_type'=>'radio'),
			
			'header_media_position' => array('header_media_position'=>'header_image',
			'selector'=>'','default'=>'bottom','priority'=>'10',
			'label'=>__('Header Media Position','million-shades'),'sanitize'=>'million_shades_sanitize_style_top_bottom','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'top' => __('Top of header', 'million-shades'),
				'bottom' => __('Bottom of header', 'million-shades'),
			
			),'control_type'=>'radio'),
			
			'header_ovl_style' => array('header_ovl_style'=>'header_image',
			'selector'=>'','default'=>'none','priority'=>'73',
			'label'=>__('Overlay Style','million-shades'),'sanitize'=>'million_shades_sanitize_style_five_none','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' =>million_shades_ovl_box_style(),'control_type'=>'select'),
			
			'ovr_heights' => array('ovr_heights'=>'header_image',
			'selector'=>'','default'=>'all','priority'=>'72',
			'label'=>__('Overlay Type','million-shades'),'sanitize'=>'million_shades_sanitize_ovr_heights','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'all' => __('Full', 'million-shades'),
		
				'box' => __('Boxed', 'million-shades'),
				
			
			),'control_type'=>'select'),
			
			'show_featured_pages' => array('show_featured_pages'=>$sections['feature-post']['feature-item']['feature-item'],
			'selector'=>'','default'=>'both','priority'=>'12',
			'label'=>__('Show Featured Item On','million-shades'),'sanitize'=>'million_shades_sanitize_feature_post','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'fpage' => __('Front Page', 'million-shades'),
				'lpage' => __('Blog Page', 'million-shades'),
				'both' => __('Both', 'million-shades'),
			
			),'control_type'=>'select'),
			
			'show_slide_pages' => array('show_slide_pages'=>$sections['feature-post']['feature-slides']['feature-slides'],
			'selector'=>'','default'=>'both','priority'=>'27',
			'label'=>__('Show Slider On','million-shades'),'sanitize'=>'million_shades_sanitize_feature_post','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'fpage' => __('Front Page', 'million-shades'),
				'lpage' => __('Blog Page', 'million-shades'),
				'both' => __('Both', 'million-shades'),
			
			),'control_type'=>'select'),
			
			'slider_type' => array('slider_type'=>$sections['feature-post']['feature-slides']['feature-slides'],
			'selector'=>'','default'=>'slide','priority'=>'28',
			'label'=>__('Slider Type','million-shades'),'sanitize'=>'million_shades_sanitize_slider_type','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'slide' => __('Slide', 'million-shades'),
				'carousel' => __('Carousel', 'million-shades'),
				
			
			),'control_type'=>'select'),
			
			
			
			'blog-element-order' => array('blog-element-order'=>$sections['post']['post-general']['post-general'],
			'selector'=>'','default'=>'img-top','priority'=>'27',
			'label'=>__('Post Thumbnail Order','million-shades'),'sanitize'=>'million_shades_sanitize_post_element_order','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'img-top' => __('Thumbnail Top', 'million-shades'),
				'img-middle' => __('Thumbnail Middle', 'million-shades'),
				'img-down' => __('Thumbnail Down', 'million-shades'),
				
				
         
			),'control_type'=>'select'),
			
			'post_style' => array('post_style'=>$sections['post']['post-general']['post-general'],
			'selector'=>'','default'=>'none','priority'=>'27',
			'label'=>__('Blog Style','million-shades'),'sanitize'=>'million_shades_sanitize_style_one_none','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'style1' => __('White Shadow', 'million-shades'),
				'none' => __('Simple', 'million-shades'),
			
			),'control_type'=>'select'),
			
			'post_column_no' => array('post_column_no'=>$sections['post']['post-general']['post-general'],
			'selector'=>'','default'=>'2','priority'=>'27',
			'label'=>__('Number of Column','million-shades'),'sanitize'=>'million_shades_sanitize_col_no','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'1' => __('One', 'million-shades'),
				'2' => __('Two', 'million-shades'),
				'3' => __('Three', 'million-shades'),
				
         
			),'control_type'=>'select'),

			
			
			
			'thumbnail-sizes' => array('thumbnail-sizes'=>$sections['post']['post-general']['post-general'],
			'selector'=>'','default'=>'medium','priority'=>'27',
			'label'=>__('Thumbnail Size','million-shades'),'sanitize'=>'million_shades_sanitize_thumbnail_sizes','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'thumbnail' => __('Thumbnail', 'million-shades'),
				'medium' => __('Medium', 'million-shades'),
				'medium-extra' => __('Medium Extra', 'million-shades'),
				
				'medium_large' => __('Medium Large', 'million-shades'),
				'large' => __('Large', 'million-shades'),
				'full' => __('Full', 'million-shades')
         
			),'control_type'=>'radio'),
			
			'single-thumbnail-sizes' => array('single-thumbnail-sizes'=>$sections['single']['single-general']['single-general'],
			'selector'=>'','default'=>'medium_large','priority'=>'195',
			'label'=>__('Thumbnail Size','million-shades'),'sanitize'=>'million_shades_sanitize_thumbnail_sizes','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'thumbnail' => __('Thumbnail', 'million-shades'),
				'medium' => __('Medium', 'million-shades'),
				'medium_large' => __('Medium Large', 'million-shades'),
				'large' => __('Large', 'million-shades'),
				'full' => __('Full', 'million-shades')
         
			),'control_type'=>'radio'),
			
			'single-blog-element-order' => array('single-blog-element-order'=>$sections['single']['single-general']['single-general'],
			'selector'=>'','default'=>'img-top','priority'=>'196',
			'label'=>__('Post Thumbnail Order','million-shades'),'sanitize'=>'million_shades_sanitize_post_element_order','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'img-top' => __('Thumbnail Top', 'million-shades'),
				'img-middle' => __('Thumbnail Middle', 'million-shades'),
				'img-down' => __('Thumbnail Down', 'million-shades'),
				
				
         
			),'control_type'=>'select'),
			
			'quote_style' => array('quote_style'=>$sections['single']['single-general']['single-general'],
			'selector'=>'','default'=>'single','priority'=>'196',
			'label'=>__('Blockquote Style','million-shades'),'sanitize'=>'million_shades_sanitize_quote_style','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' => array(
				'single' => __('Single Quote', 'million-shades'),
				'double' => __('Double Quote', 'million-shades'),
				'bar' => __('Left Bar', 'million-shades'),
				
				
         
			),'control_type'=>'select'),
	
			
			
			'site-header-alignment' => array('site-header-alignment' =>$sections['site-header']['site-header']['site-header'],
			'selector'=>'#site-header','default'=>'right','priority'=>'',
			'label'=>__('Site Header Align','million-shades'),'sanitize'=>'million_shades_sanitize_header_options','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' =>  array(
				'right' => __('Menu Right - Site-Branding Left', 'million-shades'),
				'left' => __('Menu Left - Site-Branding Right', 'million-shades'),
				'inline' => __('Both Center', 'million-shades'),
				'both-left' => __('Both left', 'million-shades'),
				'woo1' => __('Woocommerce Header-1', 'million-shades'),
         
			),'control_type'=>'select'),
	
			'site-title-type' => array('site-title-type' =>$sections['site-header']['site-title']['site-title'],
			'selector'=>'#site-header','default'=>'one','priority'=>'',
			'label'=>__('Site Title Type','million-shades'),'sanitize'=>'million_shades_sanitize_three','property'=>'','unit'=>'',
			'transport' => 'postMessage','description'  => '',
			'choices' =>  array(
			
				'one' => __( "Title Text", 'million-shades' ),
				'two'  => __( "Logo(Image)", 'million-shades' ),
				'three'  => __( "None", 'million-shades' )
				
				
         
			),'control_type'=>'radio'),
	
			
			'site-background-pattern' => array('site-background-pattern'=>'background_image',
			'selector'=>'body','default'=>'wood','priority'=>'51',
			'label'=>__('Site Background Pattern','million-shades'),'sanitize'=>'million_shades_sanitize_background_pattern','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' =>  array(
			
				'starnight'     => __('Star Night', 'million-shades'),
                'wood'   => __('Wood', 'million-shades'),
				
				'board'   => __('Board', 'million-shades'),
				'marble'   => __('Marble', 'million-shades'),
				
				'none'   => __('None', 'million-shades')
			
         
			),'control_type'=>'radio'),
			
			'site-background-type' => array('site-background-type'=>'background_image',
			'selector'=>'','default' =>'one','priority'=>'11',
			'label'=>__('Site Background Type','million-shades'),'sanitize'=>'million_shades_sanitize_three','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' =>  array(
			
				'one' => __( "Color", 'million-shades' ),
				'two'  => __( "Image", 'million-shades' ),
				'three'  => __( "Pattern", 'million-shades' )
         
			),'control_type'=>'radio'),
	
	
			'footer-widget-areas' => array('footer-widget-areas'=>$sections['footer']['footer-widget']['footer-widget'],
			'selector'=>'#site-footer .widget','default'=>'4','priority'=>'',
			'label'=>__('Footer Widget Areas','million-shades'),'sanitize'=>'million_shades_sanitize_fwidgets','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' =>  array(
			
				'1'     => __('One', 'million-shades'),
                '2'     => __('Two', 'million-shades'),
                '3'     => __('Three', 'million-shades'),
				'4'     => __('Four', 'million-shades')
         
			),'control_type'=>'radio'),

			'scroll-up-style' => array('scroll-up-style'=>$sections['general']['scroll-up']['scroll-up'],
			'selector'=>'.scroll-up','default'=>'circle','priority'=>'30',
			'label'=>__('Scroll-up Style','million-shades'),'sanitize'=>'million_shades_sanitize_circle_sqaure','property'=>'','unit'=>'',
			'transport' => 'postMessage','description'  => '',
			'choices' =>  array(
			
				'circle'     => __('Circle', 'million-shades'),
                'sqaure'     => __('Sqaure', 'million-shades')
         
			),'control_type'=>'radio'),
			
	
			'scroll-up-icon' => array('scroll-up-icon'=>$sections['general']['scroll-up']['scroll-up'],
			'selector'=>'.scroll-up','default'=>'chevron-up','priority'=>'31',
			'label'=>__('Scroll-up Icon','million-shades'),'sanitize'=>'million_shades_sanitize_scroll_icon','property'=>'','unit'=>'',
			'transport' => 'postMessage','description'  => '',
			'choices' =>  array(
			
				'angle-double-up' => __('Angle Double', 'million-shades'),
                'angle-up'     => __('Angle Up', 'million-shades'),
				'chevron-up'     => __('Chevron Up', 'million-shades')
         
			),'control_type'=>'radio'),
		
			
			'social-item-target' => array('social-item-target'=>$sections['topbar']['topbar-social']['topbar-social'],
			'selector'=>'.topbar','default'=>'_blank','priority'=>'100',
			'label'=>__('Social Item Target','million-shades'),'sanitize'=>'million_shades_sanitize_social_link_target','property'=>'','unit'=>'',
			'transport' => 'postMessage','description'  => '',
			'choices' =>  array(
			
				'_self' => __( "Same Window", 'million-shades' ),
				'_blank'  => __( "New Window", 'million-shades' )
         
			),'control_type'=>'radio'),
	
			
			'contact-number' => array('contact-number'=>$sections['topbar']['topbar-contact']['topbar-contact'],
			'selector'=>'.topbar','default'=>'2','priority'=>'1',
			'label'=>__('Number of Contact Item','million-shades'),'sanitize'=>'million_shades_sanitize_contact_options','property'=>'','unit'=>'',
			'transport' => 'postMessage','description'  => '',
			'choices' =>  array(
			
				'2'    => __( 'Two', 'million-shades' ),
                '3'    => __( 'Three', 'million-shades' ),
                '4'    => __( 'Four', 'million-shades' ),
				'5'    => __( 'Five', 'million-shades' )
         
			),'control_type'=>'select'),
			
			'social-number'  => array('social-number' =>$sections['topbar']['topbar-social']['topbar-social'],
			'selector'=>'.topbar','default'=>'4','priority'=>'',
			'label'=>__('Number of Social Icon','million-shades'),'sanitize'=>'million_shades_sanitize_social_options','property'=>'','unit'=>'',
			'transport' => 'postMessage','description'  => '',
			'choices' =>  array(
			
				'2'    => __( 'Two', 'million-shades' ),
                '3'    => __( 'Three', 'million-shades' ),
                '4'    => __( 'Four', 'million-shades' ),
				'5'    => __( 'Five', 'million-shades' ),
				'6'    => __( 'Six', 'million-shades' ),
                '7'    => __( 'Seven', 'million-shades' ),
                '8'    => __( 'Eight', 'million-shades' ),
         
			),'control_type'=>'select'),
			
			'make-transparent'  => array('make-transparent' =>$sections['site-header']['sticky-header']['sticky-header'],
			'selector'=>'.transparent','default'=>'all','priority'=>'200',
			'label'=>__('Make Transparent','million-shades'),'sanitize'=>'million_shades_sanitize_header_make_transparent','property'=>'','unit'=>'',
			'transport' => 'refresh','description'  => '',
			'choices' =>  array(
			
				'all'           => __( 'All', 'million-shades' ),
				'all-border'   => __( 'All Except Border', 'million-shades' ),
                'header'         => __( 'Header', 'million-shades' ),
                'topbar'    => __( 'Topbar', 'million-shades' ),
				'menu'    => __( 'All Except Main Nav', 'million-shades' ),
				'none'    => __( 'None', 'million-shades' )
         
			),'control_type'=>'radio')
	
			);
	
	return $layouts ;

}


function million_shades_layout_options_param_style($param,$types) {
	
	$style = '';
	$settings = array();
	$controls = array();
	$labels = array();
	$sections = array();
	$defaults = array();
	$priorities = array();
	$transports = array();	
	$contrl_types = array();
	$control_choices = array();	
	$callbacks	 = array();
	
	
	if($types == 'main'){
		
		$settings = million_shades_positions_layouts();
	}
	
	
	
	if ( class_exists('Million_Shades_Pro')) { 
		if($types == 'pro'){
			$settings = million_shades_pro_positions_layouts();
		}
	}
	
	foreach ($settings as $firstlevelkey=>$firstlevelval) {
		
		$secondlevelval = array_values($firstlevelval);
		
		$control = $firstlevelkey;
		$controls[]= $control;
		
		$section = $secondlevelval[0];
		$sections[] = $section;
		
		$selector = $secondlevelval[1];
		$selectors[] = $selector;
		
		$default = $secondlevelval[2];
		$defaults[] = $default;
		
		$priority = $secondlevelval[3];
		$priorities[] = $priority;
		
		$label = $secondlevelval[4];
		$labels[] = $label;
		
		$callback = $secondlevelval[5];
		$callbacks[] = $callback;
		
		$property = $secondlevelval[6];
		$properties[] = $property;
		
		$unit = $secondlevelval[7];
		$units[] = $unit;
		
		$transport = $secondlevelval[8];
		$transports[] = $transport;
		
		$description = $secondlevelval[9];
		$descriptions[] = $description;
		
		$control_choice = $secondlevelval[10];
		$control_choices[] = $control_choice;
		
		$contrl_type = $secondlevelval[11];
		$contrl_types[] = $contrl_type;
		
		
		$singleProperty = $secondlevelval[6];
		$singleProperties[] = $singleProperty;
		
		$mod_val = get_theme_mod($control);
	
	}
	
	if($param =='style'){
	return $style;	
	}
	elseif($param == 'control'){
	return $controls;	
	}
	elseif($param == 'section'){
	return $sections;	
	}
	elseif($param == 'selector'){
	return $selectors;	
	}
	elseif($param == 'default'){
	return $defaults;	
	}
	elseif($param == 'property'){
	return $properties;	
	}
	elseif($param == 'label'){
	return $labels;	
	}
	elseif($param == 'callback'){
	return $callbacks;	
	}
	elseif($param == 'description'){
	return $descriptions;	
	}
	elseif($param == 'priority'){
	return $priorities;	
	}
	elseif($param == 'transport'){
	return $transports;	
	}
	elseif($param == 'choice'){
	return $control_choices;	
	}
	elseif($param == 'type'){
	return $contrl_types;	
	}
	
	
	
}



