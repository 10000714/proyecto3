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
                <h1> <font face="Helvetica" COLOR="#0079BA">Modificar Usuario</font></h1>
            </div>
            <div class="enc_3">
                <font face="Helvetica" COLOR="#0079BA"><span ria-hidden="true"><H4>USUARIO: <?php echo $_SESSION['username'];?> (<a class='logout' href="includes/cerrar.php">Salir</a>)</H4> </span></font>
            </div>
            
    </div>

    <div class="menu-usu">
    		    
	    <?php

	   

	    	echo "<table class='menu'>";
			echo "<th> <a class='menu2' href='admin_usuarios.php'>VOLVER AL ADMINISTRADOR DE USUARIOS</a> 
			</th>";
			echo "<tr>";
			echo "<td>Estás modificando el usuario: $modificar_este_usuario</td>";
			echo "</tr>";
			echo "</table>";				

		?>

<div class="login-form">
     <form action="admin_modusu.proc.php" method="post" accept-charset="utf-8">
     	

    	<div class="form-group ">
       	<input type="text" class="form-control" name="nuevo_usu" placeholder="Nuevo usuario" id="username">
       	<input type="hidden" name="nombre" value="<?php echo "$modificar_este_usuario" ?>">
       	<i class="fa fa-user"></i>
     	</div>
     	<div class="form-group ">
       	<input type="password" class="form-control" name="nueva_pwd" placeholder="Nueva contraseña" id="password">
       	<i class="fa fa-lock"></i>
     	</div>
        
      <div class="radio-categoria">  
      <input type="radio" name="nueva_cat" value="profesor">Profesor
      </div>

      <div class="radio-categoria">  
      <input type="radio" name="nueva_cat" value="administrador">Administrador
      </div>


        <br/>
     	<input type="submit" class="log-btn" name="submit" value="MODIFICAR"></input>
     </form>
    
</div>



	    
    </div>
   
 </body>
</html>
