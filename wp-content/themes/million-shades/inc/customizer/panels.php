<?php

/*
* Creating all panels
*/



$panels = million_shades_panels();

$priority = 1;


foreach ($panels as $panel_id=>$panel_label) {
	
		 $wp_customize->add_panel($panel_id, array(
        'priority'       => $priority++,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
		'title' =>$panel_label,
        
    ) ); 
	
	
}


$controls = million_shades_panels_sections_style('control');
$sections = million_shades_panels_sections_style('section');
$labels = million_shades_panels_sections_style('label');
$panells = million_shades_panels_sections_style('panel');


$i = 0;
foreach ($controls as $control) {

	$wp_customize->add_section($control, array(
	  'priority' => $priority++,
	 
	  'title' =>$labels[$i],
	  'panel' => $panells[$i],
	  
	));
	
	$i++;
}


