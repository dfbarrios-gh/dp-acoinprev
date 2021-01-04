<?php
    require_once('connection.php');
    if(!isset($_SESSION['ustatus'])){
        header("location:index.php");
    }else{
        if($_SESSION['ustatus']=='active'){
            if($_SESSION['userid']==1){ 
              header("location:administrador.php"); }
            else{
                $usrid = $_GET['usrid'];
                if(isset($usrid)){
                    $usrid=base64_decode($usrid);
                    if($usrid>=1&$usrid<=7){
                        $candidato=$usrid;
                        $query=mysql_query("select * from candidatos where cdtcodigo=$candidato;");
                        $r=mysql_fetch_assoc($query);
                        $nv=$r['cdtvotos']+1;
                        mysql_query("update candidatos set cdtvotos=$nv where cdtcodigo=$usrid;");                                      
                            header('refresh: 3; url=votante.php');
                            echo "<div id='msjexito'><img src='img/like.png'></img><br />¡Muy bien! Su voto ha sido registrado</div>";                     
                    }else{                                            
                            header('refresh: 3; url=votante.php');
                            echo "<div id='msjerror'><img src='img/warning.png'></img><br />Tu voto no se pudo registrar con exito. Intenta nuevamente.</div>";                 
                    }
                }else{                                       
                        header('refresh: 3; url=votante.php');
                        echo "<div id='msjerror'><img src='img/warning.png'></img><br />¿Estas intentando hacer fraude? <br/> En Colombia, esto es un delito!</div>";                   
                }
            }
        }else{header("location:index.php");}
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sufragando</title>
    <link rel='shortcut icon' href='img/fav.jpg'/>
            <link rel='stylesheet' type='text/css' href='estilo.css'/>
            <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans|Roboto" rel="stylesheet"/>
</head>
<body>
</body>
</html>