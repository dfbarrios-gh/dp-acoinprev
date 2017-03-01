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

            <!-- Cargando Fuentes -->
            <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans|Roboto" rel="stylesheet">
            <!-- Fin carga de fuentes -->
      </head>      
      <body>
            <header>
                  <h1>Elecciones personero estudiantil</h1>
                  <h5>ACOINPREV</h5>
            </header>
                  <div id='imagecandidates'>                                        
                        <form name='frmcandidates' method='POST'>
                              <a href='' title='#1 Angie Rojas'>
                                    <img title='Angie Rojas #1' src='img/candidates/cdt@01.jpg' ></img>
                              </a>
                              <a href='' title='#2 Daniela Tazama'>
                                    <img title='Angie Rojas #2' src='img/candidates/cdt@02.jpg' ></img>
                              </a>
                              <a href='' title='#3 Ashley Higua'>
                                    <img title='Ashley Higua #3' src='img/candidates/cdt@03.jpg' ></img>
                              </a>
                              <a href='' title='#4 Tatiana Fino'>
                                    <img title='Tatiana Fino #4' src='img/candidates/cdt@04.jpg' ></img>
                              </a>
                              <a href='' title='#5 Bryan Torres'>
                                    <img title='Bryan Torres #5' src='img/candidates/cdt@05.jpg' ></img>
                              </a>
                              <a href='' title='#6 Heidi Mayorga'>
                                    <img title='Heidi Mayorga #6' src='img/candidates/cdt@06.jpg' ></img>
                              </a>
                          </br></br>
                          <input type='button' name='btnresultados' value='Resultados'/>
                          <input type='button' name='btncerrarsesion' value='Cerrar Sesión'/>    
                        </form>
                  </div>
      </body>
</html>