<?php
Class ControllerAceleracion {
	public function listarAceleracionCtr() {
		$tabla = "unidad_acel";
		$respuesta = ModeloAceleracion::listarAceleracionMdl($tabla);
		return $respuesta;
	}
	public function listarAceleracionRegistroCtr() {
		$tabla = "unidad_acel";
		$respuesta = ModeloAceleracion::listarAceleracionRegistroMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearAceleracion($datos) {
		$tabla = "unidad_acel";
		$respuesta = ModeloAceleracion::mdlCrearAceleracion($tabla, $datos);
		return $respuesta;
	}
	static public function ctrEliminarAceleracion($id_aceleracion) {
		$tabla = "unidad_acel";
$respuesta = ModeloAceleracion::mdlEliminarAceleracion($tabla, $id_aceleracion);
		return $respuesta;
	}
	static public function ctrEditarAceleracion($id_aceleracion) {
		$tabla = "unidad_acel";
		$respuesta = ModeloAceleracion::mdlEditarAceleracion($tabla, $id_aceleracion);
		return $respuesta;
	}
	static public function ctrActualizarAceleracion($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "unidad_acel";
		$respuesta = ModeloAceleracion::mdlActualizarAceleracion($tabla, $datos);
		return $respuesta;
	}
}


?>