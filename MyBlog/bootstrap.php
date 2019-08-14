<?php

App::bind('config', require 'src/config.php');

App::bind('database', new DataBaseEdit(
	Connection::make(App::get('config')['database'])
));
