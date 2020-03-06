 
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Bandas
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                         <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-bandas">Agregar Bandas <i class="fas fa-plus"></i></button>

                                    </div>
                                </div>    </div>
                        </div> 


<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nro° Serie</th>
                <th>Descripción</th>
                <th>Material</th>
                <th>Ancho</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>

    <?php

          $tabla = ControllerBanda::listarBandaCtr();



          foreach ($tabla as $key => $value) {


            echo '
<tr>
<td>'.nl2br($value["id_banda"]).'</td>

<td>'.nl2br($value["numero_serie"]).'</td>
<td>'.nl2br($value["descripcion"]).'</td>
<td>'.nl2br($value["material"]).'</td>
<td>'.nl2br($value["ancho"]).'</td>



<td width="100"> <button class="btn btn-sm btn-info btnEditarBanda" idBanda="'.$value["id_banda"].'" data-toggle="modal" data-target="#modal-editar-banda">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarBanda" idBanda="'.$value["id_banda"].'">
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