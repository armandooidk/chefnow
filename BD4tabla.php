<!DOCTYPE html>
<html>
<head>
<title>Empleados</title>
</head>
<?php include("admin_menu.php"); ?>
<body>

<center>

<h2>Tabla de Empleados</h2>

<a href="BD2formularios.php">Agregar Empleado</a>

<br><br>

<table border="1">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Correo</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>

<?php

include 'BD1conexion.php';

$query="SELECT * FROM empleados";

$resultado=$BD1conexion->query($query);

while($fila=$resultado->fetch_assoc()){

echo "<tr>";

echo "<td>".$fila['ID']."</td>";
echo "<td>".$fila['NOMBRE']."</td>";
echo "<td>".$fila['APELLIDO']."</td>";
echo "<td>".$fila['CORREO']."</td>";

echo "<td>
<a href='BD6editar.php?id=".$fila['ID']."'>Editar</a>
</td>";

echo "<td>
<a href='BD5eliminar.php?id=".$fila['ID']."'>Eliminar</a>
</td>";

echo "</tr>";

}

?>

</table>

</center>

</body>
</html>