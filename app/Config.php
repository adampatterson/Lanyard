<?php

namespace PluginNameSpace;

class Config {

	/**
	 * The booted state.
	 *
	 * @var boolean
	 */
	protected static $booted = false;

	/**
	 * The base path.
	 *
	 * @var string
	 */
	protected static $base;

	/**
	 * The config.php content.
	 *
	 * @var array
	 */
	protected static $config = [];

	public static function boot() {
		self::$base = WP_PLUGIN_DIR;
		self::$base = self::$base . '/' . basename( plugin_dir_url( __DIR__ ) ) . '/';

		self::$config = @require self::$base . '/config.php';

		self::$booted = true;
	}

	/**
	 * Gets a config variable.
	 *
	 * @param  string $key
	 * @param  mixed  $default
	 *
	 * @return mixed
	 */
	public static function get( $key = null, $default = null ) {
		if ( ! self::$booted ) {
			self::boot();
		}

		if ( $key === null ) {
			return self::$config;
		}

		return array_get( self::$config, $key, $default );
	}

	public static function get_base() {
		return self::$base;
	}
}