<?php
/**
 * styles of million-shades and style related functions.
 *
 * @author  Kudrat E Khuda
 * @package million-shades
 *
 */


function million_shades_customizer_css($style) {
		
	
	    $style = '';
	
	    $style .= million_shades_primary_fonts();
	    $style .= million_shades_accent_color();
 	    $style .=  million_shades_get_color_style('style');
		
	  
	    $style .= million_shades_get_two_dimension_style('style','width-height');
		$style .= million_shades_get_two_dimension_style('style','three');
		$style .= million_shades_get_two_dimension_style('style','four');
	
        $style .= million_shades_get_border_width_style_radius('style','border');
	    $style .= million_shades_get_border_width_style_radius('style','width');
	    $style .= million_shades_get_border_width_style_radius('style','style');
		$style .= million_shades_get_border_width_style_radius('style','radius');
	
		
		$style .= million_shades_get_border_width_style_radius('style','top-border-color');
		$style .= million_shades_get_border_width_style_radius('style','top-border-width');
		$style .= million_shades_get_border_width_style_radius('style','top-border-style');
		$style .= million_shades_get_border_width_style_radius('style','bottom-border-color');
		$style .= million_shades_get_border_width_style_radius('style','bottom-border-width');
		$style .= million_shades_get_border_width_style_radius('style','bottom-border-style');
		
		$style .= million_shades_get_two_dimension_style('style','font-size');
		$style .= million_shades_get_two_dimension_style('style','single');
		$style .= million_shades_get_site_header_align();
		
		$style .= million_shades_site_background();
	
		$style .= million_shades_get_two_dimension_style('style','hide');
		$style .= million_shades_get_two_dimension_style('style','check');
		$style .= million_shades_scrollup_icon_size();
		
		
		$style .= million_shades_site_title_type();
		$style .= million_shades_topbar_layout();
		$style .= million_shades_topbar_social_item_number();
		
		
		$style .= million_shades_sticky_header();
		$style .= million_shades_full_page_header_media();
		$style .= million_shades_media_screen();
		
		
		$style .= million_shades_button_border_color();
		$style .= million_shades_three_text_align();
		
		$style .= million_shades_get_border_width_style_radius('style','two-border-color');
		$style .= million_shades_get_border_width_style_radius('style','two-border-width');
		$style .= million_shades_get_border_width_style_radius('style','two-border-style');
		$style .= million_shades_form_input_bg_color();
		$style .= million_shades_media_title_family();
		if ( class_exists('Million_Shades_Pro')) { 
		
		$style .= million_shades_get_two_dimension_style('style','hide-pro');
		$style .= million_shades_pro_get_color_style('style');
		 $style .= million_shades_pro_get_fonts_style('family','style'); 
		$style .= million_shades_pro_get_fonts_style('size','style'); 
		$style .= million_shades_pro_get_fonts_style('spacing','style'); 
		$style .= million_shades_pro_get_fonts_style('weight','style'); 
		$style .= million_shades_pro_get_fonts_style('height','style'); 
		$style .= million_shades_pro_get_fonts_style('style','style'); 
		$style .= million_shades_pro_get_fonts_style('transform','style');
		$style .= million_shades_sidebar_title_style();
		$style .= million_shades_pro_mobile_menu_color();
		$style .= million_shades_pro_get_animation_speed('header-media-image','10');
		$style .= million_shades_pro_get_animation_speed2('nl-slide-ovr-title','10');
		
		$style .= million_shades_pro_contact_font_size();
		}
		
		 $style .= million_shades_form_padding_margins();
		
		  $style .= million_shades_make_opacity_zero();
		  $style .= million_shades_social_icon_width_height();
		  $style .= million_shades_button_shortcut();
		  $style .= million_shades_post_meta_style();
		   $style .= million_shades_drop_cap();
		  $style .= million_shades_style_white_shadow();
		  $style .= million_shades_overlay_fullwidth_responsive();
		  $style .= million_shades_post_image_width();
		  $style .= million_shades_style_block_qoate();
		  $style .= million_shades_style_search_input_bg();
		   $style .= million_shades_media_video_style();
		   $style .= million_shades_widget_border_color();
		   $style .= the_gap_mobile_woo_header();
		 
		 
		
	wp_enqueue_style( 'million_shades_style', get_stylesheet_uri() );
		
	
	wp_add_inline_style( 'million_shades_style', $style );	
	
}

add_action( 'wp_enqueue_scripts', 'million_shades_customizer_css' );



function million_shades_media_title_family(){
	$style = '';
	if ( class_exists('Million_Shades_Pro')) { 
		$header_media_title_font_family = get_theme_mod('header_media_title_font_family');
		$header_media_title_font_size = get_theme_mod('header_media_title_font_size');
		$header_media_title_transformation = get_theme_mod('header_media_title_transformation');
		if ($header_media_title_font_family != '') {
		
			$style .= "h1.nl-media-ovr-title,h1.nl-slide-ovr-title,h1.video-media-ovr-title span{font-family:".esc_attr($header_media_title_font_family).";}";
		}
		if ($header_media_title_font_size != '') {	
			$style .= "h1.nl-media-ovr-title,h1.nl-slide-ovr-title,h1.video-media-ovr-title{font-size:".esc_attr($header_media_title_font_size)."px;}";
		}
		if ($header_media_title_transformation != '') {	
			$style .= "h1.nl-media-ovr-title,h1.nl-slide-ovr-title,h1.video-media-ovr-title{text-transform:".esc_attr($header_media_title_transformation).";}";
		}
	}else {
		$style .= 'h1.nl-media-ovr-title,h1.video-media-ovr-title{font-size:50px;text-transform:uppercase;}';
		$style .= 'h1.nl-media-ovr-title,h1.video-media-ovr-title{font-family:"Playfair Display",sans-serif;}';
		
	}
	return $style;
}

function million_shades_widget_border_color(){
	
	$bg_color = get_theme_mod('site-content-background-color','#ffffff');
	$style='';
	
		$color = million_shades_hex2rgba('#eeeeee',0.2);
	
		if ($bg_color == '#fff'||$bg_color == '#ffffff') {
		$style.='.sidebar .widget,#secondary .widget-title {border:1px solid #eeeeee}';
		$style.='.related-single {border-top:1px solid #eeeeee}';
		$style.='.related-single,.ms-related-posts,#blog-post article.hentry, .search article.hentry, .archive article.hentry, .tag article.hentry, .category article.hentry, .blog article.hentry {border-bottom:1px solid #eeeeee}';
		} else {
		$style.='.sidebar .widget,#secondary .widget-title {border:1px solid '.esc_attr($color).'}';	
		$style.='.related-single {border-top:1px solid '.esc_attr($color).'}';
		$style.='.related-single,.ms-related-posts,#blog-post article.hentry, .search article.hentry, .archive article.hentry, .tag article.hentry, .category article.hentry, .blog article.hentry {border-bottom:1px solid '.esc_attr($color).'}';
		}
	
	return $style;
}

function million_shades_media_video_style(){
	
	$style = '';
	$header_video = get_theme_mod('header_video');
	
	if ($header_video){
	$style .= "#wp-custom-header-video {height:auto;}";
	}
	
	
	
	return $style;

}

function million_shades_style_block_qoate(){
	$quote_style = get_theme_mod('quote_style','single');
	
	$style='';
	
	if ($quote_style == 'single'){
		
		$style .='.single-content blockquote.wp-block-quote p:before,.page-content blockquote.wp-block-quote p:before,.single-content blockquote p:before,.page-content blockquote p:before,.comment-content blockquote p:before{content: "\f10d";left: 0;top: 0; color: #ccc;}';
		
		$style .='.single-content blockquote.wp-block-quote p:after,.single-content blockquote p:after,.page-content blockquote.wp-block-quote p:after,.page-content blockquote p:after,.comment-content blockquote p:after{display:none;}';
		
	}
	if ($quote_style == 'double'){
		$style .='.single-content blockquote.wp-block-quote p:before,.page-content blockquote.wp-block-quote p:before,.single-content blockquote p:before,.page-content blockquote p:before{content: "\f10d"!important;left: 0;top: 0; color: #ccc;}';
		$style .='.single-content blockquote.wp-block-quote p:after,.page-content blockquote.wp-block-quote p:after,.single-content blockquote p:after,.page-content blockquote p:after{content: "\f10e"!important;right: 0;bottom: 0; color: #ccc;}';
	}
	if ($quote_style == 'bar'){
		$style .='.single-content blockquote.wp-block-quote p,.page-content blockquote.wp-block-quote p,.page-content blockquote p,.single-content blockquote p{border-left: 5px solid #ccc!important;}';
	}
	
	return $style;
}

function million_shades_style_white_shadow(){
	$post_style= get_theme_mod('post_style','none');
	$style='';
	
	if ($post_style == 'style1'){
		$style='.sidebar .widget {box-shadow:0px 5px 25px 0px rgba(0,0,0,0.1);}';
	}
	return $style;
}

function million_shades_style_search_input_bg(){
	$site_bg = get_theme_mod('site-content-background-color','#ffffff');
	$style='';
	
	if ($site_bg != '#ffffff'){
		$style='input[type="search"] { background-color:'.$site_bg.';}';
	}
	return $style;
}

function million_shades_post_image_width(){
	
	$col_no = get_theme_mod('post_column_no','2');
	$style='';
	
	if ($col_no == '2' || $col_no == '3'){
		$style ='.entry-header img {width:100%;}';
	}
	if ($col_no == '1'){
		$style='.entry-header img {width:auto;}';
	}
	
	return $style;
}


function million_shades_drop_cap(){
	
	$drop_caps = get_theme_mod('enable-drop-cap-single','1');
	$drop_cap = get_theme_mod('enable-drop-cap','1');
	
	$site_content = get_theme_mod('site-content-text-color','#333');
	
	$style = '';
	if ($drop_caps == '1'){
		$style .= ".single-content p:first-child:first-letter{
			color:".$site_content.";
  float: left;
  font-size: 75px;
  line-height: 60px;
  padding-top: 4px;
  padding-right: 8px;
  padding-left: 3px;}";
  
	}
	if ($drop_cap == '1'){
		$style .= ".entry-content p.drop-cap:first-child:first-letter{
			color:".$site_content.";
  float: left;
  font-size: 75px;
  line-height: 60px;
  padding-top: 4px;
  padding-right: 8px;
  padding-left: 3px;}";
  
	}
	return $style;
}

function million_shades_topbar_layout(){
	$style ='';
	$topbar_layout = get_theme_mod('topbar-layout','one');
	if ($topbar_layout == 'one'){
		$style .= ".topbar .topbar-text{float: left}";
		
		$style .= ".topbar .topbar-social{float: right}";
		
		
	}
	if ($topbar_layout == 'two'){
		$style .= ".topbar .topbar-text{float: right}";
		$style .= ".topbar .topbar-text .contacts-body{text-align: right}";
		
		$style .= ".topbar .topbar-social{float: left}";
		$style .= ".inner-topbar .topbar-social{text-align: left}";
		
		
	}
	if ($topbar_layout == 'three'){
		$style .= ".topbar .topbar-text{display: none}";
		$style .= ".topbar .topbar-social{width: 100%}";
		$style .= ".topbar .topbar-social{float: none}";
		
		
		
	}
	if ($topbar_layout == 'four'){
		$style .= ".topbar .topbar-social{display: none}";
		$style .= ".topbar .topbar-text{width: 100%}";
		$style .= ".topbar .topbar-text{float: none}";
		$style .= ".topbar .topbar-text .contacts-body{text-align: center}";
		
		
		
		
	}
	return $style;
}



function million_shades_three_text_align(){
	
    $style = '';
    $social = get_theme_mod('topbar-social-alignment','right');
    $text = get_theme_mod('topbar-text-alignment','left');
    $style .= '.inner-topbar .topbar-social { text-align: '.esc_attr($social).'}';
    $style .= '.inner-topbar .contacts-body { text-align: '.esc_attr($text).'}';
	
    return $style;
}

function million_shades_social_icon_width_height(){

	$icon_width = get_theme_mod('social-item-width','32');
	$icon_height = get_theme_mod('social-item-height','32');
	$hvr_border_color = get_theme_mod('topbar-social-hvr-border-color','#323844');
	$social_icon_size = get_theme_mod('topbar-social-icon-size','12');
	
	
	$style 	= ".social-icon-topbar .icon{ height: " . intval($icon_height) . "px;}"."\n";
	$style 	.= ".social-icon-topbar .icon{ width: " . intval($icon_width) . "px;}"."\n";
	$style 	.= ".social-icon-topbar .icon:hover{ border-color: " . esc_attr($hvr_border_color) . ";}"."\n";
	
	$style 	.= ".social-icon-topbar .icon i.fa{ line-height: " . intval($icon_height) . "px;}"."\n";
	$style 	.= ".social-icon-topbar .icon i.fa{ font-size: " . intval($social_icon_size) . "px;}"."\n";
	
	return $style;
	
}

function million_shades_make_opacity_zero(){
		$style = '';
		$selector = million_shades_form_input_selector();
		
		$hvrbgcolor = get_theme_mod('main-menu-top-level-hover-background-color','#fff');
		$bgcolor = get_theme_mod('main-menu-top-level-background-color','#fff');
		$currentbgcolor = get_theme_mod('main-menu-top-level-current-page-background-color','#fff');
		
		
		$hvrbgcolor_opacity = get_theme_mod('main-menu-top-level-hover-background-color-opacity','0');
		$bgcolor_opacity = get_theme_mod('main-menu-top-level-background-color-opacity','0');
		$currentbgcolor_opacity = get_theme_mod('main-menu-top-level-current-page-background-color-opacity','0');
		
		$hvrbgcolor_rgba = million_shades_hex2rgba($hvrbgcolor, $hvrbgcolor_opacity);
		$bgcolor_rgba = million_shades_hex2rgba($bgcolor, $bgcolor_opacity);
		$currentbgcolor_rgba = million_shades_hex2rgba($currentbgcolor, $currentbgcolor_opacity);
		
		if ($hvrbgcolor_opacity == '0'){
		 $style .= '#main-navigation.main-menu ul li a:hover { background-color: '.esc_attr($hvrbgcolor_rgba).'}';
		}
		if ($bgcolor_opacity == '0'){
		$style .= '#main-navigation.main-menu ul,#main-navigation.main-menu ul li a { background-color: '.esc_attr($bgcolor_rgba).'}';	
		}
		if ($currentbgcolor_opacity == '0'){
		 $style .= '#main-navigation.main-menu li.current-menu-item a,
		#main-navigation.main-menu li.current-menu-parent a { background-color: '.esc_attr($currentbgcolor_rgba).'}';	
		}
		
		return $style;
}



function million_shades_get_accent_color_mod(){
	
	return $accent_color = get_theme_mod('site-accent-color','#06d8a0');
}


function million_shades_accent_color_selectors(){
	
	return $accent_color_selector = '
	.main-menu ul li a:active,
	#main-navigation.main-menu li a:active,
	.toggle-menu-container .side-nav-wrap a:hover,
	.left-side-nav-wrap a:hover,

	.menu-toggle,
	.dropdown-toggle,
	.social-navigation a,
	.post-navigation a,
	.pagination a:hover,
	.pagination a:focus,
	.counter-icon span,
	.feature-icon span,
	.box-icon span,
	 #main-navigation.main-menu ul li.current-menu-item > a, 
#main-navigation.main-menu ul li.current_page_item > a,
	.post-author-box .fa,
	.page-links > .page-links-title,
	.comment-author,
	.comment-reply-title small a:hover,
	.comment-reply-title small a:focus';
	
}


function million_shades_accent_bgcolor_selectors(){
	
	 return $selectors = 'a.more-link,a.read-more,button,a.ovr-button, .btn-default.nlbtn1, input[type="button"], input[type="reset"], input[type="submit"],
	 #secondary .nl-search-form .btn,.woocommerce ul.products li.product .button,.read-more-btn a,
	 .edit-link .post-edit-link,.vc_inline-link,.blog-post-social .icon,
	 #site-footer h4.widget-title:after';
		
}

function million_shades_accent_border_selectors(){
	
	 return $selectors = 'input[type="search"]';
		
}

function million_shades_accent_border_top_selectors(){
	
	 return $selectors = '.sidebar .widget li,.sidebar .widget ul li,.sidebar .news-widget-body-,
			.sidebar .widget-contacts-body span,.sidebar .widget-selected-link span,
			.sidebar .social-icon-widget,.sidebar .cta-overlay';
		
}


function million_shades_accent_color(){
	
	$style = '';
	$accent_color = get_theme_mod('site-accent-color','#06d8a0');
	
	$colorSelctor = million_shades_accent_color_selectors();
	$bgcolorSelctor = million_shades_accent_bgcolor_selectors();
	$bordercolorSelctor = million_shades_accent_border_selectors();
	$bordertopSelctor = million_shades_accent_border_top_selectors();
	$accent_rgba	= million_shades_hex2rgba($accent_color, 0.3);
		
	$style .= ''.$colorSelctor.'{ color: '.esc_attr($accent_color).'}';
    $style .= ''.$bgcolorSelctor.' { background-color: '.esc_attr($accent_color).'}';
	
	$style .= ''.$bordercolorSelctor.' { border: 1px solid '.esc_attr($accent_rgba).'}';
	
	
	$style .= '.separator{ border-color: '.esc_attr($accent_color).'}';
			
    return $style;
}


function million_shades_get_body_font_family_mod(){
	
	return $font_family = get_theme_mod('site-primary-font-family','Playfair Display');

}



function million_shades_primary_fonts(){
	
	$style = '';
	$primary_fonts = get_theme_mod('site-primary-font-family','Playfair Display');
	
	
	
	$selectors = '*';
	
	$style .= ''.$selectors.'{ font-family: '.esc_attr($primary_fonts).'}';
     	
    return $style;
	
}



function million_shades_media_screen(){
	

$style = '';
$d_width = get_theme_mod('desktop-content-container-width','86');
$d_content_width = get_theme_mod('desktop-content-width','69');
$d_sidebar_width = get_theme_mod('desktop-sidebar-width','26');

$style .= "@media screen and (min-width:1024px){
	.inner-content,.inner-topbar,.inner-header {width:".intval($d_width)."%;}
	
	#primary {width:".intval($d_content_width)."%;}
	
	#secondary {width:".intval($d_sidebar_width)."%;}
	.inner-content,#primary,#secondary,.inner-topbar {margin: 0 auto;}

}";

$l_width = get_theme_mod('laptop-content-container-width','86');
$l_content_width = get_theme_mod('laptop-content-width','69');
$l_sidebar_width = get_theme_mod('laptop-sidebar-width','26');

$style .= "@media screen and (min-width:768px)and (max-width:1024px){
	.inner-content,.inner-topbar,.inner-header {width:".intval($l_width)."%;}
	
	#primary {width:".intval($l_content_width)."%;}
	#secondary {width:".intval($l_sidebar_width)."%;}
	.inner-content,#primary,#secondary,.inner-topbar {margin: 0 auto;}
	

}";

$lg_tab_width = get_theme_mod('large-tablet-content-container-width','90');
$lg_tab_content_width = get_theme_mod('large-tablet-content-width','69');
$lg_tab_sidebar_width = get_theme_mod('large-tablet-sidebar-width','26');

$style .= "@media screen and (min-width:768px)and (max-width:959px){
	.inner-content,.inner-topbar,.inner-header {width:".intval($lg_tab_width)."%;}
	
	
	#primary {width:".intval($lg_tab_content_width)."%;}
	#secondary {width:".intval($lg_tab_sidebar_width)."%;}
	.inner-content,#primary,#secondary,.inner-topbar {margin: 0 auto;}

}";


$tab_width = get_theme_mod('tablet-content-container-width','90');
$tab_content_width = get_theme_mod('tablet-content-width','100');
$tab_sidebar_width = get_theme_mod('tablet-sidebar-width','100');

$style .= "@media screen and (min-width:501px)and (max-width:767px){
	.inner-content,.inner-topbar,.inner-header {width:".intval($tab_width)."%;}
	.inner-content {margin: 0 auto;}
	#primary,#secondary,.layout-rightbar #primary,.layout-leftbar #primary,.layout-rightbar #secondary,.layout-leftbar #secondary {float: none;}
	#primary {width:".intval($tab_content_width)."%;}
	#secondary {width:".intval($tab_sidebar_width)."%;}
	.inner-content,#primary,#secondary,.inner-topbar {margin: 0 auto;}

}";

$phone_width = get_theme_mod('phone-content-container-width','90');
$phone_content_width = get_theme_mod('phone-content-width','100');
$phone_sidebar_width = get_theme_mod('phone-sidebar-width','100');
	
	
$style .= "@media screen and (max-width:500px){
	.inner-content,.inner-topbar,.inner-header {width:".intval($phone_width)."%;}
	#primary,#secondary,.layout-rightbar #primary,.layout-leftbar #primary  {float: none;}
	#primary {width:".intval($phone_content_width)."%;}
	#secondary {width:".intval($phone_sidebar_width)."%;}
	.inner-content,#primary,#secondary,.inner-topbar {margin: 0 auto;}

}";



return $style;

}



function million_shades_overlay_fullwidth_responsive(){
	
	
	$full_page = get_theme_mod('enable-full-page-header-media','');
	$ovr_heights = get_theme_mod('ovr_heights','all');
	
	
	$style = '';
	
	
	if ($ovr_heights == 'all'){
	
	
	
	$style .= "@media screen and (min-width:960px)and (max-width:1024px){
			
		h1.nl-media-ovr-title{font-size:45px!important;}
		h1.nl-slide-ovr-title{font-size:32px!important;}
	}";
	
	$style .= "@media screen and (min-width:768px)and (max-width:959px){
	
		h1.nl-media-ovr-title{font-size:40px!important;}
		h1.nl-slide-ovr-title{font-size:28px!important;}
	
	}";
	
	$style .= "@media screen and (min-width:501px)and (max-width:767px){
	
		h1.nl-media-ovr-title{font-size:32px!important;}
		
		h1.nl-slide-ovr-title{font-size:24px!important;}

	}";
	
	$style .= "@media screen and (max-width:500px){

		h1.nl-media-ovr-title{font-size:26px!important;}
		.nl-media-ovr-sub-title{display:none!important;}
		.media-imag-overlay-cta{padding:0!important;}
		h1.nl-slide-ovr-title{font-size:22px!important;}
	
	}";
	
	}
	
	
	
	if ($ovr_heights != 'all'){
	
	
	
	$style .= "@media screen and (min-width:960px)and (max-width:1024px){
			
		.nl-media-ovr-title{font-size:45px!important;}
		h1.nl-slide-ovr-title{font-size:32px!important;}
	}";
	
	$style .= "@media screen and (min-width:768px)and (max-width:959px){
	
		.nl-media-ovr-title{font-size:40px!important;}
		h1.nl-slide-ovr-title{font-size:28px!important;}
	
	}";
	
	$style .= "@media screen and (min-width:501px)and (max-width:767px){
	
		.nl-media-ovr-title{font-size:28px!important;}
		.nl-media-ovr-sub-title,nl-slide-ovr-sub-title{display:none!important;}
		h1.nl-slide-ovr-title{font-size:24px!important;}

	}";
	
	$style .= "@media screen and (max-width:500px){

		.nl-media-ovr-title{font-size:20px!important;}
		.nl-media-ovr-sub-title,nl-slide-ovr-sub-title{display:none!important;}
		.media-imag-overlay-cta{padding:0!important;}
		h1.nl-slide-ovr-title{font-size:22px!important;}
	
	}";
	
	if ($full_page = '1'){
			$style .= "@media screen and (max-width:500px){

				
				.topbar{display:none!important;}
				
	
		}";
		$style .= "@media screen and (min-width:501px)and (max-width:767px){

				
				.topbar{display:none!important;}
				
	
		}";
	}
	
	}

	return $style;
	

}
function the_gap_mobile_woo_header(){

$style = '';
$site_header_pattern = get_theme_mod('site-header-alignment','right');
if ($site_header_pattern == 'woo1'){
			$style .= "@media screen and (max-width:500px){

				
				.widget.woocommerce.widget_product_search{width:50%!important;}
				.menu-btn {float:left;}
	
		}";
		$style .= "@media screen and (min-width:501px)and (max-width:767px){

				
				.widget.woocommerce.widget_product_search{width:60%!important;}
				.menu-btn {float:left;}
				
	
		}";
}

	return $style;
}

function million_shades_button_shortcut(){
	if( is_home() ) {
	return $style = 'h1.page-title .customize-partial-edit-shortcut-button {display:none;}';
	}
}

function million_shades_form_input_selector(){
	return $selector = 'input[type="text"], input[type="email"], input[type="url"],
	input[type="password"], input[type="number"], input[type="tel"], 
			input[type="range"], input[type="date"], input[type="month"], 
			input[type="week"], input[type="time"], input[type="datetime"], 
			input[type="datetime-local"], input[type="color"], textarea,
			.wpcf7 .cf7_container .wpcf7-text, .wpcf7 .cf7_container .wpcf7-captchar,.wpcf7 .cf7_container textarea';
}

function million_shades_form_padding_margins() {
	
	$style = '';
	
	
	$margin_top = get_theme_mod('form-input-margin-top','0');
	$margin_bottom = get_theme_mod('form-input-margin-bottom','0');
	$padding_top = get_theme_mod('form-input-padding-top','0');
	$padding_bottom = get_theme_mod('form-input-padding-bottom','0');
	
	$selector = million_shades_form_input_selector();
	
	$style .= ''.$selector.'{ margin-top: '.intval($margin_top).'px}';
	$style .= '' .$selector.'{ margin-bottom: '.intval($margin_bottom).'px}';
	$style .= '' .$selector.'{ padding-top: '.intval($padding_top).'px}';
	$style .= ''.$selector.'{ padding-bottom: '.intval($padding_bottom).'px}';
	
	return $style ;
}


function million_shades_form_input_bg_color(){
	
		$selector = million_shades_form_input_selector();
			
		$bgcolor = get_theme_mod('site-content-background-color','#fff');
		
		
		
		$style = '';
		
		
		$style .= '' .$selector.'
		{ background-color: '.esc_attr($bgcolor).'}';
		
		
		
		
				
		return $style;
}




function million_shades_button_selectors(){
	
return $selectors = 'button:not(.search-submit):not(.customize-partial-edit-shortcut-button):not(.slick-prev):not(.slick-next), input[type="button"], input[type="reset"], input[type="submit"]';

}

function million_shades_button_border_color(){
	
	$style = '';
	$selectors = million_shades_button_selectors();
	$accent = million_shades_get_accent_color_mod();
	$bgcolor = get_theme_mod('all-buttons-background-color',$accent);
	$btncolor = get_theme_mod('all-buttons-text-color','#fff');
	
		$bordercolor = get_theme_mod('button-border-color','#eeeeee');
		$borderwidth = get_theme_mod('button-border-width','0');
		$borderstyle = get_theme_mod('button-border-style','none');
		$borderradius = get_theme_mod('button-border-radius','0');
		
		
		$paddingTop = get_theme_mod('buttons-padding-top','6');
		$paddingBottom = get_theme_mod('buttons-padding-bottom','6');
		$paddingLeft = get_theme_mod('buttons-padding-left','15');
		$paddingRight = get_theme_mod('buttons-padding-right','15');
		
		$buttonApply = get_theme_mod('buttons-padding-apply','0');
		
		
		$btnHoverColor = get_theme_mod('all-buttons-hover-color','#fff');
		$btnHoverBgColor = get_theme_mod('all-buttons-hover-background-color','#06d8e0');
		
		
		$style .= 'a.read-more, a.more-link,button, input[type="button"], input[type="reset"], input[type="submit"]{ color: '.esc_attr($btncolor).'}';
		
		$style .= 'a.read-more, a.more-link,button, input[type="button"], input[type="reset"], input[type="submit"]{ background-color: '.esc_attr($bgcolor).'}';
		
		$style .= 'a.read-more:hover,a.more-link:hover,button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover{ color: '.esc_attr($btnHoverColor).'}';
		
		$style .= 'a.read-more:hover,a.more-link:hover,button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover{ background-color: '.esc_attr($btnHoverBgColor).'}';

		$style .=  ' ' .$selectors.'
		{ border-color: '.esc_attr($bordercolor).'}';
				
		$style .= ' ' .$selectors.'
				 { border-width: '.intval($borderwidth).'px}';
				 
		$style .= ' ' .$selectors.'
				 { border-style: '.esc_attr($borderstyle).'}';
		
		$style .=  ' ' .$selectors.'
				 { border-radius: '.intval($borderradius).'px}';
		
		
		$style .= ' ' .$selectors.'
				 { padding-top: '.intval($paddingTop).'px}';
		$style .=  ' ' .$selectors.'
				 { padding-bottom: '.intval($paddingBottom).'px}';
		$style .= ' ' .$selectors.'
				 { padding-left: '.intval($paddingLeft).'px}';
		$style .=  ' ' .$selectors.'
				 { padding-right: '.intval($paddingRight).'px}';
				 
		
			
		return $style;
}

function million_shades_scrollup_icon_size(){
	
		$icon_size = get_theme_mod('scroll-up-icon-size','20');
		$scrollUpStyle = get_theme_mod('scroll-up-style','circle');
		$controlWidth = intval($icon_size) + intval($icon_size);
		$style = '';
		if ($scrollUpStyle == 'circle' ) {
			$style .= ".scroll-up-circle i.fa  { font-size: ".intval($icon_size)."px}"; 
			$style .= ".scroll-up-circle { width: ".intval($controlWidth)."px}"; 
			$style .= ".scroll-up-circle{ height: ".intval($controlWidth)."px}"; 
			$style .= ".scroll-up-circle{ line-height: ".intval($controlWidth)."px}"; 
		} else {
			$style .= ".scroll-up-sqaure i.fa{ font-size: ".intval($icon_size)."px}"; 
			$style .= ".scroll-up-sqaure{ width: ".intval($controlWidth)."px}"; 
			$style .= ".scroll-up-sqaure{ height: ".intval($controlWidth)."px}"; 
			$style .= ".scroll-up-sqaure{ line-height: ".intval($controlWidth)."px}";
		}	
		return $style;
}





function million_shades_sticky_header(){
	
	$style ='';
	$sticky = get_theme_mod('enable-sticky-header','1');
	
	
	$headerbgColor = get_theme_mod('site-header-background-color','#ffffff');
	
	$sticky_bg_color = get_theme_mod('sticky-header-background-color',$headerbgColor);
	$headerAlign = get_theme_mod('site-header-alignment');
	$opacity = get_theme_mod('sticky-header-background-color-opacity','1');
	
	
	
	$site_margin_left = get_theme_mod('site-layout-margin-left','0');
	$site_margin_right = get_theme_mod('site-layout-margin-right','0');
	$site_margin_lr = intval($site_margin_left) + intval($site_margin_right);
	
	
	$site_layout = get_theme_mod('site-layout');
	
	
	
	
	$rgbaOrHex = '';
	if ($opacity == '1'){
				$rgbaOrHex = $sticky_bg_color;
	} else {
				$rgbaOrHex 	= million_shades_hex2rgba($sticky_bg_color, $opacity);
	}
	
	if ($sticky == 1){ 
		if ($headerAlign != 'inline'){
			if ($sticky_bg_color !=''){
				
				$style .= "#site-header.fixed { background-color: ".esc_attr($rgbaOrHex)."}"; 
	
			}
			
			if ($site_layout == 'boxed'){
			
			$style .= "#site-header.fixed { width: calc(100% - ".intval($site_margin_lr)."px)!important}";
			
			}
			
			$style .= "#site-header.fixed { z-index: 999999}"; 
		}
		
		if ($headerAlign == 'inline'){
			
			if ($sticky_bg_color ==  '#ffffff'){
				
				$style .= ".main-menu.inline { width:100% }"; 
				$style .= "#main-navigation.main-menu ul.inline { background-color: ".esc_attr($headerbgColor)."}"; 
				
			
			}
			if ($sticky_bg_color != ''){
				
				$style .= ".main-menu.inline { width:100% }"; 
				
				$style .= "#main-navigation.main-menu ul.inline { background-color: ".esc_attr($sticky_bg_color)."}"; 
				
			
			}
			
			
			$style .= "#site-header.inline { border:none}"; 
			$style .= "#main-navigation.main-menu.inline { margin-top:0}"; 
			$style .= ".main-menu.inline { z-index: 999999}"; 		
		
		}
				
	} 

	else {
	    $style .= "#site-header.fixed { z-index: 9999}"; 
		$style .= ".main-menu.fixed { z-index: 9999}"; 
	}
	
	return $style;
	
		 
}	

function million_shades_full_page_header_media(){
	
	$media_position = get_theme_mod('header_media_position','bottom');
	$media_type = get_theme_mod('header-media-type','image');
	if ($media_position == 'top' || $media_type == 'none'){
		return;
	}
	
	$style ='';
	$full_head = get_theme_mod('enable-full-page-header-media','0');
	
	
	$site_layout = get_theme_mod('site-layout');
	
	$site_margin_left = get_theme_mod('site-background-outer-margin-left','0');
	$site_margin_right = get_theme_mod('site-background-outer-margin-right','0');
	$site_margin_lr = intval($site_margin_left) + intval($site_margin_right);
	
	
	
	if (($full_head == 1) && (is_front_page())){

	
		
		
		  $style .= "#main-header{ width:100%;}";
		 
		  
		 if ($site_layout == 'boxed'){
			
			$style .= "#main-header { width: calc(100% - ".intval($site_margin_lr)."px)!important}";
			
		}
		  
		 $style .= "#main-header{ z-index: 999999}";
		   
		 
		 
		 $transparent = get_theme_mod('make-transparent','all');
		 $topbar_color = get_theme_mod('topbar-background-color','#fff');
		 $header_color = get_theme_mod('site-header-background-color','#fff');
		 $menu_color = get_theme_mod('main-menu-background-color','#fff');
		 
		 $topbar_bg_color = get_theme_mod('topbar-contact-item-background-color','#fff');
		 
		
		 
		 $opacity = 0;
		 $rgbaTopbar	= million_shades_hex2rgba($topbar_color, $opacity);
		 $rgbaHeader	= million_shades_hex2rgba($header_color, $opacity);
		 $rgbaMenu	= million_shades_hex2rgba($menu_color, $opacity);
		 $rgbaTopbarbg	= million_shades_hex2rgba($topbar_bg_color, $opacity);
		 
		 
		 
		 if ($transparent == 'all'){
		 $style .= ".topbar { background-color: ".esc_attr($rgbaTopbar)."}"; 
		 $style .= "#site-header { background-color: ".esc_attr($rgbaHeader)."}";
		 $style .= ".main-menu,#main-navigation.main-menu li.current-menu-item a, #main-navigation.main-menu li.current-menu-parent a { background-color: ".esc_attr($rgbaMenu)."}"; 
		 $style .= "#item1, #item2, #item3, #item4, #item5,.social-icon-topbar .icon{ background-color: ".esc_attr($rgbaTopbarbg)."}";
		 $style .= ".topbar,#site-header { border-bottom-color: ".esc_attr($rgbaMenu)."}"; 
		
		}
		
		if ($transparent == 'all-border'){
		 $style .= ".topbar { background-color: ".esc_attr($rgbaTopbar)."}"; 
		 $style .= "#site-header { background-color: ".esc_attr($rgbaHeader)."}";
		 $style .= ".main-menu,#main-navigation.main-menu li.current-menu-item a, #main-navigation.main-menu li.current-menu-parent a { background-color: ".esc_attr($rgbaMenu)."}"; 
		 $style .= "#item1, #item2, #item3, #item4, #item5{ background-color: ".esc_attr($rgbaTopbarbg)."}";
		
		
		}
		
		  if ($transparent == 'topbar'){
		 $style .= ".topbar { background-color: ".esc_attr($rgbaTopbar)."}"; 
		$style .= "#item1, #item2, #item3, #item4, #item5,.social-icon-topbar .icon{ background-color: ".esc_attr($rgbaTopbarbg)."}";
		 $style .= ".topbar { border-bottom-color: ".esc_attr($rgbaMenu)."}"; 
		
		 }
		 
		if ($transparent == 'header'){
		  $style .= "#site-header { background-color: ".esc_attr($rgbaHeader)."}";
		
		 }
		 
		  if ($transparent == 'menu'){
			 $style .= ".topbar { background-color: ".esc_attr($rgbaTopbar)."}"; 
		 $style .= "#site-header { background-color: ".esc_attr($rgbaHeader)."}";
		 
		 
		$style .= "#item1, #item2, #item3, #item4, #item5,.social-icon-topbar .icon{ background-color: ".esc_attr($rgbaTopbarbg)."}";
		 $style .= ".topbar,#site-header { border-bottom-color: ".esc_attr($rgbaMenu)."}"; 
		
		$style .= ".main-menu { background-color: ".esc_attr($rgbaMenu)."}";
		
		 }
		 
		 
		 $style .= "#site-header {box-shadow: 0 0 0 rgba(0,0,0,0)}"; 
		 
	return  $style .= "#main-header{ position:absolute;}"; 
	
	
	}
	
	else {
		return $style = "#main-header { position: static}"; 
	}
	
}

function million_shades_site_title_type(){
    
    $style ='';
	$site_title_type = get_theme_mod('site-title-type');
	
	if($site_title_type == 'one'){
		$style = ".logo { display: none}"; 
		return $style .= ".site-title { display: block}"; 
	}
	
	if($site_title_type == 'two'){
	 $style = ".site-title { display: none}"; 
		return	$style .= ".logo { display: none}"; 
	}
	
	if($site_title_type == 'three'){
		$style = ".logo { display: none}"; 
		return $style .= ".site-title { display: none}"; 
	}
}


function million_shades_site_background(){
    
    $style = '';
	$site_layout = get_theme_mod('site-layout','full-width');
	$pattern = get_theme_mod('site-background-pattern','wood');
	$page_bg_image_url = get_background_image();
	$src = get_template_directory_uri().'/assets/images/';
	$bg_color = get_theme_mod('background_color');
	
	if ($site_layout == 'boxed'){
		if( get_theme_mod('site-background-type')=='one'){
			
	
			$style .= "body.boxed{background-image:none!important}"; 
			$style .= "body.boxed{background-color:" .esc_attr($bg_color)."}"; 
	
		}
	
		if ( get_theme_mod('site-background-type')=='two'){
	

		$style = "body.boxed{background-image:url(" . esc_url($page_bg_image_url). ")}";
	
		}
		if ( get_theme_mod('site-background-type')=='three'){
	
		$style = "body.boxed{background:url(".esc_url($src).esc_attr($pattern).".jpg) repeat!important}";
		}
	}
	
	if ($site_layout == 'full-width'){
		
		if( get_theme_mod('site-background-type')=='one'){
			
	
			$style .= "body.custom-background{background-image:none!important}"; 
			$style .= "body.custom-background{background-color:" .esc_attr($bg_color)."}"; 
	
		}
		
		if ( get_theme_mod('site-background-type')=='two'){
	

		$style = "body.custom-background{background-image:url(" . esc_url($page_bg_image_url). ")}";
	
		}
		
		if ( get_theme_mod('site-background-type')=='three'){
	
		$style = "body.custom-background{background:url(".esc_url($src).esc_attr($pattern).".jpg) repeat!important}";
		}
		
			
	}
	
	return $style;
}



function million_shades_post_meta_style(){

	if ( is_singular( ) ) {
	$styles = '';
	
	global $post;

	$hide_page_header = get_post_meta( $post->ID, 'million_shades_hide_page_header', true );
	$meta_color = get_post_meta( $post->ID, 'million_shades_page_header_bg_color', true );
	
	if ( $hide_page_header == 'yes'){
	$styles .= '.page-content-header { display: none;}'; 
	}
	
	if($meta_color !=''){
		$styles .= '.page-content-header { background-color:'.esc_attr($meta_color).';}';
	}

	return $styles;
	
	}
	
}



function million_shades_get_site_header_align() {
	
	$style = '';
	$title_type = get_theme_mod('site-title-type');
	
	if ( $title_type == 'one') {
		 $style .= ".site-title{display:block}";
		 $style .= ".site-logo{display:none}";
	}
	
	if ( $title_type == 'two') {
		 $style .= ".site-title{display:none}";
		 $style .= ".site-logo{display:block}";
	}
	
	
	if ( $title_type == 'three') {
		 $style .= ".site-title{display:none}";
		 $style .= ".site-logo{display:none}";
	} 
	
	
		
		$side_header = get_theme_mod('replace-standard-header-as-side-header','0'); 
		
		if ($side_header == 1){
		$site_header_pattern = 'inline';
		}else {
		    $site_header_pattern = get_theme_mod('site-header-alignment','right');
		}
	
		if ( $site_header_pattern == 'left') {
		
		 $style .= "#main-navigation.main-menu,.menu-btn{float:left;}";
		 $style .= ".branding{float:right;}";
		 $style .= "#main-navigation.main-menu{text-align:left;}";
		 $style .= ".site-title,.site-logo{float:right;}";
		 $style .= ".site-title,.site-logo{clear:both;}";
		 $style .= ".search-container{float: right;}";
		
		 
		 $style .= ".inner-header{-webkit-box-orient: horizontal;}";
		 $style .= ".inner-header{-webkit-box-direction: reverse;}";
		 $style .= ".inner-header{-ms-flex-direction: row-reverse;}";
		 $style .= ".inner-header{flex-direction: row-reverse;}";
			$style .= "#main-navigation .ms-cart-icon{display:none!important;}";
		}
		
		if ( $site_header_pattern == 'right') {
			
		 $style .= "#main-navigation.main-menu,.menu-btn{float:right;}";
		 $style .= ".branding{float:left;}";
		 $style .= "#main-navigation.main-menu,.menu-btn{text-align:right;}";
		 $style .= ".site-logo{float:left;}";
		 $style .= ".site-title,.site-logo{clear:both;}";
		 $style .= ".search-container{float: right;}";
		 
		 $style .= ".inner-header{display: -webkit-box;}";
		 $style .= ".inner-header{display: -ms-flexbox;}";
		 $style .= ".inner-header{display: flex;}";
		 $style .= ".inner-header{-ms-flex-wrap: wrap;}";
		 $style .= ".inner-header{flex-wrap: wrap;}";
		 $style .= ".inner-header{-webkit-box-align: center;}";
		 $style .= ".inner-header{-ms-flex-align: center;}";
		 $style .= ".inner-header{align-items: center;}";
		 $style .= "#main-navigation .ms-cart-icon{display:none!important;}";
		 
		}
		
		if ( $site_header_pattern == 'inline') {
		$style .= ".inner-header{display: block;}";
		$style .= ".site-title,.site-description,.menu-btn{float:none;width:100%}";
		$style .= ".site-logo{width:100%}";
		$style .= ".site-logo{float:none}";
		$style .= ".site-logo {margin:0 auto}";
		$style .= ".site-logo{text-align: center}";
	
		
		$style .= ".site-title,.site-description{text-align: center}";
		$style .= "#main-navigation.main-menu,.menu-btn{display:block;text-align: center}";
		$style .= "#main-navigation .ms-cart-icon{display:none!important;}";
		}
		
		if ( $site_header_pattern == 'both-left') {
		 $style .= ".inner-header{display: block;}";
		 $style .= "#main-navigation.main-menu{float:left;}";
		 $style .= ".branding{float:left;}";
		 $style .= "#main-navigation.main-menu{text-align:left;display:block;width:100%}";
		 $style .= ".site-logo{float:left;}";
		 $style .= "#main-navigation .ms-cart-icon{display:none!important;}";
		
	
		}
		
		
			if ( $site_header_pattern == 'woo1') {
			
		 $style .= ".inner-header{display: block!important;}";
		 $style .= "#main-navigation.main-menu{float:none!important;clear:both;}";
		 $style .= ".branding{float:left!important;}";
		 $style .= "#main-navigation.main-menu{text-align:center!important;display:block!important;width:100%!important;}";
		 $style .= ".site-logo{float:left!important;}";
		  $style .= ".branding{margin-bottom: 10px!important;}";
		  $style .= "#site-header{padding-bottom: 0!important;}";
		   $style .= "#site-header{padding-top: 20px!important;}";
		   $style .= "#main-navigation .search-icon{display:none!important;}";
		   
		
	
		}
	
		
	return $style;
}



function million_shades_topbar_social_item_number(){
    
	$style = '';
	$social_number = get_theme_mod('social-number','4');
	if ($social_number == '2'){
		$style = "#ha3,#ha4,#ha5,#ha6,#ha7,#ha8{display: none}";
		
	}
	if ($social_number == '3'){
		$style = "#ha4,#ha5,#ha6,#ha7,#ha8{display: none}";
		
	}
	if ($social_number == '4'){
		$style = "#ha5,#ha6,#ha7,#ha8{display: none}";
		
	}
	if ($social_number == '5'){
		$style = "#ha6,#ha7,#ha8{display: none}";
		
	}
	if ($social_number == '6'){
		$style = "#ha7,#ha8{display: none}";
		
	}
	if ($social_number == '7'){
		$style = "#ha8{display: none}";
		
	}
	return $style;
}





function million_shades_get_site_description(){
$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<div id="site-description" class="site-description">
				<?php echo esc_html($description); /* WPCS: xss ok. */ ?>
				</div>
				
			<?php
		
		
			endif; 	
}


/* 
 * site layout
 */
 if ( ! function_exists( 'million_shades_web_layout' ) ) :   
	function million_shades_web_layout($classes){
	    if(get_theme_mod('site-layout','full-width') == 'boxed'){
	        $classes[]= 'boxed';
	    }
        elseif(get_theme_mod('site-layout','full-width') == 'full-width'){
            $classes[]='full-width';
        }
	    return $classes;
   }
  endif;
 add_filter( 'body_class', 'million_shades_web_layout' );
   
/* 
 * set custom body classes
 */
 
if ( ! function_exists( 'million_shades_set_body_class' ) ) :
	function million_shades_set_body_class( $classes ) {

		
		$classes[] = 'layout-' . million_shades_get_layout();
		
		return $classes;
	}
endif;
add_filter( 'body_class', 'million_shades_set_body_class' );


/* 
 * set page/post layout
 */
 


if ( ! function_exists( 'million_shades_get_layout' ) ) :
	function million_shades_get_layout() {
		global $post;

		$layout = 'rightbar';

		$layout_home = get_theme_mod('post-layout-option','rightbar');
		$layout_single = get_theme_mod('single-post-layout-option','rightbar');
		$layout_page = get_theme_mod('page-layout-option', 'nosidebar');
		$layout_frontpage = get_theme_mod('layout_frontpage');
		$layout_page = ( !empty($layout_page) ) ? $layout_page : 'center';

		// get custom page layout
		if ( is_singular() ) {
			
			
			$custom = get_post_meta( $post->ID, 'million_shades_page_layout', true );
			if ( '' == $custom || 'default' == $custom ) {
				unset( $custom );
			}
		}

		// 'post' layout
		if ( is_single() && isset( $layout_single) ) {
			$layout = ( isset( $custom ) )
				? $custom
				: $layout_single;
		} // 'page' layout
		elseif ( is_page() && isset( $layout_page )  ) {
			$layout = ( isset( $custom ) )
				? $custom
				: $layout_page;
		} // home layout settings
		elseif ( is_home() && $layout_home ) {
			$layout = $layout_home;
		} // default layout settings
		if ( is_front_page() && $layout_frontpage ) {
				$layout = $layout_frontpage;
		} 
		return $layout;
	}
endif;


 




