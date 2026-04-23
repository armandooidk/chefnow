<?php

$conexion = new mysqli("localhost","root","","chefnow");

$nombre = $_POST['nombre_menu'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$tipo = $_POST['tipo_menu'];
$tiempo = $_POST['tiempo_preparacion'];

$query="INSERT INTO menus
(nombre_menu,descripcion,precio,tipo_menu,tiempo_preparacion)

VALUES
('$nombre','$descripcion','$precio','$tipo','$tiempo')";

$resultado=$conexion->query($query);

if($resultado){

header("Location: menu_tabla.php");

}else{

echo "Error al guardar";

}
?>