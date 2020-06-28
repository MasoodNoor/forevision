<?php
/**
 * Template part for displaying single post.
 * 
 * @package million-shades
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="single-header">
		<?php 
		 $tt_styles = '';
		 $tm_styles = '';
		 $td_styles = '';
		  $md_styles = '';
		 
		
		if( get_theme_mod( 'single-blog-element-order','img-top') == 'img-down') {
			$tt_styles .='display:none;';
			$tm_styles .='display:none;';
			$md_styles .='margin-bottom:25px!important;';
		}
		if( get_theme_mod( 'single-blog-element-order','img-top') == 'img-middle') {
			$td_styles .='display:none;';
			$tt_styles .='display:none;';
		}
		if( get_theme_mod( 'single-blog-element-order','img-top') == 'img-top') {
			$td_styles .='display:none;';
			$tm_styles .='display:none;';
		}
	?>
			<div class="featured-image"  style="<?php echo esc_attr($tt_styles); ?>">
			<?php 
			if( get_theme_mod( 'hide-featured-images-single') != '1' && has_post_thumbnail()) {
			$thumbnail_size = get_theme_mod('single-thumbnail-sizes','medium_large');
			the_post_thumbnail($thumbnail_size); 
			}
			?>
			</div>
		
		
		<div class="single-title-meta">
			<!-- to display categories on top  -->
			<?php echo get_the_category_list();?>
			<!-- Single Blog Post Title  -->	
			<h1 class="single-title"><?php the_title(); ?></h1>
		<div class="featured-image" style="<?php echo esc_attr($tm_styles); ?>">
			<?php 
			if( get_theme_mod( 'hide-featured-images-single') != '1' && has_post_thumbnail()) {
			$thumbnail_size = get_theme_mod('single-thumbnail-sizes','medium_large');
			the_post_thumbnail($thumbnail_size); 
			}
			?>
			</div>
			<!-- Single Blog Post Meta  -->
			<div class="single-meta">
				<?php million_shades_single_posted_on(); ?>
			</div><!-- .single-meta -->
			<div class="featured-image" style="<?php echo esc_attr($td_styles); ?>">
			<?php 
			if( get_theme_mod( 'hide-featured-images-single') != '1' && has_post_thumbnail()) {
			$thumbnail_size = get_theme_mod('single-thumbnail-sizes','medium_large');
			the_post_thumbnail($thumbnail_size); 
			}
			?>
			</div>
		</div>
		
	</header><!-- .single-header -->
    
    <!-- Single Blog Post Content  -->
	<div class="single-content clear">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'million-shades' ), 
				array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			
			million_shades_post_social();
			
			wp_link_pages( array(
				'before' => '<div class="page-links clear">' . esc_html__( 'Pages:', 'million-shades' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- End .single-content -->
	
<!-- Single Blog Post Footer Content  -->
	<footer class="single-footer">
		<?php if ( 'post' === get_post_type() ) {
	$get_tags = get_the_tag_list( '', esc_html__( ', ', 'million-shades' ) );
		if ( $get_tags ) {
			printf( '<div class="tags-links">' . esc_html__( 'Tagged %1$s', 'million-shades' ) . '</div>', $get_tags ); // WPCS: XSS OK.
		}
	}
		 ?>
		<?php million_shades_entry_footer(); ?>
	</footer><!-- .single-footer -->
	<?php million_shades_author_detail(); ?>
</article><!-- #post-## -->
