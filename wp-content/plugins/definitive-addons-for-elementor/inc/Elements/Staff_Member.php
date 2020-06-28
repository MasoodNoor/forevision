<?php
/**
 * Staff Member widget class
 *
 * @package definitive-addon-for-elementor
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

class Staff_Member extends Widget_Base {
	
    /**
     * Get widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'DA: Staff Member', 'definitive-addons-for-elementor' );
    }

    /**
     * Get widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
	 public function get_name() {
		return 'dafe_staff_member';
	}


    public function get_icon() {
         return 'eicon-lock-user';
    }

    public function get_keywords() {
        return [ 'team', 'staff', 'member' ];
    }
	
	 public function get_categories() {
		return [ 'definitive-addons' ];
	}
	
	protected static function fontawesome_social_list() {
		return $fa_icons_array = array(
            "default"                      => "default",
            'fa-500px'              =>  '500px',
            "fa-adn"                => "ADN",
            'fa-amazon'             => 'Amazon',
            "fa-android"            => "Android",
            "fa-apple"              => "Apple",
            "fa-behance"            => "Behance",
            "fa-behance-square"     => "Behance Square",
            "fa-bitbucket"          => "Bitbucket",
            "fa-bitbucket-sign"     => "Bitbucket-Sign",
            "fa-bitcoin"            => "Bitcoin",
            "fa-btc"                => "BTC",
            "fa-css3"               => "CSS3",
            "fa-dribbble"           => "Dribbble",
            "fa-dropbox"            => "Dropbox",
            "fa-facebook"           => "Facebook",
            "fa-facebook-sign"      => "Facebook-Sign",
            "fa-flickr"             => "Flickr",
            "fa-foursquare"         => "Foursquare",
            "fa-github"             => "GitHub",
            "fa-github-alt"         => "GitHub-Alt",
            "fa-github-sign"        => "GitHub-Sign",
            "fa-gittip"             => "Gittip",
            "fa-google-plus"        => "Google Plus",
            "fa-google-plus-sign"   => "Google Plus-Sign",
            "fa-html5"              => "HTML5",
            "fa-instagram"          => "Instagram",
            "fa-linkedin"           => "LinkedIn",
            "fa-linkedin-sign"      => "LinkedIn-Sign",
            "fa-linux"              => "Linux",
            "fa-envelope"           => "Mail",
            "fa-envelope-o"         => "Mail Alt",
            "fa-envelope-square"    => "Mail Square",
            "fa-maxcdn"             => "MaxCDN",
            "fa-paypal"             => "Paypal",
            "fa-pinterest"          => "Pinterest",
            "fa-pinterest-sign"     => "Pinterest-Sign",
            "fa-renren"             => "Renren",
            "fa-skype"              => "Skype",
            "fa-stackexchange"      => "StackExchange",
            'fa-tripadvisor'        => 'Trip Advisor',
            "fa-trello"             => "Trello",
            "fa-tumblr"             => "Tumblr",
            "fa-tumblr-sign"        => "Tumblr-Sign",
            "fa-twitter"            => "Twitter",
            "fa-twitter-sign"       => "Twitter-Sign",
            'fa-vimeo'              => 'Vimeo',
            'fa-vimeo-square'       => 'Vimeo Square',
            'fa-vine'               => 'Vine',
            "fa-vk"                 => "VK",
            "fa-weibo"              => "Weibo",
            'fa-wikipedia-w'        => 'Wikipedia',
            "fa-windows"            => "Windows",
            'fa-wordpress'          => 'Wordpress',
            "fa-xing"               => "Xing",
            "fa-xing-sign"          => "Xing-Sign",
            "fa-youtube"            => "YouTube",
            "fa-youtube-play"       => "YouTube Play",
            "fa-youtube-sign"       => "YouTube-Sign"
        );
	}
	


    
	protected function _register_controls() {
		
        $this->start_controls_section(
            'dafe_section_staff_member',
            [
                'label' => __( 'Staff Member', 'definitive-addons-for-elementor' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

       

        $this->add_control(
           'image',
            [
                'type' => Controls_Manager::MEDIA,
                'label' => __( 'Image', 'definitive-addons-for-elementor' ),
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
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

        $this->add_control(
       'staff_name',
            [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' => __( 'Name', 'definitive-addons-for-elementor' ),
				'default' =>__( 'John Doe', 'definitive-addons-for-elementor' ),
                
			]
        );

        $this->add_control(
           'staff_position',
            [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
               'label' => __( 'Job Position', 'definitive-addons-for-elementor' ),
				'default' =>__( 'Developer', 'definitive-addons-for-elementor' ),
                
			]
        );
		
		
        $this->add_control(
           'staff_text',
            [
                'type' => Controls_Manager::TEXTAREA,
                'label' => __( 'About Staff Member', 'definitive-addons-for-elementor' ),
                'default' =>__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'definitive-addons-for-elementor' ),
                
		   ]
        );
		$this->end_controls_section();
		$this->start_controls_section(
            '_section_social',
            [
                'label' => __( 'Social Icons', 'definitive-addons-for-elementor' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
		
        $repeater = new Repeater();

        $repeater->add_control(
            'icon_name',
            [
                'label' => __( 'Social Icon', 'definitive-addons-for-elementor' ),
				'label_block' => true,
                'type' => Controls_Manager::SELECT2,
                
                'options' => self::fontawesome_social_list(),
            ]
        );

        $repeater->add_control(
            'icon_link', [
                'label' => __( 'Social Icon Link', 'definitive-addons-for-elementor' ),
              
				'type' => Controls_Manager::URL,
                'label_block' => true,
                'autocomplete' => false,
                'show_external' => false,
                
                'dynamic' => [
                    'active' => true,
                ]
            ]
        );
		
		$this->add_control(
            'social_icons',
            [
                'show_label' => false,
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ icon_name }}}',
                'default' => [
                    [
                        'icon_link' => ['url' => 'https://facebook.com/'],
                        'icon_name' => 'facebook'
                    ],
                    [
                        'icon_link' => ['url' => 'https://twitter.com/'],
                        'icon_name' => 'twitter'
                    ],
                    [
                        'icon_link' => ['url' => 'https://linkedin.com/'],
                        'icon_name' => 'linkedin'
                    ]
                ],
            ]
        );

       
        $this->end_controls_section();

    // style
	 
		$this->start_controls_section(
            'staff_section_style_entry',
            [
                'label' => __( 'Staff Member Item Style', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_control(
			'staff_member_alignment',
			[
				'label' =>__( 'Set Alignment', 'definitive-addons-for-elementor' ),
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
				],
				'default' => 'left',
				
			]
		);

		$this->add_control(
			'staff_bg_shadow_style',
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
            'staff_section_style_image',
            [
                'label' => __( 'Staff Member Image', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		
		$this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'selector' => '{{WRAPPER}} .staff-member-img',
            ]
        );

        

        $this->add_responsive_control(
          'image_border_radius',
            [
                'label' => __( 'Image Border Radius', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .staff-member-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'image_spacing',
            [
                'label' => __( 'Image Bottom Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
				'default' => [
					'size' => 15
				],
                'selectors' => [
                    '{{WRAPPER}} .staff-member-img' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
	
        $this->end_controls_section();

        
		
		$this->start_controls_section(
           'staff_section_style_name',
            [
                'label' => __( 'Staff Member Name', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
       

        $this->add_responsive_control(
            'name_spacing',
            [
                'label' => __( 'Name Bottom Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
				'default' => [
					'size' => 10
				],
                'selectors' => [
                    '{{WRAPPER}} .staff-member-name' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
           'name_color',
            [
                'label' => __( 'Name Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .staff-member-name' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'name_font',
                'selector' => '{{WRAPPER}} .staff-member-name',
                'scheme' => Scheme_Typography::TYPOGRAPHY_2,
            ]
        );
		$this->end_controls_section();
		
		$this->start_controls_section(
           'job_section_style_position',
            [
                'label' => __( 'Staff Member Job Position', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'job_position_spacing',
            [
                'label' => __( 'Job Position Bottom Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
				'default' => [
					'size' => 15
				],
                'selectors' => [
                    '{{WRAPPER}} .staff-member-job-position' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'job_position_color',
            [
                'label' => __( 'Text Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .staff-member-job-position' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'job_position_font',
                'selector' => '{{WRAPPER}} .staff-member-job-position',
                'scheme' => Scheme_Typography::TYPOGRAPHY_3,
            ]
        );
		
		

        $this->end_controls_section();
		
		$this->start_controls_section(
           'staff_section_style_text',
            [
                'label' => __( 'Staff Member Text', 'definitive-addons-for-elementor' ),
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
                    '{{WRAPPER}} .staff-member-Text' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
           'text_color',
            [
                'label' => __( 'Text Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .staff-member-text' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'text_fonts',
                'selector' => '{{WRAPPER}} .staff-member-name',
                'scheme' => Scheme_Typography::TYPOGRAPHY_2,
            ]
        );
		$this->end_controls_section();
		
		$this->start_controls_section(
            'section_style_icon',
            [
                'label' => __( 'Social Icon', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		
		$this->add_responsive_control(
            'icon_size',
            [
                'label' => __( 'Size', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 300,
                    ],
                ],
				'default' => [
					'size' => 16
				],
                'selectors' => [
                    '{{WRAPPER}} .icon-container' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'icon_height',
            [
                'label' => __( 'Icon Height', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
				'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 300,
                    ],
                ],
				'default' => [
					'size' => 35
				],		

                'selectors' => [
                    '{{WRAPPER}} .icon-container' => 'height: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .icon-container' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
		
			$this->add_responsive_control(
            'icon_width',
            [
                'label' => __( 'Icon Width', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 300,
                    ],
                ],
				'default' => [
					'size' => 35
				],
                'selectors' => [
                    '{{WRAPPER}} .icon-container' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
		
		
		$this->add_control(
           'icon_color',
            [
                'label' => __( 'Icon Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
				'default' => '#6EC1E4',
                'selectors' => [
                    '{{WRAPPER}} .icon-container .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
		
		$this->add_control(
           'icon_hover_color',
            [
                'label' => __( 'Icon Hover Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon-container:hover .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
		
		$this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_background',
                'selector' => '{{WRAPPER}} .icon-container',
                'exclude' => [
                    'image'
                ]
            ]
        );
		
		$this->add_control(
           'icon_hover_bg_color',
            [
                'label' => __( 'Hover Background Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon-container:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
		
		$this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'icon_border',
                'selector' => '{{WRAPPER}} .icon-container',
            ]
        );

       

        $this->add_responsive_control(
          'icon_border_radius',
            [
                'label' => __( 'Icon Border Radius', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .icon-container' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'icon_right_spacing',
            [
                'label' => __( 'Icon Right Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .icon-container' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
		
		
		$this->add_responsive_control(
            'icon_bottom_spacing',
            [
                'label' => __( 'Icon Bottom Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
				'default' => [
					'size' => 15
				],
                'selectors' => [
                    '{{WRAPPER}} .icon-container' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
		
		

        $this->end_controls_section();

		
		$this->start_controls_section(
           '_section_style_content',
            [
                'label' => __( 'Staff Member Content', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'content_padding',
            [
                'label' => __( 'Content Padding', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
				'default'=>['top' => '','right' => '10','bottom' => '','left' => '10','isLinked' => 'true',],
                'selectors' => [
                    '{{WRAPPER}} .staff-member-content,{{WRAPPER}} .social-icon-profile' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'content_background',
                'selector' => '{{WRAPPER}} .staff-member-content',
                'exclude' => [
                    'image'
                ]
            ]
        );
		$this->end_controls_section();
		
		
    }

	protected function render( ) {
        $settings = $this->get_settings_for_display();
		$shadow_style = $this->get_settings_for_display('staff_bg_shadow_style');
		
		$staff_member_alignment = $this->get_settings_for_display('staff_member_alignment');
		$container_styles = 'text-align:'.$staff_member_alignment.';';
		
        ?>

       

            <?php 
                $image = wp_get_attachment_image_url( $settings['image']['id'], $settings['thumbnail_size'] );
                if ( ! $image ) {
                    $image = $settings['image']['url'];
                }
                ?>

               
                    <div class="staff-member <?php echo esc_attr($shadow_style); ?>" style="<?php echo esc_attr($container_styles); ?>">
                        <?php if ( $image ) : ?>
                            <img class="staff-member-img" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $settings['staff_name'] ); ?>">
                        <?php endif; ?>

                          <div class="staff-member-content">
                                <?php if ( $settings['staff_name'] ) : ?>
                                    <h3 class="staff-member-name"><?php echo esc_html( $settings['staff_name'] ); ?></h3>
                                <?php endif; ?>
                                <?php if ( $settings['staff_position'] ) : ?>
                                    <h6 class="staff-member-job-position"><?php echo esc_html( $settings['staff_position'] ); ?></h6>
                                <?php endif; ?>
								<?php if ( $settings['staff_text'] ) : ?>
                                    <p class="staff-member-text" style="<?php echo esc_attr($container_styles); ?>"><?php echo esc_html( $settings['staff_text'] ); ?></p>
                                <?php endif; ?>
                            </div>
                      
						<div class="social-icon-profile">
						<?php foreach ( $settings['social_icons'] as $social_icon ) :  ?>
						<div class="icon-container" style="text-align:center;display: inline-block;">
							<a href="<?php echo esc_url($social_icon['icon_link']['url']); ?>">
							<i class="fa <?php echo esc_attr($social_icon['icon_name']); ?> icon"></i></a>
						</div>
						<?php endforeach; ?>
						 </div>
                    </div>
        
		
	

        <?php
    }
}
