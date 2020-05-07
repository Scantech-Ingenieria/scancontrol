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
            <label class="col-sm-2 col-form-label" id="largo">Tipo Sprockets : </label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoSprockets" >
<?php 
 $Cli = ControllerSprockets::listarSprocketsCtr();
echo '<option selected value="">Seleccione tipo sprocket</option>';
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_sprockets"].'">Serie: '.$value["serie"].' / Modelo: ' .$value["modelo"].' / Dientes: '.$value["dientes"].' / Perforación: '.$value["perforacion"].' / Desc: '.$value["descripcion"].'</option>';
   }
 ?>
</select>
        </div>
           <label class="col-sm-2 col-form-label" id="largo">Cantidad Sprockets : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad"  name="CantidadSprockets">
            </div>

       </div>
            <div class="form-group row">
        
       <label class="col-sm-2 col-form-label">Tipo Bandas : </label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoBandas" >
<?php 
$tabla = ControllerBanda::listarBandaCtr();
echo '<option selected value="">Seleccione tipo banda</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_banda"].'">Serie: '.$value["numero_serie"].' / Material: ' .$value["material"].' / Paso: '.$value["paso"].' / Superficie: '.$value["superficie"].' / Ancho: '.$value["ancho"].' / Desc: '.$value["descripcion"].'</option>';
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
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Eje"  name="Eje">
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
echo'<option value="'.$value["id_motor"].'">ID: '.$value["id_motor"].' / RPM: '.$value["rpm"].'/ Diametro Usillo: '.$value["usillo"].' / Corriente: '.$value["ancho"].'/ Potencia: '.$value["capacidad"].'</option>';
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
                 <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenAceleracion" name="imagenAceleracion">
              <img src="" id="imgAceleracion" alt="" class="thumbnail" width="200" style="display: none">
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
            <label class="col-sm-2 col-form-label" id="largo">Tipo Sprockets : </label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoSprockets" >
<?php 
 $Cli = ControllerSprockets::listarSprocketsCtr();
echo '<option selected value="">Seleccione tipo sprocket</option>';
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_sprockets"].'">Serie: '.$value["serie"].' / Modelo: ' .$value["modelo"].' / Dientes: '.$value["dientes"].' / Perforación: '.$value["perforacion"].' / Desc: '.$value["descripcion"].'</option>';
   }
 ?>
</select>
        </div>
           <label class="col-sm-2 col-form-label" id="largo">Cantidad Sprockets : </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad"  name="CantidadSprockets">
            </div>

       </div>
            <div class="form-group row">
        
       <label class="col-sm-2 col-form-label">Tipo Bandas : </label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoBandas" >
<?php 
$tabla = ControllerBanda::listarBandaCtr();
echo '<option selected value="">Seleccione tipo banda</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_banda"].'">Serie: '.$value["numero_serie"].' / Material: ' .$value["material"].' / Paso: '.$value["paso"].' / Superficie: '.$value["superficie"].' / Ancho: '.$value["ancho"].' / Desc: '.$value["descripcion"].'</option>';
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
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Eje"  name="Eje">
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
echo'<option value="'.$value["id_motor"].'">ID: '.$value["id_motor"].' / RPM: '.$value["rpm"].'/ Diametro Usillo: '.$value["usillo"].' / Corriente: '.$value["ancho"].'/ Potencia: '.$value["capacidad"].'</option>';
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
              <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenAceleracionEditar" name="imagenAceleracion" >
              <img src="" id="imgAceleracion" alt="" class="thumbnail" width="200" >
            </div>
          </div>
            <input type="hidden" name="rutaActual">
          
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