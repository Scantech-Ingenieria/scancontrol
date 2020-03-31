<div class="modal fade" id="modal-insertar-motor"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo Motor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-motor">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Marca" name="Marca">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">RPM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="RPM" name="Rpm">
            </div>
          </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Diametro Usillo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Diametro Usillo" name="Usillo">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Corriente</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Corriente" name="Ancho">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Potencia</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Potencia" name="Capacidad">
            </div>
          </div>
         
              <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenMotor" name="imagenMotor">
              <img src="" id="imgMotor" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertarmotor">
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
<div class="modal fade" id="modal-editar-motor"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar motor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-motor">
         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Marca" name="Marca">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">RPM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="RPM" name="Rpm">
            </div>
          </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Diametro Usillo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Diametro Usillo" name="Usillo">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Corriente</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Corriente" name="Ancho">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Potencia</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Potencia" name="Capacidad">
            </div>
          </div>
         
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenMotorEditar" name="imagenMotor" >
              <img src="" id="imgMotor" alt="" class="thumbnail" width="200" >
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarMotor">
            <input type="hidden" name="rutaActual">
          <input type="hidden" name="id_motor">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>