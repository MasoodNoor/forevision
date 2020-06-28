<?php

/**
 * Button Widget
 *
 * @package Million Shades
 */
class Million_Shades_Button_Widget extends WP_Widget {

	
	
	public function __construct() {
		$widget_ops = array('classname' => 'nl_button_widget', 'description' => __( 'Button for so page builder', 'million-shades') );
        parent::__construct(false, $name = __('MS P: Button', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'nl_button_widget';
		
    }
	
	function form($instance) {
		
		
		
		$align	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';		
		$style 		= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		$btn_icon 	= isset( $instance['btn_icon'] ) ? esc_attr( $instance['btn_icon'] ) : '';
		$btn_bg_color	= isset( $instance['btn_bg_color'] ) ? esc_attr( $instance['btn_bg_color'] ) : '';
		$button_text 	= isset( $instance['button_text'] ) ? esc_html( $instance['button_text'] ) : 'btn txt';
		$button_url 	= isset( $instance['button_url'] ) ? esc_url( $instance['button_url'] ) : '';
		$border_radius 	= isset( $instance['border_radius'] ) ? esc_attr( $instance['border_radius'] ) : '';
		
	
	$fa_icons_array = million_shades_font_awesome_icons();
	
	$widget_align = array('left'=>__('Left','million-shades'),'center'=>__('Center','million-shades'),'right'=>__('Right','million-shades'));
		
	$widget_style = array('none'=>__('Transparent bg - hover black','million-shades'),'none2'=>__('Transparent bg - hover white','million-shades'),'style1'=>__('Style1','million-shades'),'style2'=>__('Style2','million-shades'),'style3'=>__('Style3','million-shades'));
	
	$borders_radius = array('0'=>__('0','million-shades'),'3'=>__('3px','million-shades'),'5'=>__('5px','million-shades'),'10'=>__('10px','million-shades'),'25'=>__('25px','million-shades'));

	?>

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
			<label for = "<?php echo esc_attr( $this->get_field_id( 'btn_bg_color' ) ); ?>"><?php esc_html_e('Button Background Color:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'btn_bg_color' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'btn_bg_color' ) ); ?>" value="<?php echo esc_attr( $btn_bg_color ); ?>" 
			class="icon_bg_color" />
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
			<label for="<?php echo esc_attr($this->get_field_id('btn_icon')); ?>"><?php esc_html_e('Button Icon :', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('btn_icon')) ?>" id="<?php echo esc_attr($this->get_field_id('btn_icon')) ?> ">
             <?php foreach ($fa_icons_array as $key => $value) { ?>
	
					<option <?php echo ($btn_icon == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('border_radius')); ?>"><?php esc_html_e('Border Radius:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('border_radius')) ?>" id="<?php echo esc_attr($this->get_field_id('border_radius')) ?> ">
             <?php foreach ($borders_radius as $key => $value) { ?>
	
					<option <?php echo ($border_radius == $key ) ? ' selected="selected"' : ''; ?> 
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
		
		
	<script type='text/javascript'>
    jQuery(document).ready(function($) {
		
        $('#<?php echo esc_attr( $this->get_field_id( 'btn_bg_color' ) ); ?>').wpColorPicker();
		
    });
	</script>
	
		
	<?php
	
	}

	function update($new_instance, $old_instance) {
		
		$instance = $old_instance;
		
		$instance['btn_icon'] = million_shades_sanitize_icons($new_instance['btn_icon']);
		$instance['button_url'] = esc_url_raw($new_instance['button_url']);
		$instance['button_text'] = sanitize_text_field($new_instance['button_text']);
		$instance['btn_bg_color'] = sanitize_hex_color($new_instance['btn_bg_color']);
		
		$instance['border_radius'] = absint($new_instance['border_radius']);  
		$instance['align'] = million_shades_sanitize_widget_aligns($new_instance['align']);  
		$instance['style'] = million_shades_sanitize_widget_styles($new_instance['style']); 
	 
		return $instance;
	}
	
	function widget($args, $instance) {
		
		global $before_widget, $after_widget;

		extract($args);

		
		$align	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';		
		$style 		= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		$btn_icon 	= isset( $instance['btn_icon'] ) ? esc_attr( $instance['btn_icon'] ) : '';
		$button_text 	= isset( $instance['button_text'] ) ? esc_html( $instance['button_text'] ) : 'btn txt';
		$button_url 	= isset( $instance['button_url'] ) ? esc_url( $instance['button_url'] ) : '';
		$btn_bg_color   	= isset( $instance['btn_bg_color'] ) ? esc_attr( $instance['btn_bg_color'] ) : '';
		$border_radius 	= isset( $instance['border_radius'] ) ? esc_attr( $instance['border_radius'] ) : '';
		
		$btn_styles = '';
		
		
		$accent = million_shades_get_accent_color_mod();
		
		
		if ($btn_bg_color == '' ){
			
			if ($style == 'none' || $style == 'style1' || $style == 'none2'){
				$btn_styles .= "border: 1px solid ".esc_attr($accent).";";
			}
		
		} 
		
		if ($btn_bg_color != ''){
			$btn_styles .= "background-color: ".esc_attr($btn_bg_color).";";
			if ($style == 'none' || $style == 'style1' || $style == 'none2'){
			$btn_styles .= "border: 1px solid ".esc_attr($btn_bg_color).";";
			}
			
		}
		
		if ($border_radius != ''){
		$btn_styles .= "border-radius:".intval($border_radius)."px;";
		}
		$container_styles = "text-align:".esc_attr($align).";";
		$icon_styles = "margin-left:5px;";

		echo $args['before_widget'];

		
?>
       	<div class="nl_button_widget" style="<?php echo esc_attr($container_styles); ?>">
						
				<a href="<?php echo esc_url($button_url); ?>" class="btn-default nlbtn1 <?php echo esc_attr($style); ?>"
										target="_self" style="<?php echo esc_attr($btn_styles); ?>">
		
						<?php echo esc_html($button_text);  ?>	
							<span class="fa fa-<?php echo esc_attr($btn_icon); ?>" style="<?php echo esc_attr($icon_styles); ?>">
						</span>
		
					
				</a>
		</div>
	<?php

		echo $args['after_widget'];

	}
	
	
	
}

