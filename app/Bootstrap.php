<?php

namespace PluginNameSpace;

/*
 * The bulk of your Plugin should happen in /App.
 */
class Bootstrap extends App {

	private static $instance = null;

	function __construct() {
		// Sets up the Admin Menu.
		add_action( 'admin_menu', array( $this, 'adminMenu' ) );

		// Make sure that this is an admin page, and that the POST array exists.
		if ( is_admin() && $_POST ) {
			$this->saveOptions();
		}

		// Initialized the application.
		parent::__construct();

		// Sets $this, in the Static Context.
		static::$instance = $this;
	}

	/**
	 * Initializes the plugin.
	 */
	public static function init() {
		try {
			new Bootstrap();
			new Actions();
		} catch ( Exception $e ) {

		}
	}

	/**
	 * Registeres the Admin Menu.
	 */
	public function adminMenu() {
		add_options_page( 'Lanyard Plugin Settings', 'Lanyard', 'edit_pages', 'lanyardsettings', array(
			$this,
			'adminOptionsPage'
		) );
	}

	/**
	 * Registers the Plugin Admin Page.
	 */
	public function adminOptionsPage() {
		$title          = Helper::get( 'title' );
		$config         = Helper::get(); // Returns an array containging call of the Config values.
		$settings       = $this->settings; // Returns an array containing all of the settings from WordPress.
		$example_select = $this->exampleSelect; // Static example of a select menu.

		$markdown_content = $this->renderMarkdown(); // For fun, Markdown is uncluded in the /App Controller.

		require_once( dirname( __FILE__ ) . '/views/options.php' );
	}

	/**
	 * Handles the saving of Plugin settings.
	 */
	public function saveOptions() {
		// Both Examples are required.
		if ( ! isset( $_POST['example_string'] ) || ! isset( $_POST['example_select'] ) ) {
			return;
		}
		// update the WordPress options with our settings.
		update_option( 'lanyard-settings', array(
			'example_string' => $_POST['example_string'],
			'example_select' => $_POST['example_select']
		) );
	}

	/**
	 * @return null
	 */
	public static function getInstance() {
		return self::$instance;
	}
}