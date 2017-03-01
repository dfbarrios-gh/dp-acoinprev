<?php
	ob_start();
	require_once('conexion.php');
	require_once('index.php');
	if(isset($_POST['frm%00@si'])){
		$usuario=$_POST['inpusername'];
		$contrasena=md5($_POST['inppassword']);
		$cU=mysql_query("select * from usuarios where usrusuario='$usuario';");
		if(mysql_num_rows($cU)!=0){
			$r=mysql_fetch_assoc($cU);
			if($r['usrpassword']==$contrasena){
				$_SESSION['userid']=$r['usrid'];
				$_SESSION['uname']=$r['usrusuario'];
				$_SESSION['upass']=$r['usrpassword'];
				$_SESSION['ustatus']='active';
				header("location:votacion.php");
			}else{echo "<div id='mensaje'>Credenciales Invalidas</div>";}
		}else{echo "<div id='mensaje'>Usuario Invalido</div>";}
	}else{@header("location:index.php");}
	ob_end_flush();
?>