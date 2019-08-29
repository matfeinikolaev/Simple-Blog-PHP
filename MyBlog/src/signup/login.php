<?php

$userData = new DataBase(DataBaseConnection::make());
$users = $userData->selectAll('Users');

Check::checkLogIn($users);

