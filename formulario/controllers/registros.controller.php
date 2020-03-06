<?php

Class Controllerregistros {




	public function listarCliCtr() {
		$registros = "clientes";
		$respuesta = Modeloregistros::listarCliMdl($registros);

		return $respuesta;
	}



	public function listarregistrosCtr() {
		$registros = "balanzas";
		$respuesta = Modeloregistros::listarregistrosMdl($registros);

		return $respuesta;
	}

	static public function ctrCrearregistros($datos) {
		$registros = "balanzas";

		$respuesta = Modeloregistros::mdlCrearregistros($registros, $datos);

		return $respuesta;

	}

	static public function ctrEliminarregistros($id_registros) {

		$registros = "balanzas";

$respuesta = Modeloregistros::mdlEliminarregistros($registros, $id_registros);


		return $respuesta;

	}

	static public function ctrEditarregistros($id_registros) {

		$registros = "balanzas";
		$respuesta = Modeloregistros::mdlEditarregistros($registros, $id_registros);


		return $respuesta;
	}

	static public function ctrActualizarregistros($datos) {
		//Validamos si no viene imagen para actualizar solo la registros
		$registros = "balanzas";
		

		$respuesta = Modeloregistros::mdlActualizarregistros($registros, $datos);

		return $respuesta;

	}
}


?>