<?php
/**
 * million-shades Functions
 *
 * 
 * @package million-shades
 * 
 */


function million_shades_html_id($param)
{
    $id = '';

    $unique_id = uniqid();
	
	$id .= $param;
	$id .= '_';
    $id .= $unique_id;
 
    return esc_attr($id);
}

function million_shades_make_class($id)
{
	
    $class = '.';

	
	$class .= $id;
	
 
    return esc_attr($class);
}


function million_shades_carousel_style($id,$slider_selector,$animation,$slideshow_speed,$animation_speed,$pause_on_hover,$control_nav,$direction_nav){
	
	$output = '';
	 $output .= '<script type="text/javascript">' . "\n";
    $output .= 'jQuery(document).ready(function($) {';
    $output .= 'jQuery(\''.esc_attr($id). esc_attr($slider_selector) . '\').flexslider({';
    $output .= 'animation: "' . esc_attr($animation). '",';
    $output .= 'slideshowSpeed: ' . intval($slideshow_speed). ',';
    $output .= 'animationSpeed: ' . intval($animation_speed). ',';
    
    
    $output .= 'pauseOnHover: ' . esc_attr($pause_on_hover). ',';
    $output .= 'controlNav: ' . esc_attr($control_nav) . ',';
    $output .= 'directionNav: ' . esc_attr($direction_nav) . ',';
    
    $output .= '})';
    $output .= '});' . "\n";
    $output .= '</script>' . "\n";
	return $output;
	
	
}


function million_shades_slide_carousel_style($id,$slider_selector,$slideshow_speed,$animation_speed,$pause_on_hover,$control_nav,$direction_nav,$item_width,$item_margin,$min_items,$maximum_item){
	 
	 $output = '';
	 $output .= '<script type="text/javascript">' . "\n";
    $output .= 'jQuery(document).ready(function($) {';
    $output .= 'jQuery(\''.esc_attr($id). esc_attr($slider_selector). '\').flexslider({';
    $output .= 'animation: "slide",';
    $output .= 'slideshowSpeed: ' . intval($slideshow_speed). ',';
    $output .= 'animationSpeed: ' . intval($animation_speed). ',';
    
    
    $output .= 'pauseOnHover: ' . esc_attr($pause_on_hover). ',';
    $output .= 'controlNav: ' . esc_attr($control_nav). ',';
    $output .= 'directionNav: ' . esc_attr($direction_nav). ',';
	
	$output .= 'itemWidth: ' . intval($item_width). ',';
    $output .= 'itemMargin: ' . intval($item_margin) . ',';
    $output .= 'minItems: ' . intval($min_items) . ',';
	$output .= 'maxItems: ' . intval($maximum_item) . ',';
	$output .= 'move: 1,';
	
		
    
    $output .= '})';
    $output .= '});' . "\n";
    $output .= '</script>' . "\n";
	return $output;
	
	
}





/*   Google Fonts Enqueue  */

function million_shades_google_fonts_url() {
	$fonts_url = '';
	
	$subsets   = 'latin,latin-ext';

	$fonts = million_shades_google_fonts_array();

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}


	return esc_url_raw( $fonts_url );
}
  

function million_shades_google_font_enqueue() {
	
wp_enqueue_style( 'million-shades-google-fonts', million_shades_google_fonts_url(), array(), null );

}
add_action( 'wp_enqueue_scripts', 'million_shades_google_font_enqueue' );


function million_shades_wp_page_menu($add_page) {
	preg_match('/^<div class=\"([a-z0-9-_]+)\">/i', $add_page, $adjusts);
	$class   = $adjusts[1];
	$replace    = array('<div class="'.$class.'">', '</div>');
	$new_page = str_replace($replace, '', $add_page);
	$new_page = preg_replace('/^<ul>/i', '<ul class="'.$class.'">', $new_page);
	return $new_page;
}
add_filter('wp_page_menu', 'million_shades_wp_page_menu');