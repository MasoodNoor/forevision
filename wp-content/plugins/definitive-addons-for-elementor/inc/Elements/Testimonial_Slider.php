<?php
/**
 * Testimonial Slider widget class
 *

 */

namespace Definitive_Addons_Elementor\Elements;
use Elementor\Group_Control_Background;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Utils;
use \Elementor\Widget_Base;

defined( 'ABSPATH' ) || die();

class Testimonial_Slider extends Widget_Base {
	
    /**
     * Get widget title.
     
     */
    public function get_title() {
        return __( 'DA: Testimonial Slider', 'definitive-addons-for-elementor' );
    }

    /**
     
     * @return string Widget icon.
     */
	 public function get_name() {
		return 'dafe_testimonial_slider';
	}


    public function get_icon() {
        return 'far fa-clone';
    }

    public function get_keywords() {
        return [ 'testimonial', 'image', 'review','slide' ];
    }
	
	 public function get_categories() {
		return [ 'definitive-addons' ];
	}
	
	
	
	

	protected function _register_controls() {
		
        $this->start_controls_section(
            'section_testimonial_slider',
            [
                'label' => __( 'Testimonial Slider', 'definitive-addons-for-elementor' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

         $repeater = new Repeater();

        $repeater->add_control(
           'image',
            [
                'type' => Controls_Manager::MEDIA,
                'label' => __( 'Image', 'definitive-addons-for-elementor' ),
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
		
		

        $repeater->add_control(
       'name',
            [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' => __( 'Reviewer Name', 'definitive-addons-for-elementor' ),
                'default' => __( 'John Doe', 'definitive-addons-for-elementor' )
            ]
        );
		 $repeater->add_control(
       'organization',
            [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' => __( 'Reviewer Organizaiton', 'definitive-addons-for-elementor' ),
                'default' => __( 'Softfirm', 'definitive-addons-for-elementor' )
            ]
        );

        $repeater->add_control(
           'reviewer_text',
            [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'label' => __( 'Reviewer Text', 'definitive-addons-for-elementor' ),
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'definitive-addons-for-elementor' ),
            ]
        );
		
		$this->add_control(
           'slick_slides',
            [
                'show_label' => false,
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '<# print("Slide"); #>',
                'default' => [
                    [
                        'image' => [
                            'url' => Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'image' => [
                            'url' => Utils::get_placeholder_image_src(),
                        ],
                    ],
                    
                    
                ]
            ]
        );
		
		$this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'thumbnail',
                'separator' => 'before',
                'exclude' => [
                    'custom'
                ]
            ]
        );
		$this->end_controls_section();
		
		$this->start_controls_section(
           'section_slider_nav_settings',
            [
                'label' => __( 'Slider Navigation Settings', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
		
		 $this->add_control(
            'slidesToShow',
            [
                'label' => __( 'No of Slide per Page', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 3,
				'step' => 1,
                'default' => 2,
                'description' => __( 'Default:1', 'definitive-addons-for-elementor' ),
                'frontend_available' => true,
            ]
        );

        $this->add_control(
            'animation_speed',
            [
                'label' => __( 'Animation Speed', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::NUMBER,
                'min' => 150,
                'max' => 12000,
				'step' => 10,
                'default' => 300,
                'description' => __( 'Value in milliseconds. Default:300', 'definitive-addons-for-elementor' ),
                'frontend_available' => true,
            ]
        );

        $this->add_control(
            'autoplay',
            [
                'label' => __( 'Slider Autoplay?', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
                'label_on' => __( 'Yes', 'definitive-addons-for-elementor' ),
                'label_off' => __( 'No', 'definitive-addons-for-elementor' ),
				'return_value' => 'yes',
                'frontend_available' => true,
            ]
        );

        $this->add_control(
            'autoplay_speed',
            [
                'label' => __( 'Autoplay Speed', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::NUMBER,
				'default' => 3000,
                'min' => 200,
                'step' => 100,
                'max' => 12000,
			   'condition' => [
                    'autoplay' => 'yes'
                ],
				'description' => __( 'Value in milliseconds. Default:3000', 'definitive-addons-for-elementor' ),
               
                'frontend_available' => true,
            ]
        );

        $this->add_control(
            'loop',
            [
                'label' => __( 'Infinite Loop?', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __( 'Yes', 'definitive-addons-for-elementor' ),
                'label_off' => __( 'No', 'definitive-addons-for-elementor' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'frontend_available' => true,
            ]
        );

        $this->end_controls_section();

		

       $this->start_controls_section(
            'testimonial_section_style_entry',
            [
                'label' => __( 'Testimonial Item Style', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		
		$this->add_control(
			'testimonial_alignment',
			[
				'label' =>__( 'Container Style', 'definitive-addons-for-elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => true,
				'options' => [
					
					'left' => [
						'title' =>__( 'Left', 'definitive-addons-for-elementor' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' =>__( 'Center', 'definitive-addons-for-elementor' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' =>__( 'Right', 'definitive-addons-for-elementor' ),
						'icon' => 'fa fa-align-right',
					],
					'down' => [
						'title' =>__( 'Right', 'definitive-addons-for-elementor' ),
						'icon' => 'fa fa-align-justify',
					],
				],
				'default' => 'center',
				
			]
		);
        
	
		$this->add_control(
			'testimonial_bg_shadow_style',
			[
				'label' =>__( 'Background Shadow Style', 'definitive-addons-for-elementor' ),
				'type' => Controls_Manager::SELECT2,
				'label_block' => true,
				'options' => array(
					'none'  =>__( 'None', 'definitive-addons-for-elementor' ),
					'style1' =>__( 'Style1', 'definitive-addons-for-elementor' ),
					'style2'  =>__( 'Style2', 'definitive-addons-for-elementor' ),
					'style3'  =>__( 'Style3', 'definitive-addons-for-elementor' )),
				'default' => 'style3',
				
			]
		);
		 $this->end_controls_section();
   

        $this->start_controls_section(
            'testimonial_section_style_image',
            [
                'label' => __( 'Reviewer Image', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'selector' => '{{WRAPPER}} .reviewer-photo',
            ]
        );

        $this->add_responsive_control(
          'image_border_radius',
            [
                'label' => __( 'Border Radius', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ '%', 'px' ],
				
                'selectors' => [
                    '{{WRAPPER}} .reviewer-photo' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'reviewer_image_spacing',
            [
                'label' => __( 'Bottom Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
				'default' => [
					'size' => 15
				],
                'selectors' => [
                    '{{WRAPPER}}  .reviewer-photo' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        

        $this->start_controls_section(
           'section_style_title',
            [
                'label' => __( 'Reviewer Name', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_tag',
            [
                'label' => __( 'Title HTML Tag', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::CHOOSE,
                'separator' => 'before',
                'options' => [
                    'h1'  => [
                        'title' => __( 'H1', 'definitive-addons-for-elementor' ),
                        'icon' => 'eicon-editor-h1'
                    ],
                    'h2'  => [
                        'title' => __( 'H2', 'definitive-addons-for-elementor' ),
                        'icon' => 'eicon-editor-h2'
                    ],
                    'h3'  => [
                        'title' => __( 'H3', 'definitive-addons-for-elementor' ),
                        'icon' => 'eicon-editor-h3'
                    ],
                    'h4'  => [
                        'title' => __( 'H4', 'definitive-addons-for-elementor' ),
                        'icon' => 'eicon-editor-h4'
                    ],
                    'h5'  => [
                        'title' => __( 'H5', 'definitive-addons-for-elementor' ),
                        'icon' => 'eicon-editor-h5'
                    ],
                    'h6'  => [
                        'title' => __( 'H6', 'definitive-addons-for-elementor' ),
                        'icon' => 'eicon-editor-h6'
                    ]
                ],
                'default' => 'h4',
                'toggle' => false,
            ]
        );

        $this->add_responsive_control(
            'reviewer_name_spacing',
            [
                'label' => __( 'Bottom Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .name-company' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
           'reviewer_name_color',
            [
                'label' => __( 'Text Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .name-company' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'reviewer_font',
                'selector' => '{{WRAPPER}} .name-company',
                'scheme' => Scheme_Typography::TYPOGRAPHY_2,
            ]
        );
		
		$this->end_controls_section();

        $this->start_controls_section(
           'section_style_organization',
            [
                'label' => __( 'Reviewer Organizaiton', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		
        
        $this->add_responsive_control(
            'organization_spacing',
            [
                'label' => __( 'Left Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .name-company .company' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'organization_color',
            [
                'label' => __( 'Text Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .name-company .company' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'organization_font',
                'selector' => '{{WRAPPER}} .name-company .company',
                'scheme' => Scheme_Typography::TYPOGRAPHY_3,
            ]
        );

        $this->end_controls_section();
		
		$this->start_controls_section(
           'section_style_text',
            [
                'label' => __( 'Reviewer Text', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		
        
        $this->add_responsive_control(
            'text_spacing',
            [
                'label' => __( 'Text Bottom Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .speech' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'text_color',
            [
                'label' => __( 'Text Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .speech' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'text_font',
				
                'selector' => '{{WRAPPER}} .speech',
                'scheme' => Scheme_Typography::TYPOGRAPHY_3,
            ]
        );

        $this->end_controls_section();
		
		$this->start_controls_section(
           'section_style_quote',
            [
                'label' => __( 'Reviewer Quote', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		
        
        $this->add_responsive_control(
            'quote_left_spacing',
            [
                'label' => __( 'Quote Left Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
				'default' => [
					'size' => -25
				],
                'selectors' => [
                    '{{WRAPPER}} .speech .fa' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'quote_right_spacing',
            [
                'label' => __( 'Quote Right Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
				'default' => [
					'size' => 15
				],
                'selectors' => [
                    '{{WRAPPER}} .speech .fa' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'quote_color',
            [
                'label' => __( 'Quote Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .speech .fa' => 'color: {{VALUE}}',
                ],
            ]
        );

       $this->add_responsive_control(
            'quote_size',
            [
                'label' => __( 'Quote Size', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 300,
                    ],
                ],
				
                'selectors' => [
                    '{{WRAPPER}} .speech .fa' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
		
		
		$this->start_controls_section(
           '_section_style_content',
            [
                'label' => __( 'Testimonial Content', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'content_padding',
            [
                'label' => __( 'Content Padding', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .right-style' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'content_background',
                'selector' => '{{WRAPPER}} .right-style',
                'exclude' => [
                    'image'
                ]
            ]
        );
		
		$this->end_controls_section();
		
		$this->start_controls_section(
            'nav_section_style_start',
            [
                'label' => __( 'Navigation', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

       
        $this->add_control(
            'nav_color',
            [
                'label' => __( 'Arrow Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .slick-prev:after, {{WRAPPER}} .slick-next:after' => 'color: {{VALUE}};',
                ],
            ]
        );
		
		$this->add_control(
            'nav_hover_color',
            [
                'label' => __( 'Hover Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slick-prev:hover:after, {{WRAPPER}} .slick-next:hover:after' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'nav_bg_color',
            [
                'label' => __( 'Arrow Background Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
				'default' =>'#6EC1E4',
                'selectors' => [
                    '{{WRAPPER}} .slick-prev, {{WRAPPER}} .slick-next' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'nav_hover_bg_color',
            [
                'label' => __( 'Hover Background Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slick-prev:hover, {{WRAPPER}} .slick-next:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
        

        
    }

	protected function render( ) {
		
        $settings = $this->get_settings_for_display();
		$align = $this->get_settings_for_display('testimonial_alignment');
		$title_tag = $this->get_settings_for_display('title_tag');
		$shadow_style = $this->get_settings_for_display('testimonial_bg_shadow_style');
		$animation_speed = $this->get_settings_for_display('animation_speed');
		$autoplay_speed = $this->get_settings_for_display('autoplay_speed');
		$autoplay = $this->get_settings_for_display('autoplay');
		$loop = $this->get_settings_for_display('loop');
		$slidesToShow = $this->get_settings_for_display('slidesToShow');
	
		if ($loop == 'yes' ){$loop = true;}
		if ($loop == 'no' ){$loop = false;}
		if ($autoplay == 'yes' ){$autoplay = true;}
		if ($autoplay == 'no' ){$autoplay = false;}
		
		$avatar_styles = '';
		 $right_styles = '';
		 $title_styles = '';
		 
		if($align == "left"){
			
            $avatar_styles .= 'float:left;';
			$right_styles .= 'text-align:left;';
			$avatar_styles .= 'position:relative; ';
			$right_styles  .= 'position:relative; ';
			$avatar_styles .= 'margin-right:15px; ';
			$avatar_styles .= 'margin-left:50px; ';
			
			$right_styles  .= 'overflow:hidden; ';
			$right_styles  .= 'padding-left:5%; ';
			$right_styles  .= 'padding-right:10%; ';
			
        }
		if($align == "right"){
			
            $avatar_styles .= 'float:right; ';
			$right_styles .= 'text-align:right;';
			$avatar_styles .= 'position:relative; ';
			$right_styles  .= 'position:relative; ';
			$right_styles  .= 'padding-left:10%; ';
			$right_styles  .= 'padding-right:5%; ';
			$avatar_styles .= 'margin-left:15px; ';
			$avatar_styles .= 'margin-right:50px; ';
			
			$right_styles  .= 'overflow:hidden; ';
			
        }
		
		if($align == "center"){
			 $avatar_styles .= 'float:none;margin-left:auto;margin-right:auto;';
          $avatar_styles .= 'text-align:center;';
		 
		  $right_styles .= 'text-align:center;';
		 
			$right_styles  .= 'padding-left:10%; ';
			$right_styles  .= 'padding-right:10%; ';
			
        }
		
		if($align == "down"){
           $avatar_styles .= 'float:none;margin-left:auto;margin-right:auto;';
		  $avatar_styles .= 'text-align:center;';
		  $avatar_styles .= 'margin-top: 35px;';
		  $right_styles .= 'text-align:center;';
		 
		  $right_styles .= 'padding-left:10%;';
		  $right_styles .= 'padding-right:10%;';
		  
	
			
        }
	
	$container_styles = "position:relative;";
	
	$container_styles .= "overflow:hidden;";
	$id = uniqid();
	
		?>
		
	<div class="widget-testimonial-slide" style="<?php echo esc_attr($container_styles) ?>">
		
		
			<div id="<?php echo esc_attr($id); ?>" class="nl-testimonial-entry" data-animatespeed="<?php echo esc_attr($animation_speed) ?>" data-autospeed="<?php echo esc_attr($autoplay_speed) ?>" data-autoplay="<?php echo esc_attr($autoplay) ?>" data-loop="<?php echo esc_attr($loop) ?>" data-showpage="<?php echo esc_attr($slidesToShow) ?>">
			<?php foreach ( $settings['slick_slides'] as $slide ) {
				
                $slider_image = wp_get_attachment_image_url( $slide['image']['id'], $settings['thumbnail_size'] );
                if ( empty( $slider_image) ) {
                    $slider_image = $slide['image']['url'];
                }
                ?>
				<div class="nl-testimonial-wrap <?php echo esc_attr($shadow_style); ?>" style="<?php echo esc_attr( $testimonial_style );  ?>">
           
				<?php if (( $align  === 'left') || ($align  === 'right') || ($align  === 'center')){ ?>		  
				<div class="left-style"> 
					<div class="avatar">
             
                     <?php if ($slider_image) { ?>
                     
					 <img class="reviewer-photo"  alt="Author Photo" style="<?php echo esc_attr($avatar_styles) ?>"
					 src="<?php echo esc_url($slider_image) ?>" />
					
					<?php }  ?>
                    </div>
                                                           
                </div> 
				<?php }  ?>
				<div class="right-style" style="<?php echo esc_attr($right_styles); ?>">
				
					<<?php echo esc_attr($title_tag); ?> class="name-company"><?php echo esc_html($slide['name']); ?>
					
					<?php if($slide['organization']){ ?>
					<?php $coma =', '; ?>
					<?php echo esc_attr($coma); ?>
					<span class="company"><?php echo esc_html($slide['organization']);?></span><?php } ?>
					
					</<?php echo esc_attr($title_tag); ?>>
					
					
							
					<div class="author-txt">
					
					<blockquote class="speech"><i class="fa fa-quote-left"></i><?php echo esc_html($slide['reviewer_text']);?></blockquote>  
			
					</div>
				</div>
                     
				<?php if ( $align  === 'down' ){ ?>		  
				<div class="left-style"> 
					<div class="avatar"  style="<?php echo esc_attr($avatar_styles) ?>">
                    
					 <img class="reviewer-photo" alt="Author Photo"
					src="<?php echo esc_url($slider_image) ?>" />
					
                    </div>
                                                           
                </div> 
				<?php }  ?>
                 </div>    
	<?php }  ?>					 
               </div> <!--  end single post -->
		
		</div> 
	

        <?php
		
		
    }
	
}
