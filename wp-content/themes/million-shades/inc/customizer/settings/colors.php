<?php

/*
*
* All color related settings and controls
*
*/

$controls =  million_shades_get_color_style('control');
$sections =  million_shades_get_color_style('section');
$labels =  million_shades_get_color_style('label');
$defaults =  million_shades_get_color_style('default');
$priorities =  million_shades_get_color_style('priority');
$transports =  million_shades_get_color_style('transport');
$i=0;


foreach($controls as $control) {



$wp_customize->add_setting(
		$control,
		array(
			
			'default'           => $defaults[$i],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => $transports[$i]
		)
	);

	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		$control,
		array(
			
			'label' =>$labels[$i],
			'priority'          => $priorities[$i],
			'section'     => $sections[$i],
			
		)
	) );
	
	$wp_customize->add_setting(
		$control.'-opacity',
		array(
			
			'default'           => '1',
			'sanitize_callback' => 'million_shades_sanitize_float',
			'transport'         => $transports[$i]
		)
	);

	$wp_customize->add_control( new Million_Shades_Customizer_Range_Value_Control(
		$wp_customize,
		$control.'-opacity',
		array(
			'label'       => __( 'Opacity:' , 'million-shades' ),
			'priority'    => $priorities[$i],
			'type'     => 'range-value',
			'section'     => $sections[$i],
			'input_attrs' => array(
			'min'    => 0.00,
			'max'    => 1.00,
			'step'   => 0.02,
			
		),
			
		)
	) );
	
	$i++;
}


$controls = million_shades_get_border_width_style_radius('control','border');
$sections = million_shades_get_border_width_style_radius('section','border');
$defaults = million_shades_get_border_width_style_radius('default','border');
$labels = million_shades_get_border_width_style_radius('label','border');
$priorities = million_shades_get_border_width_style_radius('priority','border');

$i=0;
$priority =  251;

foreach($controls as $control) {

$wp_customize->add_setting(
		$control,
		array(
			
			'default'           => $defaults[$i],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage'
		)
	);

	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		$control,
		array(
			'label'       => __( 'Border Color' , 'million-shades' ),
			'priority'          => $priority,
			'section'     => $sections[$i],
			
		)
	) );
	
	$wp_customize->add_setting(
		$control.'-opacity',
		array(
			
			'default'           => '1',
			'sanitize_callback' => 'million_shades_sanitize_float',
			'transport'         => 'postMessage'
		)
	);

	$wp_customize->add_control( new Million_Shades_Customizer_Range_Value_Control(
		$wp_customize,
		$control.'-opacity',
		array(
			'label'       => __( 'Opacity:' , 'million-shades' ),
			'priority'    => $priority,
			'type'     => 'range-value',
			'section'     => $sections[$i],
			'input_attrs' => array(
			'min'    => 0.00,
			'max'    => 1.00,
			'step'   => 0.02,
			
		),
			
		)
	) );
	
	

	
	$i++;
}


	
$controls = million_shades_get_border_width_style_radius('control', 'top-border-color');
$sections = million_shades_get_border_width_style_radius('section', 'top-border-color');
$defaults = million_shades_get_border_width_style_radius('default','top-border-color');
$labels = million_shades_get_border_width_style_radius('label','top-border-color');
$priorities = million_shades_get_border_width_style_radius('priority','top-border-color');

$i = 0;
foreach ($controls as $control ) {
	
	
	
		$wp_customize->add_setting(
		$control,
		array(
			'default'           => $defaults[$i],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage'
		)
	);

	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		$control,
		array(
			'label' =>__( 'Top Border Color', 'million-shades'),
			'priority'          => 252,
			'section'     => $sections[$i],
			
		)
	) );
	
	$wp_customize->add_setting(
		$control.'-opacity',
		array(
			
			'default'           => '1',
			'sanitize_callback' => 'million_shades_sanitize_float',
			'transport'         => 'postMessage'
		)
	);

	$wp_customize->add_control( new Million_Shades_Customizer_Range_Value_Control(
		$wp_customize,
		$control.'-opacity',
		array(
			'label'       => __( 'Opacity:' , 'million-shades' ),
			'priority'    => 252,
			'type'     => 'range-value',
			'section'     => $sections[$i],
			'input_attrs' => array(
			'min'    => 0.00,
			'max'    => 1.00,
			'step'   => 0.02,
			
		),
			
		)
	) );
	
	
	
$i++;
}	

$controls = million_shades_get_border_width_style_radius('control','top-border-width');
$sections = million_shades_get_border_width_style_radius('section','top-border-width');
$defaults = million_shades_get_border_width_style_radius('default','top-border-width');
$labels = million_shades_get_border_width_style_radius('label','top-border-width');
$priorities = million_shades_get_border_width_style_radius('priority','top-border-width');

$i=0;
foreach($controls as $control) {


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
			'priority' => $priorities[$i],
            'label'       => __( 'Top Border Width', 'million-shades'),
            'section'     => $sections[$i],
            
            
        )
    );
	
	$i++;
	

}

$controls = million_shades_get_border_width_style_radius('control','top-border-style');
$sections = million_shades_get_border_width_style_radius('section','top-border-style');
$defaults = million_shades_get_border_width_style_radius('default','top-border-style');
$labels = million_shades_get_border_width_style_radius('label','top-border-style');
$priorities = million_shades_get_border_width_style_radius('priority','top-border-style');

$i=0;
foreach($controls as $control) {


	$wp_customize->add_setting(
        $control,
        array(
            'default'           => $defaults[$i],
            'sanitize_callback' => 'million_shades_sanitize_border_style',
			'transport'         => 'postMessage'
        )
    );
    
	$wp_customize->add_control(
        $control,
        array(
            'type'        => 'select',
			'priority' =>$priorities[$i],
            'label'       => __( 'Top Border Style', 'million-shades'),
            'section'     => $sections[$i],
			'choices'     => array(
					'solid'  => __( "Solid", 'million-shades' ),
					'dashed'   => __( "Dashed", 'million-shades' ),
					'dotted' => __( "Dotted", 'million-shades' ),
					'double' => __( "Double", 'million-shades' ),
					'groove' => __( "Groove", 'million-shades' ),
					'none' => __( "None", 'million-shades' ),
				),
            
            
        )
    );
	

	$i++;
	

}	


$controls = million_shades_get_border_width_style_radius('control', 'bottom-border-color');
$sections = million_shades_get_border_width_style_radius('section', 'bottom-border-color');
$defaults = million_shades_get_border_width_style_radius('default','bottom-border-color');
$labels = million_shades_get_border_width_style_radius('label','bottom-border-color');
$priorities = million_shades_get_border_width_style_radius('priority','bottom-border-color');

$i = 0;
foreach ($controls as $control ) {
	
	
	
	$wp_customize->add_setting(
		$control,
		array(
			'default'           => $defaults[$i],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage'
		)
	);

	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		$control,
		array(
			'label' =>$labels[$i],
			'priority'          => 252,
			'section'     => $sections[$i],
			
		)
	) );
	
	$wp_customize->add_setting(
		$control.'-opacity',
		array(
			
			'default'           => '1',
			'sanitize_callback' => 'million_shades_sanitize_float',
			'transport'         => 'postMessage'
		)
	);

	$wp_customize->add_control( new Million_Shades_Customizer_Range_Value_Control(
		$wp_customize,
		$control.'-opacity',
		array(
			'label'       => __( 'Opacity:' , 'million-shades' ),
			'priority'    => 252,
			'type'     => 'range-value',
			'section'     => $sections[$i],
			'input_attrs' => array(
			'min'    => 0.00,
			'max'    => 1.00,
			'step'   => 0.02,
			
		),
			
		)
	) );
	
	
$i++;
}


$controls = million_shades_get_border_width_style_radius('control','bottom-border-width');
$sections = million_shades_get_border_width_style_radius('section','bottom-border-width');
$defaults = million_shades_get_border_width_style_radius('default','bottom-border-width');
$labels = million_shades_get_border_width_style_radius('label','bottom-border-width');
$priorities = million_shades_get_border_width_style_radius('priority','bottom-border-width');

$i=0;
foreach($controls as $control) {


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
			'priority' => $priorities[$i],
            'label'       => __( 'Border Width', 'million-shades'),
            'section'     => $sections[$i],
            
            
        )
    );
	
	$i++;
	

}

$controls = million_shades_get_border_width_style_radius('control','bottom-border-style');
$sections = million_shades_get_border_width_style_radius('section','bottom-border-style');
$defaults = million_shades_get_border_width_style_radius('default','bottom-border-style');
$labels = million_shades_get_border_width_style_radius('label','bottom-border-style');
$priorities = million_shades_get_border_width_style_radius('priority','bottom-border-style');

$i=0;
foreach($controls as $control) {


	$wp_customize->add_setting(
        $control,
        array(
            'default'           => $defaults[$i],
            'sanitize_callback' => 'million_shades_sanitize_border_style',
			'transport'         => 'postMessage'
        )
    );
    
	$wp_customize->add_control(
        $control,
        array(
            'type'        => 'select',
			'priority' =>$priorities[$i],
            'label'       => __( 'Border Style', 'million-shades'),
            'section'     => $sections[$i],
			'choices'     => array(
					'solid'     => __( "Solid", 'million-shades' ),
					'dashed'   => __( "Dashed", 'million-shades' ),
					'dotted' => __( "Dotted", 'million-shades' ),
					'double' => __( "Double", 'million-shades' ),
					'groove' => __( "Groove", 'million-shades' ),
					'none' => __( "None", 'million-shades' ),
				),
            
            
        )
    );
	

	$i++;
	

}	


$controls = million_shades_get_border_width_style_radius('control','width');
$sections = million_shades_get_border_width_style_radius('section','width');
$defaults = million_shades_get_border_width_style_radius('default','width');
$labels = million_shades_get_border_width_style_radius('label','width');
$priorities = million_shades_get_border_width_style_radius('priority','width');

$i=0;
foreach($controls as $control) {


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
			'priority' => $priorities[$i],
            'label'       => __( 'Border Width', 'million-shades'),
            'section'     => $sections[$i],
            
            
        )
    );
	
	$i++;
	

}	

$controls = million_shades_get_border_width_style_radius('control','style');
$sections = million_shades_get_border_width_style_radius('section','style');
$defaults = million_shades_get_border_width_style_radius('default','style');
$labels = million_shades_get_border_width_style_radius('label','style');
$priorities = million_shades_get_border_width_style_radius('priority','style');

$i=0;
foreach($controls as $control) {


	$wp_customize->add_setting(
        $control,
        array(
            'default'           => $defaults[$i],
            'sanitize_callback' => 'million_shades_sanitize_border_style',
			'transport'         => 'postMessage'
        )
    );
    
	$wp_customize->add_control(
        $control,
        array(
            'type'        => 'select',
			'priority' =>$priorities[$i],
            'label'       => __( 'Border Style', 'million-shades'),
            'section'     => $sections[$i],
			'choices'     => array(
					'solid'     => __( "Solid", 'million-shades' ),
					'dashed'   => __( "Dashed", 'million-shades' ),
					'dotted' => __( "Doted", 'million-shades' ),
					'double' => __( "Double", 'million-shades' ),
					'groove' => __( "Groove", 'million-shades' ),
					'none' => __( "None", 'million-shades' ),
				),
            
            
        )
    );
	

	$i++;
	

}	


$controls = million_shades_get_border_width_style_radius('control','radius');
$sections = million_shades_get_border_width_style_radius('section','radius');
$defaults = million_shades_get_border_width_style_radius('default','radius');
$labels = million_shades_get_border_width_style_radius('label','radius');
$priorities = million_shades_get_border_width_style_radius('priority','radius');

$i=0;
foreach($controls as $control) {


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
			'priority' => $priorities[$i],
            'label'       => __( 'Border Radius', 'million-shades'),
            'section'     => $sections[$i],
            
            
        )
    );
	
	$i++;
	

}	



$controls = million_shades_get_border_width_style_radius('control','two-border-color');
$sections = million_shades_get_border_width_style_radius('section','two-border-color');
$defaults = million_shades_get_border_width_style_radius('default','two-border-color');
$labels = million_shades_get_border_width_style_radius('label','two-border-color');
$priorities = million_shades_get_border_width_style_radius('priority','two-border-color');

$i=0;
$priority =  251;

foreach($controls as $control) {

	$wp_customize->add_setting(
		$control,
		array(
			
			'default'           =>$defaults[$i],
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage'
		)
	);

	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		$control,
		array(
			'label'       => __( 'Border Color' , 'million-shades' ),
			'priority'          => $priority,
			'section'     => $sections[$i],
			
		)
	) );
	
	$wp_customize->add_setting(
		$control.'-opacity',
		array(
			
			'default'           => '1',
			'sanitize_callback' => 'million_shades_sanitize_float',
			'transport'         => 'postMessage'
		)
	);

	$wp_customize->add_control( new Million_Shades_Customizer_Range_Value_Control(
		$wp_customize,
		$control.'-opacity',
		array(
			'label'       => __( 'Opacity:' , 'million-shades' ),
			'priority'    => $priority,
			'type'     => 'range-value',
			'section'     => $sections[$i],
			'input_attrs' => array(
			'min'    => 0.00,
			'max'    => 1.00,
			'step'   => 0.02,
			
		),
			
		)
	) );
	
	$i++;
}


$controls = million_shades_get_border_width_style_radius('control','two-border-width');
$sections = million_shades_get_border_width_style_radius('section','two-border-width');
$defaults = million_shades_get_border_width_style_radius('default','two-border-width');
$labels = million_shades_get_border_width_style_radius('label','two-border-width');
$priorities = million_shades_get_border_width_style_radius('priority','two-border-width');

$i=0;
foreach($controls as $control) {

	
	
	$wp_customize->add_setting(
        $control,
        array(
            'default'           =>$defaults[$i],
            'sanitize_callback' => 'absint',
			'transport'         => 'postMessage'
        )
    );
    
	$wp_customize->add_control(
        $control,
        array(
            'type'        => 'text',
			'priority' => $priorities[$i],
            'label'       => __( 'Border Width', 'million-shades'),
            'section'     => $sections[$i],
            
            
        )
    );
	
	$i++;
	

}	

$controls = million_shades_get_border_width_style_radius('control','two-border-style');
$sections = million_shades_get_border_width_style_radius('section','two-border-style');
$defaults = million_shades_get_border_width_style_radius('default','two-border-style');
$labels = million_shades_get_border_width_style_radius('label','two-border-style');
$priorities = million_shades_get_border_width_style_radius('priority','two-border-style');

$i=0;
foreach($controls as $control) {


	$wp_customize->add_setting(
        $control,
        array(
            'default'           =>$defaults[$i],
            'sanitize_callback' => 'million_shades_sanitize_border_style',
			'transport'         => 'postMessage'
        )
    );
    
	$wp_customize->add_control(
        $control,
        array(
            'type'        => 'select',
			'priority' =>$priorities[$i],
            'label'       => __( 'Border Style', 'million-shades'),
            'section'     => $sections[$i],
			'choices'     => array(
					'solid'     => __( "Solid", 'million-shades' ),
					'dashed'   => __( "Dashed", 'million-shades' ),
					'dotted' => __( "Doted", 'million-shades' ),
					'double' => __( "Double", 'million-shades' ),
					'groove' => __( "Groove", 'million-shades' ),
					'none' => __( "None", 'million-shades' ),
				),
            
            
        )
    );
	

	$i++;
	

}	


/*  Sticky Header Background Color  */
$headerbgColor = get_theme_mod('site-header-background-color','#ffffff');
$wp_customize->add_setting(
		'sticky-header-background-color',
		array(
			
			'default'           => $headerbgColor,
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'refresh'
		)
	);

	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'sticky-header-background-color',
		array(
			'label'       => __( 'Sticky Header Background Color' , 'million-shades' ),
			'priority'          => 10,
			'section'     => 'sticky-header',
			
		)
	) );
	
	$wp_customize->add_setting(
		'sticky-header-background-color-opacity',
		array(
			
			'default'           => '1',
			'sanitize_callback' => 'million_shades_sanitize_float',
			'transport'         => 'postMessage'
		)
	);

	$wp_customize->add_control( new Million_Shades_Customizer_Range_Value_Control(
		$wp_customize,
		'sticky-header-background-color-opacity',
		array(
			'label'       => __( 'Opacity:', 'million-shades' ),
			'priority'    =>  10,
			'type'     => 'range-value',
			'section'     => 'sticky-header',
			'input_attrs' => array(
			'min'    => 0.00,
			'max'    => 1.00,
			'step'   => 0.02,
			
		),
			
		)
	) );
	
	
	//accent color
	$wp_customize->add_setting(
		'site-accent-color',
		array(
			
			'default'           => '#06d8a0',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage'
		)
	);

	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'site-accent-color',
		array(
			'label'       => __( 'Accent Color' , 'million-shades' ),
			'priority'          => 1,
			'section'     => 'general',
			
		)
	) );
	

