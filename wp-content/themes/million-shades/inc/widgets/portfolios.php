<?php
/**
 * Portfolios Grid Widget
 *
 * @package Million Shades
 */

class Million_Shades_Portfolios extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'widget-portfolios', 'description' => __( 'Portfolios Grid.', 'million-shades') );
        parent::__construct(false, $name = __('MS Portfolios', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'widget-portfolios';
		
    }

	/**
	 * Front-end display of widget
	**/
	public function widget( $args, $instance ) {

		global $before_widget, $after_widget;
		extract( $args );

		$number_of_posts   	= isset( $instance['number_of_posts'] ) ? esc_attr( $instance['number_of_posts'] ) : '6';
		$num_of_col   	= isset( $instance['num_of_col'] ) ? esc_attr( $instance['num_of_col'] ) : '3';
		$categories   	= isset( $instance['categories'] ) ? esc_attr( $instance['categories'] ) : '';
		$order_by   	= isset( $instance['order_by'] ) ? esc_attr( $instance['order_by'] ) : 'title';
		$orders   	= isset( $instance['orders'] ) ? esc_attr( $instance['orders'] ) : 'ASC';
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		
		$id = million_shades_html_id('portfolio1');
		
		if ($number_of_posts == ''){
			$number_of_posts = 6;
		}
		if ($num_of_col == ''){
			$num_of_col = 3;
		}
		if ($order_by == ''){
			$order_by = 'title';
		}
		if ($orders == ''){
			$orders = 'ASC';
		}
		 
		  // Get Outputs
			echo $before_widget;
		

 ?>
<div class="<?php echo esc_attr($id); ?> widget-portfolio-wrap nl_grid_row col_gap_0">	

	<?php	
		$paged  = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
		
		$args = array(
					'post_type' => 'portfolios',
					'portfolio-category' => $categories,
					'posts_per_page' => $number_of_posts,
					'paged' => $paged,
					'orderby' =>$order_by,
					'order' =>$orders,
					
					'post_status' => 'publish'
			);
	
		$loop = new WP_Query( $args );
	
		while ($loop->have_posts()) : $loop->the_post();
		
 
 ?>

	<div class="widget-portfolio-entry no_of_col_<?php echo esc_attr($num_of_col); ?> nr-col">
			
	  
		<div class="widget-portfolio-media">

				<?php $page_title = get_the_title();
				echo the_post_thumbnail(); ?>
  
			<div class="widget-portfolio-txt <?php echo esc_attr($style); ?>">
    
				<div class="portfolio-inner-content">	
	
					<h3><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr($page_title); ?>">
					<?php echo esc_html($page_title); ?></a>
					</h3>
	
				
					<a class="more-link" title="<?php the_title_attribute();?>" href="<?php the_permalink(); ?>">
						<?php
							esc_html_e('Read More', 'million-shades'); ?>
					</a>

				
				</div>
			</div> 
		</div>
 
	</div> <!-- Here  -->

<!-- end loop -->
<?php
endwhile;

		// Reset Post Data
		wp_reset_postdata(); 
		?>
</div>

	    <?php 
		echo  $after_widget;
		
	}
	
	
	/**
	 * Sanitize widget form values as they are saved
	**/
	public function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;

		$instance['number_of_posts'] = absint( $new_instance['number_of_posts'] );
		$instance['num_of_col'] = absint( $new_instance['num_of_col'] );
		$instance['categories'] = sanitize_text_field( $new_instance['categories'] );
		$instance['orders'] = million_shades_sanitize_order( $new_instance['orders'] );
		$instance['order_by'] = million_shades_sanitize_order_by( $new_instance['order_by'] );
		$instance['style'] = million_shades_sanitize_hover_style( $new_instance['style'] );
		
		return $instance;
		
	}

	/**
	 * Back-end widget form
	**/
	public function form( $instance ) {
		
		
		$instance = wp_parse_args( (array) $instance);
		
		
		$widget_style = array('hover1'=>__('Hover1','million-shades'),'hover2'=>__('Hover2','million-shades'),'hover3'=>__('Hover3','million-shades'));
		
		$ordering = array('ASC'=>__('ASC','million-shades'),'DESC'=>__('DESC','million-shades'));
	
		$orders_by = array('title'=>__('Title','million-shades'),'date'=>__('Date','million-shades'));
		
		$num_of_cols = array('3'=>__('3','million-shades'),'4'=>__('4','million-shades'),'5'=>__('5','million-shades'));
		
		$number_of_posts   	= isset( $instance['number_of_posts'] ) ? esc_attr( $instance['number_of_posts'] ) : '6';
		$num_of_col   	= isset( $instance['num_of_col'] ) ? esc_attr( $instance['num_of_col'] ) : '3';
		$categories   	= isset( $instance['categories'] ) ? esc_attr( $instance['categories'] ) : '';
		$order_by   	= isset( $instance['order_by'] ) ? esc_attr( $instance['order_by'] ) : '';
		$orders   	= isset( $instance['orders'] ) ? esc_attr( $instance['orders'] ) : '';
		$style   	= isset( $instance['style'] ) ? esc_attr( $instance['style'] ) : '';
		
		
	?>
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number_of_posts' ) ); ?>"><?php esc_html_e('Maximum posts to show:', 'million-shades'); ?></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'number_of_posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number_of_posts' ) ); ?>" value="<?php echo esc_attr( $number_of_posts ); ?>" 
			size="1" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('num_of_col')); ?>"><?php esc_html_e('Number of Columns:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('num_of_col')) ?>" id="<?php echo esc_attr($this->get_field_id('num_of_col')) ?> ">
             <?php foreach ($num_of_cols as $key => $value) { ?>
	
					<option <?php echo ($num_of_col == $key ) ? ' selected="selected"' : ''; ?> 
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
             <?php foreach ($ordering as $key => $value) { ?>
	
					<option <?php echo ($orders == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
	
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('order_by')); ?>"><?php esc_html_e('Order By:', 'million-shades'); ?></label>
    
			<select class="widefat"  name="<?php echo esc_attr($this->get_field_name('order_by')) ?>" id="<?php echo esc_attr($this->get_field_id('order_by')) ?> ">
             <?php foreach ($orders_by as $key => $value) { ?>
	
					<option <?php echo ($order_by == $key ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $key ); ?>"><?php 
				echo esc_attr( $value ); ?></option>

				
                <?php } ?>
			</select>
  
		</p>
	
		

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('style')); ?>"><?php esc_html_e('Hover Style:', 'million-shades'); ?></label>
    
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