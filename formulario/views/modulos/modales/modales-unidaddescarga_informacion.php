 

 <?php 
 $tablaa = ControllerDescarga::listarDescargaCtr();

foreach ($tablaa as $key => $value) {   
  $id_descarga=$value["id_unidad_descarga"];
  $id_sprockets=$value["id_sprockets"];
  $id_banda=$value["id_banda"];
  $id_motor=$value["id_motor"];
  $id_descanso=$value["id_rodamientos"];
  $id_paletas=$value["id_paletas"];
  $id_cilindros=$value["id_cilindros"];




echo'
<div class="modal fade" id="sprocket'.$id_descarga.''.$id_sprockets.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Sprockets</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($value["id_sprockets"]).'</td>
    </tr> <tr>
      <th scope="row">Serie: </th>
      <td>'.nl2br($value["spro_serie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($value["spro_modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($value["dientes"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($value["perforacion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($value["descr_spro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["sproimg"], 3).'"><img  width="150" src="'.substr($value["sproimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="bandas'.$id_descarga.''.$id_banda.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Banda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($value["id_banda"]).'</td>
    </tr> <tr>
      <th scope="row">Superficie: </th>
      <td>'.nl2br($value["superficie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($value["paso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($value["serie_banda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($value["ancho_banda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($value["banda_descripcion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["bandaimg"], 3).'"><img  width="150" src="'.substr($value["bandaimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="motor'.$id_descarga.''.$id_motor.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Motor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($value["id_motor"]).'</td>
    </tr> <tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($value["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($value["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($value["corriente"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($value["potencia"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["motorimg"], 3).'"><img  width="150" src="'.substr($value["motorimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="descanso'.$id_descarga.''.$id_descanso.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Descanso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($value["id_rodamientos"]).'</td>
    </tr> <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($value["modelo_descanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($value["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($value["material_descanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($value["fijaciones"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["descansoimg"], 3).'"><img  width="150" src="'.substr($value["descansoimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="paletas'.$id_descarga.''.$id_paletas.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Paleta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
<div class="col-sm-6" >
 <table class="table table-bordered table-sm" style="font-size: 12px;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($value["id_paletas"]).'</td>
    </tr> <tr>
      <th scope="row">Tipo: </th>
      <td>'.nl2br($value["tipo_paleta"]).'</td>


    </tr>

    <tr>
      <th scope="row">Medida Paleta : </th>
      <td>'.nl2br($value["medida_paleta"]).'</td>
    </tr>
     <tr>
  
      <th class="bg-info" scope="row" colspan="2">Medida Bujes</th>
  
    </tr>
    <tr class="table-info">
      <th  scope="row">Diametro Exterior Cuerpo Superior: </th>
      <td>'.nl2br($value["decs"]).'</td>
    </tr>
       <tr class="table-info">
      <th scope="row">Diametro Interior Cuerpo Inferior:</th>
      <td>'.nl2br($value["dics"]).'</td>
    </tr>
       <tr class="table-info">
      <th scope="row">Altura Cuerpo Superior:</th>
      <td>'.nl2br($value["acs"]).'</td>
    </tr>
     <tr class="table-info">
      <th scope="row">Altura Cuerpo Inferior:</th>
      <td>'.nl2br($value["aci"]).'</td>
    </tr>
     <tr class="table-info">
      <th scope="row">Diametro Interior Cuerpo Inferior:</th>
      <td>'.nl2br($value["dici"]).'</td>
    </tr>
      <tr>
       <tr>
      <th class="bg-danger" scope="row" colspan="2">Medida Housing</th>
    </tr>
  <tr class="table-danger">
      <th  scope="row">Altura: </th>
      <td>'.nl2br($value["altura_paleta"]).'</td>
    </tr>
      <tr class="table-danger">
      <th  scope="row">Ancho: </th>
      <td>'.nl2br($value["ancho_paleta"]).'</td>
    </tr>
      <tr class="table-danger">
      <th  scope="row">Fondo: </th>
      <td>'.nl2br($value["fondo_paleta"]).'</td>
    </tr>
     <tr class="table-danger">
      <th  scope="row">Perforación: </th>
      <td>'.nl2br($value["perforacion_paleta"]).'</td>
    </tr>
    <tr class="table-danger">
      <th  scope="row">Anclaje: </th>
      <td>'.nl2br($value["anclaje"]).'</td>
    </tr>
      <tr>
      <th class="bg-success" scope="row" colspan="2">Medida Eje</th>
    </tr>
 <tr class="table-success">
      <th  scope="row">Altura: </th>
      <td>'.nl2br($value["alturaeje"]).'</td>
    </tr>
     <tr class="table-success">
      <th  scope="row">Diametro: </th>
      <td>'.nl2br($value["diametroeje"]).'</td>
    </tr>
    <tr>
      <th scope="row">Medida Brazo Leva:</th>
      <td>'.nl2br($value["medidas_brazo_leva"]).'</td>
    </tr>
     <tr>
      <th scope="row">Cilindrado:</th>
      <td>'.nl2br($value["cilindrado_paleta"]).'</td>
    </tr>
      <tr>
      <th scope="row">Racors:</th>
      <td>'.nl2br($value["racors"]).'</td>
    </tr>
      <tr>
      <th scope="row">Orientacion:</th>
      <td>'.nl2br($value["orientacion"]).'</td>
    </tr>
  </tbody>
</table>
      </div>
<div class="col-sm-6" >
      ';
if($value["paletaimg"]==''){
echo'<h3>No hay imagen</h3>';
}else{
      echo'
<a href="'.substr($value["paletaimg"], 3).'"><img  width="350" src="'.substr($value["paletaimg"], 3).'"></a>';
}

echo'
      </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cilindros'.$id_descarga.''.$id_cilindros.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Cilindro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($value["id_cilindros"]).'</td>
    </tr> <tr>
      <th scope="row">Nombre: </th>
      <td>'.nl2br($value["nombre_cilindro"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro : </th>
      <td>'.nl2br($value["diametro_cilindro"]).'</td>
    </tr>
    <tr>
      <th scope="row">Largo:</th>
      <td>'.nl2br($value["largo_cilindro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Material Cuerpo:</th>
      <td>'.nl2br($value["materialcuerpo"]).'</td>
    </tr>
<tr>
      <th scope="row">Material Vastago:</th>
      <td>'.nl2br($value["materialvastago"]).'</td>
    </tr>
    <tr>
      <th scope="row">Medida Hilo:</th>
      <td>'.nl2br($value["medidahilo"]).'</td>
    </tr>

      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="'.substr($value["cilindroImg"], 3).'"><img  width="150" src="'.substr($value["cilindroImg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>

';

}




 ?>

