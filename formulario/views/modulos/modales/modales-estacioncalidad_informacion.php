 

 <?php 
 $tablaa = ControllerCalidad::listarCalidadCtr();
foreach ($tablaa as $key => $value) {   
  $id_calidad=$value["id_calidad"];
   $tablasprock= ControllerCalidad::listarCalidadSprocketsCtr();
foreach ($tablasprock as $key => $valor) {
$idsprockets=$valor["id_calidad"];
if ($idsprockets==$id_calidad) { 
    
echo'
<div class="modal fade" id="sprocket'.$idsprockets.''.$valor["id_sprockets"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Sprockets</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Descripción: </th>
      <td>'.nl2br($valor["id_sprockets"]).'</td>
    </tr> <tr>
      <th scope="row">Serie: </th>
      <td>'.nl2br($valor["serie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valor["modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($valor["dientes"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($valor["perforacion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valor["descripcion"]).'</td>
    </tr>
         <tr>
      <th scope="row">Precio:</th>
      <td>$'.number_format($valor["precio"],'0', ',',',').'</td>

    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($valor["rutaImg"], 3).'"><img  width="150" src="'.substr($valor["rutaImg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
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
}

 


 $tablabandasca = ControllerCalidad::listarCalidadCtr();
foreach ($tablabandasca as $key => $value) {   
  $id_calidad=$value["id_calidad"];
  $tablabandas = ControllerCalidad::listarCalidadBandasCtr();
foreach ($tablabandas as $key => $valor) {
$idbandas=$valor["id_calidad"];
if ($idsprockets==$id_calidad) { 
    
echo'
<div class="modal fade" id="bandas'.$idbandas.''.$valor["id_banda"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Bandas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($valor["id_banda"]).'</td>
    </tr> <tr>
      <th scope="row">Superficie: </th>
      <td>'.nl2br($valor["superficie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($valor["paso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($valor["numero_serie"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valor["descripcion"]).'</td>
    </tr>
          <tr>
      <th scope="row">Precio:</th>
      <td>$'.number_format($valor["precio"],'0', ',',',').'</td>
 
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($valor["rutaImg"], 3).'"><img  width="150" src="'.substr($valor["rutaImg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
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
}

 $tablacilindrosca = ControllerCalidad::listarCalidadCtr();
foreach ($tablacilindrosca as $key => $value) {   
  $id_calidad=$value["id_calidad"];
  $tablacilindros = ControllerCalidad::listarCalidadCilindrosCtr();
foreach ($tablacilindros as $key => $valor) {
$idcilindros=$valor["id_calidad"];
if ($idcilindros==$id_calidad) { 
    
echo'
<div class="modal fade" id="cilindros'.$idcilindros.''.$valor["id_cilindros"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Cilindros</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($valor["id_cilindros"]).'</td>
    </tr> <tr>
      <th scope="row">Nombre: </th>
      <td>'.nl2br($valor["nombre"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro: </th>
      <td>'.nl2br($valor["diametro"]).'</td>
    </tr>
    <tr>
      <th scope="row">Largo:</th>
      <td>'.nl2br($valor["largo"]).'</td>
    </tr>

      <tr>
      <th scope="row">Material Cuerpo:</th>
      <td>'.nl2br($valor["materialcuerpo"]).'</td>
    </tr>
          <tr>
      <th scope="row">Precio:</th>
      <td>$'.number_format($valor["precio"],'0', ',',',').'</td>

    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($valor["rutaImg"], 3).'"><img  width="150" src="'.substr($valor["rutaImg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
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
}
 $tablasensorca = ControllerCalidad::listarCalidadCtr();
foreach ($tablasensorca as $key => $value) {   
  $id_calidad=$value["id_calidad"];
$tablasensor = ControllerCalidad::listarCalidadSensorCtr();
foreach ($tablasensor as $key => $valor) {
$idsensor=$valor["id_calidad"];
if ($idsensor==$id_calidad) { 
    
echo'
<div class="modal fade" id="sensor'.$idsensor.''.$valor["id_sensor"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Sensor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($valor["id_sensor"]).'</td>
    </tr> 
    <tr>
      <th scope="row">Tipo: </th>
      <td>'.nl2br($valor["tipo_sensor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Marca: </th>
      <td>'.nl2br($valor["marca"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valor["modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Voltaje:</th>
      <td>'.nl2br($valor["voltaje"]).'</td>
    </tr>

      <tr>
      <th scope="row">Distancia:</th>
      <td>'.nl2br($valor["distancia"]).'</td>
    </tr>
      <tr>
      <th scope="row">Contacto:</th>
      <td>'.nl2br($valor["contacto"]).'</td>
    </tr>
          <tr>
      <th scope="row">Precio:</th>
      <td>$'.number_format($valor["precio"],'0', ',',',').'</td>
   
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($valor["rutaImg"], 3).'"><img  width="150" src="'.substr($valor["rutaImg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
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
}

$tablamotorca = ControllerCalidad::listarCalidadCtr();
foreach ($tablamotorca as $key => $value) {   
  $id_calidad=$value["id_calidad"];
$tablamotor = ControllerCalidad::listarCalidadMotorCtr();
foreach ($tablamotor as $key => $valor) {
$idmotor=$valor["id_calidad"];
if ($idmotor==$id_calidad) { 
    
echo'
<div class="modal fade" id="motor'.$idmotor.''.$valor["id_motor"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Motor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($valor["id_motor"]).'</td>
    </tr> 
    <tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($valor["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($valor["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente: </th>
      <td>'.nl2br($valor["ancho"]).'</td>
    </tr>
    <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($valor["capacidad"]).'</td>
    </tr>
      <tr>
      <th scope="row">Precio:</th>
      <td>$'.number_format($valor["precio"],'0', ',',',').'</td>
   
    </tr>
    
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($valor["rutaImg"], 3).'"><img  width="150" src="'.substr($valor["rutaImg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
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
}

$tablarodamientosca = ControllerCalidad::listarCalidadCtr();
foreach ($tablarodamientosca as $key => $value) {   
  $id_calidad=$value["id_calidad"];
$tablarodamientos = ControllerCalidad::listarCalidadRodamientosCtr();
foreach ($tablarodamientos as $key => $valor) {
$id_rodamientos=$valor["id_calidad"];
if ($id_rodamientos==$id_calidad) { 
    
echo'
<div class="modal fade" id="descanso'.$id_rodamientos.''.$valor["id_rodamientos"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Descanso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($valor["id_rodamientos"]).'</td>
    </tr> 
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valor["modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento: </th>
      <td>'.nl2br($valor["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material: </th>
      <td>'.nl2br($valor["material"]).'</td>
    </tr>
    <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($valor["fijaciones"]).'</td>
    </tr>
      <tr>
      <th scope="row">Precio:</th>
      <td>$'.number_format($valor["precio"],'0', ',',',').'</td>
    </tr>
    
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($valor["rutaImg"], 3).'"><img  width="150" src="'.substr($valor["rutaImg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
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
}

 ?>

