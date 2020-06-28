<?php

/*
*
* controls & settings of all input field
*
*/

$controls = million_shades_get_two_dimension_style('control','contact');
$sections = million_shades_get_two_dimension_style('section','contact');
$labels = million_shades_get_two_dimension_style('label','contact');
$priorities = million_shades_get_two_dimension_style('priority','contact');
$defaults = million_shades_get_two_dimension_style('default','contact');

$i=0;
	
foreach ($controls  as $control) {
   
	
	$wp_customize->add_setting(
		$control,
		array(
			'sanitize_callback' => 'million_shades_sanitize_text2',
			'active_callback' => 'million_shades_contact_input_active_callback',
			'default'         => $defaults[$i],
			'transport'         => 'postMessage'
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


$controls = million_shades_get_two_dimension_style('control','icon');
$sections = million_shades_get_two_dimension_style('section','icon');
$labels = million_shades_get_two_dimension_style('label','icon');
$priorities = million_shades_get_two_dimension_style('priority','icon');
$defaults = million_shades_get_two_dimension_style('default','icon');
$transports = million_shades_get_two_dimension_style('transport','icon');


$i=0;
	
foreach ($controls  as $control) {
	
	
	
	$wp_customize->add_setting(
		$control,
		array(
			'sanitize_callback' => 'million_shades_sanitize_text2',
			'active_callback' => 'million_shades_contact_input_active_callback',
			'default'         =>  $defaults[$i],
			'transport'         => 'postMessage'
		)
	);

	
	$wp_customize->add_control($control,array(
		
			'type' => 'select',
			'section'	=> $sections[$i],
			'priority' => $priorities[$i],
			
			'label' =>$labels[$i],
			'choices' => array(
							'user' => __('user', 'million-shades'),
						
							'mobile'=>__('mobile','million-shades'),
							'phone'=>__('phone','million-shades'),
							'phone-square'=>__('phone-square','million-shades'),
							'plane'=>__('plane','million-shades'),
							'plus-circle'=>__('plus-circle','million-shades'),
							'plus-square'=>__('plus-square','million-shades'),
							'eye'=>__('eye','million-shades'),
							'eyedropper'=>__('eyedropper','million-shades'),
							'fax'=>__('fax','million-shades'),
							'feed'=>__('feed','million-shades'),
							'female'=>__('female','million-shades'),
							'gift'=>__('gift','million-shades'),
							'home'=>__('home','million-shades'),
							'globe'=>__('globe','million-shades'),
							'minus-circle'=>__('minus-circle','million-shades'),
							'minus-square'=>__('minus-square','million-shades'),
							'mortar-board'=>__('mortar-board','million-shades'),
							'info-circle'=>__('info-circle','million-shades'),
							'mail-reply'=>__('mail-reply','million-shades'),
							'male'=>__('male','million-shades'),
							'leaf'=>__('leaf','million-shades'),
							'laptop'=>__('laptop','million-shades'),
							'key'=>__('key','million-shades'),
							'keyboard-o'=>__('keyboard-o','million-shades'),
							'institution'=>__('institution','million-shades'),
							'inbox'=>__('inbox','million-shades'),
							'image'=>__('image','million-shades'),
							'heart'=>__('heart','million-shades'),
							'heart-o'=>__('heart-o','million-shades'),
							'history'=>__('history','million-shades'),
							'headphones'=>__('headphones','million-shades'),
							'hashtag'=>__('hashtag','million-shades'),
							'handshake-o'=>__('handshake-o','million-shades'),
							'group'=>__('group','million-shades'),
							'graduation-cap'=>__('graduation-cap','million-shades'),
							'glass'=>__('glass','million-shades'),
							'gear'=>__('gear','million-shades'),
							'folder-open-o'=>__('folder-open-o','million-shades'),
							'folder-open'=>__('folder-open','million-shades'),
							'folder-o'=>__('folder-o','million-shades'),
							'folder-o'=>__('folder','million-shades'),
							'flag'=>__('flag','million-shades'),
							'flash'=>__('flash','million-shades'),
							'fire'=>__('fire','million-shades'),
							'film'=>__('film','million-shades'),
							'file-video-o'=>__('file-video-o','million-shades'),
							'file-pdf-o'=>__('file-pdf-o','million-shades'),
							'arrow-circle-o-dow'=>__('arrow-circle-o-dow','million-shades'),
							'arrow-circle-o-left'=>__('arrow-circle-o-left','million-shades'),
							'arrow-circle-o-right'=>__('arrow-circle-o-right','million-shades'),
							'arrow-circle-down'=>__('arrow-circle-down','million-shades'),
							'arrow-circle-left'=>__('arrow-circle-left','million-shades'),
							'arrow-circle-right'=>__('arrow-circle-right','million-shades'),
							'arrow-circle-up'=>__('arrow-circle-up','million-shades'),
							'arrow-circle-o-up'=>__('arrow-circle-o-up','million-shades'),
							'arrow-right'=>__('arrow-right','million-shades'),
							'arrow-up'=>__('arrow-up','million-shades'),
							'arrow'=>__('arrow','million-shades'),
							
							''=>__('none','million-shades')
							
						),
		)
		
		
		
	);
$i++;
}



$controls = million_shades_get_two_dimension_style('control','social-url');
$sections = million_shades_get_two_dimension_style('section','social-url');
$labels = million_shades_get_two_dimension_style('label','social-url');
$priorities = million_shades_get_two_dimension_style('priority','social-url');
$defaults = million_shades_get_two_dimension_style('default','social-url');
$transports = million_shades_get_two_dimension_style('transport','social-url');

$i=0;
	
	foreach ($controls  as $control) {
	
	
	
	$wp_customize->add_setting(
		$control,
		array(
			'sanitize_callback' => 'esc_url_raw',
			'active_callback' =>'million_shades_social_input_active_callback',
			'transport'  => 'postMessage'
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


$controls = million_shades_get_two_dimension_style('control','social');
$sections = million_shades_get_two_dimension_style('section','social');
$labels = million_shades_get_two_dimension_style('label','social');
$priorities = million_shades_get_two_dimension_style('priority','social');
$defaults = million_shades_get_two_dimension_style('default','social');
$transports = million_shades_get_two_dimension_style('transport','social');




		$social_links_icons = array(
		''=>__('none','million-shades'),
		'behance'=>__('behance','million-shades'),'codepen'=>__('codepen','million-shades'),'deviantart'=>__('deviantart','million-shades'),'digg'=>__('digg','million-shades'),
		'dribbble'=>__('dribbble','million-shades'),'dropbox'=>__('dropbox','million-shades'),'facebook'=>__('facebook','million-shades'),'flickr'=>__('flickr','million-shades'),
		'foursquare'=>__('foursquare','million-shades'),'google-plus'=>__('google-plus','million-shades'),'github'=>__('github','million-shades'),'instagram'=>__('instagram','million-shades'),
		'linkedin'=>__('linkedin','million-shades'),'envelope-o'=>__('envelope-o','million-shades'),'medium'=>__('medium','million-shades'),'pinterest-p'=>__('pinterest-p','million-shades'),
		'get-pocket'=>__('get-pocket','million-shades'),'reddit-alien'=>__('reddit-alien','million-shades'),'skype'=>__('skype','million-shades'),
		'skype'=>__('skype','million-shades'),'slideshare'=>__('slideshare','million-shades'),'snapchat-ghost'=>__('snapchat-ghost','million-shades'),'soundcloud'=>__('soundcloud','million-shades'),
		'spotify'=>__('spotify','million-shades'),'stumbleupon'=>__('stumbleupon','million-shades'),'tumblr'=>__('tumblr','million-shades'),'twitch'=>__('twitch','million-shades'),'twitter'=>__('twitter','million-shades'),'vimeo'=>__('vimeo','million-shades'),'vine'=>__('vine','million-shades'),
		'vk'=>__('vk','million-shades'),'wordpress'=>__('wordpress','million-shades'),'wordpress'=>__('wordpress','million-shades'),'yelp'=>__('yelp','million-shades'),
		'youtube'=>__('youtube','million-shades'),'none'=>__('none','million-shades'));
		
		

	$i=0;
	
	foreach ($controls  as $control) {

	
	$wp_customize->add_setting(
		$control,
		array(
			'sanitize_callback' => 'million_shades_sanitize_text2',
			'active_callback' =>'million_shades_social_input_active_callback',
			'default'         => '',
			'transport'         => 'postMessage'
		)
	);

	$wp_customize->add_control($control,array(
		
			'type' => 'select',
			'section'		=> $sections[$i],
			'priority' => $priorities[$i],
			
			'label' =>$labels[$i],
			'choices' =>$social_links_icons,
			
		)
		
		
		
	);
$i++;
}
	

// footer info and read more

$controls = million_shades_get_two_dimension_style('control','read-more');	
$sections = million_shades_get_two_dimension_style('section','read-more');	
$labels = million_shades_get_two_dimension_style('label','read-more');
$priorities = million_shades_get_two_dimension_style('priority','read-more');
$defaults = million_shades_get_two_dimension_style('default','read-more');
$transports = million_shades_get_two_dimension_style('transport','read-more');
	
$i=0;
	
foreach ($controls  as $control) {


	
	$wp_customize->add_setting(
		$control,
		array(
			'sanitize_callback' => 'million_shades_sanitize_text2',
			'default'   => $defaults[$i],
			'transport'         => 'postMessage'
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
	
	
// blog post query

$controls = million_shades_get_two_dimension_style('control','query');	
$sections = million_shades_get_two_dimension_style('section','query');	
$labels = million_shades_get_two_dimension_style('label','query');

$priorities = million_shades_get_two_dimension_style('priority','query');
$defaults = million_shades_get_two_dimension_style('default','query');
$transports = million_shades_get_two_dimension_style('transport','query');
	
$i=0;
	
foreach ($controls  as $control) {
	


	$wp_customize->add_setting(
		$control,
		array(
			'sanitize_callback' => 'million_shades_sanitize_text2',
			'default'   => $defaults[$i],
			'transport'         => 'refresh'
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
	
	
	// feature url, button url

$controls = million_shades_get_two_dimension_style('control','more-url');	
$sections = million_shades_get_two_dimension_style('section','more-url');	
$labels = million_shades_get_two_dimension_style('label','more-url');

$priorities = million_shades_get_two_dimension_style('priority','more-url');
$defaults = million_shades_get_two_dimension_style('default','more-url');
//$transports = million_shades_get_two_dimension_style('transport','query');
	
$i=0;
	
foreach ($controls  as $control) {
	


	$wp_customize->add_setting(
		$control,
		array(
			'sanitize_callback' => 'million_shades_sanitize_text2',
			'default'   => $defaults[$i],
			'transport'         => 'postMessage'
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
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	




