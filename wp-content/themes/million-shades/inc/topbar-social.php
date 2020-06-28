<?php
/**
 * topbar social functions
 * 
 * @package million-shades
 * 
 */
 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


function million_shades_topbar_social_template() {
	
	
		$social_number = get_theme_mod('social-number','4');

		$icon1 = get_theme_mod('topbar-social-icon1','default');
		$url1 = get_theme_mod('topbar-social-url1');
		
		$icon2 = get_theme_mod('topbar-social-icon2','default');
		$url2 = get_theme_mod('topbar-social-url2');
		
		$icon3 = get_theme_mod('topbar-social-icon3','default');
		$url3 = get_theme_mod('topbar-social-url3');
		
		$icon4 = get_theme_mod('topbar-social-icon4','default');
		$url4 = get_theme_mod('topbar-social-url4');
		
		$icon5 = get_theme_mod('topbar-social-icon5','twitter');
		$url5 = get_theme_mod('topbar-social-url5');
		
		$icon6 = get_theme_mod('topbar-social-icon6','twitter');
		$url6 = get_theme_mod('topbar-social-url6');
		
		$icon7 = get_theme_mod('topbar-social-icon7','twitter');
		$url7 = get_theme_mod('topbar-social-url7');
		
		$icon8 = get_theme_mod('topbar-social-icon8','twitter');
		$url8 = get_theme_mod('topbar-social-url8');
		
		$target = get_theme_mod('social-item-target','_blank');
		
	
		if ($social_number == 2) {
		    $url3 = "";
		   $url4 = "";
		    $url5 = "";
		      $url6 = "";
		   $url7 = "";
		    $url8 = "";
		     $icon3 = "";
		   $icon4 = "";
		    $icon5 = "";
		    $icon6 = "";
		   $icon7 = "";
		    $icon8 = "";
		}
		
		if ($social_number == 3) {
		   $url4 = "";
		    $url5 = "";
		      $url6 = "";
		   $url7 = "";
		    $url8 = "";
		   $icon4 = "";
		    $icon5 = ""; 
		    $icon6 = "";
		   $icon7 = "";
		    $icon8 = "";
		}
		
    	if ($social_number == 4) {
		   
		    $url5 = "";
		    $url6 = "";
		   $url7 = "";
		    $url8 = "";
		    $icon5 = "";
		    $icon6 = "";
		   $icon7 = "";
		    $icon8 = "";
		  
		}
		
		if ($social_number == 5) {
		    $url6 = "";
		    $url7 = "";
		    $url8 = "";
		    $icon6 = "";
		    $icon7 = "";
		    $icon8 = "";
		}
		
		if ($social_number == 6) {
		   $url7 = "";
		    $url8 = "";
		   $icon7 = "";
		    $icon8 = "";
		}
		
		if ($social_number == 7) {
		    $url8 = "";
		    $icon8 = "";
		}
		
		
   
   ?>

	<div id="social-id" class="social-icon-topbar">
		
	
		<div class="icon" id="ha1">
		
			<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url1); ?>">
			<i id="social1" class="fa fa-<?php echo esc_attr($icon1); ?>"></i></a>
		
		</div>
		

		<div class="icon" id="ha2">
		
			<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url2); ?>">
			<i id="social2" class="fa fa-<?php echo esc_attr($icon2); ?>"></i></a>
		
		</div>
	
		<div class="icon" id="ha3">
		
			<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url3); ?>">
			<i id="social3" class="fa fa-<?php echo esc_attr($icon3); ?>"></i></a>
		
		</div>
		
		<div class="icon" id="ha4">
		
			<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url4); ?>">
			<i id="social4" class="fa fa-<?php echo esc_attr($icon4); ?>"></i></a>
		
		</div>
		
		<div class="icon" id="ha5">
		
			<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url5); ?>">
			<i id="social5" class="fa fa-<?php echo esc_attr($icon5); ?>"></i></a>
		
		</div>
		
		<div class="icon" id="ha6">
		
			<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url6); ?>">
			<i id="social6" class="fa fa-<?php echo esc_attr($icon6); ?>"></i></a>
		
		</div>
		
		<div class="icon" id="ha7">
		
			<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url7); ?>">
			<i id="social7" class="fa fa-<?php echo esc_attr($icon7); ?>"></i></a>
		
		</div>
	
		<div class="icon" id="ha8">
		
			<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url8); ?>">
			<i id="social8" class="fa fa-<?php echo esc_attr($icon8); ?>"></i></a>
		
		</div>
	
	</div>

    <?php

}


