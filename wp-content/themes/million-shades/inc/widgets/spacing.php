<?php


/**
 * Spacing Widget
 *
 * @package Million Shades
 */
 
class Million_Shades_Spacing extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'nl_spacing', 'description' => __( 'Spacidng.', 'million-shades') );
        parent::__construct(false, $name = __('MS P: Spacing', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'nl_spacing';
		
    }
	
	/**
	 * Back-end widget form
	**/
	function form( $instance ) {
		
	
	
	$hide_mobs = array('yes'=>__('Yes','million-shades'),'no'=>__('No','million-shades'));
		
	
		$elem_height   	= isset( $instance['elem_height'] ) ? esc_attr( $instance['elem_height'] ) : '';
		$elem_bg_color   	= isset( $instance['elem_bg_color'] ) ? esc_attr( $instance['elem_bg_color'] ) : '';
		$hide_mob   	= isset( $instance['hide_mob'] ) ? esc_attr( $instance['hide_mob'] ) : '';
		
	?>

		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'elem_height' ) ); ?>"><?php esc_html_e('Height:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'elem_height' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'elem_height' ) ); ?>" value="<?php echo esc_attr( $elem_height ); ?>" 
			class="widefat" />
		</p>

		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'elem_bg_color' ) ); ?>"><?php esc_html_e('Background Color:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'elem_bg_color' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'elem_bg_color' ) ); ?>" value="<?php echo esc_attr( $elem_bg_color ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('hide_mob')); ?>"><?php esc_html_e('Hide on Mobile:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('hide_mob')) ?>" id="<?php echo esc_attr($this->get_field_id('hide_mob')) ?> ">
             <?php foreach ($hide_mobs as $key => $value) { ?>
	
					<option <?php echo ($hide_mob == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		
		
		
	<script type='text/javascript'>
    jQuery(document).ready(function($) {
		
        $('#<?php echo esc_attr( $this->get_field_id( 'elem_bg_color' ) ); ?>').wpColorPicker();
		
    });
	</script>
	
		
	<?php
	}

	
	/**
	 * Sanitize widget form values as they are saved
	**/
	
	function update ($new_instance, $old_instance) {
		$instance = $old_instance;
	
		$instance['elem_height'] = absint( $new_instance['elem_height'] );
		$instance['elem_bg_color'] = sanitize_text_field( $new_instance['elem_bg_color'] );
		$instance['hide_mob'] = million_shades_sanitize_yes_no( $new_instance['hide_mob'] );
	
	
		return $instance;
		
	}
	
	/**
	 * Front-end display of widget
	**/
	function widget( $args, $instance ) {
				
		extract( $args );

		$elem_height   	= isset( $instance['elem_height'] ) ? esc_attr( $instance['elem_height'] ) : '';
		$elem_bg_color   	= isset( $instance['elem_bg_color'] ) ? esc_attr( $instance['elem_bg_color'] ) : '';
		$hide_mob   	= isset( $instance['hide_mob'] ) ? esc_attr( $instance['hide_mob'] ) : '';
		
		$container_styles = '';
		
		
		if ($elem_height != ''){
	
		$container_styles .= "height:".intval($elem_height)."px;";

		}
		
		if ($elem_bg_color != ''){
	
		$container_styles .= "background-color:".esc_attr($elem_bg_color).";";

		}
		
		if ($hide_mob == 'yes'){
			$hide_mob = 'space_hide_mob';
		}else {
			$hide_mob = 'space_show_mob';
		}
		
			echo $before_widget;
		
		
			?>
      
						<div class="spacing <?php echo esc_attr($hide_mob); ?>" style="<?php echo esc_attr($container_styles); ?>"></div>
		
	    <?php 
		
		echo $after_widget;
		
	}

	

	
}



?>