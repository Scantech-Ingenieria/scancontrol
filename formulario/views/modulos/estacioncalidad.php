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
                        </style> 
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>N° Puestos</th>
                <th>Tipo Spro</th>
                <th>Cant Spro</th>
                <th>Tipo Banda</th>
                <th>Banda Medidas</th>
                <th>Eje</th>
                <th>Cilindros</th>
                <th>Tipo Botoneras</th>
                <th>Cantidad Botoneras</th>
                <th>Tipo Sensores</th>
                <th>Cantidad Sensores</th>
                <th>Racors</th>
                <th>Tipo Motor</th>
              
                <th>Descanso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
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
if ($valor["id_calidad"] =='') {

    echo '<h2>sin informacion</h2>';  


}
else{
  
echo'
ID: '.nl2br($valor["id_sprockets"]).' / <br> Serie: '.nl2br($valor["serie"]).' / Modelo: '.nl2br($valor["modelo"]).' / Dientes: '.nl2br($valor["dientes"]).' / Perforación: '.nl2br($valor["perforacion"]).' / <br> Descr: '.nl2br($valor["descripcion"]).' <br> <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valor["rutaImg"], 3).'"></a>';
}


}

}

echo '</td>';
echo '<td>'.nl2br($value["cantidad_sprockets"]).'</td><td>';

  $tablabandas = ControllerCalidad::listarCalidadBandasCtr();
foreach ($tablabandas as $key => $valor) {
    $idbandas=$valor["id_calidad"];
    if ($valor["tipo_banda"] !='') {
if ($idbandas==$id_calidad) {
echo'
ID: '.nl2br($valor["id_banda"]).' / Superficie: '.nl2br($valor["superficie"]).' / Paso: '.nl2br($valor["paso"]).' / Serie: '.nl2br($valor["numero_serie"]).' / <br> Ancho: '.nl2br($valor["ancho"]).'<br> <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valor["rutaImg"], 3).'"></a>';
}
}else{
 echo 'sin informacion';   
}
}
echo'</td>
<td>'.nl2br($value["medida_banda"]).'</td>
<td>'.nl2br($value["eje"]).'</td>';

  $tablacilindros = ControllerCalidad::listarCalidadCilindrosCtr();
foreach ($tablacilindros as $key => $valor) {
    $id_cilindros=$valor["id_calidad"];
    if ($valor["cilindros"] !='0') {
if ($id_cilindros==$id_calidad) {
echo
'<td>ID: '.nl2br($valor["id_cilindros"]).' / Nombre: '.nl2br($valor["nombre"]).' / Diametro: '.nl2br($valor["diametro"]).' / Largo: '.nl2br($valor["largo"]).' / Material Cuerpo: '.nl2br($valor["materialcuerpo"]).'<br> <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valor["rutaImg"], 3).'"></a></td>';
}
}else{
 echo 'sin informacion';   
}
}


echo'
<td>'.nl2br($value["tipo_botoneras"]).'</td>
<td>'.nl2br($value["cantidad_botoneras"]).'</td>';

$tablasensor = ControllerCalidad::listarCalidadSensorCtr();
foreach ($tablasensor as $key => $valor) {

    $id_sensor=$valor["id_calidad"];
       if ($valor["tipo_sensores"] !='') {
if ($id_sensor==$id_calidad) {
echo'
<td>ID: '.nl2br($valor["id_sensor"]).' / Tipo: '.nl2br($valor["tipo_sensor"]).' / Marca: '.nl2br($valor["marca"]).' / Modelo: '.nl2br($valor["modelo"]).' / Voltaje: '.nl2br($valor["voltaje"]).' / Distancia: '.nl2br($valor["distancia"]).' / Contacto: '.nl2br($valor["contacto"]).'<br> <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valor["rutaImg"], 3).'"></a></td>';
}
}else{
 echo 'sin informacion';   
}
}
echo'
<td>'.nl2br($value["cantidad_sensores"]).'</td>
<td>'.nl2br($value["racors"]).'</td>';

$tablamotor = ControllerCalidad::listarCalidadMotorCtr();
foreach ($tablamotor as $key => $valor) {

    $id_motor=$valor["id_calidad"];
       if ($valor["tipo_motor"] !='') {
if ($id_motor==$id_calidad) {
echo'
<td>ID: '.nl2br($valor["id_motor"]).' / RPM: '.nl2br($valor["rpm"]).' / D. Usillo: '.nl2br($valor["usillo"]).' / Corriente: '.nl2br($valor["ancho"]).' / Potencia: '.nl2br($valor["capacidad"]).'<br> <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valor["rutaImg"], 3).'"></a></td>';
}
}else{
 echo 'sin informacion';   
}
}

$tablarodamientos = ControllerCalidad::listarCalidadRodamientosCtr();
foreach ($tablarodamientos as $key => $valor) {

    $id_rodamientos=$valor["id_calidad"];
       if ($valor["tipo_descanso"] !='') {
if ($id_rodamientos==$id_calidad) {
echo'
<td>ID: '.nl2br($valor["id_rodamientos"]).' / Modelo: '.nl2br($valor["modelo"]).' / Rodamiento: '.nl2br($valor["rodamiento"]).' / Material: '.nl2br($valor["material"]).' / Fijaciones: '.nl2br($valor["fijaciones"]).'<br> <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valor["rutaImg"], 3).'"></a></td>';
}
}else{
 echo 'sin informacion';   
}
}
echo'
<td width="100"> <button class="btn btn-sm btn-info btnEditarCalidad" idCalidad="'.$value["id_calidad"].'" data-toggle="modal" data-target="#modal-editar-calidad">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarCalidad" idCalidad="'.$value["id_calidad"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>
            ';

          }

?>


          

        </tbody>
     
    </table>