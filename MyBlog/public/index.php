<?php
require 'vendor/autoload.php';
require 'src/bootstrap.php';

require Router::load('src/routes.php')
    ->direct(Request::uri());
