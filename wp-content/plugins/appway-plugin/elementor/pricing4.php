<?php

namespace APPWAYPLUGIN\Element;

use Elementor\Controls_Manager;
use Elementor\Controls_Stack;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Repeater;
use Elementor\Widget_Base;
use Elementor\Utils;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Plugin;

/**
 * Elementor button widget.
 * Elementor widget that displays a button with the ability to control every
 * aspect of the button design.
 *
 * @since 1.0.0
 */
class Pricing4 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'appway_pricing4';
	}

	/**
	 * Get widget title.
	 * Retrieve button widget title.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Pricing 4', 'appway' );
	}

	/**
	 * Get widget icon.
	 * Retrieve button widget icon.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'fa fa-briefcase';
	}

	/**
	 * Get widget categories.
	 * Retrieve the list of categories the button widget belongs to.
	 * Used to determine where to display the widget in the editor.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'appway' ];
	}
	
	/**
	 * Register button widget controls.
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'pricing4',
			[
				'label' => esc_html__( 'Pricing 4', 'appway' ),
			]
		);
		
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'rashid' ),
			]
		);
		
		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your title', 'rashid' ),
			]
		);	

		
		$this->end_controls_section();
		
		// New Tab#1

		$this->start_controls_section(
					'content_section',
					[
						'label' => __( 'Pricing', 'rashid' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
		$this->add_control(
              'repeat', 
			  	[
            		'type' => Controls_Manager::REPEATER,
            		'seperator' => 'before',
            		'default' => 
						[
                			['block_title' => esc_html__('Projects Completed', 'diaco')],
            			],
            		'fields' => 
						[
							[
								'name' => 'block_title',
								'label' => esc_html__('Title', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							[
                    			'name' => 'currency',
                    			'label' => esc_html__('Currency Symbols', 'diaco'),
                    			'type' => Controls_Manager::TEXT,
                    			'default' => esc_html__('', 'diaco')
                			],
							[
								'name' => 'price',
								'label' => esc_html__('Price', 'diaco'),
								'type' => Controls_Manager::TEXT,
								'default' => esc_html__('', 'diaco')
							],
							[
								'name' => 'block_text',
								'label' => esc_html__('Text', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							[
								'name' => 'block_feature_str',
								'label'       => __( 'Features List', 'rashid' ),
								'type'        => Controls_Manager::TEXTAREA,
								'dynamic'     => [
									'active' => true,
								],
								'placeholder' => __( 'Enter your Features List', 'rashid' ),
								'default'     => __( '', 'rashid' ),
							],
							[
								'name' => 'block_button',
								'label'       => __( 'Button', 'rashid' ),
								'type'        => Controls_Manager::TEXT,
								'dynamic'     => [
									'active' => true,
								],
								'placeholder' => __( 'Enter your Button Title', 'rashid' ),
							],
							[
							  'name' => 'block_btnlink',
							  'label' => __( 'Button Url', 'rashid' ),
							  'type' => Controls_Manager::URL,
							  'placeholder' => __( 'https://your-link.com', 'rashid' ),
							  'show_external' => true,
							  'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
							  ],
							],
            			],
            	    'title_field' => '{{block_title}}',
                 ]
        );
				
				
		$this->end_controls_section();
		
		
		// New Tab#2

		$this->start_controls_section(
					'content_section1',
					[
						'label' => __( 'Title List', 'rashid' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				
		$this->add_control(
			'title1',
			[
				'label'       => __( 'Title', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your title', 'rashid' ),
			]
		);		
		
		$this->add_control(
              'repeat1', 
			  	[
            		'type' => Controls_Manager::REPEATER,
            		'seperator' => 'before',
            		'default' => 
						[
                			['block_title' => esc_html__('Projects Completed', 'diaco')],
            			],
            		'fields' => 
						[
							[
								'name' => 'block_title',
								'label' => esc_html__('Title', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
            			],
            	    'title_field' => '{{block_title}}',
                 ]
        );
				
				
		$this->end_controls_section();
		
	
	}

	/**
	 * Render button widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$allowed_tags = wp_kses_allowed_html('post');
		?>

          
    <!-- pricing-style-four -->
    <section class="pricing-style-four <?php echo $settings['sec_class'];?>">
        <div class="container">
            <div class="sec-title center"><h2><?php echo $settings['title'];?></h2></div>
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 pricing-column">
                    <div class="pricing-inner clearfix">
                       
                       <?php foreach($settings['repeat'] as $item):?>
                       
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3 class="title"><?php echo wp_kses($item['block_title'], $allowed_tags);?></h3>
                                <h1 class="price"><span><?php echo wp_kses($item['currency'], $allowed_tags);?></span><?php echo wp_kses($item['price'], $allowed_tags);?></h1>
                                <div class="text"><?php echo wp_kses($item['block_text'], $allowed_tags);?></div>
                            </div>
                            <div class="table-content">
                                <ul class="clearfix">
                                    <?php $fearures = explode("\n", ($item['block_feature_str']));?>
									<?php foreach($fearures as $feature):?>
									<li><?php echo wp_kses($feature, true); ?>
									</li>
									<?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="table-footer"><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><?php echo wp_kses($item['block_button'], $allowed_tags);?></a></div>
                        </div>
                        
                        <?php endforeach; ?>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 feature-column">
                    <div class="feature-inner">
                        <h2><?php echo $settings['title1'];?></h2>
                        <ul class="list clearfix">
                           
                            <?php foreach($settings['repeat1'] as $item):?>
                           
                            <li><?php echo wp_kses($item['block_title'], $allowed_tags);?></li>
                            
                            <?php endforeach; ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-style-four end -->
            
		<?php 
	}

}
