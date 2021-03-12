<?php
/*
 * Configuration options used by the plugin,
 * These will be static or even default values.
 */
return [
	'author'  => 'Adam Patterson',
	'url'     => 'https://adampatterson.ca/',
	'title'   => 'Lanyard Plugin Title',
	'version' => '0.0.1',
    'get_option' => 'lanyard-settings',
    'admin_menu' => [
        'page_title' => 'Lanyard Plugin Settings',
        'menu_title' => 'Lanyard',
        'menu_slug' => 'lanyardsettings',
    ]
];