<?php

$server = $_SERVER['SERVER_NAME'];

define('_PATH_', 'http://'.$server.'/');


require_once "app/controllador/plantilla-controllador.php";
require_once "app/controllador/formularios-controllador.php";

require_once "app/modelo/formularios-modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();

