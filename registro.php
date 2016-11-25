<?php

session_start();
include "includes/login.php";
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Titanium Registro</title>
  
  
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


<div class="login-form">
    <h1><img src="img/logo.png"></h1>
     <form action="registro.proc.php" method="post" accept-charset="utf-8">
     
     <input type="hidden" name="nombre" value="<?php echo "$new_usuario" ?>">
      

    	<div class="form-group ">
       	<input type="text" class="form-control" name="username" placeholder="Usuario" id="username">
        <i class="fa fa-user"></i>
     	</div>
     	<div class="form-group ">
       	<input type="password" class="form-control" name="password" placeholder="Contraseña" id="password">
       	<i class="fa fa-lock"></i>
     	</div>
      <input type="hidden" name="categoria" value="profesor">
        
      


        <br/>
     	<input type="submit" class="log-btn" name="submit" value="REGISTRAR"></input>
      <br/><br/>
     <div class="radio-categoria-center">¿Ya tienes cuenta? <a class='registro' href="index.php">Inicia sesión</a>.</div>
     </form>
    
</div>
	
	    
    </div>
    
 </body>
</html>
