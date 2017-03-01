<?php
	ob_start();
	$conexion=mysql_connect('localhost','root','redLine2016');
	mysql_select_db('acoinprevbd',$conexion)
		or die("Error en conexion con BD: ".mysql_error());
	session_start();
	ob_end_flush();
?>