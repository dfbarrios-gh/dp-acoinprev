<?php
	require_once('conexion.php');
	if(isset($_POST['frm%01@ca'])){
		session_destroy();
		header("location:index.php");
	}
	session_destroy();
?>