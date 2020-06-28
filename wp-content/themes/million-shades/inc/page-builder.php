<?php
/**
 * SiteOrigin Page builder support
 *
 * 
 * @package million-shades
 */

/* Theme widgets */
add_theme_support( 'siteorigin-panels', array( 
	'margin-bottom' 		=> 0,
	'recommended-widgets' 	=> false,
	'tablet-layout'			=> true
) );


function million_shades_theme_widgets($custom_widgets) {
	$nl_widgets = million_shades_all_widgets();
	foreach($nl_widgets as $nl_widget) {
		if( isset( $custom_widgets[$nl_widget] ) ) {
			$custom_widgets[$nl_widget]['groups'] = array('million-shades');
	
		}
	}
	return $custom_widgets;
}
add_filter('siteorigin_panels_widgets', 'million_shades_theme_widgets');





if (class_exists('Million_Shades_Pro')){
function million_shades_pro_theme_widgets($custom_widgets) {
	$nl_widgets = million_shades_pro_so_widgets();
	foreach($nl_widgets as $nl_widget) {
		if( isset( $custom_widgets[$nl_widget] ) ) {
			$custom_widgets[$nl_widget]['groups'] = array('million-shades');
	
		}
	}
	return $custom_widgets;
}

add_filter('siteorigin_panels_widgets', 'million_shades_pro_theme_widgets');
}
/* Add a tab for the theme widgets in the page builder */
function million_shades_theme_widgets_tab($tabs){
	$tabs[] = array(
		'title' => __('Million Shades Theme Widgets', 'million-shades'),
		'filter' => array(
			'groups' => array('million-shades')
		)
	);
	return $tabs;
}
add_filter('siteorigin_panels_widget_dialog_tabs', 'million_shades_theme_widgets_tab', 20);

 
function million_shades_custom_widget_style_fields($fields) {
	
	$accent = million_shades_get_accent_color_mod();

	$fields['title_text_transform'] = array(
	    'name'        => __('Widget Title Text Transform', 'million-shades'),
	    'type'        => 'select',
	    'default'	  => 'left',
		'priority'    => 13,
	    'group'       => 'design',
	    'options' => array(
			'none' => __('None', 'million-shades'),
			'capitalize' => __('Capitalize', 'million-shades'),
			'uppercase' => __('Upper Case', 'million-shades'),
			'lowercase' => __('Lower Case', 'million-shades'),
			
		)
	);
	

	
	
	
  return $fields;
}
add_filter( 'siteorigin_panels_widget_style_fields', 'million_shades_custom_widget_style_fields');

/**
 * Output page builder widget options
 */
 
function million_shades_custom_widget_style_attributes( $attributes, $args ) {

	
	
	if ( !empty($args['title_text_transform']) ) {
    	$attributes['data-title-text-transform'] = esc_attr($args['title_text_transform']);		
	}
	
	
	
	
		
    return $attributes;
}
add_filter('siteorigin_panels_widget_style_attributes', 'million_shades_custom_widget_style_attributes', 10, 2);

/**
 * Remove defaults
 */

function million_shades_remove_default_so_row_styles( $fields ) {
	
	unset( $fields['font_color'] );	
	
	unset( $fields['border_color'] );	
	return $fields;
}
add_filter('siteorigin_panels_widget_style_fields', 'million_shades_remove_default_so_row_styles' );


add_filter('siteorigin_premium_upgrade_teaser', '__return_false');