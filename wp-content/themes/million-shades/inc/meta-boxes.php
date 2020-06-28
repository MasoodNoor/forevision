<?php
/**
 * Post Related Functions.
 * @author  Kudrat E Khuda
 * @author url  themenextlevel.com
 * @package million-shades

 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// The Metabox class
class Million_Shades_Post_Metaboxes {
	private $post_types;

	/**
	 * Metabox constructor
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'million_shades_add_custom_box' ));
		add_action( 'pre_post_update', array( $this, 'million_shades_save_custom_meta_more') );
		add_action( 'pre_post_update', array( $this, 'million_shades_save_custom_meta' ));
		add_action( 'pre_post_update', array( $this, 'add_social_fields' ));
		add_action( 'pre_post_update', array( $this, 'add_slider_fields' ));

		// Load scripts for the metabox
		add_action( 'admin_enqueue_scripts', array( $this, 'million_shades_metabox_color_enqueue' ) );
		
		
	}
	
/**
 * Add Meta Box
 *
 */



public function million_shades_add_custom_box() {
	
	$id = array('nl-page-layout','nl-page-layout','display-slider-info','nl-hide-and-show','nl-hide-and-show','display-social-meta-box','display-social-meta-box');
	
	$title = array(__('Select Layout','million-shades'),__('Select Layout','million-shades'),__('Slider Data','million-shades'),__('Page Header','million-shades'),__('Page Header','million-shades'),__('Post Socials','million-shades'),__('Post Socials','million-shades'));
	
	$callback = array('million_shades_page_layout','million_shades_page_layout','display_slider_info','million_shades_hide_and_show','million_shades_hide_and_show','display_social_meta_box','display_social_meta_box');
	
	$screen = array('page','post','page','page','post','page','post');
	
	$context = array('side','side','normal','normal','normal','normal','normal');
	
	$priority = array('default','default','high','high','high','high','high');
	
	
	for($i=0; $i < 7; $i++) {
		
		
		add_meta_box( $id[$i], $title[$i], array( $this, $callback[$i] ), $screen[$i], $context[$i], $priority[$i]);
		
	}
	
}

/* ======================================================================== */
public function million_shades_get_default_page_layouts() {

	$page_layout = array(
		'default-layout' => array(
			'id'    => 'million_shades_page_layout',
			'value' => 'default',
			'label' => __( 'Default', 'million-shades' )
		),
		'rightbar'       => array(
			'id'    => 'million_shades_page_layout',
			'value' => 'rightbar',
			'label' => __( 'Rightbar', 'million-shades' )
		),
		'leftbar'        => array(
			'id'    => 'million_shades_page_layout',
			'value' => 'leftbar',
			'label' => __( 'Leftbar', 'million-shades' )
		),
		
		'center'         => array(
			'id'    => 'million_shades_page_layout',
			'value' => 'nosidebar',
			'label' => __( 'No Sidebar', 'million-shades' )
		)
	);

	return $page_layout;

}

/* ========================================================================
 *
 * Displays metabox to for select layout option
 *
 * ======================================================================== */
 
public function million_shades_page_layout() {
	global $post;

	$page_layout = $this->million_shades_get_default_page_layouts();
	

	// Use nonce for verification  
	wp_nonce_field( basename( __FILE__ ), 'nl_meta_box_nonce' );

	foreach ( $page_layout as $field ) {
		$layout_meta = get_post_meta( $post->ID, $field['id'], true );
		if ( empty( $layout_meta ) ) {
			$layout_meta = 'default';
		}
		?>
        <label class="nl-post-format-icon">
            <input class="nl-post-format" type="radio" name="<?php echo esc_attr($field['id']); ?>" value="<?php echo esc_attr($field['value']); ?>" <?php checked( $field['value'], $layout_meta ); ?>/>
			<?php echo esc_html($field['label']); ?></label><br />
		<?php
	}
	
	
	
}

public function million_shades_hide_and_show() {
	global $post;

	
 $meta = get_post_meta( $post->ID );
	
		?>
    

	<p>
	<label for="million_shades_hide_page_header">
            <input type="checkbox" name="million_shades_hide_page_header" id="million_shades_hide_page_header" value="yes" <?php if ( isset ( $meta['million_shades_hide_page_header'] ) ) checked( $meta['million_shades_hide_page_header'][0], 'yes' ); ?> />
            <?php esc_html_e( 'Hide Page Header', 'million-shades' )?>
        </label>
	</p>
	<p>
    <label for="million_shades_page_header_bg_color" class="million_shades_page_header_bg_color"><?php esc_html_e( 'Page Header Background Color', 'million-shades' )?></label>
    <input name="million_shades_page_header_bg_color" type="text" value="<?php if ( isset ( $meta['million_shades_page_header_bg_color'] ) ) echo esc_attr($meta['million_shades_page_header_bg_color'][0]); ?>" class="page_header_bg_color" />
	</p>
	
	
	
	<?php
}	



/* ========================================================================
 *
 * save the custom metabox data
 *
 * ======================================================================== */
public function million_shades_save_custom_meta( $post_id ) {

	$page_layout = $this->million_shades_get_default_page_layouts();

	// Verify the nonce before proceeding.
	if ( ! isset( $_POST['nl_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['nl_meta_box_nonce'], basename( __FILE__ ) ) ) {
		return;
	}

	// Stop WP from clearing custom fields on autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		}
	} elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

	foreach ( $page_layout as $field ) {
		//Execute this saving function
		$old = get_post_meta( $post_id, $field['id'], true );
		
		$new = isset( $_POST[ $field['id'] ] ) ? $_POST[ $field['id'] ] : 'default';
		
		$new = million_shades_sanitize_sidebar($new);
		
		if ( $new && $new != $old ) {
			update_post_meta( $post_id, $field['id'], $new );
		} elseif ( '' == $new && $old ) {
			delete_post_meta( $post_id, $field['id'], $old );
		}
	} // end foreach  
		
	
}



public function million_shades_save_custom_meta_more( $post_id ) {

	

	// Verify the nonce before proceeding.
	if ( ! isset( $_POST['nl_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['nl_meta_box_nonce'], basename( __FILE__ ) ) ) {
		return;
	}

	// Stop WP from clearing custom fields on autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		}
	} elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

	
		//Execute this saving function
	
		
		$old = get_post_meta( $post_id, 'million_shades_hide_page_header', true );
		$new = million_shades_sanitize_yes_no( $_POST['million_shades_hide_page_header'] ) ;
		if ( $new && $new != $old ) {
			update_post_meta( $post_id, 'million_shades_hide_page_header', $new );
		} elseif ( '' == $new && $old ) {
			delete_post_meta( $post_id, 'million_shades_hide_page_header', $old );
		}
		


		if( isset( $_POST[ 'million_shades_page_header_bg_color' ] ) ) {
				$million_shades_page_header_background_color = sanitize_hex_color( $_POST['million_shades_page_header_bg_color'] );
    update_post_meta( $post_id, 'million_shades_page_header_bg_color', $million_shades_page_header_background_color );
	}
	
	
}


public function display_social_meta_box() {
   global $post;

	$social_icons_list = array();
			if ( class_exists('Million_Shades_Pro')) { 
				$social_icons_list = million_shades_fontawesome_social_list();
			} else {
    	$social_icons_list = array(
		''=>__('none','million-shades'),
		
		'facebook'=>__('facebook','million-shades'),
		'instagram'=>__('instagram','million-shades'),
		
		'pinterest-p'=>__('pinterest-p','million-shades'),
		'twitter'=>__('twitter','million-shades'),
		'wordpress'=>__('wordpress','million-shades')
		);
			}
	
	wp_nonce_field( 'million_shades_theme_post', 'million_shades_theme_post_nonce' );
	
	$author_image_page = esc_html( get_post_meta( $post->ID, 'author_image_page', true ) );
	
   
    ?>
    <table>
	    
	<?php

						 $post_social_icon1 = esc_attr( get_post_meta( $post->ID, 'post_social_icon1', true ) );
						$post_social_url1 = esc_url_raw( get_post_meta( $post->ID, 'post_social_url1', true ) );
						 $post_social_icon2 = esc_attr( get_post_meta( $post->ID, 'post_social_icon2', true ) );
						$post_social_url2 = esc_url_raw( get_post_meta( $post->ID, 'post_social_url2', true ) );
						 $post_social_icon3 = esc_attr( get_post_meta( $post->ID, 'post_social_icon3', true ) );
						$post_social_url3 = esc_url_raw( get_post_meta( $post->ID, 'post_social_url3', true ) );
						 $post_social_icon4 = esc_attr( get_post_meta( $post->ID, 'post_social_icon4', true ) );
						$post_social_url4 = esc_url_raw( get_post_meta( $post->ID, 'post_social_url4', true ) );
                ?>
		<tr>
		<div >
            <td style="width:120px;"><b><?php esc_html_e('Post Social Icon #1:', 'million-shades'); ?></b></td>
            <td >
                <select style="width: 150px" name="post_social_icon1">
                <?php
                // Generate all items of drop-down list
				
                foreach ( $social_icons_list as $icon ) {
					$post_icon = $icon; 
                ?>
                    <option value="<?php echo esc_attr($post_icon); ?>" <?php echo selected( $post_icon, $post_social_icon1 ); ?>>
                    <?php echo esc_attr($post_icon);  } ?>
                </select>
            </td>
		</div>
        </tr>
        <tr>
            <td style="width: 120px"><b><?php esc_html_e('Post Social Url #1:', 'million-shades'); ?></b></td>
            <td><input type="text" size="80" name="post_social_url1" value="<?php echo esc_url($post_social_url1); ?>" /></td>
        </tr>
		<!-- #2 -->
			<tr>
		<div >
            <td style="width:120px;"><b><?php esc_html_e('Post Social Icon #2:', 'million-shades'); ?></b></td>
            <td >
                <select style="width: 150px " name="post_social_icon2">
                <?php
                // Generate all items of drop-down list
				
                foreach ( $social_icons_list as $icon ) {
					$post_icon = $icon; 
                ?>
                    <option value="<?php echo esc_attr($post_icon); ?>" <?php echo selected( $post_icon, $post_social_icon2 ); ?>>
                    <?php echo esc_attr($post_icon);  } ?>
                </select>
            </td>
		</div>
        </tr>
        <tr>
            <td style="width: 120px"><b><?php esc_html_e('Post Social Url #2:', 'million-shades'); ?>:</b></td>
            <td><input type="text" size="80" name="post_social_url2" value="<?php echo esc_url($post_social_url2); ?>" /></td>
        </tr>
        <!-- #3 -->
			<tr>
		<div >
            <td style="width:120px;"><b><?php esc_html_e('Post Social Icon #3:', 'million-shades'); ?></b></td>
            <td >
                <select style="width: 150px " name="post_social_icon3">
                <?php
                // Generate all items of drop-down list
				
                foreach ( $social_icons_list as $icon ) {
					$post_icon = $icon; 
                ?>
                    <option value="<?php echo esc_attr($post_icon); ?>" <?php echo selected( $post_icon, $post_social_icon3 ); ?>>
                    <?php echo esc_attr($post_icon);  } ?>
                </select>
            </td>
		</div>
        </tr>
        <tr>
            <td style="width: 120px"><b><?php esc_html_e('Post Social Url #3:', 'million-shades'); ?></b></td>
            <td><input type="text" size="80" name="post_social_url3" value="<?php echo esc_url($post_social_url3); ?>" /></td>
        </tr>
		<!-- #4 -->
		<tr>
		<div >
            <td style="width:120px;"><b><?php esc_html_e('Post Social Icon #4:', 'million-shades'); ?></b></td>
            <td >
                <select style="width: 150px" name="post_social_icon4">
                <?php
                // Generate all items of drop-down list
				
                foreach ( $social_icons_list as $icon ) {
					$post_icon = $icon; 
                ?>
                    <option value="<?php echo esc_attr($post_icon); ?>" <?php echo selected( $post_icon, $post_social_icon4 ); ?>>
                    <?php echo esc_attr($post_icon);  } ?>
                </select>
            </td>
		</div>
        </tr>
        <tr>
            <td style="width: 120px"><b><?php esc_html_e('post Social Url #4:', 'million-shades'); ?></b></td>
            <td><input type="text" size="80" name="post_social_url4" value="<?php echo esc_url($post_social_url4); ?>" /></td>
        </tr>
		
    </table>
	
		<p>
			<label for=""><?php esc_html_e( 'Select a Page for Author', 'million-shades' )?></label>
				<br>
				
				<select class="widefat"  name="author_image_page" id="author_image_page">
					<option selected="selected" value=""><?php esc_html_e( 'None', 'million-shades' ) ?></option> 
						<?php
							
							$pages = get_pages(); 
							foreach ( $pages as $ms_page ) {
								$option = '<option value="' . absint($ms_page->ID) . '" ';
								$option .= ( absint($ms_page->ID) == absint($author_image_page) ) ? 'selected="selected"' : '';
								$option .= '>';
								$option .= esc_html($ms_page->post_title);
								$option .= '</option>';
							echo $option;
							}
						?>
				</select>
		</p>
    <?php
	}


	
	function add_social_fields( $post_id) {
		
		if ( ! isset( $_POST['million_shades_theme_post_nonce'] ) )
			return $post_id;

		$nonce = $_POST['million_shades_theme_post_nonce'];

		if ( ! wp_verify_nonce( $nonce, 'million_shades_theme_post' ) )
			return $post_id;

		// Stop WP from clearing custom fields on autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		}
	} elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

		
 
				if ( isset( $_POST['post_social_url1'] )) {
					update_post_meta( $post_id, 'post_social_url1', esc_url_raw($_POST['post_social_url1']) );
				}
		        if ( isset( $_POST['post_social_icon1'] ) ) {
					update_post_meta( $post_id, 'post_social_icon1', sanitize_text_field($_POST['post_social_icon1']) );
				}
		
				if ( isset( $_POST['post_social_url2'] ) ) {
					update_post_meta( $post_id, 'post_social_url2', esc_url_raw($_POST['post_social_url2']) );
				}
		        if ( isset( $_POST['post_social_icon2'] ) ) {
					update_post_meta( $post_id, 'post_social_icon2', sanitize_text_field($_POST['post_social_icon2']) );
				}
		
				if ( isset( $_POST['post_social_url3'] ) ) {
					update_post_meta( $post_id, 'post_social_url3', esc_url_raw($_POST['post_social_url3']) );
				}
		        if ( isset( $_POST['post_social_icon3'] ) ) {
					update_post_meta( $post_id, 'post_social_icon3', sanitize_text_field($_POST['post_social_icon3']) );
				}
		
				 if ( isset( $_POST['post_social_url4'] )) {
					update_post_meta( $post_id, 'post_social_url4', esc_url_raw($_POST['post_social_url4']) );
				}
		        if ( isset( $_POST['post_social_icon4'] ) ) {
				update_post_meta( $post_id, 'post_social_icon4', sanitize_text_field($_POST['post_social_icon4']) );
				}
				if ( isset( $_POST['author_image_page'] ) ) {
					
					
				update_post_meta( $post_id, 'author_image_page', absint($_POST['author_image_page']) );
					
				}
				
			
	}
	
	public function display_slider_info() {
		global $post;

	
	
	wp_nonce_field( 'million_shades_theme_slider', 'million_shades_theme_slider_nonce' );
	
	
   
    ?>
    <table>
	    
	<?php

		$million_shades_slider_btn_txt = esc_html( get_post_meta( $post->ID, 'million_shades_slider_btn_txt', true ) );
						
		$million_shades_slider_url = esc_url_raw( get_post_meta( $post->ID, 'million_shades_slider_url', true ) );
                ?>
		
        <tr>
            <td style="width: 320px"><b><?php esc_html_e('Slider(Header Media) Url:', 'million-shades'); ?></b></td>
            <td><input type="text" size="80" name="million_shades_slider_url" value="<?php echo esc_url($million_shades_slider_url); ?>" /></td>
        </tr>
		<!-- #1 -->
		 <tr>
            <td style="width: 320px"><b><?php esc_html_e('Slider(Header Media) Button Text:', 'million-shades'); ?></b></td>
            <td><input type="text" size="80" name="million_shades_slider_btn_txt" value="<?php echo esc_attr($million_shades_slider_btn_txt); ?>" /></td>
        </tr>
		<!-- #2 -->
		
		
    </table>
	
		
    <?php
	}


	
	function add_slider_fields( $post_id) {
		
		if ( ! isset( $_POST['million_shades_theme_slider_nonce'] ) )
			return $post_id;

		$nonce = $_POST['million_shades_theme_slider_nonce'];

		if ( ! wp_verify_nonce( $nonce, 'million_shades_theme_slider' ) )
			return $post_id;

		// Stop WP from clearing custom fields on autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		}
	} elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

		
 
				if ( isset( $_POST['million_shades_slider_url'] )) {
					update_post_meta( $post_id, 'million_shades_slider_url', esc_url_raw($_POST['million_shades_slider_url']) );
				}
		        if ( isset( $_POST['million_shades_slider_btn_txt'] ) ) {
					update_post_meta( $post_id, 'million_shades_slider_btn_txt', sanitize_text_field($_POST['million_shades_slider_btn_txt']) );
				}
		
				
			
	}

public function million_shades_metabox_color_enqueue() {
		global $pagenow;
	$posts_all = array('post', 'page');
    // get current admin screen, or null
    $screen = get_current_screen();
    // verify admin screen object
    if (is_object($screen)) {
        // enqueue only for specific post types
        if (in_array($screen->post_type, $posts_all)) {
     
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'million_shades_meta_box_color_js', get_template_directory_uri() . '/inc/js/meta-box-color.js', array( 'wp-color-picker' ) );
		}
	}
}


public function million_shades_admin_styles(){
   
   $posts_all = array('post', 'page');
     // get current admin screen, or null
    $screen = get_current_screen();
    // verify admin screen object
    if (is_object($screen)) {
        // enqueue only for specific post types
        if (in_array($screen->post_type, $posts_all)) {
        wp_enqueue_style( 'million_shades_meta_box_styles', get_template_directory_uri() . '/assets/css/meta-box-styles.css' );
    	}
	}
}

}

$MS_Post_Metaboxes = new Million_Shades_Post_Metaboxes();