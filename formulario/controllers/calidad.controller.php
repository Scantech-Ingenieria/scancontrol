<?php
Class ControllerCalidad {
	public function listarCalidadCtr() {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::listarCalidadMdl($tabla);
		return $respuesta;
	}
		public function listarCalidadRegistroCtr() {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::listarCalidadRegistroMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearCalidad($datos) {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::mdlCrearCalidad($tabla, $datos);
		return $respuesta;
	}
	static public function ctrEliminarCalidad($id_calidad) {
		$tabla = "estacion_calidad";
$respuesta = ModeloCalidad::mdlEliminarCalidad($tabla, $id_calidad);
		return $respuesta;
	}
	static public function ctrEditarCalidad($id_calidad) {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::mdlEditarCalidad($tabla, $id_calidad);
		return $respuesta;
	}
	static public function ctrActualizarCalidad($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::mdlActualizarCalidad($tabla, $datos);
		return $respuesta;
	}
}
?>