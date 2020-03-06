<?php

require_once "../controllers/cliente.controller.php";
require_once "../models/cliente.modelo.php";

Class ajaxCliente {


	public function crearCliente(){
		$datos = array(
						
						"nombre"=>$this->nombre,
	

					);

		$respuesta = ControllerCliente::ctrCrearCliente($datos);

		echo $respuesta;
	}
	public function editarCliente(){
		$id_cliente = $this->id_cliente;

		$respuesta = ControllerCliente::ctrEditarCliente($id_cliente);

		$datos = array("id_cliente"=>$respuesta["id_cliente"],
						"cliente"=>$respuesta["nombre_cliente"]
				
				


						);

		echo json_encode($datos);

	}
	public function actualizarCliente(){
		$datos = array( "id_cliente"=>$this->id_cliente,
						"nombrecliente"=>$this->nombrecliente
			
				

			
						);

		$respuesta = ControllerCliente::ctrActualizarCliente($datos);

		echo $respuesta;
	}
	public function eliminarCliente(){
		$id_cliente = $this->id_cliente;


		$respuesta = ControllerCliente::ctrEliminarCliente($id_cliente);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarCliente") {
	$crearNuevoCliente = new ajaxCliente();
	$crearNuevoCliente -> nombre = $_POST["nombrecliente"];
	$crearNuevoCliente ->crearCliente();
}

if ($tipoOperacion == "editarCliente") {
	$editarCliente = new ajaxCliente();
	$editarCliente -> id_cliente = $_POST["id_cliente"];
	$editarCliente -> editarCliente();
}
if ($tipoOperacion == "actualizarCliente") {
	$actualizarCliente = new ajaxCliente();
	$actualizarCliente -> id_cliente = $_POST["id_cliente"];
	$actualizarCliente -> nombrecliente = $_POST["nombrecliente"];


	$actualizarCliente -> actualizarCliente();
}
if ($tipoOperacion == "eliminarCliente") {
	$eliminarCliente = new ajaxCliente();
	$eliminarCliente -> id_cliente = $_POST["id_cliente"];
	$eliminarCliente -> eliminarCliente();
}

?>