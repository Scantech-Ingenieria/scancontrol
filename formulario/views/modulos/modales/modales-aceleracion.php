<div class="modal fade" id="modal-insertar-aceleracion"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Unidad Aceleración</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-aceleracion">
      <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Sprockets :</label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoSprockets" >
<?php 
 $Cli = ControllerSprockets::listarSprocketsCtr();
echo '<option selected disabled>Seleccione tipo sprocket</option>';
   foreach ($Cli as $key => $value) {
echo'<option value="'.$value["id_sprockets"].'">Nro° Serie: '.$value["serie"].' / Modelo: ' .$value["modelo"].' / Desc: '.$value["descripcion"].'</option>';
   }
 ?>
</select>
        </div>
        <label class="col-sm-2 col-form-label" id="largo">Cantidad Sprockets</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad"  name="CantidadSprockets">
            </div>
       </div>
  <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Bandas :</label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoBandas" >
<?php 
$tabla = ControllerBanda::listarBandaCtr();
echo '<option selected disabled>Seleccione tipo banda</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_banda"].'">Nro° Serie: '.$value["numero_serie"].' / Material: ' .$value["material"].' / Desc: '.$value["descripcion"].'</option>';

          }
 ?>
</select>
        </div>
  <label class="col-sm-2 col-form-label" id="largo">Banda Medidas :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Medidas"  name="BandasMedidas">
            </div>
       </div>
              <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Eje :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Eje"  name="Eje">
            </div>
             <label class="col-sm-2 col-form-label" id="largo">Motor Usillo :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Motor Usillo"  name="MotorUsillo">
            </div>
        </div>
       <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Motor Capacidad :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Motor Capacidad"  name="MotorCapacidad">
            </div>
               <label class="col-sm-2 col-form-label" id="largo">Motor RPM :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Motor RPM"  name="RPM">
            </div>
        </div>
              <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" id="largo" >Rodamientos : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TipoRodamientos" >
<?php 
$tabla = ControllerRodamientos::listarRodamientosCtr();
echo '<option selected disabled>Seleccione tipo rodamiento</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_rodamientos"].'">ID: '.$value["id_rodamientos"].' / Modelo: ' .$value["modelo"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>
          <input type="hidden" name="tipoOperacion" value="insertaraceleracion">
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
<div class="modal fade" id="modal-editar-aceleracion"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar aceleracion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-aceleracion">

     <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Sprockets :</label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoSprockets" >
<?php 
 $Cli = ControllerSprockets::listarSprocketsCtr();
echo '<option selected disabled>Seleccione tipo sprocket</option>';
   foreach ($Cli as $key => $value) {
echo'<option value="'.$value["id_sprockets"].'">Nro° Serie: '.$value["serie"].' / Modelo: ' .$value["modelo"].' / Desc: '.$value["descripcion"].'</option>';
   }
 ?>
</select>
        </div>
        <label class="col-sm-2 col-form-label" id="largo">Cantidad Sprockets</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad"  name="CantidadSprockets">
            </div>
       </div>
  <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Bandas :</label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoBandas" >
<?php 
$tabla = ControllerBanda::listarBandaCtr();
echo '<option selected disabled>Seleccione tipo banda</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_banda"].'">Nro° Serie: '.$value["numero_serie"].' / Material: ' .$value["material"].' / Desc: '.$value["descripcion"].'</option>';

          }
 ?>
</select>
        </div>
  <label class="col-sm-2 col-form-label" id="largo">Banda Medidas :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Medidas"  name="BandasMedidas">
            </div>
       </div>
              <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Eje :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Eje"  name="Eje">
            </div>
             <label class="col-sm-2 col-form-label" id="largo">Motor Usillo :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Motor Usillo"  name="MotorUsillo">
            </div>
        </div>
     <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Motor Capacidad :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Motor Capacidad"  name="MotorCapacidad">
            </div>
               <label class="col-sm-2 col-form-label" id="largo">Motor RPM :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Motor RPM"  name="RPM">
            </div>
        </div>
              <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" id="largo" >Rodamientos : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TipoRodamientos" >
<?php 
$tabla = ControllerRodamientos::listarRodamientosCtr();
echo '<option selected disabled>Seleccione tipo rodamiento</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_rodamientos"].'">ID: '.$value["id_rodamientos"].' / Modelo: ' .$value["modelo"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarAceleracion">
          <input type="hidden" name="id_aceleracion">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>