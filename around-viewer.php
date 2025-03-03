<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.around.media
 * @since             0.1.0
 * @package           Around_Viewer
 *
 * @wordpress-plugin
 * Plugin Name:       Around Viewer
 * Plugin URI:        http://gitlab.around.media/AroundAdmin/around-media-wp-plugin
 * Description:       A plugin for implementing the Around Media Viewer very easily.
 * Version:           0.1.2
 * Author:            Thijs Morlion
 * Author URI:        http://www.around.media
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       around-viewer
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-around-viewer-activator.php
 */
function activate_around_viewer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-around-viewer-activator.php';
	Around_Viewer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-around-viewer-deactivator.php
 */
function deactivate_around_viewer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-around-viewer-deactivator.php';
	Around_Viewer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_around_viewer' );
register_deactivation_hook( __FILE__, 'deactivate_around_viewer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-around-viewer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_around_viewer() {

	$plugin = new Around_Viewer();
	$plugin->run();

}
run_around_viewer();
