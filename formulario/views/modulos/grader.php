 <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Grader
                                        <div class="page-title-subheading">Grader creadas.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                    </div>
                                </div>    </div>
                        </div> 
             <style type="text/css">
a {
  position: relative;
}
 
#img {
  position: absolute;
  top: 100%;
  left: 100%;
  display: none;
}
 
a:hover #img {
  display: block;
}
label{
    margin-bottom: .2rem;
}
                        </style> 
<table id="example" class="table table-striped table-bordered" style="width:100%;font-size: 12px;">
        <thead>
            <tr>
                <th>ID</th>
                 <th>Web</th>

                 <th>Cliente</th>
                 <th>Grader</th> 
                  <th>Estación de Calidad</th>
                <th>Unidad Alimentación</th>
                 <th>Unidad Aceleración</th>
                 <th>Unidad de Pesaje</th>    
                <th>Unidad Descarga</th>                               
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

   <?php
          $tabla = ControllerGrader::listarGraderCtr();
          foreach ($tabla as $key => $value) {
            echo '
<tr>
<td>'.nl2br($value["id_unidad_balanza"]).'</td>
<td><a href="http://scancontrol.scantech.cl/frontend/?id='.$value["id_unidad_balanza"].'">Web</a></td>
<td>'.nl2br($value["cliente"]).'</td>
<td>'.nl2br($value["grader"]).'</td>
<td>'.nl2br($value["descripcalidad"]).'</td>
<td>'.nl2br($value["descralim"]).'</td>
<td>'.nl2br($value["descraceleracion"]).'</td>
<td>'.nl2br($value["descrpesaje"]).'</td>
<td>'.nl2br($value["descripdescarga"]).'</td>





<td width="100"> <button class="btn btn-sm btn-info btnEditarGrader" idGrader="'.$value["id_unidad_balanza"].'" data-toggle="modal" data-target="#modal-editar-grader">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarGrader" idGrader="'.$value["id_unidad_balanza"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>
            ';
          }
?>

        </tbody>
     
    </table>