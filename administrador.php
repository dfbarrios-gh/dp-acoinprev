<?php
require_once("conexion.php");
   if(isset($_SESSION['ustatus'])){
            if($_SESSION['ustatus']!='active'){
                  header('location:index.php');
            }
            if($_SESSION['userid']==2){ 
                  header("location:votante.php");  }
      }else{ header("location:index.php"); }     
?>
<!DOCTYPE html>
<html lang='es-co'>
      <head>
            <meta charset='utf-8'/>
            <title>Sv Simple Elections</title>
             <link rel='shortcut icon' href='img/fav.jpg'/>
            <link rel='stylesheet' type='text/css' href='estilo.css'/>
      </head>      
      <body>
            <header>
                  <h1>Elecciones personero estudiantil</h1>
                  <h5>ACOINPREV</h5>
            </header>
            <div id='imagecandidates'>                                        
               <form method='POST'>
                  <input type='button' name='ssesionv' value='Cerrar Sesion' 
                    onclick="this.form.action='csesion.php'; this.form.submit();"/>
               </form>
            </div>
      </body>
</html>