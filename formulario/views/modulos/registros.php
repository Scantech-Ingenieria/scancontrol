
<?php   
error_reporting(0);
 session_start();  
    unset($_SESSION["shopping_cart"]);
 $connect = mysqli_connect("localhost", "root", "", "scancontrol");  
 ?> 
  <!DOCTYPE html>  
 <html>  
         
           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
   <div style="background:#075672;width: 100%;margin:0px;padding: 0px;">          
<header style="margin-bottom: 20px;">
  <div class="row">
  <div class="col-md-8"><h2 style="color:white;  text-shadow: 5px 5px 5px #aaa;">Nueva Grader</h2></div>
    <div class="col-md-2">  <a href="registros">   <button type="button" class="btn btn-danger "> <i class="fas fa-trash-alt"></i>
Limpiar contenedor
</button></a>  </div>
  <div class="col-md-2">       <button type="button" class="btn btn-info " data-toggle="modal" data-target="#listadoregistros"> <i class="fas fa-list"></i>
Listado Grader
</button></div>

    </div>

  </header>
    
<style type="text/css">
  .app-main__inner{
    background: #075672;
  }
  body{
  background: #075672;
}

</style>
<div class="row"style="background:#093750;overflow: auto;height: 230px;text-align: center;color:black;">
  <div class="anchocol" id="cuadro1"  ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return drope(event)">
       <h5 id="titulo">Estación Calidad</h5>
                <?php  
                $query = "SELECT * FROM estacion_calidad  where id_unidad IS NULL ORDER BY id_calidad ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?> 
      <div class="cuadradito objects"   name="arrastrable1" id="calidad<?php echo $row["id_calidad"]; ?>" draggable="true" ondragstart="start(event)" ondragend="end(event)" data-descripcion="<?php echo $row["descripcion"]; ?>" data-id="<?php echo $row["id_calidad"]; ?>" data-name="Calidad">
           
             <img id="img1" style="pointer-events: none;" src="<?php  echo substr($row['rutaImg'], 3)?>"/> 
    <button type="button" class="btn btn-primary btn-lg btn-block"  data-toggle="modal" data-target="#calida<?php echo $row["id_calidad"]; ?>"><p class="textoinfo" id="<?php echo $row["id_calidad"]; ?>"><?php echo $row["descripcion"]; ?></p>  
 
<i class="fas fa-info-circle botoninfo align-middle"></i>  
</button>
<!-- Modal -->

      </div>  
          <?php  
                     }  
                }  
                ?>  
  </div>
<div class="anchocol" id="cuadro2" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return drope(event)">
  <h5 id="titulo" >Unidad Alimentación</h5>
         <?php  
                $query = "SELECT * FROM unidad_alim  where id_unidad_al IS NULL ORDER BY id_unidad_alim ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?> 
      <div class="cuadradito objects" name="arrastrable2" id="alimentacion<?php echo $row["id_unidad_alim"]; ?>" draggable="true" ondragstart="start(event)" ondragend="end(event)" data-descripcion="<?php echo $row["descripcion"]; ?>" data-id="<?php echo $row["id_unidad_alim"]; ?>" data-name="Alimentacion">
            
                 <img id="img1" style="pointer-events: none;" src="<?php  echo substr($row['rutaImg'], 3)?>"/> 
                              <button type="button"class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#alim<?php echo $row['id_unidad_alim']; ?>">       <p class=" textoinfo align-middle" id="<?php echo $row["id_unidad_alim"]; ?>"  > <?php echo $row["descripcion"]; ?></p>
<i class="fas fa-info-circle botoninfo align-middle"></i>
</button> 

      </div>
          <?php  
                     }  
                }  
                ?>    
  </div>
<div class="anchocol" id="cuadro3" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return drope(event)">
  <h5 id="titulo">Unidad Aceleración</h5>
         <?php  
                $query = "SELECT * FROM unidad_acel  where id_unidad IS NULL ORDER BY id_unidad_acel ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?> 
      <div class="cuadradito objects" id="aceleracion<?php echo $row["id_unidad_acel"]; ?>" name="arrastrable3" draggable="true" ondragstart="start(event)" ondragend="end(event)" data-descripcion="<?php echo $row["descripcion"]; ?>" data-id="<?php echo $row["id_unidad_acel"]; ?>" data-name="Aceleracion">
                 
                 <img id="img1" style="pointer-events: none;" src="<?php  echo substr($row['rutaImg'], 3)?>"/> 
                              <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#acel<?php echo $row['id_unidad_acel']; ?>">
<p class="textoinfo align-middle"> <?php echo $row["descripcion"]; ?></p> <i class="fas fa-info-circle botoninfo align-middle"></i>
</button>  
    
      </div>
        <?php  
                     }  
                }  
                ?>  
  </div>
<div class="anchocol" id="cuadro4" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return drope(event)">
  <h5 id="titulo">Unidad Pesaje</h5>
    
         <?php  
                $query = "SELECT * FROM unidad_pesaje  where id_unidad IS NULL ORDER BY id_unidad_pesaje ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?> 
      <div class="cuadradito objects" id="pesaje<?php echo $row["id_unidad_pesaje"]; ?>" name="arrastrable4" draggable="true" ondragstart="start(event)" ondragend="end(event)" data-descripcion="<?php echo $row["descripcion"]; ?>" data-id="<?php echo $row["id_unidad_pesaje"]; ?>" data-name="Pesaje">
                
                 <img id="img1" style="pointer-events: none;" src="<?php  echo substr($row['rutaImg'], 3)?>"/> 
                              <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#pesa<?php echo $row['id_unidad_pesaje']; ?>">
 <p class="textoinfo align-middle"> <?php echo $row["descripcion"]; ?></p> <i class="fas fa-info-circle botoninfo align-middle"></i>
</button>  

      </div>
        <?php  
                     }  
                }  
                ?>  
  
  </div>
  <div class="anchocol" id="cuadro5" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return drope(event)">
  <h5 id="titulo">Unidad Descarga</h5>
    
         <?php  
                $query = "SELECT * FROM unidad_descarga  where id_unidad IS NULL ORDER BY id_unidad_descarga ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?> 
      <div class="cuadradito objects" id="descarga<?php echo $row["id_unidad_descarga"]; ?>" name="arrastrable5" draggable="true" ondragstart="start(event)" ondragend="end(event)" data-descripcion="<?php echo $row["descripcion"]; ?>" data-id="<?php echo $row["id_unidad_descarga"]; ?>" data-name="Descarga">
                 <img id="img1" style="pointer-events: none;"  src="<?php  echo substr($row['rutaImg'], 3)?>"/> 
                              <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#desc<?php echo $row['id_unidad_descarga'];?>">
                 <p class="textoinfo align-middle"> <?php echo $row["descripcion"]; ?></p> 
<i class="fas fa-info-circle botoninfo align-middle"></i>
</button>  

      </div>
        <?php  
                     }  
                }  
                ?>  
  
  </div>
</div>

    </section>
    <div class="row" style="text-align: center;margin-top: 20px;">
  <div class="anchocol1">

    <h5 style="color:white;" class="col-md-12">Estación Calidad</h5>
    <div class="col-md-12" id="casa1" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return drop(event)">

    </div>

</div>
<div class="anchocol1">
    <h5  style="color:white;" class="col-md-12">Unidad Alimentación</h5>

  <div class="col-md-12" id="casa2" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return drop(event)">
    </div>
    </div>
<div class="anchocol1">

    <h5 style="color:white;" class="col-md-12">Unidad Aceleración</h5>

        <div  class="col-md-12" id="casa3" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return drop(event)">
    </div>
    
    </div>
    <div class="anchocol1">

    <h5 style="color:white;" class="col-md-12">Unidad Pesaje</h5>

        <div  class="col-md-12" id="casa4" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return drop(event)">
    </div>
    
    </div>
    <div class="anchocol1">

    <h5 style="color:white;" class="col-md-12">Unidad Descarga</h5>

        <div  class="col-md-12" id="casa5" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return drop(event)">
    </div>
    
    </div>

    </div>

      <div style="background: white;margin-top: 20px;padding: 13px;" id="dragable_product_order">  
                </div> 


            
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    </div>
 

 </html>  

  <script type="text/javascript">
    // contador = 0;
     // Variable global para tener poder poner un id unico a cada elemento cuando se clona.
    function start(e) {
      e.dataTransfer.effecAllowed = 'move'; // Define el efecto como mover (Es el por defecto)
      e.dataTransfer.setData("Data", e.target.id); // Coje el elemento que se va a mover
      e.dataTransfer.setDragImage(e.target, 0, 0); // Define la imagen que se vera al ser arrastrado el elemento y por donde se coje el elemento que se va a mover (el raton aparece en la esquina sup_izq con 0,0)
  x = document.getElementById("casa1").children.length
  y = document.getElementById("casa2").children.length
  z = document.getElementById("casa3").children.length
  a = document.getElementById("casa4").children.length
  b = document.getElementById("casa5").children.length
      cuadraditoName=e.target.getAttribute('name');
      cuadraditoPuestos=e.target.getAttribute('data-descripcion');
      cuadraditoId=e.target.getAttribute('data-id');
      cuadraditoRegistro=e.target.getAttribute('data-name');
    }
    function end(e){
      e.target.style.opacity = ''; // Pone la opacidad del elemento a 1       
      e.dataTransfer.clearData("Data");
    }
    function enter(e) {
      e.target.style.border = '5px dashed red'; 
    }
    function leave(e) {
      e.target.style.border = ''; 
    }
    function over(e) {
      var elemArrastrable = e.dataTransfer.getData("Data"); // Elemento arrastrado
      var id = e.target.id; // Elemento sobre el que se arrastra
      // return false para que se pueda soltar
      if ((id == 'cuadro1') && (cuadraditoName != "arrastrable3") && (cuadraditoName != "arrastrable2")&& (cuadraditoName != "arrastrable4")&& (cuadraditoName != "arrastrable5")){
        return false; // Cualquier elemento se puede soltar sobre el div destino 1
      }
  if ((id == 'cuadro2') && (cuadraditoName != "arrastrable3") && (cuadraditoName != "arrastrable1")&& (cuadraditoName != "arrastrable4")&& (cuadraditoName != "arrastrable5")){
        return false; // Cualquier elemento se puede soltar sobre el div destino 1
      }
  if ((id == 'cuadro3') && (cuadraditoName != "arrastrable2") && (cuadraditoName != "arrastrable1")&& (cuadraditoName != "arrastrable4")&& (cuadraditoName != "arrastrable5")){
        return false; // Cualquier elemento se puede soltar sobre el div destino 1
      }
  if ((id == 'cuadro4') && (cuadraditoName != "arrastrable2") && (cuadraditoName != "arrastrable1")&& (cuadraditoName != "arrastrable3")&& (cuadraditoName != "arrastrable5")){
        return false; // Cualquier elemento se puede soltar sobre el div destino 1
      }
  if ((id == 'cuadro5') && (cuadraditoName != "arrastrable2") && (cuadraditoName != "arrastrable1")&& (cuadraditoName != "arrastrable3")&& (cuadraditoName != "arrastrable4")){
        return false; // Cualquier elemento se puede soltar sobre el div destino 1
      }
      if ((id=="casa1") &&(x=='0') && (cuadraditoName != "arrastrable3") && (cuadraditoName != "arrastrable2")&& (cuadraditoName != "arrastrable4")&& (cuadraditoName != "arrastrable5")){
        return false; // En el cuadro2 se puede soltar cualquier elemento menos el elemento con id=arrastrable3
      }
      if ((id == 'casa2') &&(y=='0')&& (cuadraditoName != "arrastrable1") && (cuadraditoName != "arrastrable3")&& (cuadraditoName != "arrastrable4")&& (cuadraditoName != "arrastrable5"))
      {
        return false;
      }
      if ((id == 'casa3') &&(z=='0') && (cuadraditoName != "arrastrable1") && (cuadraditoName != "arrastrable2")&& (cuadraditoName != "arrastrable4")&& (cuadraditoName != "arrastrable5")){
        return false; // Cualquier elemento se puede soltar en la papelera
      }
        
        if ((id == 'casa4') &&(a=='0') && (cuadraditoName != "arrastrable1") && (cuadraditoName != "arrastrable2")&& (cuadraditoName != "arrastrable3")&& (cuadraditoName != "arrastrable5")){
        return false; // Cualquier elemento se puede soltar en la papelera
      }
      if ((id == 'casa5') &&(b=='0') && (cuadraditoName != "arrastrable1") && (cuadraditoName != "arrastrable2")&& (cuadraditoName != "arrastrable3")&& (cuadraditoName != "arrastrable4")){
        return false; // Cualquier elemento se puede soltar en la papelera
      }
    }
    /**
    * 
    * Mueve el elemento
    *
    **/
    function drop(e){

      var elementoArrastrado = e.dataTransfer.getData("Data"); // Elemento arrastrado
      e.target.appendChild(document.getElementById(elementoArrastrado));
      var puestos = cuadraditoPuestos;
      var registro = cuadraditoRegistro;
      var id = cuadraditoId;
       var action = "add"; 
      e.target.style.border = '';  // Quita el borde
      tamContX = $('#'+e.target.id).width();
      tamContY = $('#'+e.target.id).height();
      tamElemX = $('#'+elementoArrastrado).width();
      tamElemY = $('#'+elementoArrastrado).height();
      posXCont = $('#'+e.target.id).position().left;
      posYCont = $('#'+e.target.id).position().top;
      // Posicion absoluta del raton
      x = e.layerX;
      y = e.layerY;
      // Si parte del elemento que se quiere mover se queda fuera se cambia las coordenadas para que no sea asi
      if (posXCont + tamContX <= x + tamElemX){
        x = posXCont + tamContX - tamElemX;
      }
      if (posYCont + tamContY <= y + tamElemY){
        y = posYCont + tamContY - tamElemY;
      }
      document.getElementById(elementoArrastrado).style.left = x + "px";
      document.getElementById(elementoArrastrado).style.top = y + "px";
    for(var i=0; i < document.getElementById(elementoArrastrado).children.length; i++){
  document.getElementById(elementoArrastrado).children[i].style.width="100%";
    }
     $.ajax({  
                url:"views/modulos/action.php",  
                method:"POST",  
                data:{elementoArrastrado:elementoArrastrado, puestos:puestos,registro:registro,id:id, action:action},  
                success:function(data){  
                     $('#dragable_product_order').html(data);  
                }  
           })  
    }
      $(document).on('click', '.remove_product', function(){  
           if(confirm("¿Estas seguro de eliminar elemento?"))  
           {  
                var id = $(this).attr("id");  
                var action="delete";  
                $.ajax({  
                     url:"views/modulos/action.php",  
                     method:"POST",  
                     data:{id:id, action:action},  
                     success:function(data){  
                          $('#dragable_product_order').html(data);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      }); 
        function drope(e){
      var elementoArrastrado = e.dataTransfer.getData("Data"); // Elemento arrastrado
      e.target.appendChild(document.getElementById(elementoArrastrado));
      e.target.style.border = '';  // Quita el borde
      tamContX = $('#'+e.target.id).width();
      tamContY = $('#'+e.target.id).height();
      tamElemX = $('#'+elementoArrastrado).width();
      tamElemY = $('#'+elementoArrastrado).height();
      posXCont = $('#'+e.target.id).position().left;
      posYCont = $('#'+e.target.id).position().top;
      // Posicion absoluta del raton
      x = e.layerX;
      y = e.layerY;
      // Si parte del elemento que se quiere mover se queda fuera se cambia las coordenadas para que no sea asi
      if (posXCont + tamContX <= x + tamElemX){
        x = posXCont + tamContX - tamElemX;
      }
      if (posYCont + tamContY <= y + tamElemY){
        y = posYCont + tamContY - tamElemY;
      }
      document.getElementById(elementoArrastrado).style.left = x + "px";
      document.getElementById(elementoArrastrado).style.top = y + "px";
  document.getElementById(elementoArrastrado).children[0].style.width="0%";
  document.getElementById(elementoArrastrado).children[1].style.width="100%";
 
          var id = elementoArrastrado;  
                var action="delete";  
                $.ajax({  
                     url:"views/modulos/action.php",  
                     method:"POST",  
                     data:{id:id, action:action},  
                     success:function(data){  
                          $('#dragable_product_order').html(data);  
                     }  
                });  
    }
    /**
    * 
    * Elimina el elemento que se mueve
    *
    **/
    function eliminar(e){
      var elementoArrastrado = document.getElementById(e.dataTransfer.getData("Data")); // Elemento arrastrado
      elementoArrastrado.parentNode.removeChild(elementoArrastrado); // Elimina el elemento
      e.target.style.border = '';   // Quita el borde
    }

    /**
    * 
    * Clona el elemento que se mueve
    *
    **/
    // function clonar(e){
    //  var elementoArrastrado = document.getElementById(e.dataTransfer.getData("Data")); // Elemento arrastrado

    //  elementoArrastrado.style.opacity = ''; // Dejamos la opacidad a su estado anterior para copiar el elemento igual que era antes

    //  var elementoClonado = elementoArrastrado.cloneNode(true); // Se clona el elemento
    //  elementoClonado.id = "ElemClonado" + contador; // Se cambia el id porque tiene que ser unico
    //  contador += 1;  
    //  elementoClonado.style.position = "static";  // Se posiciona de forma "normal" (Sino habria que cambiar las coordenadas de la posición)  
    //  e.target.appendChild(elementoClonado); // Se añade el elemento clonado
    //  e.target.style.border = '';   // Quita el borde del "cuadro clonador"
    // }

// Back to top

  </script>
