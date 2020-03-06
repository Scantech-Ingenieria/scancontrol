<?php

Class Controllertabla {




	public function listarCliCtr() {
		$tabla = "clientes";
		$respuesta = Modelotabla::listarCliMdl($tabla);

		return $respuesta;
	}



	public function listartablaCtr() {
		$tabla = "balanzas";
		$respuesta = Modelotabla::listartablaMdl($tabla);

		return $respuesta;
	}

	static public function ctrCreartabla($datos) {
		$tabla = "balanzas";

		$respuesta = Modelotabla::mdlCreartabla($tabla, $datos);

		return $respuesta;

	}

	static public function ctrEliminartabla($id_tabla) {

		$tabla = "balanzas";

$respuesta = Modelotabla::mdlEliminartabla($tabla, $id_tabla);


		return $respuesta;

	}

	static public function ctrEditartabla($id_tabla) {

		$tabla = "balanzas";
		$respuesta = Modelotabla::mdlEditartabla($tabla, $id_tabla);


		return $respuesta;
	}

	static public function ctrActualizartabla($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "balanzas";
		

		$respuesta = Modelotabla::mdlActualizartabla($tabla, $datos);

		return $respuesta;

	}
}


?>