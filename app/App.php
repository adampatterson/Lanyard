<?php

namespace PluginNameSpace;

use Parsedown;
use PluginNameSpace\Config;

class App extends Actions
{

    /**
     * @var \PluginNameSpace\Config
     */
    public $config;

    /**
     * @var array
     */
    protected $settings;

    public function __construct()
    {
        $this->config = new Config;

        // Assigns the Options array from WordPress to `$this->settings`.
        $this->settings = get_option($this->config::get('get_option'));

        if ( ! $this->settings) {
            $this->settings = [
                "example_string" => "", "example_select" => ""
            ];
        }

        $this->exampleSelect = [
            'One' => 1, 'Two' => 2, 'Three' => 3, 'Four' => 4, 'Five' => 5,
        ];
    }

    public function renderMarkdown()
    {
        $Parsedown = new Parsedown();

        $readme_content = file_get_contents(Config::get_base().'README.MD');

        return $Parsedown->text($readme_content);
    }
}