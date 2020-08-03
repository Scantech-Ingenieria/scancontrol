 
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
label{
    margin-bottom: .2rem;
}
#cuadro{
border: 5px solid #ccc;
float: left;
margin: 15px;
-webkit-transition: margin 0.5s ease-out;
-moz-transition: margin 0.5s ease-out;
-ms-transition: margin 0.5s ease-out;
transition: margin 0.5s ease-out;
}
.ex1 img:hover {
margin-top: 2px;
}
#cuadro {
border: 5px solid #ccc;
float: left;
margin: 15px;
-webkit-transition: margin 0.5s ease-out;
-moz-transition: margin 0.5s ease-out;
-ms-transition: margin 0.5s ease-out;
transition: margin 0.5s ease-out;
}
#cuadro:hover {
margin-top: 2px;
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
                <th>Total Precio</th>
                
                <th>Img</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody style="font-size: 12px;">
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
$sumaautomatico= 0;
foreach ($tablaautomatico as $key => $valor) {
$idtablaautomatico=$valor["id_tablero_electrico"];
if ($idtablaautomatico==$id_tableroelectrico) {
$totalprecioautomatico=$valor["cantidad"]*$valor["precio"];
$sumaautomatico+= $totalprecioautomatico;

   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f3f6fb;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valor["id_automatico"].' </div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valor["cantidad"].' </div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valor["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Marca:</label> '.$valor["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Tipo:</label> '.$valor["tipo"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción: </label> '.$valor["descripcion"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Precio Unidad:</label> $'.number_format($valor["precio"],'0', ',',',').'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Precio Total:</label> $'.number_format($totalprecioautomatico,'0', ',',',').'</div><div class="col-sm-12">  <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valor["rutaImg"], 3).'"></a></div></div></div>';
}
}
echo '</td>';
echo '<td>';
$tablafuente = ControllerTableroelectrico::listarTelectricofuenteCtr();
$sumafuente= 0;

foreach ($tablafuente as $key => $valorfuente) {
$idtablafuente=$valorfuente["id_tablero_electrico"];
if ($idtablafuente==$id_tableroelectrico) {

$sumafuente+= $valorfuente["precio"];

   echo '<div class="shadow-lg p-3 mb-5 rounded"  style="background:#ffefef;margin-bottom:5px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valorfuente["id_fuentepoder"].' </div><div class="col-sm-12"><label style="font-weight: bold;"> Marca:</label> '.$valorfuente["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valorfuente["amperaje"].'</div><div class="col-sm-12">  <label style="font-weight: bold;">Corriente: </label> '.$valorfuente["corriente"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Descripción: </label> '.$valorfuente["descripcion"].'  </div><div class="col-sm-12"> <label style="font-weight: bold;"> Precio Unidad:</label> $'.number_format($valorfuente["precio"],'0', ',',',').'</div><div class="col-sm-12">  <a href="'.substr($valorfuente["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valorfuente["rutaImg"], 3).'"></a></div></div></div>';

}
}
echo '</td>';
echo '<td>';
$tablavdf = ControllerTableroelectrico::listarTelectricovdfCtr();

$sumavdf = 0;
foreach ($tablavdf as $key => $valorvdf) {
$idtablavdf=$valorvdf["id_tablero_electrico"];
if ($idtablavdf==$id_tableroelectrico) {
$totapreciovdf=$valorvdf["cantidad"]*$valorvdf["precio"];

$sumavdf+= $totapreciovdf;
   echo '<div class="shadow-lg p-3 mb-5 rounded style="background:#eaeaea;margin-bottom:5px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valorvdf["id_vdf"].' </div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorvdf["cantidad"].'</div><div class="col-sm-12"><label style="font-weight: bold;"> P:</label> '.$valorvdf["potencia"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">M:</label> '.$valorvdf["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción:</label> '.$valorvdf["descripcion"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Precio Unidad:</label> $'.number_format($valorvdf["precio"],'0', ',',',').'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Precio Total:</label> $'.number_format($totapreciovdf,'0', ',',',').'</div><div class="col-sm-12">  <a href="'.substr($valorvdf["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valorvdf["rutaImg"], 3).'"></a></div></div> </div>';
  
}
}

echo '</td>';


$totalprecio=$sumavdf+$sumafuente+$sumaautomatico;
echo '
<td><div class="col-sm-12"> $'.number_format($totalprecio,'0', ',',',').' </div></td>
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

  <script type="text/javascript"> 
  function miles($m){
$m=number_format($m, 0, ',', '.');
return $m;

}</script>