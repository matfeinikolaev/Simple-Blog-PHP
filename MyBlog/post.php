<?php
require 'index.php';

$DBedit->insert('Blog',['title' => $_POST['title'],
						'text' => $_POST['text'],
						'datetime'=>date("Y-m-d H:i:s")]);

header('Location: /');
