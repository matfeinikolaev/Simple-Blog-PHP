<?php

$posts = App::get('database')->selectAll('blog');

require 'src/index.view.php';
