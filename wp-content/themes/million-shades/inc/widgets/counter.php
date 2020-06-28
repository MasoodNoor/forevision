<?php

/**
 * Counter
 *
 * @package Million Shades
 */
 
class Million_Shades_Counter extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'counter-container', 'description' => __( 'Counter.', 'million-shades') );
        parent::__construct(false, $name = __('MS Counter', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'counter-container';
		
		
		
    }

	/**
	 * Front-end display of widget
	**/
	public function widget( $args, $instance ) {
				
		extract( $args );

		
		
		
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		$counter_text   	= isset( $instance['counter_text'] ) ? esc_html( $instance['counter_text'] ) : '';
		$counter_icon   	= isset( $instance['counter_icon'] ) ? esc_attr( $instance['counter_icon'] ) : '';
		$start_val   	= isset( $instance['start_val'] ) ? esc_attr( $instance['start_val'] ) : '';
		$end_val   	= isset( $instance['end_val'] ) ? esc_attr( $instance['end_val'] ) : '';
		$icon_bg_color   	= isset( $instance['icon_bg_color'] ) ? esc_attr( $instance['icon_bg_color'] ) : '';
		
		if ($icon_bg_color == ''){
		$icon_styles = "background-color:#fff;";
		}
		
		if ($icon_bg_color != ''){
		$icon_styles = "background-color:".esc_attr($icon_bg_color).";";
		}
		
		if ($start_val == ''){
		$start_val = '100';
		}
			
		if ($end_val == ''){
		$end_val = '500';
		}
		
		if ($counter_text == ''){
		$counter_text = 'Miles';
		}
		
		echo $before_widget;
	
		 $id = million_shades_html_id('count1');
		
	
?>


		 
	<div class="counter-container <?php echo esc_attr($id) ?> <?php echo esc_attr($style) ?>">
		<?php if ($counter_icon){ ?>
		
			<div class="counter-icon icon-extra"  style="<?php echo esc_attr($icon_styles); ?>" >
		
	
				<span class="fa fa-<?php echo esc_attr($counter_icon); ?>"></span>

			</div>
		
		<?php } ?>
			<span class="counter-val"></span>
			<span class="counter-txt">
     
			<?php echo esc_html($counter_text); ?>
  
			</span>
  
	</div>

<script>
jQuery(document).ready(function(){

  jQuery('.<?php echo esc_attr($id) ?> .counter-val').countTo({
    from: <?php echo esc_attr($start_val) ?>,
    to: <?php echo esc_attr($end_val) ?>,
    speed: 10000,
    refreshInterval: 50,
    formatter: function (value, options) {
      return value.toFixed(options.decimals);
    },
    onUpdate: function (value) {
      console.debug(this);
    },
    onComplete: function (value) {
      console.debug(this);
    }
  });
  
  });
</script>		
		
	    <?php 
		
		echo $after_widget;
		
	}

	/**
	 * Sanitize widget form values as they are saved
	**/
	
	public function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		
		
		$instance['style'] = million_shades_sanitize_widget_style( $new_instance['style'] );
		$instance['start_val'] = absint( $new_instance['start_val'] );
		$instance['end_val'] = absint( $new_instance['end_val'] );
		$instance['counter_text'] = sanitize_text_field( $new_instance['counter_text'] );
		$instance['counter_icon'] = sanitize_text_field( $new_instance['counter_icon'] );
		$instance['icon_bg_color'] = sanitize_hex_color( $new_instance['icon_bg_color'] );
		

		return $instance;
		
	}

	/**
	 * Back-end widget form
	**/
	public function form( $instance ) {
		
	
		
	
	$fa_icons_array = million_shades_font_awesome_icons();


		
	$widget_style = array('style1'=>__('Style1','million-shades'),'style2'=>__('Style2','million-shades'),'style3'=>__('Style3','million-shades'),'style4'=>__('Style4','million-shades'),'none'=>__('None','million-shades'));
	

		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		$counter_text   	= isset( $instance['counter_text'] ) ? esc_html( $instance['counter_text'] ) : '';
		$counter_icon   	= isset( $instance['counter_icon'] ) ? esc_attr( $instance['counter_icon'] ) : '';
		$start_val   	= isset( $instance['start_val'] ) ? esc_attr( $instance['start_val'] ) : '';
		$end_val   	= isset( $instance['end_val'] ) ? esc_attr( $instance['end_val'] ) : '';
		$icon_bg_color   	= isset( $instance['icon_bg_color'] ) ? esc_attr( $instance['icon_bg_color'] ) : '';
	
	?>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('counter_icon')); ?>"><?php esc_html_e('Counter Icon :', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('counter_icon')) ?>" id="<?php echo esc_attr($this->get_field_id('counter_icon')) ?> ">
				<?php foreach ($fa_icons_array as $key => $value) { ?>
	
					<option <?php echo ($counter_icon == $key ) ? ' selected="selected"' : ''; ?> 
						value="<?php echo esc_attr( $key ); ?>"><?php 
					echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
 
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'start_val' ) ); ?>"><?php esc_html_e('Start Val:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'start_val' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'start_val' ) ); ?>" value="<?php echo esc_attr( $start_val ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'end_val' ) ); ?>"><?php esc_html_e('End Val:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'end_val' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'end_val' ) ); ?>" value="<?php echo esc_attr( $end_val ); ?>" 
			class="widefat" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'counter_text' ) ); ?>">
			<?php esc_html_e('Text:', 'million-shades'); ?></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'counter_text' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'counter_text' ) ); ?>" value="<?php echo esc_attr( $counter_text ); ?>" 
			class="widefat" />
		</p>
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'icon_bg_color' ) ); ?>"><?php esc_html_e('Icon Background Color:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'icon_bg_color' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'icon_bg_color' ) ); ?>" value="<?php echo esc_attr( $icon_bg_color ); ?>" 
			class="widefat" />
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
		
        $('#<?php echo esc_attr( $this->get_field_id( 'icon_bg_color' ) ); ?>').wpColorPicker();
		
    });
	</script>
		
	<?php
	}

	

}



?>