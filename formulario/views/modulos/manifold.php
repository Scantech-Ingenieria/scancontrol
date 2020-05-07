 
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Manifold
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                         <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-manifold">Agregar Manifold <i class="fas fa-plus"></i></button>
                                    </div>
                                </div>    </div>
                        </div> 
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Hilo</th>
                <th>Cantidad de Estaciones</th>
                <th>Precio</th>

                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
   <?php
          $tabla = ControllerManifold::listarManifoldCtr();
          foreach ($tabla as $key => $value) {
            echo '
<tr>
<td>'.nl2br($value["id_manifold"]).'</td>
<td>'.nl2br($value["marca"]).'</td>
<td>'.nl2br($value["medidas"]).'</td>
<td>'.nl2br($value["sockets"]).'</td>
<td> $ '.number_format($value["precio"],'0', ',',',').'</td>


<td><img width="200" src="'.substr($value["rutaImg"], 3).'"></td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarManifold" idManifold="'.$value["id_manifold"].'" data-toggle="modal" data-target="#modal-editar-manifold">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarManifold" idManifold="'.$value["id_manifold"].'" rutaImagen="'.$value["rutaImg"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>
            ';
          }
?>
        </tbody>
     
    </table>
    <script type="text/javascript"> 
  function miles($m){
$m=number_format($m, 0, ',', '.');
return $m;

}</script>