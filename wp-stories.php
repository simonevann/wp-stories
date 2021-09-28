<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://simone.vannucci.ch
 * @since             1.0.0
 * @package           Wp_Stories
 *
 * @wordpress-plugin
 * Plugin Name:       WP Stories
 * Plugin URI:        wpstories
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Simone Vannucci
 * Author URI:        https://simone.vannucci.ch
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-stories
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WP_STORIES_VERSION', '1.0.0' );

/**
* Define the name of the categorry
*/
define('WP_STORIES_CATEGORY', 'wpstories');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-stories-activator.php
 */
function activate_wp_stories() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-stories-activator.php';
	Wp_Stories_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-stories-deactivator.php
 */
function deactivate_wp_stories() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-stories-deactivator.php';
	Wp_Stories_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_stories' );
register_deactivation_hook( __FILE__, 'deactivate_wp_stories' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-stories.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_stories() {

	$plugin = new Wp_Stories();
	$plugin->run();

}
run_wp_stories();
