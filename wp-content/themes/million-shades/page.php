<?php

/**
 * The template for displaying all pages
 * @package million-shades
 * 
 */

get_header(); ?>

<?php
	 
	
	$pg_hd_bg = get_theme_mod('page-header-background');
	$pg_hd_bg = esc_url($pg_hd_bg);
	$styles = '';
	if ($pg_hd_bg){ 
 
		$styles = 'background-image:url('.$pg_hd_bg.');';	

	}
	
	?>
<div class="page-content-header" style="<?php echo esc_attr($styles); ?>">
    <div class="inner-content">	 <!-- inner-container of page header -->   
	
		
	
	
		<div class="entry-header"> <!-- page title of page -->  
			<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
		</div><!-- entry-header  end  -->
		
    </div>	<!-- header inner content end -->
	
	
</div><!-- page header end -->

<div class="inner-content"> <!-- inner-container of page content area -->  
	<div  class="primary-seconday">
	<div id="primary" class="content-area"> <!-- primary area(except sidebar) of page content area -->  
	

		<main id="main" class="site-main" role="main"> <!-- main content of page -->  
			
			
			<?php
			while ( have_posts() ) : the_post();  ?>
				
				<div class="ms-page">
			<?php	get_template_part( 'template-parts/content', 'page' );  ?>
				</div>
				
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
			
		
		</main><!-- main end-->
	</div><!-- primary end-->


	<?php get_sidebar(); ?>
	</div><!-- primary-secondary end -->
</div><!-- inner-container end -->
<?php get_footer(); ?>
