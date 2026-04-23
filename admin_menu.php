<header>ChefNow Admin</header>

<style>

.menu{
background:#333;
padding:10px;
position:relative;
}

.menu button{
background:#8B0000;
border:none;
padding:10px;
color:white;
cursor:pointer;
}

.menuOpciones{
display:none;
background:white;
position:absolute;
top:45px;
left:10px;
box-shadow:0 0 10px rgba(0,0,0,0.2);
width:220px;
z-index:999;
}

.menuOpciones a{
display:block;
padding:10px;
text-decoration:none;
color:black;
border-bottom:1px solid #eee;
}

.menuOpciones a:hover{
background:#f4f4f4;
}

</style>

<div class="menu">

<button onclick="toggleMenu()">☰ Sistema</button>

<div id="menuOpciones" class="menuOpciones">

<a href="BD2formularios.php">Agregar Empleado</a>

<a href="BD4tabla.php">Ver Empleados</a>

<a href="menus_admin.php">Administrar Menús</a>

<a href="ver_reservas.php">Ver Reservas</a>

<a href="mockup.php">Cerrar sesión</a>

</div>

</div>

<script>

function toggleMenu(){

let menu=document.getElementById("menuOpciones");

if(menu.style.display=="block"){
menu.style.display="none";
}else{
menu.style.display="block";
}

}

</script>