<?php

namespace PluginNameSpace;

use Parsedown;

class App extends Actions {

	/**
	 * @var array
	 */
	protected $settings;

	public function __construct() {
		// Assigns the Options array from WordPress to `$this->settings`.
		$this->settings = get_option( 'lanyard-settings' );

		$this->exampleSelect = array(
			'One'   => 1,
			'Two'   => 2,
			'Three' => 3,
			'Four'  => 4,
			'Five'  => 5,
		);
	}

	public function renderMarkdown() {
		$Parsedown = new Parsedown();

		$readme_content = file_get_contents( Helper::get_base() . 'readme.md' );

		return $Parsedown->text( $readme_content );
	}
}