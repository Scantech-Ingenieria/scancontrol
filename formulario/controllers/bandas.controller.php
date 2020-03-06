<?php

Class ControllerBanda {


	public function listarBandaCtr() {
		$tabla = "bandas";
		$respuesta = ModeloBanda::listarBandaMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearBanda($datos) {
		$tabla = "bandas";

		$respuesta = ModeloBanda::mdlCrearBanda($tabla, $datos);

		return $respuesta;

	}

	static public function ctrEliminarBanda($id_banda) {

		$tabla = "bandas";

$respuesta = ModeloBanda::mdlEliminarBanda($tabla, $id_banda);


		return $respuesta;

	}

	static public function ctrEditarBanda($id_banda) {

		$tabla = "bandas";
		$respuesta = ModeloBanda::mdlEditarBanda($tabla, $id_banda);


		return $respuesta;
	}

	static public function ctrActualizarBanda($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "bandas";
		

		$respuesta = ModeloBanda::mdlActualizarBanda($tabla, $datos);

		return $respuesta;

	}
}


?>