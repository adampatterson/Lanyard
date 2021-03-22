<?php

namespace PluginNameSpace;

/*
 * The bulk of your Plugin should happen in /App.
 */

class Bootstrap extends Base
{

    private static $instance = null;

    function __construct()
    {
        parent::__construct();

        // Sets up the Admin Menu.
        add_action('admin_menu', [new Admin, 'adminMenu']);

        // Sets $this, in the Static Context.
        static::$instance = $this;
    }

    /**
     * Initializes the plugin.
     */
    public static function init()
    {
        try {
            new Bootstrap();
            new Actions();
        } catch (Exception $e) {

        }
    }

    /**
     * @return null
     */
    public static function getInstance()
    {
        return self::$instance;
    }
}