 <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Unidad de Pesaje
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-pesaje">Agregar Unidad Pesaje <i class="fas fa-plus"></i></button>
                                    </div>
                                </div>    </div>
                        </div> 
<table id="example" class="table table-striped table-bordered" style="width:100%;font-size: 12px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Tipo Sensores</th>
                <th>Cantidad Sensores</th>
                <th>Tipo Sprockets</th>
                <th>Cantidad Sprockets</th>
                <th>Tipo Banda</th>
                <th>Banda Medidas</th>
                <th>Eje</th>
                <th>Motor</th>
                <th>Descanso</th>
                <th>Plataforma</th>
                <th>T. Electrico</th>
                <th>T. Neumatico</th>
                <th>Img</th>




                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                   <?php
          $tabla = ControllerPesaje::listarPesajeCtr();
          foreach ($tabla as $key => $value) {

            echo '
<tr>
<td>'.nl2br($value["id_unidad_pesaje"]).'</td>
<td>'.nl2br($value["pesdesc"]).'</td>';
if ($value["id_sensor"]=='') {
   echo '<td><p>Sin información</h5></p>';
}else{
echo'

<td><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($value["id_sensor"]).'</div><div class="col-sm-12"><label style="font-weight: bold;"> Tipo Sensor:</label> '.nl2br($value["tipo_sensor"]).'</div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#sensor'.$value["id_unidad_pesaje"].''.$value["id_sensor"].'">
  Más información
</button></td>';


}
echo'
<td>'.nl2br($value["cantidad_sensores"]).'</td>';
if ($value["id_sprockets"]=='') {
   echo '<td><p>Sin información</h5></p>';
}else{
echo'
<td><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($value["id_sprockets"]).'</div><div class="col-sm-12"><label style="font-weight: bold;"> Serie:</label> '.nl2br($value["seriesprockets"]).'</div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#sprocket'.$value["id_unidad_pesaje"].''.$value["id_sprockets"].'">
  Más información
</button></td>';

}

echo'<td>'.nl2br($value["cantidad_sprocket"]).'</td>';

if ($value["id_banda"]=='') {
   echo '<td><p>Sin información</h5></p>';
}else{
echo'

<td><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($value["id_banda"]).'</div><div class="col-sm-12"><label style="font-weight: bold;"> Serie:</label> '.nl2br($value["numeroseriebanda"]).' </div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#bandas'.$value["id_unidad_pesaje"].''.$value["id_banda"].'">
  Más información
</button></div></td>';
}
echo'<td>'.nl2br($value["medida_banda"]).'</td>';
echo'<td>'.nl2br($value["eje"]).'</td>';

if ($value["id_motor"]=='') {
   echo '<td><p>Sin información</h5></p>';
}else{

echo'

<td><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($value["id_motor"]).' </div><div class="col-sm-12"><label style="font-weight: bold;"> RPM:</label> '.nl2br($value["rpm"]).' </div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#motor'.$value["id_unidad_pesaje"].''.$value["id_motor"].'">
  Más información
</button></div></td>';
}
if ($value["id_rodamientos"]=='') {
   echo '<td><p>Sin información</h5></p>';
}else{
echo'

<td><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($value["id_rodamientos"]).' </div><div class="col-sm-12"><label style="font-weight: bold;"> Modelo:</label> '.nl2br($value["modelodescanso"]).' </div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#descanso'.$value["id_unidad_pesaje"].''.$value["id_rodamientos"].'">
  Más información
</button></div></td>
';
}
echo'
<td>';
if ($value["entradaalto"]!='' || $value["entradaancho"]!='' || $value["entradaespesor"]!='') {
   echo 'Entrada';
}else{
    echo '';
}
if ($value["pesajealto"]!='' || $value["pesajeancho"]!='' || $value["pesajeespesor"]!='') {
   echo' Pesaje';
}else{
    echo'';
}
if ($value["salidaalto"]!='' || $value["salidaalto"]!='' || $value["salidaalto"]!='') {
   echo' Salida';
}else{
    echo'';
}
echo '</td>';

if ($value["id_tableroelectrico"]=='') {
   echo '<td><p>Sin información</h5></p>';
}else{
echo'

<td><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($value["id_tableroelectrico"]).' </div><div class="col-sm-12"><label style="font-weight: bold;"> Altura:</label> '.nl2br($value["alturate"]).' </div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#tableroelectrico'.$value["id_unidad_pesaje"].''.$value["id_tableroelectrico"].'">
  Más información
</button></div></td>
';
}

if ($value["id_tableroneumatico"]=='') {
   echo '<td><p>Sin información</h5></p>';
}else{
echo'

<td><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($value["id_tableroneumatico"]).' </div><div class="col-sm-12"><label style="font-weight: bold;"> Altura:</label> '.nl2br($value["alturatn"]).' </div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#tableroneumatico'.$value["id_unidad_pesaje"].''.$value["id_tableroneumatico"].'">
  Más información
</button></div></td>
';
}


echo'
<td><img width="100" src="'.substr($value["imgpesaje"], 3).'"></td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarPesaje" idPesaje="'.$value["id_unidad_pesaje"].'" data-toggle="modal" data-target="#modal-editar-pesaje">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarPesaje" idPesaje="'.$value["id_unidad_pesaje"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>
            ';
          }
?>
        </tbody>
     
    </table>