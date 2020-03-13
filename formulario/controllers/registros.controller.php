<?php
Class Controllerregistros {
	public function listarCliCtr() {
		$registros = "clientes";
		$respuesta = Modeloregistros::listarCliMdl($registros);
		return $respuesta;
	}
	public function listarregistrosCtr() {
		$registros = "unidades_balanza";
		$respuesta = Modeloregistros::listarregistrosMdl($registros);
		return $respuesta;
	}
	static public function ctrCrearRegistros($datos) {
		$registros = "unidades_balanza";
		$respuesta = Modeloregistros::mdlCrearregistros($registros, $datos);
		return $respuesta;
	}

	static public function ctrEliminarregistros($id_registros) {
		$registros = "unidades_balanza";
$respuesta = Modeloregistros::mdlEliminarregistros($registros, $id_registros);
		return $respuesta;
	}
	static public function ctrEditarregistros($id_registros) {
		$registros = "unidades_balanza";
		$respuesta = Modeloregistros::mdlEditarregistros($registros, $id_registros);
		return $respuesta;
	}
	static public function ctrActualizarregistros($datos) {
		//Validamos si no viene imagen para actualizar solo la registros
		$registros = "unidades_balanza";
		$respuesta = Modeloregistros::mdlActualizarregistros($registros, $datos);
		return $respuesta;
	}
}
?>