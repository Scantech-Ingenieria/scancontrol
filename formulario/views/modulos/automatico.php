 <div class="app-page-title">
        <div class="page-title-wrapper">
          <div class="page-title-heading">
            <div class="page-title-icon">
 <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
           </div>
               <div>Automático
            <div class="page-title-subheading">Descripción de la pagina.
         </div>
        </div>
      </div>
         <div class="page-title-actions">
         <div class="d-inline-block dropdown"> 
 <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-automatico">Agregar Automático <i class="fas fa-plus"></i>
 </button>
         </div>
      </div>    
  </div>
 </div> 
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Amperaje</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
          $tabla = ControllerAutomatico::listarAutomaticoCtr();
          foreach ($tabla as $key => $value) {
            echo '
<tr>
<td>'.nl2br($value["id_automatico"]).'</td>
<td>'.nl2br($value["amperaje"]).'</td>
<td>'.nl2br($value["marca"]).'</td>
<td>'.nl2br($value["tipo"]).'</td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarAutomatico" idAutomatico="'.$value["id_automatico"].'" data-toggle="modal" data-target="#modal-editar-automatico">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarAutomatico" idAutomatico="'.$value["id_automatico"].'">
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