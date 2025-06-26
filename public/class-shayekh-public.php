<?php
/**
 * Shayekh public facing site
 *
 * @package Shayekh/Public
 * @author Junaid Bin Jaman<junaid@allnextver.com>
 * @version '1.0.0'
 */

class Shayekh_Public {
	public function __construct() {
		//
		add_action( 'init', array($this, 'init') );
		add_action( 'wp_enqueue_scripts', array($this, 'enqueue_script') );
	}

	function init(): void {
		$string = sprintf('The current version of the plugin is %s', Shayekh::get_plugin_version());

		_e( $string, Shayekh::get_plugin_name());

		echo '<div id="shayekh-user-root"></div>';
	}

	public function enqueue_script(): void {
		wp_enqueue_style(
			'react-ui-styles',
			plugins_url( 'shayekh' ) . '/includes/react/index.css',
			array(),
			'1.0.0',
			'all'
		);

		wp_enqueue_script(
			'react-ui-script',
			plugins_url( 'shayekh' ) . '/includes/react/index.js',
			array(),
			'1.0.0',
			true
		);
	}
}