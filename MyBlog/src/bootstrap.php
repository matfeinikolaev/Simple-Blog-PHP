<?php

$config = require 'src/config.php';

App::bind('config', $config);

App::bind('database', new QueryBuilder(
    Connection::make($config['database'])
));

// Use $config here instead if App::get('config')
// App::get('config') equals $config in this scope, but $config is just simplier

// I don't see that you use the Request class anywhere.
// Look at an example below (move it to your Request.php):

class Request
{
    public $input;

    public $files;

    public function __construct($input, $files)
    {
        $this->input = $input;
        $this->files = $files;
    }

    public function get(string $key)
    {
        return $this->input[$key] ?? null;
    }

    public function file(string $key)
    {
        return $this->files[$key] ?? null;
    }
}

App::bind('request', new Request(
    array_merge($_POST, $_GET),
    $_FILES
));

// And somewhere in post.php

$request = App::get('request');

App::get('database')->insert('blog', [
    'title' => $request->input('title'),
    'text' => $request->input('text'),
    'date_time' => date('Y-m-d H:i:s'),
]);
