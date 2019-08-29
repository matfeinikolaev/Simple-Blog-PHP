<?php

App::get('database')->insert('blog', [
    'title' => $_POST['title'],
    'text' => $_POST['text'],
    'date_time' => date('Y-m-d H:i:s'),
]);

header('Location: /start');
