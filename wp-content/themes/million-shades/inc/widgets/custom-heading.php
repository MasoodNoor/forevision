<?php

/**
 * Custom Heading or text
 *
 * @package Million Shades
 */
 
class Million_Shades_Custom_Heading extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		
		$widget_ops = array('classname' => 'custom-heading', 'description' => __( 'Custom Heading or text for so page builder', 'million-shades') );
        parent::__construct(false, $name = __('MS P: Heading or text', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'custom-heading';
		
		
    }

	/**
	 * Front-end display of widget
	**/
	public function widget( $args, $instance ) {
				
		extract( $args );

		
		
		
		$heading   	= isset( $instance['heading'] ) ? esc_html( $instance['heading'] ) : 'I am heading or text';
		$tag   	= isset( $instance['tag'] ) ? esc_attr( $instance['tag'] ) : '';
		$text_color   	= isset( $instance['text_color'] ) ? esc_attr( $instance['text_color'] ) : '';
		
		$separator_width   	= isset( $instance['separator_width'] ) ? esc_attr( $instance['separator_width'] ) : '15';
		$separator_hide   	= isset( $instance['separator_hide'] ) ? esc_attr( $instance['separator_hide'] ) : '';
		$align   	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$separator_color   	= isset( $instance['separator_color'] ) ? esc_attr( $instance['separator_color'] ) : '';
		$separator_border_width   	= isset( $instance['separator_border_width'] ) ? esc_attr( $instance['separator_border_width'] ) : '1';
		$sep_margin_top   	= isset( $instance['sep_margin_top'] ) ? esc_attr( $instance['sep_margin_top'] ) : '3';
		$accent = million_shades_get_accent_color_mod();
		
		 $separator_styles = '';
		if ($separator_hide == 'hide'){
		 $separator_styles .= "display:none;";
		}
		
		if($separator_width == "") {
            $separator_styles .= "width:15%;";
        }
		if($separator_width != "") {
            $separator_styles .= "width: ".intval($separator_width)."%;";
        }
		
	
		if ($align == 'left'){
		
			$separator_styles .= "left:0%;";
		}
	 
		if ($align == 'center'){
			$separator_w = 100 - intval($separator_width);
			$separator_l = intval($separator_w)/2;
			$separator_styles .= "left:".intval($separator_l)."%;";
		}
	
		if ($align == 'right'){
			$separator_w = 100 - intval($separator_width);
			$separator_styles .= "left:".intval($separator_w)."%;";
		}
		
		 if($separator_color == "") {
            
          $separator_styles .= "border-color: ".esc_attr($accent).";";
		  $separator_styles .= "border-style:solid;";
		  
	  
       }
	  
	  if($separator_border_width == "") {
           
	   $separator_styles .= "border-width: 1px;";
	    $separator_styles .= "border-style:solid;";
	   }
	   
	    if($separator_border_width != "") {
           
	     $separator_styles .= "border-style:solid;";
		  $separator_styles .= "border-width: ".intval($separator_border_width)."px;";
	   }
			
	    if($separator_color != "") {
            
          $separator_styles .= "border-color: ".esc_attr($separator_color).";";
		
	  
       }
	   
	    if($sep_margin_top != "") {
            
          $separator_styles .= "margin-top: ".intval($sep_margin_top)."px;";
		}
		$styles ='';
		if($text_color != "") {
		$styles = "color:".esc_attr($text_color).";";
		}
		
		if($tag == "") {
		$tag = "h3;";
		}
		
		
		$container_styles = "text-align:".esc_attr($align).";";
		
		echo $before_widget;
		
		
		?>
		
		<div class="widget-heading" 
			style="<?php echo esc_attr($container_styles); ?>">
		    
			<<?php echo esc_attr($tag); ?> class="font-heading" style="<?php echo esc_attr($styles); ?>">
				<?php echo esc_html($heading); ?>
			</<?php echo esc_attr($tag); ?>>
		<div class="separator" style="<?php echo esc_attr($separator_styles); ?>"></div>
		</div>
		
		<?php
		echo $after_widget;
		
	}

	/**
	 * Sanitize widget form values as they are saved
	**/
	
	public function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		
		
		$instance['tag'] = million_shades_sanitize_title_tag( $new_instance['tag'] );
		$instance['heading'] = sanitize_text_field( $new_instance['heading'] );
		$instance['text_color'] = sanitize_hex_color( $new_instance['text_color'] );
		$instance['align'] = million_shades_sanitize_four_options( $new_instance['align'] );
		
		$instance['separator_hide'] = million_shades_sanitize_show_hide( $new_instance['separator_hide'] );
		$instance['separator_width'] = absint( $new_instance['separator_width'] );
		
		$instance['separator_color'] = sanitize_hex_color( $new_instance['separator_color'] );
		
		$instance['separator_border_width'] = absint( $new_instance['separator_border_width'] );
		$instance['sep_margin_top'] = absint( $new_instance['sep_margin_top'] );
		

		return $instance;
		
	}

	/**
	 * Back-end widget form
	**/
	public function form( $instance ) {
		
		
		
		
	$instance = wp_parse_args( (array) $instance);
	
	
	$widget_align = array('left'=>__('Left','million-shades'),'center'=>__('Center','million-shades'),
	'right'=>__('Right','million-shades'),'justify'=>__('Justify','million-shades'));
	
	$tagArray = array('h3'=>__('H3','million-shades'),'h1'=>__('H1','million-shades'),
	'h2'=>__('H2','million-shades'),'h4'=>__('H4','million-shades'),'h5'=>__('H5','million-shades'),
	'span'=>__('span','million-shades'));
	
	
	$sep_shows = array('hide'=>__('Hide','million-shades'),'show'=>__('Show','million-shades'));
		
	
	
		$heading   	= isset( $instance['heading'] ) ? esc_html( $instance['heading'] ) : 'I am heading or text';
		$tag   	= isset( $instance['tag'] ) ? esc_attr( $instance['tag'] ) : '';
		$text_color   	= isset( $instance['text_color'] ) ? esc_attr( $instance['text_color'] ) : '';
		
		$separator_width   	= isset( $instance['separator_width'] ) ? esc_attr( $instance['separator_width'] ) : '15';
		$separator_hide   	= isset( $instance['separator_hide'] ) ? esc_attr( $instance['separator_hide'] ) : '';
		$align   	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$separator_color   	= isset( $instance['separator_color'] ) ? esc_attr( $instance['separator_color'] ) : '';
		$separator_border_width   	= isset( $instance['separator_border_width'] ) ? esc_attr( $instance['separator_border_width'] ) : '1';
		$sep_margin_top   	= isset( $instance['sep_margin_top'] ) ? esc_attr( $instance['sep_margin_top'] ) : '3';
		
	?>
	
	
		
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>"><?php esc_html_e('Heading:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'heading' ) ); ?>" value="<?php echo esc_attr( $heading ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('tag')); ?>"><?php esc_html_e('Tag:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('tag')) ?>" id="<?php echo esc_attr($this->get_field_id('tag')) ?> ">
             <?php foreach ($tagArray as $key => $value) { ?>
	
					<option <?php echo ($tag == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'text_color' ) ); ?>"><?php esc_html_e('Text Color:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'text_color' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'text_color' ) ); ?>" value="<?php echo esc_attr( $text_color ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('align')); ?>"><?php esc_html_e('Align:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('align')) ?>" id="<?php echo esc_attr($this->get_field_id('align')) ?> ">
             <?php foreach ($widget_align as $key => $value) { ?>
	
					<option <?php echo ($align == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('separator_hide')); ?>"><?php esc_html_e('Separator Show/Hide:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('separator_hide')) ?>" id="<?php echo esc_attr($this->get_field_id('separator_hide')) ?> ">
             <?php foreach ($sep_shows as $key => $value) { ?>
	
					<option <?php echo ($separator_hide == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'separator_width' ) ); ?>"><?php esc_html_e('Separator Width(%):', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'separator_width' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'separator_width' ) ); ?>" value="<?php echo esc_attr( $separator_width ); ?>" 
			class="widefat" />
		</p>

		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'separator_border_width' ) ); ?>"><?php esc_html_e('Separator Height(px):', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'separator_border_width' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'separator_border_width' ) ); ?>" value="<?php echo esc_attr( $separator_border_width ); ?>" 
			class="widefat" />
		</p>
		
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'separator_color' ) ); ?>"><?php esc_html_e('Separator Color:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'separator_color' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'separator_color' ) ); ?>" value="<?php echo esc_attr( $separator_color ); ?>" 
			class="widefat" />
		</p>
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'sep_margin_top' ) ); ?>"><?php esc_html_e('Separator Margin Top(px):', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'sep_margin_top' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'sep_margin_top' ) ); ?>" value="<?php echo esc_attr( $sep_margin_top ); ?>" 
			class="widefat" />
		</p>
		
		<script type='text/javascript'>
    jQuery(document).ready(function($) {
		
        $('#<?php echo esc_attr( $this->get_field_id( 'text_color' ) ); ?>').wpColorPicker();
		 $('#<?php echo esc_attr( $this->get_field_id( 'separator_color' ) ); ?>').wpColorPicker();
		
    });
	</script>
		
		
		
	<?php
	}
	
	
	

}



?>