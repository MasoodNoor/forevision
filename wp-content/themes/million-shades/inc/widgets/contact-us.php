<?php

/**
 * Contact Us
 *
 * @package Million Shades
 */

class Million_Shades_Contacts_Widget extends WP_Widget {
   
   
   public function __construct() {
	   
		$widget_ops = array('classname' => 'widget-contacts', 'description' => __( 'Get your contacts.', 'million-shades') );
        parent::__construct(false, $name = __('MS Contacts', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'contacts_widget';
		
    }
    
  

   function form($instance) {

		 
		$instance = wp_parse_args( (array) $instance); 
		 
		$title     			= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';		
		$address 		= isset( $instance['address'] ) ? esc_html( $instance['address'] ) : '';
		
		$phoneno 	= isset( $instance['phoneno'] ) ? esc_html( $instance['phoneno'] ) : '';
		$phoneno2 	= isset( $instance['phoneno2'] ) ? esc_html( $instance['phoneno2'] ) : '';
		$email 	= isset( $instance['email'] ) ? esc_html( $instance['email'] ) : '';
		$text_font_size 	= isset( $instance['text_font_size'] ) ? esc_attr( $instance['text_font_size'] ) : '12';
		$text_font_weight 	= isset( $instance['text_font_weight'] ) ? esc_attr( $instance['text_font_weight'] ) : '12';
		
	?>

	<p>
	<label for="<?php echo esc_attr( $this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'million-shades'); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title')); ?>" 
	name="<?php echo esc_attr( $this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
	</p>

	
	
	<p><label for="<?php echo esc_attr( $this->get_field_id( 'address' )); ?>"><?php esc_html_e( 'Enter Address', 'million-shades' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'address' )); ?>" name="<?php echo esc_attr( $this->get_field_name( 'address' )); ?>" type="text" value="<?php echo esc_attr($address); ?>" size="3" />
	</p>
	
	<p><label for="<?php echo esc_attr( $this->get_field_id( 'phoneno' )); ?>"><?php esc_html_e( 'Enter phone number', 'million-shades' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phoneno' )); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phoneno' )); ?>" type="text" value="<?php echo esc_attr($phoneno); ?>" size="3" />
	</p>
	
	<p><label for="<?php echo esc_attr($this->get_field_id( 'phoneno2' )); ?>"><?php esc_html_e( 'Enter phone number2', 'million-shades' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phoneno2' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'phoneno2' )); ?>" type="text" value="<?php echo esc_attr($phoneno2); ?>" size="3" /></p>

	<p><label for="<?php echo esc_attr( $this->get_field_id( 'email' )); ?>"><?php esc_html_e( 'Enter email address', 'million-shades' ); ?></label>
	
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'email' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'email' )); ?>" type="text" value="<?php echo esc_attr($email); ?>" size="3" /></p>	
	
	<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'text_font_size' ) ); ?>"><?php esc_html_e('Text Font Size:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'text_font_size' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'text_font_size' ) ); ?>" value="<?php echo esc_attr( $text_font_size ); ?>" 
			class="widefat" />
	</p>
		
	<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'text_font_weight' ) ); ?>"><?php esc_html_e('Text Font Weight:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'text_font_weight' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'text_font_weight' ) ); ?>" value="<?php echo esc_attr( $text_font_weight ); ?>" 
			class="widefat" />
	</p>
	
		
	
	<?php
	}

	function update($new_instance, $old_instance) {
		
		$instance = $old_instance;
		
		$instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['address'] = sanitize_text_field($new_instance['address']);
		$instance['phoneno'] = sanitize_text_field($new_instance['phoneno']);
		$instance['phoneno2'] = sanitize_text_field($new_instance['phoneno2']);
		$instance['email'] = sanitize_email($new_instance['email']);
		$instance['text_font_size'] = absint( $new_instance['text_font_size'] );
		$instance['text_font_weight'] = absint( $new_instance['text_font_weight'] );
	
		return $instance;
	}
		
	function widget($args, $instance) {
		
		extract($args);
         $text_styles = '';
		 $container_styles = '';
		 $icon_styles = '';
		
		
		$title	= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';
		$address   	= isset( $instance['address'] ) ? esc_html( $instance['address'] ) : '';
		$phoneno   	= isset( $instance['phoneno'] ) ? esc_html( $instance['phoneno'] ) : '';
		$phoneno2   	= isset( $instance['phoneno2'] ) ? esc_html( $instance['phoneno2'] ) : '';
		$email   	= isset( $instance['email'] ) ? esc_html( $instance['email'] ) : '';
		
		$text_font_size   	= isset( $instance['text_font_size'] ) ? esc_attr( $instance['text_font_size'] ) : '12';
		$text_font_weight   	= isset( $instance['text_font_weight'] ) ? esc_attr( $instance['text_font_weight'] ) : '12';
		
	
 
		if($text_font_size != "") {
            $text_styles .= "font-size: ".intval($text_font_size)."px;";
        }

		if($text_font_weight != "") {
            $text_styles .= "font-weight: ".intval($text_font_weight).";";
		}

		
		echo $before_widget;
		if ( ! empty( $title ) ) {
				
				echo $before_title.esc_html($title).$after_title;
				
			}
		?>

	<div class= "widget-contacts-body hvr-contact" style="<?php echo esc_attr($container_styles);?>">
		<?php
		if( ($address) ) { ?>
			
			<span style="<?php echo esc_attr($text_styles);?>"><i style="<?php echo esc_attr($icon_styles);?>" class="fa fa-home"></i> <?php echo esc_html($address);?></span>
			 <?php
		}
		 if( ($phoneno) ) { ?>
			
			<span style="<?php echo esc_attr($text_styles);?>"><i style="<?php echo esc_attr($icon_styles);?>" class="fa fa-phone"></i> <?php  echo esc_html($phoneno); ?></span>
			<?php
		}
		 if( ($phoneno2) ) { ?>
			
			<span style="<?php echo esc_attr($text_styles);?>"><i style="<?php echo esc_attr($icon_styles);?>" class="fa fa-phone"></i><?php  echo esc_html($phoneno2); ?></span> 
			<?php
		}
		if( ($email) ) { ?>
			
			<span ><i style="<?php echo esc_attr($icon_styles);?>" class="fa fa-envelope"></i>
			<a style="<?php echo esc_attr($text_styles);?>" class="contact-email" href="mailto:<?php echo esc_attr($email); ?> "><?php  echo esc_html($email);  ?> </a></span>
			  <?php
		}	?>			
	</div> 
	<?php
		echo $after_widget;
   }
}


