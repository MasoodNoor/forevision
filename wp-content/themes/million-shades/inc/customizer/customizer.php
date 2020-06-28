<?php

function million_shades_customize_register( $wp_customize ) {
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	

	require get_template_directory() . '/inc/customizer/panels.php';
	
	require get_template_directory() . '/inc/customizer/settings/font.php';
	require get_template_directory() . '/inc/customizer/settings/colors.php';
	require get_template_directory() . '/inc/customizer/settings/allimages.php';
	require get_template_directory() . '/inc/customizer/settings/allheadings.php';
	require get_template_directory() . '/inc/customizer/settings/checkbox.php';
	require get_template_directory() . '/inc/customizer/settings/layout.php';
	require get_template_directory() . '/inc/customizer/settings/positions.php';
	require get_template_directory() . '/inc/customizer/settings/padding.php';
	require get_template_directory() . '/inc/customizer/settings/height-width.php';
	
	require get_template_directory() . '/inc/customizer/settings/design-size.php';
	require get_template_directory() . '/inc/customizer/settings/input.php';
	require get_template_directory() . '/inc/customizer/settings/local/extra/extras.php';
	
	
	
	$wp_customize->selective_refresh->add_partial( 'site-title-color-heading', array(
    'selector' => '.site-title a',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial( 'site-header-color-heading', array(
    'selector' => '.header-margin',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial( 'logo-heading', array(
    'selector' => '.site-logo',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'site-description-color-heading', array(
    'selector' => '.site-description',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('social-input-heading', array(
    'selector' => '.topbar-social',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('contact-input-heading', array(
    'selector' => '.topbar-text',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('topbar-color-heading', array(
    'selector' => '.topbar',
	
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	
	$wp_customize->selective_refresh->add_partial('page-title-color-heading', array(
    'selector' => 'h1.page-title',
    'render_callback' => 'nl_customize_partial_dummy',
	) );

	
	
	
	$wp_customize->selective_refresh->add_partial('topbar-color-heading', array(
    'selector' => '.inner-topbar',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('page-header-color-heading', array(
    'selector' => '.page-content-header',
    'render_callback' => 'nl_customize_partial_dummy',
	) );

	
	$wp_customize->selective_refresh->add_partial('header-media-overlay-heading', array(
    'selector' => '.header-media-container',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('header-media-overlay-heading', array(
    'selector' => '.nl-media-ovr-title,.nl-slide-ovr-title',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	

	
	$wp_customize->selective_refresh->add_partial('feature-slide-detail-heading', array(
    'selector' => '.nl-slide-feature-title',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	

	$wp_customize->selective_refresh->add_partial('single-post-title-color-heading', array(
    'selector' => 'h1.single-title',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('single-post-meta-border-heading', array(
    'selector' => '.single-meta',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	$wp_customize->selective_refresh->add_partial('single-general-color-heading', array(
    'selector' => '.nav-next,.nav-previous',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('first-featured-item-heading', array(
    'selector' => '.ms-feature-grid,.featured-area',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	
	
	$wp_customize->selective_refresh->add_partial('form-fonts-heading', array(
    'selector' => 'form',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('buttons-color-heading', array(
    'selector' => 'input[type="button"], input[type="reset"], input[type="submit"]',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	
	$wp_customize->selective_refresh->add_partial('main-menu-top-level-color-heading', array(
    'selector' => '.main-menu',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	
	
	$wp_customize->selective_refresh->add_partial('sidebar-widget-title-color-heading', array(
    'selector' => '.sidebar h3.widget-title',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('sidebar-widget-color-heading', array(
    'selector' => '.sidebar .widget ul',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	

	
	$wp_customize->selective_refresh->add_partial('footer-widget-color-heading', array(
    'selector' => '.footer-widgets',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('site-footer-color-heading', array(
    'selector' => '#site-footer',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('site-header-color-heading', array(
    'selector' => '.site-header',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('post-title-fonts-heading', array(
    'selector' => '.entry-title',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	

	$wp_customize->selective_refresh->add_partial('post-meta-border-heading', array(
    'selector' => '.entry-meta',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	
	
	
	$wp_customize->selective_refresh->add_partial('single-show/hide-elements-heading', array(
    'selector' => '.single-header .post-categories,.post-author-box,.related-single',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	
	
	$wp_customize->selective_refresh->add_partial('show/hide-elements-heading', array(
    'selector' => '.entry-header .post-categories',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('scroll-up-settings-heading', array(
    'selector' => '#scroll-up',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('footer-info-padding-heading', array(
    'selector' => '.site-credit',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('main-menu-sub-level-color-heading', array(
    'selector' => '.main-menu .sub-menu',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	$wp_customize->selective_refresh->add_partial('buttons-color-heading', array(
    'selector' => 'input[type="submit"]',
    'render_callback' => 'nl_customize_partial_dummy',
	) );
	
	
	
	

	
}
add_action( 'customize_register', 'million_shades_customize_register' );




