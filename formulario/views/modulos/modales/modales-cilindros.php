<div class="modal fade" id="modal-insertar-cilindros"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo Cilindros</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-cilindros">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nombre" name="Nombre">
            </div>
          </div>
              <div class="form-group row">
            <label class="col-2 col-sm-2 col-form-label">Medidas</label>
            <div class="col-3 col-sm-2" style="padding-right: 1px;">
              <input type="text" class="form-control" placeholder="Diametro" name="Diametro">
            </div>
            <h5 style="margin-top: 5px;">X</h5><div class="col-3 col-sm-2" style="padding-right: 1px;padding-left: 1px;">
              <input type="text" class="form-control" placeholder="Largo Vástago" name="Largo">
            </div>          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Material Cuerpo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Material Cuerpo" name="MaterialCuerpo">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Material Vástago</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Material Vástago" name="MaterialVastago">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida hilo regulador flujo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Medida hilo regulador flujo" name="MedidaHilo">
            </div>
          </div>
            <div class="form-group row">
  <label class="col-sm-2 col-form-label">Precio</label>
      <div class="input-group mb-3 col-sm-10">
  <div class="input-group-prepend">
    <span class="input-group-text">$</span>
  </div>
  <input type="text" id="nuevocilindro" name="Precio" class="form-control" aria-label="Amount (to the nearest dollar)">
</div>
          </div>
              <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenCilindros" name="imagenCilindros" >
              <img src="" id="imgCilindros" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertarcilindros">
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
<div class="modal fade" id="modal-editar-cilindros"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar cilindros</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-cilindros">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nombre" name="Nombre">
            </div>
          </div>
              <div class="form-group row">
            <label class="col-2 col-sm-2 col-form-label">Medidas</label>
            <div class="col-3 col-sm-2" style="padding-right: 1px;">
              <input type="text" class="form-control" placeholder="Diametro" name="Diametro">
            </div>
            <h5 style="margin-top: 5px;">X</h5><div class="col-3 col-sm-2" style="padding-right: 1px;padding-left: 1px;">
              <input type="text" class="form-control" placeholder="Largo Vástago" name="Largo">
            </div>          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Material Cuerpo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Material Cuerpo" name="MaterialCuerpo">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Material Vástago</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Material Vástago" name="MaterialVastago">
            </div>
          </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Medida hilo regulador flujo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Medida hilo regulador flujo" name="MedidaHilo">
            </div>
          </div>
      <div class="form-group row">
  <label class="col-sm-2 col-form-label">Precio</label>
      <div class="input-group mb-3 col-sm-10">
  <div class="input-group-prepend">
    <span class="input-group-text">$</span>
  </div>
  <input type="text" id="editarcilindro" name="Precio" class="form-control" aria-label="Amount (to the nearest dollar)">
</div>
          </div>
             <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenCilindrosEditar" name="imagenCilindros" >
              <img src="" id="imgCilindros" alt="" class="thumbnail" width="200" >
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarCilindros">
            <input type="hidden" name="rutaActual">
          <input type="hidden" name="id_cilindros">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  

$("#nuevocilindro").on({
  "focus": function(event) {
    $(event.target).select();
  },
  "keyup": function(event) {
    $(event.target).val(function(index, value) {
      return value.replace(/\D/g, "")
        .replace(/([0-9])([0-9]{0})$/, '$1$2')
        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
    });
  }
});
$("#editarcilindro").on({
  "focus": function(event) {
    $(event.target).select();
  },
  "keyup": function(event) {
    $(event.target).val(function(index, value) {
      return value.replace(/\D/g, "")
        .replace(/([0-9])([0-9]{0})$/, '$1$2')
        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
    });
  }
});
</script>