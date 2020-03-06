<?php

require_once "../controllers/vdf.controller.php";
require_once "../models/vdf.modelo.php";

Class ajaxVdf {


	public function crearVdf(){
		$datos = array(
						
						"potencia"=>$this->potencia,
					
						"marca"=>$this->marca
				

					);

		$respuesta = ControllerVdf::ctrCrearVdf($datos);

		echo $respuesta;
	}
	public function editarVdf(){
		$id_vdf = $this->id_vdf;

		$respuesta = ControllerVdf::ctrEditarVdf($id_vdf);

		$datos = array("id_vdf"=>$respuesta["id_vdf"],
					
						"potencia"=>$respuesta["potencia"],
					
						"marca"=>$respuesta["marca"]

				



						);

		echo json_encode($datos);

	}
	public function actualizarVdf(){
		$datos = array( "id_vdf"=>$this->id_vdf,
						"potencia"=>$this->potencia,
						"marca"=>$this->marca
						
				
						);

		$respuesta = ControllerVdf::ctrActualizarVdf($datos);

		echo $respuesta;
	}
	public function eliminarVdf(){
		$id_vdf = $this->id_vdf;


		$respuesta = ControllerVdf::ctrEliminarVdf($id_vdf);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarvdf") {
	$crearNuevoVdf = new ajaxVdf();


	$crearNuevoVdf -> potencia = $_POST["Potencia"];

	$crearNuevoVdf -> marca = $_POST["Marca"];






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

	


	$actualizarVdf -> actualizarVdf();
}
if ($tipoOperacion == "eliminarVdf") {
	$eliminarVdf = new ajaxVdf();
	$eliminarVdf -> id_vdf = $_POST["id_vdf"];
	$eliminarVdf -> eliminarVdf();
}

?>