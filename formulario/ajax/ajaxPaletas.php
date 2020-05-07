<?php
require_once "../controllers/paletas.controller.php";
require_once "../models/paletas.modelo.php";
Class ajaxPaletas {
	public function crearPaletas(){
		$datos = array(
					
						"tipopaletas"=>$this->tipopaletas,
						"medidapaletas"=>$this->medidapaletas,
						"decs"=>$this->decs,
						"dics"=>$this->dics,
						"acs"=>$this->acs,
						"aci"=>$this->aci,
						"dici"=>$this->dici,
						"altura"=>$this->altura,
						"ancho"=>$this->ancho,
						"fondo"=>$this->fondo,
						"perfo"=>$this->perfo,
						"anclaje"=>$this->anclaje,
						"alturaeje"=>$this->alturaeje,
						"diametroeje"=>$this->diametroeje,
						"medidabrazo"=>$this->medidabrazo,
						"cilindro"=>$this->cilindro,
						"racors"=>$this->racors,
						"orientacion"=>$this->orientacion,	
						"precio"=>$this->precio,						
						"imagen"=>$this->imagen_paletas
					);

		$respuesta = ControllerPaletas::ctrCrearPaletas($datos);
		echo $respuesta;
	}
	public function editarPaletas(){
		$id_paletas = $this->id_paletas;
		$respuesta = ControllerPaletas::ctrEditarPaletas($id_paletas);
		$datos = array("id_paletas"=>$respuesta["id_paletas"],
						"tipo_paleta"=>$respuesta["tipo_paleta"],
						"medida_paleta"=>$respuesta["medida_paleta"],
				        "decs"=>$respuesta["decs"],
				        "dics"=>$respuesta["dics"],
				        "acs"=>$respuesta["acs"],
				        "aci"=>$respuesta["aci"],
				        "dici"=>$respuesta["dici"],
				        "altura"=>$respuesta["altura"],
				        "ancho"=>$respuesta["ancho"],
				        "fondo"=>$respuesta["fondo"],
				        "perfo"=>$respuesta["perforacion"],
				        "anclaje"=>$respuesta["anclaje"],			
				        "alturaeje"=>$respuesta["alturaeje"],
				        "diametroeje"=>$respuesta["diametroeje"],
				        "medidas_brazo_leva"=>$respuesta["medidas_brazo_leva"],
				        "cilindrado"=>$respuesta["cilindrado"],
				        "racors"=>$respuesta["racors"],
				        "orientacion"=>$respuesta["orientacion"],
						"precio"=>miles($respuesta["precio"]),			        
				         "imagen"=>substr($respuesta["rutaImg"], 3)

						);
		echo json_encode($datos);
	}
	public function actualizarPaletas(){
		$datos = array( "id_paletas"=>$this->id_paletas,
					
						"tipopaletas"=>$this->tipopaletas,
						"medidapaletas"=>$this->medidapaletas,
						"decs"=>$this->decs,
						"dics"=>$this->dics,
						"acs"=>$this->acs,
						"aci"=>$this->aci,
						"dici"=>$this->dici,
						"altura"=>$this->altura,
						"ancho"=>$this->ancho,
						"fondo"=>$this->fondo,
						"perfo"=>$this->perfo,
						"anclaje"=>$this->anclaje,
						"alturaeje"=>$this->alturaeje,
						"diametroeje"=>$this->diametroeje,
						"medidabrazo"=>$this->medidabrazo,
						"cilindro"=>$this->cilindro,
						"racors"=>$this->racors,
						"orientacion"=>$this->orientacion,	
						"precio"=>$this->precio,			
						"imagen"=>$this->imagen_paletas,
						"rutaActual"=>$this->rutaActual		

						);
		$respuesta = ControllerPaletas::ctrActualizarPaletas($datos);
		echo $respuesta;
	}
	public function eliminarPaletas(){
		$id_paletas = $this->id_paletas;
			$ruta = $this->imagen_paletas;
		$respuesta = ControllerPaletas::ctrEliminarPaletas($id_paletas,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertarpaletas") {
	$crearNuevoPaletas = new ajaxPaletas();
	$crearNuevoPaletas -> tipopaletas = $_POST["TipoPaletas"];
	$crearNuevoPaletas -> medidapaletas = $_POST["MedidaPaletas"];
	$crearNuevoPaletas -> decs = $_POST["Decs"];
	$crearNuevoPaletas -> dics = $_POST["Dics"];
	$crearNuevoPaletas -> acs = $_POST["Acs"];
	$crearNuevoPaletas -> aci = $_POST["Aci"];
	$crearNuevoPaletas -> dici = $_POST["Dici"];
	$crearNuevoPaletas -> altura = $_POST["Altura"];
	$crearNuevoPaletas -> ancho = $_POST["Ancho"];
	$crearNuevoPaletas -> fondo = $_POST["Fondo"];
	$crearNuevoPaletas -> perfo = $_POST["Perfo"];
	$crearNuevoPaletas -> anclaje = $_POST["Anclaje"];
	$crearNuevoPaletas -> alturaeje = $_POST["AlturaEje"];
	$crearNuevoPaletas -> diametroeje = $_POST["DiametroEje"];
	$crearNuevoPaletas -> medidabrazo = $_POST["MedidaBrazoLeva"];
	$crearNuevoPaletas -> cilindro = $_POST["Clilindrado"];
	$crearNuevoPaletas -> racors = $_POST["Racors"];
	$crearNuevoPaletas -> orientacion = $_POST["Orientacion"];
	$crearNuevoPaletas -> precio = puntos($_POST["Precio"]);
	$crearNuevoPaletas -> imagen_paletas = $_FILES["imagenPaletas"];
	$crearNuevoPaletas ->crearPaletas();
}

if ($tipoOperacion == "editarPaletas") {
	$editarPaletas = new ajaxPaletas();
	$editarPaletas -> id_paletas = $_POST["id_paletas"];
	$editarPaletas -> editarPaletas();
}
if ($tipoOperacion == "actualizarPaletas") {
	$actualizarPaletas = new ajaxPaletas();
	$actualizarPaletas -> id_paletas = $_POST["id_paletas"];
	$actualizarPaletas -> tipopaletas = $_POST["TipoPaletas"];
	$actualizarPaletas -> medidapaletas = $_POST["MedidaPaletas"];
    $actualizarPaletas -> decs = $_POST["Decs"];
	$actualizarPaletas -> dics = $_POST["Dics"];
	$actualizarPaletas -> acs = $_POST["Acs"];
	$actualizarPaletas -> aci = $_POST["Aci"];
	$actualizarPaletas -> dici = $_POST["Dici"];
	$actualizarPaletas -> altura = $_POST["Altura"];
	$actualizarPaletas -> ancho = $_POST["Ancho"];
	$actualizarPaletas -> fondo = $_POST["Fondo"];
	$actualizarPaletas -> perfo = $_POST["Perfo"];
	$actualizarPaletas -> anclaje = $_POST["Anclaje"];
	$actualizarPaletas -> alturaeje = $_POST["AlturaEje"];
	$actualizarPaletas -> diametroeje = $_POST["DiametroEje"];
	$actualizarPaletas -> medidabrazo = $_POST["MedidaBrazoLeva"];
	$actualizarPaletas -> cilindro = $_POST["Clilindrado"];
	$actualizarPaletas -> racors = $_POST["Racors"];
	$actualizarPaletas -> orientacion = $_POST["Orientacion"];
	$actualizarPaletas -> precio = puntos($_POST["Precio"]);
	$actualizarPaletas -> imagen_paletas = $_FILES["imagenPaletas"];
	$actualizarPaletas -> rutaActual = $_POST["rutaActual"];
	$actualizarPaletas -> actualizarPaletas();
}
if ($tipoOperacion == "eliminarPaletas") {
	$eliminarPaletas = new ajaxPaletas();
	$eliminarPaletas -> id_paletas = $_POST["id_paletas"];
	$eliminarPaletas -> imagen_paletas = $_POST["rutaImagen"];

	$eliminarPaletas -> eliminarPaletas();
}
function puntos($s)
{
$s= str_replace('.','', $s); 
return $s;
}
function miles($m){
$m=number_format($m, 0, ',', '.');
return $m;

}
?>