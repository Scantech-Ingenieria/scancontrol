<div class="modal fade" id="modal-insertar-rodamientos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo Decanso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-rodamientos">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Modelo" name="Modelo">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Rodamiento</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Rodamiento" name="Rodamiento">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Material</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Material" name="Material">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">N° Fijaciones</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="N° Fijaciones" name="Fijaciones">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenDescanso" name="imagenDescanso" required>
              <img src="" id="imgDescanso" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>


          <input type="hidden" name="tipoOperacion" value="insertarrodamientos">
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
<div class="modal fade" id="modal-editar-rodamientos"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Rodamientos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-rodamientos">
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Modelo" name="Modelo">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Rodamiento</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Rodamiento" name="Rodamiento">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Material</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Material" name="Material">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">N° Fijaciones</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="N° Fijaciones" name="Fijaciones">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenDescansoEditar" name="imagenDescanso">
              <img src="" id="imgDescanso" alt="" class="thumbnail" width="200" >
            </div>
          </div>
            <input type="hidden" name="rutaActual">

          <input type="hidden" name="tipoOperacion" value="actualizarRodamientos">
  
          <input type="hidden" name="id_rodamientos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>