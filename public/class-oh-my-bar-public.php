<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://mobeenabdullah.com
 * @since      0.1.0
 *
 * @package    Oh_My_Bar
 * @subpackage Oh_My_Bar/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Oh_My_Bar
 * @subpackage Oh_My_Bar/public
 * @author     Mobeen Abdullah <mobeenabdullah@gmail.com>
 */
class Oh_My_Bar_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		include_once dirname(__FILE__) . '/partials/oh-my-bar-public-display.php';
        $displayBar = new Display_Read_Bar();
        $displayBar->register();

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Oh_My_Bar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Oh_My_Bar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/oh-my-bar-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Oh_My_Bar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Oh_My_Bar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/oh-my-bar-public.js', array( 'jquery' ), $this->version, false );

	}

}
