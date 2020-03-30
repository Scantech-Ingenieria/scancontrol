<div class="modal fade" id="modal-insertar-manifold"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nueva Manifold</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-manifold">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Marca" name="Marca">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hilo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Hilo" name="MedidasSalidas">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cantidad de Estaciones</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Cantidad de Estaciones" name="Sockets">
            </div>
          </div>
         
              <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenManifold" name="imagenManifold" >
              <img src="" id="imgManifold" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertarmanifold">
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
<div class="modal fade" id="modal-editar-manifold"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar manifold</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-manifold">
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Marca" name="Marca">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hilo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Hilo" name="MedidasSalidas">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cantidad de Estaciones</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Cantidad de Estaciones" name="Sockets">
            </div>
          </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenManifoldEditar" name="imagenManifold" >
              <img src="" id="imgManifold" alt="" class="thumbnail" width="200" >
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarManifold">
            <input type="hidden" name="rutaActual">
          <input type="hidden" name="id_manifold">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>