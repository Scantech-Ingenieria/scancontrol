 
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Tablero Eléctrico
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                         <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-tableroelectrico">Agregar Tablero Eléctrico <i class="fas fa-plus"></i></button>
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
                        </style>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Alt</th>
                <th>Cantidad / Tipo Automaticos</th>
                <th>Fuente Poder</th>
                <th>Cantidad / Tipo VDF</th>
                <th>Ancho</th>
                <th>Fondo</th>
                <th>Contactor</th>
                <th>Img</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                    <?php
          $tabla = ControllerTableroelectrico::listarTableroelectricoCtr();
          foreach ($tabla as $key => $value) {


$id_tableroelectrico=$value["id_tableroelectrico"];
            echo '
<tr>
<td>'.nl2br($value["id_tableroelectrico"]).'</td>
<td>'.nl2br($value["altura"]).'</td>';
echo '<td>';
  $tablaautomatico = ControllerTableroelectrico::listarTelectricoautomaticoCtr();
foreach ($tablaautomatico as $key => $valor) {
$idtablaautomatico=$valor["id_tablero_electrico"];
if ($idtablaautomatico==$id_tableroelectrico) {
   echo '<div style="background:#f3f6fb;margin-bottom:2px;">'.$valor["cantidad"].' / <label style="font-weight: bold;">A: </label>'.$valor["amperaje"].' <label style="font-weight: bold;">Marca:</label> '.$valor["marca"].' <label style="font-weight: bold;"> Tipo:</label> '.$valor["tipo"].'</div><br>';
}
}
echo '</td>';
echo '<td>';
$tablafuente = ControllerTableroelectrico::listarTelectricofuenteCtr();
foreach ($tablafuente as $key => $valorfuente) {
$idtablafuente=$valorfuente["id_tablero_electrico"];
if ($idtablafuente==$id_tableroelectrico) {
   echo '<div style="background:#ffefef;margin-bottom:5px;"><label style="font-weight: bold;">- M:</label> '.$valorfuente["marca"].'<br> <label style="font-weight: bold;">A:</label> '.$valorfuente["amperaje"].'<br>  <label style="font-weight: bold;">C: </label> '.$valorfuente["corriente"].' <br>  <a href="#"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valorfuente["rutaImg"], 3).'"></a><br></div>';


  


}
}
echo '</td>';
echo '<td>';
$tablavdf = ControllerTableroelectrico::listarTelectricovdfCtr();
foreach ($tablavdf as $key => $valorvdf) {
$idtablavdf=$valorvdf["id_tablero_electrico"];
if ($idtablavdf==$id_tableroelectrico) {
   echo '<div style="background:#eaeaea;margin-bottom:5px;"><label style="font-weight: bold;">- P:</label> '.$valorvdf["potencia"].' <label style="font-weight: bold;">M:</label> '.$valorvdf["marca"].'</div>  <br>';


  


}
}

echo '</td>';

echo '<td>'.nl2br($value["ancho"]).'</td>
<td>'.nl2br($value["fondo"]).'</td>
<td>'.nl2br($value["contactor"]).'</td>
<td><img width="100" src="'.substr($value["rutaImg"], 3).'"></td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarSprockets" idSprockets="'.$value["id_sprockets"].'" data-toggle="modal" data-target="#modal-editar-sprockets">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarSprockets" idSprockets="'.$value["id_sprockets"].'"rutaImagen="'.$value["rutaImg"].'">
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