<?php
include("conexion.php");

$sql="SELECT COUNT(*) total FROM reservas";

$resultado=$BD1conexion->query($sql);
$fila=$resultado->fetch_assoc();
?>

<h2>Estadísticas del sistema</h2>

<h3>Total de reservas:</h3>

<p style="font-size:40px;color:red;">
<?php echo $fila['total']; ?>
</p>