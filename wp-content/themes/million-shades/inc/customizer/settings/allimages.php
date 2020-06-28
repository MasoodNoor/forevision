<?php 

/*
*
* All image related settings and controls
*
*/

$controls = million_shades_get_two_dimension_style('control','image');
$sections = million_shades_get_two_dimension_style('section','image');
$priorities = million_shades_get_two_dimension_style('priority','image');
$transports = million_shades_get_two_dimension_style('transport','image');
$callback = million_shades_get_two_dimension_style('callback','image');
$labels = million_shades_get_two_dimension_style('label','image');

$i=0;
	 
foreach ($controls as $control) {
	 
	
	

		$wp_customize->add_setting(
		$control,
		array(
			'default'			=> '',
			'transport'         => $transports[$i],
			'sanitize_callback' => 'esc_url_raw',
			'active_callback' => $callback[$i]
		)
	);
 
		$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					$control,
					array(
						'label' =>$labels[$i],
						'priority'=>$priorities[$i],
						'section' => $sections[$i],
						
				)
			)
		);
	
$i++;

	}
	
