<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="es">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>
<body style="font-size: 13px;">
    <script type="text/javascript">
      $(window).on('load',function(){
          $('#myModal').modal({
            backdrop: 'static',
            keyboard: false
          });
      });
  </script>
</head>
<body>

  <!-- Modal -->
<div class="modal fade shadow" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">¡Bienvenido!</h5>
      </div>
      <div class="modal-body">
        <form  method="POST"  id="myform">
          <div class="form-group">
            <label for="exampleInputPassword1">Por favor, dínos tu nombre:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre" name="nombre" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Y tu correo electrónico:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico" name="correo" required="">
            <small id="emailHelp" class="form-text text-muted">Información confidencial.</small>
          </div>        
        
        <p>Te envíaremos nuestro catálogo online a este e-mail.</p>
        <p>¡Gracias!</p>
         <div id="loading"></div>
      </div> 

      <div class="modal-footer" id="sub">
            <button type="submit" name="mysubmit" id="enviar"  class="btn btn-primary">Enviar Catálogo</button>
            <button type="hidden" id="cerrar"  class="btn btn-danger" data-dismiss="modal" value="Cerrar">Cerrar</button>


        </form>

<div id="result"></div>
      </div>
    </div>
  </div>
</div>

<script language="javascript">
$(document).ready(function() {

     $('#cerrar').hide();
  $('#myform').submit(function() {
        //Añadimos la imagen de carga en el contenedor
        $('#loading').html('<div align="center" class="load"><img src="views/img/load2.gif" alt="loading" width="40%" /><br/>Un momento, por favor...</div>');
 
var nombre = $('input:text[name=nombre]').val()
  $('#nombreusuario').fadeIn(1000).html(nombre);
        $.ajax({
            type: "POST",
            url: "envio.php",
            data: $(this).serialize(),
            success: function(data) {
                //Cargamos finalmente el contenido deseado
    
                $('#cerrar').show();

                $('#loading').fadeIn(1000).html(data);

            }
        });
        return false;
    });              

})  
</script>

<?php 
require_once "conexion.php";

//COnexion a bd
$id = $_GET['id']; 
//Obtendo id de balanza
//Consulto datos de balanza
$sql = Conexion::conectar()->prepare("SELECT ba.cliente,ba.grader,ba.id_unidad_balanza,ba.id_balanza,ba.id_unidad_al,ba.id_pesaje,ba.id_unidad_acel,ba.id_unidad_desc,ba.id_calidad,ca.rutaImg imgcalidad,ca.numero_puestos puestosca,ca.tipo_sprockets sprocketca,ca.cantidad_sprockets sprocketscantidadca,ca.tipo_banda tipobandaca,ca.medida_banda medidabandaca,ca.eje ejeca,ca.cilindros cilindrosca,ca.tipo_botoneras tipobotonerasca,ca.cantidad_botoneras cantidadbotonerasca,ca.tipo_sensores tiposensoresca,ca.cantidad_sensores sensorescantidad,ca.racors racorsca,ca.tipo_motor tipomotorca,ca.tipo_descanso tipodescansoca,acel.rutaImg imgacel,alim.rutaImg imgalim,alim.largo_banda largobandaalim,alim.tipo_sprockets sprocketalim,alim.cantidad_sprockets cantidadsprocketsalim,alim.banda_tipo bandaalim,alim.banda_medidas bandamedidasalim,alim.eje ejealim,alim.tipo_motor motoralim,alim.tipo_descanso descansoalim,des.rutaImg imgdes,pes.id_unidad_pesaje,pes.tipo_sensores sensorespesajes,pes.tipo_sprocket sprocketpesajes,pes.cantidad_sprocket sprocketcantidadpesajes,pes.tipo_banda bandapesajes,pes.medida_banda bandamedidaspesajes,pes.eje ejepesajes,pes.tipo_motor motorpesajes,pes.tipo_rodamientos rodamientospesajes,pes.entradaalto,pes.entradaancho,pes.entradaespesor,pes.pesajealto,pes.pesajeancho,pes.pesajeespesor,pes.salidaalto,pes.salidaancho,pes.salidaespesor,pes.tableroelectrico electricopesajes,pes.tableroneumatico neumaticopesajes,pes.rutaImg imgpesajes,spro.serie seriespro,spro.modelo modelospro,spro.dientes dientesspro,spro.perforacion perforacionpspro, spro.descripcion descripcionspro,spro.precio preciospro,ban.ancho anchobanda,ban.material materialbanda,ban.descripcion descripcionbanda,ban.paso pasobanda,ban.superficie superficiebanda,ban.numero_serie seriebanda,ci.nombre nombreci,ci.diametro diametroci,ci.largo largoci,ci.materialcuerpo cuerpoci,ci.materialvastago vastagoci,ci.medidahilo hiloci,ci.precio precioci,se.modelo modelose,se.contacto contactose,se.distancia distanciase,se.marca marcase,se.precio preciose,se.tipo_sensor tipose,se.voltaje voltajese,mo.ancho anchomotor,mo.capacidad capacidadmotor,mo.marca marcamotor,mo.precio preciomotor,mo.rpm rpmmotor,mo.usillo usillomotor,spro2.modelo modelospro2,spro2.serie seriespro2,spro2.dientes dientesspro2,spro2.perforacion perforacionspro2,spro2.precio preciospro2,spro2.descripcion descripcionspro2,ban2.ancho anchobanda2,ban2.material materialbanda2,ban2.descripcion descripcionbanda2,ban2.paso pasobanda2,ban2.superficie superficiebanda2,ban2.numero_serie seriebanda2 FROM unidades_balanza ba LEFT JOIN estacion_calidad ca on ca.id_calidad= ba.id_calidad LEFT JOIN unidad_acel acel on  acel.id_unidad_acel= ba.id_unidad_acel  LEFT JOIN unidad_alim alim on  alim.id_unidad_alim= ba.id_unidad_al  LEFT JOIN unidad_descarga des on  des.id_unidad_descarga= ba.id_unidad_desc LEFT JOIN unidad_pesaje pes on pes.id_unidad_pesaje=ba.id_pesaje LEFT JOIN sprockets spro on spro.id_sprockets=ca.tipo_sprockets LEFT JOIN bandas ban on ban.id_banda=ca.tipo_banda
		LEFT JOIN cilindros ci on ci.id_cilindros=ca.cilindros LEFT JOIN sensor se on se.id_sensor=ca.tipo_sensores LEFT JOIN motor mo on mo.id_motor=ca.tipo_motor LEFT JOIN sprockets spro2 on spro2.id_sprockets=alim.tipo_sprockets LEFT JOIN bandas ban2 on ban2.id_banda=alim.banda_tipo where id_unidad_balanza = $id
");

$sql -> execute();
//Ejecuto sql
foreach ($sql as $key => $value){
    $cliente=$value["cliente"];
    $grader=$value["grader"];

    $id_unidad=$value["id_unidad_balanza"];
    $id_alimentacion=$value["id_unidad_al"];
    $id_pesaje=$value["id_pesaje"];
    $id_aceleracion=$value["id_unidad_acel"];
    $id_calidad=$value["id_calidad"];
    $id_descarga=$value["id_unidad_desc"];

}

?>

<table class="table table-hover">
  <thead>
    <tr>

      <th scope="col"><div class="text-center m-5">
  <img width="50%" src="views/img/fondo.png" alt="Scantech" class="responsive">
</div>
  
<div class="text-center">
  <h4><p class="font-weight-bold">Hola, <p id="nombreusuario"></p></p></h4>
  <p class="font-weight-light pl-3">Aquí podrás encontrar toda la información de la máquina.</p>
</div></th>
    </tr>
  </thead>
  <tbody>
  	 <tr>

      <td>
      	<h2 style="text-align: center;"> <?php echo $grader; ?></h2>
        <h5 style="text-align: center;"> <?php echo $cliente; ?></h2>

      	</td>
      	 </tr>

      
    <tr>

      <td>
<!--       verifico si obtengo id de estación de calida -->
      	<?php if ($id_calidad =='') {?>
	
<h4>No hay registro</h4>
<?php

 }
else{
echo'<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#calidad">
  ESTACIÓN DE CALIDAD
</button>';
		$sqlcalidad = Conexion::conectar()->prepare("SELECT a.descripcion despcal,a.id_calidad,a.numero_puestos,a.cantidad_sprockets,a.tipo_banda,a.medida_banda,a.eje,a.tipo_botoneras,a.cantidad_botoneras,a.racors,a.rutaImg imgcalidad,s.id_sprockets,s.serie seriesprockets,s.modelo modelosprockets,s.dientes dientessprockets,s.perforacion perforacionsprockets,s.descripcion descripcionsprockets,s.rutaImg imgsprockets,b.id_banda,b.superficie,b.paso,b.numero_serie seriebanda,b.descripcion bandadescripcion,b.ancho anchobanda,b.material materialbanda,b.rutaImg imgbanda,ci.id_cilindros,ci.nombre nombrecilindros,ci.diametro diametrocilindros,ci.largo largocilindros,ci.materialcuerpo,ci.materialvastago,ci.medidahilo,ci.rutaImg imgcilindros,se.id_sensor,se.tipo_sensor sensortipo,se.marca marcasensor,se.modelo modelosensor,se.voltaje voltajesensor,se.distancia distanciasensor,se.contacto contactosensor,se.rutaImg imgsensor,r.id_rodamientos,r.modelo modelodescanso,r.rodamiento rodamientodescanso,r.material descansomaterial,r.fijaciones fijacionesdescanso,r.rutaImg imgdescanso,m.id_motor,m.rpm,m.marca marcamotor,m.usillo usillomotor,m.ancho anchomotor,m.capacidad capacidadmotor,m.rutaImg imgmotor FROM estacion_calidad a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  LEFT JOIN bandas b on b.id_banda=a.tipo_banda LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN sensor se on se.id_sensor=a.tipo_sensores LEFT JOIN cilindros ci on ci.id_cilindros=a.cilindros LEFT JOIN motor m on m.id_motor=a.tipo_motor WHERE id_calidad = $id_calidad");
		$sqlcalidad -> execute();
				foreach ($sqlcalidad as $key => $valuecali) { ?>


<div

class="modal" id="calidad" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 1600px;">
    <div class="modal-content">
      <div class="modal-header" style="    color: white;
    background: #075672;">
        <h5 class="modal-title" id="exampleModalLongTitle">Información Estación Calidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="row">
  


      <div class="col-sm-6 ">
<h5>Imagen </h5>

       <table class="table table-bordered" style="background: #d3d3ff; text-align:center;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
  
     

      <td> <div class="col-sm-12 "> <a href="../formulario/<?php substr($valuecali["imgcalidad"], 3) ?>"><img  width="100%" src="../formulario/<?php echo substr($valuecali["imgcalidad"], 3) ?>" ></a></div></td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="col-sm-6 ">

<h5>Información Estación de Calidad</h5>

       <table class="table table-bordered" style=" background: #075672;color:white;">
  <tbody>
    <tr>
      <th scope="row">Descripción</th>
      <td><?php echo $valuecali["despcal"];; ?></td>
    </tr>

    <tr>
      <th scope="row">Número de puestos</th>
      <td><?php echo $valuecali["numero_puestos"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Cantidad Sprockets</th>
      <td><?php echo $valuecali["cantidad_sprockets"]; ?></td>
    </tr>
<tr>
      <th scope="row">Medida Banda</th>
      <td><?php echo $valuecali["medida_banda"]; ?></td>
    </tr>
    <tr>
      <th scope="row">Eje</th>
      <td><?php echo $valuecali["eje"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Tipo Botoneras</th>
      <td><?php echo $valuecali["tipo_botoneras"]; ?></td>
    </tr>
       <tr>
      <th scope="row">Cantidad Botoneras</th>
      <td><?php echo $valuecali["cantidad_botoneras"]; ?></td>
    </tr>
       <tr>
      <th scope="row">Racors</th>
      <td><?php echo $valuecali["racors"]; ?></td>
    </tr>
  </tbody>
     

</table>
 </div>
 </div>
  <h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>
 <div class="row" style="margin-top: 20px;    font-size: 12px;">
 <div class="col-sm-2 col-md-12">
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#calidadsprockets" aria-expanded="true" aria-controls="calidadsprockets">
          Sprockets
        </button>
      </h5>
    </div>

    <div id="calidadsprockets" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
    <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Serie Sprockets</th>
      <td><?php echo $valuecali["seriesprockets"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Modelo Sprockets</th>
      <td><?php echo $valuecali["modelosprockets"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Dientes Sprockets</th>
      <td><?php echo $valuecali["dientessprockets"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Perforación Sprockets</th>
      <td><?php echo $valuecali["perforacionsprockets"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Descripción Sprockets</th>
      <td><?php echo $valuecali["descripcionsprockets"]; ?></td>
    </tr>
   <tr>
  
     
      <th scope="row">Imagen Sprockets </th>
      <td> <a href="../formulario/<?php substr($valuecali["imgsprockets"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgsprockets"], 3); ?>" ></a></td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Bandas
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        
<?php
if ($valuecali["id_banda"]=='') {
echo "<h4>Sin Registro</h4>";
}else{
?>
       <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Superficie</th>
      <td><?php echo $valuecali["superficie"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Paso</th>
      <td><?php echo $valuecali["paso"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Serie</th>
      <td><?php echo $valuecali["seriebanda"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Ancho</th>
      <td><?php echo $valuecali["anchobanda"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Descripción </th>
      <td><?php echo $valuecali["bandadescripcion"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Material </th>
      <td><?php echo $valuecali["materialbanda"]; ?></td>
    </tr>
     <tr>
  
     
      <th scope="row">Imagen Banda </th>
      <td> <a href="../formulario/<?php substr($valuecali["imgbanda"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgbanda"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>
<?php
}
?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn  btn-primary btn-lg btn-block collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Cilindros
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       <?php
if ($valuecali["id_cilindros"]=='') {
echo "<h4>Sin Registro</h4>";
}else{
?>
       <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Nombre</th>
      <td><?php echo $valuecali["nombrecilindros"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Diametro</th>
      <td><?php echo $valuecali["diametrocilindros"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Largo</th>
      <td><?php echo $valuecali["largocilindros"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Material Cuerpo</th>
      <td><?php echo $valuecali["materialcuerpo"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Material Vastago </th>
      <td><?php echo $valuecali["materialvastago"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Medida Hilo </th>
      <td><?php echo $valuecali["medidahilo"]; ?></td>
    </tr>

     <tr>
  
      <th scope="row">Imagen Cilindro </th>
      <td> <a href="../formulario/<?php substr($valuecali["imgcilindros"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgcilindros"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>

<?php
}
?>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" id="headingSensor">
      <h5 class="mb-0">
        <button class="btn  btn-primary btn-lg btn-block collapsed" data-toggle="collapse" data-target="#collapseSensor" aria-expanded="false" aria-controls="collapseSensor">
          Sensores
        </button>
      </h5>
    </div>
    <div id="collapseSensor" class="collapse" aria-labelledby="headingSensor" data-parent="#accordion">
      <div class="card-body">
     <?php
if ($valuecali["id_sensor"]=='') {
echo "<h4>Sin Registro</h4>";
}else{

?>
 <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Tipo Sensor</th>
      <td><?php echo $valuecali["sensortipo"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Marca</th>
      <td><?php echo $valuecali["marcasensor"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Modelo</th>
      <td><?php echo $valuecali["modelosensor"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Voltaje</th>
      <td><?php echo $valuecali["voltajesensor"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Distancia </th>
      <td><?php echo $valuecali["distanciasensor"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Contacto </th>
      <td><?php echo $valuecali["contactosensor"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Imagen Sensor</th>
      <td> <a href="../formulario/<?php substr($valuecali["imgsensor"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgsensor"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>

<?php
}
 ?>

      </div>
    </div>
  </div>
      <div class="card">
    <div class="card-header" id="headingDescanso">
      <h5 class="mb-0">
        <button class="btn  btn-primary btn-lg btn-block collapsed" data-toggle="collapse" data-target="#collapseDescanso" aria-expanded="false" aria-controls="collapseDescanso">
          Descanso
        </button>
      </h5>
    </div>
    <div id="collapseDescanso" class="collapse" aria-labelledby="headingDescanso" data-parent="#accordion">
      <div class="card-body">
   <?php
if ($valuecali["id_rodamientos"]=='') {
echo "<h4>Sin Registro</h4>";
}else{

?>
       <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Modelos</th>
      <td><?php echo $valuecali["modelodescanso"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Rodamiento</th>
      <td><?php echo $valuecali["rodamientodescanso"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Material</th>
      <td><?php echo $valuecali["descansomaterial"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Fijaciones</th>
      <td><?php echo $valuecali["fijacionesdescanso"]; ?></td>
    </tr>
   

     <tr>
  
      <th scope="row">Imagen Descanso</th>
      <td> <a href="../formulario/<?php substr($valuecali["imgdescanso"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgdescanso"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>
<?php
}
?>
      </div>
    </div>
  </div>
      <div class="card">
    <div class="card-header" id="headingMotor">
      <h5 class="mb-0">
        <button class="btn  btn-primary btn-lg btn-block collapsed" data-toggle="collapse" data-target="#collapseMotor" aria-expanded="false" aria-controls="collapseMotor">
          Motor
        </button>
      </h5>
    </div>
    <div id="collapseMotor" class="collapse" aria-labelledby="headingMotor" data-parent="#accordion">
      <div class="card-body">
    <?php
if ($valuecali["id_motor"]=='') {
echo "<h4>Sin Registro</h4>";
}else{

?>
       <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Marca</th>
      <td><?php echo $valuecali["marcamotor"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Usillo</th>
      <td><?php echo $valuecali["usillomotor"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Ancho</th>
      <td><?php echo $valuecali["anchomotor"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Capacidad</th>
      <td><?php echo $valuecali["capacidadmotor"]; ?></td>
    </tr>
   

     <tr>
  
      <th scope="row">Imagen Motor</th>
      <td> <a href="../formulario/<?php substr($valuecali["imgmotor"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgmotor"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>
<?php
}
?>
      </div>
    </div>
  </div>
</div>
</div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
   
      </div>
    </div>
  </div>
</div>

<?php

}
 }

 ?>

      </td>

    </tr>
    <tr>

      <td>
      	
<?php if ($id_alimentacion =='') {?>
	
<h4>No hay registro</h4>
<?php

 }
else{

	echo '<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#alimentacion">
  UNIDAD DE ALIMENTACIÓN
</button>';
$sqlalim = Conexion::conectar()->prepare("SELECT a.descripcion descrialim,a.id_unidad_alim,a.cantidad_sprockets,a.banda_medidas,a.eje,a.largo_banda,a.rutaImg alimentacionimg,s.id_sprockets,s.serie spro_serie,s.modelo spro_modelo,s.dientes,s.perforacion,s.descripcion descr_spro,s.precio preciospro,s.rutaImg sproimg,b.id_banda,b.superficie,b.paso,b.numero_serie serie_banda,b.descripcion banda_descripcion,b.ancho ancho_banda,b.material,b.precio preciobanda,b.rutaImg bandaimg,r.id_rodamientos,r.modelo modelo_descanso,r.rodamiento,r.material material_descanso,r.fijaciones,r.precio descansoprecio,r.rutaImg descansoimg,m.id_motor,m.rpm,m.marca,m.usillo,m.ancho corriente,m.capacidad potencia,m.precio preciomotor,m.rutaImg motorimg  FROM unidad_alim a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  LEFT JOIN bandas b on b.id_banda=a.banda_tipo LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN motor m on m.id_motor=a.tipo_motor where id_unidad_alim = $id_alimentacion");
$sqlalim -> execute();
foreach ($sqlalim as $key => $valuealim) { 
echo'
<div  class="modal" id="alimentacion" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 1600px;">
    <div class="modal-content">
      <div class="modal-header" style="    color: white;
    background: #075672;">
        <h5 class="modal-title" id="exampleModalLabel">Información Unidad Alimentación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
      <div class="col-sm-6">

<h5>Imagen </h5>

       <table class="table table-bordered" style="background: #d3d3ff; text-align:center;">
  <thead>
    <tr>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td> <div class="col-sm-12"> <a href="../formulario/'.substr($value["imgalim"], 3).'"><img  width="100%" src="../formulario/'.substr($value["imgalim"], 3).'" ></a> </div></td>
    </tr>
  </tbody>
</table>
      </div>

      <div class="col-sm-6">

<h5>Información Unidad de Alimentación</h5>
 <table class="table table-bordered" style=" background: #075672;color:white;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Descripción: </th>
      <td>'.nl2br($valuealim["descrialim"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sprockets : </th>
      <td>'.nl2br($value["cantidadsprocketsalim"]).'</td>
    </tr>
    <tr>
      <th scope="row">Banda Medidas: </th>
      <td>'.nl2br($value["bandamedidasalim"]).'</td>
    </tr>
    <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($value["ejealim"]).'</td>
    </tr>
     <tr>
      <th scope="row">Largo Banda:</th>
      <td>'.nl2br($value["largobandaalim"]).'</td>
    </tr>
   
  </tbody>
</table>
</div>
      </div>
      <h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>
      <div class="row" style="margin-top: 20px;    font-size: 12px;">
     <div class="col-sm-12">
<div id="accordion">
';

if ($value["sprocketalim"]=='') {
echo "<h4>Sin Registro</h4>";
}else{


echo'


  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#alimentacionsprocket" aria-expanded="true" aria-controls="calidadsprockets">
          Sprockets
        </button>
      </h5>
    </div>

    <div id="alimentacionsprocket" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">Serie: </th>
      <td>'.nl2br($valuealim["spro_serie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuealim["spro_modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($valuealim["dientes"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($valuealim["perforacion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuealim["descr_spro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuealim["sproimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuealim["sproimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>







';
}
if ($value["bandaalim"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#alimentacionbanda" aria-expanded="true" aria-controls="calidadsprockets">
          Banda
        </button>
      </h5>
    </div>

    <div id="alimentacionbanda" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
    <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Superficie: </th>
      <td>'.nl2br($valuealim["superficie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($valuealim["paso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($valuealim["serie_banda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($valuealim["ancho_banda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuealim["banda_descripcion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuealim["bandaimg"], 3).'"><img width="50%" src="../formulario/'.substr($valuealim["bandaimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}
if ($value["motoralim"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#alimentacionmotor" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="alimentacionmotor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($valuealim["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($valuealim["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($valuealim["corriente"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($valuealim["potencia"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuealim["motorimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuealim["motorimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}


if ($value["descansoalim"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#alimentaciondescanso" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="alimentaciondescanso" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
<table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuealim["modelo_descanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($valuealim["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($valuealim["material_descanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($valuealim["fijaciones"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuealim["descansoimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuealim["descansoimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}


echo'

      </div>

      </div>


      </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>

';

}
}

?>


      </td>

    </tr>
    <tr>


      	
<td>
<?php if ($id_aceleracion =='') {?>
	
<h4>No hay registro</h4>
<?php

 }
else{
echo '<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#aceleracion">
  UNIDAD DE ACELERACIÓN
</button>';

$sqlacel = Conexion::conectar()->prepare("SELECT a.descripcion,a.id_unidad_acel,a.cantidad_sprockets,a.banda_medidas,a.eje,a.rutaImg imgaceleracion,s.id_sprockets,s.serie spro_serie,s.modelo spro_modelo,s.dientes,s.perforacion,s.descripcion descr_spro,s.precio preciospro,s.rutaImg sproimg,b.id_banda,b.superficie,b.paso,b.numero_serie serie_banda,b.descripcion banda_descripcion,b.ancho ancho_banda,b.material,b.precio bandaprecio,b.rutaImg bandaimg,r.id_rodamientos,r.modelo modelo_descanso,r.rodamiento,r.material material_descanso,r.fijaciones,r.precio descansoprecio,r.rutaImg descansoimg,m.id_motor,m.rpm,m.marca,m.usillo,m.ancho corriente,m.capacidad potencia,m.precio motorprecio,m.rutaImg motorimg  FROM unidad_acel a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  LEFT JOIN bandas b on b.id_banda=a.banda_tipo LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN motor m on m.id_motor=a.tipo_motor where id_unidad_acel = $id_aceleracion");
		$sqlacel -> execute();
		foreach ($sqlacel as $key => $valueacel) { 
// ACELERACION
echo'


<div class="modal" id="aceleracion" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 1600px;">
    <div class="modal-content">
      <div class="modal-header" style="    color: white;
    background: #075672;">
        <h5 class="modal-title" id="exampleModalLabel">Información Unidad Aceleración</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                  <div class="col-sm-6">
<h5>Imagen </h5>

       <table class="table table-bordered" style="background: #d3d3ff; text-align:center;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <td> <a href="../formulario/'.substr($value["imgacel"], 3).'"><img  width="100%" src="../formulario/'.substr($value["imgacel"], 3).'" ></a></td>
    </tr>
  </tbody>
</table>


      </div>
                  <div class="col-sm-6">

<h5>Información Unidad de Aceleración</h5>
 <table class="table table-bordered" style=" background: #075672;color:white;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Descripción: </th>
      <td>'.nl2br($valueacel["descripcion"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sprockets : </th>
      <td>'.nl2br($valueacel["cantidad_sprockets"]).'</td>
    </tr>
    <tr>
      <th scope="row">Banda Medidas: </th>
      <td>'.nl2br($valueacel["banda_medidas"]).'</td>
    </tr>
    <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($valueacel["eje"]).'</td>
    </tr>
  
   
  </tbody>
</table>
</div>
      </div>
            <h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>
            <div class="row"  style="margin-top: 20px;    font-size: 12px;">



           <div class="col-sm-12">
<div id="accordion">';

  if ($valueacel["id_sprockets"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#aceleracionsprocket" aria-expanded="true" aria-controls="calidadsprockets">
          Sprockets
        </button>
      </h5>
    </div>

    <div id="aceleracionsprocket" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
<table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
      <th scope="row">Serie: </th>
      <td>'.nl2br($valueacel["spro_serie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valueacel["spro_modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($valueacel["dientes"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($valueacel["perforacion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valueacel["descr_spro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valueacel["sproimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valueacel["sproimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}


      if ($valueacel["id_banda"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#aceleracionbanda" aria-expanded="true" aria-controls="calidadsprockets">
          Banda
        </button>
      </h5>
    </div>

    <div id="aceleracionbanda" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
<table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>

      <th scope="row">Superficie: </th>
      <td>'.nl2br($valueacel["superficie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($valueacel["paso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($valueacel["serie_banda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($valueacel["ancho_banda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valueacel["banda_descripcion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valueacel["bandaimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valueacel["bandaimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>   
      </div>
      </div>
      </div>';


}



if ($valueacel["id_motor"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#aceleracionmotor" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="aceleracionmotor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
<table class="table table-bordered">
  <thead>
    <tr>
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($valueacel["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($valueacel["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($valueacel["corriente"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($valueacel["potencia"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valueacel["motorimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valueacel["motorimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table> 
      </div>
      </div>
      </div>';


}


if ($valueacel["id_rodamientos"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#aceleraciondescanso" aria-expanded="true" aria-controls="calidadsprockets">
          Descanso
        </button>
      </h5>
    </div>

    <div id="aceleraciondescanso" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valueacel["modelo_descanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($valueacel["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($valueacel["material_descanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($valueacel["fijaciones"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valueacel["descansoimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valueacel["descansoimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}

echo'

      </div>

      </div>



      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>
';

 }

}
 ?>

</td>
    </tr>

    <tr>

      <td><?php if ($id_pesaje =='') {?>
	
<h4>No hay registro</h4>
<?php

 }
else{
echo' <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#pesaje">
  UNIDAD DE PESAJE
</button>';

$sqlpesaje = Conexion::conectar()->prepare("SELECT a.descripcion,a.id_unidad_pesaje,a.cantidad_sensores,a.cantidad_sprocket,a.medida_banda,a.eje,a.entradaalto,a.entradaancho,a.entradaespesor,a.pesajealto,a.pesajeancho,a.pesajeespesor,a.salidaalto,a.salidaancho,a.salidaespesor,a.rutaImg imgpesaje,se.id_sensor,se.tipo_sensor,se.marca marcasensor,se.modelo modelosensor,se.voltaje voltajesensor,se.distancia distanciasensor,se.contacto contactosensor,se.rutaImg imgsensor,s.id_sprockets,s.serie seriesprockets,s.modelo modelosprockets,s.dientes dientessprockets,s.perforacion perforacionsprockets,s.descripcion descripcionsprockets,s.rutaImg imgsprockets,b.id_banda,b.superficie superficiebanda,b.paso pasobanda,b.numero_serie numeroseriebanda,b.descripcion descripcionbanda,b.ancho anchobanda,b.material bandamaterial,b.rutaImg imgbanda,m.id_motor,m.rpm,m.marca marcamotor,m.usillo,m.ancho anchomotor,m.capacidad capacidadmotor,m.rutaImg imgmotor,r.id_rodamientos,r.modelo modelodescanso,r.rodamiento,r.material materialdescanso,r.fijaciones fijacionesdescanso,r.rutaImg imgdescanso,te.id_tableroelectrico,te.altura alturate,te.ancho anchote,te.fondo fondote,te.contactor contactorte,te.rutaImg imgte,tn.id_tableroneumatico,tn.altura alturatn,tn.ancho anchotn,tn.fondo fondotn,tn.rutaImg imgtn  FROM unidad_pesaje  a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprocket  LEFT JOIN bandas b on b.id_banda=a.tipo_banda LEFT JOIN sensor se on se.id_sensor=a.tipo_sensores LEFT JOIN motor m on m.id_motor=a.tipo_motor LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_rodamientos LEFT JOIN tableroelectrico te on te.id_tableroelectrico=a.tableroelectrico LEFT JOIN tablero_neumatico tn on tn.id_tableroneumatico=a.tableroneumatico WHERE id_unidad_pesaje = $id_pesaje");
		$sqlpesaje -> execute();
	foreach ($sqlpesaje as $key => $valuepesa) { 
echo'<div class="modal" id="pesaje" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 2300px;">
    <div class="modal-content">
      <div class="modal-header"  style="    color: white;
    background: #075672;">
        <h5 class="modal-title" id="exampleModalLabel">Información Unidad Pesaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
      <div class="row">
          <div class="col-sm-6">


<h5>Imagen </h5>
<table class="table table-bordered" style="background: #d3d3ff; text-align:center;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <td> <a href="../formulario/'.substr($valuepesa["imgpesaje"], 3).'"><img  width="100%" src="../formulario/'.substr($valuepesa["imgpesaje"], 3).'" ></a></td>
    </tr>
  </tbody>
</table>
      </div>

 <div class="col-sm-6">

<h5>Información Unidad de Pesaje</h5>
 <table class="table table-bordered" style=" background: #075672;color:white;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Descripción: </th>
      <td>'.nl2br($valuepesa["descripcion"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sensores : </th>
      <td>'.nl2br($valuepesa["cantidad_sensores"]).'</td>
    </tr>
    <tr>
      <th scope="row">Cantidad Sprockets: </th>
      <td>'.nl2br($valuepesa["cantidad_sprocket"]).'</td>
    </tr>
    <tr>
      <th scope="row">Medida Banda:</th>
      <td>'.nl2br($valuepesa["medida_banda"]).'</td>
    </tr>
  <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($valuepesa["eje"]).'</td>
    </tr>
    <tr>
      <th scope="row">Plataforma :</th>
      <td>
    
<table class="table" style="background-color: #25a9d9;">
  <thead class="thead-light">
    <tr>
      <th scope="col"></th>
      <th scope="col">Alto</th>
      <th scope="col">Ancho</th>
      <th scope="col">Espesor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Entrada</th>
      <td>'.nl2br($valuepesa["entradaalto"]).'</td>
      <td>'.nl2br($valuepesa["entradaancho"]).'</td>
      <td>'.nl2br($valuepesa["entradaespesor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Pesaje</th>
      <td>'.nl2br($valuepesa["pesajealto"]).'</td>
      <td>'.nl2br($valuepesa["pesajeancho"]).'</td>
      <td>'.nl2br($valuepesa["pesajeespesor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Entrada</th>
      <td>'.nl2br($valuepesa["salidaalto"]).'</td>
      <td>'.nl2br($valuepesa["salidaancho"]).'</td>
      <td>'.nl2br($valuepesa["salidaespesor"]).'</td>
    </tr>
  </tbody>
</table>
       </td>
    </tr>

  </tbody>
</table>
</div>
      </div>

<h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>


<div class="row"  style="margin-top: 20px;    font-size: 12px;">

<div class="col-sm-12"><div id="accordion">';
      



if ($valuepesa["id_sensor"]=='') {
echo "<h4>Sin Registro</h4>";

}else{
      echo'



  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#pesajesensor" aria-expanded="true" aria-controls="calidadsprockets">
          Sensor
        </button>
      </h5>
    </div>

    <div id="pesajesensor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Tipo : </th>
      <td>'.nl2br($valuepesa["tipo_sensor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Marca: </th>
      <td>'.nl2br($valuepesa["marcasensor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo:</th>
      <td>'.nl2br($valuepesa["modelosensor"]).'</td>
    </tr>
     <tr>
      <th scope="row">Voltaje:</th>
      <td>'.nl2br($valuepesa["voltajesensor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Distancia:</th>
      <td>'.nl2br($valuepesa["distanciasensor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Contacto:</th>
      <td>'.nl2br($valuepesa["contactosensor"]).'</td>
    </tr>
 
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuepesa["imgsensor"], 3).'"><img  width="50%" src="../formulario/'.substr($valuepesa["imgsensor"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
       </div>
        </div>



         </div>';
}


if ($valuepesa["id_sprockets"]=='') {
echo "<h4>Sin Registro</h4>";

}else{
      echo'
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#pesajesprockets" aria-expanded="true" aria-controls="calidadsprockets">
          Sprockets
        </button>
      </h5>
    </div>

    <div id="pesajesprockets" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">


 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Serie: </th>
      <td>'.nl2br($valuepesa["seriesprockets"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuepesa["modelosprockets"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($valuepesa["dientessprockets"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($valuepesa["perforacionsprockets"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuepesa["descripcionsprockets"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuepesa["imgsprockets"], 3).'"><img  width="50%" src="../formulario/'.substr($valuepesa["imgsprockets"], 3).'"></a></td>
    </tr>
  </tbody>
</table>

       </div>

        </div>
         </div>';
}
if ($valuepesa["id_banda"]=='') {
echo "<h4>Sin Registro</h4>";

}else{
echo'



           <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#pesajebanda" aria-expanded="true" aria-controls="calidadsprockets">
          Banda
        </button>
      </h5>
    </div>

    <div id="pesajebanda" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Superficie: </th>
      <td>'.nl2br($valuepesa["superficiebanda"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($valuepesa["pasobanda"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($valuepesa["numeroseriebanda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($valuepesa["anchobanda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuepesa["descripcionbanda"]).'</td>
    </tr>
     <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($valuepesa["bandamaterial"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuepesa["imgbanda"], 3).'"><img  width="50%" src="../formulario/'.substr($valuepesa["imgbanda"], 3).'"></a></td>
    </tr>
  </tbody>
</table>


       </div>
       
        </div>
         </div>';
}

if ($valuepesa["id_motor"]=='') {
echo "<h4>Sin Registro</h4>";
  # code...
}else{
echo'
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#pesajemotor" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="pesajemotor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">

 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($valuepesa["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($valuepesa["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($valuepesa["anchomotor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($valuepesa["capacidadmotor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuepesa["imgmotor"], 3).'"><img  width="50%" src="../formulario/'.substr($valuepesa["imgmotor"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
       </div>
       
        </div>
         </div>


</div>
';
}
      if ($valuepesa["id_rodamientos"]=='') {
echo "<h4>Sin Registro</h4>";
        # code...
      }else{
echo'
<div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#descansomotor" aria-expanded="true" aria-controls="calidadsprockets">
          Descanso
        </button>
      </h5>
    </div>

    <div id="descansomotor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuepesa["modelodescanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($valuepesa["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($valuepesa["materialdescanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($valuepesa["fijacionesdescanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuepesa["imgdescanso"], 3).'"><img  width="50%" src="../formulario/'.substr($valuepesa["imgdescanso"], 3).'"></a></td>
    </tr>
  </tbody>
</table>

      </div>
      </div>
      </div>';

}
echo '<h3 style="    background: #565454;
    color: white;
    padding: 5px;">Tableros</h3>
';
if ($valuepesa["id_tableroelectrico"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'
<div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-warning btn-lg btn-block" data-toggle="collapse" data-target="#calidadelectrico" aria-expanded="true" aria-controls="calidadsprockets">
          Tablero Electrico
        </button>
      </h5>
    </div>

    <div id="calidadelectrico" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">

 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Altura-Ancho-Fondo: </th>
      <td>'.nl2br($valuepesa["alturate"]).'x'.nl2br($valuepesa["anchote"]).'x'.nl2br($valuepesa["fondote"]).'</td>
    </tr>
    <tr>
      <th scope="row">Contactor : </th>
      <td>'.nl2br($valuepesa["contactorte"]).'</td>
    </tr>
    <tr>
      <th scope="row">Automaticos:</th>
      <td>';   $sqltaumatico = Conexion::conectar()->prepare("SELECT * FROM telectrico_automatico t INNER JOIN automatico a ON a.id_automatico=t.tipo_automatico");
    $sqltaumatico -> execute();
foreach ($sqltaumatico as $key => $teautomatico) {
$idtablaautomatico=$teautomatico["id_tablero_electrico"];
if ($idtablaautomatico==$valuepesa["id_tableroelectrico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f3f6fb;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$teautomatico["cantidad"].' </div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$teautomatico["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Marca:</label> '.$teautomatico["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Tipo:</label> '.$teautomatico["tipo"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción: </label> '.$teautomatico["descripcion"].'</div><div class="col-sm-12">  <a href="../formulario/'.substr($teautomatico["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($teautomatico["rutaImg"], 3).'"></a></div></div></div>';
}
};
echo'</td>
    </tr>
      <tr>
      <th scope="row">Fuente de Poder:</th>
      <td>'; $sqltfuente = Conexion::conectar()->prepare("SELECT * FROM telectrico_fuente t INNER JOIN fuentepoder f ON f.id_fuentepoder=t.tipo_fuente");
    $sqltfuente -> execute();

foreach ($sqltfuente as $key => $valorfuente) {
$idtablafuente=$valorfuente["id_tablero_electrico"];
if ($idtablafuente==$valuepesa["id_tableroelectrico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded"  style="background:#ffefef;margin-bottom:5px;"><div class="row"><div cl<div class="col-sm-12"><label style="font-weight: bold;"> Marca:</label> '.$valorfuente["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valorfuente["amperaje"].'</div><div class="col-sm-12">  <label style="font-weight: bold;">Corriente: </label> '.$valorfuente["corriente"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Descripción: </label> '.$valorfuente["descripcion"].'  </div><div class="col-sm-12">  <a href="../formulario/'.substr($valorfuente["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($valorfuente["rutaImg"], 3).'"></a></div></div></div>';

}
}
echo'</td>
    </tr>
      <tr>
      <th scope="row">Variador Frecuencia:</th>
      <td>';
        $sqltvdf = Conexion::conectar()->prepare("SELECT * FROM telectrico_vdf t INNER JOIN variador_frecuencia v ON v.id_vdf=t.tipo_vdf
      ");
    $sqltvdf -> execute();
foreach ($sqltvdf as $key => $valorvdf) {
$idtablavdf=$valorvdf["id_tablero_electrico"];
if ($idtablavdf==$valuepesa["id_tableroelectrico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded style="background:#eaeaea;margin-bottom:5px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorvdf["cantidad"].'</div><div class="col-sm-12"><label style="font-weight: bold;"> P:</label> '.$valorvdf["potencia"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">M:</label> '.$valorvdf["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción:</label> '.$valorvdf["descripcion"].'</div><div class="col-sm-12">  <a href="../formulario/'.substr($valorvdf["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($valorvdf["rutaImg"], 3).'"></a></div></div> </div>';
}
};
echo'</td>
    </tr>
        <tr>
      <th scope="row">Imagen:</th>
      <td><img width="100%" src="../formulario/'.substr($valuepesa["imgte"], 3).'"> </td>
    </tr>
  </tbody>
</table>



      </div>
      </div>
      </div>';
}




if ($valuepesa["id_tableroneumatico"]=='') {
echo "<h4>Sin Registro</h4>";
 
}else{
echo'
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-warning btn-lg btn-block" data-toggle="collapse" data-target="#pesajeneumatico" aria-expanded="true" aria-controls="calidadsprockets">
          Tablero Neumatico
        </button>
      </h5>
    </div>

    <div id="pesajeneumatico" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">

 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Altura-Ancho-Fondo: </th>
      <td>'.nl2br($valuepesa["alturatn"]).'x'.nl2br($valuepesa["anchotn"]).'x'.nl2br($valuepesa["fondotn"]).'</td>
    </tr> <tr>
      <th scope="row">Automaticos: </th>
      <td>';
    $sqltneumaticoautomatico = Conexion::conectar()->prepare("SELECT * FROM tneumatico_automatico t INNER JOIN automatico a ON a.id_automatico=t.tipo_automatico");
    $sqltneumaticoautomatico -> execute();

foreach ($sqltneumaticoautomatico as $key => $valorneumaticoautomatico) {
$idtablaautomatico=$valorneumaticoautomatico["id_tablero_neumatico"];
if ($idtablaautomatico==$valuepesa["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f3f6fb;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorneumaticoautomatico["cantidad"].' </div><div class="col-sm-12"><label style="font-weight: bold;">Amperaje: </label> '.$valorneumaticoautomatico["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Marca:</label> '.$valorneumaticoautomatico["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Tipo:</label> '.$valorneumaticoautomatico["tipo"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción: </label> '.$valorneumaticoautomatico["descripcion"].'</div><div class="col-sm-12">  <a href="../formulario/'.substr($valorneumaticoautomatico["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($valorneumaticoautomatico["rutaImg"], 3).'"></a></div></div></div>';
}
}
echo '</td>
    </tr>
    <tr>
      <th scope="row">Fuente de Poder: </th>
      <td>';
  $sqlneumaticofuente = Conexion::conectar()->prepare("SELECT * FROM tneumatico_fuente t INNER JOIN fuentepoder f ON f.id_fuentepoder=t.tipo_fuente");
    $sqlneumaticofuente -> execute();
foreach ($sqlneumaticofuente as $key => $valorneumafuente) {
$idtablafuente=$valorneumafuente["id_tablero_neumatico"];
if ($idtablafuente==$valuepesa["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#ffe3e3;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorneumafuente["cantidad"].' </div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valorneumafuente["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Corriente: </label> '.$valorneumafuente["corriente"].'</div><div class="col-sm-12">  <label style="font-weight: bold;">Descripción: </label> '.$valorneumafuente["descripcion"].'</div><div class="col-sm-12">   <a href="../formulario/'.substr($valorneumafuente["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($valorneumafuente["rutaImg"], 3).'"></a></div></div></div>';

}
}
echo '</td>
    </tr>
    <tr>
      <th scope="row">Manifold:</th>
      <td>';
$tablamanifold = Conexion::conectar()->prepare("SELECT * FROM tneumatico_manifold t INNER JOIN manifold v ON v.id_manifold=t.tipo_manifold
      ");
    $tablamanifold -> execute();
foreach ($tablamanifold as $key => $valormanifold) {
$idtablamanifold=$valormanifold["id_tablero_neumatico"];
if ($idtablamanifold==$valuepesa["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f5f5f5;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Marca:</label> '.$valormanifold["marca"].' </div><div class="col-sm-12"> <label style="font-weight: bold;"> Hilo:</label> '.$valormanifold["medidas"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Cantidad Estaciones:</label> '.$valormanifold["sockets"].'</div><div class="col-sm-12"> <a href="../formulario/'.substr($valormanifold["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($valormanifold["rutaImg"], 3).'"></a></div></div></div>';
}
}

echo '</td>
    </tr>
      <tr>
      <th scope="row">PLC:</th>
      <td>';
    $sqlplc = Conexion::conectar()->prepare("SELECT * FROM tneumatico_plc t INNER JOIN plc v ON v.id_plc=t.tipo_plc
      ");
    $sqlplc -> execute();
foreach ($sqlplc as $key => $valorplc) {
$idtablavdf=$valorplc["id_tablero_neumatico"];
if ($idtablavdf==$valuepesa["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f5f5f5;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Modelo:</label> '.$valorplc["modelo"].'</div><div class="col-sm-12"><label style="font-weight: bold;"> Descripción:</label> '.$valorplc["descripcion"].'</div><div class="col-sm-12"> <a href="../formulario/'.substr($valorplc["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="50" src="../formulario/'.substr($valorplc["rutaImg"], 3).'"></a></div></div></div>';
}
}

echo '</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <img width="100%" src="../formulario/'.substr($valuepesa["imgtn"], 3).'"></td>
    </tr>
  </tbody>
</table>
       </div>
       
        </div>
         </div>


</div>
';
}





 
echo'
   


</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>';
}
 }
 ?></td>
    </tr>
    <tr>
    	<td>
<?php if ($id_descarga =='') {?>
	
<h4>No hay registro</h4>
<?php

 }
else{


      	echo '<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#descarga">
  UNIDAD DE DESCARGA
</button>';
	$sqldes = Conexion::conectar()->prepare("SELECT a.descripcion,a.id_unidad_descarga,a.cantidad_sprocket,a.medida_banda,a.eje,a.altura,a.buffer,a.cantidad_paletas,a.rutaImg descargaimg,s.id_sprockets,s.serie spro_serie,s.modelo spro_modelo,s.dientes,s.perforacion,s.descripcion descr_spro,s.rutaImg sproimg,b.id_banda,b.superficie,b.paso,b.numero_serie serie_banda,b.descripcion banda_descripcion,b.ancho ancho_banda,b.material,b.rutaImg bandaimg,r.id_rodamientos,r.modelo modelo_descanso,r.rodamiento,r.material material_descanso,r.fijaciones,r.rutaImg descansoimg,m.id_motor,m.rpm,m.marca,m.usillo,m.ancho corriente,m.capacidad potencia,m.rutaImg motorimg,p.id_paletas,p.tipo_paleta,p.medida_paleta,p.decs,p.dics,p.acs,p.aci,p.dici,p.altura altura_paleta,p.ancho ancho_paleta,p.fondo fondo_paleta,p.perforacion perforacion_paleta,p.anclaje,p.alturaeje,p.diametroeje,p.medidas_brazo_leva,p.cilindrado cilindrado_paleta,p.racors,p.orientacion,p.rutaImg paletaimg,c.id_cilindros,c.nombre nombre_cilindro,c.diametro diametro_cilindro,c.largo largo_cilindro,c.materialcuerpo,c.materialvastago,c.medidahilo,c.rutaImg cilindroImg  FROM unidad_descarga a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprocket  LEFT JOIN bandas b on b.id_banda=a.tipo_banda LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN motor m on m.id_motor=a.tipo_motor LEFT JOIN paletas p on p.id_paletas=a.tipo_paletas LEFT JOIN cilindros c on c.id_cilindros=a.tipo_cilindro where id_unidad_descarga = $id_descarga");
		$sqldes -> execute();
				foreach ($sqldes as $key => $valuedes) { 

echo'
<div class="modal" id="descarga" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 2300px;">
    <div class="modal-content">
      <div class="modal-header"  style="    color: white;
    background: #075672;">
        <h5 class="modal-title" id="exampleModalLabel">Información Unidad Descarga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
      <div class="row">
          <div class="col-sm-6">


<h5>Imagen </h5>

       <table class="table table-bordered" style="background: #d3d3ff; text-align:center;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
  
     

      <td> <a href="../formulario/'.substr($valuedes["descargaimg"], 3).'"><img  width="100%" src="../formulario/'.substr($valuedes["descargaimg"], 3).'" ></a></td>
    </tr>
  </tbody>
</table>

      </div>
                    <div class="col-sm-6">

<h5>Información Unidad de Descarga</h5>
 <table class="table table-bordered" style=" background: #075672;color:white;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($valuedes["descripcion"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sprockets : </th>
      <td>'.nl2br($valuedes["cantidad_sprocket"]).'</td>
    </tr>
    <tr>
      <th scope="row">Banda Medidas: </th>
      <td>'.nl2br($valuedes["medida_banda"]).'</td>
    </tr>
    <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($valuedes["eje"]).'</td>
    </tr>
  <tr>
      <th scope="row">Altura:</th>
      <td>'.nl2br($valuedes["altura"]).'</td>
    </tr>
    <tr>
      <th scope="row">Buffer:</th>
      <td>'.nl2br($valuedes["buffer"]).'</td>
    </tr>
     <tr>
      <th scope="row">Cantidad Paletas:</th>
      <td>'.nl2br($valuedes["cantidad_paletas"]).'</td>
    </tr>
  </tbody>
</table>
</div>
      </div>
                  <h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>
      <div class="row"  style="margin-top: 20px;    font-size: 12px;">



<div class="col-sm-12">
<div id="accordion">';

if ($valuedes["id_sprockets"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#descargasprockets" aria-expanded="true" aria-controls="calidadsprockets">
          Sprockets
        </button>
      </h5>
    </div>

    <div id="descargasprockets" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Serie: </th>
      <td>'.nl2br($valuedes["spro_serie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuedes["spro_modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($valuedes["dientes"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($valuedes["perforacion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuedes["descr_spro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuedes["sproimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["sproimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}


if ($valuedes["id_banda"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#descargabanda" aria-expanded="true" aria-controls="calidadsprockets">
          Banda
        </button>
      </h5>
    </div>

    <div id="descargabanda" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Superficie: </th>
      <td>'.nl2br($valuedes["superficie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($valuedes["paso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($valuedes["serie_banda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($valuedes["ancho_banda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuedes["banda_descripcion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuedes["bandaimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["bandaimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}



if ($valuedes["id_motor"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#descargamotor" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="descargamotor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
<tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($valuedes["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($valuedes["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($valuedes["corriente"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($valuedes["potencia"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuedes["motorimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["motorimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}



 if ($valuedes["id_rodamientos"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#descargadescanso" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="descargadescanso" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
  <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuedes["modelo_descanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($valuedes["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($valuedes["material_descanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($valuedes["fijaciones"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuedes["descansoimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["descansoimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}



      if ($valuedes["id_paletas"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#descargapaletas" aria-expanded="true" aria-controls="calidadsprockets">
          Paletas
        </button>
      </h5>
    </div>

    <div id="descargapaletas" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered table-sm" style="font-size: 12px;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Tipo: </th>
      <td>'.nl2br($valuedes["tipo_paleta"]).'</td>


    </tr>

    <tr>
      <th scope="row">Medida Paleta : </th>
      <td>'.nl2br($valuedes["medida_paleta"]).'</td>
    </tr>
     <tr>
  
      <th class="bg-info" scope="row" colspan="2">Medida Bujes</th>
  
    </tr>
    <tr class="table-info">
      <th  scope="row">Diametro Exterior Cuerpo Superior: </th>
      <td>'.nl2br($valuedes["decs"]).'</td>
    </tr>
       <tr class="table-info">
      <th scope="row">Diametro Interior Cuerpo Inferior:</th>
      <td>'.nl2br($valuedes["dics"]).'</td>
    </tr>
       <tr class="table-info">
      <th scope="row">Altura Cuerpo Superior:</th>
      <td>'.nl2br($valuedes["acs"]).'</td>
    </tr>
     <tr class="table-info">
      <th scope="row">Altura Cuerpo Inferior:</th>
      <td>'.nl2br($valuedes["aci"]).'</td>
    </tr>
     <tr class="table-info">
      <th scope="row">Diametro Interior Cuerpo Inferior:</th>
      <td>'.nl2br($valuedes["dici"]).'</td>
    </tr>
      <tr>
       <tr>
      <th class="bg-danger" scope="row" colspan="2">Medida Housing</th>
    </tr>
  <tr class="table-danger">
      <th  scope="row">Altura: </th>
      <td>'.nl2br($valuedes["altura_paleta"]).'</td>
    </tr>
      <tr class="table-danger">
      <th  scope="row">Ancho: </th>
      <td>'.nl2br($valuedes["ancho_paleta"]).'</td>
    </tr>
      <tr class="table-danger">
      <th  scope="row">Fondo: </th>
      <td>'.nl2br($valuedes["fondo_paleta"]).'</td>
    </tr>
     <tr class="table-danger">
      <th  scope="row">Perforación: </th>
      <td>'.nl2br($valuedes["perforacion_paleta"]).'</td>
    </tr>
    <tr class="table-danger">
      <th  scope="row">Anclaje: </th>
      <td>'.nl2br($valuedes["anclaje"]).'</td>
    </tr>
      <tr>
      <th class="bg-success" scope="row" colspan="2">Medida Eje</th>
    </tr>
 <tr class="table-success">
      <th  scope="row">Altura: </th>
      <td>'.nl2br($valuedes["alturaeje"]).'</td>
    </tr>
     <tr class="table-success">
      <th  scope="row">Diametro: </th>
      <td>'.nl2br($valuedes["diametroeje"]).'</td>
    </tr>
    <tr>
      <th scope="row">Medida Brazo Leva:</th>
      <td>'.nl2br($valuedes["medidas_brazo_leva"]).'</td>
    </tr>
     <tr>
      <th scope="row">Cilindrado:</th>
      <td>'.nl2br($valuedes["cilindrado_paleta"]).'</td>
    </tr>
      <tr>
      <th scope="row">Racors:</th>
      <td>'.nl2br($valuedes["racors"]).'</td>
    </tr>
      <tr>
      <th scope="row">Orientacion:</th>
      <td>'.nl2br($valuedes["orientacion"]).'</td>
    </tr>
        <tr>
      <th scope="row">Imagen:</th>
      <td>';
if($valuedes["paletaimg"]==''){
echo'<h3>No hay imagen</h3>';
}else{
      echo'
<a href="../formulario/'.substr($valuedes["paletaimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["paletaimg"], 3).'"></a>';
}
echo'</td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}




      if ($valuedes["id_cilindros"]=='') {
echo "<h4>Sin Registro</h4>";

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#descargacilindro" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="descargacilindro" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Nombre: </th>
      <td>'.nl2br($valuedes["nombre_cilindro"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro : </th>
      <td>'.nl2br($valuedes["diametro_cilindro"]).'</td>
    </tr>
    <tr>
      <th scope="row">Largo:</th>
      <td>'.nl2br($valuedes["largo_cilindro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Material Cuerpo:</th>
      <td>'.nl2br($valuedes["materialcuerpo"]).'</td>
    </tr>
<tr>
      <th scope="row">Material Vastago:</th>
      <td>'.nl2br($valuedes["materialvastago"]).'</td>
    </tr>
    <tr>
      <th scope="row">Medida Hilo:</th>
      <td>'.nl2br($valuedes["medidahilo"]).'</td>
    </tr>

      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuedes["cilindroImg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["cilindroImg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}



echo'

      </div>

      </div>';

  
      echo '
      
  

      

      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>

';
}
 }
 ?>

    	</td>
    </tr>

  </tbody>
</table>



<button class="back-to-top" type="button"><i class="fas fa-arrow-up"></i></button>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
