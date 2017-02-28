<?php
ob_start();
	require_once('conexion.php');
	require_once('busqueda.php');
	if(isset($_POST['frm%01@ca'])){
		$est=$_POST['inpestudiante'];
		$rE=mysql_query("SELECT estudiantes.estcodigo as CODIGO, estudiantes.estnombres as NOMBRES, 
			estudiantes.estapellidos as APELLIDOS, cursos.crsnombre as CURSO 
			from estudiantes,cursos where estudiantes.estapellidos like '%$est%' order by estapellidos");
		if(mysql_num_rows($rE)!=0){
			echo "				
				<form method='POST' action='votacion.php'>
				<table>
				<tr>
					<th colspan='5'>Estudiantes</th>
				</tr>
				<tr>
					<th>CODIGO</th>
					<th>APELLIDOS</th>
					<th>NOMBRES</th>
					<th>CURSO</th>
					<th>ACCIONES</th>
				</tr>";
			while($r=mysql_fetch_assoc($rE)){
				echo "<tr>
						<td>".$r['CODIGO']."</td>
						<td>".$r['NOMBRES']."</td>
						<td>".$r['APELLIDOS']."</td>
						<td>".$r['CURSO']."</td>
						<td><input name='inpvotante' type='submit'
							value='V'/></td>
					</tr>";
			}
			echo "</table></form>";
		}else{echo "<div id='mensaje'>No se encontraron registros</div>";}

	}else{
		if($_SESSION['ustatus']=='active'){
			header("location:busqueda.php");
		}else{
			header("location:index.php");
		}
	}
ob_end_flush();
?>