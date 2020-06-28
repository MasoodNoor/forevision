<?php 

/*
*
* All option related settings and controls
*
*/

$controls = million_shades_layout_options_param_style('control','main');
$sections = million_shades_layout_options_param_style('section','main');
$labels = million_shades_layout_options_param_style('label','main');
$priorities = million_shades_layout_options_param_style('priority','main');
$defaults = million_shades_layout_options_param_style('default','main');
$transports = million_shades_layout_options_param_style('transport','main');
$callbacks = million_shades_layout_options_param_style('callback','main');
$control_choices = million_shades_layout_options_param_style('choice','main');
$control_types = million_shades_layout_options_param_style('type','main');

$i=0;
	
foreach ($controls  as $control) {
   
	
	$wp_customize->add_setting(
		$control,
		array(
			'sanitize_callback' =>$callbacks[$i],
			
			'default'         => $defaults[$i],
			'transport'         => $transports[$i],
		)
	);

	$wp_customize->add_control($control,array(
		
			'type' =>$control_types[$i],
			'section' => $sections[$i],
			'priority' => $priorities[$i],
		
			'label' =>$labels[$i],
			'choices'   => $control_choices[$i]
		)
		
		
		
	);
$i++;
}



