<?php
/**
 * Shayekh's plugin main class file
 *
 * @package Shayekh
 * @author Junaid Bin Jaman<junaid@allnextver.com>
 * @version '1.0.0
 */

defined( 'ABSPATH' ) || exit;

class Shayekh {
	/**
	 * Plugin text domain
	 * @var string
	 */
	public static string $plugin_name = 'sky';

	/**
	 * The running version of the plugin=
	 * @var string
	 */
	public static string $version = SHAYEKH_VERSION;

	/**
	 * @var Shayekh|null
	 */
	public static ?Shayekh $instance = null;

	public function __construct() {
		$this->includes();
		$this->init();
	}

	/**
	 * Returns the plugin's text domain/name
	 *
	 * @return string
	 */
	public static function get_plugin_name(): string {
		return self::$plugin_name;
	}

	/**
	 * Returns the current plugin's version
	 *
	 * @return string
	 */
	public static function get_plugin_version(): string {
		if ( ! defined( 'SHAYEKH_VERSION' ) ) {
			self::$version = '1.0.0';
		}

		return self::$version;
	}

	/**
	 * Include the file required to load the plugin
	 * @return void
	 */
	private function includes(): void {
		require plugin_dir_path( __DIR__ ) . 'admin/class-shayekh-admin.php';
		require plugin_dir_path( __DIR__ ) . 'public/class-shayekh-public.php';
	}

	/**
	 * Init the plugin
	 * @return void
	 */
	private function init(): void {
		if ( is_admin() ) :
			$this->init_admin();
		else :
			$this->init_public();
		endif;
	}

	/**
	 * Get the current instance of the class
	 * @return Shayekh
	 */
	public static function get_instance(): Shayekh {

		if ( self::$instance === null ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	private function init_admin(): void {
		new Shayekh_admin();
	}

	private function init_public(): void {
		new Shayekh_Public();
	}

	/**
	 * The function runs durng plugin activation
	 *
	 * @return void
	 */
	public static function activator() {}

	/**
	 * The function runs during plugin deactivation
	 *
	 * @return void
	 */
	public static function deactivator() {

	}
}