<div class="modal fade" id="modal-insertar-calidad"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nueva Estación de Calidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-calidad">
     
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Número de Puestos</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nro de puestos" name="Puestos">
            </div>
          </div>
       
      


          <input type="hidden" name="tipoOperacion" value="insertarcalidad">
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
<div class="modal fade" id="modal-editar-calidad"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Estación de Calidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-calidad">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Número de Puestos</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nro de puestos" name="Puestos">
            </div>
          </div>
       

          <input type="hidden" name="tipoOperacion" value="actualizarCalidad">
  
          <input type="hidden" name="id_calidad">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>