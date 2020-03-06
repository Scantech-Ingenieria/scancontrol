<?php

Class ControllerVdf {



	public function listarVdfCtr() {
		$tabla = "variador_frecuencia";
		$respuesta = ModeloVdf::listarVdfMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearVdf($datos) {
		$tabla = "variador_frecuencia";

		$respuesta = ModeloVdf::mdlCrearVdf($tabla, $datos);

		return $respuesta;

	}

	static public function ctrEliminarVdf($id_vdf) {

		$tabla = "variador_frecuencia";

$respuesta = ModeloVdf::mdlEliminarVdf($tabla, $id_vdf);


		return $respuesta;

	}

	static public function ctrEditarVdf($id_vdf) {

		$tabla = "variador_frecuencia";
		$respuesta = ModeloVdf::mdlEditarVdf($tabla, $id_vdf);


		return $respuesta;
	}

	static public function ctrActualizarVdf($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "variador_frecuencia";
		

		$respuesta = ModeloVdf::mdlActualizarVdf($tabla, $datos);

		return $respuesta;

	}
}


?>