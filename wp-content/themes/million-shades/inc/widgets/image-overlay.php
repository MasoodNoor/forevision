<?php

/**
 * Background Image Overlay widget
 *
 * @package Million Shades
 */
 
class Million_Shades_Image_Overlay extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'image-overlay', 'description' => __( 'Background Image Overlay.', 'million-shades') );
        parent::__construct(false, $name = __('MS P: Image Overlay', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'image-overlay';
		
    }

	/**
	 * Front-end display of widget
	**/
	public function widget( $args, $instance ) {
				
		extract( $args );

		$bg_image_src   	= isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';
		
		$title   	= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';
		$img_height   	= isset( $instance['img_height'] ) ? esc_attr( $instance['img_height'] ) : '800';
	
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		$title_tag   	= isset( $instance['title_tag'] ) ? esc_attr( $instance['title_tag'] ) : '';
		$overlay_subtitle   	= isset( $instance['overlay_subtitle'] ) ? esc_html( $instance['overlay_subtitle'] ) : '';
		$subtitle_tag   	= isset( $instance['subtitle_tag'] ) ? esc_attr( $instance['subtitle_tag'] ) : '';
		$btn1_text   	= isset( $instance['btn1_text'] ) ? esc_html( $instance['btn1_text'] ) : '';
		$btn1_url   	= isset( $instance['btn1_url'] ) ? esc_url( $instance['btn1_url'] ) : '';
		$btn_bg_color   	= isset( $instance['btn_bg_color'] ) ? esc_attr( $instance['btn_bg_color'] ) : '';
		
		$overlay_bg_color   	= isset( $instance['overlay_bg_color'] ) ? esc_attr( $instance['overlay_bg_color'] ) : '';
		$opacity   	= isset( $instance['opacity'] ) ? esc_attr( $instance['opacity'] ) : '';
		
		$overlay_height   	= isset( $instance['overlay_height'] ) ? esc_attr( $instance['overlay_height'] ) : '';
		$overlay_text_color   	= isset( $instance['overlay_text_color'] ) ? esc_attr( $instance['overlay_text_color'] ) : '';
		
		
		
		$text_styles ='';
	
		$container_styles = '';
		$container_styles = 'position:relative;';
		
		
		
		if ($overlay_text_color == ''){
			
			$title_styles = "color:#000;";
			$sub_title_styles = "color:#000;";
			
		}
		
		if ($overlay_text_color != ''){
			
			$title_styles = "color:".$overlay_text_color.";";
			$sub_title_styles = "color:".$overlay_text_color.";";
			
		}
		
		if ($bg_image_src == ''){
			
		$bg_image_src = get_template_directory_uri() . "/assets/images/1.jpg"; 
		
		} else {
		
		$bg_image_src = esc_url($bg_image_src);
		
		}
		
	
        $overlay_position_styles = '';
		$overlay_styles ='';
		
		if ($overlay_height == ''){
		
		$overlay_styles = "height:100%;";
		
		} 
		  
		if ($overlay_height != 'all'){
		$overlay_top = intval($overlay_height)/2;
		$overlay_position_styles .= "top: calc(50% - ".intval($overlay_top)."px);";
		
			if ($overlay_height == '200'||$overlay_height == '225'){
				$overlay_position_styles .= "left: 25%;";
				$overlay_position_styles .= "right: 25%;";
			}
			if ($overlay_height == '250'||$overlay_height == '300'){
				$overlay_position_styles .= "left: 20%;";
				$overlay_position_styles .= "right: 20%;";
			}
		
		}
		
		if ($overlay_height != 'all'){
		
		$overlay_styles = "height:".intval($overlay_height)."px;";
		
		} 
		
		$types = 'none';
		if ($overlay_height == 'all'){
		$overlay_styles .= "height: 100%;";
		$overlay_styles .= "padding: 0 50px;";
		$types = 'full';
		}
		
		$overlay_styles .= "width: 100%;";
	
		$overlay_bg_rgba	= million_shades_hex2rgba($overlay_bg_color, $opacity);
		$overlay_styles .=  "background-color:".esc_attr($overlay_bg_rgba).";";
		$accent = million_shades_get_accent_color_mod();
		
		
		if ($btn_bg_color == ''){
			
		$btn_style = "border: 1px solid ".esc_attr($accent).";";
		
		} else {
			$btn_style = "background-color: ".esc_attr($btn_bg_color).";";
			$btn_style .= "border: 1px solid ".esc_attr($btn_bg_color).";";
		}
		
		$overlay_position_styles .= "position: absolute;";
		
		if ($bg_image_src != ''){
		$bg_image_src = esc_url($bg_image_src);
		$container_styles .= 'background-image:url('.$bg_image_src.');';
		$container_styles .= 'background-position: center center;';
		$container_styles .= 'background-size: cover;';
		$container_styles .= 'height:'.intval($img_height).'px;';
		
		}
		
		
	
			echo $before_widget;
		
		
			?>
        

<div class="header-image1" style="<?php echo esc_attr($container_styles); ?>">

	<div class="overlay_text1 <?php echo esc_attr($types); ?>" style="<?php echo esc_attr($overlay_position_styles); ?>">
	
		<div class="image_border_style <?php echo esc_attr($style); ?>" style="<?php echo esc_attr($overlay_styles); ?>">
	
		<div class="overlay-cta" style="position:relative;">
		<?php if ($title){ ?>
			<<?php echo esc_attr($title_tag) ?> class="nl-widget-ovr-title" style="<?php echo esc_attr($title_styles) ?>"><?php echo esc_html($title) ?></<?php echo esc_attr($title_tag) ?>>
		<?php } ?>	
		<?php if ($overlay_subtitle){ ?>
			<<?php echo esc_attr($subtitle_tag) ?> class="nl-widget-ovr-sub-title" style="<?php echo esc_attr($sub_title_styles) ?>"><?php echo esc_html($overlay_subtitle);?></<?php echo esc_attr($subtitle_tag) ?>>
		<?php } ?>	
			<div class="overlay-buttons">
		
			<?php if ($btn1_text){ ?>
				<div class="btn1">
					<a href="<?php echo esc_url($btn1_url); ?>" class="ovr-button" style="<?php echo esc_attr($btn_style) ?>"
					target="_self">
	
					<?php echo esc_html($btn1_text);  ?>	
	
					</a>
				</div>
				<?php } ?>	
		
			</div>
			</div>
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
		
		$instance['img_height'] = absint( $new_instance['img_height'] );
		
		$instance['title_tag'] = million_shades_sanitize_title_tag( $new_instance['title_tag'] );
		
		$instance['overlay_subtitle'] = sanitize_text_field( $new_instance['overlay_subtitle'] );
		$instance['subtitle_tag'] = million_shades_sanitize_title_tag( $new_instance['subtitle_tag'] );
		
		$instance['image_url'] = esc_url_raw( $new_instance['image_url'] );
		
		$instance['overlay_text_color'] = sanitize_hex_color( $new_instance['overlay_text_color'] );
	
		$instance['btn1_text'] = sanitize_text_field( $new_instance['btn1_text'] );
		$instance['btn1_url'] = esc_url_raw( $new_instance['btn1_url'] );
		$instance['btn_bg_color'] = sanitize_hex_color( $new_instance['btn_bg_color'] );

		$instance['overlay_bg_color'] = sanitize_hex_color( $new_instance['overlay_bg_color'] );
		$instance['opacity'] = million_shades_sanitize_ovr_opacity( $new_instance['opacity'] );
		
		$instance['overlay_height'] = million_shades_sanitize_ovr_heights( $new_instance['overlay_height'] );

		$instance['style'] = million_shades_sanitize_style_three( $new_instance['style'] );
		
		
		return $instance;
		
	}

	/**
	 * Back-end widget form
	**/
	public function form( $instance ) {
		
	$instance = wp_parse_args( (array) $instance);
	
	$tagArray = array('h3'=>__('H3','million-shades'),'h1'=>__('H1','million-shades'),
	'h2'=>__('H2','million-shades'),'h4'=>__('H4','million-shades'),'h5'=>__('H5','million-shades'),
	'span'=>__('span','million-shades'));
	
	$widget_style = array('none'=>__('None','million-shades'),'style1'=>__('Border','million-shades'),'style2'=>__('Border-shadow','million-shades'));
	
	$ovr_opacity = array('0'=>__('0','million-shades'),'0.1'=>__('0.1','million-shades'),
	'0.2'=>__('0.2','million-shades'),'0.3'=>__('0.3','million-shades'),'0.4'=>__('0.4','million-shades'),
	'0.5'=>__('0.5','million-shades'),'0.6'=>__('0.6','million-shades'),'0.7'=>__('0.7','million-shades'),
	'0.8'=>__('0.8','million-shades'),'0.9'=>__('0.9','million-shades'),'1'=>__('1','million-shades'));
	
	$ovr_heights = array('all'=>__('100%','million-shades'),'200'=>__('200px','million-shades'),
	'225'=>__('225px','million-shades'),'250'=>__('250px','million-shades'),'300'=>__('300px','million-shades'));
	

	
		$image_url   	= isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';
	
		$title   	= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';
		$img_height   	= isset( $instance['img_height'] ) ? esc_attr( $instance['img_height'] ) : '800';
		
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		$title_tag   	= isset( $instance['title_tag'] ) ? esc_attr( $instance['title_tag'] ) : '';
		$overlay_subtitle   	= isset( $instance['overlay_subtitle'] ) ? esc_html( $instance['overlay_subtitle'] ) : '';
		$subtitle_tag   	= isset( $instance['subtitle_tag'] ) ? esc_attr( $instance['subtitle_tag'] ) : '';
		$btn1_text   	= isset( $instance['btn1_text'] ) ? esc_html( $instance['btn1_text'] ) : '';
		$btn1_url   	= isset( $instance['btn1_url'] ) ? esc_url( $instance['btn1_url'] ) : '';
		$btn_bg_color   	= isset( $instance['btn_bg_color'] ) ? esc_attr( $instance['btn_bg_color'] ) : '';
		
		$overlay_bg_color   	= isset( $instance['overlay_bg_color'] ) ? esc_attr( $instance['overlay_bg_color'] ) : '';
		$overlay_text_color   	= isset( $instance['overlay_text_color'] ) ? esc_attr( $instance['overlay_text_color'] ) : '';
		
		$opacity   	= isset( $instance['opacity'] ) ? esc_attr( $instance['opacity'] ) : '';
		
		$overlay_height   	= isset( $instance['overlay_height'] ) ? esc_attr( $instance['overlay_height'] ) : '';
		
	?>
	
		<p>
			<label for="meta-image" class="nl-row-title"><?php esc_html_e( 'Background Image Upload', 'million-shades' )?></label>
			<br>
				
			<input class="widefat image_url_id" type="text" name="<?php echo esc_attr($this->get_field_name('image_url')) ?>" id="image_url_id7" value="<?php echo esc_url($image_url); ?>">
		
			<input type="button" id="ms-image-uploader7" class="ms-image-uploader"  value="<?php esc_html_e( 'Choose or Upload an Image', 'million-shades' )?>" />
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'img_height' ) ); ?>"><?php esc_html_e('Image Height:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'img_height' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'img_height' ) ); ?>" value="<?php echo esc_attr( $img_height); ?>" 
			class="widefat" />
		</p>

		
		
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title); ?>" 
			class="widefat" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title_tag')); ?>"><?php esc_html_e('Title Tag:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('title_tag')) ?>" id="<?php echo esc_attr($this->get_field_id('title_tag')) ?> ">
             <?php foreach ($tagArray as $key => $value) { ?>
	
					<option <?php echo ($title_tag == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'overlay_subtitle' ) ); ?>">
			<?php esc_html_e('Overlay Subtitle:', 'million-shades'); ?></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'overlay_subtitle' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'overlay_subtitle' ) ); ?>" value="<?php echo esc_attr( $overlay_subtitle ); ?>" 
			class="widefat" />
		</p>
		
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('subtitle_tag')); ?>"><?php esc_html_e('Sub Title Tag:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('subtitle_tag')) ?>" id="<?php echo esc_attr($this->get_field_id('subtitle_tag')) ?> ">
             <?php foreach ($tagArray as $key => $value) { ?>
	
					<option <?php echo ($subtitle_tag == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'overlay_text_color' ) ); ?>"><?php esc_html_e('Overlay Text Color:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'overlay_text_color' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'overlay_text_color' ) ); ?>" value="<?php echo esc_attr( $overlay_text_color ); ?>" 
			class="icon_bg_color" />
		</p>
	
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'btn1_text' ) ); ?>"><?php esc_html_e('Button1 Text:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'btn1_text' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'btn1_text' ) ); ?>" value="<?php echo esc_attr( $btn1_text ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'btn1_url' ) ); ?>"><?php esc_html_e('Button Url:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'btn1_url' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'btn1_url' ) ); ?>" value="<?php echo esc_attr( $btn1_url ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'btn_bg_color' ) ); ?>"><?php esc_html_e('Button Background Color:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'btn_bg_color' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'btn_bg_color' ) ); ?>" value="<?php echo esc_attr( $btn_bg_color ); ?>" 
			class="icon_bg_color" />
		</p>
		
	
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('overlay_height')); ?>"><?php esc_html_e('Overlay Height:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('overlay_height')) ?>" id="<?php echo esc_attr($this->get_field_id('overlay_height')) ?> ">
             <?php foreach ($ovr_heights as $key => $value) { ?>
	
					<option <?php echo ($overlay_height == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'overlay_bg_color' ) ); ?>"><?php esc_html_e('Overlay Background Color:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'overlay_bg_color' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'overlay_bg_color' ) ); ?>" value="<?php echo esc_attr( $overlay_bg_color ); ?>" 
			class="icon_bg_color" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('opacity')); ?>"><?php esc_html_e('Overlay Background Opacity:', 'million-shades'); ?></label>
			
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('opacity')) ?>" id="<?php echo esc_attr($this->get_field_id('ovr_opacity')) ?>">
             <?php foreach ($ovr_opacity as $key => $value) { ?>
	
					<option <?php echo ($opacity == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('style')); ?>"><?php esc_html_e('Border Style ( If Overlay height is other than 100%.):', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('style')) ?>" id="<?php echo esc_attr($this->get_field_id('style')) ?> ">
             <?php foreach ($widget_style as $key => $value) { ?>
	
					<option <?php echo ($style == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
	
	<script>
    jQuery(document).ready(function($) {
		
        $('#<?php echo esc_attr( $this->get_field_id( 'overlay_bg_color' ) ); ?>').wpColorPicker();
		$('#<?php echo esc_attr( $this->get_field_id( 'overlay_text_color' ) ); ?>').wpColorPicker();
		$('#<?php echo esc_attr( $this->get_field_id( 'btn_bg_color' ) ); ?>').wpColorPicker();
		
    });
	</script>
		
	<?php
	}


}



?>