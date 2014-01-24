<?php
/**
 * Multilang.
 *
 * Multilingual content management and translation plugin allowing for a number of languages to be set up and used in a single site.
 *
 * @package   multilang
 * @author    Kane Andrews <hello@kaneandre.ws>
 * @license   GPL-2.0+
 * @link      http://kaneandre.ws
 * @copyright 2013 Kane Andrews
 *
 * @wordpress-plugin
 * Plugin Name: Multilang
 * Plugin URI:  http://kaneandre.ws
 * Description: Multilingual content management and translation plugin allowing for a number of languages to be set up and used in a single site.
 * Version:     1.0
 * Author:      Kane Andrews
 * Author URI:  http://kaneandre.ws
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-multilang.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'multilang', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'multilang', 'deactivate' ) );

multilang::get_instance();