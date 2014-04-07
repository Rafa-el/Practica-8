<!DOCTYPE HTML>
<?php
require_once ("Tabla.php");
require_once ("funciones.php");
?>
<html>
	<title>Practica 8</title>
	<h4><p align="center";>Practica 8</p></h4>
	<body>
	<?php
		$obj = new funciones();
		$result = $obj->obtenerTodos();
		$tabla = new Tabla();
		$tabla->producto = $result;
		$tabla->creaTabla();
	?>
	</body>
</html>