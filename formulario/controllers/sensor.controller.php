<?php
Class ControllerSensor {
	public function listarSensorCtr() {
		$tabla = "sensor";
		$respuesta = ModeloSensor::listarSensorMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearSensor($datos) {
		$tabla = "sensor";
		$respuesta = ModeloSensor::mdlCrearSensor($tabla, $datos);
		return $respuesta;
	}
	static public function ctrEliminarSensor($id_sensor) {
		$tabla = "sensor";
$respuesta = ModeloSensor::mdlEliminarSensor($tabla, $id_sensor);
		return $respuesta;
	}
	static public function ctrEditarSensor($id_sensor) {
		$tabla = "sensor";
		$respuesta = ModeloSensor::mdlEditarSensor($tabla, $id_sensor);
		return $respuesta;
	}
	static public function ctrActualizarSensor($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "sensor";
		$respuesta = ModeloSensor::mdlActualizarSensor($tabla, $datos);
		return $respuesta;
	}
}


?>