<?php
/*
 * Widget Name: Blog Post Grid
 * 
 * @package million-shades
 * @since   1.0.0
 */

class Million_Shades_Post_Grid extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	
	public function __construct() {
		
		$widget_ops = array('classname' => 'widget-post-grid', 'description' => __( 'Blog Post Grid.', 'million-shades') );
        parent::__construct(false, $name = __('MS Post Grid', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'widget-post-grid';
	
    }
	
	
	
	/**
	 * Front-end display of widget
	**/
	public function widget( $args, $instance ) {

		global $before_widget, $after_widget, $before_title, $after_title;
		extract( $args );

		
		
		
		$number_of_posts   	= isset( $instance['number_of_posts'] ) ? esc_attr( $instance['number_of_posts'] ) : '6';
		$col_no   	= isset( $instance['col_no'] ) ? esc_attr( $instance['col_no'] ) : '3';
		$categories   	= isset( $instance['categories'] ) ? esc_attr( $instance['categories'] ) : '';
		$exclude   	= isset( $instance['exclude'] ) ? esc_attr( $instance['exclude'] ) : '';
		$order_by   	= isset( $instance['order_by'] ) ? esc_attr( $instance['order_by'] ) : 'title';
		$orders   	= isset( $instance['orders'] ) ? esc_attr( $instance['orders'] ) : 'ASC';
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		$align   	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$read_more_btn_txt   	= isset( $instance['read_more_btn_txt'] ) ? esc_attr( $instance['read_more_btn_txt'] ) : 'Read More';
		
		
		if ($col_no == ''){$col_no = '3';}
			
		if ($number_of_posts == ''){
			$number_of_posts = 6;
		}
		
		if ($order_by == ''){
			$order_by = 'title';
		}
		if ($orders == ''){
			$orders = 'ASC';
		}

		if ($read_more_btn_txt == ''){
			$read_more_btn_txt = 'Read More';
		}
		$cta1_styles = '';
		if ($align != ''){
		$cta1_styles = "text-align:".esc_attr($align).";";
		}
		  // Get Outputs
			echo $before_widget;
		
		?>
	
		<div class="nl_grid_row widget-post-grid col_gap_15">

	
			<?php
			$paged = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
		
			    $loop = new WP_Query(
				array(
					'post_type' => 'post',
					'category_name' => $categories,
					'posts_per_page' => $number_of_posts,
					
					'orderby' =>$order_by,
					'order' =>$orders,
					
					
					'category__not_in'=>get_cat_ID($exclude),
					'post_status' => 'publish',
					//'ignore_sticky_posts' => 1
				)
			);
			
			
		
				$col_count = 0;
	
		if( $loop->have_posts() ): while( $loop->have_posts() ): $loop->the_post();  ?>
	
				<?php $col_count++;  ?>
				
			<div class="nl-blog-entry no_of_col_<?php echo esc_attr( $col_no );  ?> col_no_<?php echo esc_attr( $col_count );  ?> col_padd_margin" >

				<div class="blog-wrap_border_style <?php echo esc_attr( $style );  ?>">
	
						
							<?php if (has_post_thumbnail()) {?>
								<div  class="post_thumbnail" >
									<?php $src = get_the_post_thumbnail_url();
									?>
	 
								<?php  if($src){ ?>
	 
									<a href="<?php the_permalink(); ?>" target="_self">
										<img src="<?php echo esc_url($src) ?>" alt="Blog Post Thumbnail" />
									</a>
								<?php    }  ?>

								</div>
	
							<?php } ?>
						
		
						<div class="blog-wrap-cta" style="<?php echo esc_attr($cta1_styles); ?>">
	
							<div><?php echo get_the_category_list();?></div>
							<a href="<?php the_permalink(); ?>" target="_self">
							<h3 class="blog-title"><?php the_title(); ?></h3>
							</a>
								<div class="vc-entry-meta">
									<?php million_shades_posted_on(); ?>
								</div><!-- .entry-meta -->
		
							<p class="blog-txt">
							
								<?php echo esc_html(get_the_excerpt());
								?>
								<div class="blog-buttons">
								<a href="<?php the_permalink(); ?>" class="read-more"
									target="_self">
										<?php echo esc_html($read_more_btn_txt); ?>
										
								</a>
								</div>
								
							</p>
			
						
	
		
						</div>
				</div>
			</div> <!--  end single post -->
	
	
			<?php 		
			
					if ( $col_count == $col_no) {
						$col_count = '0';
					}	

			endwhile; ?>
		</div>	  
		<?php 
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; 
		wp_reset_postdata(); 
	 ?>

	    <?php 
		echo $after_widget;
		
}
	
	
	/**
	 * Sanitize widget form values as they are saved
	**/
	public function update( $new_instance, $old_instance ) {
		
		$instance = array();

		/* Strip tags to remove HTML. For text inputs and textarea. */
		
		$instance['number_of_posts'] = absint( $new_instance['number_of_posts'] );
		$instance['categories'] = sanitize_text_field( $new_instance['categories'] );
		$instance['orders'] = million_shades_sanitize_order( $new_instance['orders'] );
		$instance['order_by'] = million_shades_sanitize_order_by( $new_instance['order_by'] );
		$instance['exclude'] = sanitize_text_field( $new_instance['exclude'] );
		$instance['read_more_btn_txt'] = sanitize_text_field( $new_instance['read_more_btn_txt'] );
		$instance['align'] = million_shades_sanitize_widget_align( $new_instance['align'] );
		$instance['style'] = million_shades_sanitize_widget_style( $new_instance['style'] );
		$instance['col_no'] = absint( $new_instance['col_no'] );
		
		
		return $instance;
		
	}

	/**
	 * Back-end widget form
	**/
	public function form( $instance ) {
		
		
		
		$instance = wp_parse_args( (array) $instance );
		
		$widget_align = array('left'=>__('Left','million-shades'),'center'=>__('Center','million-shades'));
		$post_orders = array('ASC'=>__('ASC','million-shades'),'DESC'=>__('DESC','million-shades'));
		$post_order_by = array('title'=>__('Title','million-shades'),'date'=>__('Date','million-shades'));
		$no_of_cols = array('3'=>__('3','million-shades'),'4'=>__('4','million-shades'));
		$widget_style = array('none'=>__('None','million-shades'),'style1'=>__('Style1','million-shades'),'style2'=>__('Style2','million-shades'),'style3'=>__('Style3','million-shades'),'style4'=>__('Style4','million-shades'));
	
		
		
		$number_of_posts   	= isset( $instance['number_of_posts'] ) ? esc_attr( $instance['number_of_posts'] ) : '6';
		$col_no   	= isset( $instance['col_no'] ) ? esc_attr( $instance['col_no'] ) : '3';
		$categories   	= isset( $instance['categories'] ) ? esc_attr( $instance['categories'] ) : '';
		$exclude   	= isset( $instance['exclude'] ) ? esc_attr( $instance['exclude'] ) : '';
		$order_by   	= isset( $instance['order_by'] ) ? esc_attr( $instance['order_by'] ) : 'title';
		$orders   	= isset( $instance['orders'] ) ? esc_attr( $instance['orders'] ) : 'ASC';
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		
		$align   	= isset( $instance['align'] ) ? esc_attr( $instance['align'] ) : '';
		$read_more_btn_txt   	= isset( $instance['read_more_btn_txt'] ) ? esc_attr( $instance['read_more_btn_txt'] ) : 'Read More';
		
	?>
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number_of_posts' ) ); ?>"><?php esc_html_e('Maximum posts to show:', 
			'million-shades'); ?></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'number_of_posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number_of_posts' ) ); ?>" value="<?php echo esc_attr( $number_of_posts ); ?>" 
			size="1" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('col_no')); ?>"><?php esc_html_e('No of Column:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('col_no')) ?>" id="<?php echo esc_attr($this->get_field_id('col_no')) ?> ">
             <?php foreach ($no_of_cols as $key => $value) { ?>
	
					<option <?php echo ($col_no == $key ) ? ' selected="selected"' : ''; ?> 
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
			<label for = "<?php echo esc_attr( $this->get_field_id( 'exclude' ) ); ?>"><?php esc_html_e('Exclude:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'exclude' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'exclude' ) ); ?>" value="<?php echo esc_attr( $exclude ); ?>" 
			class="widefat" />
		</p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'read_more_btn_txt' ) ); ?>"><?php esc_html_e('Read More Text:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'read_more_btn_txt' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'read_more_btn_txt' ) ); ?>" value="<?php echo esc_attr( $read_more_btn_txt ); ?>" 
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

}


?>