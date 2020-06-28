<?php
/**
 * The default template for displaying related post grid
 
 * 
 * @package million-shades
 * 
 */

?>

<div class="item-wrap">
	<div id="post-<?php the_ID(); ?>">
		<div class="image-container">
			<figure class="image-thumb">
				<a href="<?php the_permalink(); ?>">
					<?php echo get_the_post_thumbnail($post->ID, array(300,300), array('title' => '')); ?>
				</a>
				
			</figure>
		</div>
		
		<?php if (!is_single()){ ?>
		
		<div class="ms-related-post-body">
			
			<h4 class="ms-related-post-title"><?php the_title(); ?></h4>
			
			
					<span><time datetime="<?php esc_attr( the_time( get_option( 'date_format' ) ));?>"><i class="fa fa-clock-o"></i> <?php esc_attr( the_time( get_option( 'date_format' ) ));?></time></span>
					<span><i class="fa fa-bookmark-o"></i> <?php the_category(','); ?></span>
				
			


		</div>
		<?php } ?>
		
		<?php if (is_single()){ ?>
		
		<div class="ms-related-single-body">
			
			<h3 class="post-single-title"><?php the_title(); ?></h3>
			<div class="post-single-description">
			<div class="single-related-meta">
					<span><time datetime="<?php esc_attr( the_time( get_option( 'date_format' ) ));?>"><i class="fa fa-clock-o"></i> <?php esc_attr( the_time( get_option( 'date_format' ) ));?></time></span>
					<span><i class="fa fa-bookmark-o"></i> <?php the_category(','); ?></span>
			
			</div>
				
			
				
			</div>


		</div>
		<?php } ?>
	</div>
</div>