<?php
/**
 *
 * @link              https://paydelete.com/randomrss/
 * @since             1.5.0
 * @package           Randomrss
 *
 * @wordpress-plugin
 * Plugin Name:       Randomrss
 * Plugin URI:        https://paydelete.com/randomrss/
 * Description:       The RandomRSS Plugin for Wordpress allows you to create RSS feeds featuring up to 10 random posts. Options include filtering by category, tag, and date range as well as the ability to set the pubDate to the current date/time
 * Version:           1.5.0
 * Author:            PayDelete
 * Author URI:        https://profiles.wordpress.org/paydelete/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       randomrss
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.5.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RANDOMRSS_VERSION', '1.5.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-randomrss-activator.php
 */
function activate_randomrss() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-randomrss-activator.php';
	Randomrss_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-randomrss-deactivator.php
 */
function deactivate_randomrss() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-randomrss-deactivator.php';
	Randomrss_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_randomrss' );
register_deactivation_hook( __FILE__, 'deactivate_randomrss' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-randomrss.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.5.0
 */
function run_randomrss() {

	$plugin = new Randomrss();
	$plugin->run();

}

// use an action for the delete operation
// use a filter to return the button with a post
run_randomrss();

