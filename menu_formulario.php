<?php
$conexion = new mysqli("localhost","root","","chefnow");

if($conexion->connect_error){
die("Error de conexión");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Agregar Menu</title>
</head>

<body>

<center>

<h2>Agregar Menu</h2>

<form action="menu_guardar.php" method="POST">

<input type="text" name="nombre_menu" placeholder="Nombre del menu" required><br><br>

<input type="text" name="descripcion" placeholder="Descripcion"><br><br>

<input type="number" step="0.01" name="precio" placeholder="Precio"><br><br>

<input type="text" name="tipo_menu" placeholder="Tipo de menu"><br><br>

<input type="number" name="tiempo_preparacion" placeholder="Tiempo preparación (min)"><br><br>

<input type="submit" value="Guardar Menu">

</form>

<br>

<a href="menu_tabla.php">Ver Menus</a>

</center>

</body>
</html>