<?php

include "includes/conexion_bd.php";
session_start();


extract($_POST);
if(!isset($_SESSION['username']) || $_SESSION['categoria'] == 'profesor'){
	header('location:index.php');
} else if($acepta == no) {
		header('location:admin_usuarios.php');

	} else {

		$nombre = $_POST['nombre'];

		$sql_elim = "DELETE FROM tbl_usuarios WHERE usu_usuario='".$nombre."'";
	
		mysqli_query($conexion, $sql_elim);


		header('location:admin_usuarios.php');
	

}

?>


