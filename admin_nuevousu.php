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
                <h1> <font face="Helvetica" COLOR="#0079BA">Nuevo Usuario</font></h1>
            </div>
            <div class="enc_3">
                <font face="Helvetica" COLOR="#0079BA"><span ria-hidden="true"><H4>USUARIO: <?php echo $_SESSION['username'];?></H4> </span></font>
            </div>
            
    </div>

    <div class="menu-usu">
    		    
	    <?php

	   


	    	echo "<table class='menu'>";
			echo "<th> <a class='menu2' href='admin_usuarios.php'>VOLVER AL ADMINISTRADOR DE USUARIOS</a>
			</th>";
			echo "</table>";


				//RECOMENDABLE USAR UN FORMULARIO
				// REALIZAR UN INSERT EN LA BASE DE DATOS
			echo "<table class='menu'>";
			echo "<tr>
				<th style='text-align:right;'>USUARIOS</th>
				<th>ATRIBUTOS:</th>
				</tr>";
			
				echo "<tr>
				<td style='text-align:right;'> Nombre: </td>
				<td> Campo nombre usuario - name:usu_usuario </td>
				
				</tr>";

				echo "<tr>
				<td style='text-align:right;'> Contraseña: </td>
				<td> Campo contraseña - name:usu_pwd </td>
				
				</tr>";

				echo "<tr>
				<td style='text-align:right;'> Categoria: </td>
				<td> Campo categoria - name:usu_categoria </td>
				
				</tr>";

				echo "<tr>
				<td> </td>
				<td> Botón enviar </td>
				
				</tr>";

			//echo "<th></th>";

			//echo "<td>" . $recurso['usu_usuario'] . "</td>";
			

	echo "</table>";			
		?>
	    
    </div>
   
 </body>
</html>
