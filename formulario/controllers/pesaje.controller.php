<?php
Class ControllerPesaje {
public function listarPesajeCtr() {
		$tabla = "unidad_pesaje";
		$respuesta = ModeloPesaje::listarPesajeMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearPesaje($datos) {
		$tabla = "unidad_pesaje";
		$respuesta = ModeloPesaje::mdlCrearPesaje($tabla, $datos);
		return $respuesta;
	}
	static public function ctrEliminarPesaje($id_pesaje) {
		$tabla = "unidad_pesaje";
$respuesta = ModeloPesaje::mdlEliminarPesaje($tabla, $id_pesaje);
		return $respuesta;
	}
	static public function ctrEditarPesaje($id_pesaje) {
		$tabla = "unidad_pesaje";
		$respuesta = ModeloPesaje::mdlEditarPesaje($tabla, $id_pesaje);
		return $respuesta;
	}
	static public function ctrActualizarPesaje($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "unidad_pesaje";
		$respuesta = ModeloPesaje::mdlActualizarPesaje($tabla, $datos);
return $respuesta;

	}
}


?>