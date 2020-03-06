<?php

require_once "../controllers/registros.controller.php";
require_once "../models/registros.modelo.php";

Class ajaxRegistros {

	public $id_slider;
		public $imagen_slider;
	public $rutaActual;

	public function crearRegistros(){
		$datos = array(
						
						"balanza"=>$this->balanza,
						"alimentacion"=>$this->alimentacion,
						"aceleracion"=>$this->aceleracion,
						"descarga"=>$this->descarga
			



					);

		$respuesta = Controllerregistros::ctrCrearRegistros($datos);

		echo $respuesta;
	}
	public function editarRegistros(){
		$id_registros = $this->id_registros;

		$respuesta = Controllerregistros::ctrEditarRegistros($id_registros);

		$datos = array("id_registros"=>$respuesta["id"],
					
						"ip"=>$respuesta["address"],
						"cliente"=>$respuesta["cliente"],
						"descripcion"=>$respuesta["descripcion"],
				        "ubicacion"=>$respuesta["ubicacion"]


						);

		echo json_encode($datos);

	}
	public function actualizarRegistros(){
		$datos = array( "id_registros"=>$this->id_registros,
						"tituloregistros"=>$this->tituloregistros,
						"Clienteregistros"=>$this->Clienteregistros,
						"Ubicacionregistros"=>$this->Ubicacionregistros,
						"Descripcionregistros"=>$this->Descripcionregistros
				
						);

		$respuesta = Controllerregistros::ctrActualizarRegistros($datos);

		echo $respuesta;
	}
	public function eliminarRegistros(){
		$id_registros = $this->id_registros;


		$respuesta = Controllerregistros::ctrEliminarRegistros($id_registros);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarregistros") {
	$crearNuevoRegistros = new ajaxRegistros();


	$crearNuevoRegistros -> balanza = $_POST["Balanza"];
	$crearNuevoRegistros -> alimentacion = $_POST["Alimentación"];
	$crearNuevoRegistros -> aceleracion = $_POST["Aceleracion"];
	$crearNuevoRegistros -> descarga = $_POST["Descarga"];
	



	$crearNuevoRegistros ->crearRegistros();
}

if ($tipoOperacion == "editarRegistros") {
	$editarRegistros = new ajaxRegistros();
	$editarRegistros -> id_registros = $_POST["id_registros"];
	$editarRegistros -> editarRegistros();
}
if ($tipoOperacion == "actualizarRegistros") {
	$actualizarRegistros = new ajaxRegistros();
	$actualizarRegistros -> id_registros = $_POST["id_registros"];
	$actualizarRegistros -> tituloregistros = $_POST["tituloregistros"];
	$actualizarRegistros -> Clienteregistros = $_POST["Clienteregistros"];
	$actualizarRegistros -> Descripcionregistros = $_POST["Descripcionregistros"];
	$actualizarRegistros -> Ubicacionregistros = $_POST["Ubicacionregistros"];


	$actualizarRegistros -> actualizarRegistros();
}
if ($tipoOperacion == "eliminarRegistros") {
	$eliminarRegistros = new ajaxRegistros();
	$eliminarRegistros -> id_registros = $_POST["id_registros"];
	$eliminarRegistros -> eliminarRegistros();
}

?>