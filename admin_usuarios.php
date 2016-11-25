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
                <h1> <font face="Helvetica" COLOR="#0079BA">Administrar Usuarios</font></h1>
            </div>
            <div class="enc_3">
                <font face="Helvetica" COLOR="#0079BA"><span ria-hidden="true"><H4>USUARIO: <?php echo $_SESSION['username'];?> (<a class='logout' href="includes/cerrar.php">Salir</a>)</H4> </span></font>
            </div>
            
    </div>

    <div class="menu-usu">
    		    
	    <?php

		$resultado=mysqli_query($conexion, "SELECT * FROM tbl_usuarios");
		

		echo "<table class='menu'>";
			echo "<th> <a class='menu' href='admin_nuevousu.php'>
			NUEVO USUARIO</a> / <a class='menu2' href='admin.php'>VOLVER AL ADMINISTRADOR DE RECURSOS</a>
			</th>";
			echo "</table>";

			echo "<table class='menu'>";
			echo "<tr>
				<th>USUARIOS:</th>
				<th>OPCIONES:</th>
				</tr>";

		if (mysqli_num_rows($resultado) != 0){
			while ($nombres = mysqli_fetch_array($resultado)) {
			$nombre = $nombres['usu_usuario'];


			
				echo "<tr>
				<td> $nombre </td>
				<td> <a class='menu2' href='admin_modusu.php?modificar_este_usuario=$nombre'>EDITAR</a> / <a class='menu' href='admin_elimusu.php?eliminar_este_usuario=$nombre'>ELIMINAR</a> </td>
				
				</tr>";
			

	

			//echo "$nombre";
		}
		}
		
		echo "</table>";


		?>
	    
    </div>
   
 </body>
</html>
