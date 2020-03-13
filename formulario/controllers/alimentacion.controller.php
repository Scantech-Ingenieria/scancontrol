<?php
Class ControllerAlimentacion {
	public function listarAlimentacionCtr() {
		$tabla = "unidad_alim";
		$respuesta = ModeloAlimentacion::listarAlimentacionMdl($tabla);
		return $respuesta;
	}
	public function listarAlimentacionRegistroCtr() {
		$tabla = "unidad_alim";
		$respuesta = ModeloAlimentacion::listarAlimentacionRegistroMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearAlimentacion($datos) {
		$tabla = "unidad_alim";
		$respuesta = ModeloAlimentacion::mdlCrearAlimentacion($tabla, $datos);
		return $respuesta;
	}

	static public function ctrEliminarAlimentacion($id_alimentacion) {
		$tabla = "unidad_alim";
$respuesta = ModeloAlimentacion::mdlEliminarAlimentacion($tabla, $id_alimentacion);
		return $respuesta;
	}
	static public function ctrEditarAlimentacion($id_alimentacion) {
		$tabla = "unidad_alim";
		$respuesta = ModeloAlimentacion::mdlEditarAlimentacion($tabla, $id_alimentacion);
		return $respuesta;
	}
	static public function ctrActualizarAlimentacion($datos) {
		$tabla = "unidad_alim";
		$respuesta = ModeloAlimentacion::mdlActualizarAlimentacion($tabla, $datos);
		return $respuesta;
	}
}

?>