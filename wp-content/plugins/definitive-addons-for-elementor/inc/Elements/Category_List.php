<?php
/**
 * Category List widget class
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

class Category_List extends Widget_Base {
	
    /**
     * Get widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'DA: Category List', 'definitive-addons-for-elementor' );
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
		return 'dafe_category_list';
	}


    public function get_icon() {
         return 'far fa-list-alt';
    }

    public function get_keywords() {
        return [ 'category', 'list', 'term','product','post' ];
    }
	
	 public function get_categories() {
		return [ 'definitive-addons' ];
	}
	
	protected function _register_controls() {
		
        $this->start_controls_section(
            'dafe_section_category_list',
            [
                'label' => __( 'Category List', 'definitive-addons-for-elementor' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

       
		
        $repeater = new Repeater();
		
		$repeater->add_control(
			'cat_icon',
			[
				'label'   => esc_html__( 'Category Icon', 'definitive-addons-for-elementor' ),
				'type'    => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa fa-gears',
					'library' => 'fa-solid',
				]
				
			]
		);
		$repeater->add_control(
			'cat_type',
			[
				'label' => __( 'Category Type', 'definitive-addons-for-elementor' ),
				'type' =>Controls_Manager::SELECT,
				'default' => 'post',
				
				'options' => [
					'post' => __( 'Post', 'definitive-addons-for-elementor' ),
					'product' => __( 'Product', 'definitive-addons-for-elementor' ),
					
				],
			]
		);
		
		$repeater->add_control(
            'cat_selection',
            [
                'label' => __( 'Select Post Category', 'definitive-addons-for-elementor' ),
				'label_block' => true,
                'type' => Controls_Manager::SELECT2,
                'condition' => [
                        'cat_type' => 'post',
                ],
                'options' =>Reuse::dafe_post_categories(),
            ]
        );
		
        $repeater->add_control(
            'pcat_selection',
            [
                'label' => __( 'Select Product Category', 'definitive-addons-for-elementor' ),
				'label_block' => true,
                'type' => Controls_Manager::SELECT2,
                'condition' => [
                        'cat_type' => 'product',
                ],
                'options' =>Reuse::dafe_product_categories_lists(),
            ]
        );

        
		
		$this->add_control(
            'cat_repeaters',
            [
                'show_label' => false,
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => 'Category List',
                
            ]
        );

       
        $this->end_controls_section();

    // style
	
		$this->start_controls_section(
           'cat_section_style_link',
            [
                'label' => __( 'Category Link', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
       

        $this->add_responsive_control(
            'category_spacing',
            [
                'label' => __( 'Item Bottom Spacing', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
				'default' => [
					'size' => 10
				],
                'selectors' => [
                    '{{WRAPPER}} .cat-item' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
           'link_color',
            [
                'label' => __( 'Category Link Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cat-name' => 'color: {{VALUE}}',
                ],
            ]
        );
		$this->add_control(
           'link_hover_color',
            [
                'label' => __( 'Category Link Hover Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cat-name:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'link_font',
                'selector' => '{{WRAPPER}} .cat-name',
                'scheme' => Scheme_Typography::TYPOGRAPHY_2,
            ]
        );
		$this->end_controls_section();
	
		
		$this->start_controls_section(
            'section_style_icon',
            [
                'label' => __( 'Category Icon', 'definitive-addons-for-elementor' ),
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
                    '{{WRAPPER}} .cat-item .icon' => 'font-size: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .cat-item .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
		
		$this->add_control(
           'icon_hover_color',
            [
                'label' => __( 'Icon Hover Color', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .cat-item .icon:hover' => 'color: {{VALUE}}',
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
                    '{{WRAPPER}} .cat-item .icon' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
		
		
        $this->end_controls_section();

		
		$this->start_controls_section(
           'section_style_inner_content',
            [
                'label' => __( 'Category Inner Container', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'inner_padding',
            [
                'label' => __( 'Inner Container Padding', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
				'default'=>['top' => '','right' => '10','bottom' => '','left' => '10','isLinked' => 'true',],
                'selectors' => [
                    '{{WRAPPER}} .category_repeaters' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'inner_background',
                'selector' => '{{WRAPPER}} .category_repeaters',
                'exclude' => [
                    'image'
                ]
            ]
        );
		$this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'inner_border',
                'selector' => '{{WRAPPER}} .category_repeaters',
            ]
        );

        $this->add_responsive_control(
          'inner_border_radius',
            [
                'label' => __( 'Inner Container Border Radius', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .category_repeaters' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
                ],
            ]
        );
		$this->end_controls_section();
		
		
		$this->start_controls_section(
           'section_style_outer_container',
            [
                'label' => __( 'Category Container', 'definitive-addons-for-elementor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'container_padding',
            [
                'label' => __( 'Container Padding', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
				'default'=>['top' => '','right' => '10','bottom' => '','left' => '10','isLinked' => 'true',],
                'selectors' => [
                    '{{WRAPPER}} .category_list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'container_background',
                'selector' => '{{WRAPPER}} .category_list',
                'exclude' => [
                    'image'
                ]
            ]
        );
		$this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'container_border',
                'selector' => '{{WRAPPER}} .category_list',
            ]
        );

        $this->add_responsive_control(
          'container_border_radius',
            [
                'label' => __( 'Container Border Radius', 'definitive-addons-for-elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .category_list' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
                ],
            ]
        );
		$this->end_controls_section();
		
		
    }

	protected function render( ) {
        $settings = $this->get_settings_for_display();
		
                ?>
                    <div class="category_list">
           
						<div class="category_repeaters">
						
						<?php foreach ( $settings['cat_repeaters'] as $cat_icon ) :  ?>
						<div class="cat-item">
							<i class="<?php echo esc_attr($cat_icon['cat_icon']['value']); ?> icon"></i>
						<?php
						$cat_link ='';
						
						$cats_name ='';
						if ($cat_icon['cat_type'] == 'post'){
						
						if (!empty($cat_icon['cat_selection'])){
						$cat_link = get_category_link( $cat_icon['cat_selection']);
						$cat_name = get_term($cat_icon['cat_selection']);
						if(!empty($cat_name)){
						$cats_name = $cat_name->name;
						}
						}
						}
						
						if ($cat_icon['cat_type'] == 'product'){
							if (!empty($cat_icon['pcat_selection'])){
						$cat_link = get_category_link( $cat_icon['pcat_selection']);
						$cat_name = get_term($cat_icon['pcat_selection']);
						if (!empty($cat_name)){
						$cats_name = $cat_name->name;
						}
							}
						}
						
						?>
						<?php if ( $cat_icon['cat_selection'] || $cat_icon['pcat_selection']) : ?>
						
						<a href="<?php echo esc_url($cat_link); ?>">
                                    <span class="cat-name"><?php echo esc_html( $cats_name ); ?></span>
                        </a>        
								<?php endif; ?>
						</div>		
						<?php endforeach; ?>
						
						 </div>
                    </div>
        
        <?php
    }
}
