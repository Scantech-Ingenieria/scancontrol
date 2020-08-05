 <?php
 error_reporting(0);
 session_start(); 
  if($_POST["action"] == "delete")  
 {  
      foreach($_SESSION["shopping_cart"] as $keys => $values)  
      {  
           if($values['item_id'] ==  $_POST["id"])  
           {  
                unset($_SESSION["shopping_cart"][$keys]);  
                  $_SESSION['shopping_cart']=array_values($_SESSION["shopping_cart"]);
                echo make_cart_table();  
           }  
      }  
 }  
 if($_POST["action"] == "add")  
 {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_POST["elementoArrastrado"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_POST["elementoArrastrado"],  
                     'item_name'               =>     $_POST["puestos"],  
                     'item_registro'               =>     $_POST["registro"],  
                     'id'               =>     $_POST["id"],  
                     'item_quantity'          =>     '1'  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;    
           }  
           else  
           {  
                echo '<script>alert("Item repetido")</script>';  
           }  
      echo make_cart_table();  
 }  
 function make_cart_table()  
 {   
      $output = '';  
      if(!empty($_SESSION["shopping_cart"]))  
      {   
           $output .= '  
                <h3>Detalles Grader</h3>  
                     <div class="form-group row">
            <label class="col-sm-2 col-form-label"><h5>Nombre de Grader :</h5></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nombre Grader" name="nombregrader" required>
            </div>
          </div>
                        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><h5>Cliente :</h5></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Nombre Cliente" name="nombrecliente" required>
            </div>
          </div>
                <div class="table-responsive">
                <form id="formu-nuevo-grader">  
                     <table class="table table-bordered ">  
                       <thead class="thead-light">
                          <tr>  
                         
                               <th width="20%">Unidad</th>  
                               <th width="90%">Descripción</th>  
                        
                          </tr>  
                            </thead>
               ';  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                $output .= '  
                     <tr>  
                         <input type="hidden" name="id[]" value="'.$values["item_registro"].'-'.$values["id"].'">
                          <td ><input type="hidden" name="registro[]" value="'.$values["item_registro"].'">'.$values["item_registro"].'</td>  
                          <td name="nombre">'.$values["item_name"].'</td>  
                          
                     </tr>  
                ';    
           }  
           $output .= ' 
                <tr>  
                     <td colspan="3" align="right"><button type="submit" class="btn btn-primary">Crear Grader</button></td>  
                </tr>   
           </table> 
           </form>   
           ';  
      }  
      return $output;  
 }  
 ?> 
 <script type="text/javascript">
      $(document).ready(function(){
  $("#formu-nuevo-grader").submit(function (e) {
    e.preventDefault()
      var id = $("input[name='id[]']").map(function(){return $(this).val();}).get();
    var pvp = $("input[name='registro[]']").map(function(){return $(this).val();}).get();
    var grader = $("input[name='nombregrader']").val();
    var cliente = $("input[name='nombrecliente']").val();


    $.ajax({
      url: 'views/modulos/AjaxGrader.php',
      type: 'POST',
      data: {"id":id,"pvp":pvp,"grader":grader,"cliente":cliente},
      success: function(respuesta) {
        console.log(respuesta)
        if (respuesta == "ok") {
    Swal.fire(
  'Excelente!',
  'Grader registrada con exito!',
  'success'
).then((result) => {
            if (result.value) {
              window.location = "registros"
            }
          })
        }
      }
    })
  })
})
 </script>

