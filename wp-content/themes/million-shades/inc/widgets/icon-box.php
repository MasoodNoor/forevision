<?php
/**
 * Icon Box
 *
 * @package Million Shades
 */
 
class Million_Shades_Icon_Box extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'icon-box-widget', 'description' => __( 'Icon Box.', 'million-shades') );
        parent::__construct(false, $name = __('MS P: Icon Box', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'icon-box-widget';
		
    }

	function form($instance) {
		
		
	
		$title     			= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';		
		$feature_text 		= isset( $instance['feature_text'] ) ? esc_html( $instance['feature_text'] ) : '';
		$button_url 	= isset( $instance['button_url'] ) ? esc_url( $instance['button_url'] ) : '';
		$button_text 	= isset( $instance['button_text'] ) ? esc_html( $instance['button_text'] ) : '';
		$align 	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$style 	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		$icon_bg_color 	= isset( $instance['icon_bg_color'] ) ? esc_attr( $instance['icon_bg_color'] ) : '';
		$feature_icon 	= isset( $instance['feature_icon'] ) ? esc_attr( $instance['feature_icon'] ) : '';
		
		
		$fa_icons_array = million_shades_font_awesome_icons();
		$widget_align = array('center'=>__('Center','million-shades'),'left'=>__('Left','million-shades'));
		
		$widget_style = array('style1'=>__('Style1','million-shades'),'style2'=>__('Style2','million-shades'),
		'style3'=>__('Style3','million-shades'),'style4'=>__('Style4','million-shades'),
		'none'=>__('None','million-shades'));
	?>
	<p>
			<label for="<?php echo esc_attr($this->get_field_id('feature_icon')); ?>"><?php esc_html_e('Icon :', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('feature_icon')) ?>" id="<?php echo esc_attr($this->get_field_id('feature_icon')) ?> ">
             <?php foreach ($fa_icons_array as $key => $value) { ?>
	
					<option <?php echo ($feature_icon == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'icon_bg_color' ) ); ?>"><?php esc_html_e('Icon Background Color:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'icon_bg_color' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'icon_bg_color' ) ); ?>" value="<?php echo esc_attr( $icon_bg_color ); ?>" 
			class="icon_bg_color" />
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
			name="<?php echo esc_attr( $this->get_field_name( 'button_url' ) ); ?>" value="<?php echo esc_url( $button_url ); ?>" 
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
			<label for="<?php echo esc_attr($this->get_field_id('style')); ?>"><?php esc_html_e('Widget Style:', 'million-shades'); ?></label>
    
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
		
        $('#<?php echo esc_attr( $this->get_field_id( 'icon_bg_color' ) ); ?>').wpColorPicker();
		
    });
	</script>
	<?php
	}

	function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		
		$instance['feature_icon'] = sanitize_text_field( $new_instance['feature_icon'] );
		$instance['icon_bg_color'] = sanitize_hex_color( $new_instance['icon_bg_color'] );
		$instance['feature_text'] = sanitize_text_field( $new_instance['feature_text'] );
	
		$instance['button_text'] = sanitize_text_field( $new_instance['button_text'] );
		$instance['button_url'] = esc_url_raw( $new_instance['button_url'] );
		$instance['align'] = million_shades_sanitize_widget_align( $new_instance['align'] );
		$instance['style'] = million_shades_sanitize_widget_style( $new_instance['style'] );
	
		return $instance;
		
	}
	
	function widget($args, $instance) {
	

		extract($args);

		
		
		$title     			= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';		
		$feature_text 		= isset( $instance['feature_text'] ) ? esc_html( $instance['feature_text'] ) : '';
		$button_url 	= isset( $instance['button_url'] ) ? esc_url( $instance['button_url'] ) : '';
		$button_text 	= isset( $instance['button_text'] ) ? esc_html( $instance['button_text'] ) : '';
		$align 	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$style 	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		$icon_bg_color 	= isset( $instance['icon_bg_color'] ) ? esc_attr( $instance['icon_bg_color'] ) : '';
		$feature_icon 	= isset( $instance['feature_icon'] ) ? esc_attr( $instance['feature_icon'] ) : '';
		
		$icon_styles = '';
		$cta_styles = '';
		
		if ($align == 'center'){
			
		$icon_styles .= "float:none;";
		$icon_styles .= "margin:0 auto;";
		$cta_styles .= "margin-top:10px;";
		$cta_styles .= "text-align:center;";
	
		}
		$container_styles = '';
		if ($align == 'left'){
			
		$icon_styles .= "float:left;";
		$icon_styles .= "margin-bottom:10px;";
		$cta_styles .= "clear:left;";
		$cta_styles .= "text-align:left;";
		$container_styles = "padding-left:10px;";
	
		}
		
		if ($icon_bg_color != ''){
		$icon_styles .= "background-color:".esc_attr($icon_bg_color).";";
		}
		echo $args['before_widget'];

		
?>
        <div class="icon-box-widget <?php echo esc_attr($style); ?>" style="<?php echo esc_attr($container_styles); ?>">
	
			<?php if ($feature_icon){ ?>
		
				<div class="box-icon"  style="<?php echo esc_attr($icon_styles); ?>" >
		
	
					<span class="fa fa-<?php echo esc_attr($feature_icon); ?>"></span>

				</div>
		
			<?php } ?>
	
				<div class="icon-box-cta" style="<?php echo esc_attr($cta_styles); ?>">
				<?php if ($title){ ?>
					<h3 class="nl-widget-title"><?php echo esc_html($title); ?></h3>
				<?php } ?>	
				<?php if ($feature_text){ ?>
					<div class="nl-widget-text"><?php echo esc_html($feature_text);?></div>
				<?php } ?>	
		
					<div class="buttons-icon">
						<?php if( !empty($button_text)) { ?>
						<div class="read-more-btn">
							<a href="<?php echo esc_url($button_url);?>">
								<?php echo esc_html($button_text); ?> 
							</a>
						</div>
					<?php } ?>
					</div>
					
				</div>
	
		</div>
	<?php

		echo $args['after_widget'];

	}
	
}

