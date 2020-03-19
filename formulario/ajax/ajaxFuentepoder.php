<?php
require_once "../controllers/fuentepoder.controller.php";
require_once "../models/fuentepoder.modelo.php";
Class ajaxFuentePoder {
	public function crearFuentePoder(){
		$datos = array(
						"marca"=>$this->marca,
						"amperaje"=>$this->amperaje,
						"corriente"=>$this->corriente,
						"imagen"=>$this->imagen_fuentepoder
					);

		$respuesta = ControllerFuentePoder::ctrCrearFuentePoder($datos);
		echo $respuesta;
	}
	public function editarFuentePoder(){
		$id_fuentepoder = $this->id_fuentepoder;
		$respuesta = ControllerFuentePoder::ctrEditarFuentePoder($id_fuentepoder);
		$datos = array("id_fuentepoder"=>$respuesta["id_fuentepoder"],
						  "marca"=>$respuesta["marca"], 
						  "amperaje"=>$respuesta["amperaje"],
				          "corriente"=>$respuesta["corriente"],
				          "imagen"=>substr($respuesta["rutaImg"], 3)
						);
		echo json_encode($datos);
	}
	public function actualizarFuentePoder(){
		$datos = array( "id_fuentepoder"=>$this->id_fuentepoder,
						"marca"=>$this->marca,
						"amperaje"=>$this->amperaje,
						"corriente"=>$this->corriente,
						"imagen"=>$this->imagen_fuentepoder,		
						"rutaActual"=>$this->rutaActual		
						);
		$respuesta = ControllerFuentePoder::ctrActualizarFuentePoder($datos);
		echo $respuesta;
	}
	public function eliminarFuentePoder(){
		$id_fuentepoder = $this->id_fuentepoder;
		$ruta = $this->imagen_fuentepoder;
		$respuesta = ControllerFuentePoder::ctrEliminarFuentePoder($id_fuentepoder,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertarfuentepoder") {
	$crearNuevoFuentePoder = new ajaxFuentePoder();
	$crearNuevoFuentePoder -> marca = $_POST["Marca"];
	$crearNuevoFuentePoder -> amperaje = $_POST["Amperaje"];
	$crearNuevoFuentePoder -> corriente = $_POST["Corriente"];
    $crearNuevoFuentePoder -> imagen_fuentepoder = $_FILES["imagenFuentePoder"];
	$crearNuevoFuentePoder ->crearFuentePoder();
}

if ($tipoOperacion == "editarFuentePoder") {
	$editarFuentePoder = new ajaxFuentePoder();
	$editarFuentePoder -> id_fuentepoder = $_POST["id_fuentepoder"];
	$editarFuentePoder -> editarFuentePoder();
}
if ($tipoOperacion == "actualizarFuentePoder") {
	$actualizarFuentePoder = new ajaxFuentePoder();
	$actualizarFuentePoder -> id_fuentepoder = $_POST["id_fuentepoder"];
	$actualizarFuentePoder -> marca = $_POST["Marca"];
	$actualizarFuentePoder -> amperaje = $_POST["Amperaje"];
	$actualizarFuentePoder -> corriente = $_POST["Corriente"];
	$actualizarFuentePoder -> imagen_fuentepoder = $_FILES["imagenFuentePoder"];
	$actualizarFuentePoder -> rutaActual = $_POST["rutaActual"];
	$actualizarFuentePoder -> actualizarFuentePoder();
}
if ($tipoOperacion == "eliminarFuentePoder") {
	$eliminarFuentePoder = new ajaxFuentePoder();
	$eliminarFuentePoder -> id_fuentepoder = $_POST["id_fuentepoder"];
	$eliminarFuentePoder -> imagen_fuentepoder = $_POST["rutaImagen"];
	$eliminarFuentePoder -> eliminarFuentePoder();
}

?>