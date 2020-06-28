<?php

namespace Definitive_Addons_Elementor\Elements;
if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

class Reuse {
	
	public function __construct() {
		
	   add_filter( 'excerpt_more', array( $this, 'dafe_post_read_more_link' ));
       add_filter( 'excerpt_length', array( $this, 'dafe_excerpt_length' ),999);

		if ( function_exists( 'YITH_WCWL' ) ) {	
		add_action( 'woocommerce_widget_product_items_end', array( $this,'dafe_wcwl_move_wishlist_button' ));
		}
		if ( function_exists( 'YITH_WCQV' ) ) {	
		add_action( 'woocommerce_widget_product_items_end', array( $this,'dafe_yith_quick_view_button' ));

		}
		
	}
	
public static function dafe_post_read_more_link($more){

	$read_more_btn_txt = __('Read More','definitive-addons-for-elementor');
		return sprintf( '<div class="blog-buttons"><a href="%1$s" class="more-link">%2$s</a></div>',
          esc_url( get_permalink( get_the_ID() ) ),esc_attr($read_more_btn_txt),
          sprintf( __( 'Continue reading %s', 'definitive-addons-for-elementor' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
    );

}


public static function dafe_excerpt_length( $length ) {
	
  $excerpt = 34;
  return absint($excerpt);
  
}



public static function dafe_wcwl_move_wishlist_button(){
if ( !function_exists( 'YITH_WCWL' ) ) {
return;
}	
	echo do_shortcode( '[yith_wcwl_add_to_wishlist icon="fa fa-heart-o"]' );

}

public static function dafe_yith_quick_view_button(){
	if ( !function_exists( 'YITH_WCQV' ) ) {
		return;
	}
	echo '<span class="yith_qv_container">';
	
		echo do_shortcode( '[yith_quick_view]' );

		echo '<span class="yith_qv_txt">Quick View</span>';

	echo '</span>';

}

function dafe_get_form_list(){
		$args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => 777);
		$cf7_list = array();
		$cf7_msg = '';
		if( $list_val = get_posts($args)){
			foreach($list_val as $key){
			$cf7_list[$key->ID] = $key->post_title;
			}
			return	$cf7_list;
		}else{
		
		return	$cf7_msg = __( 'No Form found. Create New form ', 'definitive-addons-for-elementor' ) .' <a href="'.esc_url( admin_url( 'admin.php?page=wpcf7-new' ) ).'" target="_blank">'
		. __( 'Click here', 'definitive-addons-for-elementor' ) .'</a>';
		}
			
}
	
public static function dafe_product_categories_lists() {
		$args = array(
				'taxonomy'   => 'product_cat',
				'hide_empty' => 0,
				'title_li'   => '',
		);
		$prod_cats = get_categories($args);
		$prod_categories = array();
		if ( ! empty( $prod_cats ) ) {
			
				foreach ( $prod_cats as $prod_cat ) {

					if ( ! empty( $prod_cat->term_id )) {
					
						if (! empty( $prod_cat->name ) ) {
							$prod_categories[ $prod_cat->term_id ] = $prod_cat->name;
						}

					}
				}
		}
		return $prod_categories;
}
	
	public static function dafe_post_categories()
    {
	
		$args = array(
				'taxonomy'   => 'category',
				'hide_empty' => 0,
				'title_li'   => '',
		);
		$post_cats = get_categories($args);
		$post_categories = array();
		if ( ! empty( $post_cats ) ) {
			
				foreach ( $post_cats as $post_cat ) {

					if ( ! empty( $post_cat->term_id )) {
					
						if (! empty( $post_cat->name ) ) {
							$post_categories[ $post_cat->term_id ] = $post_cat->name;
						}

					}
				}
		}
		return $post_categories;
    }
	
	
	
	
	public static function dafe_posted_on() {
	
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}
		/* translators: author */
		$byline = sprintf(_x( 'By %s', 'post author', 'the-gap' ),'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>');
	
		echo '<span class="posted-on">' . esc_html( get_the_date()) . '</span><span class="byline"> ' . wp_kses_post($byline). '</span>';
	
		

	}
	

}

$reused = new Reuse();
