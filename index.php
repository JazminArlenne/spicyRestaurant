<?php


require_once "controllador/plantilla-controllador.php";
require_once "controllador/formularios.controllador.php";

require_once "modelo/conexion.php";

$conexion = conexion::conectar();
echo '<pre>'; print_r($conexion); echo "</pre>";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


/*
$ruta = new controladorRuta();
$ruta -> ctrRutaPagina();*/

