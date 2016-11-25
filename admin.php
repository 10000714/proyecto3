<?php
include "includes/conexion_bd.php";
session_start();
if(!isset($_SESSION['username']) || $_SESSION['categoria'] == 'profesor'){
	header('location:index.php');
}
include "includes/login.php";
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Titanium Admin</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  	<script type="text/javascript">
	function insert_esta(id, nombre, descripcion, estado){

		// alert(id + id_usu);
		window.location = 'admin.php?&rec_id='+id+'&rec_nombre='+nombre+'&rec_descripcion='+descripcion+'&rec_estado='+estado;
		
	}

	
	</script>    

  
</head>



<body>
	<div class="encabezado">
			<div class="enc_1">
			<img src="img/logo1.png">
			</div>
			<div class="enc_2">
                <h1> <font face="Helvetica" COLOR="#0079BA">Administrar Recursos</font></h1>
            </div>
            <div class="enc_3">
                <font face="Helvetica" COLOR="#0079BA"><span ria-hidden="true"><H4>USUARIO: <?php echo $_SESSION['username'];?> (<a class='logout' href="includes/cerrar.php">Salir</a>)</H4> </span>
                <br/>
                
                </font>
            </div>
            
    </div>

    <div class="menu-usu">
    		    
	    <?php	
	    	echo "<table class='menu' style='margin-bottom: 20px; margin-top: 20px';>";
			echo "<th> <a class='menu2' href='admin_usuarios.php'>ADMINISTRAR USUARIOS</th>";
			echo "</table>";
		?>
	    
    </div>
  
    <div class="estadistica">
 	
 
	<?php


		extract($_REQUEST);

		$sql = "SELECT rec_nombre, rec_descripcion, rec_id, rec_estado FROM tbl_recursos ORDER BY rec_id";

		$recursos = mysqli_query($conexion, $sql);

		//Comprobamos la sentencia sql
		// echo $sql;

		// print_r($recursos);


		if (mysqli_num_rows($recursos)>0) {
			
			echo "<br/>";

			while ($recurso = mysqli_fetch_array($recursos)) {
				echo '<div class="espaciosindiv">';
				echo "<div class='titulo1'>" .$recurso['rec_nombre'] . "</div>";
				echo "<div class='descripcion'>" .$recurso['rec_descripcion'] . "</div>";
				
				$rec_id = $recurso['rec_id'];
				$rec_nombre = $recurso['rec_nombre'];
				$rec_descripcion = $recurso['rec_descripcion'];
				$rec_estado = $recurso['rec_estado'];
	
				echo '<div class="boton"><button type="button" class="log-btn" name="submit"  onclick="insert_esta(\''.$rec_id. '\',\''.$rec_nombre. '\', \''.$rec_descripcion. '\',\''.$rec_estado. '\' )">Estadística</button></div>';
				

				echo "</div>";

			}
		} else {
			echo "Lo sentimos en estos momentos el colegio no dispone de recursos";
		}

	?>
<br/>
</div>


 <div class="estadistica">
	<?php

	if (isset($_REQUEST['rec_id'])){

	extract($_REQUEST);

	$sql = "SELECT DISTINCT tbl_usuarios.usu_usuario, tbl_reservas.res_finicio, tbl_reservas.res_ffin FROM tbl_reservas, tbl_usuarios where tbl_reservas.rec_id =$rec_id AND tbl_reservas.usu_id = tbl_usuarios.usu_id GROUP BY tbl_reservas.res_id";

	$recursos = mysqli_query($conexion, $sql);

	echo "<table style='margin-bottom: 5px; margin-top: 20px'>";
	echo "<th>".$rec_nombre." - ".$rec_descripcion. "</th>";
	echo "</table>";
	echo "<table style='margin-bottom: 5px'>";
	echo "<th>".mysqli_num_rows($recursos)." registros encontrados - Estado actual: ".$rec_estado. "</th>";
	echo "</table>";

	
	echo "<table>

			<tr>
				<th>Usuario</th>
				<th>Fecha inicio</th>
				<th>Fecha fin</th>
			</tr>";
	
	for ($fila=1; $fila<=5; $fila++) {
			echo "<tr>";
		for ($celda=1; $celda<=5; $celda++) {
			while ($recurso = mysqli_fetch_array($recursos)) {

				echo "<td>".$recurso['usu_usuario'] . "</td>";
				echo "<td>".$recurso['res_finicio'] . "</td>";
				echo "<td>".$recurso['res_ffin'] . "</td>";
				echo "</tr>" ;
			}
		
		}

		
	}

	echo "</tabla>";
 	}
 	?>
 </div>
</body>
</html>
