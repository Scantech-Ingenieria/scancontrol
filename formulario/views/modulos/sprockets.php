 
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Sprockets
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                         <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-sprockets">Agregar Sprocket <i class="fas fa-plus"></i></button>

                                    </div>
                                </div>    </div>
                        </div> 


<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Serie</th>
                <th>Modelo</th>
                <th>Dientes</th>
                <th>Perforación</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
          $tabla = ControllerSprockets::listarSprocketsCtr();
          foreach ($tabla as $key => $value) {
            echo '
<tr>
<td>'.nl2br($value["id_sprockets"]).'</td>
<td>'.nl2br($value["serie"]).'</td>
<td>'.nl2br($value["modelo"]).'</td>
<td>'.nl2br($value["dientes"]).'</td>
<td>'.nl2br($value["perforacion"]).'</td>
<td>'.nl2br($value["descripcion"]).'</td>

<td> $ '.number_format($value["precio"],'0', ',',',').'</td>
<td><img width="200" src="'.substr($value["rutaImg"], 3).'"></td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarSprockets" idSprockets="'.$value["id_sprockets"].'" data-toggle="modal" data-target="#modal-editar-sprockets">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarSprockets" idSprockets="'.$value["id_sprockets"].'"rutaImagen="'.$value["rutaImg"].'">
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
    <script type="text/javascript"> 
  function miles($m){
$m=number_format($m, 0, ',', '.');
return $m;

}</script>