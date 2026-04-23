<?php 
$BD1conexion = new mysqli('localhost','root','','chefnow');

if($BD1conexion->connect_error){
    die("Error de conexión: " . $BD1conexion->connect_error);
}
?>