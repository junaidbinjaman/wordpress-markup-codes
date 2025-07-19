<?php
/**
 * Main class file of the plugin
 *
 * @package Shayekh
 * @author Junaid Bin Jaman<junaid@allnextver.com>
 * @since  1.0.0
 */

defined('ABSPATH') || exit();

final class Shayekh
{
    /**
     * Plugin version
     * @var string
     */
    public static string $version = SHAYEKH_VERSION;

    /**
     * Plugins's text domain
     *
     * @var string
     */
    public static string $plugin_name = 'sky';

    /**
     * The current class instance
     *
     * @var Shayekh|null
     */
    public static ?Shayekh $instance = null;

    public function __construct()
    {
        $this->includes();
        $this->init();
    }

    /**
     * Includes the required files
     *
     * @return void
     */
    private function includes(): void
    {
        // Includes the admin class file
        require_once plugin_dir_path(__DIR__) . 'admin/class-shayekh-admin.php';

        // Includes the plugin class file
        require_once plugin_dir_path(__DIR__) . 'public/class-shayekh-public.php';
    }

    /**
     * Init the plugin
     *
     * @return void
     */
    private function init(): void
    {
        $this->init_admin();
        $this->init_public();
    }

    /**
     * Get the current version of the plugin
     * @return string
     */
    public static function get_version(): string
    {
        if (!self::$version) :
            self::$version = '1.0.0';
        endif;

        return self::$version;
    }

    /**
     * Returns the plugins name
     *
     * @return string
     */
    public static function get_plugin_name(): string
    {
        return self::$plugin_name;
    }

    /**
     * Current instance of the plugin's main class
     *
     * @return Shayekh|null
     */
    public static function get_instance(): Shayekh|null
    {
        if (self::$instance === null) :
            self::$instance = new self();
        endif;

        return self::$instance;
    }

    private function __clone()
    {
    }

    /**
     * Init admin functionality of the plugin
     *
     * @return void
     */
    private function init_admin(): void
    {
        new Shayekh_Admin();
    }

    /**
     * Init public functionality of the plugin
     *
     * @return void
     */

    /**
     * Init public functionality of the plugin
     *
     * @return void
     */
    private function init_public(): void
    {
        new Shayekh_Public();
    }

    /**
     * Runs during plugin activation
     *
     * @return void
     */
    public static function activator()
    {
        //
    }

    /**
     * Runs during plugin deactivation
     *
     * @return void
     */
    public static function deactivator()
    {
        //
    }
}
