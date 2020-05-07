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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<link href="./main.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="views/dist/css/estilos.css">
</head>
<body style="font-size: 13px;">
    <div  id="mi_lista" class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<?php
     include 'modulos/header.php';
     include "modulos/modales/modales-".$_GET["ruta"].".php";
     include "modulos/modales/modales-".$_GET["ruta"]."_informacion.php";
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
} );

</script>
        </div>
    </div>
        <button class="back-to-top" type="button"><i class="fas fa-arrow-up"></i></button>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js'></script>
<script>
    // add the animation to the popover
    $('a[rel=popover]').popover().click(function(e) {
        e.preventDefault();        
         var open = $(this).attr('data-easein');
        if(open == 'shake') {
                  $(this).next().velocity('callout.' + open);
            } else if(open == 'pulse') {
              $(this).next().velocity('callout.' + open);
            } else if(open == 'tada') {
                $(this).next().velocity('callout.' + open);
            } else if(open == 'flash') {
                  $(this).next().velocity('callout.' + open);
            }  else if(open == 'bounce') {
                 $(this).next().velocity('callout.' + open);
            } else if(open == 'swing') {
                 $(this).next().velocity('callout.' + open);
            }else {
             $(this).next().velocity('transition.' + open); 
            }       
    });
   // add the animation to the modal
$( ".modal" ).each(function(index) {
   $(this).on('show.bs.modal', function (e) {
 var open = $(this).attr('data-easein');
     if(open == 'shake') {
                 $('.modal-dialog').velocity('callout.' + open);
            } else if(open == 'pulse') {
                 $('.modal-dialog').velocity('callout.' + open);
            } else if(open == 'tada') {
                 $('.modal-dialog').velocity('callout.' + open);
            } else if(open == 'flash') {
                 $('.modal-dialog').velocity('callout.' + open);
            }  else if(open == 'bounce') {
                 $('.modal-dialog').velocity('callout.' + open);
            } else if(open == 'swing') {
                 $('.modal-dialog').velocity('callout.' + open);
            }else {
              $('.modal-dialog').velocity('transition.' + open);
            }    
}); 
});
$('.popover-example a').hover(
  function(){
    $(this).click();
  }
);
var amountScrolled = 200;
var amountScrolledNav = 25;
$(window).scroll(function() {
  if ( $(window).scrollTop() > amountScrolled ) {
    $('button.back-to-top').addClass('show');
  } else {
    $('button.back-to-top').removeClass('show');
  }
});
$('button.back-to-top').click(function() {
  $('html, body').animate({
    scrollTop: 0
  }, 800);
  return false;
});
// Ignore this
// This is just for content manipulation
var skeleton = '<div class="skeleton"><div class="skeleton-wrapper"><div class="skeleton-wrapper-inner"><div class="skeleton-wrapper-body"><div class="skeleton-avatar"></div><div class="skeleton-author"></div><div class="skeleton-label"></div><div class="skeleton-content-1"></div><div class="skeleton-content-2"></div><div class="skeleton-content-3"></div></div></div></div></div>';
for(var i=0;i<10;i++){
  $('#content').append(skeleton); 
}
// Add waves effect
Waves.attach('button.back-to-top', 'waves-effect');
Waves.init();
</script>
</body>
</html>
