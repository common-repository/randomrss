<?php
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
/**
 * Fired during plugin activation
 *
 * @link       https://paydelete.com/randomrss/
 * @since      1.5.0
 *
 * @package    Randomrss
 * @subpackage Randomrss/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.5.0
 * @package    Randomrss
 * @subpackage Randomrss/includes
 * @author     PayDelete <webmaster@paydelete.com>
 */
class Randomrss_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.5.0
	 */
	public static function activate() {
		if ( ! current_user_can( 'activate_plugins' ) ) return;

  global $wpdb;
  if ( null === $wpdb->get_row( "SELECT post_name FROM {$wpdb->prefix}posts WHERE post_name = 'success'", 'ARRAY_A' ) ) {

    $current_user = wp_get_current_user();

    // create post object
    $page = array(
      'post_title'  => __( 'Success' ),
      'post_status' => 'publish',
      'post_author' => $current_user->ID,
      'post_type'   => 'page',
    );

    // insert the post into the database
    wp_insert_post( $page );
  }
  if ( null === $wpdb->get_row( "SELECT post_name FROM {$wpdb->prefix}posts WHERE post_name = 'cancel'", 'ARRAY_A' ) ) {

      $current_user = wp_get_current_user();

      // create post object
      $page = array(
        'post_title'  => __( 'Cancel' ),
        'post_status' => 'publish',
        'post_author' => $current_user->ID,
        'post_type'   => 'page',
      );

      // insert the post into the database
      wp_insert_post( $page );
  }

	}

}
