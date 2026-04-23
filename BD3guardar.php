<?php

include 'BD1conexion.php';

$Nombre = $_POST['nombre'] ?? '';
$Apellido = $_POST['apellido'] ?? '';
$Correo = $_POST['correo'] ?? '';

$query = "INSERT INTO empleados (nombre, apellido, correo)
VALUES ('$Nombre','$Apellido','$Correo')";

$resultado = $BD1conexion->query($query);

if($resultado){
    header("Location: BD4tabla.php");
}else{
    echo "Error al guardar los datos";
}

?>