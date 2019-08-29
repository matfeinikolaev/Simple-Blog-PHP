<?php
// Why $userData? DataBase is a reposityry (it manages users)
// So, userData = user+Data, user - ok, data - no. it is not data
// Read about the Repository pattern
// I'd name this var $usersRepository for instance
$userData = new DataBase(DataBaseConnection::make());

$users = $userData->selectAll('Users');

Check::checkLogIn($users);
