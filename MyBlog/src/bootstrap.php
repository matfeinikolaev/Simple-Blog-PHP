<?php

App::bind('config', require 'src/config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));