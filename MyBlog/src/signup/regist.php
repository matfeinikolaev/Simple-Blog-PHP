<?php

$userData = new DataBase(DataBaseConnection::make());
$users = $userData->selectAll('Users');

Check::checkSignIn($users);

$userData->insertData('Users',['username'=>$_POST['username'], 
						'password'=>$_POST['password']]);

header('Location: /start');