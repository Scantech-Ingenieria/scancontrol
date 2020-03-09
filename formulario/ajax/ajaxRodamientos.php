<?php
require_once "../controllers/rodamientos.controller.php";
require_once "../models/rodamientos.modelo.php";

Class ajaxRodamientos {
	public function crearRodamientos(){
		$datos = array(				
						"modelo"=>$this->modelo
					);
		$respuesta = ControllerRodamientos::ctrCrearRodamientos($datos);
		echo $respuesta;
	}
	public function editarRodamientos(){
		$id_rodamientos = $this->id_rodamientos;
		$respuesta = ControllerRodamientos::ctrEditarRodamientos($id_rodamientos);
		$datos = array("id_rodamientos"=>$respuesta["id_rodamientos"],	
						"modelo"=>$respuesta["modelo"],
						);
		echo json_encode($datos);
	}
	public function actualizarRodamientos(){
		$datos = array( "id_rodamientos"=>$this->id_rodamientos,
						"modelo"=>$this->modelo	
						);
		$respuesta = ControllerRodamientos::ctrActualizarRodamientos($datos);
		echo $respuesta;
	}
	public function eliminarRodamientos(){
		$id_rodamientos = $this->id_rodamientos;
		$respuesta = ControllerRodamientos::ctrEliminarRodamientos($id_rodamientos);
		echo $respuesta;
	}
}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarrodamientos") {
	$crearNuevoRodamientos = new ajaxRodamientos();
	$crearNuevoRodamientos -> modelo = $_POST["Modelo"];
	$crearNuevoRodamientos ->crearRodamientos();
}

if ($tipoOperacion == "editarRodamientos") {
	$editarRodamientos = new ajaxRodamientos();
	$editarRodamientos -> id_rodamientos = $_POST["id_rodamientos"];
	$editarRodamientos -> editarRodamientos();
}
if ($tipoOperacion == "actualizarRodamientos") {
	$actualizarRodamientos = new ajaxRodamientos();
	$actualizarRodamientos -> id_rodamientos = $_POST["id_rodamientos"];
	$actualizarRodamientos -> modelo = $_POST["Modelo"];


	$actualizarRodamientos -> actualizarRodamientos();
}
if ($tipoOperacion == "eliminarRodamientos") {
	$eliminarRodamientos = new ajaxRodamientos();
	$eliminarRodamientos -> id_rodamientos = $_POST["id_rodamientos"];
	$eliminarRodamientos -> eliminarRodamientos();
}

?>