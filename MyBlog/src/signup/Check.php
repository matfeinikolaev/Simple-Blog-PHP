<?php
class Check
{
	public static function checkLogIn($object)
	{
		foreach($object as $value){
	        if(
	        	($_POST['username']==$value->username) && 
	        	($_POST['password']==$value->password)) 
	        {
		        die(header('Location: /start'));
	        }
        }
        echo "<p class='warning'>Wrong combination of password and username. Try again</p>";
        require 'src/signup/logIn.php';
	}

	public static function checkSignIn($object)
	{
		foreach($object as $value){
	        if($_POST['username']==$value->username){
		        echo "<p class='warning'>The username is already in use</p>";
		        die(require 'src/signup/signUp.php');
	        }
        }
	}
}