<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://b1stack.com/
 * @since      1.0.0
 *
 * @package    Travis_Slider
 * @subpackage Travis_Slider/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Travis_Slider
 * @subpackage Travis_Slider/includes
 * @author     Reza Kabiri <re.kabiri@gmail.com>
 */
class Travis_Slider_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'travis-slider',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
