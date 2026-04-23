<?php
$conexion = new mysqli("localhost","root","","chefnow");
?>

<!DOCTYPE html>
<html>
<head>
<title>Menus</title>
</head>

<body>

<center>

<h2>Menus del sistema</h2>

<a href="menu_formulario.php">Agregar Menu</a>

<br><br>

<table border="1">

<tr>

<th>ID</th>
<th>Nombre</th>
<th>Descripcion</th>
<th>Precio</th>
<th>Tipo</th>
<th>Tiempo</th>
<th>Editar</th>
<th>Eliminar</th>

</tr>

<?php

$query="SELECT * FROM menus";

$resultado=$conexion->query($query);

while($fila=$resultado->fetch_assoc()){

echo "<tr>";

echo "<td>".$fila['id_menu']."</td>";
echo "<td>".$fila['nombre_menu']."</td>";
echo "<td>".$fila['descripcion']."</td>";
echo "<td>".$fila['precio']."</td>";
echo "<td>".$fila['tipo_menu']."</td>";
echo "<td>".$fila['tiempo_preparacion']."</td>";

echo "<td>
<a href='menu_editar.php?id=".$fila['id_menu']."'>
Editar
</a>
</td>";

echo "<td>
<a href='menu_eliminar.php?id=".$fila['id_menu']."'>
Eliminar
</a>
</td>";

echo "</tr>";

}

?>

</table>

</center>

</body>
</html>