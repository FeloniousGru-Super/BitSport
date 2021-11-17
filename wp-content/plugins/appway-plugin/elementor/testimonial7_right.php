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
class Testimonial7_Right extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'appway_testimonial7_right';
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
		return esc_html__( 'Testimonial 7 Right', 'appway' );
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
			'testimonial7_right',
			[
				'label' => esc_html__( 'Testimonial 7 Right', 'appway' ),
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
			
		// New Tab#2

		$this->start_controls_section(
					'content_section1',
					[
						'label' => __( 'Testimonial Block', 'rashid' ),
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
								'name' => 'block_text',
								'label' => esc_html__('Text', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							[
							  'name' => 'block_image',
							  'label' => __( 'Image', 'rashid' ),
							  'type' => Controls_Manager::MEDIA,
							  'default' => ['url' => Utils::get_placeholder_image_src(),],
							],
							[
								'name' => 'block_imgtitle',
								'label' => esc_html__('Image Text', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							[
								'name' => 'block_title',
								'label' => esc_html__('Title', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							[
								'name' => 'block_subtitle',
								'label' => esc_html__('Subtitle', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							[
								'name' => 'block_rating',
								'label'   => esc_html__( 'Select Rating', 'rashid' ),
								'type'    => Controls_Manager::SELECT,
								'default' => '1',
								'options' => array(
									'rat1'   => esc_html__( 'Rating One', 'rashid' ),
									'rat2'   => esc_html__( 'Rating Two', 'rashid' ),
									'rat3'   => esc_html__( 'Rating Three', 'rashid' ),
									'rat4'   => esc_html__( 'Rating Four', 'rashid' ),
									'rat5'   => esc_html__( 'Rating Five', 'rashid' ),
								),
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
			
    <!-- testimonial-style-seven -->
    <section class="testimonial-style-seven <?php echo esc_attr($settings['sec_class']);?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 carousel-column">
                    <div class="testimonial-inner">
                        <div class="sec-title"><h2><?php echo $settings['title'];?></h2></div>
                        <div class="testimonial-carousel-2 owl-carousel owl-theme">
						
							<?php foreach($settings['repeat'] as $item):?>
						
                            <div class="testimonial-content">
                                <div class="inner-box">
                                    <div class="text"><?php echo wp_kses($item['block_text'], $allowed_tags);?></div>
                                    <div class="author-info">
                                        
										
										<?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
										<figure class="image-box"><img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_imgtitle'], $allowed_tags);?>"></figure>
										<?php endif; ?>
										
                                        <h5 class="name"><?php echo wp_kses($item['block_title'], $allowed_tags);?></h5>
                                        <span class="designation"><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></span>
                                        <ul class="rating clearfix">
                                             <?php  if ( 'rat1' === $item['block_rating'] ) : ?>      
												<li><i class="fas fa-star"></i></li>
											<?php endif ;?>	         
											<?php  if ( 'rat2' === $item['block_rating'] ) : ?>      
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											<?php endif ;?>
											<?php  if ( 'rat3' === $item['block_rating'] ) : ?>      
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											<?php endif ;?>	   
											<?php  if ( 'rat4' === $item['block_rating'] ) : ?>      
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											<?php endif ;?>	
											<?php  if ( 'rat5' === $item['block_rating'] ) : ?>      
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											<?php endif ;?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
							
							<?php endforeach; ?>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-seven end -->

		<?php 
	}

}

