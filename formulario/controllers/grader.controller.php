<?php
error_reporting(0);

Class ControllerGrader {
	public function listarGraderCtr() {
		$tabla = "unidades_balanza";
		$respuesta = ModeloGrader::listarGraderMdl($tabla);
		return $respuesta;
	}

	static public function ctrEliminarGrader($id_grader) {
		$tabla = "unidades_balanza";
$respuesta = ModeloGrader::mdlEliminarGrader($tabla, $id_grader);
		return $respuesta;
	}
	static public function ctrEditarGrader($id_grader) {
		$tabla = "unidades_balanza";
		$respuesta = ModeloGrader::mdlEditarGrader($tabla, $id_grader);
		return $respuesta;
	}
	static public function ctrActualizarGrader($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "unidades_balanza";
		$respuesta = ModeloGrader::mdlActualizarGrader($tabla, $datos);
		return $respuesta;
	}
}


?>