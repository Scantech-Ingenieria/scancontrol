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
           <div class="form-group row">
            <label class="col-3 col-sm-2 col-form-label" id="largo">Fuente Poder</label>
            <div class="col-7 col-sm-9">
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
echo '<option selected value="">Seleccione tipo VDF</option>';
          foreach ($tabla3 as $key => $value) { 
echo '<option value="'.$value["id_vdf"].'">Potencia: '.$value["potencia"].' / Marca: ' .$value["marca"].'</option>';
          }
 echo '</select>';
 ?>
</div>

            <div class="col-1 col-sm-1">
              <button style="margin-bottom: 2px" type="button" name="agregarvdf" id="agregarvdf" class="btn btn-info" >+</button>
            </div>
            <div class="col-12 col-sm-12" style="margin-top: 15px;">
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
             
              <textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionVdf[]" ></textarea>
             
            </div>
          </div>
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
              <input type="file" class="form-control"  id="imagenTableroelectrico" name="imagenTableroelectrico">
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
        <h5 class="modal-title" id="exampleModalLabel">Editar Tablero Eléctrico</h5>
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
          <div class="form-group row">
<div class="col-1 col-sm-9">
  
</div>
               <div class="col-1 col-sm-2">
              <button style="margin-bottom: 2px" type="button" name="agregarautomaticos" id="agregarautomaticos" class="btn btn-info" >Agregar Automaticos+</button>
            </div>
            </div>

            <div id="dinamiautomatico"  style="margin-bottom: 0px;">
       

          </div>
          <div id="automaticoeditar"  style="margin-bottom: 0px;"></div>

        
  <div class="form-group row">
<div class="col-1 col-sm-9">
  
</div>
               <div class="col-1 col-sm-2">
    <button style="margin-bottom: 2px" type="button" name="editarfuente" id="editarfuente" class="btn btn-info" >Agregar Fuente +</button>
            </div>
            </div>    
  <div id="dinamifuente" style="margin-bottom: 0px;">
    
 </div>
  <div id="fuenteeditar"  style="margin-bottom: 0px;"></div>

             
        
     

               

       <div class="form-group row">
<div class="col-1 col-sm-9">
  
</div>
               <div class="col-1 col-sm-2">
    <button style="margin-bottom: 2px" type="button" name="editarvdf" id="editarvdf" class="btn btn-info" >Agregar Vdf +</button>
            </div>
            </div> 
 <div id="dinamivdf" style="margin-bottom: 0px;">
    
 </div>
 <div id="vdfeditar" style="margin-bottom: 0px;">
    
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
              <input type="file" class="form-control"  id="imagenTableroelectricoEditar" name="imagenTableroelectrico" >
              <img src="" id="imgTableroElectrico" alt="" class="thumbnail" width="200" >
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

 $('#dinami').append('<div id="row'+e+'" class="form-group row" style="margin-bottom:0px;"> <label class="col-2 col-sm-2 col-form-label" id="largo">Automaticos Cantidad:</label><div class="col-4 col-sm-4"><input type="text" class="form-control" placeholder="Cantidad" name="Cantidadautomaticos[]"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option'+e+'" class="form-control" name="Tipoautomaticos[]" ><option selected disabled>Selecione tipo automatico</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+e+'" class="btn btn-danger btn_remove" >X</button></div><div class="col-12 col-sm-12"><div class="form-group row"><label class="col-sm-2 col-form-label">Descripción</label><div class="col-sm-10"><textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionAutomatico[]" ></textarea></div></div></div></div>').show('slow');

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
 $('#dinami3').append('<div id="row3'+n+'" class="form-group row" style="margin-bottom:15px;"> <label class="col-2 col-sm-2 col-form-label" id="largo">VDF Cantidad:</label><div class="col-4 col-sm-4"><input type="text" class="form-control" placeholder="Cantidad" name="CantidadVdf[]"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option3'+n+'" class="form-control" name="TipoVdf[]" ><option selected disabled>Selecione tipo VDF</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+n+'" class="btn btn-danger btn_remove3" >X</button></div> <div class="col-12 col-sm-12" style="margin-top: 15px;"><div class="form-group row"><label class="col-sm-2 col-form-label">Descripción</label><div class="col-sm-10"><textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionVdf[]" ></textarea> </div></div></div></div>');
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
<!----------------------------------- EDITAR AUTOMATICO---------------------------------------->
<!----------------------------------- EDITAR AUTOMATICO---------------------------------------->
<script type="text/javascript">
  
  $("body #mi_lista").on("click", ".btnEditarTableroelectrico", function(){
    var idTableroelectrico = $(this).attr("idTableroelectrico")
    var datos = new FormData()
    datos.append("id_tableroelectrico", idTableroelectrico)
    datos.append("tipoOperacion", "editarTableroautomaticos")
    $.ajax({
      url: 'ajax/ajaxTableroelectrico.php',
      type: 'POST',
      data: datos,
      processData: false,
      contentType: false,
      success: function(respuesta) {
        var valor = JSON.parse(respuesta)
        console.log(valor)
        console.log(valor)
        console.log(valor)

        var size = valor.length;
    
  if($('#dinamiautomatico').find("#row").length){
 $("#dinamiautomatico").empty()
}
for(x=0; x<size; x++){
$('#dinamiautomatico').append('<div id="row" class="form-group row" style="margin-bottom:0px;"> <label class="col-2 col-sm-2 col-form-label" id="largo">Automaticos Cantidad:</label><div class="col-4 col-sm-4"><input type="hidden" name="idAutomatico[]" value="'+valor[x][0]+'"><input type="text" class="form-control" placeholder="Cantidad" name="Cantidadautomaticos[]" value="'+valor[x][2]+'"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select  id="option1'+x+'"  class="form-control" name="Tipoautomaticos[]"   ><option value="'+valor[x][5]+'" selected >Amperaje: '+valor[x][6]+' / Marca: '+valor[x][7]+' / Tipo: '+valor[x][8]+'</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" idtablero="'+valor[x][1]+'" idAutomatico="'+valor[x][0]+'" class="btn btn-danger Eliminar_automatico" >X</button></div><div class="col-12 col-sm-12" ><div class="form-group row"><label class="col-sm-2 col-form-label">Descripción</label><div class="col-sm-10"><textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionAutomatico[]" value="'+valor[x][4]+'" >'+valor[x][4]+'</textarea></div></div></div></div>');
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
    $("body #mi_lista").on("click", ".btnEditarTableroelectrico", function(){
    var idTableroelectrico = $(this).attr("idTableroelectrico")
    var datos = new FormData()
    datos.append("id_tableroelectrico", idTableroelectrico)
    datos.append("tipoOperacion", "editarTablerofuente")
    $.ajax({
      url: 'ajax/ajaxTableroelectrico.php',
      type: 'POST',
      data: datos,
      processData: false,
      contentType: false,
      success: function(respuesta) {
        var valor = JSON.parse(respuesta)
   

var size = valor.length;
 if($('#dinamifuente').find("#row").length){
 $("#dinamifuente").empty()
}
 for(x=0; x<size; x++){

$('#dinamifuente').append('<div id="row" class="form-group row" style="margin-bottom:15px;"> <label class="col-3 col-sm-2 col-form-label" id="largo">Fuente Poder</label><input type="hidden" name="idFuente[]" value="'+valor[x][0]+'"><div class="col-7 col-sm-9"> <select id="optionfuente'+x+'" class="form-control" name="TipoFuentePoder[]" ><option  value="'+valor[x][2]+'" selected >Marca: '+valor[x][4]+' / Amperaje: '+valor[x][5]+' / Corriente: '+valor[x][6]+'</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove"  class="btn btn-danger btn_remove2 Eliminar_fuente" idFuente="'+valor[x][0]+'" >X</button></div></div>');
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
 $('#fuenteeditar').append('<div id="row7'+b+'" class="form-group row" style="margin-bottom:15px;"> <label class="col-3 col-sm-2 col-form-label" id="largo">Fuente Poder</label><div class="col-7 col-sm-9"> <select id="option7'+b+'" class="form-control" name="TipoFuentePoderEditar[]" ><option selected disabled>Selecione Fuente Poder</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+b+'" class="btn btn-danger btn_remove7 " >X</button></div></div>');

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
<!---------------------------------------- EDITAR VDF ------------------------------------------->
<!---------------------------------------- EDITAR VDF ------------------------------------------->
<script type="text/javascript">
    $("body #mi_lista").on("click", ".btnEditarTableroelectrico", function(){
    var idTableroelectrico = $(this).attr("idTableroelectrico")
    var datos = new FormData()
    datos.append("id_tableroelectrico", idTableroelectrico)
    datos.append("tipoOperacion", "editarTablerovdf")
    $.ajax({
      url: 'ajax/ajaxTableroelectrico.php',
      type: 'POST',
      data: datos,
      processData: false,
      contentType: false,
      success: function(respuesta) {
        var valor = JSON.parse(respuesta)
console.log(valor)



var size = valor.length;
 if($('#dinamivdf').find("#row").length){
 $("#dinamivdf").empty()
}
 for(x=0; x<size; x++){

 $('#dinamivdf').append('<div id="row" class="form-group row" style="margin-bottom:15px;"> <label class="col-2 col-sm-2 col-form-label" id="largo">VDF Cantidad:</label><div class="col-4 col-sm-4"><input type="hidden" name="idVdf[]" value="'+valor[x][0]+'"><input type="text" class="form-control" placeholder="Cantidad" name="CantidadVdf[]" value="'+valor[x][2]+'"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option3'+x+'" class="form-control" name="TipoVdf[]" ><option selected value="'+valor[x][3]+'">Potencia: '+valor[x][6]+' / Marca: '+valor[x][7]+'</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+x+'" class="btn btn-danger btn_remove3 Eliminar_vdf"   idVdf="'+valor[x][0]+'">X</button></div><div class="col-12 col-sm-12" style="margin-top:15px;"><div class="form-group row"><label class="col-sm-2 col-form-label">Descripción</label><div class="col-sm-10"><textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionVdf[]" >'+valor[x][4]+'</textarea></div></div></div></div>');
var arrayvdf = <?= json_encode($tabla3) ?>;
 for(var m=0;m<arrayvdf.length;m++)
    {
      $('#option3'+x+'').append('<option value='+arrayvdf[m][0]+'>Potencia: '+arrayvdf[m][1]+' / Marca: '+arrayvdf[m][2]+'</option>')  
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
 $('#vdfeditar').append('<div id="row3'+k+'" class="form-group row" style="margin-bottom:15px;"> <label class="col-2 col-sm-2 col-form-label" id="largo">VDF Cantidad:</label><div class="col-4 col-sm-4"><input type="text" class="form-control" placeholder="Cantidad" name="CantidadVdfEditar[]"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select id="option33'+k+'" class="form-control" name="TipoVdfEditar[]" ><option selected disabled>Selecione tipo VDF</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove3" >X</button></div> <div class="col-12 col-sm-12" style="margin-top: 15px;"><div class="form-group row"><label class="col-sm-2 col-form-label">Descripción</label><div class="col-sm-10"><textarea class="form-control" placeholder="Texto descriptivo"  rows="2" name="DescripcionVdfEditar[]" ></textarea></div></div></div></div>');
var arrayvdf = <?= json_encode($tabla3) ?>;
 for(var m=0;m<arrayvdf.length;m++)
    {
      $('#option33'+k+'').append('<option value='+arrayvdf[m][0]+'>Potencia: '+arrayvdf[m][1]+' / Marca: '+arrayvdf[m][2]+'</option>')  
    }
    });
    $(document).on('click', '.btn_remove3', function(){
        var button_id = $(this).attr("id"); 
        $('#row3'+button_id+'').remove();
    });
</script>