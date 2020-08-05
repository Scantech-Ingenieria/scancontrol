
<!-- EDITAR SLIDER -->
<div class="modal fade" id="modal-editar-grader"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Grader</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-grader">



         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cliente</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Cliente" name="Cliente">
            </div>
          </div>
                   <div class="form-group row">
            <label class="col-sm-2 col-form-label">Grader</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Grader" name="Grader">
            </div>
          </div>
                   <div class="form-group row">
            <label class="col-sm-2 col-form-label">Estación de Calidad</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Estación de Calidad" name="Calidad">
            </div>
          </div>
                   <div class="form-group row">
            <label class="col-sm-2 col-form-label">Unidad Alimentación</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Unidad Alimentación" name="Alimentacion">
            </div>
          </div>
                   <div class="form-group row">
            <label class="col-sm-2 col-form-label">Unidad Aceleración</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Unidad Aceleración" name="Aceleracion">
            </div>
          </div>
                   <div class="form-group row">
            <label class="col-sm-2 col-form-label">Unidad de Pesaje</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Unidad de Pesaje" name="Pesaje">
            </div>
          </div>
                   <div class="form-group row">
            <label class="col-sm-2 col-form-label">Unidad Descarga</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Unidad Descarga" name="Descarga">
            </div>
          </div>
          
          <input type="hidden" name="tipoOperacion" value="actualizarGrader">
          <input type="hidden" name="id_grader">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>