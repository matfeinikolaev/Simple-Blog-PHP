<?php
return [
    'database'=>[
        'name'=>'my_blog',
        'user'=>'matfei',
        'password'=>'12345678',
        'connection'=>'mysql:host=127.0.0.1',
        'options'=>[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ]
    ]
];