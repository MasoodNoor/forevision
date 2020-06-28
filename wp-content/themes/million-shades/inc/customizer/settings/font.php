<?php
	
/*
*
* All font related settings and controls
*
*/


	
$body_font = million_shades_get_body_font_family_mod();
//Primary Fonts
$wp_customize->add_setting(
        'site-primary-font-family',
        array(
            'default' => $body_font,
            'sanitize_callback' => 'million_shades_sanitize_text2',
			'transport'         => 'postMessage'
        )
);
	

    $wp_customize->add_control(new Million_Shades_Custom_Font_Control(
		$wp_customize,
        'site-primary-font-family',
        array(
            'label' => __( 'Site Body Font Family', 'million-shades' ),
            'section' => 'general',
            
            'priority' => 110,
			'type' => 'nl-font-family',
			
            )
		)
    );
	
	
	
	$wp_customize->add_setting(
        'shades_category_control',
        array(
            'default' => '',
            'sanitize_callback' => 'million_shades_sanitize_text2',
			'transport'         => 'refresh'
        )
	);
	

    $wp_customize->add_control(new Category_Dropdown_Custom_Control(
		$wp_customize,
        'shades_category_control',
        array(
            'label' => __( 'Select a Category for Slider', 'million-shades' ),
            'section' => 'feature-slides',
            
            'priority' => 110,
			'type' => 'select',
			
            )
		)
    );
	
	
	

