<?php
require_once "../controllers/sensor.controller.php";
require_once "../models/sensor.modelo.php";

Class ajaxSensor {
	public function crearSensor(){
		$datos = array(				
						"tipo"=>$this->tipo,
						"marca"=>$this->marca,
						"modelo"=>$this->modelo,
						"voltaje"=>$this->voltaje,
						"distancia"=>$this->distancia
					);
		$respuesta = ControllerSensor::ctrCrearSensor($datos);
		echo $respuesta;
	}
	public function editarSensor(){
		$id_sensor = $this->id_sensor;
		$respuesta = ControllerSensor::ctrEditarSensor($id_sensor);
		$datos = array("id_sensor"=>$respuesta["id_sensor"],
						"tipo"=>$respuesta["tipo_sensor"],
						"marca"=>$respuesta["marca"],
						"modelo"=>$respuesta["modelo"],
						"voltaje"=>$respuesta["voltaje"],
						"distancia"=>$respuesta["distancia"]



						);
		echo json_encode($datos);
	}
	public function actualizarSensor(){
		$datos = array( "id_sensor"=>$this->id_sensor,
						"tipo"=>$this->tipo,
						"marca"=>$this->marca,
						"modelo"=>$this->modelo,
						"voltaje"=>$this->voltaje,
						"distancia"=>$this->distancia
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
	$crearNuevoSensor -> marca = $_POST["Marca"];
	$crearNuevoSensor -> distancia = $_POST["Distancia"];
	$crearNuevoSensor -> voltaje = $_POST["Voltaje"];
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
	$actualizarSensor -> marca = $_POST["Marca"];
	$actualizarSensor -> modelo = $_POST["Modelo"];
	$actualizarSensor -> distancia = $_POST["Distancia"];
	$actualizarSensor -> voltaje = $_POST["Voltaje"];
	$actualizarSensor -> actualizarSensor();
}
if ($tipoOperacion == "eliminarSensor") {
	$eliminarSensor = new ajaxSensor();
	$eliminarSensor -> id_sensor = $_POST["id_sensor"];
	$eliminarSensor -> eliminarSensor();
}

?>