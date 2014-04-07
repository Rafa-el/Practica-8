<?php
require_once("funciones.php");

	$funcion = new funciones();
	$funcion->clave = $_POST["clave"];
	$funcion->nombre = $_POST["nombre"];
	$funcion->descripcion = $_POST["descripcion"];
	$funcion->precio = $_POST["precio"];
	$funcion->guardar();
			
?>