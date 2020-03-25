<div class="modal fade" id="modal-insertar-automatico"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo Automático</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-automatico">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Amperaje</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Amperaje" name="Amperaje">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Marca" name="Marca">
            </div>
          </div>
       
       <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Tipo" name="Tipo">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenAutomatico" name="imagenAutomatico" required>
              <img src="" id="imgAutomatico" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertarautomatico">
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
<div class="modal fade" id="modal-editar-automatico"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar automatico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-automatico">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Amperaje</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Amperaje" name="Amperaje">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Marca" name="Marca">
            </div>
          </div>
       
       <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Tipo" name="Tipo">
            </div>
          </div>
                <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenAutomaticoEditar" name="imagenAutomatico" >
              <img src="" id="imgAutomatico" alt="" class="thumbnail" width="200" >
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarAutomatico">
          <input type="hidden" name="rutaActual">
          <input type="hidden" name="id_automatico">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>