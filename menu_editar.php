<?php

$conexion = new mysqli("localhost","root","","chefnow");

$id=$_GET['id'];

$query="SELECT * FROM menus WHERE id_menu='$id'";

$resultado=$conexion->query($query);

$fila=$resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
<title>Editar Menu</title>
</head>

<body>

<center>

<h2>Editar Menu</h2>

<form action="menu_actualizar.php" method="POST">

<input type="hidden" name="id" value="<?php echo $fila['id_menu']; ?>">

<input type="text" name="nombre_menu" value="<?php echo $fila['nombre_menu']; ?>"><br><br>

<input type="text" name="descripcion" value="<?php echo $fila['descripcion']; ?>"><br><br>

<input type="number" step="0.01" name="precio" value="<?php echo $fila['precio']; ?>"><br><br>

<input type="text" name="tipo_menu" value="<?php echo $fila['tipo_menu']; ?>"><br><br>

<input type="number" name="tiempo_preparacion" value="<?php echo $fila['tiempo_preparacion']; ?>"><br><br>

<input type="submit" value="Actualizar">

</form>

</center>

</body>
</html>