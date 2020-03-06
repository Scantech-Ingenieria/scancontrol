<?php

Class ControllerAutomatico {



	public function listarAutomaticoCtr() {
		$tabla = "automatico";
		$respuesta = ModeloAutomatico::listarAutomaticoMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearAutomatico($datos) {
		$tabla = "automatico";

		$respuesta = ModeloAutomatico::mdlCrearAutomatico($tabla, $datos);

		return $respuesta;

	}

	static public function ctrEliminarAutomatico($id_automatico) {

		$tabla = "automatico";

$respuesta = ModeloAutomatico::mdlEliminarAutomatico($tabla, $id_automatico);


		return $respuesta;

	}

	static public function ctrEditarAutomatico($id_automatico) {

		$tabla = "automatico";
		$respuesta = ModeloAutomatico::mdlEditarAutomatico($tabla, $id_automatico);


		return $respuesta;
	}

	static public function ctrActualizarAutomatico($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "automatico";
		

		$respuesta = ModeloAutomatico::mdlActualizarAutomatico($tabla, $datos);

		return $respuesta;

	}
}


?>