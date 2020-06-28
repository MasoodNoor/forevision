<?php

/**
 * Shortcode Widget
 *
 * @package Million Shades
 */
 
class Million_Shades_Shortcode extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		
		$widget_ops = array('classname' => 'nl-shortcode', 'description' => __( 'Shortcode for contact form7 etc.', 'million-shades') );
        parent::__construct(false, $name = __('MS Shortcode', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'nl-shortcode';
		
		
    }

	/**
	 * Front-end display of widget
	**/
	public function widget( $args, $instance ) {
				
		extract( $args );

		
		$shortcodes   	= isset( $instance['shortcodes'] ) ?  $instance['shortcodes'] : '';
		$extra_class   	= isset( $instance['extra_class'] ) ? esc_attr( $instance['extra_class'] ) : '';
		$id   	= isset( $instance['id'] ) ? esc_attr( $instance['id'] ) : '';
		$id   	= 'cf7_custom_style_4';
		echo $before_widget;
		
		
		?>
		
	
			<div id="<?php echo esc_attr($id); ?>" class="nl-shortcode <?php echo esc_attr($extra_class); ?>">
				<?php echo do_shortcode($shortcodes);?>
			</div>
		
		<?php
		echo $after_widget;
		
	}

	/**
	 * Sanitize widget form values as they are saved
	**/
	
	public function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		
		
		$instance['shortcodes'] = sanitize_text_field( $new_instance['shortcodes'] );
		$instance['id'] = sanitize_text_field( $new_instance['id'] );
		$instance['extra_class'] = sanitize_text_field( $new_instance['extra_class'] );
		
		
		

		return $instance;
		
	}

	/**
	 * Back-end widget form
	**/
	public function form( $instance ) {
	
	
	$shortcodes   	= isset( $instance['shortcodes'] ) ? esc_attr( $instance['shortcodes'] ) : '';
	$extra_class   	= isset( $instance['extra_class'] ) ? esc_attr( $instance['extra_class'] ) : '';
	$id   	= isset( $instance['id'] ) ? esc_attr( $instance['id'] ) : '';
	
	?>
	
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'shortcodes' ) ); ?>"><?php esc_html_e('Shortcodes:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'shortcodes' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'shortcodes' ) ); ?>" value="<?php echo esc_attr( $shortcodes ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'extra_class' ) ); ?>"><?php esc_html_e('Extra Class:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'extra_class' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'extra_class' ) ); ?>" value="<?php echo esc_attr( $extra_class ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>"><?php esc_html_e('id:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'id' ) ); ?>" value="<?php echo esc_attr( $id ); ?>" 
			class="widefat" />
		</p>
		
		
		
	
		
		
		
	<?php
	}
	
	
	

}



?>