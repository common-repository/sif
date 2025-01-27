<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Sif
 *
 * @wordpress-plugin
 * Plugin Name:       Sif
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       Sif is a simple wordpress plugin that adds hover or flipper image in woocommerce product list, category list and related products list.
 * Version:           1.0.0
 * Author:            adpu
 * Author URI:        http://adpu.net/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Sif
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_sif() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sif-activator.php';
	Sif_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_sif() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sif-deactivator.php';
	Sif_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sif' );
register_deactivation_hook( __FILE__, 'deactivate_sif' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sif.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sif() {

	$plugin = new Sif();
	$plugin->run();

}
run_sif();
