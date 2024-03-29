<?php

class App
{
    protected static $registry = [];

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is assigned to this container");
        }

        return static::$registry[$key];
    }
}


// Read about:
//  - Service Container pattern
//  - Magic methods in PHP
//  - ArrayAccess class in PHP
