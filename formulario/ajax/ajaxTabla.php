<?php

require_once "../controllers/balanzas.controller.php";
require_once "../models/balanzas.modelo.php";

Class ajaxTabla {

	public $id_slider;
		public $imagen_slider;
	public $rutaActual;

	public function crearTabla(){
		$datos = array(
						
						"nombre"=>$this->nombre,
						"cliente"=>$this->cliente,
						"descripcion"=>$this->descripcion,
						"ubicacion"=>$this->ubicacion,
						"estado"=>$this->estado,
						"fecha"=>$this->fecha



					);

		$respuesta = Controllertabla::ctrCrearTabla($datos);

		echo $respuesta;
	}
	public function editarTabla(){
		$id_tabla = $this->id_tabla;

		$respuesta = Controllertabla::ctrEditarTabla($id_tabla);

		$datos = array("id_tabla"=>$respuesta["id"],
					
						"ip"=>$respuesta["address"],
						"cliente"=>$respuesta["cliente"],
						"descripcion"=>$respuesta["descripcion"],
				        "ubicacion"=>$respuesta["ubicacion"]


						);

		echo json_encode($datos);

	}
	public function actualizarTabla(){
		$datos = array( "id_tabla"=>$this->id_tabla,
						"titulotabla"=>$this->titulotabla,
						"Clientetabla"=>$this->Clientetabla,
						"Ubicaciontabla"=>$this->Ubicaciontabla,
						"Descripciontabla"=>$this->Descripciontabla
				
						);

		$respuesta = Controllertabla::ctrActualizarTabla($datos);

		echo $respuesta;
	}
	public function eliminarTabla(){
		$id_tabla = $this->id_tabla;


		$respuesta = Controllertabla::ctrEliminarTabla($id_tabla);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertartabla") {
	$crearNuevoTabla = new ajaxTabla();


	$crearNuevoTabla -> nombre = $_POST["Nombretabla"];
	$crearNuevoTabla -> cliente = $_POST["Clientetabla"];
	$crearNuevoTabla -> descripcion = $_POST["Descripciontabla"];
	$crearNuevoTabla -> ubicacion = $_POST["Ubicaciontabla"];
	$crearNuevoTabla -> estado = $_POST["Estadotabla"];
	$crearNuevoTabla -> fecha = $_POST["Fechatabla"];



	$crearNuevoTabla ->crearTabla();
}

if ($tipoOperacion == "editarTabla") {
	$editarTabla = new ajaxTabla();
	$editarTabla -> id_tabla = $_POST["id_tabla"];
	$editarTabla -> editarTabla();
}
if ($tipoOperacion == "actualizarTabla") {
	$actualizarTabla = new ajaxTabla();
	$actualizarTabla -> id_tabla = $_POST["id_tabla"];
	$actualizarTabla -> titulotabla = $_POST["titulotabla"];
	$actualizarTabla -> Clientetabla = $_POST["Clientetabla"];
	$actualizarTabla -> Descripciontabla = $_POST["Descripciontabla"];
	$actualizarTabla -> Ubicaciontabla = $_POST["Ubicaciontabla"];


	$actualizarTabla -> actualizarTabla();
}
if ($tipoOperacion == "eliminarTabla") {
	$eliminarTabla = new ajaxTabla();
	$eliminarTabla -> id_tabla = $_POST["id_tabla"];
	$eliminarTabla -> eliminarTabla();
}

?>