<?php

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

/**
 * The public-facing functionality of the plugin.
 */
class Nm_presentation_Public
{

    /**
     * The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     */
    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     */
    public function enqueue_styles()
    {
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/nm_presentation-public.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     */
    public function enqueue_scripts()
    {
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/nm_presentation-public.js', array( 'jquery' ), $this->version, false);
    }

    /**
     * Add shortcodes
     */
    public function add_shortcodes()
    {
        add_shortcode('presentation_mode', array($this, 'render_presentation_mode'));
    }

    /**
     * Render presentation mode
     */
    public function render_presentation_mode()
    {
        return require plugin_dir_path(__FILE__) . '/partials/nm_presentation-public-display.php';
    }
}
