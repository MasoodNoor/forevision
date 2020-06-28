<?php

/**
 * Admin Class.
 *
 * 
 * @package million-shades
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Million_Shades_Admin' ) ) :



class Million_Shades_Admin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'nl_admin_menu' ) );
		
		add_action('admin_notices', array($this, 'million_shades_activation_admin_notice'));
		
		
	}

	/**
	 * Add admin menu.
	 **/
	 
	public function nl_admin_menu() {
		
		add_theme_page( 'Million Shades Admin Page', 'Started with Million Shades', 'activate_plugins', 
	'nl-welcome', array($this,'nl_admin_tab' ));

	}



	 
	public function nl_admin_message() {
		
		global $themePhp;

		if ( 'themes.php' == $themePhp && isset( $_GET['activated'] ) ) {
			add_action( 'admin_notices', array( $this, 'nl_getting_start' ) );
			update_option( 'nl_admin_notice_welcome', 1 );
		
		} elseif( ! get_option( 'nl_admin_notice_welcome' ) ) {
			add_action( 'admin_notices', array( $this, 'nl_getting_start' ) );
		}
		
	}

	public function million_shades_activation_admin_notice() {
            
		global $pagenow;
             ?>
			 <?php  
				  if (is_admin() && ('themes.php' == $pagenow) && (isset($_GET['activated']))) {  ?>
                   
                <div class="notice notice-success is-dismissible"> 
				
				   <p><?php echo esc_html__('Welcome! Thank you for choosing Million Shades. Recommended plugin is elementor. In addition WooCommerce,YITH WooCommerce Wishlist are recommended for E-commerce users.', 'million-shades'); ?></p>
                  
					<p><a class="button button-primary" href="<?php echo admin_url('/themes.php?page=nl-welcome') ?>"><?php echo esc_html__('Get Started', 'million-shades'); ?></a></p>
				  
				</div>
				<?php  } ?>
                <?php
           
    }
	
	public function nl_getting_start() {
	    
		?>
		<div id="message" class="updated nl-message">
	
			<p class="submit">
				<a class="button-secondary" href="<?php echo esc_url( admin_url( 'themes.php?page=nl-welcome' ) ); ?>"><?php esc_html_e( 'Get Started with NextLevel', 'million-shades' ); ?></a>
			</p>
		</div>
		<?php
		
	}


	private function nl_first_phase() {
		$theme = wp_get_theme( get_template() );
		
		$theme_version = $theme->get( 'Version' );
		?>
		<div class="nl-theme-info">
			<h1>
				<?php esc_html_e( 'About', 'million-shades' ); ?>
				<?php echo esc_html($theme->display( 'Name' )); ?>
				<?php printf( '%s', esc_html($theme_version) ); ?>
			</h1>
	
			
			
		</div> <?php
    }


 private function nl_third_phase() { 
 
 $theme = wp_get_theme( get_template() );
		$theme_versions = $theme['Version']; ?>
		
		<h2 class="nav-tab-wrapper">
		    
			<a class="nav-tab <?php if ( $_GET['page'] == 'nl_first_tab' ) echo 'nav-tab-active'; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'nl-welcome' ), 'themes.php' ) ) ); ?>">
				<?php echo esc_html($theme->display( 'Name' )); ?>
			</a>
			
			<a class="nav-tab <?php if ( isset( $_GET['tab'] ) && $_GET['tab'] == 'show_recommended_plugins' ) echo 'nav-tab-active'; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'nl-welcome', 'tab' => 'show_recommended_plugins' ), 'themes.php' ) ) ); ?>">
				<?php esc_html_e( 'Recommended Plugins', 'million-shades' ); ?>
			</a>
			
		</h2>
		
		<?php
}

	
	public function nl_admin_tab() {
		$active_tab = empty( $_GET['tab'] ) ? 'about' : sanitize_title( $_GET['tab'] );

		
		if ( is_callable( array( $this, $active_tab ) ) ) {
			return $this->{ $active_tab }();
		}

		
		return $this->nl_first_tab();
	}

	/**
	 * NextLevel First Tab.
	 */
	public function nl_first_tab() {
		$theme = wp_get_theme( get_template() );
		?>
		<div class="about-wrap">

			<?php $this->nl_first_phase(); ?>
				
					<?php $this->nl_third_phase(); ?>

			<div class="nav-tab-wrapper">
				<div class="two-col">
					
					<div class="col">
						<h3><?php esc_html_e( 'Theme Demos', 'million-shades' ); ?></h3>
						<p><?php esc_html_e( '15+ Demos are avaible right now.', 'million-shades' ) ?></p>
						<p><a href="<?php echo esc_url( 'http://themenextlevel.com/million-shades' ); ?>"  target="_blank" class="button"><?php esc_html_e( 'Theme Demos', 'million-shades' ); ?></a></p>
					</div>
					
					<div class="col">
						<h3><?php esc_html_e( 'Documentation', 'million-shades' ); ?></h3>
						<p><?php esc_html_e( 'Please view our documentation page to setup the theme.', 'million-shades' ) ?></p>
						<p><a href="<?php echo esc_url( 'http://themenextlevel.com/docs/'); ?>" target="_blank" class="button button-secondary"><?php esc_html_e( 'Documentation', 'million-shades' ); ?></a></p>
					</div>

					<div class="col">
						<h3><?php esc_html_e( 'Theme Support', 'million-shades' ); ?></h3>
						<p><?php esc_html_e( 'Please put it in our dedicated support forum.', 'million-shades' ) ?></p>
						<p><a href="<?php echo esc_url( 'http://themenextlevel.com/support/' ); ?>"  target="_blank" class="button"><?php esc_html_e( 'Theme Support', 'million-shades' ); ?></a></p>
					</div>
					
					

					
				

				</div>
			</div>


		<?php
		$this->nl_back_to_dash_board();
	}


public function nl_back_to_dash_board(){ 	?>
    			<div class="return-to-dashboard nextlevel">
				
				<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Back to Dashboard', 'million-shades' ) : esc_html_e( 'Back to Dashboard', 'million-shades' ); ?></a>
			</div>
		</div>
    <?php
}

	/**
	 * Output the supported plugins screen.
	 */
	 
	
	public function show_recommended_plugins() {
		?>
		<div class="wrap about-wrap">

			<?php $this->nl_first_phase(); ?>
				
					<?php $this->nl_third_phase(); ?>

			<p class="about-description"><?php esc_html_e( 'This theme recommends following plugins.', 'million-shades' ); ?></p>
			<ul>
				<li><?php esc_html_e( 'Elementor Page Builder', 'million-shades' ); ?></li>
				<li><?php esc_html_e( 'Definitive Addons for Elementor', 'million-shades' ); ?></li>
				<li><?php esc_html_e( 'Contact Form 7', 'million-shades' ); ?></li>
				<br>
				<div><?php esc_html_e( 'OR', 'million-shades' ); ?></div>
				<br>
				<li><?php esc_html_e( 'Million Shades Toolkit', 'million-shades' ); ?></li>
				<li><?php esc_html_e( 'SiteOrigin page builder', 'million-shades' ); ?></li>
			
				<li><?php esc_html_e( 'Contact Form 7', 'million-shades' ); ?></li>
	
			</ul>

		</div>
		<?php
	}
	

	
}

endif;

return new Million_Shades_Admin();
