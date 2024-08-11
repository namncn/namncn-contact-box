<?php
/**
 * Plugin Name: Namncn Contact Box
 * Plugin URI: https://namncn.com/plugins/namncn-contact-box/
 * Description: Contact box plugin
 * Version: 1.0.0
 * Author: Nam Truong
 * Author URI: https://namncn.com
 * Text Domain: ncb
 * Domain Path: /languages/
 * Requires at least: 6.4
 * Requires PHP: 7.4
 *
 * @package NCB
 */

namespace NCB;

defined( 'ABSPATH' ) || exit;

define( 'NCB_PLUGIN_VERSION', '1.0.0' );
define( 'NCB_PLUGIN_SLUG', 'ncb' );
define( 'NCB_PLUGIN_TEXTDOMAIN', 'ncb' );
define( 'NCB_PLUGIN_FILE', __FILE__ );
define( 'NCB_PLUGIN_BASE', plugin_basename( NCB_PLUGIN_FILE ) );
define( 'NCB_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'NCB_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

if ( ! class_exists( 'Plugin' ) ) {
	/**
	 * Plugin Class.
	 *
	 * @since 1.0.0
	 */
	class Plugin {

		/**
		 * Class instance.
		 *
		 * @var Plugin
		 */
		private static $instance = null;

		/**
		 * Return Plugin Instance.
		 *
		 * @return object\Plugin
		 */
		public static function instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Plugin Constructor.
		 */
		public function __construct() {
			$this->includes();
			$this->init_hooks();
		}

		/**
		 * Include required core files used in admin and on the frontend.
		 */
		public function includes() {
			include_once NCB_PLUGIN_PATH . 'includes/frontend.php';
		}

		private function init_hooks() {
			add_action( 'init', array( $this, 'init' ), 0 );
		}

		/**
		 * Init Plugin when WordPress Initialises.
		 */
		public function init() {
			$this->load_plugin_textdomain();
		}

		/**
		 * Load Localisation files.
		 */
		public function load_plugin_textdomain() {
			load_plugin_textdomain( 'ncb', false, plugin_basename( dirname( NCB_PLUGIN_FILE ) ) . '/languages' );
		}
	}
}

/**
 * Returns the main instance.
 *
 * @since  1.0
 * @return Plugin
 */
function ncb() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
	return Plugin::instance();
}

ncb();
