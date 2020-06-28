<?php

/* ======================================================================== *
 * Customizer sanitize functions
 * ======================================================================== */


//Sanitize Text
function million_shades_sanitize_text( $value ) {
	
	return sanitize_text_field( $value );
	
}

//Sanitize Integer
function million_shades_sanitize_integer( $input ) {
		if( is_numeric( $input ) ) {
		return intval( $input );
	}
}

//Sanitize Checkboxes
function million_shades_sanitize_checkbox($input) {
	  if ( $input == 1 ) {
		 return '1';
	  } else {
		 return '';
	  }
}

//Sanitize Choices
function million_shades_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}


function million_shades_sanitize_sidebar( $input ) {
    if ( in_array( $input, array( 'default', 'rightbar', 'leftbar','nosidebar' ), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_slider_type( $input ) {
    if ( in_array( $input, array( 'slide', 'carousel' ), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_icons( $input ) {
	$icons = million_shades_font_awesome_icons();
    if ( in_array( $input, $icons, true ) ) {
        return $input;
    }
}

function million_shades_sanitize_target( $input ) {
    if ( in_array( $input, array( '_self', '_blank' ), true ) ) {
        return $input;
    }
}

//Header type

function million_shades_sanitize_site_header( $input ) {
    if ( in_array( $input, array( 'right', 'inline', 'left' ), true ) ) {
        return $input;
    }
}



function million_shades_sanitize_quote_style( $input ) {
    if ( in_array( $input, array( 'single', 'double', 'bar' ), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_style_top_bottom( $input ) {
    if ( in_array( $input, array( 'top', 'bottom'), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_feature_post( $input ) {
    if ( in_array( $input, array( 'fpage', 'lpage', 'both' ), true ) ) {
        return $input;
    }
}
function million_shades_sanitize_header_media( $input ) {
    if ( in_array( $input, array( 'fpage', 'lpage', 'both','all' ), true ) ) {
        return $input;
    }
}



function million_shades_sanitize_post_element_order( $input ) {
    if ( in_array( $input, array( 'img-top', 'img-down', 'img-middle' ), true ) ) {
        return $input;
    }
}



function million_shades_sanitize_widget_style( $input ) {
    if ( in_array( $input, array( 'style1', 'style2', 'style3','style4','none'  ), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_widget_styles( $input ) {
    if ( in_array( $input, array( 'style1', 'style2', 'style3','none2','none'  ), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_ovr_heights( $input ) {
    if ( in_array( $input, array( 'all','box' ), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_ovr_opacity( $input ) {
    if ( in_array( $input, array( '0', '0.1', '0.2','0.3','0.4','0.5','0.6','0.7','0.8','0.9','1' ), true ) ) {
        return $input;
    }
}


function million_shades_sanitize_widget_align( $input ) {
    if ( in_array( $input, array( 'left', 'center' ), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_widget_aligns( $input ) {
    if ( in_array( $input, array( 'left', 'center','right' ), true ) ) {
        return $input;
    }
}


// border style
function million_shades_sanitize_border_style( $input ) {
    if ( in_array( $input, array( 'solid', 'dashed', 'dotted', 'double', 'groove', 'none'), true ) ) {
        return $input;
    }
}

// thumbnail sizes
function million_shades_sanitize_thumbnail_sizes( $input ) {
    if ( in_array( $input, array( 'thumbnail', 'medium', 'medium-extra','medium_large', 'large', 'full'), true ) ) {
        return $input;
    }
}


// Sidebar layout
function million_shades_sanitize_page_layout( $input ) {
    if ( in_array( $input, array( 'rightbar', 'leftbar', 'nosidebar'), true ) ) {
        return $input;
    }
}

// Page layout
function million_shades_sanitize_header_media_layout( $input ) {
    if ( in_array( $input, array( 'none', 'image', 'video', 'slide'), true ) ) {
        return $input;
    }
}

// Two options
function million_shades_sanitize_two( $input ) {
    if ( in_array( $input, array( 'one', 'two'), true ) ) {
        return $input;
    }
}

// Three options
function million_shades_sanitize_three( $input ) {
    if ( in_array( $input, array( 'one', 'two', 'three'), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_scroll_icon( $input ) {
    if ( in_array( $input, array( 'angle-double-up', 'angle-up', 'chevron-up'), true ) ) {
        return $input;
    }
}

//Scroll-up style
function million_shades_sanitize_circle_sqaure( $input ) {
    if ( in_array( $input, array( 'circle', 'sqaure' ), true ) ) {
        return $input;
    }
}
//Footer widget areas
function million_shades_sanitize_fwidgets( $input ) {
    if ( in_array( $input, array( '1', '2', '3','4' ), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_col_no( $input ) {
    if ( in_array( $input, array( '1', '2', '3' ), true ) ) {
        return $input;
    }
}


// Website Background layout
function million_shades_radio_sanitize_webpagelayout($input) {
      $valid_keys = array(
         'full-width' => __('Full Width', 'million-shades'),
         'boxed' => __('Boxed', 'million-shades')
      );
      if ( array_key_exists( $input, $valid_keys ) ) {
         return $input;
      } else {
         return '';
      }
   }
   
   
// Site background pattern options
function million_shades_sanitize_background_pattern( $input ) {
    if ( in_array( $input, array( 'starnight', 'board', 'marble','wood', 'none'), true ) ) {
        return $input;
    }
}

// Site background image options
function million_shades_sanitize_background_image_style( $input ) {
    if ( in_array( $input, array( 'no-repeat', 'repeat', 'fixed','repeat-x', 'repeat-y'), true ) ) {
        return $input;
    }
}

// Site Header options
  function million_shades_sanitize_page_header_position( $input ) {
    if ( in_array( $input, array( 'left', 'center', 'right'), true ) ) {
        return $input;
    }
}

  function million_shades_sanitize_order_by( $input ) {
    if ( in_array( $input, array( 'date', 'title'), true ) ) {
        return $input;
    }
}

 function million_shades_sanitize_order( $input ) {
    if ( in_array( $input, array( 'ASC', 'DESC'), true ) ) {
        return $input;
    }
}

 function million_shades_sanitize_false_true( $input ) {
    if ( in_array( $input, array( 'false', 'true'), true ) ) {
        return $input;
    }
}

  function million_shades_sanitize_four_options( $input ) {
    if ( in_array( $input, array( 'left', 'center', 'right', 'justify'), true ) ) {
        return $input;
    }
}

 function million_shades_sanitize_align_two( $input ) {
    if ( in_array( $input, array( 'left','right'), true ) ) {
        return $input;
    }
}

 function million_shades_sanitize_img_sizes( $input ) {
    if ( in_array( $input, array( 'auto','cover','contain'), true ) ) {
        return $input;
    }
}

 function million_shades_sanitize_img_repeat( $input ) {
    if ( in_array( $input, array( 'no-repeat','repeat'), true ) ) {
        return $input;
    }
}

 function million_shades_sanitize_show_hide( $input ) {
    if ( in_array( $input, array( 'show','hide'), true ) ) {
        return $input;
    }
}

 function million_shades_sanitize_yes_no( $input ) {
    if ( in_array( $input, array( 'yes','no'), true ) ) {
        return $input;
    }
}


function million_shades_sanitize_animation_type( $input ) {
    if ( in_array( $input, array( 'fade','slide'), true ) ) {
        return $input;
    }
}


function million_shades_sanitize_testimonial_align( $input ) {
    if ( in_array( $input, array( 'center','left','right','down'), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_slide_speeds( $input ) {
	
    if ( in_array( $input, array( '5000','4000','3500','3000','2000'), true ) ) {
        return $input;
    }
	
}

function million_shades_sanitize_display_style( $input ) {
	
    if ( in_array( $input, array( 'position-inline','position-block'), true ) ) {
        return $input;
    }
}

 function million_shades_sanitize_title_tag( $input ) {
	 
    if ( in_array( $input, array( 'h1', 'h2', 'h3', 'h4', 'h5', 'span'), true ) ) {
        return $input;
    }
	
}

function million_shades_sanitize_style_one_none( $input ) {
    if ( in_array( $input, array( 'none','style1'), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_style_three( $input ) {
    if ( in_array( $input, array( 'none','style1','style2'), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_style_five( $input ) {
    if ( in_array( $input, array( 'style1','style2','style3','style4','style5'), true ) ) {
        return $input;
    }
}
function million_shades_sanitize_style_five_none( $input ) {
    if ( in_array( $input, array('none','style1','style2','style3','style4','style5'), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_hover_style( $input ) {
    if ( in_array( $input, array( 'hover1','hover2','hover3'), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_header_options( $input ) {
    if ( in_array( $input, array( 'left', 'inline', 'right', 'both-left','woo1'), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_header_make_transparent( $input ) {
    if ( in_array( $input, array( 'all', 'header', 'topbar', 'menu', 'all-border', 'none'), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_contact_options( $input ) {
    if ( in_array( $input, array( '1', '2', '3', '4', '5'), true ) ) {
        return $input;
    }
}

function million_shades_sanitize_social_options( $input ) {
    if ( in_array( $input, array( '1', '2', '3', '4', '5', '6','7','8'), true ) ) {
        return $input;
    }
}

 function million_shades_sanitize_topbar_style( $input ) {
    if ( in_array( $input, array( 'lefttopbar', 'righttopbar', 'centertopbar'), true ) ) {
        return $input;
    }
}

// Topbar Social Link target
 function million_shades_sanitize_social_link_target( $input ) {
    if ( in_array( $input, array( '_self', '_blank'), true ) ) {
        return $input;
    }
}


// Font style
function million_shades_sanitize_font_style( $input ) {
    if ( in_array( $input, array( 'normal', 'italic'), true ) ) {
        return $input;
    }
}

// sanatize text
function million_shades_sanitize_text2( $input ) {
    return wp_kses_post( force_balance_tags( esc_attr($input) ) );
}



function million_shades_sanitize_choices_array( $input ) {

 	$input = array_map( 'absint', $input );

    return $input;
}

function million_shades_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}



 


 
 	
		

	
	


