<?php

/*
*
* All height width related settings and controls
*
*/

$controls = million_shades_get_two_dimension_style('control','width-height');
$sections = million_shades_get_two_dimension_style('section','width-height');
$priorities = million_shades_get_two_dimension_style('priority','width-height');
$defaults = million_shades_get_two_dimension_style('default','width-height');
$transports = million_shades_get_two_dimension_style('transport','width-height');
$labels = million_shades_get_two_dimension_style('label','width-height');

$i=0;
	
foreach ($controls as $control) {


	
	
	$wp_customize->add_setting(
        $control,
        array(
            'default' => $defaults[$i],
            'sanitize_callback' => 'absint',
			'transport'         => $transports[$i]
        )
	);
	
	$wp_customize->add_control(
        $control,
        array(
          
			'label' =>$labels[$i],
            'section' => $sections[$i],
            'type' => 'text',
            'priority' =>$priorities[$i],

			
        )
);

$i++;
}


$screen_controls = million_shades_get_two_dimension_style('control','screen');
$screen_sections = million_shades_get_two_dimension_style('section','screen');
$screen_defaults = million_shades_get_two_dimension_style('default','screen');
$priorities = million_shades_get_two_dimension_style('priority','screen');
$transports = million_shades_get_two_dimension_style('transport','screen');
$labels = million_shades_get_two_dimension_style('label','screen');


$i=0;
	
foreach ($screen_controls as $control) {


	
	$wp_customize->add_setting(
        $control,
        array(
            'default' => $screen_defaults[$i],
            'sanitize_callback' => 'absint',
			'transport'         => $transports[$i]
        )
	);
	
	$wp_customize->add_control(
        $control,
        array(
            
			'label' =>$labels[$i],
            'section' => $screen_sections[$i],
            'type' => 'text',
			//'description' => __( 'Please follow our documentation.', 'million-shades' ) .' <a href="http://themenextlevel.com/docs/site-width/" target="_blank">'. __( 'Visit', 'million-shades' ) .'</a>',
				
            'priority' =>$priorities[$i],

			
        )
);

$i++;
}



