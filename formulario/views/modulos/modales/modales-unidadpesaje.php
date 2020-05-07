<div class="modal fade" id="modal-insertar-pesaje"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Unidad Pesaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-pesaje">
               <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Sensores :</label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoSensores" >
<?php 
 $Cli = ControllerSensor::listarSensorCtr();
echo '<option selected value="">Seleccione tipo sensores</option>';
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_sensor"].'">Tipo Sensor: '.$value["tipo_sensor"].' / Marca: ' .$value["marca"].' / Modelo: ' .$value["modelo"].' / Voltaje: ' .$value["voltaje"].' / Distancia: ' .$value["distancia"].' / Contacto: ' .$value["contacto"].'</option>';
   }
 ?>
</select>

        </div>
         <label class="col-sm-2 col-form-label" id="largo">Cantidad Sensores :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad"  name="CantidadSensores">
            </div>
       </div>
      <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Sprockets :</label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoSprockets" >

<?php 
 $Cli = ControllerSprockets::listarSprocketsCtr();
echo '<option selected value="">Seleccione tipo sprocket</option>';
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_sprockets"].'">Nro° Serie: '.$value["serie"].' / Modelo: ' .$value["modelo"].' / Dientes: '.$value["dientes"].' / Perforación: '.$value["perforacion"].' / Desc: '.$value["descripcion"].'</option>';
   }
 ?>
</select>
        </div>
        <label class="col-sm-2 col-form-label" id="largo">Cantidad Sprockets :</label>
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
echo '<option selected value="">Seleccione tipo banda</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_banda"].'">Superficie: '.$value["superficie"].' / Paso: '.$value["paso"].' / Nro° Serie: '.$value["numero_serie"].' / Ancho: ' .$value["ancho"].' / Material: ' .$value["material"].' / Desc: '.$value["descripcion"].'</option>';
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
            <label class="col-sm-2 col-form-label" id="largo">Plataforma :</label> 
             <div class="col-sm-10">

<div class="row" style="margin-bottom: 10px;">
<div class="col-sm-3">

  <button class="btn btn-success entrada"> + Entrada</button></div>
<div class="col-sm-9">

<div class="row" id="entrada" style="display:none;">
<div class="col-sm-8" >
  <div class="row">
<div class="col-sm-4">
  <input  type="text" class="form-control"  placeholder="Alto"  name="EntradaAlto">

  </div>
   <div class="col-sm-4">
  <input  type="text" class="form-control"  placeholder="Ancho"  name="EntradaAncho">

  </div>
    <div class="col-sm-4">
  <input  type="text" class="form-control"  placeholder="Espesor"  name="EntradaEspesor">

  </div>
     

  </div>


</div> 
<div class="col-sm-4">
<button class="btn btn-danger btn-sm eliminarentrada"> Eliminar</button>
</div> 
</div>

</div>
</div>

<div class="row"  style="margin-bottom: 10px;">
<div class="col-sm-3">

  <button class="btn btn-primary pesaje"> + Pesaje</button></div>
<div class="col-sm-9">

<div class="row" id="pesaje" style="display:none;">
<div class="col-sm-8" >
   <div class="row">
<div class="col-sm-4">
  <input  type="text" class="form-control"  placeholder="Alto"  name="PesajeAlto">

  </div>
   <div class="col-sm-4">
  <input  type="text" class="form-control"  placeholder="Ancho"  name="PesajeAncho">

  </div>
    <div class="col-sm-4">
  <input  type="text" class="form-control"  placeholder="Espesor"  name="PesajeEspesor">

  </div>
     

  </div>
</div> 
<div class="col-sm-4">
<button class="btn btn-danger btn-sm eliminarpesaje"> Eliminar</button>
</div> 
</div>

</div>
</div>

<div class="row">
<div class="col-sm-3">

  <button class="btn btn-dark salida"> + Salida</button></div>
<div class="col-sm-9">

<div class="row" id="salida" style="display:none;">
<div class="col-sm-8" >
     <div class="row">
<div class="col-sm-4">
  <input  type="text" class="form-control"  placeholder="Alto"  name="SalidaAlto">
  </div>
   <div class="col-sm-4">
  <input  type="text" class="form-control"  placeholder="Ancho"  name="SalidaAncho">
  </div>
    <div class="col-sm-4">
  <input  type="text" class="form-control"  placeholder="Espesor"  name="SalidaEspesor">
  </div>
  </div>
</div> 
<div class="col-sm-4">
<button class="btn btn-danger btn-sm eliminarsalida"> Eliminar</button>
</div> 
</div>
</div>
</div>
            </div>
          </div>
                           <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tablero Electrico : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TableroElectrico" >
<?php 
 $tablatableroelectrico = ControllerTableroelectrico::listarTableroelectricoCtr();
echo '<option selected value="">Seleccione Tablero Electrico</option>';
          foreach ($tablatableroelectrico as $key => $value) {
echo'<option value="'.$value["id_tableroelectrico"].'">ID: '.$value["id_tableroelectrico"].' / Altura: '.$value["altura"].' / Ancho: '.$value["ancho"].' / Fondo: '.$value["fondo"].'/ Contactor: '.$value["contactor"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>
                           <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tablero Neumatico : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TableroNeumatico" >
<?php 
 $tablatableroneumatico = ControllerTableroneumatico::listarTableroneumaticoCtr();
echo '<option selected value="">Seleccione Tablero Neumatico</option>';
          foreach ($tablatableroneumatico as $key => $value) {
echo'<option value="'.$value["id_tableroneumatico"].'">ID: '.$value["id_tableroneumatico"].' / Altura: '.$value["altura"].' / Ancho: '.$value["ancho"].' / Fondo: '.$value["fondo"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>
                            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenPesaje" name="imagenPesaje">
              <img src="" id="imgPesaje" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertarpesaje">
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
<div class="modal fade" id="modal-editar-pesaje"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar pesaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-pesaje">
              <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Sensores :</label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoSensores" >
<?php 
 $Cli = ControllerSensor::listarSensorCtr();
echo '<option selected value="">Seleccione tipo sensores</option>';
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_sensor"].'">Tipo Sensor: '.$value["tipo_sensor"].' / Marca: ' .$value["marca"].' / Modelo: ' .$value["modelo"].' / Voltaje: ' .$value["voltaje"].' / Distancia: ' .$value["distancia"].' / Contacto: ' .$value["contacto"].'</option>';
   }
 ?>
</select>

        </div>
         <label class="col-sm-2 col-form-label" id="largo">Cantidad Sensores :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Cantidad"  name="CantidadSensores">
            </div>
       </div>
      
      <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Sprockets :</label> 
             <div class="col-sm-4">
<select class="form-control" name="TipoSprockets" >

<?php 
 $Cli = ControllerSprockets::listarSprocketsCtr();
echo '<option selected value="">Seleccione tipo sprocket</option>';
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_sprockets"].'">Nro° Serie: '.$value["serie"].' / Modelo: ' .$value["modelo"].' / Dientes: '.$value["dientes"].' / Perforación: '.$value["perforacion"].' / Desc: '.$value["descripcion"].'</option>';
   }
 ?>
</select>
        </div>
        <label class="col-sm-2 col-form-label" id="largo">Cantidad Sprockets :</label>
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
echo '<option selected value="">Seleccione tipo banda</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_banda"].'">Superficie: '.$value["superficie"].' / Paso: '.$value["paso"].' / Nro° Serie: '.$value["numero_serie"].' / Ancho: ' .$value["ancho"].' / Material: ' .$value["material"].' / Desc: '.$value["descripcion"].'</option>';
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
              <label class="col-sm-2 col-form-label" id="largo" >Motor : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TipoMotor" >
<?php 
$tablamotor = ControllerMotor::listarMotorCtr();
echo '<option selected value="" >Seleccione tipo motor</option>';
          foreach ($tablamotor as $key => $value) {
echo'<option value="'.$value["id_motor"].'">ID: '.$value["id_motor"].' / RPM: '.$value["rpm"].' / Diametro Usillo: '.$value["usillo"].' / Corriente: '.$value["ancho"].' / Potencia: '.$value["capacidad"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>
              <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" id="largo" >Descanso : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TipoRodamientos" >
<?php 
$tabla = ControllerRodamientos::listarRodamientosCtr();
echo '<option selected value="">Seleccione tipo rodamiento</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_rodamientos"].'">ID: '.$value["id_rodamientos"].' / Modelo: ' .$value["modelo"].' / Rodamiento: ' .$value["rodamiento"].' / Material: ' .$value["material"].' / Fijaciones: ' .$value["fijaciones"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>

                    <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Plataforma :</label> 
             <div class="col-sm-10">
              <div class="row" style="margin-bottom: 10px;">
             <label class="col-sm-2 col-form-label" id="largo">Entrada </label> 
             <div class="col-sm-2">
  <input type="text" class="form-control" placeholder="Alto"  name="AltoEntrada">
              </div>
                          <div class="col-sm-2">
  <input type="text" class="form-control" placeholder="Ancho"  name="AnchoEntrada">
              </div>
                           <div class="col-sm-2">
  <input type="text" class="form-control" placeholder="Espesor"  name="EspesorEntrada">
              </div>   

              </div>
         <div class="row" style="margin-bottom: 10px;">
             <label class="col-sm-2 col-form-label" id="largo">Pesaje </label> 
             <div class="col-sm-2">
  <input type="text" class="form-control" placeholder="Alto"  name="AltoPesaje">
              </div>
                          <div class="col-sm-2">
  <input type="text" class="form-control" placeholder="Ancho"  name="AnchoPesaje">
              </div>
                           <div class="col-sm-2">
  <input type="text" class="form-control" placeholder="Espesor"  name="EspesorPesaje">
              </div>   

              </div>
      <div class="row">
             <label class="col-sm-2 col-form-label" id="largo">Salida </label> 
             <div class="col-sm-2">
  <input type="text" class="form-control" placeholder="Alto"  name="AltoSalida">
              </div>
                          <div class="col-sm-2">
  <input type="text" class="form-control" placeholder="Ancho"  name="AnchoSalida">
              </div>
                           <div class="col-sm-2">
  <input type="text" class="form-control" placeholder="Espesor"  name="EspesorSalida">
              </div>   

              </div>
            </div>
    
        </div>

                            <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tablero Electrico : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TableroElectrico" >
<?php 
 $tablatableroelectrico = ControllerTableroelectrico::listarTableroelectricoCtr();
echo '<option selected value="">Seleccione Tablero Electrico</option>';
          foreach ($tablatableroelectrico as $key => $value) {
echo'<option value="'.$value["id_tableroelectrico"].'">ID: '.$value["id_tableroelectrico"].' / Altura: '.$value["altura"].' / Ancho: '.$value["ancho"].' / Fondo: '.$value["fondo"].'/ Contactor: '.$value["contactor"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>
                           <div class="form-group row"> 
              <label class="col-sm-2 col-form-label" style="padding-left:10px;padding-right:0px;">Tablero Neumatico : </label>
            <div class="col-sm-10">
             <select class="form-control" name="TableroNeumatico" >
<?php 
 $tablatableroneumatico = ControllerTableroneumatico::listarTableroneumaticoCtr();
echo '<option selected value="">Seleccione Tablero Neumatico</option>';
          foreach ($tablatableroneumatico as $key => $value) {
echo'<option value="'.$value["id_tableroneumatico"].'">ID: '.$value["id_tableroneumatico"].' / Altura: '.$value["altura"].' / Ancho: '.$value["ancho"].' / Fondo: '.$value["fondo"].'</option>';
          }
 ?>
</select>
            </div>   
          </div>

                   <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenPesajeEditar" name="imagenPesaje" >
              <img src="" id="imgPesaje" alt="" class="thumbnail" width="200" >
            </div>
          </div>
            <input type="hidden" name="rutaActual">
          
          <input type="hidden" name="tipoOperacion" value="actualizarPesaje">
  
          <input type="hidden" name="id_pesaje">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  
function ocultar(){
document.getElementById('#entrada').style.display = 'none';
}


$(".entrada").click(function() {
$("#entrada").show("slow");
});

$(".eliminarentrada").click(function() {
$("#entrada").hide(1500);
});

$(".pesaje").click(function() {
$("#pesaje").show("slow");
});

$(".eliminarpesaje").click(function() {
$("#pesaje").hide(1500);
});

$(".salida").click(function() {
$("#salida").show("slow");
});

$(".eliminarsalida").click(function() {
$("#salida").hide(1500);
});

</script>