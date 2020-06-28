<?php
/**
 * million-shades functions and definitions.
 * 
 * @package Million Shades
 */




require_once( get_template_directory() . '/inc/nl-admin.php' );
require_once( get_template_directory() . '/inc/meta-boxes.php' );

/**
 * Styles
*/

require get_template_directory() . '/inc/customizer/styles.php';


require_once( get_template_directory() . '/framework/framework.php' );

if (!isset($ms_theme)) {
$ms_theme = new Million_Shades_framework();
}




        
define('MILLION_SHADES_THEME_DIR', get_template_directory());





/**
     * Load all files except vc files
*/


/**
 * Custom template tags for this theme.
 */
require MILLION_SHADES_THEME_DIR . '/inc/template-tags.php';



/*  core custom header feature */
require MILLION_SHADES_THEME_DIR . '/inc/custom-header.php';


/**
 * Customizer
*/
require MILLION_SHADES_THEME_DIR . '/inc/customizer/customizer.php';
require MILLION_SHADES_THEME_DIR . '/inc/customizer/sanitize.php';
require MILLION_SHADES_THEME_DIR . '/inc/customizer/controls.php';


require MILLION_SHADES_THEME_DIR . '/inc/topbar-social.php';
require MILLION_SHADES_THEME_DIR . '/inc/topbar-text.php';
require MILLION_SHADES_THEME_DIR . '/inc/page-builder.php';

require MILLION_SHADES_THEME_DIR . '/inc/customizer/core.php';

require MILLION_SHADES_THEME_DIR . '/inc/customizer/customize-control.php';
require MILLION_SHADES_THEME_DIR . '/inc/customizer/settings/local/local.php';

require MILLION_SHADES_THEME_DIR . '/inc/arrays/nl-all-fonts.php';


require MILLION_SHADES_THEME_DIR . '/framework/utility-functions.php';

require MILLION_SHADES_THEME_DIR . '/inc/extra-function.php';


function million_shades_widgets_initialise() {
	
		
		$all_widgets = million_shades_rest_widgets();
		foreach($all_widgets as $panel_widget){
		register_widget( $panel_widget);
		
		}
		
		if (class_exists('MSTK_Custom_Post')){
			
			$custom_post_widgets = million_shades_custom_post_widgets();
			foreach($custom_post_widgets as $custom_post_widget){
				register_widget( $custom_post_widget);
		
			}
		}
		
		if ( function_exists('siteorigin_panels_activate') ) {
		
		$so_widgets = million_shades_so_widgets();
		foreach($so_widgets as $so_widget){
		register_widget( $so_widget);
		
		}
	}


}
add_action( 'widgets_init', 'million_shades_widgets_initialise' );


if ( function_exists('siteorigin_panels_activate') ) {
require MILLION_SHADES_THEME_DIR . '/inc/widgets/custom-heading.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/button.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/feature-item.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/image-overlay.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/icon-box.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/image.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/counter.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/spacing.php';
//require MILLION_SHADES_THEME_DIR . '/inc/widgets/type-writing.php';
}



if (class_exists('MSTK_Custom_Post')){
require MILLION_SHADES_THEME_DIR . '/inc/widgets/client.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/testimonials.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/portfolios.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/staff.php';
//require MILLION_SHADES_THEME_DIR . '/inc/widgets/portfolios-filterable.php';

}


/**
 * widgets.
 */

require MILLION_SHADES_THEME_DIR . '/inc/widgets/social.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/contact-us.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/latest-post-list.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/image-box.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/slides-overlays.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/shortcode.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/ms-author-wrap.php';
require MILLION_SHADES_THEME_DIR . '/inc/widgets/post-grid.php';



require_once dirname( __FILE__ ) . '/framework/plugins/class-tgm-plugin-activation.php';

add_image_size( 'medium-extra', 400, 350 );
