<?php

/**

 * 
 * @package million-shades
 * @since   1.0.0
 */
 
 


/**
 * Prints the current post-date/time and author information.
 */
if ( ! function_exists( 'million_shades_posted_on' ) ) :
function million_shades_posted_on() {
	
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$byline = sprintf(_x( 'By %s', 'post author', 'million-shades' ),'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>');
	
	echo '<span class="posted-on">' . esc_html( get_the_date()) . '</span><span class="byline"> ' . $byline. '</span>';
	
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( __( 'Leave a comment', 'million-shades' ), __( '1 Comment', 'million-shades' ), __( '% Comments', 'million-shades' ) );
		echo '</span>';
	}

}
endif;



if ( ! function_exists( 'million_shades_single_posted_on' ) ) :
function million_shades_single_posted_on() {
	
	$get_time = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$get_time = '<time class="entry-date published" datetime="%1$s">%2$s</time>
		<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$get_time = sprintf( $get_time,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(esc_html_x( 'Posted on %s', 'post date', 'million-shades' ),'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . esc_html( get_the_date() ) . '</a>');
	
	
	
	$byline = sprintf(
		esc_html_x( 'By %s', 'post author', 'million-shades' ),
		'<span class="author vcard"><a class="url fn n" 
		href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' 
		. esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' 
	. $byline . '</span>';

	echo '<span class="comments-link">';
	comments_popup_link( esc_html__( 'No Comment', 'million-shades' ), esc_html__( '1 Comment', 'million-shades' ), esc_html__( '% Comments', 'million-shades' ) );
	echo '</span>';

}
endif;

/*---------------------------------------------------------------------------------------------------------------*/

if ( ! function_exists( 'million_shades_single_posted_meta_time_author' ) ) :
function million_shades_single_posted_meta_time_author() {
	
	$get_time = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$get_time = '<time class="entry-date published" datetime="%1$s">%2$s</time>
		<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$get_time = sprintf( $get_time,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(esc_html_x( 'On %s', 'post date', 'million-shades' ),'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . esc_html( get_the_date() ) . '</a>');
	
	
	
	$byline = sprintf(
		esc_html_x( 'By %s', 'post author', 'million-shades' ),
		'<span class="author vcard"><a class="url fn n" 
		href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' 
		. esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' 
	. $byline . '</span>';
	
}
endif;


if ( ! function_exists( 'million_shades_entry_footer' ) ) :

function million_shades_entry_footer() {
	
	if ( 'post' === get_post_type() ) {
	
		$get_categories = get_the_category_list( esc_html__( ', ', 'million-shades' ) );
		if ( $get_categories && million_shades_blog_categorized() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'million-shades' ) . '</span>', $get_categories ); // WPCS: XSS OK.
		}

	
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		
		comments_popup_link( sprintf( wp_kses( __( 'No Comment<span class="screen-reader-text"> on %s</span>', 'million-shades' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			
			esc_html__( 'Edit %s', 'million-shades' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;


/*---------------------------------------------------------------------------------------------------------------*/
/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
 
function million_shades_blog_categorized() {
	if ( false === ( $all_cats = get_transient( 'million_shades_categories' ) ) ) {
		
		$all_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			'number'     => 2,
		) );

		
		$all_cats = count( $all_cats );

		set_transient( 'million_shades_categories', $all_cats );
	}

	if ( $all_cats > 1 ) {
		
		return true;
	} else {
		
		return false;
	}
}


// post queries

function million_shades_post_queries( $query ) {
  
 
   if (!is_admin() && $query->is_main_query()){
	  
	
	  $blog_categories = get_theme_mod('category-slug','');
	  $exclde = get_theme_mod('exclude-category');

   
	
	$query->set( 'category__in', get_cat_ID($blog_categories) );
	$query->set( 'category__not_in', get_cat_ID($exclde) );
	

  }
}
add_action( 'pre_get_posts', 'million_shades_post_queries' );

/*---------------------------------------------------------------------------------------------------------------*/
/**
 * Flush out the transients used in million_shades_blog_categorized.
 */
function million_shades_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	
	delete_transient( 'million_shades_categories' );
}
add_action( 'edit_category', 'million_shades_category_transient_flusher' );
add_action( 'save_post',     'million_shades_category_transient_flusher' );
