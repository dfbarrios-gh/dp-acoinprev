<?php
	require_once('conexion.php');
	if(isset($_POST['inp%02%votar'])){
		if(isset($_SESSION['ustatus'])){
            if($_SESSION['ustatus']=='active'){
                if($_SESSION['userid']==1){ 
                  header("location:administrador.php"); }
                else{
                	$candidato=$usrid;
                	$query=mysql_query("select cdtvotos from candidatos where cdtcodigo=$candidato;");
                	$r=mysql_fetch_assoc($query);
                	$nv=$r['cdtvotos']+1;
                	mysql_query("UPDATE candidatos SET cdtvotos=$nv;");
                	header('location:votante.php');
                }
            }
        }
	}else{header("location:index.php");}
	
?>