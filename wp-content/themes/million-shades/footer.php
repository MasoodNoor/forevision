<?php
/**
 * The template for displaying the footer
 *
 * 
 * @package million-shades
 * 
 */

?>


	</div><!-- #Content end -->
		
	<!-- footer area starts from herer -->
	<footer id="site-footer" class="site-footer" role="contentinfo">
		<div class="inner-content"> 
	<?php 
	
	
		/*   Footer widget areas start from here */
			$footer_widgets = get_theme_mod('footer-widget-areas', '4');
			
		?>
	
		<div class="footer-widgets">
		<!--  You can create 1 to 4 footer widgets -->
			<?php for ($i=1; $i<=$footer_widgets; $i++) { 
			$footer_widgets_no = get_theme_mod('footer-widget-areas', '4');
			?>
			
			<div class="fw-col-<?php echo esc_attr($footer_widgets_no);?>">
			
			<?php if ( is_active_sidebar( 'footer-'.$i) ) :  ?>
			<?php dynamic_sidebar('footer-'.$i);?>
			<?php endif; ?>
			</div>
			
			<?php } ?>
			
			
		</div>
		

		<?php	$footer_image = get_theme_mod('footer-background');
				$footer_info_height = get_theme_mod('footer-info-height','200');	?>
	
		<div class="clear"></div>
		</div>
		
		
		<!--  Site info or site credit area starts from herer -->
		<!--  Background image on footer info area -->
		<div class="site-info" <?php if($footer_image !=''){?> style="background-image:url('<?php echo esc_url($footer_image); ?>');height:<?php echo esc_attr($footer_info_height); ?>px;" <?php } ?>>

			<div class="inner-content"> 
		
		<!--  Site credit area starts from herer -->
			<div class="site-credit">
		    
				<?php 	
				
					$footer_info_input1  =  get_theme_mod('footer-info-input',__('Proudly Powered by WordPress','million-shades'));	
						
					$footer_info_link_text  =  get_theme_mod('footer-info-link-text',__('Million Shades','million-shades')); 
	
					$footer_info_link_url  =  get_theme_mod('footer-info-link-url',__('http://themenextlevel.com','million-shades'));
				 
					
				
				 
				 ?> 
				<span class="text1"> <?php echo esc_html($footer_info_input1); ?></span> 
				
				<span class="sep"> | </span>
				<span class="text3">
					<a href="<?php echo esc_url($footer_info_link_url ); ?>"> <?php echo esc_html($footer_info_link_text); ?>
					</a>
				</span>   
	       
			</div>	
			</div><!-- inner content  -->
		</div> <!-- site-info -->
			<?php $scroll_up_style = get_theme_mod('scroll-up-style','circle'); ?>
			<div id="scroll-up" class="scroll-up-<?php echo esc_attr($scroll_up_style);  ?>"><a title="<?php esc_attr_e('Go to Top','million-shades');?>" href="#site-header"><i class="fa fa-<?php echo esc_attr(get_theme_mod('scroll-up-icon','chevron-up')); ?>"></i></a></div>
		
		
	</footer><!-- site-footer -->

	
	
</div><!-- page -->

<?php wp_footer(); ?>

</body>
</html>
