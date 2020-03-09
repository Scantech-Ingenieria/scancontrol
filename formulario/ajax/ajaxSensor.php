<?php
require_once "../controllers/sensor.controller.php";
require_once "../models/sensor.modelo.php";

Class ajaxSensor {
	public function crearSensor(){
		$datos = array(				
						"tipo"=>$this->tipo,
						"modelo"=>$this->modelo

					);
		$respuesta = ControllerSensor::ctrCrearSensor($datos);
		echo $respuesta;
	}
	public function editarSensor(){
		$id_sensor = $this->id_sensor;
		$respuesta = ControllerSensor::ctrEditarSensor($id_sensor);
		$datos = array("id_sensor"=>$respuesta["id_sensor"],
						"tipo"=>$respuesta["tipo_sensor"],

						"modelo"=>$respuesta["modelo"]
						);
		echo json_encode($datos);
	}
	public function actualizarSensor(){
		$datos = array( "id_sensor"=>$this->id_sensor,
						"tipo"=>$this->tipo,
						"modelo"=>$this->modelo	

						);
		$respuesta = ControllerSensor::ctrActualizarSensor($datos);
		echo $respuesta;
	}
	public function eliminarSensor(){
		$id_sensor = $this->id_sensor;
		$respuesta = ControllerSensor::ctrEliminarSensor($id_sensor);
		echo $respuesta;
	}
}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarsensor") {
	$crearNuevoSensor = new ajaxSensor();
	$crearNuevoSensor -> modelo = $_POST["Modelo"];
	$crearNuevoSensor -> tipo = $_POST["TipoSensor"];

	$crearNuevoSensor ->crearSensor();
}

if ($tipoOperacion == "editarSensor") {
	$editarSensor = new ajaxSensor();
	$editarSensor -> id_sensor = $_POST["id_sensor"];
	$editarSensor -> editarSensor();
}
if ($tipoOperacion == "actualizarSensor") {
	$actualizarSensor = new ajaxSensor();
	$actualizarSensor -> id_sensor = $_POST["id_sensor"];
	$actualizarSensor -> tipo = $_POST["TipoSensor"];

	$actualizarSensor -> modelo = $_POST["Modelo"];


	$actualizarSensor -> actualizarSensor();
}
if ($tipoOperacion == "eliminarSensor") {
	$eliminarSensor = new ajaxSensor();
	$eliminarSensor -> id_sensor = $_POST["id_sensor"];
	$eliminarSensor -> eliminarSensor();
}

?>