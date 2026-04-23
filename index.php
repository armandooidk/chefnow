<?php
$conexion = new mysqli("localhost","root","","chefnow");

if($conexion->connect_error){
die("Error de conexion");
}

if(isset($_POST['reservar'])){

$chef_id = $_POST['chef_id'];
$chef_nombre = $_POST['chef_nombre'];
$precio = $_POST['precio'];
$usuario = $_POST['usuario'];
$fecha = $_POST['fecha'];

$query = "INSERT INTO reservas_app
(chef_id, chef_nombre, precio, usuario, fecha)
VALUES
('$chef_id','$chef_nombre','$precio','$usuario','$fecha')";

$conexion->query($query);

echo "<script>alert('Reserva realizada correctamente');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>

<title>ChefNow</title>

<style>

body{
margin:0;
font-family:'Segoe UI';
background:#f4f4f4;
}

/* SPLASH */

.splash{
position:fixed;
width:100%;
height:100vh;
background:#8B0000;
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
color:white;
z-index:9999;
text-align:center;
}

.splash img{
width:140px;
margin-bottom:20px;
border-radius:20px;
}

/* LOGIN */

.login{
display:none;
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 20px rgba(0,0,0,0.2);
width:300px;
}

input{
width:100%;
padding:10px;
margin:10px 0;
}

button{
padding:10px;
background:#8B0000;
color:white;
border:none;
cursor:pointer;
}

/* ADMIN */

.admin{
display:none;
}

.admin header{
background:#8B0000;
color:white;
padding:15px;
text-align:center;
font-size:22px;
}

.menu{
background:#333;
padding:10px;
position:relative;
}

.menu button{
background:#8B0000;
color:white;
}

.menuOpciones{
display:none;
background:white;
position:absolute;
top:45px;
left:10px;
box-shadow:0 0 10px rgba(0,0,0,0.2);
width:220px;
}

.menuOpciones a{
display:block;
padding:10px;
text-decoration:none;
color:black;
}

/* APP */

.app{
display:none;
}

/* HEADER */

header{
background:#8B0000;
color:white;
padding:20px;
text-align:center;
font-size:24px;
}

/* MENU APP */

.appMenu{
display:flex;
justify-content:center;
gap:40px;
background:white;
padding:15px;
box-shadow:0 2px 10px rgba(0,0,0,0.1);
font-weight:bold;
}

.appMenu div{
cursor:pointer;
}

/* HERO */

.hero{
background:url("https://images.unsplash.com/photo-1551218808-94e220e084d2");
background-size:cover;
background-position:center;
color:white;
text-align:center;
padding:120px 20px;
}

.hero h1{
font-size:50px;
}

/* SECTION */

.section{
max-width:1100px;
margin:auto;
padding:50px 20px;
}

/* GRID */

.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
}

/* CARD */

.card{
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
text-align:center;
}

/* CHEF */

.chef img{
width:100%;
border-radius:10px;
height:200px;
object-fit:cover;
}

.carrito{
background:#eee;
padding:20px;
margin-top:30px;
border-radius:10px;
}

.seccionApp{
display:none;
}

iframe{
border-radius:10px;
}

</style>

</head>

<body>

<!-- SPLASH -->

<div class="splash" id="splash">

<img src="https://i.postimg.cc/FHg553wn/5beb91c2-783c-4d62-8985-4ad69f779ab3.png">

<h1>ChefNow</h1>
<p>Tu hogar cinco estrellas</p>

</div>

<!-- LOGIN -->

<div class="login" id="login">

<h2>Login</h2>

<input type="text" id="usuario" placeholder="Usuario">
<input type="password" id="password" placeholder="Contraseña">

<button onclick="login()">Entrar</button>

</div>

<!-- ADMIN -->

<div class="admin" id="admin">

<header>ChefNow Admin</header>

<div class="menu">

<button onclick="toggleMenu()">☰ Sistema</button>

<div id="menuOpciones" class="menuOpciones">

<a href="BD2formularios.php">Agregar Empleado</a>
<a href="BD4tabla.php">Ver Empleados</a>
<a href="BD4tabla.php">Editar / Eliminar Empleados</a>
<a href="menus_admin.php">Administrar Menús</a>
<a href="ver_reservas.php">Ver Reservas</a>
<a href="mockup.php">Cerrar sesión</a>

</div>

</div>

<div style="padding:30px;text-align:center;">
<h2>Panel Administrador</h2>
<p>Administra empleados, menús y reservas.</p>
</div>

</div>

<!-- ENCUESTA -->

<div class="encuesta" id="encuesta">

<h2>Encuesta</h2>

<p>¿Qué comida prefieres?</p>

<input type="checkbox"> Italiana<br>
<input type="checkbox"> Mexicana<br>
<input type="checkbox"> Gourmet<br>

<br>

<p>Frecuencia de contratación</p>

<input type="radio" name="f"> Primera vez<br>
<input type="radio" name="f"> Ocasional<br>
<input type="radio" name="f"> Frecuente<br>

<br>

<button onclick="entrarApp()">Continuar</button>

</div>

<!-- APP -->

<div class="app" id="app">

<header>ChefNow</header>

<div class="appMenu">

<div onclick="mostrarSeccion('inicio')">Inicio</div>
<div onclick="mostrarSeccion('chefs')">Chefs</div>
<div onclick="mostrarSeccion('ofertas')">Ofertas</div>
<div onclick="mostrarSeccion('acerca')">Acerca</div>

</div>

<!-- INICIO -->

<div id="inicio" class="seccionApp" style="display:block">

<div class="hero">

<h1>Experiencia Gourmet en tu Casa</h1>

<p>Reserva chefs profesionales para cocinar en tu hogar</p>

<button onclick="mostrarSeccion('chefs')">Ver Chefs</button>

</div>

<div class="section">

<h2>¿Por qué ChefNow?</h2>

<div class="grid">

<div class="card">
<h3>Chefs profesionales</h3>
<p>Trabajamos con chefs certificados y con experiencia internacional.</p>
</div>

<div class="card">
<h3>Experiencia premium</h3>
<p>Disfruta comida gourmet sin salir de tu hogar.</p>
</div>

<div class="card">
<h3>Reservas fáciles</h3>
<p>Agenda tu experiencia culinaria en segundos.</p>
</div>

</div>

</div>

</div>

<!-- CHEFS -->

<div id="chefs" class="section seccionApp">

<h2>Chefs disponibles</h2>

<div class="grid">

<div class="card chef">

<img src="https://i.pinimg.com/736x/65/1f/ed/651fedaeb05b4c50bf974435484e8694.jpg">

<h3>Chef Carmy Berzatto</h3>

<p>Especialidad Italiana</p>

<p>$150</p>

<button onclick="agregarChef(1,'Chef Carmy Berzatto',150)">Agregar</button>

</div>

<div class="card chef">

<img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d">

<h3>Chef Juan</h3>

<p>Especialidad Mexicana</p>

<p>$120</p>

<button onclick="agregarChef(2,'Chef Juan',120)">Agregar</button>

</div>

<div class="card chef">

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnNhp-aSceFREKgSsHlUpdthvOr_z-W4G8Lg&s">

<h3>Chef Ana</h3>

<p>Especialidad Gourmet</p>

<p>$200</p>

<button onclick="agregarChef(3,'Chef Ana',200)">Agregar</button>

</div>

</div>

<div class="carrito">

<h3>Carrito</h3>

<p id="chefSeleccionado">Ningún chef seleccionado</p>

<form method="POST">

<input type="hidden" name="chef_id" id="chef_id">
<input type="hidden" name="chef_nombre" id="chef_nombre">
<input type="hidden" name="precio" id="precio">

<input type="text" name="usuario" placeholder="Tu nombre">

<input type="datetime-local" name="fecha">

<button name="reservar">Confirmar Reserva</button>

</form>

</div>

</div>

<!-- OFERTAS -->

<div id="ofertas" class="section seccionApp">

<h2>Ofertas Especiales</h2>

<div class="card">
20% de descuento en eventos familiares
</div>

<div class="card">
Promoción especial de chef gourmet los viernes
</div>

</div>

<!-- ACERCA -->

<div id="acerca" class="section seccionApp">

<h2>Acerca de ChefNow</h2>

<div class="grid">

<div class="card">

<h3>Misión</h3>

<p>Llevar experiencias gastronómicas profesionales a los hogares.</p>

</div>

<div class="card">

<h3>Visión</h3>

<p>Ser la plataforma líder de chefs privados en Latinoamérica.</p>

</div>

<div class="card">

<h3>Historia</h3>

<p>ChefNow nace con la idea de conectar chefs profesionales con personas que quieren vivir una experiencia culinaria única desde la comodidad de su hogar.</p>

</div>

<div class="card">

<h3>Ubicación de la sucursal</h3>

<p>Av. Innovación Gastronómica #245</p>

<p>San Pedro Garza García</p>

<p>Nuevo León, México</p>

</div>

</div>

<br>

<div class="card">

<h3>Encuéntranos aquí</h3>

<iframe src="https://www.google.com/maps?q=San+Pedro+Garza+Garcia+Nuevo+Leon&output=embed" width="100%" height="300"></iframe>

</div>

</div>

</div>

<script>

setTimeout(function(){

document.getElementById("splash").style.display="none";
document.getElementById("login").style.display="block";

},2000);

function login(){

let user=document.getElementById("usuario").value;
let pass=document.getElementById("password").value;

if(user=="admin" && pass=="1234"){

document.getElementById("login").style.display="none";
document.getElementById("admin").style.display="block";

}

else if(user=="usuario" && pass=="1234"){

document.getElementById("login").style.display="none";
document.getElementById("encuesta").style.display="block";

}

else{

alert("Datos incorrectos");

}

}

function toggleMenu(){

let menu=document.getElementById("menuOpciones");

menu.style.display = menu.style.display=="block" ? "none":"block";

}

function entrarApp(){

document.getElementById("encuesta").style.display="none";
document.getElementById("app").style.display="block";

}

function agregarChef(id,nombre,precio){

document.getElementById("chef_id").value=id;
document.getElementById("chef_nombre").value=nombre;
document.getElementById("precio").value=precio;

document.getElementById("chefSeleccionado").innerHTML=
"Chef seleccionado: "+nombre+" ($"+precio+")";

}

function mostrarSeccion(id){

let secciones=document.querySelectorAll(".seccionApp");

secciones.forEach(function(sec){

sec.style.display="none";

});

document.getElementById(id).style.display="block";

}

</script>

</body>
</html>