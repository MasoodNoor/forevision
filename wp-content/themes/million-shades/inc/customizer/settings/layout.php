<?php

/*
*
* All alignment related settings and controls
*
*/


	$controls = million_shades_get_two_dimension_style('control','three');
	$sections = million_shades_get_two_dimension_style('section','three');
	$labels = million_shades_get_two_dimension_style('label','three');
	$priorities = million_shades_get_two_dimension_style('priority','three');
	$defaults = million_shades_get_two_dimension_style('default','three');


	$i=0;
   	
	foreach ($controls as $control) {

		

		$wp_customize->add_setting(
        $control,
        array(
            'default'           => $defaults[$i],
			
            'sanitize_callback' => 'million_shades_sanitize_page_header_position',
            'transport'         => 'postMessage'
        )
    );
	
   
   $wp_customize->add_control(
		$control,
        array(
            'type'      => 'radio',
           
			'label' =>$labels[$i],
			'priority' => $priorities[$i],
            'section'   => $sections[$i],
            	'choices'  => array(
				'left' => __("Left", 'million-shades' ),
				'center'  => __("Center", 'million-shades' ),
				'right'=> __( "Right", 'million-shades' )
				
				
			),
        )
    );	
	$i++;
}

// CONTENT ALIGNMENT

	$controls = million_shades_get_two_dimension_style('control','four');
	$sections = million_shades_get_two_dimension_style('section','four');
	$labels = million_shades_get_two_dimension_style('label','four');
	$priorities = million_shades_get_two_dimension_style('priority','four');
	$defaults = million_shades_get_two_dimension_style('default','four');
	
	$i=0;
   	
	foreach ($controls as $control) {
		
	
		
		$wp_customize->add_setting(
        $control,
        array(
            'default'           => $defaults[$i],
			
            'sanitize_callback' => 'million_shades_sanitize_four_options',
            'transport'         => 'postMessage'
        )
    );
	
   
   $wp_customize->add_control(
		$control,
        array(
            'type'      => 'radio',
       
			'label' =>$labels[$i],
			'priority' => $priorities[$i],
            'section'   => $sections[$i],
            	'choices'  => array(
				'left' => __("Left", 'million-shades' ),
				'center'  => __("Center", 'million-shades' ),
				'right'=> __( "Right", 'million-shades' ),
				'justify'=> __( "Justify", 'million-shades' )
				
				
			),
        )
    );	
	$i++;
}



// SIDEBAR ALIGNMENT

	$sections = million_shades_sidebar_layout();
		
	
   	foreach ($sections as $section=>$label) {
		
		
		
		$wp_customize->add_setting(
        $section.'-option',
        array(
            'default'           => 'rightbar',
            'sanitize_callback' => 'million_shades_sanitize_page_layout',
            'transport'         => 'postMessage'
        )
    );
	
   
   $wp_customize->add_control(
        $section.'-option',
        array(
            'type'      => 'radio',
            'priority' => 340,
			'label' =>$label,
            'section'   => 'sidebar-widget',
            	'choices'  => array(
				'rightbar' => __( "Rightbar", 'million-shades' ),
				'leftbar'  => __( "Leftbar", 'million-shades' ),
				'nosidebar'=> __( "No Sidebar", 'million-shades' )
				
			),
        )
    );	
	
}


$wp_customize->add_setting(
       'header-media-type',
        array(
            'default'           => 'image',
            'sanitize_callback' => 'million_shades_sanitize_header_media_layout',
            'transport'         => 'refresh'
        )
    );
	
   
   $wp_customize->add_control(
        'header-media-type',
        array(
            'type'      => 'radio',
            'label'     => __('Header Media Type' , 'million-shades'),
			'priority'   => '9',
            'section'   => 'header_image',
            	'choices'  => array(
				'none' => __( "None", 'million-shades' ),
				'image'  => __( "Image", 'million-shades' ),
				'video'=> __( "Video", 'million-shades' ),
				'slide'=> __( "Slide", 'million-shades' )
				
			),
        )
);	


	//slide
	
	$controls = million_shades_get_two_dimension_style('control','page');
	$sections = million_shades_get_two_dimension_style('section','page');
	$labels = million_shades_get_two_dimension_style('label','page');
	$priorities = million_shades_get_two_dimension_style('priority','page');
	$defaults = million_shades_get_two_dimension_style('default','page');


	$i=0;
   	
	foreach ($controls as $control) {
	

	$wp_customize->add_setting(
		$control,
		array(
			'default' => '',
			'sanitize_callback' => 'absint',
			'transport'         => 'refresh'
		)
	);

	$wp_customize->add_control($control,array(
		
			'type' => 'dropdown-pages',
			'section' => 'header_image',
			'priority' => 440,
			'label'	=>$labels[$i],
		)

	);	

	$i++;
}