<?php

/**
 * Author Box
 *
 * @package Million Shades
 */
class Million_Shades_Author_Box extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'author-box', 'description' => __( 'Author Box.', 'million-shades') );
        parent::__construct(false, $name = __('MS Author Box ', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'author-box';
		add_action( 'admin_enqueue_scripts', array( $this, 'million_shade_image_upload_enqueue' ) );
		
		
		
    }

	/**
	 * Front-end display of widget
	**/
	public function widget( $args, $instance ) {
				
		extract( $args );

	
		
		$title   	= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';
		
		$height	= isset( $instance['height'] ) ? esc_attr( $instance['height'] ) : '250';
		$width     			= isset( $instance['width'] ) ? esc_attr( $instance['width'] ) : '250';
		$align   	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$author_text   	= isset( $instance['author_text'] ) ? esc_html( $instance['author_text'] ) : '';
		$image_url   	= isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';
		$icon_bg_color   	= isset( $instance['icon_bg_color'] ) ? esc_attr( $instance['icon_bg_color'] ) : '';
		$author_position   	= isset( $instance['author_position'] ) ? esc_html( $instance['author_position'] ) : '';
		
		$icon0   	= isset( $instance['social_icon0'] ) ? esc_attr( $instance['social_icon0'] ) : '';
		$icon1   	= isset( $instance['social_icon1'] ) ? esc_attr( $instance['social_icon1'] ) : '';
		$icon2   	= isset( $instance['social_icon2'] ) ? esc_attr( $instance['social_icon2'] ) : '';
		$icon3   	= isset( $instance['social_icon3'] ) ? esc_attr( $instance['social_icon3'] ) : '';
		
		
		$url0   	= isset( $instance['social_url0'] ) ? esc_attr( $instance['social_url0'] ) : '';
		$url1   	= isset( $instance['social_url1'] ) ? esc_attr( $instance['social_url1'] ) : '';
		$url2   	= isset( $instance['social_url2'] ) ? esc_attr( $instance['social_url2'] ) : '';
		$url3   	= isset( $instance['social_url3'] ) ? esc_attr( $instance['social_url3'] ) : '';
		
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
			
		
		$icon_styles ='';
		$icon_span_styles ='';
		if ($icon_bg_color != ''){
		$icon_styles .= "background-color:".$icon_bg_color.";";
		}
		$icon_styles .= "text-align:center;";
		
		$icon_styles .= "border-radius:50%;";
		
        $icon_span_styles .= "font-size:36px;";
		$icon_span_styles .= "line-height:72px;";
		
		if ($align == 'center'){
			
		$wrap_styles = "text-align:center;";
		
		$cta_styles = "text-align:center;";
		$icon_container_styles = "text-align:center;";
		
		}
		
		if ($align == 'left'){
			
		$wrap_styles = "text-align:left;";
		
		$cta_styles = "text-align:left;";
		$icon_container_styles = "text-align:left;";
		$icon_container_styles .= "padding-left:10px;";
		$cta_styles .= "padding-left:10px;";
		
		
		}
		if ($image_url == ''){
			
		$image_url = get_template_directory_uri() . "/assets/images/dummy-image.jpg"; 
		
		} else {
		
		$image_url = esc_url($image_url);
		
		}
		
		$image_styles ='';
		if ($height != ''){
		$image_styles .= "height:".intval($height)."px;";
		}
		if ($width != ''){
		$image_styles .= "width:".intval($width)."px;";
		}
		$target = '_blank';
		
		echo $before_widget;

			?>
   
<div class="author-box <?php echo esc_attr($style) ?>">
	
	<div class="image_wrap_border_style" style="<?php echo esc_attr($wrap_styles) ?>"  >

		<?php if ($image_url){ ?>
			<div>
			<a href="" target="_self" >
				<img   alt="Author Box" src="<?php echo esc_url($image_url); ?>" style="<?php echo esc_attr($image_styles); ?>"/></a>
			</div>
			<?php } ?>
			
			<div id="hash" class="social-icon-widget hvr-icon" style="<?php echo esc_attr($icon_container_styles);?>">
			<?php
			if( ($icon0!='default') ) { ?>
				<div class="icon" style="<?php echo esc_attr($icon_styles);?>">
		
					<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url0); ?>">
					<i id="hash4" class="fa <?php echo esc_attr($icon0); ?>"></i></a>
		
				</div>
			<?php
			}
			
				if( ($icon1 !='default') ) { ?>
				<div class="icon" style="<?php echo esc_attr($icon_styles);?>">
		
					<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url1); ?>">
					<i id="hash1" class="fa <?php echo esc_attr($icon1); ?>"></i></a>
		
				</div>
			<?php
			}
			if( ($icon2!='default') ) { ?>
				<div class="icon" style="<?php echo esc_attr($icon_styles);?>">
		
					<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url2); ?>">
					<i id="hash2" class="fa <?php echo esc_attr($icon2); ?>"></i></a>
		
				</div>
			<?php
			}
			if( ($icon3!='default') ) { ?>
				<div class="icon" style="<?php echo esc_attr($icon_styles);?>">
		
					<a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($url3); ?>">
					<i id="hash3" class="fa <?php echo esc_attr($icon3); ?>"></i></a>
		
				</div>
			<?php
			}
			
			?>
			</div>
			
			<div class="author-box-cta" style="<?php echo esc_attr($cta_styles); ?>">
	
				<?php if ($title){ ?>
					<h3 class="nl-widget-title"><?php echo esc_html($title); ?></h3>
				<?php } ?>
				
				<?php if ($author_position){ ?>
					<div class="nl-widget-position"><?php echo esc_html($author_position);?></div>
				<?php } ?>
				
				<?php if ($author_text){ ?>
					<div class="image-txt"><?php echo esc_html($author_text);?></div>
				<?php } ?>
			
			</div>
	</div>
   
</div>
			
		
	    <?php 
		
		echo $after_widget;
		
	}

	/**
	 * Sanitize widget form values as they are saved
	**/
	
	public function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['style'] = million_shades_sanitize_widget_style( $new_instance['style'] );
		
		$instance['height'] = absint( $new_instance['height'] );
		$instance['width'] = absint( $new_instance['width'] );
 
		
		$instance['author_text'] = sanitize_text_field( $new_instance['author_text'] );
		$instance['author_position'] = sanitize_text_field( $new_instance['author_position'] );
		$instance['image_url'] = esc_url_raw( $new_instance['image_url'] );
		$instance['icon_bg_color'] = sanitize_hex_color( $new_instance['icon_bg_color'] );
		
		for ( $i = 0; $i <= 3; $i ++ ) {
			
		$instance['social_icon'.$i] =  sanitize_text_field($new_instance['social_icon'.$i]);
 
		$instance['social_url'.$i] = esc_url_raw( $new_instance['social_url'.$i]);
			
		}
	
		$instance['align'] = million_shades_sanitize_widget_align( $new_instance['align'] );
		return $instance;
		
	}

	/**
	 * Back-end widget form
	**/
	public function form( $instance ) {
		
	
	
	
	
	$fa_icons_array = million_shades_fontawesome_social_list();
	
	$widget_align = array('center'=>__('Center','million-shades'),'left'=>__('Left','million-shades'));
		
	$widget_style = array('style1'=>__('Style1','million-shades'),'style2'=>__('Style2','million-shades'),'style3'=>__('Style3','million-shades'),'style4'=>__('Style4','million-shades'),'none'=>__('None','million-shades'));
	
	
		$title   	= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';
		$align   	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$author_text   	= isset( $instance['author_text'] ) ? esc_html( $instance['author_text'] ) : '';
		$image_url   	= isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';
		$icon_bg_color   	= isset( $instance['icon_bg_color'] ) ? esc_attr( $instance['icon_bg_color'] ) : '';
		$author_position   	= isset( $instance['author_position'] ) ? esc_html( $instance['author_position'] ) : '';
		$height     			= isset( $instance['height'] ) ? esc_attr( $instance['height'] ) : '250';
		$width     			= isset( $instance['width'] ) ? esc_attr( $instance['width'] ) : '250';
		
		
		for ( $i = 0; $i <= 3; $i ++ ) {
			$social_icon[] = isset( $instance['social_icon'.$i] ) ? esc_attr( $instance['social_icon'.$i] ) : '';
 
			$social_urls[] = isset( $instance['social_url'.$i] ) ? esc_attr( $instance['social_url'.$i] ) : '';
		}
		
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
	?>
	
		
		
		<p>
			<label for="meta-image" class="nl-row-title"><?php esc_html_e( 'Author Image Upload', 'million-shades' )?></label>
				<br>
				
				<input class="widefat image_url_id" type="text" name="<?php echo esc_attr($this->get_field_name('image_url')) ?>" id="image_url_id1" value="<?php echo esc_attr($image_url) ?>">
		
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
		
		<?php   for ( $i = 0; $i <= 3; $i ++ ) { ?>
		
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('social_icon'.$i)); ?>"><?php esc_html_e('social Icon :', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('social_icon'.$i)) ?>" id="<?php echo esc_attr($this->get_field_id('social_icon'.$i)) ?> ">
				<?php foreach ($fa_icons_array as $key => $value) { ?>
	
					<option <?php echo ($social_icon[$i] == $key ) ? ' selected="selected"' : ''; ?> 
					value="<?php echo esc_attr( $key ); ?>"><?php 
					echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
  
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('social_url'.$i)); ?>"><?php esc_html_e('social url :', 'million-shades'); ?></label>
			<input class="widefat" type="text" name="<?php echo esc_attr($this->get_field_name('social_url'.$i)) ?>" id="<?php echo esc_attr($this->get_field_id('social_url'.$i)); ?> " value="<?php echo esc_url($social_urls[$i]); ?>">
		</p>
		<?php } ?>
 
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'icon_bg_color' ) ); ?>"><?php esc_html_e('Icon Background Color:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'icon_bg_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon_bg_color' ) ); ?>" value="<?php echo esc_attr( $icon_bg_color ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Author Name:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" 
			class="widefat" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'author_position' ) ); ?>">
			<?php esc_html_e('Author Position:', 'million-shades'); ?></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'author_position' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'author_position' ) ); ?>" value="<?php echo esc_attr( $author_position); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'author_text' ) ); ?>">
			<?php esc_html_e('Author Text:', 'million-shades'); ?></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'author_text' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'author_text' ) ); ?>" value="<?php echo esc_attr( $author_text); ?>" 
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
	
	public function million_shade_image_upload_enqueue() {
   
        wp_enqueue_media();
		wp_register_script( 'million_shade_image_widget1', get_template_directory_uri() . '/admin/imgloader.js', array( 'jquery' ) );
        wp_enqueue_script( 'million_shade_image_widget1' );
 
    
	}
	
	
	
	


}



?>