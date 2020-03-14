<div class="modal fade" id="modal-insertar-registros"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
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
            <label class="col-sm-3 col-form-label" id="largo">Cliente</label> 
             <div class="col-sm-9">
<select class="form-control" name="Balanza" required>
<?php 
 $tabla = Controllertabla::listartablaCtr();
echo '<option selected disabled>Seleccione Cliente Requerida</option>';
   foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id"].'">IP: '.$value["address"].' / Cliente: '.$value["nombre_cliente"].' / Desc: '.$value["descripcion"].' / Ubicación: '.$value["ubicacion"].' </option>';
   }
  ?>
</select>
      </div>
       </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" id="largo">Estación de Calidad</label> 
             <div class="col-sm-9">
<select class="form-control" name="Calidad">
<?php 
      $tabla = ControllerCalidad::listarCalidadRegistroCtr();
  echo '<option selected value="0">Ninguna</option>';
          foreach ($tabla as $key => $value) {  
echo'<option value="'.$value["id_calidad"].'">ID: '.$value["id_calidad"].' / Numero de Puestos: '.$value["numero_puestos"].' / Tipo Sprockets: '.$value["serie"].' / Cantidad Sprockets: '.$value["cantidad_sprockets"].' / Medida Banda: '.$value["ancho"].' / Tipo Banda: '.$value["numero_serie"].'</option>';
          }
 ?>
</select>
        </div>
       </div>
      <div class="form-group row">
            <label class="col-sm-3 col-form-label" id="largo">Unidad de Alimentación</label> 
             <div class="col-sm-9">
<select class="form-control" name="Alimentación" required>
<?php 
          $tabla = ControllerAlimentacion::listarAlimentacionRegistroCtr();
                 echo '<option selected value="0">Ninguna</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_unidad_alim"].'">ID: '.$value["id_unidad_alim"].' / Serie Sprockets: '.$value["serie"].' / Tipo Sprockets: '.$value["cantidad_sprockets"].' / Serie Banda: '.$value["numero_serie"].'</option>';
 }

 ?>
</select>
        </div>
       </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" id="largo">Unidad de Aceleración</label> 
             <div class="col-sm-9">
<select class="form-control" name="Aceleracion" >
<?php 
     $tabla = ControllerAceleracion::listarAceleracionRegistroCtr();
  
       echo '<option selected value="0">Ninguna</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_unidad_acel"].'">ID: '.$value["id_unidad_acel"].' / Serie Sprockets: '.$value["serie"].' / Serie Banda: '.$value["numero_serie"].' / Medida Banda: '.$value["medida_banda"].' / Eje: '.$value["eje"].'</option>';
          }
 ?>
</select>
        </div>
       </div>
            <div class="form-group row">
            <label class="col-sm-3 col-form-label" id="largo">Unidad de Pesaje</label> 
             <div class="col-sm-9">
<select class="form-control" name="Pesaje" >
<?php 
       $tabla = ControllerPesaje::listarPesajeRegistroCtr();

  echo '<option selected value="0">Ninguna</option>';
   foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_unidad_pesaje"].'">ID: '.$value["id_unidad_pesaje"].' / Tipo Sensores: '.$value["tipo_sensor"].' / Cantidad Sensores: '.$value["cantidad_sensores"].' / Tipo Sprocket: '.$value["serie"].' / Cantidad Sprocket: '.$value["cantidad_sprocket"].' / Eje: '.$value["eje"].'</option>';

   }
 ?>
</select>
        </div>
       </div>
            <div class="form-group row">
            <label class="col-sm-3 col-form-label" id="largo">Unidad de Descarga</label> 
             <div class="col-sm-9">
<select class="form-control" name="Descarga" >
<?php 
   $tabla = ControllerDescarga::listarDescargaRegistroCtr();

  echo '<option selected value="0">Ninguna</option>';
   foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_unidad_descarga"].'">Serie Sprockets: '.$value["serie"].' / Cantidad Sprockets: '.$value["cantidad_sprocket"].' / Serie Banda: '.$value["numero_serie"].' / Medida Banda: '.$value["medida_banda"].' / Eje: '.$value["eje"].'</option>';

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
  <div class="modal-dialog" role="document" style="max-width: 800px;">
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