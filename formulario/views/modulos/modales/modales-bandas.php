<div class="modal fade" id="modal-insertar-bandas"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nueva Banda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-banda">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nro° Serie</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Numero de Serie" name="NumeroSerie">
            </div>
          </div>


          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionBanda"></textarea>
            </div>
          </div>

           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Ancho</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Ancho Milimetros" name="Ancho">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Material</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Material" name="Material">
            </div>
          </div>

      


          <input type="hidden" name="tipoOperacion" value="insertarbanda">
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
<div class="modal fade" id="modal-editar-banda"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar banda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-banda">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nro° Serie</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Numero de Serie" name="NumeroSerie">
            </div>
          </div>


          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionBanda"></textarea>
            </div>
          </div>

           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Ancho</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Ancho Milimetros" name="Ancho">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Material</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Material" name="Material">
            </div>
          </div>

  

          <input type="hidden" name="tipoOperacion" value="actualizarBanda">
  
          <input type="hidden" name="id_banda">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>