 <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Estación de Calidad
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-calidad">Agregar Estación de Calidad <i class="fas fa-plus"></i></button>
                                    </div>
                                </div>    </div>
                        </div>
                                                <style type="text/css">
a {
  position: relative;
}
 
#img {
  position: absolute;
  top: 100%;
  left: 100%;
  display: none;
}
 
a:hover #img {
  display: block;
}
label{
    margin-bottom: .2rem;
}
                        </style> 

        
<table id="example" class="table table-striped table-bordered" style="width:100%;font-size: 12px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>N° Puestos</th>
                <th>Tipo Sprockets</th>
                <th>Cant S.</th>
                <th>Tipo Banda</th>
                <th>Banda M.</th>
                <th>Eje</th>
                <th>Cilindros</th>
                <th>Tipo Btn.</th>
                <th>Cant Btn.</th>
                <th>Tipo Sensores</th>
                <th>Cant S.</th>
                <th>Racors</th>
                <th>Tipo Motor</th>
              
              
                <th>Descanso</th>
                  <th>Img</th>

                <th>Acciones</th>
            </tr>
        </thead>
        <tbody >
            <?php
          $tabla = ControllerCalidad::listarCalidadCtr();
          foreach ($tabla as $key => $value) {   
            $id_calidad=$value["id_calidad"];
            echo '
            
<tr>
<td>'.nl2br($value["id_calidad"]).'</td>
<td>'.nl2br($value["numero_puestos"]).'</td>';
echo '<td>';
  $tablasprockets = ControllerCalidad::listarCalidadSprocketsCtr();



  
foreach ($tablasprockets as $key => $valor) {

    $idsprockets=$valor["id_calidad"];

if ($idsprockets==$id_calidad) { 
if ($valor["tipo_sprockets"] =='') {

    echo '<p>sin información</p>'; 


}
else{
  
  
echo'
                <div class="row"><div class="col-sm-12"><label style="font-weight: bold;">
ID:</label> '.nl2br($valor["id_sprockets"]).' </div><div class="col-sm-12"><label style="font-weight: bold;">  Serie:</label> '.nl2br($valor["serie"]).'</div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#sprocket'.$idsprockets.''.$valor["id_sprockets"].'">
  Más información
</button></div>';
}
}
}
echo '</td>';
echo '<td>'.nl2br($value["cantidad_sprockets"]).'</td><td>';

  $tablabandas = ControllerCalidad::listarCalidadBandasCtr();
foreach ($tablabandas as $key => $valor) {
    $idbandas=$valor["id_calidad"];
    if ($idbandas==$id_calidad) {
if ($valor["tipo_banda"] ==''){

    echo '<p>sin información</p>';  
  

}else{

 echo'<div class="row"><div class="col-sm-12"><label style="font-weight: bold;">
ID:</label> '.nl2br($valor["id_banda"]).' </div><div class="col-sm-12"><label style="font-weight: bold;">  Serie:</label> '.nl2br($valor["numero_serie"]).'</div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#bandas'.$idbandas.''.$valor["id_banda"].'">
  Más información
</button></div>';   
 
}
}
}
echo'</td>
<td>'.nl2br($value["medida_banda"]).'</td>
<td>'.nl2br($value["eje"]).'</td><td>';

  $tablacilindros = ControllerCalidad::listarCalidadCilindrosCtr();
foreach ($tablacilindros as $key => $valor) {
    $id_cilindros=$valor["id_calidad"];
    if ($id_cilindros==$id_calidad)  {

if ($valor["cilindros"] ==''){
    echo '<p>sin información</p>';  


}else{

    echo
'<div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($valor["id_cilindros"]).'</div><div class="col-sm-12"><label style="font-weight: bold;"> Nombre:</label> '.nl2br($valor["nombre"]).' </div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;"data-toggle="modal" data-target="#cilindros'.$id_cilindros.''.$valor["id_cilindros"].'">
  Más información
</button></div>';

}
}
}

echo'</td>
<td>'.nl2br($value["tipo_botoneras"]).'</td>
<td>'.nl2br($value["cantidad_botoneras"]).'</td><td>';

$tablasensor = ControllerCalidad::listarCalidadSensorCtr();
foreach ($tablasensor as $key => $valor) {

    $id_sensor=$valor["id_calidad"];
       if ($id_sensor==$id_calidad){
if  ($valor["tipo_sensores"] =='') {
    echo '<p>sin información</p>';  

}else{
 echo'<div class="row"><div class="col-sm-12"><label style="font-weight: bold;">
ID:</label> '.nl2br($valor["id_sensor"]).' </div><div class="col-sm-12"><label style="font-weight: bold;">Tipo:</label> '.nl2br($valor["tipo_sensor"]).' </div><button style="font-size:11px;margin:10px;" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#sensor'.$id_sensor.''.$valor["id_sensor"].'">
  Más información
</button></div>';
}
}
}
echo'</td>
<td>'.nl2br($value["cantidad_sensores"]).'</td>
<td>'.nl2br($value["racors"]).'</td><td>';

$tablamotor = ControllerCalidad::listarCalidadMotorCtr();
foreach ($tablamotor as $key => $valor) {

    $id_motor=$valor["id_calidad"];
       if ($id_motor==$id_calidad) {
if($valor["tipo_motor"] =='')  {
    echo '<p>sin información</p>';  
}else{
  echo'<div class="row"><div class="col-sm-12"><label style="font-weight: bold;">
ID:</label> '.nl2br($valor["id_motor"]).' </div><div class="col-sm-12"><label style="font-weight: bold;"> RPM:</label> '.nl2br($valor["rpm"]).' </div><button type="button"style="font-size:11px;margin:10px;" class="btn btn-success btn-xs" data-toggle="modal" data-target="#motor'.$id_motor.''.$valor["id_motor"].'">
  Más información
</button></div>'; 
}
}
}
echo'</td><td>';
$tablarodamientos = ControllerCalidad::listarCalidadRodamientosCtr();
foreach ($tablarodamientos as $key => $valor) {

    $id_rodamientos=$valor["id_calidad"];
       if($id_rodamientos==$id_calidad)   {
if ($valor["tipo_descanso"] ==''){

    echo '<p>sin información</p>';  

}else{
 echo'<div class="row"><div class="col-sm-12"><label style="font-weight: bold;">
ID:</label> '.nl2br($valor["id_rodamientos"]).' </div><div class="col-sm-12"><label style="font-weight: bold;"> Modelo:</label> '.nl2br($valor["modelo"]).'</div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#descanso'.$id_rodamientos.''.$valor["id_rodamientos"].'">
  Más información
</button></div>'; 
}
}
}
echo'</td>
<td><img width="100" src="'.substr($value["rutaImg"], 3).'"></td>

<td width="100"> <button class="btn btn-sm btn-info btnEditarCalidad" idCalidad="'.$value["id_calidad"].'" data-toggle="modal" data-target="#modal-editar-calidad">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarCalidad" idCalidad="'.$value["id_calidad"].'" rutaImagen="'.$value["rutaImg"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>
            ';

          }

?>


          

        </tbody>
  
    </table>






