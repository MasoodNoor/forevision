<?php


if( class_exists( 'WP_Customize_Control' ) ):

    class Million_Shades_Headings_Control extends WP_Customize_Control {
        public $types = 'heading';
        public $label = '';
        public function render_content() {
        ?>
            <h4 style="margin-bottom:2px;border-bottom:1px solid;padding:1px;color:#58719E;
			text-transform:uppercase;"><?php echo esc_html( $this->label ); ?></h3>
			
        <?php
		if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo wp_kses_post($this->description); ?></span>
			<?php endif; 
        }
    } 

/* this control taken from https://github.com/soderlind/2016-customizer-demo/blob/master/functions.php */

class Million_Shades_Customizer_Range_Value_Control extends WP_Customize_Control {
	public $types = 'range-value';

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since 3.4.0
	**/
	public function enqueue() {
		wp_enqueue_script( 'customizer-range-value-control', get_stylesheet_directory_uri() . '/js/customizer-range-value-control.js', array( 'jquery' ), rand(), true );
		wp_enqueue_style( 'customizer-range-value-control', get_stylesheet_directory_uri() . '/assets/css/customizer-range-value-control.css', array(), rand() );
	}

	/**
	 * Render the control's content.
	 *
	 * @author soderlind
	 * @version 1.2.0
	 **/
	public function render_content() {
		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<div class="range-slider"  style="width:100%; display:flex;flex-direction: row;justify-content: flex-start;">
				<span  style="width:100%; flex: 1 0 0; vertical-align: middle;"><input class="range-slider__range" type="range" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->input_attrs(); $this->link(); ?>>
				<span class="range-slider__value">0</span></span>
			</div>
			<?php if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
			<?php endif; ?>
		</label>
		<?php
	}
}

endif;


if ( class_exists( 'WP_Customize_Control' ) ) {
	
if ( ! class_exists( 'Million_Shades_Custom_Font_Control' ) ) {

	class Million_Shades_Custom_Font_Control extends WP_Customize_Control {

		
		public $types = 'nl-font-family';

	
		public function render_content() {

			$current_val = $this->value(); 
		
			 $nl_std_fonts = million_shades_web_safe_fonts();
			$nl_google_fonts = million_shades_google_fonts_array();
			$desc = $this->description;
			?>

			<label>
			<span class="customize-control-title">
			<?php echo esc_html( $this->label ); ?>
			</span>
			</label>

			<div class="fnf-font-select">

				<select <?php $this->link(); ?>>

					<option class="font-default" value="" <?php if ( ! $current_val ) echo 'selected="selected"'; ?>><?php esc_html_e( 'Default Font', 'million-shades' ); ?></option>

	
					<?php

					if ( $nl_std_fonts ) { ?>
						<optgroup class="font-standard" 
						label="<?php esc_html_e( 'Standard Font Family', 'million-shades' ); ?>">
				
						
					<?php
                    foreach ( $nl_std_fonts as $std_font_key => $std_font_val ){ 
					$std_font_val = esc_attr( $std_font_val ); ?>
                        <option value="<?php echo $std_font_val; ?>"  <?php selected( $std_font_val,$current_val,false ); ?>> <?php echo $std_font_key; ?> </option>;
                   <?php }
					?>
					
						</optgroup>

					<?php }
					
	

					
					if ( $nl_google_fonts ) { ?>
			<optgroup class="font-google" label="<?php esc_html_e( 'Google Font Family', 'million-shades' ); ?>">
				
				
							<?php
							
							foreach ( $nl_google_fonts as $google_font_key=>$google_font_val) {
								$google_font_val = esc_attr( $google_font_val ); ?>
								
								<option value="<?php echo $google_font_val; ?>" <?php selected( $google_font_val, $current_val ); ?>><?php echo $google_font_val; ?>
								</option>
							<?php } ?>
			</optgroup>

					<?php } ?>

				</select>

				<?php if($desc){ ?>
	            <span class="description customize-control-description">
	            	<?php echo wp_kses_post($this->description); ?>
	            </span>
	            <?php } ?>

			</div>

		<?php }
	}

}	
	
}

// this control taken from https://github.com/bueltge/WordPress-Theme-Customizer-Custom-Controls/blob/master/category_dropdown_custom_control.php
if ( class_exists( 'WP_Customize_Control' ) ) {
/**
 * A class to create a dropdown for all categories in your WordPress site
 */
 class Category_Dropdown_Custom_Control extends WP_Customize_Control
 {
    private $cats = false;
    public function __construct($manager, $id, $args = array(), $options = array())
    {
        $this->cats = get_categories($options);
        parent::__construct( $manager, $id, $args );
    }
    /**
     * Render the content of the category dropdown
     *
     * @return HTML
     */
    public function render_content()
       {
            if(!empty($this->cats))
            {
                ?>
                    <label>
                      <span class="customize-category-select-control"><?php echo esc_html( $this->label ); ?></span>
                      <select <?php $this->link(); ?>>
					  <option value=""><?php esc_html_e('All', 'million-shades'); ?></option>
                           <?php
                                foreach ( $this->cats as $cat )
                                {
                                    printf('<option value="%s" %s>%s</option>', $cat->term_id, selected($this->value(), $cat->term_id, false), $cat->name);
                                }
                           ?>
                      </select>
                    </label>
                <?php
            }
       }
 }
}