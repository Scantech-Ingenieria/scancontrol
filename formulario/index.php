<?php
session_start();
 if( !isset($_SESSION["nombre"]) ){
        header("Location:../index.php");
    }
error_reporting(0);

require_once "controllers/enrutamiento.controller.php";
require_once "controllers/template.controller.php";
require_once "controllers/alimentacion.controller.php";
require_once "controllers/balanzas.controller.php";
require_once "controllers/bandas.controller.php";
require_once "controllers/paletas.controller.php";
require_once "controllers/sprockets.controller.php";
require_once "controllers/vdf.controller.php";
require_once "controllers/automatico.controller.php";
require_once "controllers/aceleracion.controller.php";
require_once "controllers/descarga.controller.php";
require_once "controllers/calidad.controller.php";
require_once "controllers/registros.controller.php";
require_once "controllers/cliente.controller.php";
require_once "controllers/rodamientos.controller.php";
require_once "controllers/sensor.controller.php";
require_once "controllers/pesaje.controller.php";
require_once "controllers/tableroelectrico.controller.php";


require_once "models/alimentacion.modelo.php";
require_once "models/cliente.modelo.php";
require_once "models/paletas.modelo.php";
require_once "models/sprockets.modelo.php";
require_once "models/vdf.modelo.php";
require_once "models/automatico.modelo.php";
require_once "models/aceleracion.modelo.php";
require_once "models/descarga.modelo.php";
require_once "models/calidad.modelo.php";
require_once "models/registros.modelo.php";
require_once "models/balanzas.modelo.php";
require_once "models/bandas.modelo.php";
require_once "models/rodamientos.modelo.php";
require_once "models/sensor.modelo.php";
require_once "models/pesaje.modelo.php";
require_once "models/tableroelectrico.modelo.php";






$template = new ControllerTemplate();
$template -> template();


?>