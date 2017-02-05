# Lanyard

[Lanyard](https://github.com/adampatterson/Lanyard) is a very simple OOP / Bootstrap Plugin for WordPress using Composer.

## Configuration
Update the details in `/plugin.php`, checkout the WordPress [Plugin Development](https://codex.wordpress.org/Developer_Documentation#Plugin_Development) docs for more information on that.

Next, search and replace `PluginNameSpace` with your plugins namespace, or leave it alone. Your call.

The rest should be straight forward and commented in the code.

## Hooks
Checkout the WordPress [Documentation](https://codex.wordpress.org/Plugin_API/Hooks) for all the hooks and actions :) 

## Helpers
The configuration uses Illuminate's [Support](https://github.com/illuminate/support) helpers. This gives us access to most of [Laravels helper functions](https://laravel.com/docs/5.2/helpers). 

## Config.php
An array of key values.

## Composer

Included is:

 * "illuminate/support"
 * "symfony/var-dumper"
 * "erusev/parsedown"
    
Keep or remove any package you like, Just note the the helpers rely on `illuminate/support` and `symfony/var-dumper` so adjust accordingly.

Don't forget to composer update!