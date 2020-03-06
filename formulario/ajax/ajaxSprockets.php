<?php

require_once "../controllers/sprockets.controller.php";
require_once "../models/sprockets.modelo.php";

Class ajaxSprockets {


	public function crearSprockets(){
		$datos = array(
						
						"numeroserie"=>$this->numeroserie,
		
					
						"modelo"=>$this->modelo,
						"descripcion"=>$this->descripcion




					);

		$respuesta = ControllerSprockets::ctrCrearSprockets($datos);

		echo $respuesta;
	}
	public function editarSprockets(){
		$id_sprockets = $this->id_sprockets;

		$respuesta = ControllerSprockets::ctrEditarSprockets($id_sprockets);

		$datos = array("id_sprockets"=>$respuesta["id_sprockets"],
					
						"serie"=>$respuesta["serie"],
					
						"modelo"=>$respuesta["modelo"],

						"descripcion"=>$respuesta["descripcion"]

				



						);

		echo json_encode($datos);

	}
	public function actualizarSprockets(){
		$datos = array( "id_sprockets"=>$this->id_sprockets,
						"numeroserie"=>$this->numeroserie,
						"modelo"=>$this->modelo,
						"descripcion"=>$this->descripcion
						
				
						);

		$respuesta = ControllerSprockets::ctrActualizarSprockets($datos);

		echo $respuesta;
	}
	public function eliminarSprockets(){
		$id_sprockets = $this->id_sprockets;


		$respuesta = ControllerSprockets::ctrEliminarSprockets($id_sprockets);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarsprockets") {
	$crearNuevoSprockets = new ajaxSprockets();


	$crearNuevoSprockets -> numeroserie = $_POST["NumeroSerie"];

	$crearNuevoSprockets -> modelo = $_POST["Modelo"];
	$crearNuevoSprockets -> descripcion = $_POST["DescripcionSprockets"];





	$crearNuevoSprockets ->crearSprockets();
}

if ($tipoOperacion == "editarSprockets") {
	$editarSprockets = new ajaxSprockets();
	$editarSprockets -> id_sprockets = $_POST["id_sprockets"];
	$editarSprockets -> editarSprockets();
}
if ($tipoOperacion == "actualizarSprockets") {
	$actualizarSprockets = new ajaxSprockets();
	$actualizarSprockets -> id_sprockets = $_POST["id_sprockets"];
	$actualizarSprockets -> numeroserie = $_POST["NumeroSerie"];
	$actualizarSprockets -> modelo = $_POST["Modelo"];
	$actualizarSprockets -> descripcion = $_POST["DescripcionSprockets"];
	


	$actualizarSprockets -> actualizarSprockets();
}
if ($tipoOperacion == "eliminarSprockets") {
	$eliminarSprockets = new ajaxSprockets();
	$eliminarSprockets -> id_sprockets = $_POST["id_sprockets"];
	$eliminarSprockets -> eliminarSprockets();
}

?>