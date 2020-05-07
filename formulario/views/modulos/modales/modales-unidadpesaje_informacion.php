 

 <?php 
 $tablaa = ControllerPesaje::listarPesajeCtr();

foreach ($tablaa as $key => $value) {   
  $id_pesaje=$value["id_unidad_pesaje"];
  $id_sensor=$value["id_sensor"];

  $id_sprockets=$value["id_sprockets"];
  $id_banda=$value["id_banda"];
  $id_motor=$value["id_motor"];
  $id_descanso=$value["id_rodamientos"];
  $id_tableroelectrico=$value["id_tableroelectrico"];
  $id_tableroneumatico=$value["id_tableroneumatico"];

  $id_cilindros=$value["id_cilindros"];




echo'
<div class="modal fade" id="sensor'.$id_pesaje.''.$id_sensor.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <td>'.nl2br($value["id_sensor"]).'</td>
    </tr> <tr>
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
      <td> <a href="'.substr($value["imgsensor"], 3).'"><img  width="150" src="'.substr($value["imgsensor"], 3).'"></a></td>
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


<div class="modal fade" id="sprocket'.$id_pesaje.''.$id_sprockets.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <th scope="row">ID: </th>
      <td>'.nl2br($value["id_sprockets"]).'</td>
    </tr> <tr>
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
      <td> <a href="'.substr($value["imgsprockets"], 3).'"><img  width="150" src="'.substr($value["imgsprockets"], 3).'"></a></td>
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


<div class="modal fade" id="bandas'.$id_pesaje.''.$id_banda.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Banda</h5>
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
      <td>'.nl2br($value["id_banda"]).'</td>
    </tr> <tr>
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
      <th scope="row">Material:</th>
      <td>'.nl2br($value["bandamaterial"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($value["descripcionbanda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["imgbanda"], 3).'"><img  width="150" src="'.substr($value["imgbanda"], 3).'"></a></td>
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

<div class="modal fade" id="motor'.$id_pesaje.''.$id_motor.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <td>'.nl2br($value["id_motor"]).'</td>
    </tr> <tr>
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
      <td> <a href="'.substr($value["imgmotor"], 3).'"><img  width="150" src="'.substr($value["imgmotor"], 3).'"></a></td>
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


<div class="modal fade" id="descanso'.$id_pesaje.''.$id_descanso.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <td>'.nl2br($value["id_rodamientos"]).'</td>
    </tr> <tr>
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
      <td> <a href="'.substr($value["imgdescanso"], 3).'"><img  width="150" src="'.substr($value["imgdescanso"], 3).'"></a></td>
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



<div class="modal fade" id="tableroelectrico'.$id_pesaje.''.$id_tableroelectrico.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width:1500px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Tablero Electrico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
<table id="example" class="table table-striped table-bordered" style="width:100%">
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
if ($idtablaautomatico==$id_tableroelectrico) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f3f6fb;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valor["id_automatico"].' </div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valor["cantidad"].' </div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valor["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Marca:</label> '.$valor["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Tipo:</label> '.$valor["tipo"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción: </label> '.$valor["descripcion"].'</div><div class="col-sm-12">  <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valor["rutaImg"], 3).'"></a></div></div></div>';
}
}
echo '</td>';
echo '<td>';
$tablafuente = ControllerTableroelectrico::listarTelectricofuenteCtr();
foreach ($tablafuente as $key => $valorfuente) {
$idtablafuente=$valorfuente["id_tablero_electrico"];
if ($idtablafuente==$id_tableroelectrico) {
   echo '<div class="shadow-lg p-3 mb-5 rounded"  style="background:#ffefef;margin-bottom:5px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valorfuente["id_fuentepoder"].' </div><div class="col-sm-12"><label style="font-weight: bold;"> Marca:</label> '.$valorfuente["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valorfuente["amperaje"].'</div><div class="col-sm-12">  <label style="font-weight: bold;">Corriente: </label> '.$valorfuente["corriente"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Descripción: </label> '.$valorfuente["descripcion"].'  </div><div class="col-sm-12">  <a href="'.substr($valorfuente["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valorfuente["rutaImg"], 3).'"></a></div></div></div>';

}
}
echo '</td>';
echo '<td>';
$tablavdf = ControllerTableroelectrico::listarTelectricovdfCtr();
foreach ($tablavdf as $key => $valorvdf) {
$idtablavdf=$valorvdf["id_tablero_electrico"];
if ($idtablavdf==$id_tableroelectrico) {
   echo '<div class="shadow-lg p-3 mb-5 rounded style="background:#eaeaea;margin-bottom:5px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valorvdf["id_vdf"].' </div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorvdf["cantidad"].'</div><div class="col-sm-12"><label style="font-weight: bold;"> P:</label> '.$valorvdf["potencia"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">M:</label> '.$valorvdf["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción:</label> '.$valorvdf["descripcion"].'</div><div class="col-sm-12">  <a href="'.substr($valorvdf["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valorvdf["rutaImg"], 3).'"></a></div></div> </div>';
}
}

echo '</td>';

echo '
<td><img width="100" src="'.substr($value["imgte"], 3).'"></td>

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


<div class="modal fade" id="tableroneumatico'.$id_pesaje.''.$id_tableroneumatico.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width:1500px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Tablero Electrico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
<table id="example" class="table table-striped table-bordered" style="width:100%">
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
if ($idtablaautomatico==$id_tableroneumatico) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f3f6fb;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valor["id_automatico"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valor["cantidad"].' </div><div class="col-sm-12"><label style="font-weight: bold;">Amperaje: </label> '.$valor["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Marca:</label> '.$valor["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Tipo:</label> '.$valor["tipo"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción: </label> '.$valor["descripcion"].'</div><div class="col-sm-12">  <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valor["rutaImg"], 3).'"></a></div></div></div>';
}
}
echo '</td>';
echo '<td>';
$tablafuente = ControllerTableroneumatico::listarTneumaticofuenteCtr();
foreach ($tablafuente as $key => $valorfuente) {
$idtablafuente=$valorfuente["id_tablero_neumatico"];
if ($idtablafuente==$id_tableroneumatico) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#ffe3e3;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valorfuente["id_fuentepoder"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorfuente["cantidad"].' </div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valorfuente["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Corriente: </label> '.$valorfuente["corriente"].'</div><div class="col-sm-12">  <label style="font-weight: bold;">Descripción: </label> '.$valorfuente["descripcion"].'</div><div class="col-sm-12">   <a href="'.substr($valorfuente["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valorfuente["rutaImg"], 3).'"></a></div></div></div>';

}
}
echo '</td>';
echo '<td>';
$tablamanifold = ControllerTableroneumatico::listarTneumaticomanifoldCtr();
foreach ($tablamanifold as $key => $valormanifold) {
$idtablamanifold=$valormanifold["id_tablero_neumatico"];
if ($idtablamanifold==$id_tableroneumatico) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f5f5f5;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;"> ID:</label> '.$valormanifold["id_manifold"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Marca:</label> '.$valormanifold["marca"].' </div><div class="col-sm-12"> <label style="font-weight: bold;"> Hilo:</label> '.$valormanifold["medidas"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Cantidad Estaciones:</label> '.$valormanifold["sockets"].'</div><div class="col-sm-12"> <a href="'.substr($valormanifold["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valormanifold["rutaImg"], 3).'"></a></div></div></div>';
}
}

echo '</td>';

echo '<td>';
$tablavdf = ControllerTableroneumatico::listarTneumaticoplcCtr();
foreach ($tablavdf as $key => $valorvdf) {
$idtablavdf=$valorvdf["id_tablero_neumatico"];
if ($idtablavdf==$id_tableroneumatico) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f5f5f5;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID: </label> '.$valorvdf["cantidad"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Modelo:</label> '.$valorvdf["modelo"].'</div><div class="col-sm-12"><label style="font-weight: bold;"> Descripción:</label> '.$valorvdf["descripcion"].'</div><div class="col-sm-12"> <a href="'.substr($valorvdf["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valorvdf["rutaImg"], 3).'"></a></div></div></div>';
}
}

echo '</td>';
echo '
<td><img width="100" src="'.substr($value["imgtn"], 3).'"></td>
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




 ?>

