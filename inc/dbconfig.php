<?php

	global $install;
	global $con;

	$hostname = 'localhost'; 	// Host Name
	
	$user = 'root'; // username of host
	
	$password = ''; // password of host
	
	$dbname = 'tryit'; 	//database name
	
	$blogname = 'Kilogrammy'; // Name of Your Blog
	
	$admin = 'ademola';  	// blog admin username for login
	
	$adminpass = 'ademola';  // password for blog admin
			
	$con = new mysqli($hostname,$user,$password,$dbname);
	if (mysqli_connect_errno())
		{
	  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  		die();
	  	}
	
	define('BLOG', $blogname);
	require_once('head.php');

	if($install != 1)
	{
		require_once('action.php');
		$install = 1;
	}

?>