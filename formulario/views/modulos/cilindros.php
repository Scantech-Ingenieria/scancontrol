 
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Cilindros
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                         <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-cilindros">Agregar Cilindros <i class="fas fa-plus"></i></button>
                                    </div>
                                </div>    </div>
                        </div> 
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Diametro-Largo</th>
                <th>Material Cuerpo</th>
                <th>Material Vastago</th>
                <th>Medida Hilo</th>
                <th>Precio</th>

                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
   <?php
          $tabla = ControllerCilindros::listarCilindrosCtr();
          foreach ($tabla as $key => $value) {
            echo '
<tr>
<td>'.nl2br($value["id_cilindros"]).'</td>
<td>'.nl2br($value["nombre"]).'</td>
<td>'.nl2br($value["diametro"]).'x'.$value["largo"].'</td>
<td>'.nl2br($value["materialcuerpo"]).'</td>
<td>'.nl2br($value["materialvastago"]).'</td>
<td>'.nl2br($value["medidahilo"]).'</td>
<td> $ '.number_format($value["precio"],'0', ',',',').'</td>



<td><img width="200" src="'.substr($value["rutaImg"], 3).'"></td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarCilindros" idCilindros="'.$value["id_cilindros"].'" data-toggle="modal" data-target="#modal-editar-cilindros">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarCilindros" idCilindros="'.$value["id_cilindros"].'" rutaImagen="'.$value["rutaImg"].'">
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