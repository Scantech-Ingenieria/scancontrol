<?php
require_once "../controllers/vdf.controller.php";
require_once "../models/vdf.modelo.php";
Class ajaxVdf {
	public function crearVdf(){
		$datos = array(	
					"potencia"=>$this->potencia,
						"marca"=>$this->marca,
						"precio"=>$this->precio,					
						"imagen"=>$this->imagen_vdf
					);

		$respuesta = ControllerVdf::ctrCrearVdf($datos);
		echo $respuesta;
	}
	public function editarVdf(){
		$id_vdf = $this->id_vdf;
		$respuesta = ControllerVdf::ctrEditarVdf($id_vdf);
		$datos = array("id_vdf"=>$respuesta["id_vdf"],
						"potencia"=>$respuesta["potencia"],
						"marca"=>$respuesta["marca"],
						"precio"=>miles($respuesta["precio"]),					
						"imagen"=>substr($respuesta["rutaImg"], 3)
						);
		echo json_encode($datos);
	}
	public function actualizarVdf(){
		$datos = array( "id_vdf"=>$this->id_vdf,
						"potencia"=>$this->potencia,
						"marca"=>$this->marca,
						"precio"=>$this->precio,
						"imagen"=>$this->imagen_vdf,		
						"rutaActual"=>$this->rutaActual
						);
		$respuesta = ControllerVdf::ctrActualizarVdf($datos);
		echo $respuesta;
	}
	public function eliminarVdf(){
		$id_vdf = $this->id_vdf;
		$ruta = $this->imagen_vdf;

		$respuesta = ControllerVdf::ctrEliminarVdf($id_vdf,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertarvdf") {
	$crearNuevoVdf = new ajaxVdf();
    $crearNuevoVdf -> imagen_vdf = $_FILES["imagenVdf"];
	$crearNuevoVdf -> potencia = $_POST["Potencia"];
	$crearNuevoVdf -> marca = $_POST["Marca"];
	$crearNuevoVdf -> precio = puntos($_POST["Precio"]);
	$crearNuevoVdf ->crearVdf();
}

if ($tipoOperacion == "editarVdf") {
	$editarVdf = new ajaxVdf();
	$editarVdf -> id_vdf = $_POST["id_vdf"];
	$editarVdf -> editarVdf();
}
if ($tipoOperacion == "actualizarVdf") {
	$actualizarVdf = new ajaxVdf();
	$actualizarVdf -> id_vdf = $_POST["id_vdf"];
	$actualizarVdf -> potencia = $_POST["Potencia"];
	$actualizarVdf -> marca = $_POST["Marca"];
	$actualizarVdf -> precio = puntos($_POST["Precio"]);
    $actualizarVdf -> imagen_vdf = $_FILES["imagenVdf"];
	$actualizarVdf -> rutaActual = $_POST["rutaActual"];
	$actualizarVdf -> actualizarVdf();
}
if ($tipoOperacion == "eliminarVdf") {
	$eliminarVdf = new ajaxVdf();
	$eliminarVdf -> id_vdf = $_POST["id_vdf"];
	$eliminarVdf -> imagen_vdf = $_POST["rutaImagen"];
	$eliminarVdf -> eliminarVdf();
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