<?php

$mod = Mod($_POST["id"], $_POST["nombre"], $_POST["apellidos"], $_POST["esc"]);

function Mod($id ,$nombre, $apellidos, $esc){
	include 'conexion.php';
	$consulta = "UPDATE `prueba` SET `nombre` = '$nombre', `apellidos` = '$apellidos', `esc_proc` = '$esc'  WHERE `prueba`.`id` = '$id' ";
	$res = mysqli_query($conexion, $consulta);

	if ($res) {
		header('location:index.php');
	}
}

?>