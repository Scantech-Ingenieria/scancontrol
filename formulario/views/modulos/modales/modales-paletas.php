<div class="modal fade" id="modal-insertar-paletas"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nueva Paleta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-paletas">


          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Paletas</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Tipo Paletas" name="TipoPaletas">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida Paleta</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Ancho Milimetros" name="MedidaPaletas">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida Bujes</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Medida Bujes" name="MedidaBujes">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida Housing</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Medida Housing" name="MedidaHousing">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida Eje</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Medida Eje" name="MedidaEje">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida Brazo Leva</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Medida Brazo Leva" name="MedidaBrazoLeva">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cilindrado</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Clilindado " name="Clilindrado">
            </div>
          </div>

       <div class="form-group row">
            <label class="col-sm-2 col-form-label">Racors</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Racors" name="Racors">
            </div>
          </div>


          <input type="hidden" name="tipoOperacion" value="insertarpaletas">
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
<div class="modal fade" id="modal-editar-paletas"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Paletas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-paletas">


     <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tipo Paletas</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Tipo Paletas" name="TipoPaletas">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida Paleta</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" placeholder="Ancho Milimetros" name="MedidaPaletas">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida Bujes</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Medida Bujes" name="MedidaBujes">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida Housing</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Medida Housing" name="MedidaHousing">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida Eje</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Medida Eje" name="MedidaEje">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida Brazo Leva</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Medida Brazo Leva" name="MedidaBrazoLeva">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cilindrado</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Clilindrado " name="Clilindrado">
            </div>
          </div>

       <div class="form-group row">
            <label class="col-sm-2 col-form-label">Racors</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Racors" name="Racors">
            </div>
          </div>



  

          <input type="hidden" name="tipoOperacion" value="actualizarPaletas">
  
          <input type="hidden" name="id_paletas">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>