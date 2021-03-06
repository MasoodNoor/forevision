<?php
/**
 * The template for displaying comments.
 * 
 * 
 * @package million-shades
 */


if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			
				if ( get_comments_number() === '1' ) {
					
					printf(
				/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'million-shades' ),
					'<span>' . get_the_title() . '</span>'
				);
				} else {
					$comment_count = get_comments_number();
				printf( 
					esc_html( _nx( '%1$s Reply to &ldquo;%2$s&rdquo;',
							'%1$s Thoughts on &ldquo;%2$s&rdquo;',
					get_comments_number(), 
					'comments title', 'million-shades' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
				}
			?>
		</h2>

		<?php million_shades_comment_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- comment-list -->

		<?php million_shades_comment_navigation(); ?>
	<?php endif; // have_comments() ?>
	<?php

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'million-shades' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div>
