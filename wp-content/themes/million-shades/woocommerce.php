<?php
/**
 * This template to displays woocommerce page
 *
 * 
 * @package million-shades
 * 
 */

get_header(); ?>
<div class="page-content-header">
    <div class="inner-content"></div>	
</div>

<div id="inner-content" class="inner-content">

	<div id="primary" class="content-area">
	

		<main id="main" class="site-main" role="main">
			
			
			<?php woocommerce_content(); ?>
			
			
		</main><!-- main -->
	</div><!-- primary -->


<aside id="secondary" class="sidebar">
    
	<?php if ( is_active_sidebar( 'nl_woocommerce_sidebar') ) :  ?>
	
     <?php   dynamic_sidebar( 'WooCommerce Sidebar' ); ?>
   
	<?php endif; ?>
	
</aside>

	
	</div>
<?php get_footer(); ?>