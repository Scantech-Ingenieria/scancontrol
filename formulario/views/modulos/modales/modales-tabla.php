<div class="modal fade" id="modal-insertar-tabla"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nueva Balanza</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-tabla">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">IP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="IP"  name="Nombretabla">
            </div>
          </div>


      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cliente</label> 

             <div class="col-sm-10">
<select class="form-control" name="Clientetabla" required>
<?php 
 $Cli = Controllertabla::listarCliCtr();
echo '<option selected disabled>Seleccione cliente</option>';
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_cliente"].'">'.nl2br($value["nombre_cliente"]).'</option>';

   }

 ?>

</select>

        </div>
       </div>
      



          
        

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="Descripciontabla"></textarea>
            </div>
          </div>
                <div class="form-group row">
            <label class="col-sm-2 col-form-label">Ubicación</label>
            <div class="col-sm-10">
         <input type="text" class="form-control" placeholder="Ubicacion" name="Ubicaciontabla">
            </div>
          </div>

<div class="form-group row">
            <label class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
         <select class="form-control" name="Estadotabla" >
           <option>Online</option>
           <option>Offline</option>

         </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
              <input type="date" class="form-control"  name="Fechatabla">
            </div>
          </div>


          <input type="hidden" name="tipoOperacion" value="insertartabla">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>




<!-- EDITAR SLIDER -->
<div class="modal fade" id="modal-editar-tabla"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar tabla</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-tabla">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">IP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="IP"  name="titulotabla">
            </div>
          </div>
         <!--      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cliente</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Cliente" name="Clientetabla">
            </div>
          </div>
 -->

      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cliente</label> 

             <div class="col-sm-10">
<select class="form-control" name="Clientetabla" required>
<?php 

 $Cli = Controllertabla::listarCliCtr();
   foreach ($Cli as $key => $value) {

echo'<option value="'.$value["id_cliente"].'">'.nl2br($value["nombre_cliente"]).'</option>';

   }

 ?>

</select>

        </div>
       </div>





           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="Descripciontabla"></textarea>
            </div>
          </div>
              <div class="form-group row">
            <label class="col-sm-2 col-form-label">Ubicaión</label>
            <div class="col-sm-10">
         <input type="text" class="form-control" placeholder="Ubicacion" name="Ubicaciontabla">
            </div>
          </div>
      
  

          <input type="hidden" name="tipoOperacion" value="actualizarTabla">
  
          <input type="hidden" name="id_tabla">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>