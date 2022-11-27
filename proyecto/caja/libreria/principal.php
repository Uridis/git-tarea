<?php

include("config.php");
include("conexion.php");
include("plantilla.php");
include("componentes.php");
include("manejador_caso.php");

if (!MODO_DESARROLLO){
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}
