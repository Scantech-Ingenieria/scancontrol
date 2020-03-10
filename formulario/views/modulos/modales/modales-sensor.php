<div class="modal fade" id="modal-insertar-sensor"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo Sensor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-sensor">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Sensor</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Tipo Sensor" name="TipoSensor">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Marca" name="Marca">
            </div>
          </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Modelo" name="Modelo">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Voltaje</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Voltaje" name="Voltaje">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Distancia</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Distancia" name="Distancia">
            </div>
          </div>
       
          <input type="hidden" name="tipoOperacion" value="insertarsensor">
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
<div class="modal fade" id="modal-editar-sensor"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Sensor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-sensor">
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Sensor</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Tipo Sensor" name="TipoSensor">
            </div>
          </div>
                <div class="form-group row">
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Marca" name="Marca">
            </div>
          </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
             <input type="text" class="form-control" placeholder="Modelo" name="Modelo">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Voltaje</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Voltaje" name="Voltaje">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Distancia</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Distancia" name="Distancia">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarSensor">
          <input type="hidden" name="id_sensor">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>