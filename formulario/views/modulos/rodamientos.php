 <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Descanso
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">
                                         <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-rodamientos">Agregar Descanso <i class="fas fa-plus"></i></button>
                                    </div>
                                </div>    </div>
                        </div> 
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Rodamiento</th>
                <th>Material</th>
                <th>N° Fijaciones</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
    <?php
          $tabla = ControllerRodamientos::listarRodamientosCtr();
          foreach ($tabla as $key => $value) {
            echo '
<tr>
<td>'.nl2br($value["id_rodamientos"]).'</td>
<td>'.nl2br($value["modelo"]).'</td>
<td>'.nl2br($value["rodamiento"]).'</td>
<td>'.nl2br($value["material"]).'</td>
<td>'.nl2br($value["fijaciones"]).'</td>
<td> $ '.number_format($value["precio"],'0', ',',',').'</td>
<td><img width="200" src="'.substr($value["rutaImg"], 3).'"></td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarRodamientos" idRodamientos="'.$value["id_rodamientos"].'" data-toggle="modal" data-target="#modal-editar-rodamientos">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarRodamientos" idRodamientos="'.$value["id_rodamientos"].'"rutaImagen="'.$value["rutaImg"].'">
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