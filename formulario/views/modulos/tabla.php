 
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-plugin icon-gradient bg-malibu-beach">
                                        </i>
                                    </div>
                                    <div>Información Conexiones de Balanza
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">                                    
 <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-tabla">Agregar Balanza <i class="fas fa-plus"></i></button>

                                    </div>
                                </div>    </div>
                        </div> 
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>IP</th>
                <th>Cliente</th>
                <th>Descripción</th>
                <th>Ubicación</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $tabla = Controllertabla::listartablaCtr();
          foreach ($tabla as $key => $value) {
            echo '
<tr>
<td>'.nl2br($value["id"]).'</td>
<td>'.nl2br($value["address"]).'</td>
<td>'.nl2br($value["nombre_cliente"]).'</td>
<td>'.nl2br($value["descripcion"]).'</td>
<td>'.nl2br($value["ubicacion"]).'</td>
<td>'.nl2br($value["info"]).'</td>
<td>'.nl2br($value["estado"]).'</td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarTabla" idTabla="'.$value["id"].'" data-toggle="modal" data-target="#modal-editar-tabla">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarTabla" idTabla="'.$value["id"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>';
          }
?>
        </tbody>
     
    </table>