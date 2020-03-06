
<!doctype html>

<html lang="en">

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


    <div  id="mi_lista" class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">



<?php
     include 'modulos/header.php';
     include 'views/modulos/modales/modales-automatico.php';
     include 'views/modulos/modales/modales-tabla.php';
     include 'views/modulos/modales/modales-cliente.php';
     include 'views/modulos/modales/modales-alimentacion.php';
     include 'views/modulos/modales/modales-bandas.php';
     include 'views/modulos/modales/modales-paletas.php';
     include 'views/modulos/modales/modales-sprockets.php';
     include 'views/modulos/modales/modales-vdf.php';
     include 'views/modulos/modales/modales-aceleracion.php';
     include 'views/modulos/modales/modales-descarga.php';
     include 'views/modulos/modales/modales-calidad.php';
     include 'views/modulos/modales/modales-registros.php';





  








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











<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="views/dist/js/rutaAmigable.js"></script>
</body>
</html>
