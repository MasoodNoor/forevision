<?php

/**
 * Topbar Text Template
 *
 * @author  Kudrat E Khuda
 * 
 * @package million-shades
 *
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


function million_shades_topbar_text_template() {
	
	
		$c_number = get_theme_mod('contact-number','2');
		
		
		$input1 = get_theme_mod('topbar-contact-input1');
		$input2 = get_theme_mod('topbar-contact-input2');
		$input3 = get_theme_mod('topbar-contact-input3');
		$input4 = get_theme_mod('topbar-contact-input4');
		$input5 = get_theme_mod('topbar-contact-input5');
		
		$icon1 = get_theme_mod('topbar-contact-icon1','none');
		$icon2 = get_theme_mod('topbar-contact-icon2','none');
		$icon3 = get_theme_mod('topbar-contact-icon3','gift');
		$icon4 = get_theme_mod('topbar-contact-icon4','gift');
		$icon5 = get_theme_mod('topbar-contact-icon5','gift');
		
		$item3_style = '';
		$item4_style = '';
		$item5_style = '';
			
		if ($c_number == '2'){
			$item3_style = 'display:none;';
			$item4_style = 'display:none;';
			$item5_style = 'display:none;';
			
		}
		
		if ($c_number == '3'){
			
			$item4_style = 'display:none;';
			$item5_style = 'display:none;';
			
		}
		
		if ($c_number == '4'){
			
		
			$item5_style = 'display:none;';
			
		}
				
		
	
   ?>
<div class="contacts-body">


		    <div id="item1">
				<span id="contact1" class="fa fa-<?php echo esc_attr($icon1) ?>"></span> 
				<span class="one"><?php echo esc_html($input1);?></span>
			 </div>
			 
			 <div id="item2">
				<span id="contact2"  class="fa fa-<?php echo esc_attr($icon2) ?>"></span>
				<span class="two" > <?php  echo esc_html($input2); ?></span>
		    </div>
		    
		    <div id="item3" style="<?php echo esc_attr($item3_style) ?>">
				<span id="contact3" class="fa fa-<?php echo esc_attr($icon3) ?>" ></span>
				<span class="three" > <?php  echo esc_html($input3); ?></span>
	        </div>
		 
	        <div id="item4" style="<?php echo esc_attr($item4_style) ?>">
				<span id="contact4"  class="fa fa-<?php echo esc_attr($icon4) ?>"></span>
				<span class="four" ><?php  echo esc_html($input4); ?></span> 
			</div>
            
            <div id="item5" style="<?php echo esc_attr($item5_style) ?>">
				<span id="contact5" class="fa fa-<?php echo esc_attr($icon5) ?>" ></span>
				<span class="five" ><?php  echo esc_html($input5);  ?> </span>
			 </div>

</div> 

    <?php

}




