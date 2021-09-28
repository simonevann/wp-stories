<?php

/**
 * Fired during plugin activation
 *
 * @link       https://simone.vannucci.ch
 * @since      1.0.0
 *
 * @package    Wp_Stories
 * @subpackage Wp_Stories/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wp_Stories
 * @subpackage Wp_Stories/includes
 * @author     Simone Vannucci <info@vannucci.ch>
 */
class Wp_Stories_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		if(!category_exists(WP_STORIES_CATEGORY)){
			wp_create_category(WP_STORIES_CATEGORY);
		}
	}

}
