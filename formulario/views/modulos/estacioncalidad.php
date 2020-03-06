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









<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Número Puestos</th>
         
        
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>



            <?php

          $tabla = ControllerCalidad::listarCalidadCtr();



          foreach ($tabla as $key => $value) {
            


            echo '
<tr>
<td>'.nl2br($value["id_calidad"]).'</td>

<td>'.nl2br($value["numero_puestos"]).'</td>






<td width="100"> <button class="btn btn-sm btn-info btnEditarCalidad" idCalidad="'.$value["id_calidad"].'" data-toggle="modal" data-target="#modal-editar-calidad">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarCalidad" idCalidad="'.$value["id_calidad"].'">
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