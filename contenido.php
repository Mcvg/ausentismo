<?php 

if ($_GET['contenido'] == "inf_ausentismo_institucion") {
	include 'inf_ausentismo_institucion.php'; 
}

if ($_GET['contenido'] == "inicio_incio") {
	include 'inicio_inicio.php'; 
}

if ($_GET['contenido'] == "perfil") {
	include 'perfil.php'; 
}

if ($_GET['contenido'] == "usuario") {
	include 'usuario.php'; 
}

if ($_GET['contenido'] == "institucion") {
	include 'institucion.php'; 
}

if ($_GET['contenido'] == "sede") {
	include 'sede.php'; 
}

if ($_GET['contenido'] == "docente") {
	include 'docente.php'; 
}

if ($_GET['contenido'] == "causa") {
	include 'causa.php'; 
}

if ($_GET['contenido'] == "ausentismo") {
	include 'registrar_ausentismo.php'; 
}
if ($_GET['contenido'] == "exportar") {
	include 'exportar.php'; 
}

if ($_GET['contenido'] == "excel") {
	include 'fichero.php'; 
}



?>