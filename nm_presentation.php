<?php

/**
 * @link              https://www.taifuun.ee
 * @since             1.0.0
 * @package           Nm_presentation
 *
 * @wordpress-plugin
 * Plugin Name:       Nordic Milk Presentation Mode
 * Plugin URI:        https://www.taifuun.ee
 * Description:       This plugin adds shortcode to add presentation mode button
 * Version:           1.0.0
 * Author:            Taifuun OÜ
 * Author URI:        https://www.taifuun.ee
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nm_presentation
 * Domain Path:       /languages
 * GitHub Plugin URI: stentibbing/nm_presentation
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 */
define('NM_PRESENTATION_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 */
function activate_nm_presentation()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-nm_presentation-activator.php';
    Nm_presentation_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_nm_presentation()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-nm_presentation-deactivator.php';
    Nm_presentation_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_nm_presentation');
register_deactivation_hook(__FILE__, 'deactivate_nm_presentation');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-nm_presentation.php';

/**
 * Begins execution of the plugin.
 */
function run_nm_presentation()
{
    $plugin = new Nm_presentation();
    $plugin->run();
}
run_nm_presentation();
