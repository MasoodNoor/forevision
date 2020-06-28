<?php
 
/*
*
* All checkbox related settings and controls
*
*/
  $controls = million_shades_get_two_dimension_style('control','hide');
  $sections = million_shades_get_two_dimension_style('section','hide');
  $priorities = million_shades_get_two_dimension_style('priority','hide');
  $defaults = million_shades_get_two_dimension_style('default','hide');
  $transports = million_shades_get_two_dimension_style('transport','hide');
  $labels = million_shades_get_two_dimension_style('label','hide');

 
  $label='';
  $i=0;
 foreach ($controls as $control) {
	 
	 
	
	  
   $wp_customize->add_setting($control,array(
		'default' => $defaults[$i],
		'sanitize_callback' => 'million_shades_sanitize_checkbox',
		'transport'         => $transports[$i]
	));
	
	$wp_customize->add_control($control,array(
		'type' => 'checkbox',
		'priority' => $priorities[$i],
		
		'label' =>$labels[$i],
		'section' => $sections[$i]
	));
	
	$i++;
	
}
 
 //replace-standard-header-as-side-header
 
 
 
  $controls = million_shades_get_two_dimension_style('control','check');
  $sections = million_shades_get_two_dimension_style('section','check');
  $priorities = million_shades_get_two_dimension_style('priority','check');
  $defaults = million_shades_get_two_dimension_style('default','check');
  $transports = million_shades_get_two_dimension_style('transport','check');
   $labels = million_shades_get_two_dimension_style('label','check');
 
  $label='';
  $i=0;
 foreach ($controls as $control) {
	 
	 

	  
   $wp_customize->add_setting($control,array(
		
		'default' => '',
		'sanitize_callback' => 'million_shades_sanitize_checkbox',
		'transport'         => $transports[$i]
		
	));
	
	$wp_customize->add_control($control,array(
		
		'type' => 'checkbox',
		'priority' => $priorities[$i],
	
		'label' =>$labels[$i],

		'section' => $sections[$i]
		
	));
	
	$i++;
	
}
 
 