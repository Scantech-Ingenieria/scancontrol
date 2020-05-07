 
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Tablero Neumático
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">

                                         <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-tableroneumatico">Agregar Tablero Neumático <i class="fas fa-plus"></i></button>
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
                <th>Cantidad / Tipo Automaticos</th> 
                 <th>Cantidad / Fuente Poder</th>
                <th>Manifold</th>
                <th>Cantidad / Tipo PLC</th>
                <th>Img</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody style="font-size: 12px;">
            
                    <?php
          $tabla = ControllerTableroneumatico::listarTableroneumaticoCtr();
          foreach ($tabla as $key => $value) {


$id_tableroneumatico=$value["id_tableroneumatico"];
            echo '
<tr>
<td>'.nl2br($value["id_tableroneumatico"]).'</td>
<td>'.nl2br($value["altura"]).'x'.nl2br($value["ancho"]).'x'.nl2br($value["fondo"]).' </td>';
echo '<td>';
  $tablaautomatico = ControllerTableroneumatico::listarTneumaticoautomaticoCtr();

foreach ($tablaautomatico as $key => $valor) {
$idtablaautomatico=$valor["id_tablero_neumatico"];
if ($idtablaautomatico==$id_tableroneumatico) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f3f6fb;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valor["id_automatico"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valor["cantidad"].' </div><div class="col-sm-12"><label style="font-weight: bold;">Amperaje: </label> '.$valor["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Marca:</label> '.$valor["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Tipo:</label> '.$valor["tipo"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción: </label> '.$valor["descripcion"].'</div><div class="col-sm-12">  <a href="'.substr($valor["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valor["rutaImg"], 3).'"></a></div></div></div>';
}
}
echo '</td>';
echo '<td>';
$tablafuente = ControllerTableroneumatico::listarTneumaticofuenteCtr();
foreach ($tablafuente as $key => $valorfuente) {
$idtablafuente=$valorfuente["id_tablero_neumatico"];
if ($idtablafuente==$id_tableroneumatico) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#ffe3e3;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID:</label> '.$valorfuente["id_fuentepoder"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorfuente["cantidad"].' </div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valorfuente["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Corriente: </label> '.$valorfuente["corriente"].'</div><div class="col-sm-12">  <label style="font-weight: bold;">Descripción: </label> '.$valorfuente["descripcion"].'</div><div class="col-sm-12">   <a href="'.substr($valorfuente["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valorfuente["rutaImg"], 3).'"></a></div></div></div>';

}
}
echo '</td>';
echo '<td>';
$tablamanifold = ControllerTableroneumatico::listarTneumaticomanifoldCtr();
foreach ($tablamanifold as $key => $valormanifold) {
$idtablamanifold=$valormanifold["id_tablero_neumatico"];
if ($idtablamanifold==$id_tableroneumatico) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f5f5f5;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;"> ID:</label> '.$valormanifold["id_manifold"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Marca:</label> '.$valormanifold["marca"].' </div><div class="col-sm-12"> <label style="font-weight: bold;"> Hilo:</label> '.$valormanifold["medidas"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Cantidad Estaciones:</label> '.$valormanifold["sockets"].'</div><div class="col-sm-12"> <a href="'.substr($valormanifold["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valormanifold["rutaImg"], 3).'"></a></div></div></div>';
}
}

echo '</td>';

echo '<td>';
$tablavdf = ControllerTableroneumatico::listarTneumaticoplcCtr();
foreach ($tablavdf as $key => $valorvdf) {
$idtablavdf=$valorvdf["id_tablero_neumatico"];
if ($idtablavdf==$id_tableroneumatico) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f5f5f5;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">ID: </label> '.$valorvdf["cantidad"].'</div><div class="col-sm-12"><label style="font-weight: bold;">Modelo:</label> '.$valorvdf["modelo"].'</div><div class="col-sm-12"><label style="font-weight: bold;"> Descripción:</label> '.$valorvdf["descripcion"].'</div><div class="col-sm-12"> <a href="'.substr($valorvdf["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="150" src="'.substr($valorvdf["rutaImg"], 3).'"></a></div></div></div>';
}
}

echo '</td>';
echo '
<td><img width="100" src="'.substr($value["rutaImg"], 3).'"></td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarTableroneumatico" idTableroneumatico="'.$value["id_tableroneumatico"].'" data-toggle="modal" data-target="#modal-editar-tableroneumatico">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarTableroneumatico" idTableroneumatico="'.$value["id_tableroneumatico"].'"rutaImagen="'.$value["rutaImg"].'">
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