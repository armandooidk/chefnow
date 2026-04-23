<?php

include 'BD1conexion.php';

$id=$_GET['id'];

$query="DELETE FROM empleados WHERE ID='$id'";

$resultado=$BD1conexion->query($query);

if($resultado){

header("Location: BD4tabla.php");

}else{

echo "Error al eliminar";

}

?>