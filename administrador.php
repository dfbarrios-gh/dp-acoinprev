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
                     <form name='frmcandidates' method='POST'>                     
                        <?php
                           require_once('conexion.php');
                           $qr=mysql_query("select * from candidatos;");
                           echo "<table>
                                 <tr>
                                    <th colspan='7'>Resultado</th>
                                 </tr>";
                           echo "<tr>";
                           for($i=1;$i<=7;$i++){
                              $imgurl="img/candidates/cdt@0".$i.".jpg";
                              $ncand="Candidato #".$i;                               
                                 echo "<td><img src=$imgurl tile='$ncand'></img></td>";                              
                           }
                           echo "</tr><tr>";
                           while($r=mysql_fetch_assoc($qr)){
                               echo "<td>".
                                       $r['cdtnombres']." ".$r['cdtapellido']."</br>Total Votos: ".$r['cdtvotos']
                                    ."</td>";
                           }

                            echo "</tr></table>";
                        ?>                           
                      <input type='button' name='btncerrarsesion' value='Cerrar Sesión' id='btncerrarsesion' 
                        onclick="this.form.action='csesion.php'; this.form.submit();"/>    
                     </form>
               </div>
      </body>
</html>