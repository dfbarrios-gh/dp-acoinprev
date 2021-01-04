<?php
	//connections
	$DB_ADDRESS = 'localhost'; $DB_USER = 'root'; $DB_PASS = 'abc_DEV_123';
	$connection = mysql_connect($DB_ADDRESS, $DB_USER, $DB_PASS);
	mysql_select_db('acoinprev', $connection) or die("Error connecting with database: ".mysql_error());
	session_start();
?>