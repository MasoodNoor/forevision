<?php
/**
 * Template part for displaying posts
 *
 * 
 * @package million-shades
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		
		 <?php
		 // To hide/show all featured images on index.php
		 $tt_styles = '';
		 $tm_styles = '';
		 $td_styles = '';
		  $md_styles = '';
		 
		
		if( get_theme_mod( 'blog-element-order','img-top') == 'img-down') {
			$tt_styles .='display:none;';
			$tm_styles .='display:none;';
			$md_styles .='margin-bottom:25px!important;';
		}
		if( get_theme_mod( 'blog-element-order','img-top') == 'img-middle') {
			$td_styles .='display:none;';
			$tt_styles .='display:none;';
		}
		if( get_theme_mod( 'blog-element-order','img-top') == 'img-top') {
			$td_styles .='display:none;';
			$tm_styles .='display:none;';
		}
		?>
			
			<div class="post-thumbnail" style="<?php echo esc_attr($tt_styles); ?>">	
				<?php	
				if( get_theme_mod( 'hide-featured-images') != '1' && has_post_thumbnail()) {
				$thumbnail_sizes = get_theme_mod( 'thumbnail-sizes','medium_large');
				the_post_thumbnail($thumbnail_sizes); 
				}
				?>
			</div>
		
		
		
		<div class="title-meta">
		 <!-- To display categories on the top of the post title -->
			<?php echo get_the_category_list();?>
		
		<!-- To display titles of blog post -->
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
		
		<div class="post-thumbnail" style="<?php echo esc_attr($tm_styles); ?>">	
				<?php	
				if( get_theme_mod( 'hide-featured-images') != '1' && has_post_thumbnail()) {
				$thumbnail_sizes = get_theme_mod( 'thumbnail-sizes','medium_large');
				the_post_thumbnail($thumbnail_sizes); 
				}
				?>
		</div>
		
		<?php
		
		// To display meta of blog post -->	
		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta" style="<?php echo esc_attr($md_styles); ?>">
		    	
	
			<!-- Meta function calling -->
				<?php million_shades_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
		endif; ?>
		
		<div class="post-thumbnail" style="<?php echo esc_attr($td_styles); ?>">	
				<?php
				if( get_theme_mod( 'hide-featured-images') != '1' && has_post_thumbnail()) {				
				$thumbnail_sizes = get_theme_mod( 'thumbnail-sizes','medium_large');
				the_post_thumbnail($thumbnail_sizes); 
				}
				?>
		</div>
		</div>
	</header><!-- .entry-header -->

<!-- Content Area of blog post(index.php) -->
	<div class="entry-content">
	    <!-- to show excerpt or full text of posts -->
		<?php $excerpt = get_theme_mod('enable-excerpt','1');
		
		$read_more_btn_txt = get_theme_mod('read-more-input','Read More');
		$drop_cap = get_theme_mod('enable-drop-cap','1');
		if($drop_cap == '1'){
			$drop_cap = 'drop-cap';
		}else {
			$drop_cap = 'none';
		}
		
	
							if (($excerpt == '1')) { ?>
								<p class="<?php echo esc_attr($drop_cap); ?>">
								<?php 
								echo esc_html(get_the_excerpt());
								?>
	
								<div class="blog-buttons">
								<a href="<?php the_permalink(); ?>" class="read-more"
									target="_self">
										<?php echo esc_html($read_more_btn_txt); ?>
										
								</a>
								</div>
								</p>
								<?php
							} else {
									
									the_content();
							}
						
						?>
						
	</div> <!-- end .entry-content -->
	
<!-- footer area of posts(index.php)-->
	<footer class="entry-footer">
	
	<?php if ( 'post' === get_post_type() ) {
	$get_tags = get_the_tag_list( '', esc_html__( ', ', 'million-shades' ) );
		if ( $get_tags ) {
			printf( '<div class="tags-links">' . esc_html__( 'Tagged %1$s', 'million-shades' ) . '</div>', $get_tags ); // WPCS: XSS OK.
		}
	}
		 ?>
		 
		<?php million_shades_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
	
	
</article><!-- #post-## -->

