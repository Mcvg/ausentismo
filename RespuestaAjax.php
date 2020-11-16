<?php
$absolute_path = str_replace('\\', '/', dirname(__FILE__));
define('BASEPATH', $absolute_path);
if (!defined('BASEPATH')) {
    $contenido = "error404.html";
    exit('No direct script access allowed');
} else {
   if (isset($_REQUEST["controller"])) {
    $controlador = $_REQUEST["controller"];
    //error_log($controlador);
    include_once "controlador/$controlador.php";
} else {
    include_once 'controlador/controller_ausentismo.php';
}
$a = new Controlador();
if (isset($_REQUEST["func"])) {
    $cmd = $_REQUEST["func"];
} else {
    $cmd = "Index";
}
$a->Index($cmd);
}