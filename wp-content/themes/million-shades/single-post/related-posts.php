<?php

$args = array(
	'posts_per_page' => 3, 
	'post__not_in'   => array( get_the_ID() ),
	'no_found_rows'  => true, 
);

$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
$abc = array();  
foreach( $cats as $ms_cat ) {
	$abc[] = $ms_cat->term_id; 
}
if ( ! empty( $abc ) ) {
	$args['category__in'] = $abc;
}


$ms_query = new wp_query( $args );


	
?>
<div class="blog-section">


    <h3 class="blog-section-title"><?php esc_html_e('YOU MAY ALSO LIKE', 'million-shades' ); ?></h3>
	<?php $i = 1;  ?>
    <div class="nl_grid_row related-post-container col_gap_15">
    <?php if( $ms_query->have_posts() ): while( $ms_query->have_posts() ): $ms_query->the_post();  ?>
        <div class="nl-related-entry no_of_col_3 col_no_<?php echo esc_attr($i);  ?> col_padd_margin">
            <?php get_template_part('single-post/related-post-grid'); ?>
        </div>
		<?php $i++;  ?>
    <?php endwhile; 
	endif;
	?>
    </div>
	
	
</div>

<?php wp_reset_postdata(); ?>