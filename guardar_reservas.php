<?php

$conexion = new mysqli("localhost","root","","chefnow");

if($conexion->connect_error){
die("Error de conexion");
}

$chef_id = $_POST['chef_id'];
$chef_nombre = $_POST['chef_nombre'];
$precio = $_POST['precio'];
$usuario = $_POST['usuario'];
$fecha = $_POST['fecha'];

$query = "INSERT INTO reservas_app
(chef_id, chef_nombre, precio, usuario, fecha)
VALUES
('$chef_id','$chef_nombre','$precio','$usuario','$fecha')";

$resultado = $conexion->query($query);

if($resultado){

echo "<script>
alert('Reserva guardada correctamente');
window.location='mockup.php';
</script>";

}else{

echo "Error al guardar";

}

?>