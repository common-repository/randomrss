<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://paydelete.com/randomrss/
 * @since      1.5.0
 *
 * @package    Randomrss
 * @subpackage Randomrss/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Randomrss
 * @subpackage Randomrss/public
 * @author     PayDelete <webmaster@paydelete.com>
 */
class Randomrss_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.5.0
	 * @access   private
	 * @var      string    $randomrss    The ID of this plugin.
	 */
	private $randomrss;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.5.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.5.0
	 * @param      string    $randomrss      The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $randomrss, $version ) {

		$this->plugin_name = $randomrss;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.5.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->randomrss, plugin_dir_url( __FILE__ ) . 'css/randomrss-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.5.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->randomrss, plugin_dir_url( __FILE__ ) . 'js/randomrss-public.js', array( 'jquery' ), $this->version, false );

	}

}
