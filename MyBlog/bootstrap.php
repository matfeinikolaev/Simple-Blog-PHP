<?php
$config = require 'config.php';
require 'database/Connection.php';
require 'database/DataBaseEdit.php';

return new DataBaseEdit(
	Connection::make($config['database'])
);