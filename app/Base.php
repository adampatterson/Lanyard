<?php

namespace PluginNameSpace;

use Request\Request;

class Base extends Actions
{

    /**
     * @var array
     */
    protected $settings;
    protected $request;

    public function __construct()
    {
        $this->request = new Request();

        // Assigns the Options array from WordPress to `$this->settings`.
        $this->settings = get_option(Config::get('get_option'));

        // Initial State
        if ( ! $this->settings) {
            $this->settings = [
                "example_string" => "",
                "example_select" => ""
            ];
        }

        // Default Values
        $this->exampleStyring = 'Adam Patterson';
        $this->exampleSelect  = [
            'One'   => 1,
            'Two'   => 2,
            'Three' => 3,
            'Four'  => 4,
            'Five'  => 5,
        ];
    }

}
