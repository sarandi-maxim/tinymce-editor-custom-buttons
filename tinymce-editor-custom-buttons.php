<?php
/*
 * Plugin Name: TinyMCE Editor Custom Buttons
 * Version: 0.01
 * Plugin URI: https://github.com/sarandi-maxim/tinymce-editor-custom-buttons
 * Description: Create custom buttons to WordPress editor.
 * Author: Maksym Sarandi
 * Author URI: https://github.com/sarandi-maxim
 * Requires at least: 4.9
 * Tested up to: 4.9.2
 * License:      GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain: tiny-mce-buttons
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Maksym Sarandi
 * @since 0.01
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Require plugin class
 */
require_once __DIR__ . '/includes/class-editor-custom-buttons.php';

/**
 * Init Plugin
 */
new Editor_Custom_Buttons();
