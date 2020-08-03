<div class="modal fade" id="modal-insertar-descarga"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Unidad Descarga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-descarga">
                             <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Descripción </label> 
             <div class="col-sm-10">
 <input type="text" class="form-control" placeholder="Descripción"  name="Descripcion">

        </div>
       </div>
      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Sprockets : </label> 
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
         <label class="col-sm-2 col-form-label" id="largo">Cantidad Sprockets  </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad"  name="CantidadSprockets">
            </div>
       </div>
  <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Bandas : </label> 
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
     <label class="col-sm-2 col-form-label" id="largo">Banda Medidas : </label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Medidas"  name="BandasMedidas">
            </div>
       </div>
            <div class="form-group row">
             
      <label class="col-sm-2 col-form-label" id="largo">Tipo Paletas : </label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoPaletas" >
<?php 
$tabla = ControllerPaletas::listarPaletasCtr();
echo '<option selected value="">Seleccione tipo paleta</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_paletas"].'">Tipo Paleta: '.$value["tipo_paleta"].' / Medida Paleta: ' .$value["medida_paleta"].' / Medida Bujes: '.$value["decs"].'x'.$value["dics"].'x'.$value["acs"].'x'.$value["aci"].'x'.$value["dici"].' / Medida Eje: '.$value["alturaeje"].'x'.$value["diametroeje"].' / Medida Brazo Leva:'.$value["medidas_brazo_leva"].' / Cilindrado: '.$value["cilindrado"].' </option>';
          }
 ?>
</select>
        </div>
              <label class="col-sm-2 col-form-label" id="largo">Cantidad Paletas : </label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Cantidad Paletas"  name="CantidadPaletas">
            </div>
        </div>

             <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Eje :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Eje"  name="Eje">
            </div>
 <label class="col-sm-2 col-form-label" id="largo">Altura :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Altura"  name="Altura">
            </div>
        </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Buffer :</label> 
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Buffer"  name="Buffer">
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
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Cilindro : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TipoCilindro" >
<?php 
  $tablacilindro = ControllerCilindros::listarCilindrosCtr();
echo '<option selected value="">Seleccione tipo cilindro</option>';
          foreach ($tablacilindro as $key => $value) {
echo'<option value="'.$value["id_cilindros"].'">ID: '.$value["id_cilindros"].' / Nombre: ' .$value["nombre"].' / Diametro-Largo: ' .$value["diametro"].'x'.$value["largo"].' / Material Cuerpo: ' .$value["materialcuerpo"].' / Material Vastago: ' .$value["materialvastago"].' / Medida Hilo: '.$value["medidahilo"].' </option>';
          }
 ?>
</select>
            </div>   
          </div>
                  <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenDescarga" name="imagenDescarga">
              <img src="" id="imgDescarga" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertardescarga">
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
<div class="modal fade" id="modal-editar-descarga"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar descarga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-descarga">
                                    <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Descripción </label> 
             <div class="col-sm-10">
 <input type="text" class="form-control" placeholder="Descripción"  name="Descripcion">

        </div>
       </div>
  <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Sprockets : </label> 
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
         <label class="col-sm-2 col-form-label" id="largo">Cantidad Sprockets  </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad"  name="CantidadSprockets">
            </div>
       </div>
  <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Bandas : </label> 
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
     <label class="col-sm-2 col-form-label" id="largo">Banda Medidas : </label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Medidas"  name="BandasMedidas">
            </div>
       </div>
            <div class="form-group row">
             
      <label class="col-sm-2 col-form-label" id="largo">Tipo Paletas : </label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoPaletas" >
<?php 
$tabla = ControllerPaletas::listarPaletasCtr();
echo '<option selected value="">Seleccione tipo paleta</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_paletas"].'">Tipo Paleta: '.$value["tipo_paleta"].' / Medida Paleta: ' .$value["medida_paleta"].' / Medida Bujes: '.$value["decs"].'x'.$value["dics"].'x'.$value["acs"].'x'.$value["aci"].'x'.$value["dici"].' / Medida Eje: '.$value["alturaeje"].'x'.$value["diametroeje"].' / Medida Brazo Leva:'.$value["medidas_brazo_leva"].' / Cilindrado: '.$value["cilindrado"].' </option>';
          }
 ?>
</select>
        </div>
              <label class="col-sm-2 col-form-label" id="largo">Cantidad Paletas : </label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Cantidad Paletas"  name="CantidadPaletas">
            </div>
        </div>

             <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Eje :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Eje"  name="Eje">
            </div>
 <label class="col-sm-2 col-form-label" id="largo">Altura :</label> 
             <div class="col-sm-4">
  <input type="text" class="form-control" placeholder="Altura"  name="Altura">
            </div>
        </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Buffer :</label> 
             <div class="col-sm-10">
  <input type="text" class="form-control" placeholder="Buffer"  name="Buffer">
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
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Cilindro : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TipoCilindro" >
<?php 
  $tablacilindro = ControllerCilindros::listarCilindrosCtr();
echo '<option selected value="">Seleccione tipo cilindro</option>';
          foreach ($tablacilindro as $key => $value) {
echo'<option value="'.$value["id_cilindros"].'">ID: '.$value["id_cilindros"].' / Nombre: ' .$value["nombre"].' / Diametro-Largo: ' .$value["diametro"].'x'.$value["largo"].' / Material Cuerpo: ' .$value["materialcuerpo"].' / Material Vastago: ' .$value["materialvastago"].' / Medida Hilo: '.$value["medidahilo"].' </option>';
          }
 ?>
</select>
            </div>   
          </div>
                 <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenDescargaEditar" name="imagenDescarga" >
              <img src="" id="imgDescarga" alt="" class="thumbnail" width="200" >
            </div>
          </div>
            <input type="hidden" name="rutaActual">
          
          <input type="hidden" name="tipoOperacion" value="actualizarDescarga">
          <input type="hidden" name="id_descarga">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>