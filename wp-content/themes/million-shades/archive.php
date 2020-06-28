<?php
/**
 * The template for displaying archive pages
 *
 * 
 *  @package million-shades
 */

get_header(); 

	
	
	?>
<div class="page-content-header">
	<div class="inner-content">	    
		
		
	
		<!-- title of archive page -->
			<div class="archive-header">
				<?php
					the_archive_title( '<h1 class="page-title10">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div><!-- page-header -->
	
	</div>
</div>

<div id="inner-content" class="inner-content">
    
<div  class="primary-seconday">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

			<div class="post-archive">
			<?php	get_template_part( 'template-parts/content', get_post_format() ); ?>
			</div>
			
			<?php
			endwhile;

			?>
			
		<nav class="navigation pagination" role="navigation">
		<h1 class="screen-reader-text"><?php esc_html_e( 'Posts navigation', 'million-shades' ); ?></h1>
			<?php the_posts_pagination();?>
			
		</nav>
	

   <?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- main end -->
	</div><!-- primary end-->

<?php
get_sidebar();  ?>
</div><!-- primary-secondary end-->
</div><!-- inner-content -->
	
	<?php
get_footer();
?>
