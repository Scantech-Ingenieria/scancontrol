<div class="modal fade" id="modal-insertar-tableroelectrico"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo Tablero eléctrico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-tableroelectrico">
          <div class="form-group row">
            <label class="col-2 col-sm-2 col-form-label">Medidas</label>
            <div class="col-3 col-sm-2" style="padding-right: 1px;">
              <input type="text" class="form-control" placeholder="Altura" name="Altura">
            </div>
            <h5 style="margin-top: 5px;">X</h5><div class="col-3 col-sm-2" style="padding-right: 1px;padding-left: 1px;">
              <input type="text" class="form-control" placeholder="Ancho" name="Ancho">
            </div><h5 style="margin-top: 5px;">X</h5>
            <div class="col-3 col-sm-2"  style="padding-left: 1px;">
              <input type="text" class="form-control" placeholder="Fondo" name="Fondo">
            </div>
          </div>
              <div class="form-group row" style="margin-bottom: 0px;">
                
            <label class="col-2 col-sm-2 col-form-label" id="largo">Automaticos Cantidad:</label>
            <div class="col-4 col-sm-4">  
           <input type="text" class="form-control" placeholder="Cantidad" name="Cantidadautomaticos[]">
            </div>
            <label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label>
            <div class="col-3 col-sm-4">

 <select class="form-control" name="Tipo[]" >
<?php 
  $tabla = ControllerAutomatico::listarAutomaticoCtr();
echo '<option selected disabled>Seleccione tipo automatico</option>';
          foreach ($tabla as $key => $value) {
echo'<option value="'.$value["id_automatico"].'">Amperaje: '.$value["amperaje"].' / Marca: ' .$value["marca"].' / Tipo: '.$value["tipo"].'</option>';

          }
 ?>
</select>       
            </div>
            <div class="col-1 col-sm-1">
              <button style="margin-bottom: 2px" type="button" name="agregar" id="agregar" class="btn btn-info" >+</button>
            </div>
          </div>
          <div id="dinami" ></div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Ancho</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" placeholder="Ancho Milimetros" name="Ancho">
            </div>
             <label class="col-sm-1 col-form-label">Material</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" placeholder="Material" name="Material">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionTableroelectrico"></textarea>
            </div>
          </div>
              <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagen1" name="imagenTableroelectrico" required>
              <img src="" id="imagenSlider" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertartableroelectrico">
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
<div class="modal fade" id="modal-editar-tableroelectrico"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar tableroelectrico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-tableroelectrico">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nro° Serie</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Numero de Serie" name="NumeroSerie">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Superficie</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Superficie" name="Superficie">
            </div>
            <label class="col-sm-1 col-form-label">Paso</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" placeholder="Paso" name="Paso">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Ancho</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" placeholder="Ancho Milimetros" name="Ancho">
            </div>
            <label class="col-sm-1 col-form-label">Material</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" placeholder="Material" name="Material">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionTableroelectrico"></textarea>
            </div>
          </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenEditar1" name="imagenTableroelectrico" >
              <img src="" id="imagenSlider" alt="" class="thumbnail" width="200" >
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarTableroelectrico">
            <input type="hidden" name="rutaActual">
          <input type="hidden" name="id_tableroelectrico">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>