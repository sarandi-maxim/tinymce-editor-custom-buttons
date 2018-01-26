<?php

/**
 * Class Editor_Custom_Buttons Main plugin class
 */
class Editor_Custom_Buttons {

	/**
	 * Editor_Custom_Buttons constructor.
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'init_buttons' ] );
		add_action( 'init', [ $this, 'register_buttons_post_type' ] );
	}

	/**
	 * Init hooks for tiny mce button
	 */
	public function init_buttons() {
		add_filter( 'mce_external_plugins', [ $this, 'add_buttons' ] );
		add_filter( 'mce_buttons', [ $this, 'register_buttons' ] );
	}

	/**
	 * Add buttons JS files.
	 *
	 * @param array $plugin_array All preinstalled buttons.
	 *
	 * @return mixed
	 */
	public function add_buttons( $plugin_array ) {
//		$plugin_array['wptuts'] = get_template_directory_uri() . '/inc/lib/editor-custom-buttons/buttons.js';

		return $plugin_array;
	}

	/**
	 * Register Button names
	 *
	 * @param array $buttons Registered Buttons.
	 *
	 * @return mixed
	 */
	public function register_buttons( $buttons ) {
		array_push( $buttons, 'dropcap', 'showrecent' );

		return $buttons;
	}

	/**
	 * Register Post Type for buttons
	 */
	public function register_buttons_post_type() {

		register_post_type( 'tinymce_buttons',
			[
				'label'               => null,
				'labels'              => [
					'name'          => 'Editor Buttons',
					'singular_name' => 'Editor Button',
				],
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => false,
				'exclude_from_search' => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => false,
				'menu_position'       => 80,
				'menu_icon'           => 'dashicons-plus-alt',
				'supports'            => [ 'title' ],
				'has_archive'         => false,
			]
		);
	}
}
