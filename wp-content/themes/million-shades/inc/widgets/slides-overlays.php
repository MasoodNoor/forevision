<?php

/**
 * Slides Overlay Widget
 *
 * @package Million Shades
 */
 
class Million_Shades_Slide_Overlay extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'widget-slides', 'description' => __( 'Slides Overlay.', 'million-shades') );
        parent::__construct(false, $name = __('MS Slides Overlay', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'widget-slides';
		
		
    }

	/**
	 * Front-end display of widget
	**/
	public function widget( $args, $instance ) {
				
		extract( $args );

		
		$slide1_image_page   	= isset( $instance['slide1_image_page'] ) ? esc_attr( $instance['slide1_image_page'] ) : '';
		
		
		$slide2_image_page   	= isset( $instance['slide2_image_page'] ) ? esc_attr( $instance['slide2_image_page'] ) : '';
		
		
		$slide3_image_page   	= isset( $instance['slide3_image_page'] ) ? esc_attr( $instance['slide3_image_page'] ) : '';
		
		
		$slide4_image_page   	= isset( $instance['slide4_image_page'] ) ? esc_attr( $instance['slide4_image_page'] ) : '';

		
		$title_tag   	= isset( $instance['title_tag'] ) ? esc_attr( $instance['title_tag'] ) : 'h2';
		$subtitle_tag   	= isset( $instance['subtitle_tag'] ) ? esc_attr( $instance['subtitle_tag'] ) : 'h5';
		
		
		$slide1_button1_text   	= isset( $instance['slide1_button1_text'] ) ? esc_html( $instance['slide1_button1_text'] ) : '';
		$slide1_button1_url   	= isset( $instance['slide1_button1_url'] ) ? esc_url( $instance['slide1_button1_url'] ) : '';
		$btn_bg_color   	= isset( $instance['btn_bg_color'] ) ? esc_attr( $instance['btn_bg_color'] ) : '';
		
		$overlay_bg_color   	= isset( $instance['overlay_bg_color'] ) ? esc_attr( $instance['overlay_bg_color'] ) : '';
		$opacity   	= isset( $instance['opacity'] ) ? esc_attr( $instance['opacity'] ) : '';
		$overlay_top   	= isset( $instance['overlay_top'] ) ? esc_attr( $instance['overlay_top'] ) : '';
		$overlay_height   	= isset( $instance['overlay_height'] ) ? esc_attr( $instance['overlay_height'] ) : '';
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		
		
		$direction_nav   	= isset( $instance['direction_nav'] ) ? esc_attr( $instance['direction_nav'] ) : '';
		$bg_image_height   	= isset( $instance['bg_image_height'] ) ? esc_attr( $instance['bg_image_height'] ) : '800';
		$hide_cta   	= isset( $instance['hide_cta'] ) ? esc_attr( $instance['hide_cta'] ) : '';
		
		$slide1_image_url = '';
		$slide2_image_url = '';
		$slide3_image_url = '';
		$slide4_image_url = '';
		
		$slide1_title = '';
		$slide1_subtitle = '';
		
		$slide2_title = '';
		$slide2_subtitle = '';
		
		
		if ($slide1_image_page != ''){
			$slide1_content = million_shades_page_select($slide1_image_page);
		
	
			$slide1_title = $slide1_content[0];
			$slide1_subtitle = $slide1_content[1];
			$slide1_image_url = $slide1_content[2];
		
		}
		
		if ($slide2_image_page != ''){
			$slide2_content = million_shades_page_select($slide2_image_page);
		
			$slide2_title = $slide2_content[0];
			$slide2_subtitle = $slide2_content[1];
			$slide2_image_url = $slide2_content[2];
		}
		
		
		if ($slide3_image_page != ''){
			$slide3_content = million_shades_page_select($slide3_image_page);
			$slide3_title = $slide3_content[0];
			$slide3_subtitle = $slide3_content[1];
			$slide3_image_url = $slide3_content[2];
		}
		
		if ($slide4_image_page != ''){
			$slide4_content = million_shades_page_select($slide4_image_page);
			$slide4_title = $slide4_content[0];
			$slide4_subtitle = $slide4_content[1];
			$slide4_image_url = $slide4_content[2];
		}
		 
		 
		if ($slide1_image_url == ''){
		$slide1_src = get_template_directory_uri() . "/assets/images/1.jpg"; 
		}else {
		$slide1_src = $slide1_image_url;
		}
		if ($slide2_image_url == ''){
		$slide2_src = get_template_directory_uri() . "/assets/images/1.jpg"; 
		}else {
		$slide2_src = $slide2_image_url;
		}
		
		$slide3_src ='';
		if ($slide3_image_url != ''){
		
		$slide3_src = $slide3_image_url;
		}
		$slide4_src ='';
		if ($slide4_image_url != ''){
		
		$slide4_src = $slide4_image_url;
		}
		
		
		$overlay_position_styles = '';
		$overlay_styles ='';
		
		$slideshow_speed = '5000';
		$animation_speed = '500';
		$pause_on_hover = 'false';
		
		
		if ($direction_nav == ''){
		$direction_nav = 'true'; 
		}
	
	
		if ($overlay_height != 'all'){
		$overlay_top = intval($overlay_height)/2;
		$overlay_styles .= "top: calc(50% - ".intval($overlay_top)."px);";
		
			if ($overlay_height == '200'||$overlay_height == '225'){
				$overlay_styles .= "left: 25%;";
				$overlay_styles .= "right: 25%;";
			}
			if ($overlay_height == '250'||$overlay_height == '300'){
				$overlay_styles .= "left: 20%;";
				$overlay_styles .= "right: 20%;";
			}
		
		}
		
		if ($overlay_height != 'all'){
		
		$overlay_styles .= "height:".intval($overlay_height)."px;";
		
		} 
		
		$types = 'none';
		if ($overlay_height == 'all'){
		$overlay_styles .= "height: 100%;";
		$overlay_styles .= "padding: 0 50px;";
		$types = 'full';
		}
		
		
		$overlay_bg_rgba	= million_shades_hex2rgba($overlay_bg_color, $opacity);
		$overlay_styles .=  "background-color:".$overlay_bg_rgba.";";
		
	
		$bg_image_width =  '100%';
		
		$container_styles = '';
		$container_styles .= 'background-position: center center;';
		$container_styles .= 'background-size: cover;';
		
		if ($bg_image_height == ''){
		$container_styles .= 'height:800px;';
		} else {
		$container_styles .= 'height:'.intval($bg_image_height).'px;';
		}
		
		if ($slide1_src != ''){
		$slide1_src = esc_url($slide1_src);
		$container1_styles = 'background-image:url('.$slide1_src.');';
		$container1_styles .= $container_styles;
		
		}
		
		if ($slide2_src != ''){
		$slide2_src = esc_url($slide2_src);
		$container2_styles = 'background-image:url('.$slide2_src.');';
		$container2_styles .= $container_styles;
		
		}
		
		if ($slide3_src != ''){
		$slide3_src = esc_url($slide3_src);
		$container3_styles = 'background-image:url('.$slide3_src.');';
		$container3_styles .= $container_styles;
		
		}
		
		if ($slide4_src != ''){
		$slide4_src = esc_url($slide4_src);
		$container4_styles = 'background-image:url('.$slide4_src.');';
		$container4_styles .= $container_styles;
		
		}
		
		$accent = million_shades_get_accent_color_mod();
		
		
		if ($btn_bg_color == ''){
			
		$btn_style = "border: 1px solid ".esc_attr($accent).";";
		
		} else {
			$btn_style = "background-color: ".esc_attr($btn_bg_color).";";
			$btn_style .= "border: 1px solid ".esc_attr($btn_bg_color).";";
		}
		
		
		if ($hide_cta == "yes" ) {
			$overlay_styles =  "display:none;";	
		}
			
			echo $before_widget;
		
		
			?>

<?php

		$id = million_shades_html_id('slide-widget');
		$class = '.';
		$class .= $id;


		$slide = million_shades_carousel_style($class,'.flexsliders','fade',$slideshow_speed,$animation_speed,$pause_on_hover,'false',$direction_nav);
	
?>
<?php echo $slide; ?>
<div class="flexsliders <?php echo esc_attr($id); ?> clear"> 
	<ul class="slides">
	
	<?php if ($slide1_src){ ?>
    <li>
      
		<div class="widget_slide_text" style="<?php echo esc_attr($container1_styles); ?>">
        
        <div class="slide_border_style <?php echo esc_attr($types); ?> <?php echo esc_attr($style); ?>" style="<?php echo esc_attr($overlay_styles) ?>">
		<div class="slide_cta">
		<?php if ($slide1_title){ ?>
			<<?php echo esc_attr($title_tag) ?> class="nl-widget-ovr-title"><?php echo esc_html($slide1_title) ?></<?php echo esc_attr($title_tag) ?>>
		<?php } ?>
		<?php if ($slide1_subtitle){ ?>
			<<?php echo esc_attr($subtitle_tag) ?> class="nl-widget-ovr-sub-title" ><?php echo esc_html($slide1_subtitle) ?></<?php echo esc_attr($subtitle_tag) ?>>
		<?php } ?>	
			
			<div class="slider-buttons">

	<?php if ($slide1_button1_text){ ?>
	<div class="slide1_button1">	
		<a  href="<?php echo esc_url($slide1_button1_url) ?>" class="btn-default nlbtn1 slide-btn" style="<?php echo esc_attr($btn_style) ?>"
			 target="_self">
	
		<?php echo esc_html($slide1_button1_text);  ?>
	
		</a>
	</div>
	<?php }  ?>

			
			</div>
	
	</div>
	</div>
	   
	</div>
    </li>
	<?php } ?>
	
	<?php if ($slide2_src){ ?>
	
    <li>
  
	  <div class="widget_slide_text" style="<?php echo esc_attr($container2_styles); ?>">
			<div class="slide_border_style <?php echo esc_attr($types); ?> <?php echo esc_attr($style); ?>" style="<?php echo esc_attr($overlay_styles) ?>">
	
				<div class="slide_cta">
					<?php if ($slide2_title){ ?>
					<<?php echo esc_attr($title_tag) ?> class="nl-widget-ovr-title"><?php echo esc_html($slide2_title) ?></<?php echo esc_attr($title_tag) ?>>
					<?php } ?>
					<?php if ($slide2_subtitle){ ?>
					<<?php echo esc_attr($subtitle_tag) ?> class="nl-widget-ovr-sub-title"><?php echo esc_html($slide2_subtitle) ?></<?php echo esc_attr($subtitle_tag) ?>>
					<?php } ?>
		
					<div class="slider-buttons">
	
						<?php if ($slide1_button1_text){ ?>
						<div class="slide1_button1">	
							<a  href="<?php echo esc_url($slide1_button1_url) ?>" class="btn-default nlbtn1 slide-btn" style="<?php echo esc_attr($btn_style) ?>"
							target="_self">
	
							<?php echo esc_html($slide1_button1_text);  ?>
	
							</a>
						</div>
						<?php }  ?>
	
					</div>
				</div>
		
			</div>
	  
		</div>
    </li>
   <?php } ?> 
	<?php if ($slide3_src){ ?>
	<li>
    
		<div class="widget_slide_text" style="<?php echo esc_attr($container3_styles); ?>">
			<div class="slide_border_style <?php echo esc_attr($types); ?> <?php echo esc_attr($style); ?>" style="<?php echo esc_attr($overlay_styles) ?>">
		
		
				<div class="slide_cta">
					<?php if ($slide3_title){ ?>
					<<?php echo esc_attr($title_tag) ?> class="nl-widget-ovr-title"><?php echo esc_html($slide3_title) ?></<?php echo esc_attr($title_tag) ?>>
					<?php } ?> 
					<?php if ($slide3_subtitle){ ?>
					<<?php echo esc_attr($subtitle_tag) ?> class="nl-widget-ovr-sub-title"><?php echo esc_html($slide3_subtitle) ?></<?php echo esc_attr($subtitle_tag) ?>>
					<?php } ?> 
	  
					<div class="slider-buttons">
	
					<?php if ($slide1_button1_text){ ?>
					<div class="slide1_button1">	
						<a  href="<?php echo esc_url($slide1_button1_url) ?>" class="btn-default nlbtn1 slide-btn" style="<?php echo esc_attr($btn_style) ?>" target="_self">
	
	
							<?php echo esc_html($slide1_button1_text);  ?>
	
		
						</a>
					</div>
					<?php }  ?>
	
					</div>
				</div>
 
			</div>
		</div>
                         
    </li>
<?php } ?>
	
	<?php if ($slide4_src){ ?>
    <li>
    
		<div class="widget_slide_text" style="<?php echo esc_attr($container4_styles); ?>">
        
		 <div class="slide_border_style <?php echo esc_attr($types); ?> <?php echo esc_attr($style); ?>" style="<?php echo esc_attr($overlay_styles) ?>">
			<div class="slide_cta">
				<?php if ($slide4_title){ ?>
					<<?php echo esc_attr($title_tag) ?> class="nl-widget-ovr-title"><?php echo esc_html($slide4_title) ?></<?php echo esc_attr($title_tag) ?>>
				<?php } ?>
		
				<?php if ($slide4_subtitle){ ?>
					<<?php echo esc_attr($subtitle_tag) ?> class="nl-widget-ovr-sub-title">
				<?php echo esc_html($slide4_subtitle) ?>
					</<?php echo esc_attr($subtitle_tag) ?>>
				<?php } ?>
	  
				<div class="slider-buttons">
	
				<?php if ($slide1_button1_text){ ?>
					<div class="slide1_button1">	
						<a  href="<?php echo esc_url($slide1_button1_url) ?>" class="btn-default nlbtn1 slide-btn" style="<?php echo esc_attr($btn_style) ?>" target="_self">
							<?php echo esc_html($slide1_button1_text);  ?>
		
						</a>
					</div>
				<?php }  ?>
	
			
				</div>
 
			</div>
		</div>
		</div>
    </li>
	<?php } ?>
  </ul>

</div>
			
		
	    <?php 
		
		echo $after_widget;
		
	}

	/**
	 * Sanitize widget form values as they are saved
	**/
	
	public function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		
		$instance['slide1_image_page'] = absint( $new_instance['slide1_image_page'] );
		$instance['slide2_image_page'] = absint( $new_instance['slide2_image_page'] );
		$instance['slide3_image_page'] = absint( $new_instance['slide3_image_page'] );
		$instance['slide4_image_page'] = absint( $new_instance['slide4_image_page'] );
		
		$instance['title_tag'] = million_shades_sanitize_title_tag( $new_instance['title_tag'] );
		$instance['subtitle_tag'] = million_shades_sanitize_title_tag( $new_instance['subtitle_tag'] );
	
		$instance['slide1_button1_text'] = sanitize_text_field( $new_instance['slide1_button1_text'] );
		$instance['slide1_button1_url'] = esc_url_raw( $new_instance['slide1_button1_url'] );
		$instance['btn_bg_color'] = sanitize_hex_color( $new_instance['btn_bg_color'] );
		
		$instance['overlay_bg_color'] = sanitize_hex_color( $new_instance['overlay_bg_color'] );
		$instance['opacity'] = million_shades_sanitize_ovr_opacity( $new_instance['opacity'] );
		$instance['bg_image_height'] = absint( $new_instance['bg_image_height'] );
		
		$instance['overlay_height'] = million_shades_sanitize_ovr_heights( $new_instance['overlay_height'] );
		$instance['style'] = million_shades_sanitize_style_three( $new_instance['style'] );

		
		$instance['direction_nav'] = million_shades_sanitize_false_true( $new_instance['direction_nav'] );
		$instance['hide_cta'] = sanitize_text_field( $new_instance['hide_cta'] );
		
		
		return $instance;
		
	}

	/**
	 * Back-end widget form
	**/
	public function form( $instance ) {
		

	$tagArray = array('h3'=>__('H3','million-shades'),'h1'=>__('H1','million-shades'),
	'h2'=>__('H2','million-shades'),'h4'=>__('H4','million-shades'),'h5'=>__('H5','million-shades'),
	'span'=>__('span','million-shades'));
	
	$widget_style = array('style1'=>__('Border','million-shades'),'style2'=>__('Border-shadow','million-shades'),
	'none'=>__('None','million-shades'));
	
	$ovr_heights = array('all'=>__('100%','million-shades'),'200'=>__('200px','million-shades'),
	'225'=>__('225px','million-shades'),'250'=>__('250px','million-shades'),'300'=>__('300px','million-shades'));
	
	
	$animations_type = array('fade'=>__('Fade','million-shades'),'slide'=>__('Slide','million-shades'));
	$ovr_opacity = array('0'=>__('0','million-shades'),'0.1'=>__('0.1','million-shades'),
	'0.2'=>__('0.2','million-shades'),'0.3'=>__('0.3','million-shades'),'0.4'=>__('0.4','million-shades'),
	'0.5'=>__('0.5','million-shades'),'0.6'=>__('0.6','million-shades'),'0.7'=>__('0.7','million-shades'),
	'0.8'=>__('0.8','million-shades'),'0.9'=>__('0.9','million-shades'),'1'=>__('1','million-shades'));
	
	$directions_nav = array('true'=>__('True','million-shades'),'false'=>__('False','million-shades'));
	$controls_nav = array('true'=>__('True','million-shades'),'false'=>__('False','million-shades'));
	$cta_yes_no = array('no'=>__('No','million-shades'),'yes'=>__('Yes','million-shades'));
	
	
		$slide1_image_page   	= isset( $instance['slide1_image_page'] ) ? esc_attr( $instance['slide1_image_page'] ) : '';
		
		
		$slide2_image_page   	= isset( $instance['slide2_image_page'] ) ? esc_attr( $instance['slide2_image_page'] ) : '';
		
		
		$slide3_image_page   	= isset( $instance['slide3_image_page'] ) ? esc_attr( $instance['slide3_image_page'] ) : '';
		
		
		$slide4_image_page   	= isset( $instance['slide4_image_page'] ) ? esc_attr( $instance['slide4_image_page'] ) : '';
		
		
		$title_tag   	= isset( $instance['title_tag'] ) ? esc_attr( $instance['title_tag'] ) : 'h2';
		$subtitle_tag   	= isset( $instance['subtitle_tag'] ) ? esc_attr( $instance['subtitle_tag'] ) : 'h5';
		
		
		$slide1_button1_text   	= isset( $instance['slide1_button1_text'] ) ? esc_html( $instance['slide1_button1_text'] ) : '';
		$slide1_button1_url   	= isset( $instance['slide1_button1_url'] ) ? esc_url( $instance['slide1_button1_url'] ) : '';
		$btn_bg_color   	= isset( $instance['btn_bg_color'] ) ? esc_attr( $instance['btn_bg_color'] ) : '';

		$overlay_bg_color   	= isset( $instance['overlay_bg_color'] ) ? esc_attr( $instance['overlay_bg_color'] ) : '';
		$opacity   	= isset( $instance['opacity'] ) ? esc_attr( $instance['opacity'] ) : '';
		
		$overlay_top   	= isset( $instance['overlay_top'] ) ? esc_attr( $instance['overlay_top'] ) : '';
		$overlay_height   	= isset( $instance['overlay_height'] ) ? esc_attr( $instance['overlay_height'] ) : '';
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		
		$bg_image_height   	= isset( $instance['bg_image_height'] ) ? esc_attr( $instance['bg_image_height'] ) : '800';
		
		$direction_nav   	= isset( $instance['direction_nav'] ) ? esc_attr( $instance['direction_nav'] ) : '';
		
		$hide_cta   	= isset( $instance['hide_cta'] ) ? esc_attr( $instance['hide_cta'] ) : '';
	
	
	?>
		
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
			<label for = "<?php echo esc_attr( $this->get_field_id( 'bg_image_height' ) ); ?>"><?php esc_html_e('Image Height:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'bg_image_height' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'bg_image_height' ) ); ?>" value="<?php echo esc_attr( $bg_image_height ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('slide1_image_page')) ?>"><?php esc_html_e( 'Select a Page for Slide1', 'million-shades' )?></label>
				<br>
				
				<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('slide1_image_page')) ?>" id="<?php echo esc_attr($this->get_field_id('slide1_image_page')) ?> ">
					<option selected="selected" value=""><?php esc_html_e( 'None', 'million-shades' ) ?></option> 
						<?php
							
							$pages = get_pages(); 
							foreach ( $pages as $ms_page ) {
								$option = '<option value="' . absint($ms_page->ID) . '" ';
								$option .= ( absint($ms_page->ID) == absint($slide1_image_page) ) ? 'selected="selected"' : '';
								$option .= '>';
								$option .= esc_html($ms_page->post_title);
								$option .= '</option>';
							echo $option;
							}
						?>
				</select>
		</p>
		
	
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('slide2_image_page')) ?>" class="nl-row-title"><?php esc_html_e( 'Select a Page for Slide2', 'million-shades' )?></label>
				<br>
				
				<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('slide2_image_page')) ?>" id="<?php echo esc_attr($this->get_field_id('slide2_image_page')) ?> ">
					<option selected="selected" value=""><?php esc_html_e( 'None', 'million-shades' ) ?></option> 
						<?php
							
							$pages = get_pages(); 
							foreach ( $pages as $ms_page ) {
								$option = '<option value="' . absint($ms_page->ID) . '" ';
								$option .= ( absint($ms_page->ID) == absint($slide2_image_page) ) ? 'selected="selected"' : '';
								$option .= '>';
								$option .= esc_html($ms_page->post_title);
								$option .= '</option>';
							echo $option;
							}
						?>
				</select>
		</p>
		
		
		
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('slide3_image_page')) ?>" ><?php esc_html_e( 'Select a Page for Slide3', 'million-shades' )?></label>
				<br>
				
				<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('slide3_image_page')) ?>" id="<?php echo esc_attr($this->get_field_id('slide3_image_page')) ?> ">
					<option selected="selected" value=""><?php esc_html_e( 'None', 'million-shades' ) ?></option> 
						<?php
							
							$pages = get_pages(); 
							foreach ( $pages as $ms_page ) {
								$option = '<option value="' . absint($ms_page->ID) . '" ';
								$option .= ( absint($ms_page->ID) == absint($slide3_image_page) ) ? 'selected="selected"' : '';
								$option .= '>';
								$option .= esc_html($ms_page->post_title);
								$option .= '</option>';
							echo $option;
							}
						?>
				</select>
		</p>
		
		
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('slide4_image_page')) ?>" ><?php esc_html_e( 'Select a Page for Slide4', 'million-shades' )?></label>
				<br>
				
				<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('slide4_image_page')) ?>" id="<?php echo esc_attr($this->get_field_id('slide4_image_page')) ?> ">
					<option selected="selected" value=""><?php esc_html_e( 'None', 'million-shades' ) ?></option> 
						<?php
							
							$pages = get_pages(); 
							foreach ( $pages as $ms_page ) {
								$option = '<option value="' . absint($ms_page->ID) . '" ';
								$option .= ( absint($ms_page->ID) == absint($slide4_image_page) ) ? 'selected="selected"' : '';
								$option .= '>';
								$option .= esc_html($ms_page->post_title);
								$option .= '</option>';
							echo $option;
							}
						?>
				</select>
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
			<label for = "<?php echo esc_attr( $this->get_field_id( 'slide1_button1_text' ) ); ?>"><?php esc_html_e('Button Text:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'slide1_button1_text' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'slide1_button1_text' ) ); ?>" value="<?php echo esc_attr( $slide1_button1_text ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'slide1_button1_url' ) ); ?>"><?php esc_html_e('Button Url:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'slide1_button1_url' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'slide1_button1_url' ) ); ?>" value="<?php echo esc_url( $slide1_button1_url ); ?>" 
			class="widefat" />
		</p>
		
	
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'btn_bg_color' ) ); ?>"><?php esc_html_e('Button Background Color:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'btn_bg_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'btn_bg_color' ) ); ?>" value="<?php echo esc_attr( $btn_bg_color ); ?>" 
			class="widefat" />
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
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'overlay_bg_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'overlay_bg_color' ) ); ?>" value="<?php echo esc_attr( $overlay_bg_color ); ?>" 
			class="widefat" />
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
			<label for="<?php echo esc_attr($this->get_field_id('style')); ?>"><?php esc_html_e('Overlay Border Style:', 'million-shades'); ?></label>
			
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('style')) ?>" id="<?php echo esc_attr($this->get_field_id('style')) ?>">
             <?php foreach ($widget_style as $key => $value) { ?>
	
					<option <?php echo ($style == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		
		
		
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('direction_nav')); ?>"><?php esc_html_e('Direction Navigation:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('direction_nav')) ?>" id="<?php echo esc_attr($this->get_field_id('direction_nav')) ?> ">
             <?php foreach ($directions_nav as $key => $value) { ?>
	
					<option <?php echo ($direction_nav == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('hide_cta')); ?>"><?php esc_html_e('Hide Overlay CTA?:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('hide_cta')) ?>" id="<?php echo esc_attr($this->get_field_id('hide_cta')) ?> ">
             <?php foreach ($cta_yes_no as $key => $value) { ?>
	
					<option <?php echo ($hide_cta == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		
	
		
		
		
	<?php
	}
	


}



?>