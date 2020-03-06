 <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Unidad de Aceleración
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-aceleracion">Agregar Unidad Aceleración <i class="fas fa-plus"></i></button>
                                    </div>
                                </div>    </div>
                        </div> 
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                 <th>Tipo Sprockets</th>
                <th>Cantidad Sprockets</th>
                 <th>Tipo Banda</th>
                <th>Banda Medidas</th>
                <th>Eje</th>
                <th>Motor Usillo</th>
                <th>Motor Capacidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                  <?php
          $tabla = ControllerAceleracion::listarAceleracionCtr();
          foreach ($tabla as $key => $value) {

            echo '
<tr>
<td>'.nl2br($value["id_unidad_acel"]).'</td>
<td>'.nl2br($value["serie"]).'</td>
<td>'.nl2br($value["cantidad_sprocket"]).'</td>
<td>'.nl2br($value["numero_serie"]).'</td>
<td>'.nl2br($value["medida_banda"]).'</td>
<td>'.nl2br($value["eje"]).'</td>
<td>'.nl2br($value["motor_usillo"]).'</td>
<td>'.nl2br($value["motor_capacidad"]).'</td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarAceleracion" idAceleracion="'.$value["id_unidad_acel"].'" data-toggle="modal" data-target="#modal-editar-aceleracion">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarAceleracion" idAceleracion="'.$value["id_unidad_acel"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>
            ';
          }
?>
        </tbody>
     
    </table>