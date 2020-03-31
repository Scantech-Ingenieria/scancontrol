<div class="modal fade" id="modal-insertar-calidad"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nueva Estación de Calidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-calidad">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">N° Puestos</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nro de puestos" name="Puestos">
            </div>
          </div>
           <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tipo Sprocket :</label>
            <div class="col-sm-4">
              <select class="form-control" name="TipoSprockets" >
                <?php 
                 $tabla = ControllerSprockets::listarSprocketsCtr();
echo '<option selected value="">Seleccione tipo sprocket</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_sprockets"].'">Nro° Serie: '.$value["serie"].' / Modelo: ' .$value["modelo"].' / Desc: '.$value["descripcion"].'</option>';
   }
 ?>
              </select>     
            </div>
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Cantidad Sprocket : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad" name="CantidadSprocket">
            </div>
          </div>
                <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tipo Banda : </label>
            <div class="col-sm-4">
<select class="form-control" name="TipoBandas" >
<?php 
$tabla = ControllerBanda::listarBandaCtr();
echo '<option selected value="">Seleccione tipo banda</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_banda"].'">Nro° Serie: '.$value["numero_serie"].' / Material: ' .$value["material"].' / Desc: '.$value["descripcion"].'</option>';
          }
 ?>
</select>
            </div>
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Medida Banda : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Medida" name="MedidaBanda">
            </div>
        
          </div>
                 <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Eje : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Eje" name="Eje">
            </div>


            
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Cilindros : </label>
            <div class="col-sm-4">
              <select class="form-control" name="TipoCilindros" >
<?php 
$tablacilindros = ControllerCilindros::listarCilindrosCtr();
echo '<option selected value="">Seleccione tipo cilindro</option>';
          foreach ($tablacilindros as $key => $value) {
echo'<option value="'.$value["id_cilindros"].'">ID: '.$value["id_cilindros"].' / Nombre: '.$value["nombre"].' / Diametro: ' .$value["diametro"].' / Largo: '.$value["largo"].' / Material Cuerpo: '.$value["materialcuerpo"].' / Material Vastago: '.$value["materialvastago"].' / Medida Hilo: '.$value["medidahilo"].'</option>';
          }
 ?>
</select>
            </div>
          </div>
             <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tipo Botoneras : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Tipo Botoneras" name="TipoBotoneras">
            </div>
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Cantidad Botoneras : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad Botoneras" name="CantidadBotoneras">
            </div>
        
          </div>
              <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tipo Sensores : </label>
            <div class="col-sm-4">
           <select class="form-control" name="TipoSensores" >
<?php 
 $Cli = ControllerSensor::listarSensorCtr();
echo '<option selected value="">Seleccione tipo sensores</option>';
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_sensor"].'">Tipo Sensor: '.$value["tipo_sensor"].' / Modelo: ' .$value["modelo"].'</option>';
   }
 ?>
</select>
            </div>
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Cantidad Sensores : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad Sensores" name="CantidadSensores">
            </div>
          </div>
               <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Racors : </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Racors" name="Racors">
            </div>

            </div>
      

            <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Motor : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TipoMotor" >
<?php 
 $tablamotor = ControllerMotor::listarMotorCtr();
echo '<option selected value="">Seleccione tipo Motor</option>';
          foreach ($tablamotor as $key => $value) {
echo'<option value="'.$value["id_motor"].'">ID: '.$value["id_motor"].' / RPM: '.$value["rpm"].'/ Usillo: '.$value["usillo"].' / Ancho: '.$value["ancho"].'/ Capacidad: '.$value["capacidad"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>
            <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Descanso : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TipoDescanso" >
<?php 
$tabla = ControllerRodamientos::listarRodamientosCtr();
echo '<option selected value="">Seleccione tipo descanso</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_rodamientos"].'">ID: '.$value["id_rodamientos"].' / Modelo: ' .$value["modelo"].' / Rodamiento: ' .$value["rodamiento"].' / Material: ' .$value["material"].' / Fijaciones: ' .$value["fijaciones"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>
          <input type="hidden" name="tipoOperacion" value="insertarcalidad">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Datos</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- EDITAR SLIDER -->
<div class="modal fade" id="modal-editar-calidad"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 800px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Estación de Calidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-calidad">
            <div class="form-group row">
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">N° Puestos</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nro de puestos" name="Puestos">
            </div>
          </div>
           <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tipo Sprocket :</label>
            <div class="col-sm-4">
              <select class="form-control" name="TipoSprockets" >
                <?php 
                 $tabla = ControllerSprockets::listarSprocketsCtr();
echo '<option selected disabled>Seleccione tipo sprocket</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_sprockets"].'">Nro° Serie: '.$value["serie"].' / Modelo: ' .$value["modelo"].' / Desc: '.$value["descripcion"].'</option>';
   }
 ?>
              </select>     
            </div>
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Cantidad Sprocket : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad" name="CantidadSprocket">
            </div>
          </div>
                <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tipo Banda : </label>
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
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Medida Banda : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Medida" name="MedidaBanda">
            </div>
        
          </div>
                 <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Eje : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Eje" name="Eje">
            </div>


            
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Cilindros : </label>
            <div class="col-sm-4">
              <select class="form-control" name="TipoCilindros" >
<?php 
$tablacilindros = ControllerCilindros::listarCilindrosCtr();
echo '<option selected disabled>Seleccione tipo cilindro</option>';
          foreach ($tablacilindros as $key => $value) {
echo'<option value="'.$value["id_cilindros"].'">ID: '.$value["id_cilindros"].' / Nombre: '.$value["nombre"].' / Diametro: ' .$value["diametro"].' / Largo: '.$value["largo"].' / Material Cuerpo: '.$value["materialcuerpo"].' / Material Vastago: '.$value["materialvastago"].' / Medida Hilo: '.$value["medidahilo"].'</option>';
          }
 ?>
</select>
            </div>
          </div>
             <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tipo Botoneras : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Tipo Botoneras" name="TipoBotoneras">
            </div>
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Cantidad Botoneras : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad Botoneras" name="CantidadBotoneras">
            </div>
        
          </div>
              <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tipo Sensores : </label>
            <div class="col-sm-4">
           <select class="form-control" name="TipoSensores" >
<?php 
 $Cli = ControllerSensor::listarSensorCtr();
echo '<option selected disabled>Seleccione tipo sensores</option>';
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_sensor"].'">Tipo Sensor: '.$value["tipo_sensor"].' / Modelo: ' .$value["modelo"].'</option>';
   }
 ?>
</select>
            </div>
            <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Cantidad Sensores : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad Sensores" name="CantidadSensores">
            </div>
          </div>
               <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Racors : </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Racors" name="Racors">
            </div>

            </div>
      

            <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Motor : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TipoMotor" >
<?php 
 $tablamotor = ControllerMotor::listarMotorCtr();
echo '<option selected disabled>Seleccione tipo Motor</option>';
          foreach ($tablamotor as $key => $value) {
echo'<option value="'.$value["id_motor"].'">ID: '.$value["id_motor"].' / RPM: '.$value["rpm"].'/ Usillo: '.$value["usillo"].' / Ancho: '.$value["ancho"].'/ Capacidad: '.$value["capacidad"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>
            <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Descanso : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TipoRodamientos" >
<?php 
$tabla = ControllerRodamientos::listarRodamientosCtr();
echo '<option selected disabled>Seleccione tipo rodamiento</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_rodamientos"].'">ID: '.$value["id_rodamientos"].' / Modelo: ' .$value["modelo"].' / Rodamiento: ' .$value["rodamiento"].' / Material: ' .$value["material"].' / Fijaciones: ' .$value["fijaciones"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarCalidad">
          <input type="hidden" name="id_calidad">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>