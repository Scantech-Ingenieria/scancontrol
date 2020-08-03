 <!-- Modal -->
 <style type="text/css">
   a{
    text-decoration:none;
   }
   .popover-example { 
  list-style: none;
}
.rings{
  position: relative;
}
  .rings span {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%);
  color:black;
  display:none;
  background: white;
  width: 100%;
  padding: 3px;
  font-size: 11px;
}
.rings:hover span {
  display:block;
}
.rings:hover img {
  opacity:0.3;
}
 </style>
<div 
 class="modal" id="listadoregistros" data-easein="shrinkIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
>
  <div class="modal-dialog" role="document" style="max-width: 1600px;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Grader Registradas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-striped table-dark" style="background-color:#212529">
  <thead>
    <tr>
    
      <th scope="col">Cliente</th>
      <th scope="col">Nombre Grader</th>
      <th scope="col">Estación Calidad</th>
      <th scope="col">Unidad Alimentación</th>
      <th scope="col">Unidad Aceleración</th>
      <th scope="col">Unidad Pesaje</th>
      <th scope="col">Unidad Descarga</th>
    </tr>
  </thead>
  <tbody>
  </div>
   <?php 
 $tablaare = Controllerregistros::listarregistrosCtr();
foreach ($tablaare as $key => $value) {   
?>
    <tr>
<div>


<th scope="row"><?php echo $value["cliente"]; ?></th>

<th scope="row"><?php echo $value["grader"]; ?></th>

    <td>  
<div class="rings">
<span >
Numero Puestos: <?php echo $value["puestosca"]; ?> <br> Modelo Sprockets: <?php echo $value["modelospro"]; ?><br> Cantidad Sprockets: <?php echo $value["sprocketscantidadca"]; ?><br> Serie Banda: <?php echo $value["seriebanda"]; ?><br> Supérficie: <?php echo $value["superficiebanda"]; ?><br> Eje: <?php echo $value["ejeca"]; ?><br> Nombre Cilindro : <?php echo $value["nombreci"]; ?><br> Tipo Botonera: <?php echo $value["tipobotonerasca"]; ?><br> Cantidad Botoneras: <?php echo $value["cantidadbotonerasca"]; ?><br> Tipo Sensor: <?php echo $value["tipose"]; ?><br> Cantidad Sensores: <?php echo $value["sensorescantidad"]; ?><br>RPM Motor: <?php echo $value["rpmmotor"]; ?><br>Racors: <?php echo $value["racorsca"]; ?><br>
<button style="font-size: 10px;" class="btn btn-secondary btn-sm btn-block" >Ver Más Información</button>
</span>
  <img style="width: 100%;" id="img1" style="pointer-events: none;" src="<?php  echo substr($value['imgcalidad'], 3)?>"/>
 </div>           
    </td>
      <td>
<div class="rings">
<span>
Modelo Sprockets: <?php echo $value["modelospro2"]; ?> <br> Cantidad Sprockets: <?php echo $value["cantidadsprocketsalim"]; ?> <br> Serie Banda: <?php echo $value["seriebanda2"]; ?><br> Supérficie: <?php echo $value["superficiebanda2"]; ?><br>Largo Banda: <?php echo $value["largobandaalim"]; ?><br> Eje: <?php echo $value["ejealim"]; ?>
</span>
<img style="width: 100%;" id="img1" style="pointer-events: none;" src="<?php  echo substr($value['imgalim'], 3)?>"/>
      </div>        
      </td>
      <td>
        <img style="width: 100%;" id="img1" style="pointer-events: none;" src="<?php  echo substr($value['imgacel'], 3)?>"/> </td>
      <td> <img style="width: 100%;" id="img1" style="pointer-events: none;" src="<?php  echo substr($value['imgpesajes'], 3)?>"/> </td>
      <td> <img style="width: 100%;" id="img1" style="pointer-events: none;" src="<?php  echo substr($value['imgdes'], 3)?>"/> </td>
    </tr>
    <?php
  }
    ?>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>

 <?php 
 $tablaa = ControllerCalidad::listarCalidadRegistroCtr();
foreach ($tablaa as $key => $value) {   
  $id_calidad=$value["id_calidad"];
?>
<div

class="modal" id="calida<?php echo $id_calidad; ?>" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
  


      <div class="col-sm-6">
<h5>Imagen </h5>

       <table class="table table-bordered" style="background: #d3d3ff; text-align:center;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
  
     

      <td> <a href="<?php substr($value["imgcalidad"], 3) ?>"><img  width="400" src="<?php echo substr($value["imgcalidad"], 3) ?>" ></a></td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="col-sm-6">

<h5>Información Estación de Calidad</h5>

       <table class="table table-bordered" style=" background: #075672;color:white;">
  <tbody>
    <tr>
      <th scope="row">Descripción</th>
      <td><?php echo $value["cadescrip"]; ?></td>
  
    </tr>

    <tr>
      <th scope="row">Número de puestos</th>
      <td><?php echo $value["numero_puestos"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Cantidad Sprockets</th>
      <td><?php echo $value["cantidad_sprockets"]; ?></td>
    </tr>
<tr>
      <th scope="row">Medida Banda</th>
      <td><?php echo $value["medida_banda"]; ?></td>
    </tr>
    <tr>
      <th scope="row">Eje</th>
      <td><?php echo $value["eje"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Tipo Botoneras</th>
      <td><?php echo $value["tipo_botoneras"]; ?></td>
    </tr>
       <tr>
      <th scope="row">Cantidad Botoneras</th>
      <td><?php echo $value["cantidad_botoneras"]; ?></td>
    </tr>
       <tr>
      <th scope="row">Racors</th>
      <td><?php echo $value["racors"]; ?></td>
    </tr>
  </tbody>
     

</table>
 </div>
 </div>
  <h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>
 <div class="row" style="margin-top: 20px;    font-size: 12px;">

      <div class="col-sm-2">
<h5>Sprockets</h5>

       <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Serie Sprockets</th>
      <td><?php echo $value["seriesprockets"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Modelo Sprockets</th>
      <td><?php echo $value["modelosprockets"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Dientes Sprockets</th>
      <td><?php echo $value["dientessprockets"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Perforación Sprockets</th>
      <td><?php echo $value["perforacionsprockets"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Descripción Sprockets</th>
      <td><?php echo $value["descripcionsprockets"]; ?></td>
    </tr>
   <tr>
  
     
      <th scope="row">Imagen Sprockets </th>
      <td> <a href="<?php substr($value["imgsprockets"], 3) ?>"><img  width="100" src="<?php echo substr($value["imgsprockets"], 3); ?>" ></a></td>
    </tr>
  </tbody>
</table>
</div>
      <div class="col-sm-2">
<h5>Bandas</h5>

<?php
if ($value["id_banda"]=='') {
echo "<h4>Sin Registro</h4>";
}else{
?>
       <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Superficie</th>
      <td><?php echo $value["superficie"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Paso</th>
      <td><?php echo $value["paso"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Serie</th>
      <td><?php echo $value["seriebanda"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Ancho</th>
      <td><?php echo $value["anchobanda"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Descripción </th>
      <td><?php echo $value["bandadescripcion"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Material </th>
      <td><?php echo $value["materialbanda"]; ?></td>
    </tr>
     <tr>
  
     
      <th scope="row">Imagen Banda </th>
      <td> <a href="<?php substr($value["imgbanda"], 3) ?>"><img  width="100" src="<?php echo substr($value["imgbanda"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>
<?php
}
?>
</div>
     <div class="col-sm-2">
<h5>Cilindros</h5>

<?php
if ($value["id_cilindros"]=='') {
echo "<h4>Sin Registro</h4>";
}else{
?>
       <table class="table table-bordered">
  <tbody>
 

    <tr>
      <th scope="row">Nombre</th>
      <td><?php echo $value["nombrecilindros"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Diametro</th>
      <td><?php echo $value["diametrocilindros"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Largo</th>
      <td><?php echo $value["largocilindros"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Material Cuerpo</th>
      <td><?php echo $value["materialcuerpo"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Material Vastago </th>
      <td><?php echo $value["materialvastago"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Medida Hilo </th>
      <td><?php echo $value["medidahilo"]; ?></td>
    </tr>

     <tr>
  
      <th scope="row">Imagen Banda </th>
      <td> <a href="<?php substr($value["imgcilindros"], 3) ?>"><img  width="100" src="<?php echo substr($value["imgcilindros"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>

<?php
}
?>
</div>
   <div class="col-sm-2">
<h5>Sensor</h5>
<?php
if ($value["id_sensor"]=='') {
echo "<h4>Sin Registro</h4>";
}else{

?>
 <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Tipo Sensor</th>
      <td><?php echo $value["sensortipo"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Marca</th>
      <td><?php echo $value["marcasensor"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Modelo</th>
      <td><?php echo $value["modelosensor"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Voltaje</th>
      <td><?php echo $value["voltajesensor"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Distancia </th>
      <td><?php echo $value["distanciasensor"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Contacto </th>
      <td><?php echo $value["contactosensor"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Imagen Sensor</th>
      <td> <a href="<?php substr($value["imgsensor"], 3) ?>"><img  width="100" src="<?php echo substr($value["imgsensor"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>

<?php
}
 ?>

</div>
   <div class="col-sm-2">
<h5>Descanso</h5>
<?php
if ($value["id_rodamientos"]=='') {
echo "<h4>Sin Registro</h4>";
}else{

?>
       <table class="table table-bordered">
  <tbody>

    <tr>
      <th scope="row">Modelos</th>
      <td><?php echo $value["modelodescanso"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Rodamiento</th>
      <td><?php echo $value["rodamientodescanso"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Material</th>
      <td><?php echo $value["descansomaterial"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Fijaciones</th>
      <td><?php echo $value["fijacionesdescanso"]; ?></td>
    </tr>
   

     <tr>
  
      <th scope="row">Imagen Descanso</th>
      <td> <a href="<?php substr($value["imgdescanso"], 3) ?>"><img  width="100" src="<?php echo substr($value["imgdescanso"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>
<?php
}
?>
</div>
   <div class="col-sm-2">
<h5>Motor</h5>
<?php
if ($value["id_motor"]=='') {
echo "<h4>Sin Registro</h4>";
}else{

?>
       <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Marca</th>
      <td><?php echo $value["marcamotor"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Usillo</th>
      <td><?php echo $value["usillomotor"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Ancho</th>
      <td><?php echo $value["anchomotor"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Capacidad</th>
      <td><?php echo $value["capacidadmotor"]; ?></td>
    </tr>
   

     <tr>
  
      <th scope="row">Imagen Motor</th>
      <td> <a href="<?php substr($value["imgmotor"], 3) ?>"><img  width="100" src="<?php echo substr($value["imgmotor"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>
<?php
}
?>
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

?>




 <?php 
 $tablaas = ControllerAlimentacion::listarAlimentacionCtr();

foreach ($tablaas as $key => $value) {   
  $id_alim=$value["id_unidad_alim"];
  $id_sprockets=$value["id_sprockets"];
  $id_banda=$value["id_banda"];
  $id_motor=$value["id_motor"];
  $id_descanso=$value["id_rodamientos"];



echo'



<div  class="modal" id="alim'.$id_alim.'" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
  
     

      <td> <a href="'.substr($value["alimentacionimg"], 3).'"><img  width="400" src="'.substr($value["alimentacionimg"], 3).'" ></a></td>
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
      <td>'.nl2br($value["alides"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sprockets : </th>
      <td>'.nl2br($value["cantidad_sprockets"]).'</td>
    </tr>
    <tr>
      <th scope="row">Banda Medidas: </th>
      <td>'.nl2br($value["banda_medidas"]).'</td>
    </tr>
    <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($value["eje"]).'</td>
    </tr>
     <tr>
      <th scope="row">Largo Banda:</th>
      <td>'.nl2br($value["largo_banda"]).'</td>
    </tr>
   
  </tbody>
</table>
</div>
      </div>
      <h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>
      <div class="row" style="margin-top: 20px;    font-size: 12px;">


      <div class="col-sm-3">

<h5>Sprockets</h5>';

if ($value["id_sprockets"]=='') {
echo "<h4>Sin Registro</h4>";
}else{
echo'
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Serie: </th>
      <td>'.nl2br($value["spro_serie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($value["spro_modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($value["dientes"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($value["perforacion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($value["descr_spro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["sproimg"], 3).'"><img  width="100" src="'.substr($value["sproimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}

echo'
</div>
      <div class="col-sm-3">
<h5>Banda</h5>';
if ($value["id_banda"]=='') {
echo "<h4>Sin Registro</h4>";

}else{
echo'
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Superficie: </th>
      <td>'.nl2br($value["superficie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($value["paso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($value["serie_banda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($value["ancho_banda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($value["banda_descripcion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["bandaimg"], 3).'"><img  width="100" src="'.substr($value["bandaimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}

echo
'
</div>
      <div class="col-sm-3">
<h5>Motor</h5>';
if ($value["id_motor"]=='') {
echo "<h4>Sin Registro</h4>";
 
}else{
echo'
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($value["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($value["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($value["corriente"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($value["potencia"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["motorimg"], 3).'"><img  width="100" src="'.substr($value["motorimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}


echo'
</div>
      <div class="col-sm-3">
<h5>Descanso</h5>';

if ($value["id_rodamientos"]=='') {
echo "<h4>Sin Registro</h4>";

}else{
  echo'
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($value["modelo_descanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($value["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($value["material_descanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($value["fijaciones"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["descansoimg"], 3).'"><img  width="100" src="'.substr($value["descansoimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}

echo'
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


 $tablaass = ControllerAceleracion::listarAceleracionCtr();

foreach ($tablaass as $key => $value) { 

  $id_acel=$value["id_unidad_acel"];
  $id_sprockets=$value["id_sprockets"];
  $id_banda=$value["id_banda"];
  $id_motor=$value["id_motor"];
  $id_descanso=$value["id_rodamientos"];
echo'


<div class="modal" id="acel'.$id_acel.'" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
  
     

      <td> <a href="'.substr($value["imgaceleracion"], 3).'"><img  width="400" src="'.substr($value["imgaceleracion"], 3).'" ></a></td>
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
      <td>'.nl2br($value["aceldescrip"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sprockets : </th>
      <td>'.nl2br($value["cantidad_sprockets"]).'</td>
    </tr>
    <tr>
      <th scope="row">Banda Medidas: </th>
      <td>'.nl2br($value["banda_medidas"]).'</td>
    </tr>
    <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($value["eje"]).'</td>
    </tr>
  
   
  </tbody>
</table>
</div>
      </div>
            <h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>
            <div class="row"  style="margin-top: 20px;    font-size: 12px;">

      <div class="col-sm-3">
      <h5>Sprockets</h5>';

      if ($value["id_sprockets"]=='') {
echo "<h4>Sin Registro</h4>";
       
      }else{
      echo' <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Serie: </th>
      <td>'.nl2br($value["spro_serie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($value["spro_modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($value["dientes"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($value["perforacion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($value["descr_spro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["sproimg"], 3).'"><img  width="100" src="'.substr($value["sproimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
      }



echo'
      </div>
      <div class="col-sm-3">
      <h5>Banda</h5>';
      if ($value["id_banda"]=='') {
echo "<h4>Sin Registro</h4>";
        # code...
      }else{
      echo'
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Superficie: </th>
      <td>'.nl2br($value["superficie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($value["paso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($value["serie_banda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($value["ancho_banda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($value["banda_descripcion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["bandaimg"], 3).'"><img  width="100" src="'.substr($value["bandaimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';    
      }

echo'
      </div>
      <div class="col-sm-3">
      <h5>Motor</h5>';

if ($value["id_motor"]=='') {
echo "<h4>Sin Registro</h4>";
  # code...
}else{

echo'
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($value["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($value["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($value["corriente"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($value["potencia"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["motorimg"], 3).'"><img  width="100" src="'.substr($value["motorimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}

echo'
      </div>
      <div class="col-sm-3">
      <h5>Descanso</h5>';

if ($value["id_rodamientos"]=='') {
echo "<h4>Sin Registro</h4>";
  # code...
}else{
    echo'
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($value["modelo_descanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($value["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($value["material_descanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($value["fijaciones"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["descansoimg"], 3).'"><img  width="100" src="'.substr($value["descansoimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}
  
echo'
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

 $tablaa = ControllerDescarga::listarDescargaCtr();

foreach ($tablaa as $key => $value) {   
  $id_descarga=$value["id_unidad_descarga"];
  $id_sprockets=$value["id_sprockets"];
  $id_banda=$value["id_banda"];
  $id_motor=$value["id_motor"];
  $id_descanso=$value["id_rodamientos"];
  $id_paletas=$value["id_paletas"];
  $id_cilindros=$value["id_cilindros"];




echo'

<div class="modal" id="desc'.$id_descarga.'" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
  
     

      <td> <a href="'.substr($value["descargaimg"], 3).'"><img  width="400" src="'.substr($value["descargaimg"], 3).'" ></a></td>
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
      <th scope="row">Descripción: </th>
      <td>'.nl2br($value["descdescrip"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sprockets : </th>
      <td>'.nl2br($value["cantidad_sprocket"]).'</td>
    </tr>
    <tr>
      <th scope="row">Banda Medidas: </th>
      <td>'.nl2br($value["medida_banda"]).'</td>
    </tr>
    <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($value["eje"]).'</td>
    </tr>
  <tr>
      <th scope="row">Altura:</th>
      <td>'.nl2br($value["altura"]).'</td>
    </tr>
    <tr>
      <th scope="row">Buffer:</th>
      <td>'.nl2br($value["buffer"]).'</td>
    </tr>
     <tr>
      <th scope="row">Cantidad Paletas:</th>
      <td>'.nl2br($value["cantidad_paletas"]).'</td>
    </tr>
  </tbody>
</table>
</div>
      </div>
                  <h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>
      <div class="row"  style="margin-top: 20px;    font-size: 12px;">

      <div class="col-sm-2">
      <h5>Sprockets</h5>';

if ($value["id_sprockets"]=='') {
echo "<h4>Sin Registro</h4>";

}else{
      echo'

 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>

      <th scope="row">Serie: </th>
      <td>'.nl2br($value["spro_serie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($value["spro_modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($value["dientes"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($value["perforacion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($value["descr_spro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["sproimg"], 3).'"><img  width="100" src="'.substr($value["sproimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}

echo'
      </div>
     

      <div class="col-sm-2">
      <h5>Banda</h5>';
if ($value["id_banda"]=='') {
echo "<h4>Sin Registro</h4>";

}else{
echo'
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>

      <th scope="row">Superficie: </th>
      <td>'.nl2br($value["superficie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($value["paso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($value["serie_banda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($value["ancho_banda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($value["banda_descripcion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["bandaimg"], 3).'"><img  width="100" src="'.substr($value["bandaimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}

echo'
      </div>
      <div class="col-sm-2">
      <h5>Motor</h5>';

if ($value["id_motor"]=='') {
echo "<h4>Sin Registro</h4>";
  # code...
}else{
echo'
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>

      <th scope="row">RPM: </th>
      <td>'.nl2br($value["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($value["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($value["corriente"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($value["potencia"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["motorimg"], 3).'"><img  width="100" src="'.substr($value["motorimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}

echo'
      </div>
      <div class="col-sm-2">
      <h5>Descanso</h5>';
      if ($value["id_rodamientos"]=='') {
echo "<h4>Sin Registro</h4>";
        # code...
      }else{
     echo'

 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>

      <th scope="row">Modelo: </th>
      <td>'.nl2br($value["modelo_descanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($value["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($value["material_descanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($value["fijaciones"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["descansoimg"], 3).'"><img  width="100" src="'.substr($value["descansoimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
      }
 
echo'
      </div>

      <div class="col-sm-2">
      <h5>Paletas</h5>';
      if ($value["id_paletas"]=='') {
echo "<h4>Sin Registro</h4>";
        # code...
      }else{
    echo'

      <div class="row">
<div class="col-sm-6" >
 <table class="table table-bordered table-sm" style="font-size: 12px;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Tipo: </th>
      <td>'.nl2br($value["tipo_paleta"]).'</td>


    </tr>

    <tr>
      <th scope="row">Medida Paleta : </th>
      <td>'.nl2br($value["medida_paleta"]).'</td>
    </tr>
     <tr>
  
      <th class="bg-info" scope="row" colspan="2">Medida Bujes</th>
  
    </tr>
    <tr class="table-info">
      <th  scope="row">Diametro Exterior Cuerpo Superior: </th>
      <td>'.nl2br($value["decs"]).'</td>
    </tr>
       <tr class="table-info">
      <th scope="row">Diametro Interior Cuerpo Inferior:</th>
      <td>'.nl2br($value["dics"]).'</td>
    </tr>
       <tr class="table-info">
      <th scope="row">Altura Cuerpo Superior:</th>
      <td>'.nl2br($value["acs"]).'</td>
    </tr>
     <tr class="table-info">
      <th scope="row">Altura Cuerpo Inferior:</th>
      <td>'.nl2br($value["aci"]).'</td>
    </tr>
     <tr class="table-info">
      <th scope="row">Diametro Interior Cuerpo Inferior:</th>
      <td>'.nl2br($value["dici"]).'</td>
    </tr>
      <tr>
       <tr>
      <th class="bg-danger" scope="row" colspan="2">Medida Housing</th>
    </tr>
  <tr class="table-danger">
      <th  scope="row">Altura: </th>
      <td>'.nl2br($value["altura_paleta"]).'</td>
    </tr>
      <tr class="table-danger">
      <th  scope="row">Ancho: </th>
      <td>'.nl2br($value["ancho_paleta"]).'</td>
    </tr>
      <tr class="table-danger">
      <th  scope="row">Fondo: </th>
      <td>'.nl2br($value["fondo_paleta"]).'</td>
    </tr>
     <tr class="table-danger">
      <th  scope="row">Perforación: </th>
      <td>'.nl2br($value["perforacion_paleta"]).'</td>
    </tr>
    <tr class="table-danger">
      <th  scope="row">Anclaje: </th>
      <td>'.nl2br($value["anclaje"]).'</td>
    </tr>
      <tr>
      <th class="bg-success" scope="row" colspan="2">Medida Eje</th>
    </tr>
 <tr class="table-success">
      <th  scope="row">Altura: </th>
      <td>'.nl2br($value["alturaeje"]).'</td>
    </tr>
     <tr class="table-success">
      <th  scope="row">Diametro: </th>
      <td>'.nl2br($value["diametroeje"]).'</td>
    </tr>
    <tr>
      <th scope="row">Medida Brazo Leva:</th>
      <td>'.nl2br($value["medidas_brazo_leva"]).'</td>
    </tr>
     <tr>
      <th scope="row">Cilindrado:</th>
      <td>'.nl2br($value["cilindrado_paleta"]).'</td>
    </tr>
      <tr>
      <th scope="row">Racors:</th>
      <td>'.nl2br($value["racors"]).'</td>
    </tr>
      <tr>
      <th scope="row">Orientacion:</th>
      <td>'.nl2br($value["orientacion"]).'</td>
    </tr>
  </tbody>
</table>

      </div>
<div class="col-sm-2" >
      ';
if($value["paletaimg"]==''){
echo'<h3>No hay imagen</h3>';
}else{
      echo'
<a href="'.substr($value["paletaimg"], 3).'"><img  width="100" src="'.substr($value["paletaimg"], 3).'"></a>';
}

echo'
      </div>
      </div>';
      }
  
      echo '
      
      </div>

      <div class="col-sm-2">
      <h5>Cilindros</h5>';
      if ($value["id_cilindros"]=='') {
echo "<h4>Sin Registro</h4>";
    
      }else{
         echo'

 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Nombre: </th>
      <td>'.nl2br($value["nombre_cilindro"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro : </th>
      <td>'.nl2br($value["diametro_cilindro"]).'</td>
    </tr>
    <tr>
      <th scope="row">Largo:</th>
      <td>'.nl2br($value["largo_cilindro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Material Cuerpo:</th>
      <td>'.nl2br($value["materialcuerpo"]).'</td>
    </tr>
<tr>
      <th scope="row">Material Vastago:</th>
      <td>'.nl2br($value["materialvastago"]).'</td>
    </tr>
    <tr>
      <th scope="row">Medida Hilo:</th>
      <td>'.nl2br($value["medidahilo"]).'</td>
    </tr>

      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["cilindroImg"], 3).'"><img  width="150" src="'.substr($value["cilindroImg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>'; 
      }
    
echo'
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



  $tablapesaje = ControllerPesaje::listarPesajeCtr();

foreach ($tablapesaje as $key => $value) {   
  $id_pesaje=$value["id_unidad_pesaje"];
  $id_sprockets=$value["id_sprockets"];
  $id_banda=$value["id_banda"];
  $id_motor=$value["id_motor"];
  $id_descanso=$value["id_rodamientos"];
echo'

<div class="modal" id="pesa'.$id_pesaje.'" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
      <td> <a href="'.substr($value["imgpesaje"], 3).'"><img  width="400" src="'.substr($value["imgpesaje"], 3).'" ></a></td>
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
      <td>'.nl2br($value["pesdesc"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sensores : </th>
      <td>'.nl2br($value["cantidad_sensores"]).'</td>
    </tr>
    <tr>
      <th scope="row">Cantidad Sprockets: </th>
      <td>'.nl2br($value["cantidad_sprocket"]).'</td>
    </tr>
    <tr>
      <th scope="row">Medida Banda:</th>
      <td>'.nl2br($value["medida_banda"]).'</td>
    </tr>
  <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($value["eje"]).'</td>
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
      <td>'.nl2br($value["entradaalto"]).'</td>
      <td>'.nl2br($value["entradaancho"]).'</td>
      <td>'.nl2br($value["entradaespesor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Pesaje</th>
      <td>'.nl2br($value["pesajealto"]).'</td>
      <td>'.nl2br($value["pesajeancho"]).'</td>
      <td>'.nl2br($value["pesajeespesor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Entrada</th>
      <td>'.nl2br($value["salidaalto"]).'</td>
      <td>'.nl2br($value["salidaancho"]).'</td>
      <td>'.nl2br($value["salidaespesor"]).'</td>
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

<div class="col-sm-3">
      <h5>Sensor</h5>';

if ($value["id_sensor"]=='') {
echo "<h4>Sin Registro</h4>";

}else{
      echo'



 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Tipo : </th>
      <td>'.nl2br($value["tipo_sensor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Marca: </th>
      <td>'.nl2br($value["marcasensor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo:</th>
      <td>'.nl2br($value["modelosensor"]).'</td>
    </tr>
     <tr>
      <th scope="row">Voltaje:</th>
      <td>'.nl2br($value["voltajesensor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Distancia:</th>
      <td>'.nl2br($value["distanciasensor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Contacto:</th>
      <td>'.nl2br($value["contactosensor"]).'</td>
    </tr>
 
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["imgsensor"], 3).'"><img  width="100" src="'.substr($value["imgsensor"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}

echo' </div>';



echo'
      <div class="col-sm-2">
      <h5>Sprockets</h5>';

if ($value["id_sprockets"]=='') {
echo "<h4>Sin Registro</h4>";

}else{
      echo'



 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Serie: </th>
      <td>'.nl2br($value["seriesprockets"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($value["modelosprockets"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($value["dientessprockets"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($value["perforacionsprockets"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($value["descripcionsprockets"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["imgsprockets"], 3).'"><img  width="100" src="'.substr($value["imgsprockets"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}

echo'
      </div>
     

      <div class="col-sm-2">
      <h5>Banda</h5>';
if ($value["id_banda"]=='') {
echo "<h4>Sin Registro</h4>";

}else{
echo'
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Superficie: </th>
      <td>'.nl2br($value["superficiebanda"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($value["pasobanda"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($value["numeroseriebanda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($value["anchobanda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($value["descripcionbanda"]).'</td>
    </tr>
     <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($value["bandamaterial"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["imgbanda"], 3).'"><img  width="100" src="'.substr($value["imgbanda"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}

echo'
      </div>
      <div class="col-sm-2">
      <h5>Motor</h5>';

if ($value["id_motor"]=='') {
echo "<h4>Sin Registro</h4>";
  # code...
}else{
echo'
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($value["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($value["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($value["anchomotor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($value["capacidadmotor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["imgmotor"], 3).'"><img  width="100" src="'.substr($value["imgmotor"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
}

echo'
      </div>
      <div class="col-sm-2">
      <h5>Descanso</h5>';
      if ($value["id_rodamientos"]=='') {
echo "<h4>Sin Registro</h4>";
        # code...
      }else{
     echo'

 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($value["modelodescanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($value["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($value["materialdescanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($value["fijacionesdescanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["imgdescanso"], 3).'"><img  width="100" src="'.substr($value["imgdescanso"], 3).'"></a></td>
    </tr>
  </tbody>
</table>';
      }
 
echo'
      </div>




      </div>
<h3 style="    background: #565454;
    color: white;
    padding: 5px;">Tableros</h3>

<div class="row">
<div class="col-sm-12">

<h4 style="text-align:center;margin:20px;">Tablero Electrico</h4>';

if ($value["id_tableroelectrico"]=='') {
echo "<h4>Sin Registro</h4>";

}else{
echo 
'<table id="example" class="table table-striped table-bordered" style="width:100%;font-size: 11px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Alt-Anch-Fond</th>
            
                <th>Contactor</th>
                <th>Cantidad / Tipo Automaticos / Descr</th>
                <th>Fuente Poder</th>
                <th>Cantidad / Tipo VDF / Descr</th>
                
                <th>Img</th>
  
            </tr>
        </thead>
        <tbody style="font-size: 12px;">';



            echo '
<tr>
<td>'.nl2br($value["id_tableroelectrico"]).'</td>
<td>'.nl2br($value["alturate"]).'x'.nl2br($value["anchote"]).'x'.nl2br($value["fondote"]).' </td>';
echo '<td>'.nl2br($value["contactorte"]).'</td>';
echo '<td>';
  $tablaautomatico = ControllerTableroelectrico::listarTelectricoautomaticoCtr();
foreach ($tablaautomatico as $key => $valor) {
$idtablaautomatico=$valor["id_tablero_electrico"];
if ($idtablaautomatico==$value["id_tableroelectrico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f3f6fb;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valor["id_automatico"].' </div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valor["cantidad"].' </div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valor["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Marca:</label> '.$valor["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Tipo:</label> '.$valor["tipo"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción: </label> '.$valor["descripcion"].'</div><div class="col-sm-12">  <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="'.substr($valor["rutaImg"], 3).'"></a></div></div></div>';
}
}
echo '</td>';
echo '<td>';
$tablafuente = ControllerTableroelectrico::listarTelectricofuenteCtr();
foreach ($tablafuente as $key => $valorfuente) {
$idtablafuente=$valorfuente["id_tablero_electrico"];
if ($idtablafuente==$value["id_tableroelectrico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded"  style="background:#ffefef;margin-bottom:5px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valorfuente["id_fuentepoder"].' </div><div class="col-sm-12"><label style="font-weight: bold;"> Marca:</label> '.$valorfuente["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valorfuente["amperaje"].'</div><div class="col-sm-12">  <label style="font-weight: bold;">Corriente: </label> '.$valorfuente["corriente"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Descripción: </label> '.$valorfuente["descripcion"].'  </div><div class="col-sm-12">  <a href="'.substr($valorfuente["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="'.substr($valorfuente["rutaImg"], 3).'"></a></div></div></div>';

}
}
echo '</td>';
echo '<td>';
$tablavdf = ControllerTableroelectrico::listarTelectricovdfCtr();
foreach ($tablavdf as $key => $valorvdf) {
$idtablavdf=$valorvdf["id_tablero_electrico"];
if ($idtablavdf==$value["id_tableroelectrico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded style="background:#eaeaea;margin-bottom:5px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valorvdf["id_vdf"].' </div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorvdf["cantidad"].'</div><div class="col-sm-12"><label style="font-weight: bold;"> P:</label> '.$valorvdf["potencia"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">M:</label> '.$valorvdf["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción:</label> '.$valorvdf["descripcion"].'</div><div class="col-sm-12">  <a href="'.substr($valorvdf["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="'.substr($valorvdf["rutaImg"], 3).'"></a></div></div> </div>';
}
}

echo '</td>';

echo '
<td><img width="100" src="'.substr($value["imgte"], 3).'"></td>

</tr>
  

        </tbody>
     
    </table>';
}


    echo
'
</div>
<div class="col-sm-12">

<h4 style="text-align:center;margin:20px;">Tablero Neumatico</h4>';
if ($value["id_tableroneumatico"]=='') {
echo "<h4>Sin Registro</h4>";
 
}else{

echo'
<table id="example" class="table table-striped table-bordered" style="width:100%;font-size: 11px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Alt-Anch-Fond</th>
                <th>Cantidad / Tipo Automaticos</th> 
                 <th>Cantidad / Fuente Poder</th>
                <th>Manifold</th>
                <th>Cantidad / Tipo PLC</th>
                <th>Img</th>
            </tr>
        </thead>
        <tbody style="font-size: 12px;">';

            
      

            echo '
<tr>
<td>'.nl2br($value["id_tableroneumatico"]).'</td>
<td>'.nl2br($value["alturatn"]).'x'.nl2br($value["anchotn"]).'x'.nl2br($value["fondotn"]).' </td>';
echo '<td>';
  $tablaautomatico = ControllerTableroneumatico::listarTneumaticoautomaticoCtr();

foreach ($tablaautomatico as $key => $valor) {
$idtablaautomatico=$valor["id_tablero_neumatico"];
if ($idtablaautomatico==$value["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f3f6fb;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valor["id_automatico"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valor["cantidad"].' </div><div class="col-sm-12"><label style="font-weight: bold;">Amperaje: </label> '.$valor["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Marca:</label> '.$valor["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Tipo:</label> '.$valor["tipo"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción: </label> '.$valor["descripcion"].'</div><div class="col-sm-12">  <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="'.substr($valor["rutaImg"], 3).'"></a></div></div></div>';
}
}
echo '</td>';
echo '<td>';
$tablafuente = ControllerTableroneumatico::listarTneumaticofuenteCtr();
foreach ($tablafuente as $key => $valorfuente) {
$idtablafuente=$valorfuente["id_tablero_neumatico"];
if ($idtablafuente==$value["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#ffe3e3;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valorfuente["id_fuentepoder"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorfuente["cantidad"].' </div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valorfuente["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Corriente: </label> '.$valorfuente["corriente"].'</div><div class="col-sm-12">  <label style="font-weight: bold;">Descripción: </label> '.$valorfuente["descripcion"].'</div><div class="col-sm-12">   <a href="'.substr($valorfuente["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="'.substr($valorfuente["rutaImg"], 3).'"></a></div></div></div>';

}
}
echo '</td>';
echo '<td>';
$tablamanifold = ControllerTableroneumatico::listarTneumaticomanifoldCtr();
foreach ($tablamanifold as $key => $valormanifold) {
$idtablamanifold=$valormanifold["id_tablero_neumatico"];
if ($idtablamanifold==$value["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f5f5f5;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;"> ID:</label> '.$valormanifold["id_manifold"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Marca:</label> '.$valormanifold["marca"].' </div><div class="col-sm-12"> <label style="font-weight: bold;"> Hilo:</label> '.$valormanifold["medidas"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Cantidad Estaciones:</label> '.$valormanifold["sockets"].'</div><div class="col-sm-12"> <a href="'.substr($valormanifold["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="'.substr($valormanifold["rutaImg"], 3).'"></a></div></div></div>';
}
}

echo '</td>';

echo '<td>';
$tablavdf = ControllerTableroneumatico::listarTneumaticoplcCtr();
foreach ($tablavdf as $key => $valorvdf) {
$idtablavdf=$valorvdf["id_tablero_neumatico"];
if ($idtablavdf==$value["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f5f5f5;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID: </label> '.$valorvdf["cantidad"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Modelo:</label> '.$valorvdf["modelo"].'</div><div class="col-sm-12"><label style="font-weight: bold;"> Descripción:</label> '.$valorvdf["descripcion"].'</div><div class="col-sm-12"> <a href="'.substr($valorvdf["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="50" src="'.substr($valorvdf["rutaImg"], 3).'"></a></div></div></div>';
}
}

echo '</td>';
echo '
<td><img width="100" src="'.substr($value["imgtn"], 3).'"></td>
</tr>
        
        </tbody>
     
    </table>';
}


    echo'

</div>
</div>







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>';
}











 ?>