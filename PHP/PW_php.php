<?php 
	
	mb_internal_encoding("UTF-8");
	$login = $_POST['_login'];
	$password = $_POST['_password'];
	
	$TryLogin = "Admin";
	$TryPassword = "1234";
		
	if($login == $TryLogin && $password == $TryPassword)
	{
		print "you have entered the correct password";
	}
?>