<?php

namespace PluginNameSpace;

class Admin extends Base
{

    public function __construct()
    {
        parent::__construct();

        // Make sure that this is an admin page, and that the POST array exists.
        if (is_admin() && $_POST) {
            $this->saveOptions();
        }

    }

    /**
     * Registeres the Admin Menu.
     */
    public function adminMenu()
    {
        add_options_page(Config::get('admin_menu.page_title'), Config::get('admin_menu.menu_title'), 'edit_pages',
            Config::get('admin_menu.menu_slug'), [
                $this,
                'adminOptionsPage'
            ]);
    }

    /**
     * Registers the Plugin Admin Page.
     */
    public function adminOptionsPage()
    {
        $title = Config::get('title');

        // Returns an array containging call of the Config values.
        $config = Config::get();

        // Returns an array containing all of the settings from WordPress.
        $settings = $this->settings;

        // Static example of a select menu.
        $example_select = $this->exampleSelect;

        $app = new App;

        // For fun, Markdown is included in the /App Controller.
        $markdown_content = $app->renderMarkdown();

        require_once(dirname(__FILE__).'/views/options.php');
    }

    /**
     * Handles the saving of Plugin settings.
     */
    public function saveOptions()
    {
        // Both Examples are required.
        if ( ! isset($_POST['example_string']) || ! isset($_POST['example_select'])) {
            return;
        }

        // update the WordPress options with our settings.
        update_option(Config::get('get_option'), [
            'example_string' => Request::get('example_string'),
            'example_select' => Request::get('example_select')
        ]);
    }
}