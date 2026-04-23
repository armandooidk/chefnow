<?php

$conexion = new mysqli("localhost","root","","chefnow");

$id=$_GET['id'];

$query="DELETE FROM menus WHERE id_menu='$id'";

$resultado=$conexion->query($query);

if($resultado){

header("Location: menu_tabla.php");

}else{

echo "Error al eliminar";

}

?>