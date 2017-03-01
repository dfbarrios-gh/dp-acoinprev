<?php
require_once("conexion.php");
      if(isset($_SESSION['ustatus'])){
            if($_SESSION['ustatus']=='active'){
                if($_SESSION['userid']==1){ 
                  header("location:administrador.php");  }
                        else if($_SESSION['userid']==2){
                              header("location:votante.php"); }
            }
      }
?>
<!DOCTYPE html>
<html lang='es-co'>
      <head>
            <meta charset='utf-8'/>
            <title>Sv Simple Elections</title>
            <link rel='shortcut icon' href='img/fav.jpg'/>
            <link rel='stylesheet' type='text/css' href='estilo.css'/>

            <!-- Cargando Fuentes -->
            <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans|Roboto" rel="stylesheet">
            <!-- Fin carga de fuentes -->

      </head>      
      <body>
            <header>
                  <h1>Elecciones Personero Estudiantil</h1>
                  <h5>Sv Simple Elections</h5>
            </header>
                  <div id='contenedor'>                                        
                        <form name='frmsignip' method='POST' autocomplete='OFF'>
                         <fieldset>
                              <legend>Inicia Sesión</legend>
                              <label for='lblusername'>Usuario</label>
                                    <br/>
                              <input type='text' name='inpusername' placeholder='Digita Usuario o Nickname' class='est' required/>
                              <br/><br/>
                              <label for='lblpassword'>Contraseña</label>
                                    <br/>
                              <input type='password' name='inppassword' placeholder='Digita tu contraseña' class='pass' required/>
                              <br/><br/> 
                              <input type='hidden' name='frm%00@si'/>
                              <input type='submit' name='sbmsignin' value='Ingresar'
                                     onclick="this.form.action='login.php'; this.form.submit();"/>
                              <input type='reset' name='rstclean' value='Reestablecer'/>
                        </fieldset>
                        </form>                        
                  </div>
      </body>
</html>