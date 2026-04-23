<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario</title>
</head>
<?php include("admin_menu.php"); ?>
<body>

<center>

<form action="BD3guardar.php" method="POST">

<br><br><br>

<input type="text" required name="nombre" placeholder="Nombre"><br><br>

<input type="text" required name="apellido" placeholder="Apellido"><br><br>

<input type="text" required name="correo" placeholder="Correo"><br><br>

<input type="submit" value="Aceptar">

</form>

</center>

</body>
</html>