<?php
/**
 * The header for theme million-shades
 * Author: Kudrat E Khuda
 * 
 * @package million-shades
 * 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} ?>
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'million-shades' ); ?></a>
	
	
	
		
  <header id="nl-header" class="nl-header" role="banner">	
	
	<!--  Standard Header start from here. First topbar, top of the site header  -->
		
	<div id="main-header" class="main-header">	 
		<div class="topbar">
		    <div class="inner-topbar">
				<div class="topbar-text">
				<!-- contact or text section of topbar -->
					<?php
					million_shades_topbar_text_template();
					?>
				</div> 
				<div class="topbar-social">
				<!-- social media section of topbar -->
					<?php million_shades_topbar_social_template(); ?>
				</div> <!-- end .container -->
		
			</div> <!-- end inner-top-bar -->
		</div> <!-- end top-bar -->
		
		<?php 
		
		$media_position = get_theme_mod('header_media_position','top');
		
		if ($media_position == 'top'){
			$media_pages = get_theme_mod('show_media_pages','all');
			
			if (($media_pages == 'both')&&(is_front_page() || is_home())){
				million_shades_header_media_position();
			}
	
			if ($media_pages == 'fpage' && is_front_page()){
				million_shades_header_media_position();
			}
	
			if ($media_pages == 'lpage' && is_home()){
				if (!is_front_page()){
				million_shades_header_media_position();
				}
			}
			if ($media_pages == 'all'){
				million_shades_header_media_position();
			}
		}
		
		?>
	
		<div  class="header-margin">	
			<div id="site-header" class="site-header">		
				<div  class="inner-header">	
		
			
					
	
	<!-- Main site-header starts from here -->
	
			<div class="branding">
		
				<div class="nl-logo-title">
				
					<?php  
				$title_type = get_theme_mod('site-title-type','one');
				$title_styles = '';
				?>
				
				<?php if ($title_type == 'one') {
					$title_styles = 'display:block;';
					$logo_styles = 'display:none;';
				} 
				if ($title_type == 'two') {
					$title_styles = 'display:none;';
					$logo_styles = 'display:block;';
				}
				if ($title_type == 'three') {
					$title_styles = 'display:none;';
					$logo_styles = 'display:none;';
				}
				
				
	?>
	<div  class="site-logo" style="<?php echo esc_attr($logo_styles);?>">             

	<?php the_custom_logo();?>
	
    </div>
	<?php 
	
	if ( is_front_page() && is_home() ) : ?>
				<div  class="site-title" style="<?php echo esc_attr($title_styles);?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			<?php else : ?>
				<div class="site-title" id="site-title" style="<?php echo esc_attr($title_styles);?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?></a></div>
			<?php
	endif; 

					?>
				 
				 </div>
			
	<!-- To display site description -->				
		
				<?php	million_shades_get_site_description();?>	
	
				</div>
				
				<?php
				
				$site_header_pattern = get_theme_mod('site-header-alignment','right');
				
				if ( $site_header_pattern == 'woo1') {
					if ( class_exists('woocommerce')) {  ?>
						
	
						<div class="header-cart-container">
							<?php 
							if ( function_exists( 'YITH_WCWL' ) ) {
							million_shades_woo_wishlist();
							}
							?>
							<div class="header-cart-inner-container">
							<?php million_shades_header_cart_icon();?>
							
							<?php
							the_widget( 'WC_Widget_Cart', '' );
							?>
							</div>
						</div>
						<?php
						
					
					 the_widget( 'WC_Widget_Product_Search', 'title=' );
					
					
					 
					}	
				}
			?>


				<!-- Main Navigation/Main Menu Container starts form here -->
		<div class="site-navigation-container">

				<!-- search on header starts from here  -->
			
			<!-- Main Navigation/Main Menu starts form here -->
			<div class="menu-btn"></div>
					<nav id="main-navigation" class="main-menu" role="navigation">
							
							<div class="hide-mob-menu">			
								<span class="lines">&times;</span>
							</div>
				
					
							<?php if (has_nav_menu('primary')) {
								$args = array(
								'theme_location' => 'primary',
								'container'      => '',
								'items_wrap'     => '<ul id="primary-menu" class="menu main-navi">%3$s</ul>',
								); ?>
							
								
								<!-- To display Main Navigation/Main Menu on desktop -->
								<?php wp_nav_menu($args);
					} else { ?>
								
								<?php	wp_page_menu(array('menu_class' => 'menu', 'items_wrap'     => '<ul id="primary-menu" class="menu nav-menu">%3$s</ul>'));
					} ?>
					
					<div class="search-container">
				
						<!-- To display search box -->
						<div class="nl-search-box">
						<div class="search-wrap">
							<?php get_search_form(); ?>
						</div>
						</div>
					</div> <!-- end search container  -->
					
					</nav> <!-- end #site-navigation -->
					
					
					</div> <!-- end site navigation container -->
		
				</div>  <!-- end inner header -->
				
		
			
			</div><!-- site header  -->
		</div> <!-- header margin  -->
	</div><!-- main header  -->
	
	<?php 
		$media_position = get_theme_mod('header_media_position','top');
		if ($media_position == 'bottom'){
			$media_pages = get_theme_mod('show_media_pages','all');
			if (($media_pages == 'both')&&(is_front_page() || is_home())){
				million_shades_header_media_position();
			}
	
			if ($media_pages == 'fpage' && is_front_page()){
				million_shades_header_media_position();
			}
	
			if ($media_pages == 'lpage' && is_home()){
				if (!is_front_page()){
				million_shades_header_media_position();
				}
			}
			if ($media_pages == 'all'){
				million_shades_header_media_position();
			}
		}
		?>
	
</header>

<div id="content" class="site-content">
    
