<?php

namespace PluginNameSpace;

class Request
{

    static $request;

    public function __construct()
    {
        self::$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
    }

    static function get(string $key, $default = null)
    {
        return self::$request->get($key, $default);
    }
}