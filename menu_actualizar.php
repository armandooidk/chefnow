<?php

$conexion = new mysqli("localhost","root","","chefnow");

$id=$_POST['id'];
$nombre=$_POST['nombre_menu'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$tipo=$_POST['tipo_menu'];
$tiempo=$_POST['tiempo_preparacion'];

$query="UPDATE menus SET

nombre_menu='$nombre',
descripcion='$descripcion',
precio='$precio',
tipo_menu='$tipo',
tiempo_preparacion='$tiempo'

WHERE id_menu='$id'";

$resultado=$conexion->query($query);

if($resultado){

header("Location: menu_tabla.php");

}else{

echo "Error al actualizar";

}

?>