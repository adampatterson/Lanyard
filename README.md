# Lanyard

[Lanyard](https://github.com/adampatterson/Lanyard) is a very simple OOP / Bootstrap Plugin for WordPress using Composer.

## Configuration
Update the details in `/plugin.php`, checkout the WordPress [Plugin Development](https://codex.wordpress.org/Developer_Documentation#Plugin_Development) docs for more information on that.

Next, Search and replace `PluginNameSpace` with your plugins namespace, or leave it alone. Your call.

The rest should be straight forward and commented in the code.

## Config.php
An array of key values, including plugin options.

## Hooks
Checkout the WordPress [Documentation](https://codex.wordpress.org/Plugin_API/Hooks) for all the hooks and actions :)

## Helpers
The configuration uses Laravel's [Helpers](https://github.com/laravel/helpers). This gives us access to most of [Laravels helper functions](https://laravel.com/docs/8.x/helpers).

## Composer

Includes:

* "erusev/parsedown"
* "laravel/helpers"

Keep or remove any package you like, Just note the the helpers rely on `laravel/helpers` so adjust accordingly.

Don't forget to composer update!