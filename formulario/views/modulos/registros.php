 
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-plugin icon-gradient bg-malibu-beach">
                                        </i>
                                    </div>
                                    <div>Registros 
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                      
 <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-registros">Agregar Registro <i class="fas fa-plus"></i></button>

                                    </div>
                                </div></div>
                        </div> 
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>IP</th>
                <th>Cliente</th>
                <th>ID U.A.</th>
                <th>U.A. Tipo Sprocket</th>
                <th>U.A. Tipo banda</th>



                <th>Unidad Aceleración</th>
                <th>Unidad Descarga</th>
   
                <th>Estación de Calidad</th>



                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>

              <?php
          $tabla = Controllerregistros::listarregistrosCtr();
          foreach ($tabla as $key => $value) {

            echo '
<tr>
<td>'.nl2br($value["id_unidad_balanza"]).'</td>
<td>'.nl2br($value["address"]).'</td>
<td>'.nl2br($value["nombre_cliente"]).'</td>

<td>'.nl2br($value["id_unidad_alim"]).'</td>
<td>'.nl2br($value["id_unidad_acel"]).'</td>
<td>'.nl2br($value["id_unidad_desc"]).'</td>
<td>'.nl2br($value["id_calidad"]).'</td>


<td width="100"> <button class="btn btn-sm btn-info btnEditarRegistros" idResgitros="'.$value["id_unidad_balanza"].'" data-toggle="modal" data-target="#modal-editar-registros">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarRegistros" idRegistros="'.$value["id_unidad_balanza"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>
            ';
          }
?>



        </tbody>
     
    </table>