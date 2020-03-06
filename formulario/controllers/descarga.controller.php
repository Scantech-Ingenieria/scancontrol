<?php

Class ControllerDescarga {

	public function listarDescargaCtr() {
		$tabla = "unidad_descarga";
		$respuesta = ModeloDescarga::listarDescargaMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearDescarga($datos) {
		$tabla = "unidad_descarga";

		$respuesta = ModeloDescarga::mdlCrearDescarga($tabla, $datos);

		return $respuesta;

	}

	static public function ctrEliminarDescarga($id_descarga) {

		$tabla = "unidad_descarga";

$respuesta = ModeloDescarga::mdlEliminarDescarga($tabla, $id_descarga);


		return $respuesta;

	}

	static public function ctrEditarDescarga($id_descarga) {

		$tabla = "unidad_descarga";
		$respuesta = ModeloDescarga::mdlEditarDescarga($tabla, $id_descarga);


		return $respuesta;
	}

	static public function ctrActualizarDescarga($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "unidad_descarga";
		

		$respuesta = ModeloDescarga::mdlActualizarDescarga($tabla, $datos);

		return $respuesta;

	}
}


?>