<?php
require_once('conexion.php');
if(isset($_SESSION['ustatus'])){
        if($_SESSION['ustatus']=='active'){
            if($_SESSION['userid']==1){ 
              header("location:administrador.php"); }
            else{
            	if(isset($usrid)){
            		if($usrid>=1&$usrid<=6){
	            		$candidato=$usrid;
		            	$query=mysql_query("select cdtvotos from candidatos where cdtcodigo=$candidato;");
		            	$r=mysql_fetch_assoc($query);
		            	$nv=$r['cdtvotos']+1;
		            	mysql_query("UPDATE candidatos SET cdtvotos=$nv where cdtcodigo=$usrid;");
		            	header('location:votante.php');
            		}else{ echo "<div id='msjerror'>Tu voto no se pudo registrar con exito. Intenta nuevamente</div>";}
            	}else{ echo "<div id='msjerror'>¿Estas intentando hacer fraude? <br/> En Colombia, esto es un delito</div>";}
            }
        }else{header("location:index.php");}
    }else{header("location:index.php");}
?>