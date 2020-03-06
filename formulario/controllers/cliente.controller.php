<?php

Class ControllerCliente {

	public function listarClienteCtr() {
		$cliente = "clientes";
		$respuesta = ModeloCliente::listarClienteMdl($cliente);

		return $respuesta;
	}

	static public function ctrCrearCliente($datos) {
		$cliente = "clientes";

		$respuesta = ModeloCliente::mdlCrearCliente($cliente, $datos);

		return $respuesta;

	}

	static public function ctrEliminarCliente($id_cliente) {

		$cliente = "clientes";

$respuesta = ModeloCliente::mdlEliminarCliente($cliente, $id_cliente);


		return $respuesta;

	}

	static public function ctrEditarCliente($id_cliente) {

		$cliente = "clientes";
		$respuesta = ModeloCliente::mdlEditarCliente($cliente, $id_cliente);


		return $respuesta;
	}

	static public function ctrActualizarCliente($datos) {
		//Validamos si no viene imagen para actualizar solo la cliente
		$cliente = "clientes";
		

		$respuesta = ModeloCliente::mdlActualizarCliente($cliente, $datos);

		return $respuesta;

	}
}


?>