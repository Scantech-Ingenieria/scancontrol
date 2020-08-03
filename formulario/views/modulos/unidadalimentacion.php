 <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Unidad de Alimentación
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-alimentacion">Agregar Unidad Alimentación <i class="fas fa-plus"></i></button>
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
<table id="example" class="table table-striped table-bordered" style="width:100%;font-size: 12px;" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                 <th>Tipo Sprockets</th>
                <th>Cantidad Sprockets</th>
                 <th>Tipo Banda</th>
                <th>Banda Medidas</th>
                <th>Eje</th>
                <th>Largo Banda</th>
                <th>Tipo Motor</th>
                <th>Tipo Descanso</th>
                <th>Precio Total</th>

                <th>Img</th>

                <th>Acciones</th>
            </tr>
        </thead>
        <tbody >
          <?php
          $tabla = ControllerAlimentacion::listarAlimentacionCtr();
          foreach ($tabla as $key => $value) {
            echo '
<tr>
<td>'.nl2br($value["id_unidad_alim"]).'</td>
<td>'.nl2br($value["alides"]).'</td>';
if ($value["id_sprockets"]=='') {
   echo '<td><p>Sin información</h5></p>';
}else{
  $preciototalsprocket=$value["cantidad_sprockets"]*$value["preciospro"];
echo'
<td><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($value["id_sprockets"]).'</div><div class="col-sm-12"><label style="font-weight: bold;"> Serie:</label> '.nl2br($value["spro_serie"]).'</div><div class="col-sm-12"><label style="font-weight: bold;">  Precio Unidad:</label>$'.number_format($value["preciospro"],'0', ',',',').'</div><div class="col-sm-12"><label style="font-weight: bold;">  Precio Total:</label>$'.number_format($preciototalsprocket,'0', ',',',').'</div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#sprocket'.$value["id_unidad_alim"].''.$value["id_sprockets"].'">
  Más información
</button></td>';

}

 echo
'<td>'.nl2br($value["cantidad_sprockets"]).'</td>';
if ($value["id_banda"]=='') {
   echo '<td><p>Sin información</h5></p>';
}else{
echo'

<td><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($value["id_banda"]).'</div><div class="col-sm-12"><label style="font-weight: bold;"> Serie:</label> '.nl2br($value["serie_banda"]).' </div><div class="col-sm-12"><label style="font-weight: bold;">  Precio Unidad:</label>$'.number_format($value["preciobanda"],'0', ',',',').'</div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#bandas'.$value["id_unidad_alim"].''.$value["id_banda"].'">
  Más información
</button></div></td>';
}
echo'
<td>'.nl2br($value["banda_medidas"]).'</td>
<td>'.nl2br($value["eje"]).'</td>
<td>'.nl2br($value["largo_banda"]).'</td>';


if ($value["id_motor"]=='') {
   echo '<td><p>Sin información</h5></p>';
}else{

echo'

<td><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($value["id_motor"]).' </div><div class="col-sm-12"><label style="font-weight: bold;"> RPM:</label> '.nl2br($value["rpm"]).' </div><div class="col-sm-12"><label style="font-weight: bold;">  Precio Unidad:</label>$'.number_format($value["preciomotor"],'0', ',',',').'</div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#motor'.$value["id_unidad_alim"].''.$value["id_motor"].'">
  Más información
</button></div></td>';
}
if ($value["id_rodamientos"]=='') {
   echo '<td><p>Sin información</h5></p>';
}else{
echo'

<td><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.nl2br($value["id_rodamientos"]).' </div><div class="col-sm-12"><label style="font-weight: bold;"> Modelo:</label> '.nl2br($value["modelo_descanso"]).' </div><div class="col-sm-12"><label style="font-weight: bold;">  Precio Unidad:</label>$'.number_format($value["descansoprecio"],'0', ',',',').'</div><button type="button" class="btn btn-success btn-xs" style="font-size:11px;margin:10px;" data-toggle="modal" data-target="#descanso'.$value["id_unidad_alim"].''.$value["id_rodamientos"].'">
  Más información
</button></div></td>';
}

$totalprecio=$value["descansoprecio"]+$value["preciomotor"]+$value["preciobanda"]+$preciototalsprocket;
echo'
<td><div class="col-sm-12"> $'.number_format($totalprecio,'0', ',',',').' </div></td>

<td><img width="100" src="'.substr($value["alimentacionimg"], 3).'"></td>

<td width="100"> <button class="btn btn-sm btn-info btnEditarAlimentacion" idAlimentacion="'.$value["id_unidad_alim"].'" data-toggle="modal" data-target="#modal-editar-alimentacion">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarAlimentacion" idAlimentacion="'.$value["id_unidad_alim"].'"  rutaImagen="'.$value["alimentacionimg"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>
            ';
          }

?>      
        </tbody>
    </table>