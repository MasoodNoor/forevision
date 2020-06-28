<?php

/*
*
* Some font and other related settings and controls
*
*/
	

$controls = million_shades_get_two_dimension_style('control','font-size');
$sections = million_shades_get_two_dimension_style('section','font-size');
$labels = million_shades_get_two_dimension_style('label','font-size');
$defaults = million_shades_get_two_dimension_style('default','font-size');
$priorities = million_shades_get_two_dimension_style('priority','font-size');
$transports = million_shades_get_two_dimension_style('transport','font-size');

$i=0;

foreach ($controls as $control) {
 

 
 $wp_customize->add_setting(
        $control,
        array(
            'default'           => $defaults[$i],
            'sanitize_callback' => 'absint',
			'transport'         => $transports[$i]
        )
    );
    $wp_customize->add_control(
        $control,
        array(
            'type'        => 'text',
			'priority' => $priorities[$i],
           
			'label' =>$labels[$i],
            'section'     => $sections[$i],
            
            
        )
    );
	
$i++;
}	

$controls = million_shades_get_two_dimension_style('control','w-px');
$sections = million_shades_get_two_dimension_style('section','w-px');
$labels = million_shades_get_two_dimension_style('label','w-px');
$defaults = million_shades_get_two_dimension_style('default','w-px');
$priorities = million_shades_get_two_dimension_style('priority','w-px');
$transports = million_shades_get_two_dimension_style('transport','w-px');

$i=0;
foreach ($controls as $control) {


 
 $wp_customize->add_setting(
        $control,
        array(
            'default'           =>$defaults[$i],
            'sanitize_callback' => 'absint',
			'transport'         => $transports[$i]
        )
    );
    $wp_customize->add_control(
        $control,
        array(
            'type'        => 'text',
			'priority' => $priorities[$i],
            
			'label' =>$labels[$i],
            'section'     => $sections[$i],
            
            
        )
    );
	
$i++;
}	


$controls = million_shades_get_circle_icon_style('control','textbox');
$sections = million_shades_get_circle_icon_style('section','textbox');
$labels = million_shades_get_circle_icon_style('label','textbox');
$defaults = million_shades_get_circle_icon_style('default','textbox');
$i=0;

foreach ($controls as $control) {
	

 
 $wp_customize->add_setting(
        $control,
        array(
            'default'           => $defaults[$i],
            'sanitize_callback' => 'absint',
			'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        $control,
        array(
            'type'        => 'text',
			'priority' => '280',
         
			'label' =>$labels[$i],
            'section'     => $sections[$i],
            
            
        )
    );
	
$i++;
}	
 
