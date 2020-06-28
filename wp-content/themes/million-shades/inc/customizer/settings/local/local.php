<?php

/*
* localization of variables for js
*/

function million_shades_customize_control_js() {


	global $pagenow;
 
    if ($pagenow != 'customize.php') {
        return;
    }
	    
   wp_enqueue_script( 'million_shades_customize_control', get_template_directory_uri() . '/admin/customize-control.js', array( 'customize-controls', 'jquery' ), null, true );
	
	
	$site_title = million_shades_site_title_topbar_control();
	
	
	$million_shades_title_only = $site_title['title-only'];
	
	if (class_exists('Million_Shades_Pro')){
		$site_title_pro = million_shades_pro_site_title_control();
		$million_shades_title_pro_only = $site_title_pro['title-only'];
		$million_shades_title_only = array_merge($million_shades_title_only,$million_shades_title_pro_only);
	}
	wp_localize_script( 'million_shades_customize_control', 'million_shades_title_only', $million_shades_title_only );	
	
	$million_shades_logo_only = $site_title['logoOnly'];
	wp_localize_script( 'million_shades_customize_control', 'million_shades_logoOnly', $million_shades_logo_only );
	
	$media_controls = million_shades_header_media_control();
	
	$million_shades_media_control_all = $media_controls['control-all'];
	$million_shades_media_image_only = $media_controls['image-only'];
	$million_shades_media_video_only = $media_controls['video-only'];
	$million_shades_media_slide_only = $media_controls['slide-only'];
	
	if(class_exists('Million_Shades_Pro')){
	
	$media_controls_pro = million_shades_pro_header_media_control();
	
	
	$million_shades_media_control_all_pro = $media_controls_pro['control-all'];
	$million_shades_media_image_only_pro = $media_controls_pro['image-only'];
	
	$million_shades_media_slide_only_pro = $media_controls_pro['slide-only'];
	
	
	$million_shades_media_control_all = array_merge($million_shades_media_control_all, $million_shades_media_control_all_pro);
	
	$million_shades_media_image_only = array_merge($million_shades_media_image_only, $million_shades_media_image_only_pro);
	$million_shades_media_slide_only = array_merge($million_shades_media_slide_only, $million_shades_media_slide_only_pro);
	
	}
	
	wp_localize_script( 'million_shades_customize_control', 'million_shades_media_control_all', $million_shades_media_control_all );
	wp_localize_script( 'million_shades_customize_control', 'million_shades_media_image_only', $million_shades_media_image_only );
	wp_localize_script( 'million_shades_customize_control', 'million_shades_media_video_only', $million_shades_media_video_only );
	wp_localize_script( 'million_shades_customize_control', 'million_shades_media_slide_only', $million_shades_media_slide_only );
		
	wp_enqueue_script( 'million_shades_customize_control' );
	
}
	
add_action( 'customize_controls_enqueue_scripts', 'million_shades_customize_control_js' );
add_action( 'admin_enqueue_scripts', 'million_shades_customize_control_js' );


 if ( ! function_exists( 'million_shades_customizer_live' ) ):
function million_shades_customizer_live() {

		wp_enqueue_script(
			'million_shades_some_handle',
			get_template_directory_uri() . '/js/customizer.js', // URL
			array( 'jquery', 'customize-preview' ), null, true
		);

}
	
endif;
add_action( 'customize_preview_init', 'million_shades_customizer_live' );

function million_shades_php_js(){




$million_shades_controls = million_shades_get_color_js('control');
$million_shades_selectors = million_shades_get_color_js('selector');

$million_shades_bg_controls = million_shades_get_color_js('bg-control');
$million_shades_bg_selectors = million_shades_get_color_js('bg-selector');

$million_shades_hover_controls = million_shades_get_color_js('hover-control');
$million_shades_hover_selectors = million_shades_get_color_js('hover-selector');

$million_shades_hover_bg_controls = million_shades_get_color_js('hover-bg-control');
$million_shades_hover_bg_selectors = million_shades_get_color_js('hover-bg-selector');

$million_shades_src = get_template_directory_uri().'/assets/images/';


wp_localize_script('million_shades_some_handle', 'million_shades_src', $million_shades_src);


			
$million_shades_imgControls = million_shades_get_two_dimension_style('control','image');
$million_shades_imgSelectors = million_shades_get_two_dimension_style('selector','image');
  

wp_localize_script( 'million_shades_some_handle', 'million_shades_imgControls', $million_shades_imgControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_imgSelectors', $million_shades_imgSelectors );

wp_localize_script( 'million_shades_some_handle', 'million_shades_colorParams', $million_shades_controls );	
wp_localize_script( 'million_shades_some_handle', 'million_shades_selectorParams', $million_shades_selectors );
wp_localize_script( 'million_shades_some_handle', 'million_shades_bgcolorParams', $million_shades_bg_controls );	
wp_localize_script( 'million_shades_some_handle', 'million_shades_bgselectorParams', $million_shades_bg_selectors );	

wp_localize_script( 'million_shades_some_handle', 'million_shades_hoverControls', $million_shades_hover_controls  );
wp_localize_script( 'million_shades_some_handle', 'million_shades_hoverSelectors', $million_shades_hover_selectors  );

wp_localize_script( 'million_shades_some_handle', 'million_shades_hoverbgControls', $million_shades_hover_bg_controls  );
wp_localize_script( 'million_shades_some_handle', 'million_shades_hoverbgSelectors', $million_shades_hover_bg_selectors  );

/* ================== */
$million_shades_font_pro = '';
if ( class_exists('Million_Shades_Pro')) { 

$million_shades_font_pro = 'million_Pro';

$million_shades_font_controls = million_shades_pro_get_fonts_style('family','control');
$million_shades_font_selectors = million_shades_pro_get_fonts_style('family','selector');

$million_shades_f_sizes = million_shades_pro_get_fonts_style('size','control');
$million_shades_fsize_selectors = million_shades_pro_get_fonts_style('size','selector');

$million_shades_font_heights = million_shades_pro_get_fonts_style('height','control');
$million_shades_fheight_selectors = million_shades_pro_get_fonts_style('height','selector');

$million_shades_font_weights = million_shades_pro_get_fonts_style('weight','control');
$million_shades_fweight_selectors = million_shades_pro_get_fonts_style('weight','selector');

$million_shades_font_styles = million_shades_pro_get_fonts_style('style','control');
$million_shades_fstyle_selectors = million_shades_pro_get_fonts_style('style','selector');
			
$million_shades_font_transforms = million_shades_pro_get_fonts_style('transform','control');
$million_shades_ftransform_selectors = million_shades_pro_get_fonts_style('transform','selector');

$million_shades_font_spacings = million_shades_pro_get_fonts_style('spacing','control');
$million_shades_fspacing_selectors = million_shades_pro_get_fonts_style('spacing','selector');


wp_localize_script( 'million_shades_some_handle', 'million_shades_font_pro', $million_shades_font_pro );
wp_localize_script( 'million_shades_some_handle', 'million_shades_fontParams', $million_shades_font_controls );	
wp_localize_script( 'million_shades_some_handle', 'million_shades_fontselectorParams', $million_shades_font_selectors);

wp_localize_script( 'million_shades_some_handle', 'million_shades_fontSizesParams', $million_shades_f_sizes );	
wp_localize_script( 'million_shades_some_handle', 'million_shades_fontSizesSelectors', $million_shades_fsize_selectors);

wp_localize_script( 'million_shades_some_handle', 'million_shades_fontHeightParams', $million_shades_font_heights );	
wp_localize_script( 'million_shades_some_handle', 'million_shades_fontHeightSelectors', $million_shades_fheight_selectors);

wp_localize_script( 'million_shades_some_handle', 'million_shades_fontWeightParams', $million_shades_font_weights );	
wp_localize_script( 'million_shades_some_handle', 'million_shades_fontWeightSelectors', $million_shades_fweight_selectors);

wp_localize_script( 'million_shades_some_handle', 'million_shades_fontStyleParams', $million_shades_font_styles );	
wp_localize_script( 'million_shades_some_handle', 'million_shades_fontStyleSelectors', $million_shades_fstyle_selectors);

wp_localize_script( 'million_shades_some_handle', 'million_shades_fontTransformParams', $million_shades_font_transforms );	
wp_localize_script( 'million_shades_some_handle', 'million_shades_fontTransformSelectors', $million_shades_ftransform_selectors);

wp_localize_script( 'million_shades_some_handle', 'million_shades_fontSpacingParams', $million_shades_font_spacings );	
wp_localize_script( 'million_shades_some_handle', 'million_shades_fontSpacingSelectors', $million_shades_fspacing_selectors);
}
/* ================== */


$million_shades_boderBttmColorControls = million_shades_get_border_width_style_radius('control','bottom-border-color');
$million_shades_boderBttmWidthControls = million_shades_get_border_width_style_radius('control','bottom-border-width');
$million_shades_boderBttmStyleControls = million_shades_get_border_width_style_radius('control','bottom-border-style');

$million_shades_boderBttmColorSelectors = million_shades_get_border_width_style_radius('selector','bottom-border-color');
$million_shades_boderBttmWidthSelectors = million_shades_get_border_width_style_radius('selector','bottom-border-width');
$million_shades_boderBttmStyleSelectors = million_shades_get_border_width_style_radius('selector','bottom-border-style');

wp_localize_script( 'million_shades_some_handle', 'million_shades_boderBttmColorControls', $million_shades_boderBttmColorControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_boderBttmWidthControls', $million_shades_boderBttmWidthControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_boderBttmStyleControls', $million_shades_boderBttmStyleControls );

wp_localize_script( 'million_shades_some_handle', 'million_shades_boderBttmColorSelectors', $million_shades_boderBttmColorSelectors );
wp_localize_script( 'million_shades_some_handle', 'million_shades_boderBttmWidthSelectors', $million_shades_boderBttmWidthSelectors );
wp_localize_script( 'million_shades_some_handle', 'million_shades_boderBttmStyleSelectors', $million_shades_boderBttmStyleSelectors );

/* ================== */
$million_shades_bodertopColorControls = million_shades_get_border_width_style_radius('control','top-border-color');
$million_shades_bodertopWidthControls = million_shades_get_border_width_style_radius('control','top-border-width');
$million_shades_bodertopStyleControls = million_shades_get_border_width_style_radius('control','top-border-style');

$million_shades_bodertopColorSelectors = million_shades_get_border_width_style_radius('selector','top-border-color');
$million_shades_bodertopWidthSelectors = million_shades_get_border_width_style_radius('selector','top-border-width');
$million_shades_bodertopStyleSelectors = million_shades_get_border_width_style_radius('selector','top-border-style');

wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertopColorControls', $million_shades_bodertopColorControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertopWidthControls', $million_shades_bodertopWidthControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertopStyleControls', $million_shades_bodertopStyleControls );

wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertopColorSelectors', $million_shades_bodertopColorSelectors );
wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertopWidthSelectors', $million_shades_bodertopWidthSelectors );
wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertopStyleSelectors', $million_shades_bodertopStyleSelectors );

/* ================== */

/* ================== */
$million_shades_bodertwoColorControls = million_shades_get_border_width_style_radius('control','two-border-color');
$million_shades_bodertwoWidthControls = million_shades_get_border_width_style_radius('control','two-border-width');
$million_shades_bodertwoSyleControls = million_shades_get_border_width_style_radius('control','two-border-style');

$million_shades_bodertwoColorSelectors = million_shades_get_border_width_style_radius('selector','two-border-color');
$million_shades_bodertwoWidthSelectors = million_shades_get_border_width_style_radius('selector','two-border-width');
$million_shades_bodertwoStyleSelectors = million_shades_get_border_width_style_radius('selector','two-border-style');

wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertwoColorControls', $million_shades_bodertwoColorControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertwoWidthControls', $million_shades_bodertwoWidthControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertwoSyleControls', $million_shades_bodertwoSyleControls );

wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertwoColorSelectors', $million_shades_bodertwoColorSelectors );
wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertwoWidthSelectors', $million_shades_bodertwoWidthSelectors );
wp_localize_script( 'million_shades_some_handle', 'million_shades_bodertwoStyleSelectors', $million_shades_bodertwoStyleSelectors );

/* ================== */

$million_shades_borderbase = million_shades_get_border_width_style_radius('section','border');
$million_shades_borderSelectors = million_shades_get_border_width_style_radius('selector','border');

wp_localize_script( 'million_shades_some_handle', 'million_shades_borderBase', $million_shades_borderbase );
wp_localize_script( 'million_shades_some_handle', 'million_shades_borderSelectors', $million_shades_borderSelectors );



$million_shades_alignControls = million_shades_get_two_dimension_style('control','three');
$million_shades_alignSelectors = million_shades_get_two_dimension_style('selector','three');
wp_localize_script( 'million_shades_some_handle', 'million_shades_alignControls ', $million_shades_alignControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_alignSelectors', $million_shades_alignSelectors );

$million_shades_justifyControls = million_shades_get_two_dimension_style('control','four');
$million_shades_justifySelectors = million_shades_get_two_dimension_style('selector','four');
wp_localize_script( 'million_shades_some_handle', 'million_shades_justifyControls', $million_shades_justifyControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_justifySelectors', $million_shades_justifySelectors );

$million_shades_fontSizeControls = million_shades_get_two_dimension_style('control','font-size');
$million_shades_fontSizeSelectors = million_shades_get_two_dimension_style('selector','font-size');
wp_localize_script( 'million_shades_some_handle', 'million_shades_fontSizeControls', $million_shades_fontSizeControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_fontSizeSelectors', $million_shades_fontSizeSelectors );

$million_shades_checkControls = million_shades_get_two_dimension_style('control','check');
$million_shades_checkSelectors = million_shades_get_two_dimension_style('selector','check');
wp_localize_script( 'million_shades_some_handle', 'million_shades_checkControls', $million_shades_checkControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_checkSelectors', $million_shades_checkSelectors );

$million_shades_hideControls = million_shades_get_two_dimension_style('control','hide');
$million_shades_hideSelectors = million_shades_get_two_dimension_style('selector','hide');
wp_localize_script( 'million_shades_some_handle', 'million_shades_hideControls', $million_shades_hideControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_hideSelectors', $million_shades_hideSelectors );

$million_shades_singleControls = million_shades_get_two_dimension_style('control','single');
$million_shades_singleSelectors = million_shades_get_two_dimension_style('selector','single');
$million_shades_singleProperty = million_shades_get_two_dimension_style('property','single');
wp_localize_script( 'million_shades_some_handle', 'million_shades_singleControls', $million_shades_singleControls );
wp_localize_script( 'million_shades_some_handle', 'million_shades_singleSelectors', $million_shades_singleSelectors );
wp_localize_script( 'million_shades_some_handle', 'million_shades_singleProperty', $million_shades_singleProperty );


$million_shades_readMore = million_shades_get_two_dimension_style('control','read-more');	
$million_shades_readMoreSelectors = million_shades_get_two_dimension_style('selector','read-more');	
wp_localize_script( 'million_shades_some_handle', 'million_shades_readMoreControls', $million_shades_readMore );
wp_localize_script( 'million_shades_some_handle', 'million_shades_readMoreSelectors', $million_shades_readMoreSelectors );

$million_shades_accent = million_shades_accent_color_selectors();
$million_shades_accentbg = million_shades_accent_bgcolor_selectors();
$million_shades_accentborder = million_shades_accent_border_selectors();
$million_shades_accentTopborder = million_shades_accent_border_top_selectors();
$million_shades_buttonSelectors = million_shades_button_selectors();

wp_localize_script( 'million_shades_some_handle', 'million_shades_accent', $million_shades_accent );
wp_localize_script( 'million_shades_some_handle', 'million_shades_accentbg', $million_shades_accentbg );
wp_localize_script( 'million_shades_some_handle', 'million_shades_accentborder', $million_shades_accentborder );
wp_localize_script( 'million_shades_some_handle', 'million_shades_accentTopborder', $million_shades_accentTopborder );
wp_localize_script( 'million_shades_some_handle', 'million_shades_buttonSelectors', $million_shades_buttonSelectors );

$million_shades_formSelectors = million_shades_form_input_selector();
wp_localize_script( 'million_shades_some_handle', 'million_shades_formSelectors', $million_shades_formSelectors );

}
add_action( 'wp_enqueue_scripts', 'million_shades_php_js' );


function million_shades_main_js(){

wp_register_script( 'million_shades_few_handle', get_template_directory_uri() . '/js/main.js' );



$million_shades_sticky = get_theme_mod('enable-sticky-header','1');
$million_shades_full_head = get_theme_mod('enable-full-page-header-media','0');
if($million_shades_sticky != 1){
	$million_shades_sticky = '2';
}

wp_localize_script( 'million_shades_few_handle', 'million_shades_sticky', $million_shades_sticky );



$million_shades_headerAlign = get_theme_mod('site-header-alignment');

wp_localize_script( 'million_shades_few_handle', 'million_shades_headerAlign', $million_shades_headerAlign );

// Enqueued script with localized data.
wp_enqueue_script( 'million_shades_few_handle' );

}
add_action( 'wp_enqueue_scripts', 'million_shades_main_js' );


