<?php

/**
 * Testimonial Slide Widget
 *
 * @package Million Shades
 */
 
class Million_Shades_Testimonial extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'testimonial-slide-widget', 'description' => __( 'Testimonial Slide.', 'million-shades') );
        parent::__construct(false, $name = __('MS Testimonial Slide', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'testimonial-slide-widget';
		
		
    }

	/**
	 * Front-end display of widget
	**/
	public function widget( $args, $instance ) {
		global $before_widget, $after_widget;
		extract( $args );

		
		$no_of_post   	= isset( $instance['no_of_post'] ) ? esc_attr( $instance['no_of_post'] ) : '10';
		$categories   	= isset( $instance['categories'] ) ? esc_attr( $instance['categories'] ) : '';
		$order_by   	= isset( $instance['title_tag'] ) ? esc_attr( $instance['order_by'] ) : 'title';
		$orders   	= isset( $instance['orders'] ) ? esc_attr( $instance['orders'] ) : 'ASC';
		$slideshow_speed   	= isset( $instance['slideshow_speed'] ) ? esc_attr( $instance['slideshow_speed'] ) : '5000';
		$control1_nav   	= isset( $instance['control1_nav'] ) ? esc_attr( $instance['control1_nav'] ) : 'true';
	
		
		$direction_nav   	= isset( $instance['direction_nav'] ) ? esc_attr( $instance['direction_nav'] ) : 'true';
		$slide_type   	= isset( $instance['slide_type'] ) ? esc_attr( $instance['slide_type'] ) : 'slide';
		$align   	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		
		
		if ($no_of_post == ''){
			$no_of_post == 10;
		}
		
		
		$avatar_styles = '';
		 $right_styles = '';
		 $title_styles = '';
		 
		if($align == "left"){
			
            $avatar_styles .= 'float:left;';
			$right_styles .= 'text-align:left;';
			$avatar_styles .= 'position:relative; ';
			$right_styles  .= 'position:relative; ';
			$avatar_styles .= 'margin-right:15px; ';
			$avatar_styles .= 'margin-left:50px; ';
			
			$right_styles  .= 'overflow:hidden; ';
			$right_styles  .= 'padding-left:5%; ';
			$right_styles  .= 'padding-right:10%; ';
			
        }
		if($align == "right"){
			
            $avatar_styles .= 'float:right; ';
			$right_styles .= 'text-align:right;';
			$avatar_styles .= 'position:relative; ';
			$right_styles  .= 'position:relative; ';
			$right_styles  .= 'padding-left:10%; ';
			$right_styles  .= 'padding-right:5%; ';
			$avatar_styles .= 'margin-left:15px; ';
			$avatar_styles .= 'margin-right:50px; ';
			
			$right_styles  .= 'overflow:hidden; ';
			
        }
		
		if($align == "center"){
			
          $avatar_styles .= 'text-align:center;';
		
		  $right_styles .= 'text-align:center;';
		  $title_styles .= 'margin-top:25px; ';
			$right_styles  .= 'padding-left:10%; ';
			$right_styles  .= 'padding-right:10%; ';
			
        }
		
		if($align == "down"){
          
		  $avatar_styles .= 'text-align:center;';
		  $avatar_styles .= 'margin-top: 35px;';
		  $right_styles .= 'text-align:center;';
		
		  $right_styles .= 'padding-left:10%;';
		  $right_styles .= 'padding-right:10%;';
		  $title_styles .= 'margin-top:40px; ';
	
			
        }
		
		echo $before_widget;
	
	
	$container_styles = "position:relative;";
	$testimonial_id = million_shades_html_id('flex7');
		
	$class = million_shades_make_class($testimonial_id);
	
	$slide = million_shades_carousel_style($class,'.testimonial-slide-widget',$slide_type,$slideshow_speed,'600','false',$control1_nav,$direction_nav);
	
	  
   ?>
	
	 <div class="testimonial-slide-widget <?php echo esc_attr($testimonial_id); ?> <?php echo esc_attr($style); ?>" style="<?php echo esc_attr($container_styles) ?>">
	<?php
		$args = array(
					'post_type' => 'testimonials',
					'testimonial-category' => $categories,
					'posts_per_page' => $no_of_post,
					'orderby' =>$order_by,
					'order' =>$orders,
					'post_status' => 'publish'
				);
		
		$loop = new WP_Query( $args );
		
		?>
		
		
	<ul class="slides <?php echo esc_attr($testimonial_id); ?>" >
			<?php	while ( $loop->have_posts() ) : $loop->the_post() ?>
					<li>	
           
				<?php if (( $align  === 'left') || ($align  === 'right') || ($align  === 'center')){ ?>		  
				<div class="left-style"> 
					<div class="avatar"  style="<?php echo esc_attr($avatar_styles) ?>">
                    <?php $src = get_the_post_thumbnail_url(); ?>
                    
                     <?php if ($src) { ?>
                     
					 <img height="125" width="125" alt="Author Photo"
					 src="<?php echo esc_url($src) ?>" style="border-radius:50%;" />
					
					<?php }  ?>
                    </div>
                                                           
                </div> 
				<?php }  ?>
				<div class="right-style" style="<?php echo esc_attr($right_styles); ?>">
						
							
					<div class="name1" style="<?php echo esc_attr($title_styles) ?>" >
                   <span></span>
				   
					<h4><?php echo esc_html(the_title()); ?>
					<?php  $company_name = get_post_meta( get_the_ID(), 'company_name', true ); ?>
					<?php if($company_name){ ?>
					<?php $coma =', '; ?>
					<?php echo esc_html($coma); ?>
					<?php echo esc_html($company_name); ?></h4>
					<?php } ?>
					</div>
							
					<div class="author-txt">
					
					<blockquote class="speech"><i class="fa fa-quote-left"></i><?php echo esc_html(get_the_content());?></blockquote>  
			
					</div>
				</div>
                     
						<?php if ( $align  === 'down' ){ ?>		  
						  <div class="left-style"> 
					<div class="avatar"  style="<?php echo esc_attr($avatar_styles) ?>">
                    <?php $src = get_the_post_thumbnail_url(); ?>
					 <img height="125" width="125" alt="Author Photo"
					src="<?php echo esc_url($src) ?>" style="border-radius:50%;" />
					
                    </div>
                                                           
                </div> 
				<?php }  ?>
                              
                   
				</li>
				<?php	endwhile;  ?>
		 </ul>
		<?php 
		wp_reset_postdata();
		?>
  </div>
  
  
  <?php echo $slide;
	    
		
		echo $after_widget;
		
	}

	/**
	 * Sanitize widget form values as they are saved
	**/
	
	public function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		
		
		$instance['align'] = million_shades_sanitize_testimonial_align( $new_instance['align'] );
		
		$instance['no_of_post'] = absint( $new_instance['no_of_post'] );
		$instance['categories'] = sanitize_text_field( $new_instance['categories'] );
		$instance['orders'] = million_shades_sanitize_order( $new_instance['orders'] );
		$instance['order_by'] = million_shades_sanitize_order_by( $new_instance['order_by'] );
		
		$instance['slideshow_speed'] = million_shades_sanitize_slide_speeds( $new_instance['slideshow_speed'] );
		
		$instance['control1_nav'] = million_shades_sanitize_false_true( $new_instance['control1_nav'] );
		
		$instance['direction_nav'] = million_shades_sanitize_false_true( $new_instance['direction_nav'] );
		
		$instance['slide_type'] = million_shades_sanitize_animation_type( $new_instance['slide_type'] );
		
		$instance['style'] = million_shades_sanitize_widget_style( $new_instance['style'] );
		
	
		return $instance;
		
	}

	/**
	 * Back-end widget form
	**/
	public function form( $instance ) {
	
	
	$animations_type = array('fade'=>__('Fade','million-shades'),'slide'=>__('Slide','million-shades'));
	
	$widget_style = array('none'=>__('None','million-shades'),'style1'=>__('Style1','million-shades'),'style2'=>__('Style2','million-shades'),'style3'=>__('Style3','million-shades'),'style4'=>__('Style4','million-shades'));
	
	$widget_align = array('center'=>__('Center','million-shades'),'left'=>__('Left','million-shades'),'right'=>__('Right','million-shades'),'down'=>__('Down','million-shades'));
	
	$post_orders = array('ASC'=>__('ASC','million-shades'),'DESC'=>__('DESC','million-shades'));
	
	$post_order_by = array('title'=>__('Title','million-shades'),'date'=>__('Date','million-shades'));
	
	$directions_nav = array('true'=>__('True','million-shades'),'false'=>__('False','million-shades'));
	$controls_nav = array('true'=>__('True','million-shades'),'false'=>__('False','million-shades'));
	
	$slide_speeds = array('5000'=>__('5000','million-shades'),'4000'=>__('4000','million-shades'),
	'3500'=>__('3500','million-shades'),'3000'=>__('3000','million-shades'),'2000'=>__('2000','million-shades'));
	
	
	
		$no_of_post   	= isset( $instance['no_of_post'] ) ? esc_attr( $instance['no_of_post'] ) : '';
		$categories   	= isset( $instance['categories'] ) ? esc_attr( $instance['categories'] ) : '';
		$order_by   	= isset( $instance['title_tag'] ) ? esc_attr( $instance['order_by'] ) : '';
		$orders   	= isset( $instance['orders'] ) ? esc_attr( $instance['orders'] ) : '';
		$slideshow_speed   	= isset( $instance['slideshow_speed'] ) ? esc_attr( $instance['slideshow_speed'] ) : '5000';
		$control1_nav   	= isset( $instance['control1_nav'] ) ? esc_attr( $instance['control1_nav'] ) : '';
	
		
		$direction_nav   	= isset( $instance['direction_nav'] ) ? esc_attr( $instance['direction_nav'] ) : '';
		$slide_type   	= isset( $instance['slide_type'] ) ? esc_attr( $instance['slide_type'] ) : '';
		$align   	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
	
	?>
	
	

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'no_of_post' ) ); ?>">
			<?php esc_html_e('No of Post:', 'million-shades'); ?></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'no_of_post' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'no_of_post' ) ); ?>" value="<?php echo esc_attr( $no_of_post ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('slide_type')); ?>"><?php esc_html_e('Animation Type:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('slide_type')) ?>" id="<?php echo esc_attr($this->get_field_id('slide_type')) ?> ">
             <?php foreach ($animations_type as $key => $value) { ?>
	
					<option <?php echo ($slide_type == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'categories' ) ); ?>"><?php esc_html_e('Enter categories separated with comma or leave empty for all.:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'categories' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'categories' ) ); ?>" value="<?php echo esc_attr( $categories ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('orders')); ?>"><?php esc_html_e('Order:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('orders')) ?>" id="<?php echo esc_attr($this->get_field_id('orders')) ?> ">
             <?php foreach ($post_orders as $key => $value) { ?>
	
					<option <?php echo ($orders == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('order_by')); ?>"><?php esc_html_e('Order By:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('order_by')) ?>" id="<?php echo esc_attr($this->get_field_id('order_by')) ?> ">
             <?php foreach ($post_order_by as $key => $value) { ?>
	
					<option <?php echo ($order_by == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
		
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('slideshow_speed')); ?>"><?php esc_html_e('Slideshow Speed:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('slideshow_speed')) ?>" id="<?php echo esc_attr($this->get_field_id('slideshow_speed')) ?> ">
             <?php foreach ($slide_speeds as $key => $value) { ?>
	
					<option <?php echo ($slideshow_speed == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>

		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('control1_nav')); ?>"><?php esc_html_e('Control Navigation:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('control1_nav')) ?>" id="<?php echo esc_attr($this->get_field_id('control1_nav')) ?> ">
             <?php foreach ($controls_nav as $key => $value) { ?>
	
					<option <?php echo ($control1_nav == $key ) ? ' selected="selected"' : ''; ?> 
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
	
	
	

}



?>