 
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
                <th>Motor RPM</th>


                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>


          <?php

          $tabla = ControllerAlimentacion::listarAlimentacionCtr();



          foreach ($tabla as $key => $value) {


            echo '
<tr>
<td>'.nl2br($value["id_unidad_alim"]).'</td>
<td>'.nl2br($value["serie"]).'</td>
<td>'.nl2br($value["cantidad_sprockets"]).'</td>

<td>'.nl2br($value["numero_serie"]).'</td>
<td>'.nl2br($value["banda_medidas"]).'</td>

<td>'.nl2br($value["eje"]).'</td>
<td>'.nl2br($value["motor_usillo"]).'</td>
<td>'.nl2br($value["motor_capacidad"]).'</td>
<td>'.nl2br($value["motor_rpm"]).'</td>

<td width="100"> <button class="btn btn-sm btn-info btnEditarAlimentacion" idAlimentacion="'.$value["id_unidad_alim"].'" data-toggle="modal" data-target="#modal-editar-alimentacion">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarAlimentacion" idAlimentacion="'.$value["id_unidad_alim"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>


            ';
              # code...
          }

?>
          

        </tbody>
     
    </table>