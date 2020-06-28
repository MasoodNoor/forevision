<?php

/**
 * The Template is to display single portfolio

 * package million-shades
 * 
**/

get_header();

?>

<div class="page-content-header">
    
	<div class="inner-content">	    

	       

	</div>
	
</div>

<div id="inner-content" class="inner-content">
    

	
<div id="primary" class="content-area">
	
	<main id="main" class="site-main" role="main">
                    
             <?php
                        // Start the Loop.
               while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?> " <?php post_class(); ?>>
        
								<?php $layout = get_theme_mod('portfolio-single-layout','one') ?>
							<?php if ($layout == 'one'){ ?>
							<div class="portfolio-single-content">
								<?php
								the_content( sprintf(
								/* translators: %s: Name of current post. */
								wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'million-shades' ), 
									array( 'span' => array( 'class' => array() ) ) ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'million-shades' ),
									'after'  => '</div>',
								) );
								?>
							</div><!-- single-content -->
						<?php } ?>
						<?php if ($layout == 'two'||$layout == 'three'){ ?>
							<div class="portfolio-single-media">                              
								<?php the_post_thumbnail(); ?>
							</div>
						<?php } ?>
						<?php if ($layout == 'one'||$layout == 'two'){ ?>
							<h1 class="portfolio-single-title"><?php the_title(); ?></h1>
						<?php } ?>                               
							<div class="portfolio-single-meta">
								<?php get_template_part( 'single-post/portfolio-meta' ); ?>
							</div>
						<?php if ($layout == 'three'){ ?>
							<h1 class="portfolio-single-title"><?php the_title(); ?></h1>
						<?php } ?> 
						<?php if ($layout == 'one'){ ?>
							<div class="portfolio-single-media">                              
								<?php the_post_thumbnail(); ?>
							</div>
						<?php } ?>
		
						<?php if ($layout == 'two'||$layout == 'three'){ ?>
							<div class="portfolio-single-content">
							<?php
							the_content( sprintf(
								/* translators: %s: Name of current post. */
								wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'million-shades' ), 
								array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							) );

							wp_link_pages( array(
								'before' => '<div class="page-links clear">' . esc_html__( 'Pages:', 'million-shades' ),
								'after'  => '</div>',
							) );
							?>
							</div><!-- single-content end-->
						<?php } ?>
	
   
						<footer class="portfolio-single-footer">
							<?php million_shades_entry_footer(); ?>
						</footer><!-- single-footer end-->
					</article><!-- post-end -->

					<div class="portfolio-single-comment">
					<?php
					 million_shades_single_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}?>
 
                           <?php
                        endwhile;
                    ?>

					</div>
         
        
		</main><!-- main -->
		
		<div class="related-portfolios">
			<?php get_template_part( 'single-post/related-portfolios' ); ?>
		</div>
		
	</div><!-- primary -->


	<?php get_sidebar(); ?>
</div> <!-- inner-content -->
<?php get_footer(); ?>
