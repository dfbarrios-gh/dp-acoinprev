<?php
	$conexion=mysql_connect('localhost','dfbarrios','pass2017@');
	mysql_select_db('acoinprevbd',$conexion)
		or die("Error en conexion con BD: ".mysql_error());
	session_start();
?>