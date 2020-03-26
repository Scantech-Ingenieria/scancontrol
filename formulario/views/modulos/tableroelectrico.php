 
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
                <th>Alt-Anch-Fond</th>
            
                <th>Contactor</th>
                <th>Cantidad / Tipo Automaticos / Descr</th>
                <th>Fuente Poder</th>
                <th>Cantidad / Tipo VDF / Descr</th>
                
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
<td>'.nl2br($value["altura"]).'x'.nl2br($value["ancho"]).'x'.nl2br($value["fondo"]).' </td>';
echo '<td>'.nl2br($value["contactor"]).'</td>';
echo '<td>';
  $tablaautomatico = ControllerTableroelectrico::listarTelectricoautomaticoCtr();
foreach ($tablaautomatico as $key => $valor) {
$idtablaautomatico=$valor["id_tablero_electrico"];
if ($idtablaautomatico==$id_tableroelectrico) {
   echo '<div style="background:#f3f6fb;margin-bottom:2px;">'.$valor["cantidad"].' / <label style="font-weight: bold;">A: </label>'.$valor["amperaje"].' <label style="font-weight: bold;">Marca:</label> '.$valor["marca"].' <label style="font-weight: bold;"> Tipo:</label> '.$valor["tipo"].' <label style="font-weight: bold;"> Descripción: </label> '.$valor["descripcion"].'<br>  <a href="#"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valor["rutaImg"], 3).'"></a><br></div><br>';
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
   echo '<div style="background:#eaeaea;margin-bottom:5px;">'.$valorvdf["cantidad"].' /<label style="font-weight: bold;">- P:</label> '.$valorvdf["potencia"].' <label style="font-weight: bold;">M:</label> '.$valorvdf["marca"].' <label style="font-weight: bold;"> Descripción:</label> '.$valorvdf["descripcion"].'<br>  <a href="#"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valorvdf["rutaImg"], 3).'"></a><br></div>  <br>';
}
}

echo '</td>';

echo '
<td><img width="100" src="'.substr($value["rutaImg"], 3).'"></td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarTableroelectrico" idTableroelectrico="'.$value["id_tableroelectrico"].'" data-toggle="modal" data-target="#modal-editar-tableroelectrico">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarTableroelectrico" idTableroelectrico="'.$value["id_tableroelectrico"].'"rutaImagen="'.$value["rutaImg"].'">
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