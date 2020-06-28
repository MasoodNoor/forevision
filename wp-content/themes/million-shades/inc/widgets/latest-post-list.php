<?php

/**
 * Latest Post List
 *
 * @package Million Shades
 */

class Million_Shades_Latest_News extends WP_Widget {
	
	/**
	 * Register widget
	**/
	
	public function __construct() {
		$widget_ops = array('classname' => 'widget-latest-news', 'description' => __( 'Latest Post List.', 'million-shades') );
        parent::__construct(false, $name = __('MS Latest Post List', 'million-shades'), $widget_ops);
		$this->alt_option_name = 'widget-latest-news';
		
    }
	
	/**
	 * Back-end widget form
	**/
	function form( $instance ) {
		
		$title= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';
		
		$items_num= isset( $instance['items_num'] ) ? esc_attr( $instance['items_num'] ) : '5';
		
		$categories= isset( $instance['categories'] ) ? esc_attr( $instance['categories'] ) : '';
	
		$title_font_size = isset( $instance['title_font_size'] ) ? esc_attr( $instance['title_font_size'] ) : '12';
		$date_font_size = isset( $instance['date_font_size'] ) ? esc_attr( $instance['date_font_size'] ) : '12';
		
	?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:', 'million-shades'); ?></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' )); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); 
			?>" class="widefat" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'items_num' ) ); ?>"><?php esc_html_e('Maximum posts to show:', 'million-shades'); ?></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'items_num' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'items_num' ) ); ?>" value="<?php echo esc_attr( $items_num ); ?>" 
			size="1" />
		</p>
		<?php
		$blog_cats = get_terms('category', array('hide_empty' => false));
		
		?>
		<p>
          <label for="<?php echo esc_attr( $this->get_field_id( 'categories' ) ); ?>"><?php esc_html_e('Category:', 'million-shades'); ?>
		  </label>
          <select class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'categories' ) ); ?>">
          
          <option value=""><?php esc_html_e( 'All', 'million-shades' ); ?></option>
          <?php foreach($blog_cats as $blog_cat) { ?>
				
		  		<option <?php echo ($categories == $blog_cat->term_id ) ? ' selected="selected"' : ''; ?> 
				value="<?php echo esc_attr( $blog_cat->term_id ); ?>"><?php echo esc_attr( $blog_cat->name ); ?></option>

		  <?php } ?>
          
          </select>
       </p>
		
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'title_font_size' ) ); ?>"><?php esc_html_e('Text Font Size:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title_font_size' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'title_font_size' ) ); ?>" value="<?php echo esc_attr( $title_font_size ); ?>" 
			class="widefat" />
		</p>
	
		<p>
			<label for = "<?php echo esc_attr( $this->get_field_id( 'date_font_size' ) ); ?>"><?php esc_html_e('Link Font Size:', 'million-shades'); ?>
			</label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'date_font_size' ) ); ?>" 
			name="<?php echo esc_attr( $this->get_field_name( 'date_font_size' ) ); ?>" value="<?php echo esc_attr( $date_font_size ); ?>" 
			class="widefat" />
		</p>
	
	
 
	<?php
	
	}
	
	/**
	 * Sanitize widget form values as they are saved
	**/
	function update( $new_instance, $old_instance ) {
		
		
		 $instance = $old_instance;

		
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['items_num'] = absint( $new_instance['items_num'] );
		$instance['categories'] = sanitize_text_field( $new_instance['categories'] );
		
		$instance['title_font_size'] = absint( $new_instance['title_font_size'] );
		

		$instance['date_font_size'] = absint( $new_instance['date_font_size'] );
		
		
		
		return $instance;
		
	}

	/**
	 * Front-end display of widget
	**/
	function widget( $args, $instance ) {

		global $before_widget, $after_widget, $before_title, $after_title;
		extract( $args );
		
		
		$title_styles ='';
		$date_styles ='';
		
		
		
		$title   	= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';
		
		$items_num   	= isset( $instance['items_num'] ) ? esc_attr( $instance['items_num'] ) : '5';
		
		$categories   	= isset( $instance['categories'] ) ? esc_attr( $instance['categories'] ) : '';
	
		$title_font_size   	= isset( $instance['title_font_size'] ) ? esc_attr( $instance['title_font_size'] ) : '12';
		$date_font_size   	= isset( $instance['date_font_size'] ) ? esc_attr( $instance['date_font_size'] ) : '12';
		
		
		if($title_font_size != "") {
            $title_styles .= "font-size: ".intval($title_font_size)."px;";
		}
		
		
		if($date_font_size != "") {
           $date_styles .= "font-size: ".intval($date_font_size)."px;";
		}
		
		 
		  // Get Outputs
			echo $before_widget;
			// Render widget title.
			if ( ! empty( $title ) ) {
				
				echo  $before_title.esc_html($title).$after_title;
				
			}
			
			
	 
			$qy_latest = new WP_Query(
				array(
					'post_type' => 'post',
					'cat'		=> $categories,
					'posts_per_page' => $items_num,
					'ignore_sticky_posts' => 1,
					'post_status' => 'publish'
				)
			);
			?>
			
		
			
			<div class="news-widget-section-">
				<?php if( $qy_latest->have_posts() ): while( $qy_latest->have_posts() ): $qy_latest->the_post();  ?>
					<div class="news-widget-body-">
                        
						<div class="news-widget-media-left">
		
                          
							 <?php $src = get_the_post_thumbnail_url(); ?>
	 
							<?php  if($src){ ?>
	 
								<a href="<?php the_permalink(); ?>">
									<img 
									src="<?php echo esc_url($src) ?>" height="80" width="80" alt="Blog Post Thumbnail" />
								</a>
							<?php    }  ?>

                        </div>
                
						
						<div class="news-widget-media-right">
						<a href="<?php the_permalink(); ?>">
                           <span class="entry-heading"><?php the_title(); ?></span>
						   </a>
                           <span class="entry-date" style="<?php echo esc_attr($date_styles);?>"><?php echo get_the_date(); ?></span>

                        </div>
                    </div>


				<?php endwhile; endif; 

				 wp_reset_postdata(); ?>
				
			</div>


	    <?php 
		echo $after_widget;
		
	}
	

}


?>