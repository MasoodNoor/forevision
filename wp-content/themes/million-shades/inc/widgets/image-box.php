<?php

/**
 * Image Box widget
 *
 * @package Million Shades
 */
 
class Million_Shades_Image_Box extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'image-box', 'description' => __( 'Image Box.', 'million-shades') );
        parent::__construct(false, $name = __('MS Image Box', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'image-box';
		
		
		
    }
	
	function form($instance) {
		
		
	$instance = wp_parse_args( (array) $instance);
	
	$widget_align = array('center'=>__('Center','million-shades'),'left'=>__('Left','million-shades'));
		
	$widget_style = array('none'=>__('None','million-shades'),'style1'=>__('Style1','million-shades'),'style2'=>__('Style2','million-shades'),'style3'=>__('Style3','million-shades'),'style4'=>__('Style4','million-shades'));
	
		
		$title	= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';	
		$height	= isset( $instance['height'] ) ? esc_attr( $instance['height'] ) : '250';
		$width	= isset( $instance['width'] ) ? esc_attr( $instance['width'] ) : '250';
		
		$style = isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		$image_url 	= isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';
		$button_url 	= isset( $instance['button_url'] ) ? esc_url( $instance['button_url'] ) : '';
		$align 	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$button_text 	= isset( $instance['button_text'] ) ? esc_html( $instance['button_text'] ) : '';
		$feature_text 	= isset( $instance['feature_text'] ) ? esc_html( $instance['feature_text'] ) : '';
		
	
	?>
		<p>
			<label for="meta-image" class="nl-row-title"><?php esc_html_e( 'Author Image Upload', 'million-shades' )?></label>
				<br>
				
				<input class="widefat image_url_id" type="text" name="<?php echo esc_attr($this->get_field_name('image_url')) ?>" id="image_url_id1" value="<?php echo esc_url($image_url) ?>">
		
				<input type="button" id="ms-image-uploader1" class="ms-image-uploader"  value="<?php esc_html_e( 'Choose or Upload an Image', 'million-shades' )?>" />
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'height' ) ); ?>"><?php esc_html_e('Image Height:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'height' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'height' ) ); ?>" value="<?php echo esc_attr( $height ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>"><?php esc_html_e('Image Width:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'width' ) ); ?>" value="<?php echo esc_attr( $width ); ?>" 
			class="widefat" />
		</p>

		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" 
			class="widefat" />
		</p>

		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'feature_text' ) ); ?>"><?php esc_html_e('Text:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'feature_text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'feature_text' ) ); ?>" value="<?php echo esc_attr( $feature_text ); ?>" 
			class="widefat" />
		</p>
	
  
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'button_text' ) ); ?>"><?php esc_html_e('Button Text:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'button_text' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'button_text' ) ); ?>" value="<?php echo esc_attr( $button_text ); ?>" 
			class="widefat" />
		</p>
			<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'button_url' ) ); ?>"><?php esc_html_e('Button Url:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'button_url' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'button_url' ) ); ?>" value="<?php echo esc_attr( $button_url ); ?>" 
			class="widefat" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('align')); ?>"><?php esc_html_e('Widget Align:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('align')) ?>" id="<?php echo esc_attr($this->get_field_id('align')) ?> ">
             <?php foreach ($widget_align as $key => $value) { ?>
	
					<option <?php echo ($align == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('style')); ?>"><?php esc_html_e('Widget Style:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('style')) ?>" id="<?php echo esc_attr($this->get_field_id('style')) ?> ">
             <?php foreach ($widget_style as $key => $value) { ?>
	
					<option <?php echo ($style == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
	<?php
	}

	function update($new_instance, $old_instance) {
		
		$instance = $old_instance;
		
		
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['style'] = million_shades_sanitize_widget_style( $new_instance['style'] );
		$instance['align'] = million_shades_sanitize_widget_align( $new_instance['align'] );
		$instance['feature_text'] = sanitize_text_field( $new_instance['feature_text'] );
		$instance['image_url'] = esc_url_raw( $new_instance['image_url'] );
		$instance['button_url'] = esc_url_raw( $new_instance['button_url'] );
		$instance['button_text'] = sanitize_text_field( $new_instance['button_text'] );
		
		$instance['height'] = absint( $new_instance['height'] );
		$instance['width'] = absint( $new_instance['width'] );
		
		
		  
		return $instance;
	}
	
	function widget($args, $instance) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		extract($args);

		$title     			= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';		
		$style 		= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		$image_url 	= isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';
		$button_url 	= isset( $instance['button_url'] ) ? esc_url( $instance['button_url'] ) : '';
		$align 	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$button_text 	= isset( $instance['button_text'] ) ? esc_html( $instance['button_text'] ) : '';
		$feature_text 	= isset( $instance['feature_text'] ) ? esc_html( $instance['feature_text'] ) : '';
		$height 	= isset( $instance['height'] ) ? esc_attr( $instance['height'] ) : '250';
		$width 	= isset( $instance['width'] ) ? esc_attr( $instance['width'] ) : '250';
		
		
		$image_styles ='';
		if ($align == 'center'){
		$container_styles = "text-align:center;";
		}
		if ($align == 'left'){
		$container_styles = "text-align:left;";
		}
		
		if ($image_url == ''){
			
		$image_url = get_template_directory_uri() . "/assets/images/placeholder.jpg"; 
		
		} else {
		
		$image_url = esc_url($image_url);
		
		}
		
		if ($height != ''){
		$image_styles .= "height:".intval($height)."px;";
		}
		if ($width != ''){
		$image_styles .= "width:".intval($width)."px;";
		}
		
		echo $args['before_widget'];

		
?>
        <div class="image-box <?php echo esc_attr($style); ?>" style="<?php echo esc_attr($container_styles) ?>">
	
				<?php if ($image_url){ ?>
					<a href="" target="_self" >
						<img   alt="Image Box" src="<?php echo esc_url($image_url); ?>" style="<?php echo esc_attr($image_styles) ?>" /></a>
				<?php } ?>
	
				<div class="image-box-cta">
					<?php if ($title){ ?>
						<h3 class="nl-widget-title"><?php echo esc_html($title); ?></h3>
					<?php } ?>	
					<?php if ($feature_text){ ?>
						<span class="nl-widget-sub-title"><?php echo esc_html($feature_text);?></span>
					<?php } ?>	
			
						<?php if( !empty($button_text)) { ?>
							<div class="read-more-btn">
								<a href="<?php echo esc_url($button_url);?>">
								<?php echo esc_html($button_text); ?> 
								</a>
							</div>
						<?php } ?>
				</div>
		
   
	</div>
	<?php

		echo $args['after_widget'];

	}
	
	
	
}

