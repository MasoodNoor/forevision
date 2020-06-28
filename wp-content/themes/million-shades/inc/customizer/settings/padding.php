<?php

/*
*
* All padding and margin related settings and controls
*
*/

	$controls = million_shades_get_two_dimension_style('control','single');

	$sections = million_shades_get_two_dimension_style('section','single');

	$defaults = million_shades_get_two_dimension_style('default','single');

	$labels = million_shades_get_two_dimension_style('label','single');

	$priorities = million_shades_get_two_dimension_style('priority','single');
	
	$transports = million_shades_get_two_dimension_style('transport','single');

	
	$i=0;
	foreach ($controls  as $control) {
	
	
	
	$wp_customize->add_setting(
		$control,
		array(
			'default'           => $defaults[$i],
			'sanitize_callback' => 'absint',
			'transport'         => $transports[$i]
		)
	);

	$wp_customize->add_control($control,array(
		
			'type' => 'text',
			'section'		=> $sections[$i],
			'priority' => $priorities[$i],
			
			'label' =>$labels[$i],
		)
		
		
		
	);
$i++;
}
