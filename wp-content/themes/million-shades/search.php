<?php
/**
 * The template for displaying search results pages
 *
 * 
 * @package million-shades
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
	   
		<div class="inner-content"> 
		
		
	
			<!-- title of search page -->
			<div class="search-page">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'million-shades' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</div><!-- page-header -->

		</div>
</div>
	
<div id="inner-content" class="inner-content">
<div  class="primary-seconday">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>
			
			<div class="ms-search">
			<?php	get_template_part( 'template-parts/content', 'search' );?>
			</div>
			<?php
			endwhile;

			the_posts_navigation(); ?>
			<!-- pagination function calling to display page number -->
					<nav class="navigation pagination" role="navigation">
						<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'million-shades' ); ?></h1>
						
						<?php
						the_posts_pagination();
			
						?>
					</nav><!-- navigation -->

		<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- main end -->
	</section><!-- primary end-->

<?php
get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
