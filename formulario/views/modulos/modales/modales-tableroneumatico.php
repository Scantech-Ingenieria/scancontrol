<div class="modal fade" id="modal-insertar-tableroneumatico"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo Tablero Neumático</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-tableroneumatico">
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
echo '<option value="" selected >Seleccione tipo automatico</option>';
          foreach ($tabla1 as $key => $value) { 
echo '<option value="'.$value["id_automatico"].'">Amperaje: '.$value["amperaje"].' / Marca: ' .$value["marca"].' / Tipo: '.$value["tipo"].'</option>';
          }
 echo '</select>';
 ?>
</div>

            <div class="col-1 col-sm-1">
              <button style="margin-bottom: 2px" type="button" name="agregar" id="agregar" class="btn btn-info" >+</button>
            </div>
                 <div class="col-12 col-sm-12">
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
             
              <textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionAutomatico[]" ></textarea>
             
            </div>
          </div>
            </div>
          </div>
          <div id="dinami" style="display: none;"></div>
           <div class="form-group row" style="margin-bottom:0px;">
               <label class="col-2 col-sm-2 col-form-label" id="largo">Fuente Poder Cantidad:</label>
            <div class="col-4 col-sm-4">  
           <input type="text" class="form-control" placeholder="Cantidad" name="CantidadFuentePoder[]">
            </div>
            <label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label>
            <div class="col-3 col-sm-4">
 <select class="form-control" name="TipoFuentePoder[]" >

                <?php
          $tabla2 = ControllerFuentePoder::listarFuentePoderCtr();
            echo '<option value="" selected>Seleccione Fuente Poder</option>';
          foreach ($tabla2 as $key => $value) { 
echo '<option value="'.$value["id_fuentepoder"].'">Marca: '.$value["marca"].' / Amperaje: ' .$value["amperaje"].' / Corriente: '.$value["corriente"].'</option>';
          }
 echo '</select>';
          
            ?>

            </div>

            <div class="col-1 col-sm-1">
              <button  type="button" name="agregarfuente" id="agregarfuente" class="btn btn-info" >+</button>
            </div>
                 <div class="col-12 col-sm-12">
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
             
              <textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionFuentePoder[]" ></textarea>
             
            </div>
          </div>
            </div>
          </div>
             <div id="dinami2" ></div>
    <div class="form-group row" style="margin-bottom: 15px;">
                
            <label class="col-2 col-sm-2 col-form-label" id="largo">Manifold:</label>
            <div class="col-9 col-sm-9">  
           <select class="form-control" name="TipoManifold[]" >
<?php 
   $tabla3 = ControllerManifold::listarManifoldCtr();
echo '<option selected value="">Seleccione tipo Manifold</option>';
          foreach ($tabla3 as $key => $value) { 
echo '<option value="'.$value["id_manifold"].'">Marca: '.$value["marca"].' / Hilo: ' .$value["medidas"].'/ Cantidad Estaciones: ' .$value["sockets"].'</option>';
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
               <label class="col-2 col-sm-2 col-form-label" id="largo">PLC Cantidad:</label>
            <div class="col-4 col-sm-4">  
           <input type="text" class="form-control" placeholder="Cantidad" name="CantidadPlc[]">
            </div>
            <label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label>
            <div class="col-3 col-sm-4">
 <select class="form-control" name="TipoPlc[]" >

                <?php
          $tabla5 = ControllerPlc::listarPlcCtr();
            echo '<option value="" selected>Seleccione PLC</option>';
          foreach ($tabla5 as $key => $value) { 
echo '<option value="'.$value["id_plc"].'">Modelo: '.$value["modelo"].' / Descripción: ' .$value["descripcion"].'</option>';
          }
 echo '</select>';
          
            ?>

            </div>
            <div class="col-1 col-sm-1">
              <button style="margin-bottom: 2px" type="button" name="agregarplc" id="agregarplc" class="btn btn-info" >+</button>
            </div>
          </div>
             <div id="dinami9" ></div>
                    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenTableroneumatico" name="imagenTableroneumatico" >
              <img src="" id="imgTableroNeumatico" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertartableroneumatico">
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
<div class="modal fade" id="modal-editar-tableroneumatico"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Tablero Eléctrico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-tableroneumatico">
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
          <div class="form-group row">
<div class="col-1 col-sm-9">
  
</div>
               <div class="col-1 col-sm-2">
              <button style="margin-bottom: 2px" type="button" name="agregarautomaticos" id="agregarautomaticos" class="btn btn-info" >Agregar Automaticos+</button>
            </div>
            </div>

            <div id="neumaticoautomatico"  style="margin-bottom: 0px;">
       

          </div>
          <div id="automaticoeditar"  style="margin-bottom: 0px;"></div>

        
  <div class="form-group row">
<div class="col-1 col-sm-9">
  
</div>
               <div class="col-1 col-sm-2">
    <button style="margin-bottom: 2px" type="button" name="editarfuente" id="editarfuente" class="btn btn-info" >Agregar Fuente +</button>
            </div>
            </div>    
  <div id="neumaticofuente" style="margin-bottom: 0px;">
    
 </div>
  <div id="fuenteeditar"  style="margin-bottom: 0px;"></div>

             
        
     

               

       <div class="form-group row">
<div class="col-1 col-sm-9">
  
</div>
               <div class="col-1 col-sm-2">
    <button style="margin-bottom: 2px" type="button" name="editarvdf" id="editarvdf" class="btn btn-info" >Agregar Manifold +</button>
            </div>
            </div> 
 <div id="neumaticomanifold" style="margin-bottom: 0px;">
    
 </div>
 <div id="vdfeditar" style="margin-bottom: 0px;">
    
 </div>

        <div class="form-group row">
<div class="col-1 col-sm-9">
  
</div>
               <div class="col-1 col-sm-2">
    <button style="margin-bottom: 2px" type="button" name="editarplc" id="editarplc" class="btn btn-info" >Agregar PLC +</button>
            </div>
            </div> 
 <div id="dinamiplc" style="margin-bottom: 0px;">
    
 </div>
 <div id="plceditar" style="margin-bottom: 0px;">
    
 </div>

             <div id="dinami3" ></div>
        

                    <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenTableroneumaticoEditar" name="imagenTableroneumatico" >
              <img src="" id="imgTableroNeumatico" alt="" class="thumbnail" width="200" >
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="actualizarTableroneumatico">
            <input type="hidden" name="rutaActual">
          <input type="hidden" name="id_tableroneumatico">
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
 $('.btnEditarTableroneumatico').click(function(){
    

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

 $('#dinami').append('<div id="row'+e+'" class="form-group row" style="margin-bottom:0px;"> <label class="col-2 col-sm-2 col-form-label" id="largo">Automaticos Cantidad:</label><div class="col-4 col-sm-4"><input type="text" class="form-control" placeholder="Cantidad" name="Cantidadautomaticos[]"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option'+e+'" class="form-control" name="Tipoautomaticos[]" ><option selected disabled>Selecione tipo automatico</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+e+'" class="btn btn-danger btn_remove" >X</button></div><div class="col-12 col-sm-12">  <div class="form-group row"><label class="col-sm-2 col-form-label">Descripción</label><div class="col-sm-10"><textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionAutomatico[]" ></textarea></div></div></div></div>').show('slow');

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
 $('#dinami2').append('<div id="row2'+a+'" class="form-group row" style="margin-bottom:0px;"><label class="col-2 col-sm-2 col-form-label" id="largo">Fuente Poder Cantidad:</label><div class="col-4 col-sm-4">  <input type="text" class="form-control" placeholder="Cantidad" name="CantidadFuentePoder[]"></div> <label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option2'+a+'" class="form-control" name="TipoFuentePoder[]" ><option selected disabled>Selecione Fuente Poder</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+a+'" class="btn btn-danger btn_remove2" >X</button></div>  <div class="col-12 col-sm-12"> <div class="form-group row"><label class="col-sm-2 col-form-label">Descripción</label><div class="col-sm-10"><textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionFuentePoder[]"></textarea> </div></div></div></div>');
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
 $('#dinami3').append('<div id="row3'+n+'" class="form-group row" style="margin-bottom:15px;"><label class="col-2 col-sm-2 col-form-label" id="largo">Manifold</label><div class="col-9 col-sm-9"> <select id="option3'+n+'" class="form-control" name="TipoManifold[]" ><option selected disabled>Seleccione tipo Manifold</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+n+'" class="btn btn-danger btn_remove3" >X</button></div></div>');
var arrayvdf = <?= json_encode($tabla3) ?>;
 for(var m=0;m<arrayvdf.length;m++)
    {
      $('#option3'+n+'').append('<option value='+arrayvdf[m][0]+'>Marca: '+arrayvdf[m][1]+' / Hilo: '+arrayvdf[m][2]+' / Cantidad Estaciones: '+arrayvdf[m][3]+'</option>')  
    }
    });
    $(document).on('click', '.btn_remove3', function(){
        var button_id = $(this).attr("id"); 
        $('#row3'+button_id+'').remove();
    });
</script>
<script type="text/javascript">
var m=1; 
var n=1; 
 $('#agregarplc').click(function(){
        n++;
 $('#dinami9').append('<div id="row9'+n+'" class="form-group row" style="margin-bottom:15px;"><label class="col-2 col-sm-2 col-form-label" id="largo">PLC Cantidad:</label><div class="col-4 col-sm-4">  <input type="text" class="form-control" placeholder="Cantidad" name="CantidadPlc[]"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option9'+n+'" class="form-control" name="TipoPlc[]" ><option selected disabled>Seleccione PLC</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+n+'" class="btn btn-danger btn_remove9" >X</button></div></div>');
var arrayvdf = <?= json_encode($tabla5) ?>;
 for(var m=0;m<arrayvdf.length;m++)
    {
      $('#option9'+n+'').append('<option value='+arrayvdf[m][0]+'>Modelo: '+arrayvdf[m][1]+' / Descripción: '+arrayvdf[m][2]+'</option>')  
    }
    });
    $(document).on('click', '.btn_remove9', function(){
        var button_id = $(this).attr("id"); 
        $('#row9'+button_id+'').remove();
    });
</script>
<!----------------------------------- EDITAR AUTOMATICO---------------------------------------->
<!----------------------------------- EDITAR AUTOMATICO---------------------------------------->
<script type="text/javascript">
  
  $("body #mi_lista").on("click", ".btnEditarTableroneumatico", function(){
    var idTableroneumatico = $(this).attr("idTableroneumatico")
    var datos = new FormData()
    datos.append("id_tableroneumatico", idTableroneumatico)
    datos.append("tipoOperacion", "editarTableroautomaticos")
    $.ajax({
      url: 'ajax/ajaxTableroneumatico.php',
      type: 'POST',
      data: datos,
      processData: false,
      contentType: false,
      success: function(respuesta) {
        var valor = JSON.parse(respuesta);
        var size = valor.length;
    
  if($('#neumaticoautomatico').find("#row").length){
 $("#neumaticoautomatico").empty()
}
for(x=0; x<size; x++){
$('#neumaticoautomatico').append('<div id="row" class="form-group row" style="margin-bottom:0px;"> <label class="col-2 col-sm-2 col-form-label" id="largo">Automaticos Cantidad:</label><div class="col-4 col-sm-4"><input type="hidden" name="idAutomatico[]" value="'+valor[x][0]+'"><input type="text" class="form-control" placeholder="Cantidad" name="Cantidadautomaticos[]" value="'+valor[x][2]+'"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select  id="option1'+x+'"  class="form-control" name="Tipoautomaticos[]"   ><option value="'+valor[x][5]+'" selected >Amperaje: '+valor[x][6]+' / Marca: '+valor[x][7]+' / Tipo: '+valor[x][8]+'</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" idtablero="'+valor[x][1]+'" idAutomatico="'+valor[x][0]+'" class="btn btn-danger Eliminarneumatico_automatico" >X</button></div><div class="col-12 col-sm-12" ><div class="form-group row"><label class="col-sm-2 col-form-label">Descripción</label><div class="col-sm-10"><textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionAutomatico[]" value="'+valor[x][4]+'" >'+valor[x][4]+'</textarea></div></div></div></div>');
  var arrayJSC = <?= json_encode($tabla1) ?>;
 for(var l=0;l<arrayJSC.length;l++)
    {
    $('#option1'+x+'').append('<option value='+arrayJSC[l][0]+'>Amperaje: '+arrayJSC[l][1]+' / Marca: '+arrayJSC[l][2]+' / Tipo: '+arrayJSC[l][3]+'</option>')  
    }
 }
        }
      })
  })


var t=1; 

 $('#agregarautomaticos').click(function(){
        t++;
 $('#automaticoeditar').append('<div id="row'+t+'" class="form-group row" style="margin-bottom:0px;"> <label class="col-2 col-sm-2 col-form-label" id="largo">Automaticos Cantidad:</label><div class="col-4 col-sm-4"><input type="text" class="form-control" placeholder="Cantidad" name="CantidadautomaticosEditar[]"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option2'+t+'" class="form-control" name="TipoautomaticosEditar[]" ><option selected disabled>Selecione tipo automatico</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+t+'" class="btn btn-danger btn_remove" >X</button></div><div class="col-12 col-sm-12"><div class="form-group row"><label class="col-sm-2 col-form-label">Descripción</label><div class="col-sm-10"><textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionAutomaticoEditar[]" ></textarea></div></div></div></div>').show('slow');

var arrayJS = <?= json_encode($tabla1) ?>;
 for(var i=0;i<arrayJS.length;i++)
    {
      $('#option2'+t+'').append('<option value='+arrayJS[i][0]+'>Amperaje: '+arrayJS[i][1]+' / Marca: '+arrayJS[i][2]+' / Tipo: '+arrayJS[i][3]+'</option>')  
    }
    });  
</script>

<!--------------------------- EDITAR FUENTE ---------------------->
<!--------------------------- EDITAR FUENTE ---------------------->

<script type="text/javascript">
    $("body #mi_lista").on("click", ".btnEditarTableroneumatico", function(){
    var idTableroneumatico = $(this).attr("idTableroneumatico")
    var datos = new FormData()
    datos.append("id_tableroneumatico", idTableroneumatico)
    datos.append("tipoOperacion", "editarTablerofuente")
    $.ajax({
      url: 'ajax/ajaxTableroneumatico.php',
      type: 'POST',
      data: datos,
      processData: false,
      contentType: false,
      success: function(respuesta) {
        var valor = JSON.parse(respuesta)

var size = valor.length;
 if($('#neumaticofuente').find("#row").length){
 $("#neumaticofuente").empty()
}
 for(x=0; x<size; x++){
$('#neumaticofuente').append('<div id="row" class="form-group row" style="margin-bottom:15px;"><label class="col-2 col-sm-2 col-form-label" id="largo">Fuente Poder Cantidad:</label><div class="col-4 col-sm-4">  <input type="text" class="form-control" placeholder="Cantidad" name="CantidadFuentePoder[]" value="'+valor[x]['cantidad']+'"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><input type="hidden" name="idFuente[]" value="'+valor[x]['id_tneumatico_fuente']+'"><div class="col-3 col-sm-4"> <select id="optionfuente'+x+'" class="form-control" name="TipoFuentePoder[]" ><option  value="'+valor[x]['tipo_fuente']+'" selected >Marca: '+valor[x]['marca']+' / Amperaje: '+valor[x]['amperaje']+' / Corriente: '+valor[x]['corriente']+'</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove"  class="btn btn-danger btn_remove2 Eliminarneumatico_fuente" idFuente="'+valor[x]['id_tneumatico_fuente']+'" >X</button></div> <div class="col-12 col-sm-12"> <div class="form-group row"><label class="col-sm-2 col-form-label">Descripción</label><div class="col-sm-10"><textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionFuentePoder[]" value="'+valor[x]['descripcion']+'">'+valor[x]['descripcion']+'</textarea> </div></div></div></div>');
 var arrayJSC = <?= json_encode($tabla2) ?>;
 for(var l=0;l<arrayJSC.length;l++)
    {
    $('#optionfuente'+x+'').append('<option value='+arrayJSC[l][0]+'>Marca: '+arrayJSC[l][1]+' / Amperaje: '+arrayJSC[l][2]+' / Corriente: '+arrayJSC[l][3]+'</option>')  
    }
 }
      }
    })
  })
</script>
<script type="text/javascript">
var b=1; 
 $('#editarfuente').click(function(){
        b++;
 $('#fuenteeditar').append('<div id="row7'+b+'" class="form-group row" style="margin-bottom:0px;"><label class="col-2 col-sm-2 col-form-label" id="largo">Fuente Poder Cantidad:</label><div class="col-4 col-sm-4">  <input type="text" class="form-control" placeholder="Cantidad" name="CantidadFuentePoderEditar[]"></div> <label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option7'+b+'" class="form-control" name="TipoFuentePoderEditar[]" ><option selected disabled>Selecione Fuente Poder</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+b+'" class="btn btn-danger btn_remove7" >X</button></div>  <div class="col-12 col-sm-12"> <div class="form-group row"><label class="col-sm-2 col-form-label">Descripción</label><div class="col-sm-10"><textarea class="form-control" placeholder="Texto descriptivo"  rows="2"name="DescripcionFuentePoderEditar[]"></textarea> </div></div></div></div>');




var arrayFuente = <?= json_encode($tabla2) ?>;
console.log(arrayFuente)
 for(var c=0;c<arrayFuente.length;c++)
    {
      $('#option7'+b+'').append('<option value='+arrayFuente[c][0]+'>Marca: '+arrayFuente[c][1]+' / Amperaje: '+arrayFuente[c][2]+' / Corriente: '+arrayFuente[c][3]+'</option>') 
    }
    });
    $(document).on('click', '.btn_remove7', function(){
        var button_id = $(this).attr("id"); 
        $('#row7'+button_id+'').remove();
    });
</script>
<!------------------------EDITAR Manifold--------------------------------->
<!----------------------- EDITAR Manifold ---------------------------------->
<script type="text/javascript">
    $("body #mi_lista").on("click", ".btnEditarTableroneumatico", function(){
    var idTableroneumatico = $(this).attr("idTableroneumatico")
    var datos = new FormData()
    datos.append("id_tableroneumatico", idTableroneumatico)
    datos.append("tipoOperacion", "editarTableromanifold")
    $.ajax({
      url: 'ajax/ajaxTableroneumatico.php',
      type: 'POST',
      data: datos,
      processData: false,
      contentType: false,
      success: function(respuesta) {
        var valor = JSON.parse(respuesta)
console.log(valor)



var size = valor.length;
 if($('#neumaticomanifold').find("#row").length){
 $("#neumaticomanifold").empty()
}
 for(x=0; x<size; x++){

 $('#neumaticomanifold').append('<div id="row" class="form-group row" style="margin-bottom:15px;"> <input type="hidden" name="idManifold[]" value="'+valor[x][0]+'"><label class="col-2 col-sm-2 col-form-label" id="largo">Manifold</label><div class="col-9 col-sm-9"> <select id="option3'+x+'" class="form-control" name="TipoManifold[]" ><option selected value="'+valor[x][3]+'"> Marca: '+valor[x]['marca']+' / Hilo: '+valor[x]['medidas']+' / Cantidad Estaciones: '+valor[x]['sockets']+'</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+x+'" class="btn btn-danger btn_remove3 Eliminarneumatico_vdf"   idManifold="'+valor[x][0]+'">X</button></div></div>');
var arrayvdf = <?= json_encode($tabla3) ?>;
 for(var m=0;m<arrayvdf.length;m++)
    {
      $('#option3'+x+'').append('<option value='+arrayvdf[m][0]+'>Marca: '+arrayvdf[m][1]+' / Hilo: '+arrayvdf[m][2]+'/ Cantidad Estaciones: '+arrayvdf[m][3]+'</option>')  
    }
 }
      }
    })
  })
</script>

<script type="text/javascript">

var k=1; 
 $('#editarvdf').click(function(){
        k++;


 $('#vdfeditar').append('<div id="row3'+k+'" class="form-group row" style="margin-bottom:15px;"><label class="col-2 col-sm-2 col-form-label" id="largo">Manifold</label><div class="col-9 col-sm-9"> <select id="option33'+k+'" class="form-control" name="TipoManifoldEditar[]" ><option selected disabled>Seleccione tipo Manifold</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove3" >X</button></div></div>');
var arrayvdf = <?= json_encode($tabla3) ?>;
 for(var m=0;m<arrayvdf.length;m++)
    {
      $('#option33'+k+'').append('<option value='+arrayvdf[m][0]+'>Marca: '+arrayvdf[m][1]+' / Hilo: '+arrayvdf[m][2]+'/ Cantidad Estaciones: '+arrayvdf[m][3]+'</option>')  
    }
    });
    $(document).on('click', '.btn_remove3', function(){
        var button_id = $(this).attr("id"); 
        $('#row3'+button_id+'').remove();
    });
</script>



<script type="text/javascript">
    $("body #mi_lista").on("click", ".btnEditarTableroneumatico", function(){
    var idTableroneumatico = $(this).attr("idTableroneumatico")
    var datos = new FormData()
    datos.append("id_tableroneumatico", idTableroneumatico)
    datos.append("tipoOperacion", "editarTableroplc")
    $.ajax({
      url: 'ajax/ajaxTableroneumatico.php',
      type: 'POST',
      data: datos,
      processData: false,
      contentType: false,
      success: function(respuesta) {
        var valor = JSON.parse(respuesta)
   
   console.log(valor);
   console.log(valor);
   console.log(valor);
   console.log(valor);


var size = valor.length;
 if($('#dinamiplc').find("#row").length){
 $("#dinamiplc").empty()
}
 for(x=0; x<size; x++){

$('#dinamiplc').append('<div id="row" class="form-group row" style="margin-bottom:15px;"><label class="col-2 col-sm-2 col-form-label" id="largo">PLC Cantidad:</label><div class="col-4 col-sm-4">  <input type="text" class="form-control" placeholder="Cantidad" name="CantidadPlc[]" value="'+valor[x]['cantidad']+'"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><input type="hidden" name="idPlc[]" value="'+valor[x]['id_tneumatico_plc']+'"><div class="col-3 col-sm-4"> <select id="optionplc'+x+'" class="form-control" name="TipoPlc[]" ><option  value="'+valor[x]['tipo_plc']+'" selected >Modelo: '+valor[x]['modelo']+' / Descripcion: '+valor[x]['descripcion']+'</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove"  class="btn btn-danger  Eliminarneumatico_plc" idPlc="'+valor[x]['id_tneumatico_plc']+'" >X</button></div> </div>');
 var arrayJSC = <?= json_encode($tabla5) ?>;
 for(var l=0;l<arrayJSC.length;l++)
    {
    $('#optionplc'+x+'').append('<option value='+arrayJSC[l][0]+'>Modelo: '+arrayJSC[l][1]+' / Descripcion: '+arrayJSC[l]['descripcion']+' </option>')  
    }
 }
      }
    })
  })
</script>
<script type="text/javascript">
var b=1; 
 $('#editarplc').click(function(){
        b++;
 $('#plceditar').append('<div id="row55'+b+'" class="form-group row" style="margin-bottom:15px;"><label class="col-2 col-sm-2 col-form-label" id="largo">PLC Cantidad:</label><div class="col-4 col-sm-4">  <input type="text" class="form-control" placeholder="Cantidad" name="CantidadPlcEditar[]"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option55'+b+'" class="form-control" name="TipoPlcEditar[]" ><option selected disabled>Seleccione PLC</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+b+'" class="btn btn-danger btn_remove55" >X</button></div></div>');



var arrayFuente = <?= json_encode($tabla5) ?>;
console.log(arrayFuente)
 for(var c=0;c<arrayFuente.length;c++)
    {
      $('#option55'+b+'').append('<option value='+arrayFuente[c][0]+'>Modelo: '+arrayFuente[c][1]+' / Descripción: '+arrayFuente[c][2]+' </option>') 
    }
    });
    $(document).on('click', '.btn_remove55', function(){
        var button_id = $(this).attr("id"); 
        $('#row55'+button_id+'').remove();
    });
</script>