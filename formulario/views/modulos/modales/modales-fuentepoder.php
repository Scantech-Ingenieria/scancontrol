<div class="modal fade" id="modal-insertar-fuentepoder"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nueva Fuente de Poder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-fuentepoder">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Marca" name="Marca">
            </div>
          </div>
              <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Amperaje</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Amperaje" name="Amperaje">
            </div>
            <label class="col-sm-1 col-form-label" id="largo">Corriente</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" placeholder="Corriente" name="Corriente">
            </div>
          </div>
              <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenFuentePoder" name="imagenFuentePoder" >
              <img src="" id="imgFuentePoder" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertarfuentepoder">
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
<div class="modal fade" id="modal-editar-fuentepoder"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar fuentepoder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-fuentepoder">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Marca" name="Marca">
            </div>
          </div>
              <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Amperaje</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Amperaje" name="Amperaje">
            </div>
            <label class="col-sm-1 col-form-label" id="largo">Corriente</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" placeholder="Corriente" name="Corriente">
            </div>
          </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenFuentePoderEditar" name="imagenFuentePoder" >
              <img src="" id="imgFuentePoder" alt="" class="thumbnail" width="200" >
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarFuentePoder">
            <input type="hidden" name="rutaActual">
          <input type="hidden" name="id_fuentepoder">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>