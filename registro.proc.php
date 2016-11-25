<?php

include "includes/conexion_bd.php";


	extract($_POST);

	$consulta="select * from tbl_usuarios where usu_usuario =$username";
	$resultado=mysql_query($consulta);
	if (mysql_num_rows($resultado)>0){
		echo "El usuario ya existe";
	} else {
		mysqli_query($conexion, "INSERT INTO tbl_usuarios VALUES (null, '$username', '$password', '$categoria')");
		header('location:index.php');
	}


