<?php
/**
 * Plugin Name
 *
 * @package           Shayekh
 * @author            Junaid Bin Jaman
 * @copyright         2025 All Next Ver
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
 * Author:            Junaid Bin Jaman
 * Author URI:        https://example.com
 * Developer:         All Next Ver
 * Developer URI:     https://allnextver.com
 *
 * Text Domain:       sky
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */

defined('ABSPATH') || exit();

const SHAYEKH_VERSION = '1.0.0';

require_once plugin_dir_path(__FILE__) . 'includes/class-shayekh.php';

register_activation_hook(__FILE__, ['Shayekh', 'activator']);
register_deactivation_hook(__FILE__, ['Shayekh', 'deactivator']);

add_action('plugins_loaded', function () {
    if (!class_exists('Woocommerce')) :
        $string = sprintf('You must activate <a href="%s">%s</a>', 'https://allnextver.com', 'All Next Ver');
        echo "<div class='error'> $string </div>";
    else:
        Shayekh::get_instance();
    endif;;
});
