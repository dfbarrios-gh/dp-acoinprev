<?php
	//connections
	$DB_ADDRESS = 'localhost'; $DB_USER = 'root'; $DB_PASS = 'abc_DEV_123'; $DB_NAME = 'acoinprev';
	$connection = mysqli_connect($DB_ADDRESS, $DB_USER, $DB_PASS);

	if (!$connection) {
		error_log("Failed to connect to MySQL: " . mysqli_error($connection));
		die('Internal server error');
	}

	$db_select = mysqli_select_db($connection, $DB_NAME);
	session_start();	
?>