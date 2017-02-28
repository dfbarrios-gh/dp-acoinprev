<?php
require_once("conexion.php");
      if(isset($_SESSION['ustatus'])){
            if($_SESSION['ustatus']!='active'){
                  header('location:index.php');
            }
      }else{header("location:index.php");}
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
                  <h5>Sv Simple Elections</h5>
            </header>
                  <div id='contenedor'>                                        
                        <form name='frmsearch' method='POST' autocomplete='OFF'>
                         <fieldset>
                              <legend>Busqueda</legend>
                              <label for='lblestudiante'>Apellidos Estudiante</label>
                                    <br/>
                              <input type='text' name='inpestudiante' placeholder='Apellidos de estudiante' class='est' required/>
                              <input type='hidden' name='frm%01@ca'/>
                                    <br/>
                              <input type='button' name='sbmsearch' value='Buscar'
                                     onclick="this.form.action='busqueda-est.php'; this.form.submit();"/>
                              <input type='button' name='btcerrar' value='Salir'
                                     onclick="this.form.action='csesion.php'; this.form.submit();"/>
                               </br>
                        </form>                        
                  </div>
      </body>
</html>