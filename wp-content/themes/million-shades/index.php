<?php
/**
 * The main template file
 * 
 *  @package million-shades
 **/

get_header();


 ?>
 
  <?php 
  $styles ='';
  if (is_front_page() && is_home()){ 
  $styles = "margin-top:25px;";
  }
  if (is_home()){ 
  $styles = "margin-top:25px;";
  }
  ?>
 
 <?php if (!is_front_page()){ ?>
<div class="page-content-header">
    
	<div class="inner-content">	    
	

		<div class="blog-post-page">	
		<!-- Title for blog list page/blog home page(index.php)  -->
		<?php if(!is_front_page()) { ?>
		<h1 class="page-title">
			<?php $ms_page_title = get_the_title( get_option('page_for_posts', true) ); 
			echo esc_html($ms_page_title);
			?>
		</h1><!-- page  title -->
	<?php } ?>
		</div><!-- entry-header -->
	
	</div> <!-- innder header end -->
	
</div> <!-- page header end -->
 <?php } ?>

<div id="inner-content" class="inner-content" style="<?php echo esc_attr($styles); ?>">
    
	<?php $enable_feature_items = get_theme_mod('enable-feature-items','0');
	$show_featured_pages = get_theme_mod('show_featured_pages','both'); ?>
	<div class="featured-area">
	<?php
	if ($enable_feature_items == '1'){

		if ($show_featured_pages == 'both'){
			million_shades_post_featured_items();
		}
	
		if ($show_featured_pages == 'fpage' && is_front_page()){
			million_shades_post_featured_items();
		}
	
		if (($show_featured_pages == 'lpage') && (is_home())){
			if (!is_front_page()){
			million_shades_post_featured_items();
			}
		}
		
	}
	
	$show_slide_pages = get_theme_mod('show_slide_pages','both');
	$enable_feature_slider = get_theme_mod('enable-feature-slider','0');
	if ($enable_feature_slider == '1'){
		
		if ($show_slide_pages == 'both'){
			million_shades_feature_post_select_slider();
		}
	
		if ($show_slide_pages == 'fpage' && is_front_page()){
			million_shades_feature_post_select_slider();
		}
	
		if ($show_slide_pages == 'lpage' && is_home()){
			if (!is_front_page()){
			million_shades_feature_post_select_slider();
			}
		}
	}
	?>
	</div> 
	<!-- primary area of index.php -->

	<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">
		
		<div class="nl_grid_row ms-post-grid col_gap_30">
			<?php
		if ( have_posts() ) :
		
			$col_count = -1;
			$col_no = get_theme_mod('post_column_no','2');
			$style = get_theme_mod('post_style','none');
			/* Start the Loop */
			while ( have_posts() ) :
				$col_count++;  
				$fstyles = '';
				
				if($col_count == 0){
					$fstyles = 'margin-left:15px;margin-right:15px;margin-bottom:30px;';
				}else {
					$fstyles = '';
				}
				
				if($col_count != 0){
				?>
				
			<div class="<?php echo esc_attr( $style );  ?> nl-blog-entry no_of_col_<?php echo esc_attr( $col_no );  ?> col_no_<?php echo esc_attr( $col_count );  ?> col_padd_margin" >
				<?php } ?>
				<div class="home_blog_border_style <?php echo esc_attr( $style );  ?> clear" style="<?php echo esc_attr($fstyles); ?>">
			<?php
			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
		?>
				
				<?php
				the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() ); ?>
				
				
					<?php if (get_theme_mod('post_column_no') == '1' && get_theme_mod('enable-related-post-home') == '1') { ?>
				
				
				<div class="ms-related-posts">
					<?php
					// Attach related post template to single.php
					get_template_part( 'single-post/related-posts' ); ?>
				</div>
				<?php } ?>
				
				</div> 
			<?php	if($col_count != 0){ ?>
			</div> 
			<?php } ?>
			<?php
				if ( $col_count == $col_no) {
						$col_count = '0';
					}
			endwhile;
			
			 ?>
		</div>	 
			<nav class="navigation pagination" style="clear:both;" role="navigation">
				<h1 class="screen-reader-text"><?php esc_html_e( 'Posts navigation', 'million-shades' ); ?></h1>
				<?php 
					    the_posts_pagination( 
            	array(
				    'prev_text' => __( '&larr; Previous', 'million-shades' ),
				    'next_text' => __( 'Next &rarr;', 'million-shades' ),
					)
            	); 
				?>
			</nav><!-- navigation -->
			<?php 
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		
		</main><!-- main -->
	</div><!-- primary -->



	<?php get_sidebar(); ?>
</div> <!-- inner content end -->
<?php get_footer(); ?>
