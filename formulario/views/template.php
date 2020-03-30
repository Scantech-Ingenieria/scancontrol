<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<link href="./main.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
        .table{
            background-color: white;
        }
    </style>
    <div  id="mi_lista" class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<?php
     include 'modulos/header.php';
     include "modulos/modales/modales-".$_GET["ruta"].".php";
      ?>
            <div class="app-main">
   <?php 
     include 'modulos/menu.php';
 ?>
                 <div class="app-main__outer">
                    <div class="app-main__inner">              
        <?php 
      if( isset($_GET["ruta"])) {
        $enrutar = new ControllerEnrutamiento();
        $enrutar -> enrutamiento();
      }
 ?>
 <script type="text/javascript">
/// Url actual
let url = window.location.href;
/// Elementos de li
const tabs = ["estacioncalidad", "unidadalimentacion","tabla","unidadaceleracion","unidaddescarga","bandas","paletas","sprockets","vdf","automatico","registros","rodamientos","sensor","unidadpesaje","tableroelectrico","fuentepoder","plc","manifold","tableroneumatico","clientes","cilindros","motor"];
tabs.forEach(e => {
    /// Agregar .php y ver si lo contiene en la url
    if (url.indexOf(e ) !== -1) {
        /// Agregar tab- para hacer que coincida la Id
        setActive("tab-" + e);
    }

});

/// Funcion que asigna la clase active
function setActive(id) {
    document.getElementById(id).setAttribute("class", "mm-active");
}

 </script>

                    </div>
                      </div>
                      <script type="text/javascript">$(document).ready(function() {
    $('#example').DataTable();
} );</script>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script type="text/javascript" src="views/dist/js/tabla.js"></script>
<script type="text/javascript" src="views/dist/js/cliente.js"></script>
<script type="text/javascript" src="views/dist/js/bandas.js"></script>
<script type="text/javascript" src="views/dist/js/paletas.js"></script>
<script type="text/javascript" src="views/dist/js/sprockets.js"></script>
<script type="text/javascript" src="views/dist/js/vdf.js"></script>
<script type="text/javascript" src="views/dist/js/automatico.js"></script>
<script type="text/javascript" src="views/dist/js/unidad_alimentacion.js"></script>
<script type="text/javascript" src="views/dist/js/unidad_aceleracion.js"></script>
<script type="text/javascript" src="views/dist/js/unidad_descarga.js"></script>
<script type="text/javascript" src="views/dist/js/calidad.js"></script>
<script type="text/javascript" src="views/dist/js/registros.js"></script>
<script type="text/javascript" src="views/dist/js/rodamientos.js"></script>
<script type="text/javascript" src="views/dist/js/sensor.js"></script>
<script type="text/javascript" src="views/dist/js/unidad_pesaje.js"></script>
<script type="text/javascript" src="views/dist/js/tableroelectrico.js"></script>
<script type="text/javascript" src="views/dist/js/fuentepoder.js"></script>
<script type="text/javascript" src="views/dist/js/plc.js"></script>
<script type="text/javascript" src="views/dist/js/manifold.js"></script>
<script type="text/javascript" src="views/dist/js/cilindros.js"></script>
<script type="text/javascript" src="views/dist/js/tableroneumatico.js"></script>
<script type="text/javascript" src="views/dist/js/motor.js"></script>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="views/dist/js/rutaAmigable.js"></script>
</body>
</html>
