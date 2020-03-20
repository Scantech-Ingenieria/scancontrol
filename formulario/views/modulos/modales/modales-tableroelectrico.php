<div class="modal fade" id="modal-insertar-tableroelectrico"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo Tablero eléctrico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-tableroelectrico">
          <div class="form-group row">
            <label class="col-2 col-sm-2 col-form-label">Medidas</label>
            <div class="col-3 col-sm-2" style="padding-right: 1px;">
              <input type="text" class="form-control" placeholder="Altura" name="Altura">
            </div>
            <h5 style="margin-top: 5px;">X</h5><div class="col-3 col-sm-2" style="padding-right: 1px;padding-left: 1px;">
              <input type="text" class="form-control" placeholder="Ancho" name="Ancho">
            </div><h5 style="margin-top: 5px;">X</h5>
            <div class="col-3 col-sm-2"  style="padding-left: 1px;">
              <input type="text" class="form-control" placeholder="Fondo" name="Fondo">
            </div>
          </div>
            <div class="form-group row" style="margin-bottom: 0px;">
            <label class="col-2 col-sm-2 col-form-label" id="largo">Automaticos Cantidad:</label>
            <div class="col-4 col-sm-4">  
           <input type="text" class="form-control" placeholder="Cantidad" name="Cantidadautomaticos[]">
            </div>
            <label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label>
            <div class="col-3 col-sm-4">
 <select class="form-control" name="Tipoautomaticos[]" >
<?php 
  $tabla1 = ControllerAutomatico::listarAutomaticoCtr();
echo '<option selected disabled>Seleccione tipo automatico</option>';
          foreach ($tabla1 as $key => $value) { 
echo '<option value="'.$value["id_automatico"].'">Amperaje: '.$value["amperaje"].' / Marca: ' .$value["marca"].' / Tipo: '.$value["tipo"].'</option>';
          }
 echo '</select>';
 ?>
</div>

            <div class="col-1 col-sm-1">
              <button style="margin-bottom: 2px" type="button" name="agregar" id="agregar" class="btn btn-info" >+</button>
            </div>
          </div>
          <div id="dinami" style="display: none;"></div>
           <div class="form-group row">
            <label class="col-3 col-sm-2 col-form-label" id="largo">Fuente Poder</label>
            <div class="col-7 col-sm-9">
 <select class="form-control" name="TipoFuentePoder[]" >

                <?php
          $tabla2 = ControllerFuentePoder::listarFuentePoderCtr();
            echo '<option selected disabled>Seleccione Fuente Poder</option>';
          foreach ($tabla2 as $key => $value) { 
echo '<option value="'.$value["id_fuentepoder"].'">Marca: '.$value["marca"].' / Amperaje: ' .$value["amperaje"].' / Corriente: '.$value["corriente"].'</option>';
          }
 echo '</select>';
          
            ?>

            </div>

            <div class="col-1 col-sm-1">
              <button style="margin-bottom: 2px" type="button" name="agregarfuente" id="agregarfuente" class="btn btn-info" >+</button>
            </div>
          </div>
             <div id="dinami2" ></div>
    <div class="form-group row" style="margin-bottom: 15px;">
                
            <label class="col-2 col-sm-2 col-form-label" id="largo">VDF Cantidad:</label>
            <div class="col-4 col-sm-4">  
           <input type="text" class="form-control" placeholder="Cantidad" name="CantidadVdf[]">
            </div>
            <label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label>
            <div class="col-3 col-sm-4">
 <select class="form-control" name="TipoVdf[]" >
<?php 
   $tabla3 = ControllerVdf::listarVdfCtr();
echo '<option selected disabled>Seleccione tipo VDF</option>';
          foreach ($tabla3 as $key => $value) { 
echo '<option value="'.$value["id_vdf"].'">Potencia: '.$value["potencia"].' / Marca: ' .$value["marca"].'</option>';
          }
 echo '</select>';
 ?>
</div>

            <div class="col-1 col-sm-1">
              <button style="margin-bottom: 2px" type="button" name="agregarvdf" id="agregarvdf" class="btn btn-info" >+</button>
            </div>
          </div>
             <div id="dinami3" ></div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Contactor</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" placeholder="Contactor" name="Contactor">
            </div>
          </div>

                    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenTableroelectrico" name="imagenTableroelectrico" required>
              <img src="" id="imgTableroElectrico" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertartableroelectrico">
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
<div class="modal fade" id="modal-editar-tableroelectrico"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar tableroelectrico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-tableroelectrico">
          <div class="form-group row">
            <label class="col-2 col-sm-2 col-form-label">Medidas</label>
            <div class="col-3 col-sm-2" style="padding-right: 1px;">
              <input type="text" class="form-control" placeholder="Altura" name="Altura">
            </div>
            <h5 style="margin-top: 5px;">X</h5><div class="col-3 col-sm-2" style="padding-right: 1px;padding-left: 1px;">
              <input type="text" class="form-control" placeholder="Ancho" name="Ancho">
            </div><h5 style="margin-top: 5px;">X</h5>
            <div class="col-3 col-sm-2"  style="padding-left: 1px;">
              <input type="text" class="form-control" placeholder="Fondo" name="Fondo">
            </div>
          </div>
            <div id="dinamiautomatico" class="form-group row" style="margin-bottom: 0px;">
       

          </div>

           <div class="form-group row">
            <label class="col-3 col-sm-2 col-form-label" id="largo">Fuente Poder</label>
            <div class="col-7 col-sm-9">
 <select class="form-control" name="TipoFuentePoder[]" >

                <?php
          $tabla2 = ControllerFuentePoder::listarFuentePoderCtr();
            echo '<option selected disabled>Seleccione Fuente Poder</option>';
          foreach ($tabla2 as $key => $value) { 
echo '<option value="'.$value["id_fuentepoder"].'">Marca: '.$value["marca"].' / Amperaje: ' .$value["amperaje"].' / Corriente: '.$value["corriente"].'</option>';
          }
 echo '</select>';
          
            ?>

            </div>

            <div class="col-1 col-sm-1">
              <button style="margin-bottom: 2px" type="button" name="agregarfuente" id="agregarfuente" class="btn btn-info" >+</button>
            </div>
          </div>
             <div id="dinami2" ></div>
    <div class="form-group row" style="margin-bottom: 15px;">
                
            <label class="col-2 col-sm-2 col-form-label" id="largo">VDF Cantidad:</label>
            <div class="col-4 col-sm-4">  
           <input type="text" class="form-control" placeholder="Cantidad" name="CantidadVdf[]">
            </div>
            <label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label>
            <div class="col-3 col-sm-4">
 <select class="form-control" name="TipoVdf[]" >
<?php 
   $tabla3 = ControllerVdf::listarVdfCtr();
echo '<option selected disabled>Seleccione tipo VDF</option>';
          foreach ($tabla3 as $key => $value) { 
echo '<option value="'.$value["id_vdf"].'">Potencia: '.$value["potencia"].' / Marca: ' .$value["marca"].'</option>';
          }
 echo '</select>';
 ?>
</div>

            <div class="col-1 col-sm-1">
              <button style="margin-bottom: 2px" type="button" name="agregarvdf" id="agregarvdf" class="btn btn-info" >+</button>
            </div>
          </div>
             <div id="dinami3" ></div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Contactor</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" placeholder="Contactor" name="Contactor">
            </div>
          </div>

                    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenTableroelectrico" name="imagenTableroelectrico" required>
              <img src="" id="imgTableroElectricoEditar" alt="" class="thumbnail" width="200" >
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarTableroelectrico">
            <input type="hidden" name="rutaActual">
          <input type="hidden" name="id_tableroelectrico">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- <script type="text/javascript">
var i=1; 
var e=1; 
 $('.btnEditarTableroelectrico').click(function(){
    

var arrayJS = <?= json_encode($tablaautomatico) ?>;
 for(var i=0;i<arrayJS.length;i++)
    {
      $('#option').append('<option value='+arrayJS[i][0]+'>Amperaje: '+arrayJS[i][1]+' / Marca: '+arrayJS[i][2]+' / Tipo: '+arrayJS[i][3]+'</option>')  
    }
    });

</script> -->
<script type="text/javascript">
var i=1; 
var e=1; 
 $('#agregar').click(function(){
        e++;

 $('#dinami').append('<div id="row'+e+'" class="form-group row" style="margin-bottom:0px;"> <label class="col-2 col-sm-2 col-form-label" id="largo">Automaticos Cantidad:</label><div class="col-4 col-sm-4"><input type="text" class="form-control" placeholder="Cantidad" name="Cantidadautomaticos[]"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option'+e+'" class="form-control" name="Tipoautomaticos[]" ><option selected disabled>Selecione tipo automatico</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+e+'" class="btn btn-danger btn_remove" >X</button></div></div>').show('slow');

var arrayJS = <?= json_encode($tabla1) ?>;
 for(var i=0;i<arrayJS.length;i++)
    {
      $('#option'+e+'').append('<option value='+arrayJS[i][0]+'>Amperaje: '+arrayJS[i][1]+' / Marca: '+arrayJS[i][2]+' / Tipo: '+arrayJS[i][3]+'</option>')  
    }
    });
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
</script>
<script type="text/javascript">
var c=1; 
var a=1; 
 $('#agregarfuente').click(function(){
        a++;
 $('#dinami2').append('<div id="row2'+a+'" class="form-group row" style="margin-bottom:15px;"> <label class="col-3 col-sm-2 col-form-label" id="largo">Fuente Poder</label><div class="col-7 col-sm-9"> <select id="option2'+a+'" class="form-control" name="TipoFuentePoder[]" ><option selected disabled>Selecione Fuente Poder</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+a+'" class="btn btn-danger btn_remove2" >X</button></div></div>');
var arrayFuente = <?= json_encode($tabla2) ?>;
console.log(arrayFuente)
 for(var c=0;c<arrayFuente.length;c++)
    {
      $('#option2'+a+'').append('<option value='+arrayFuente[c][0]+'>Marca: '+arrayFuente[c][1]+' / Amperaje: '+arrayFuente[c][2]+' / Corriente: '+arrayFuente[c][3]+'</option>') 
    }
    });
    $(document).on('click', '.btn_remove2', function(){
        var button_id = $(this).attr("id"); 
        $('#row2'+button_id+'').remove();
    });
</script>
<script type="text/javascript">
var m=1; 
var n=1; 
 $('#agregarvdf').click(function(){
        n++;
 $('#dinami3').append('<div id="row3'+n+'" class="form-group row" style="margin-bottom:15px;"> <label class="col-2 col-sm-2 col-form-label" id="largo">VDF Cantidad:</label><div class="col-4 col-sm-4"><input type="text" class="form-control" placeholder="Cantidad" name="CantidadVdf[]"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option3'+n+'" class="form-control" name="TipoVdf[]" ><option selected disabled>Selecione tipo VDF</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+n+'" class="btn btn-danger btn_remove3" >X</button></div></div>');
var arrayvdf = <?= json_encode($tabla3) ?>;
 for(var m=0;m<arrayvdf.length;m++)
    {
      $('#option3'+n+'').append('<option value='+arrayvdf[m][0]+'>Potencia: '+arrayvdf[m][1]+' / Marca: '+arrayvdf[m][2]+'</option>')  
    }
    });
    $(document).on('click', '.btn_remove3', function(){
        var button_id = $(this).attr("id"); 
        $('#row3'+button_id+'').remove();
    });
</script>