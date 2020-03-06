<?php

Class ControllerSprockets {



	public function listarSprocketsCtr() {
		$tabla = "sprockets";
		$respuesta = ModeloSprockets::listarSprocketsMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearSprockets($datos) {
		$tabla = "sprockets";

		$respuesta = ModeloSprockets::mdlCrearSprockets($tabla, $datos);

		return $respuesta;

	}

	static public function ctrEliminarSprockets($id_sprockets) {

		$tabla = "sprockets";

$respuesta = ModeloSprockets::mdlEliminarSprockets($tabla, $id_sprockets);


		return $respuesta;

	}

	static public function ctrEditarSprockets($id_sprockets) {

		$tabla = "sprockets";
		$respuesta = ModeloSprockets::mdlEditarSprockets($tabla, $id_sprockets);


		return $respuesta;
	}

	static public function ctrActualizarSprockets($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "sprockets";
		

		$respuesta = ModeloSprockets::mdlActualizarSprockets($tabla, $datos);

		return $respuesta;

	}
}


?>