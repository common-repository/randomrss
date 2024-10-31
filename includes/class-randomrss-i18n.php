<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://paydelete.com/randomrss/
 * @since      1.5.0
 *
 * @package    Randomrss
 * @subpackage Randomrss/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.5.0
 * @package    Randomrss
 * @subpackage Randomrss/includes
 * @author     PayDelete <webmaster@paydelete.com>
 */
class Randomrss_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.5.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'randomrss',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
