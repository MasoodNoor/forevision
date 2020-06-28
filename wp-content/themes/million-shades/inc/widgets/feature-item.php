<?php

/**
 * Featured Item
 *
 * @package Million Shades
 */
 
class Million_Shades_Feature_Item extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'feature-box','panels_groups' => array('million-shades'), 'description' => __( 'Featured Item.', 'million-shades') );
        parent::__construct(false, $name = __('MS P: Featured Item', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'feature-box';
		
		
		
    }
	
	/**
	 * Back-end widget form
	**/
	public function form( $instance ) {
		
		
	
	
	$fa_icons_array = million_shades_font_awesome_icons();
	
	$icon_align = array('left'=>__('Left','million-shades'),'right'=>__('Right','million-shades'));
		
	
	
		$title     			= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';
		$align   	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$feature_text   	= isset( $instance['feature_text'] ) ? esc_html( $instance['feature_text'] ) : '';
		$feature_icon   	= isset( $instance['feature_icon'] ) ? esc_attr( $instance['feature_icon'] ) : '';
		$icon_bg_color   	= isset( $instance['icon_bg_color'] ) ? esc_attr( $instance['icon_bg_color'] ) : '';
	
	?>
	
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('align')); ?>"><?php esc_html_e('Icon Align:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('align')) ?>" id="<?php echo esc_attr($this->get_field_id('align')) ?> ">
             <?php foreach ($icon_align as $key => $value) { ?>
	
					<option <?php echo ($align == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
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
		<label for="<?php echo esc_attr($this->get_field_id('feature_icon')); ?>"><?php esc_html_e('Featured Icon :', 'million-shades'); ?></label>
    
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
	
		<script>
    jQuery(document).ready(function($) {
		
        $('#<?php echo esc_attr( $this->get_field_id( 'icon_bg_color' ) ); ?>').wpColorPicker();
		
    });
	</script>
	
		
	<?php
	}
	
	/**
	 * Sanitize widget form values as they are saved
	**/
	
	function update( $new_instance, $old_instance ) {
		
		$instance = array();
		
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['align'] = million_shades_sanitize_align_two( $new_instance['align'] );
		$instance['feature_icon'] = sanitize_text_field( $new_instance['feature_icon'] );
		$instance['icon_bg_color'] = sanitize_hex_color( $new_instance['icon_bg_color'] );
		$instance['feature_text'] = sanitize_text_field( $new_instance['feature_text'] );
	
		

		return $instance;
		
	}


	/**
	 * Front-end display of widget
	**/
	public function widget( $args, $instance ) {
				
		extract( $args );

		$title     			= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';
		$align   	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$feature_text   	= isset( $instance['feature_text'] ) ? esc_html( $instance['feature_text'] ) : '';
		$feature_icon   	= isset( $instance['feature_icon'] ) ? esc_attr( $instance['feature_icon'] ) : '';
		$icon_bg_color   	= isset( $instance['icon_bg_color'] ) ? esc_attr( $instance['icon_bg_color'] ) : '';
		
		$cta_styles = '';
		$icon_styles = '';
		
		if($align == "left"){
            $icon_styles .= 'float:left; ';
			$icon_styles .= 'margin-right:15px; ';
			$icon_styles .= 'position:relative; ';
			$cta_styles .= 'position:relative; ';
			$cta_styles .= 'text-align:left; ';
			
        }
        
		if($align == "right"){
            $icon_styles .= 'float:right; ';
			$icon_styles .= 'margin-left:15px; ';
			$icon_styles .= 'position:relative; ';
			$cta_styles .= 'position:relative; ';
			$cta_styles .= 'text-align:right; ';
			
        }
		if ($icon_bg_color != ''){
		$icon_styles .= "background-color:".esc_attr($icon_bg_color).";";
		}
		$cta_styles .= "overflow:hidden;";
		
			echo $before_widget;
		
		
			?>
        

		 
	<div class="feature-box">
	
		<div class="icon_wrap_border_style">

				<?php if ($feature_icon){ ?>
		
					<div class="feature-icon"  style="<?php echo esc_attr($icon_styles); ?>">
		
						<span class="fa fa-<?php echo esc_attr($feature_icon); ?>"></span>

					</div>
		
				<?php } ?>
	
					<div class="feature-box-cta" style="<?php echo esc_attr($cta_styles); ?>">
						<?php if ($title){ ?>
							<h3 class="nl-widget-title"><?php echo esc_html($title); ?></h3>
						<?php } ?>	
						<?php if ($feature_text){ ?>
							<span class="nl-widget-text"><?php echo esc_html($feature_text);?></span>
						<?php } ?>	
			
					</div>
		</div>
   
	</div>
			
		
	    <?php 
		
		echo $after_widget;
		
	}

	

	


}



?>