
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class=" pe-7s-user icon-gradient bg-malibu-beach">
                                        </i>

                                       
                                    </div>
                                    <div>Clientes
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                      
 
 <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-cliente">Agregar Cliente <i class="fas fa-plus"></i></button>


                                    </div>
                                </div>    </div>
                        </div> 



<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
  
                <th>Cliente</th>
  
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>



          <?php

          $tabla = ControllerCliente::listarClienteCtr();



          foreach ($tabla as $key => $value) {


            echo '
<tr>
<td>'.nl2br($value["id_cliente"]).'</td>
<td>'.nl2br($value["nombre_cliente"]).'</td>

<td width="100"> <button class="btn btn-sm btn-info btnEditarCliente" idCliente="'.$value["id_cliente"].'" data-toggle="modal" data-target="#modal-editar-cliente">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarCliente" idCliente="'.$value["id_cliente"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>


            ';
              # code...
          }

?>



        </tbody>
     
    </table>