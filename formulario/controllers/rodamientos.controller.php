<?php
Class ControllerRodamientos {
	public function listarRodamientosCtr() {
		$tabla = "rodamientos";
		$respuesta = ModeloRodamientos::listarRodamientosMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearRodamientos($datos) {
		$tabla = "rodamientos";
		$respuesta = ModeloRodamientos::mdlCrearRodamientos($tabla, $datos);
		return $respuesta;
	}
	static public function ctrEliminarRodamientos($id_rodamientos) {
		$tabla = "rodamientos";
$respuesta = ModeloRodamientos::mdlEliminarRodamientos($tabla, $id_rodamientos);
		return $respuesta;
	}
	static public function ctrEditarRodamientos($id_rodamientos) {
		$tabla = "rodamientos";
		$respuesta = ModeloRodamientos::mdlEditarRodamientos($tabla, $id_rodamientos);
		return $respuesta;
	}
	static public function ctrActualizarRodamientos($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "rodamientos";
		$respuesta = ModeloRodamientos::mdlActualizarRodamientos($tabla, $datos);
		return $respuesta;
	}
}


?>