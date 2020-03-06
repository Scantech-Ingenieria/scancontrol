<div class="modal fade" id="modal-insertar-registros"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-registros">
      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Balanza</label> 
             <div class="col-sm-10">
<select class="form-control" name="Clienteregistros" required>
<?php 
 $tabla = Controllertabla::listartablaCtr();
echo '<option selected disabled>Seleccione Balanza</option>';
   foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id"].'">IP: '.$value["address"].' / Cliente: '.$value["nombre_cliente"].' / Desc: '.$value["descripcion"].'</option>';
   }

  ?>
</select>
      </div>
       </div>
      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Unidad de Alimentación</label> 
             <div class="col-sm-10">
<select class="form-control" name="Clienteregistros" required>
<?php 
          $tabla = ControllerAlimentacion::listarAlimentacionCtr();
          echo '<option selected disabled>Seleccione Unidad de Alimentación</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_unidad_alim"].'">ID: '.$value["id_unidad_alim"].' Serie Sprockets: '.$value["serie"].' / Tipo Sprockets: '.$value["cantidad_sprockets"].'</option>';
          }

 ?>
</select>
        </div>
       </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Unidad de Aceleración</label> 
             <div class="col-sm-10">
<select class="form-control" name="Clienteregistros" required>
<?php 
 $Cli = Controllerregistros::listarCliCtr();
echo '<option selected disabled>Seleccione Unidad de Aceleración</option>';
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_cliente"].'">'.nl2br($value["nombre_cliente"]).'</option>';

   }

 ?>
</select>
        </div>
       </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Unidad de Descarga</label> 
             <div class="col-sm-10">
<select class="form-control" name="Clienteregistros" required>
<?php 
 $Cli = Controllerregistros::listarCliCtr();
echo '<option selected disabled>Seleccione Unidad de Descarga</option>';
   foreach ($Cli as $key => $value) {
echo'<option value="'.$value["id_cliente"].'">'.nl2br($value["nombre_cliente"]).'</option>';

   }
 ?>

</select>

        </div>
       </div>
       <div class="form-group row">
            <label class="col-sm-2 col-form-label">Estación de Calidad</label> 
             <div class="col-sm-10">
<select class="form-control" name="Clienteregistros" required>
<?php 
 $Cli = Controllerregistros::listarCliCtr();
echo '<option selected disabled>Seleccione Estación de Calidad</option>';
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_cliente"].'">'.nl2br($value["nombre_cliente"]).'</option>';

   }

 ?>
</select>
        </div>
       </div>
          <input type="hidden" name="tipoOperacion" value="insertarregistros">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- EDITAR SLIDER -->
<div class="modal fade" id="modal-editar-registros"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar registros</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-registros">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">IP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="IP"  name="tituloregistros">
            </div>
          </div>
         <!--      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cliente</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Cliente" name="Clienteregistros">
            </div>
          </div>
 -->
      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cliente</label> 

             <div class="col-sm-10">
<select class="form-control" name="Clienteregistros" required>
<?php 

 $Cli = Controllerregistros::listarCliCtr();
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_cliente"].'">'.nl2br($value["nombre_cliente"]).'</option>';

   }

 ?>
</select>
        </div>
       </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="Descripcionregistros"></textarea>
            </div>
          </div>
              <div class="form-group row">
            <label class="col-sm-2 col-form-label">Ubicaión</label>
            <div class="col-sm-10">
         <input type="text" class="form-control" placeholder="Ubicacion" name="Ubicacionregistros">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarRegistros">
          <input type="hidden" name="id_registros">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>