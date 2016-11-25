<?php

include "includes/conexion_bd.php";
session_start();

if(!isset($_SESSION['username']) || $_SESSION['categoria'] == 'profesor'){
	header('location:index.php');
} else {

	extract($_POST);

		$nuevo_usu = $_POST['nuevo_usu'];
		$nombre = $_POST['nombre'];
		
		$Ssql = "UPDATE tbl_usuarios SET usu_usuario='$nuevo_usu', usu_pwd='$nueva_pwd', usu_categoria='$nueva_cat' WHERE usu_usuario='".$nombre."'";

		mysqli_query($conexion, $Ssql);

		
		
		header('location:admin_usuarios.php');


}


