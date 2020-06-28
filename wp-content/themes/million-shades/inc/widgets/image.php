<?php

/**
 * Image widget
 *
 * @package Million Shades
 */
 
class Million_Shades_Background_Image extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'nl-bg-image', 'description' => __( 'Image.', 'million-shades') );
        parent::__construct(false, $name = __('MS P: Image', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'nl-bg-image';
		
		add_action( 'admin_enqueue_scripts', array( $this, 'million_shade_images_enqueue' ) );
		
		
    }
	
	/**
	 * Back-end widget form
	**/
	function form( $instance ) {
		
	
	$instance = wp_parse_args( (array) $instance);
	
		
		$image_url 	= isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';
		
		$img_display 	= isset( $instance['img_display'] ) ? esc_attr( $instance['img_display'] ) : '';
		$container_height 	= isset( $instance['container_height'] ) ? esc_attr( $instance['container_height'] ) : '';
		$img_size 	= isset( $instance['img_size'] ) ? esc_attr( $instance['img_size'] ) : '';
		$parallax_scroll 			= isset( $instance['parallax_scroll'] ) ? (bool) $instance['parallax_scroll'] : false;
	
	
	
	$image_repeat = array('no-repeat'=>__('no-repeat','million-shades'),'repeat'=>__('repeat','million-shades'));
	$image_size = array('auto'=>__('auto','million-shades'),'cover'=>__('cover','million-shades'),'contain'=>__('contain','million-shades'));
	
	 
	?>
	
		
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'container_height' ) ); ?>"><?php esc_html_e('Container Height:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'container_height' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'container_height' ) ); ?>" value="<?php echo esc_attr( $container_height ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('img_display')); ?>"><?php esc_html_e('Background Repeat:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('img_display')) ?>" id="<?php echo esc_attr($this->get_field_id('img_display')) ?> ">
             <?php foreach ($image_repeat as $key => $value) { ?>
	
					<option <?php echo ($img_display == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('img_size')); ?>"><?php esc_html_e('Background Size:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('img_size')) ?>" id="<?php echo esc_attr($this->get_field_id('img_size')) ?> ">
             <?php foreach ($image_size as $key => $value) { ?>
	
					<option <?php echo ($img_size == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
	
		
		<p><input class="checkbox" type="checkbox" <?php checked( $parallax_scroll ); ?> id="<?php echo esc_attr($this->get_field_id( 'parallax_scroll' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'parallax_scroll' )); ?>" />
		<label for="<?php echo esc_attr($this->get_field_id( 'parallax_scroll' )); ?>"><?php esc_html_e( 'Parallax Scroll?', 'million-shades' ); ?></label></p>
	
		<p>
			<label for="meta-image" class="nl-row-title"><?php esc_html_e( 'Background Image Upload', 'million-shades' )?></label>
				<br>
				
				<input class="widefat image_url_id" type="text" name="<?php echo esc_attr($this->get_field_name('image_url')) ?>" id="image_url_id1" value="<?php echo esc_attr($image_url) ?>">
		
				<input type="button" id="ms-image-uploader" class="ms-image-uploader"  value="<?php esc_html_e( 'Choose or Upload an Image', 'million-shades' )?>" />
		</p>
		
		
		
	<?php
	}
	
	/**
	 * Sanitize widget form values as they are saved
	**/
	
	function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		
		
		$instance['container_height'] = absint( $new_instance['container_height'] );
		
		$instance['img_display'] = million_shades_sanitize_img_repeat( $new_instance['img_display'] );
		$instance['img_size'] = million_shades_sanitize_img_sizes( $new_instance['img_size'] );
		
		$instance['image_url'] = esc_url_raw( $new_instance['image_url'] );
		$instance['parallax_scroll'] 		 = isset( $new_instance['parallax_scroll'] ) ? (bool) $new_instance['parallax_scroll'] : false;
		
		return $instance;
		
	}

	
	/**
	 * Front-end display of widget
	**/
	function widget( $args, $instance ) {
				
		extract( $args );

		$bg_image_src 	= isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';
		$img_display 	= isset( $instance['img_display'] ) ? esc_attr( $instance['img_display'] ) : '';
		$container_height 	= isset( $instance['container_height'] ) ? esc_attr( $instance['container_height'] ) : '';
		$img_size 	= isset( $instance['img_size'] ) ? esc_attr( $instance['img_size'] ) : '';
		$parallax_scroll 			= isset( $instance['parallax_scroll'] ) ? (bool) $instance['parallax_scroll'] : false;
	
		
		
		if ($bg_image_src == ''){
		$bg_image_src = get_template_directory_uri() . "/assets/1.jpg"; 
		$container_styles = 'background-image:url('.$bg_image_src.');';
		}
		
		if ($bg_image_src != ''){
		$bg_image_src = esc_url($bg_image_src);
		$container_styles = 'background-image:url('.$bg_image_src.');';
		}
		
		if ($container_height != ''){
		$container_styles .= 'height:'.intval($container_height).'px;';
		}
		
		$container_styles .= 'width:100%;';
		
		if ($img_display != ''){
		$container_styles .= "background-repeat:".esc_attr($img_display).";";
		}
	
		if ($img_size != ''){
		$container_styles .= "background-size:".esc_attr($img_size).";";
		}
	
		if ($parallax_scroll == "true" || $parallax_scroll == true ) {
      
    	$container_styles .= "background-attachment: fixed;";
    	$container_styles .= "background-position: center;";
         
		} 
		
			echo $before_widget;
		
		
			?>
        

	<div class="nl-bg-image" style="<?php echo esc_attr($container_styles); ?>"></div>
    
			
		
	    <?php 
		
		echo $after_widget;
		
	}

	



	public function million_shade_images_enqueue() {
   
        wp_enqueue_media();
		wp_register_script( 'million_shade_image_widget', get_template_directory_uri() . '/admin/imgloader.js', array( 'jquery' ) );
        wp_enqueue_script( 'million_shade_image_widget' );
 
    
	}



}



?>