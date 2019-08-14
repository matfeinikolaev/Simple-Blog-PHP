<?php

$posts = App::get('database')->selectAll('Blog');

require 'src/index.view.php';
