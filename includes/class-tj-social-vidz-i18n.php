<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.tanvir.pro
 * @since      1.0.0
 *
 * @package    Tj_Social_Vidz
 * @subpackage Tj_Social_Vidz/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Tj_Social_Vidz
 * @subpackage Tj_Social_Vidz/includes
 * @author     Tanvir <tanvir.focus@gmail.com>
 */
class Tj_Social_Vidz_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'tj-social-vidz',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
