 
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Motor
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                         <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-motor">Agregar Motor <i class="fas fa-plus"></i></button>
                                    </div>
                                </div>    </div>
                        </div> 
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>RPM</th>
                <th>Usillo</th>
                <th>Ancho</th>
                <th>Capacidad</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
   <?php
          $tabla = ControllerMotor::listarMotorCtr();
          foreach ($tabla as $key => $value) {
            echo '
<tr>
<td>'.nl2br($value["id_motor"]).'</td>
<td>'.nl2br($value["rpm"]).'</td>
<td>'.nl2br($value["usillo"]).'</td>
<td>'.nl2br($value["ancho"]).'</td>
<td>'.nl2br($value["capacidad"]).'</td>


<td><img width="200" src="'.substr($value["rutaImg"], 3).'"></td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarMotor" idMotor="'.$value["id_motor"].'" data-toggle="modal" data-target="#modal-editar-motor">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarMotor" idMotor="'.$value["id_motor"].'" rutaImagen="'.$value["rutaImg"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>
            ';
          }
?>
        </tbody>
     
    </table>