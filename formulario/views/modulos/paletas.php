 
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Paletas
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                         <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-paletas">Agregar Paletas <i class="fas fa-plus"></i></button>

                                    </div>
                                </div>    </div>
                        </div> 


<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo Paleta</th>
                <th>Medida Paleta</th>
                <th>Medida Bujes</th>
                <th>Medida Housing</th>
                <th>Medida Eje</th>
                <th>Medida Brazo Leva</th>
                <th>Cilindrado</th>
                <th>Racors</th>  
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
    <?php
          $tabla = ControllerPaletas::listarPaletasCtr();

          foreach ($tabla as $key => $value) {

            echo '
<tr>
<td>'.nl2br($value["id_paletas"]).'</td>

<td>'.nl2br($value["tipo_paleta"]).'</td>
<td>'.nl2br($value["medida_paleta"]).'</td>
<td>'.nl2br($value["medida_bujes_paleta"]).'</td>
<td>'.nl2br($value["medidas_housing"]).'</td>
<td>'.nl2br($value["medidas_eje_paleta"]).'</td>
<td>'.nl2br($value["medidas_brazo_leva"]).'</td>
<td>'.nl2br($value["cilindrado"]).'</td>
<td>'.nl2br($value["racors"]).'</td>





<td width="100"> <button class="btn btn-sm btn-info btnEditarPaletas" idPaletas="'.$value["id_paletas"].'" data-toggle="modal" data-target="#modal-editar-paletas">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarPaletas" idPaletas="'.$value["id_paletas"].'">
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