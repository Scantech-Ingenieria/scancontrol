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
						"distancia"=>$this->distancia,
						"contacto"=>$this->contacto,
						"imagen"=>$this->imagen_sensor
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
						"distancia"=>$respuesta["distancia"],
						"contacto"=>$respuesta["contacto"],
				        "imagen"=>substr($respuesta["rutaImg"], 3)
						);
		echo json_encode($datos);
	}
	public function actualizarSensor(){
		$datos = array( "id_sensor"=>$this->id_sensor,
						"tipo"=>$this->tipo,
						"marca"=>$this->marca,
						"modelo"=>$this->modelo,
						"voltaje"=>$this->voltaje,
						"distancia"=>$this->distancia,
						"contacto"=>$this->contacto,
						"imagen"=>$this->imagen_sensor,
						"rutaActual"=>$this->rutaActual		
						);
		$respuesta = ControllerSensor::ctrActualizarSensor($datos);
		echo $respuesta;
	}
	public function eliminarSensor(){
		$id_sensor = $this->id_sensor;
		$ruta = $this->imagen_sensor;
		$respuesta = ControllerSensor::ctrEliminarSensor($id_sensor,$ruta);
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
	$crearNuevoSensor -> contacto = $_POST["Contacto"];
    $crearNuevoSensor -> imagen_sensor = $_FILES["imagenSensor"];
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
	$actualizarSensor -> contacto = $_POST["Contacto"];
 	$actualizarSensor -> imagen_sensor = $_FILES["imagenSensor"];
	$actualizarSensor -> rutaActual = $_POST["rutaActual"];
	$actualizarSensor -> actualizarSensor();
}
if ($tipoOperacion == "eliminarSensor") {
	$eliminarSensor = new ajaxSensor();
	$eliminarSensor -> id_sensor = $_POST["id_sensor"];
	$eliminarSensor -> imagen_sensor = $_POST["rutaImagen"];
	$eliminarSensor -> eliminarSensor();
}

?>