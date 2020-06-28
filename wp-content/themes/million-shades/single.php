<?php

/**
 * The template for displaying all single posts and attachments
 *
 * 
 *  @package million-shades
*/

get_header();


	$pg_hd_bg = get_theme_mod('page-header-background');
	$pg_hd_bg = esc_url($pg_hd_bg);
	$styles = '';
	if ($pg_hd_bg){ 
 
		$styles = 'background-image:url('.$pg_hd_bg.');';	

	}
	
	?>
<div class="page-content-header" style="<?php echo esc_attr($styles); ?>">
    <div class="inner-content">	 <!-- inner-container of page header -->   
	
		
		
    </div>	<!-- header inner content end -->
	
	
</div><!-- page header end -->

<div id="inner-content" class="inner-content">
	<div  class="primary-seconday">
	<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">
	
			<?php
			// Single Blog Post Loop Start.
			while ( have_posts() ) : the_post(); ?>
				<div class="post-single-entry">
				<?php
				// Attach template to single.php which is located on template-parts folder
				get_template_part( 'template-parts/content', 'single' );
				?>
				</div>
			
				<div class="single-nav">
				<?php
				million_shades_single_navigation();
				?>
			
				</div>
				
				<?php
				$hide_posts = get_theme_mod('hide-single-related-post');
				
				
				if ($hide_posts == '1'){
				
				?>
				
			<div class="related-single clear" >
			<?php
            // Attach related post template to single.php
			
			 get_template_part( 'single-post/related-posts' ); ?>
			 </div>
			
			<?php	} ?>
			<div class="single-comments">
			<?php
			// Attach comment template to single.php based on condition
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
			</div>
			
			
			<?php
			// End of the loop.
			
		endwhile;
		?>
		
	</main><!-- site-main end-->

	</div><!-- primary end-->

<?php get_sidebar(); ?>
</div><!-- primary-secondary end-->
</div><!-- inner content end-->
<?php get_footer(); ?>