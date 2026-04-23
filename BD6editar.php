<?php

include 'BD1conexion.php';

$id=$_GET['id'];

$query="SELECT * FROM empleados WHERE ID='$id'";

$resultado=$BD1conexion->query($query);

$fila=$resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
<title>Editar</title>
</head>

<body>

<center>

<h2>Editar Empleado</h2>

<form action="BD7actualizar.php" method="POST">

<input type="hidden" name="id" value="<?php echo $fila['ID']; ?>">

<input type="text" name="nombre" value="<?php echo $fila['NOMBRE']; ?>"><br><br>

<input type="text" name="apellido" value="<?php echo $fila['APELLIDO']; ?>"><br><br>

<input type="text" name="correo" value="<?php echo $fila['CORREO']; ?>"><br><br>

<input type="submit" value="Actualizar">

</form>

</center>

</body>
</html>