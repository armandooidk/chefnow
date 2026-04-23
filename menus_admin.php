<?php
$conexion = new mysqli("localhost","root","","chefnow");

if($conexion->connect_error){
die("Error de conexion");
}

$resultado = $conexion->query("SELECT * FROM menus");
?>

<!DOCTYPE html>
<html>
<head>

<title>Administrar Menús</title>

<style>
body{
font-family:Arial;
background:#f4f4f4;
margin:0;
}

.container{
padding:30px;
}

table{
width:100%;
border-collapse:collapse;
background:white;
}

th,td{
padding:10px;
border:1px solid #ddd;
text-align:center;
}

th{
background:#8B0000;
color:white;
}

</style>

</head>

<body>

<?php include("admin_menu.php"); ?>

<div class="container">

<h2>Menús Disponibles</h2>

<table>

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()){ ?>

<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td>$<?php echo $fila['precio']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>