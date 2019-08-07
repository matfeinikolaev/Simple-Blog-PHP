<?php
$DBedit = require 'bootstrap.php';

$posts = $DBedit->selectAll('Blog');

arsort($posts);

require 'index.view.php';
