<?php
/**
 * Elementor Widgets Loader
 *
 * @package           FA-MC
 * @author            Farhan Ahmed
 * @copyright         2021 F-Ahmed
 * @license           GPL-2.0-or-later
 */

class fa_Material_Cards extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Material Cards widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'famc';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Material Cards widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Material Cards', 'fa-material-cards' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Material Cards widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'fab fa-address-card';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Material Cards widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'basic' ];
	}

	/**
	 * Register Material Cards widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'fa-material-cards' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'btn_icon',
			[
				'label' => __( 'Button Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-bars',
					'library' => 'solid',
				],
			]
		);
        $this->add_control(
			'btn_icon_clicked',
			[
				'label' => __( 'Button Icon (Clicked)', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-times',
					'library' => 'solid',
				],
			]
		);

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
			'image',
			[
				'label' => __( 'Choose Image', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$repeater->add_control(
			'card_title',
			[
				'label' => __( 'Title', 'fa-material-cards' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'John Doe.', 'fa-material-cards' ),
				'placeholder' => __( 'Type your title here', 'fa-material-cards' ),
			]
		);
        $repeater->add_control(
			'card_subtitle',
			[
				'label' => __( 'Sub Title', 'fa-material-cards' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Web Designer', 'fa-material-cards' ),
				'placeholder' => __( 'Type sub title here.', 'fa-material-cards' ),
			]
		);
        $repeater->add_control(
			'card_description',
			[
				'label' => __( 'Description', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => __( 'He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...', ' fa-mc' ),
				'placeholder' => __( 'Type your description here', ' fa-mc' ),
			]
		);
        $repeater->add_control(
			'card_color',
			[
				'label' => __( 'Card Color', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'Red',
				'options' => [
					'Red'  => __( 'Red', ' fa-mc' ),
					'Pink' => __( 'Pink', ' fa-mc' ),
					'Purple' => __( 'Purple', ' fa-mc' ),
					'Deep-Purple' => __( 'Deep-Purple', ' fa-mc' ),
					'Indigo' => __( 'Indigo', ' fa-mc' ),
                    'Blue'  => __( 'Blue', ' fa-mc' ),
					'Light-Blue' => __( 'Light-Blue', ' fa-mc' ),
					'Cyan' => __( 'Cyan', ' fa-mc' ),
					'Teal' => __( 'Teal', ' fa-mc' ),
					'Green' => __( 'Green', ' fa-mc' ),
                    'Light-Green'  => __( 'Light-Green', ' fa-mc' ),
					'Lime' => __( 'Lime', ' fa-mc' ),
					'Yellow' => __( 'Yellow', ' fa-mc' ),
					'Amber' => __( 'Amber', ' fa-mc' ),
					'Orange' => __( 'Orange', ' fa-mc' ),
                    'Deep-Orange' => __( 'Deep-Orange', ' fa-mc' ),
					'Brown' => __( 'Brown', ' fa-mc' ),
					'Grey' => __( 'Grey', ' fa-mc' ),
					'Blue-Grey' => __( 'Blue-Grey', ' fa-mc' ),
				],
			]
		);
        $repeater->add_control(
			'link_facebook',
			[
				'label' => __( 'Facebook', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://facebook.com', ' fa-mc' ),
				'show_external' => true,
				'default' => [
					'url' => 'https://facebook.com',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
        $repeater->add_control(
			'link_twitter',
			[
				'label' => __( 'Twitter', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://twitter.com', ' fa-mc' ),
				'show_external' => true,
				'default' => [
					'url' => 'https://twitter.com',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
        $repeater->add_control(
			'link_linkedin',
			[
				'label' => __( 'LinkedIn', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://linkedin.com', ' fa-mc' ),
				'show_external' => true,
				'default' => [
					'url' => 'https://linkedin.com',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
        $repeater->add_control(
			'link_instagram',
			[
				'label' => __( 'Instagram', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://instagram.com', ' fa-mc' ),
				'show_external' => true,
				'default' => [
					'url' => 'https://instagram.com',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
        $this->add_control(
			'material_card',
			[
				'label' => __( 'Cards List', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'card_title' => __( 'John Doe.', ' fa-mc' ),
						'card_subtitle' => __( 'Web Designer', ' fa-mc' ),
                        'card_description' => __( 'He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...', ' fa-mc' ),
					],
					[
						'card_title' => __( 'John Doe.', ' fa-mc' ),
						'card_subtitle' => __( 'Web Designer', ' fa-mc' ),
                        'card_description' => __( 'He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...', ' fa-mc' ),
					],
				],
				'title_field' => '{{{ card_title }}}',
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'typography_section',
			[
				'label' => __( 'Typography Controls', ' fa-mc' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typo',
				'label' => __( 'Title', ' fa-mc' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .material-card h2 .main-title',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typo',
				'label' => __( 'Sub-Title', ' fa-mc' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_2,
				'selector' => '{{WRAPPER}} .material-card h2 .sub-title',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'desc_typo',
				'label' => __( 'Description', ' fa-mc' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_2,
				'selector' => '{{WRAPPER}} .material-card .mc-description',
			]
		);
        $this->end_controls_section();

	}

	/**
	 * Render Material Cards widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();
        if ( $settings['material_card'] ) {
                echo '<div class="row active-with-click">';
                foreach (  $settings['material_card'] as $item ) { ?>
<div class="col-md-4 col-sm-6 col-xs-12 elementor-repeater-item-<?php echo $item['_id'] ?>">
    <article class="material-card <?php echo $item['card_color'] ?>">
        <h2>
            <span class="main-title"><?php echo $item['card_title'] ?></span>
            <span class="sub-title">
                <?php echo $item['card_subtitle'] ?>
            </span>
        </h2>
        <div class="mc-content">
            <div class="img-container">
                <img class="img-responsive" src="<?php echo $item['image']['url'] ?>">
            </div>
            <div class="mc-description">
                <?php echo $item['card_description'] ?>
            </div>
        </div>
        <a class="mc-btn-action">
            <i class="fa fa-bars"></i>
        </a>
        <div class="mc-footer">
            <h4>
                Social
            </h4>
            <?php
                                    $target_fb = $item['link_facebook']['is_external'] ? ' target="_blank"' : '';
                                    $target_tw = $item['link_twitter']['is_external'] ? ' target="_blank"' : '';
                                    $target_in = $item['link_linkedin']['is_external'] ? ' target="_blank"' : '';
                                    $target_insta = $item['link_instagram']['is_external'] ? ' target="_blank"' : '';
                                    $nofollow_fb = $item['link_facebook']['nofollow'] ? ' rel="nofollow"' : '';
                                    $nofollow_tw = $item['link_twitter']['nofollow'] ? ' rel="nofollow"' : '';
                                    $nofollow_in = $item['link_linkedin']['nofollow'] ? ' rel="nofollow"' : '';
                                    $nofollow_insta = $item['link_instagram']['nofollow'] ? ' rel="nofollow"' : '';
                                ?>
            <a href="<?php echo $item['link_facebook']['url'] ?>" class="famc-social-icon text-center"
                <?php echo $target_fb . $nofollow_fb ?>>
                <i class="fab fa-facebook-square"></i>
            </a>
            <a href=" <?php echo $item['link_twitter']['url'] ?>" class="famc-social-icon text-center"
                <?php echo $target_tw . $nofollow_tw ?>>
                <i class="fa fa-twitter"></i>
            </a>
            <a href="<?php echo $item['link_linkedin']['url'] ?>" class="famc-social-icon text-center"
                <?php echo $target_in . $nofollow_in ?>>
                <i class="fa fa-linkedin"></i>
            </a>
            <a href="<?php echo $item['link_instagram']['url'] ?>" class="famc-social-icon text-center"
                <?php echo $target_insta . $nofollow_insta ?>>
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </article>
</div>
<?php }
                echo '</div>';
        }
        ?>
<script>
jQuery(function() {
    jQuery('.material-card').materialCard({
        icon_close: '<?php echo $settings['btn_icon_clicked']['value'] ?>',
        icon_open: '<?php echo $settings['btn_icon']['value'] ?>',
        icon_spin: 'fa-spin-fast',
        card_activator: 'click'
    });

    //        $('.active-with-click .material-card').materialCard();

    window.setTimeout(function() {
        jQuery('.material-card:eq(1)').materialCard('open');
    }, 2000);

    jQuery('.material-card').on(
        'shown.material-card show.material-card hide.material-card hidden.material-card',
        function(event) {
            console.log(event.type, event.namespace, jQuery(this));
        });

});
</script>
<?php

	}

}