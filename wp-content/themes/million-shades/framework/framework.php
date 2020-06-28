<?php

/**
 
 * Author: khuda
 * Author url:themenextlevel.com
 * @package : Million Shades
 *
 **/

 
class Million_Shades_framework {

    
    protected $ms_theme;
    

    /* Constructor for the class */

	function __construct() {

        add_action('after_setup_theme', array(&$this, 'million_shades_initialize_theme'), 11);
		
		add_action('after_setup_theme', array(&$this, 'million_shades_content_width'), 0);
		
	
	}


/**
     * Define theme directories
*/
	 



function million_shades_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'million_shades_content_width', 960 );
}


/**
     * Load all the Javascript files for the theme
     *
*/

function million_shades_enqueue_scripts() {

    wp_enqueue_script( 'countTo', get_template_directory_uri() . '/js/jquery.countTo.js', array('jquery'),'', true );

	wp_enqueue_script( 'million_shades_skip_link_focus_fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_script( 'million_shades_few_handle', get_template_directory_uri() . '/js/main.js', array('jquery'),'', true );
	
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '2.4.0', true );
	//wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/js/isotope.pkgd.js', array('jquery'), '', true );
	
	
	//wp_enqueue_script( 'nl-isotope', get_template_directory_uri() . '/inc/js/ms-isotope.js', array('jquery'),'', true );

	wp_enqueue_script( 'million_shades_builder', get_template_directory_uri() . '/inc/js/builder.js', array('jquery'),'', true );
	
}


/**
     * Load all the CSS files for the theme
     
*/

function million_shades_enqueue_styles() {

	wp_enqueue_style( 'million_shades_style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), true );
	
	
	
   wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/library/font-awesome/css/font-awesome.min.css', '4.6.3' );
	
	
}

/*
theme initial functions	
*/

function million_shades_initialize_theme() {

		$this->million_shades_initialize();
		
        $this->million_shades_add_actions_filters();

		$this->million_shades_setup();
}


/*
theme setup function	
*/

function million_shades_setup() {

		/**
		 * Custom background support.
		 */
		 
		
	add_theme_support( 'custom-background' );
	
	
	add_theme_support( 'custom-header');
	add_theme_support( 'automatic-feed-links' );
	add_editor_style( get_template_directory().'editor-style.css' );
	add_theme_support( 'title-tag' );

	
	
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'million-shades-featured-image', 2000, 1200, true );

	add_image_size( 'million-shades-thumbnail-avatar', 100, 100, true );

	add_theme_support( 'html5', array(
		
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'audio',
		'gallery'
	) );


	//Logo support
	add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => false,
			'flex-height' => false,
	) );

add_theme_support( 'woocommerce' );	


	
load_theme_textdomain( 'million-shades', get_template_directory() . '/languages' );
	

}
    
/*
initialize script, style, navigation and widgets
*/

function million_shades_add_actions_filters() {

        /* Load all JS required by the theme */
        add_action('wp_enqueue_scripts', array(&$this, 'million_shades_enqueue_scripts'));
        add_action('wp_enqueue_scripts', array(&$this, 'million_shades_enqueue_styles'));
  
        /* Register menus. */
        add_action('init', array(&$this, 'million_shades_register_menus'), 11);

        /* Register widgets. */
        add_action('widgets_init', array(&$this, 'million_shades_widgets_init'), 11);

}

	/*
	
	Registering widgets
	
	*/
 function million_shades_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'million-shades' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'million-shades' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	
	register_sidebar(array(
			'name' => __('WooCommerce Sidebar', 'million-shades'),
			'id' => 'nl_woocommerce_sidebar',
			'description' => __('Add WooCommerce Widgets Only', 'million-shades'),
			'before_widget' => '<div id="A%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		));
	
	$footer_widgets = get_theme_mod('footer-widget-areas', '4');
	for ($i=1; $i<=$footer_widgets; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Widget ', 'million-shades' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
	}
 }


 

    /**
     * Registering navigation for the theme. 

     */
	 
    function million_shades_register_menus() {
        
		register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'million-shades' ),
		
		'footer'  => esc_html__( 'Footer', 'million-shades' ),	
		
		
		
		) );
    
	}
	
	function million_shades_initialize() {

            add_action('tgmpa_register', array(&$this, 'million_shades_register_recommended_plugins'));

        
    }

        /**
         * Register the required plugins for this theme.
         *
         **/
        function million_shades_register_recommended_plugins() {

			$plugins[] = array(
					'name'               => __('Elementor','million-shades'),
					'slug'               => 'elementor',
					'required'           => false,
			);
			
			$plugins[] = array(
					'name'               => __('Definitive Addons for Elementor','million-shades'),
					'slug'               => 'definitive-addons-for-elementor',
					'required'           => false,
			);
			
			$plugins[] = array(
					'name'               => __('Contact form 7','million-shades'),
					'slug'               => 'contact-form-7',
					'required'           => false,
			);

			tgmpa( $plugins);

            
		
        }
		

	
      
}
