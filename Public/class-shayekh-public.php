<?php

/**
 * Public functionality handler of the plugin
 *
 * @package Shayekh/Public
 * @author Junaid Bin Jaman<junaid@allnextver.com>
 * @since 1.0.0
 */

class Shayekh_Public {
    function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_shortcode('react-ui', array($this, 'react_ui__callback'));
    }

    function enqueue_scripts(): void
    {

        // Register react style
        wp_register_style(
            'react-ui-style',
            plugin_dir_url( __DIR__ ) . 'includes/react/index.css',
            array(),
            '1.0.0',
            'all'
        );

        // Register
        wp_register_script(
            'react-ui-scripts',
            plugin_dir_url( __DIR__ ) . 'includes/react/index.js',
            array(),
            '1.0.0',
            true
        );

        wp_localize_script('react-ui-scripts', 'wpData', array(
            'restRoot' => esc_url_raw(rest_url()),
            'nonce' => wp_create_nonce('wp_rest')
        ));
    }

    /**
     * The div here output the react ui into the public facing area
     *
     * @return string
     */
    public function react_ui__callback(): string
    {
        wp_enqueue_script('react-ui-scripts');
        wp_enqueue_style('react-ui-style');
        return '<div id="root-public-ui"></div>';
    }
}