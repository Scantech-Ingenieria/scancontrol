<div class="modal fade" id="modal-insertar-alimentacion"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Unidad Alimentación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-alimentacion">
      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Sprockets</label> 
             <div class="col-sm-10">
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
       </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cantidad Sprockets</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Cantidad"  name="CantidadSprockets">
            </div>
          </div>

  <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Bandas</label> 
             <div class="col-sm-10">
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
       </div>
      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Banda Medidas</label> 
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Medidas"  name="BandasMedidas">
            </div>
        </div>
              <div class="form-group row">
            <label class="col-sm-2 col-form-label">Eje</label> 
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Eje"  name="Eje">
            </div>
        </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Motor Usillo</label> 
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Motor Usillo"  name="MotorUsillo">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Motor Capacidad</label> 
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Motor Capacidad"  name="MotorCapacidad">
            </div>
        </div>
    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Motor RPM</label> 
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Motor RPM"  name="MotorRpm">
            </div>
        </div>
    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Rodamientos</label> 
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
          <input type="hidden" name="tipoOperacion" value="insertaralimentacion">
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
<div class="modal fade" id="modal-editar-alimentacion"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar alimentacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-alimentacion">

      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Sprockets</label> 

             <div class="col-sm-10">
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
       </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cantidad Sprockets</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Cantidad"  name="CantidadSprockets">
            </div>
          </div>
  <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Bandas</label> 
             <div class="col-sm-10">
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
       </div>

      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Banda Medidas</label> 
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Medidas"  name="BandasMedidas">
            </div>
        </div>
              <div class="form-group row">
            <label class="col-sm-2 col-form-label">Eje</label> 
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Eje"  name="Eje">
            </div>
        </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Motor Usillo</label> 
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Motor Usillo"  name="MotorUsillo">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Motor Capacidad</label> 
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Motor Capacidad"  name="MotorCapacidad">
            </div>
        </div>
    
    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Motor RPM</label> 

             <div class="col-sm-10">

  <input type="text" class="form-control" placeholder="Motor RPM"  name="MotorRpm">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Rodamientos</label> 

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
          <input type="hidden" name="tipoOperacion" value="actualizarAlimentacion">
          <input type="hidden" name="id_alimentacion">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>