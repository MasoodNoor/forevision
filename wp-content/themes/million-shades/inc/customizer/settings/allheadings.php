<?php


/*
*
* All heading related settings and controls
*
*/



	$i=0;

	$controls = million_shades_get_heading_styles('control','free');
	$sections = million_shades_get_heading_styles('section','free');
	$priorities = million_shades_get_heading_styles('priority','free');
	
	$titles = million_shades_get_heading_styles('title','free');
	
	foreach ($controls as $control) {
	
	
	$wp_customize->add_setting(
		$control,
		array(
			'sanitize_callback' => 'million_shades_sanitize_text2'
		)
	);

	$wp_customize->add_control( new Million_Shades_Headings_Control(
		$wp_customize,
		$control,
		array(
			
			'section' => $sections[$i],
			'priority' => $priorities[$i],
			
			'label' =>$titles[$i],
		)
		
		)
		
	);
$i++;
}



