<?php
require_once("connection.php");
   if(isset($_SESSION['ustatus'])){
            if($_SESSION['ustatus']!='active'){
                  header('location:index.php');
            }
            if($_SESSION['userid']==1){ 
                  header("location:administrador.php");  }
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
            <form method='POST'>
                  <input type='button' name='ssesiona' value='Cerrar Sesion' 
                     onclick="this.form.action='csesion.php'; this.form.submit();" id="btncerrarsesion"/>
            </form>

            <div id='imagecandidates' class="centrarCaja">                                        
               <a href='sufragar.php?usrid=MQ==' title='#1 Angie Rojas'>
                  <img title='Angie Rojas #1' src='img/candidates/cdt@01.jpg' ></img>
               </a>
               <a href='sufragar.php?usrid=Mg==' title='#2 Daniela Tazama'>
                  <img title='Angie Rojas #2' src='img/candidates/cdt@02.jpg' ></img>
               </a>
               <a href='sufragar.php?usrid=Mw==' title='#3 Ashley Higua'>
                  <img title='Ashley Higua #3' src='img/candidates/cdt@03.jpg' ></img>
               </a>
               <a href='sufragar.php?usrid=NA==' title='#4 Tatiana Fino'>
                  <img title='Tatiana Fino #4' src='img/candidates/cdt@04.jpg' ></img>
               </a>
               <a href='sufragar.php?usrid=NQ==' title='#5 Bryan Torres'>
                  <img title='Bryan Torres #5' src='img/candidates/cdt@05.jpg' ></img>
               </a>
               <a href='sufragar.php?usrid=Ng==' title='#6 Heidi Mayorga'>
                  <img title='Heidi Mayorga #6' src='img/candidates/cdt@06.jpg' ></img>
               </a>
                <a href='sufragar.php?usrid=Nw==' title='Voto en Blanco' id="votoBlanco">
                  <img title='Voto En Blanco #7' src='img/vote.png' ></img><br>
                  <h4>Voto en Blanco</h4>                  
               </a>
               
            </div>
      </body>
</html>