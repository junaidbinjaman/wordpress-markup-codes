<?php
/**
 * Plugin Name
 *
 * @package           Shayekh
 * @author            Junaid
 * @copyright         2019 Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Shayekh
 * Plugin URI:        https://example.com/plugin-name
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 *
 * Author:            Junaid
 * Author URI:        https://example.com
 * Developer:         All Next Ver
 * Developer URI:     https://allnextver.com
 *
 * Text Domain:       syk
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) || exit;

const SHAYEKH_VERSION = '1.0.0';

require_once plugin_dir_path( __FILE__ ) . 'includes/class-shayekh.php';

// Register activator/deactivator hook
register_activation_hook( __FILE__, ['Shayekh', 'activator'] );
register_deactivation_hook( __FILE__, ['Shayekh', 'deactivator'] );

add_action('plugins_loaded', function () {
	// Check where all the required plugins are installed or not (Option)

	Shayekh::get_instance();
});