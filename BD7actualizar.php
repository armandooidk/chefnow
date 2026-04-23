<?php

include 'BD1conexion.php';

$id=$_POST['id'];
$Nombre=$_POST['nombre'];
$Apellido=$_POST['apellido'];
$Correo=$_POST['correo'];

$query="UPDATE empleados SET
NOMBRE='$Nombre',
APELLIDO='$Apellido',
CORREO='$Correo'
WHERE ID='$id'";

$resultado=$BD1conexion->query($query);

if($resultado){

header("Location: BD4tabla.php");

}else{

echo "Error al actualizar";
}

?>