<?php
require_once "../controllers/automatico.controller.php";
require_once "../models/automatico.modelo.php";
Class ajaxAutomatico {
	public function crearAutomatico(){
		$datos = array(
						"amperaje"=>$this->amperaje,
						"marca"=>$this->marca,
						"tipo"=>$this->tipo,
						"precio"=>$this->precio,
						"imagen"=>$this->imagen_automatico

					);
		$respuesta = ControllerAutomatico::ctrCrearAutomatico($datos);
		echo $respuesta;
	}
	public function editarAutomatico(){
		$id_automatico = $this->id_automatico;
		$respuesta = ControllerAutomatico::ctrEditarAutomatico($id_automatico);
		$datos = array("id_automatico"=>$respuesta["id_automatico"],
						"amperaje"=>$respuesta["amperaje"],
						"marca"=>$respuesta["marca"],
						"tipo"=>$respuesta["tipo"],
						"precio"=>miles($respuesta["precio"]),
				        "imagen"=>substr($respuesta["rutaImg"], 3)

						);

		echo json_encode($datos);
	}
	public function actualizarAutomatico(){
		$datos = array( "id_automatico"=>$this->id_automatico,
						"amperaje"=>$this->amperaje,
						"marca"=>$this->marca,
						"tipo"=>$this->tipo,
						"precio"=>$this->precio,
						"imagen"=>$this->imagen_automatico,		
						"rutaActual"=>$this->rutaActual
						);
		$respuesta = ControllerAutomatico::ctrActualizarAutomatico($datos);
		echo $respuesta;
	}
	public function eliminarAutomatico(){
		$id_automatico = $this->id_automatico;
		$ruta = $this->imagen_automatico;

		$respuesta = ControllerAutomatico::ctrEliminarAutomatico($id_automatico,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertarautomatico") {
	$crearNuevoAutomatico = new ajaxAutomatico();
	$crearNuevoAutomatico -> amperaje = $_POST["Amperaje"];
	$crearNuevoAutomatico -> marca = $_POST["Marca"];
	$crearNuevoAutomatico -> tipo = $_POST["Tipo"];
	$crearNuevoAutomatico -> precio = puntos($_POST["Precio"]);
    $crearNuevoAutomatico -> imagen_automatico = $_FILES["imagenAutomatico"];
	$crearNuevoAutomatico ->crearAutomatico();
}
if ($tipoOperacion == "editarAutomatico") {
	$editarAutomatico = new ajaxAutomatico();
	$editarAutomatico -> id_automatico = $_POST["id_automatico"];
	$editarAutomatico -> editarAutomatico();
}
if ($tipoOperacion == "actualizarAutomatico") {
	$actualizarAutomatico = new ajaxAutomatico();
	$actualizarAutomatico -> id_automatico = $_POST["id_automatico"];
	$actualizarAutomatico -> amperaje = $_POST["Amperaje"];
	$actualizarAutomatico -> marca = $_POST["Marca"];
	$actualizarAutomatico -> tipo = $_POST["Tipo"];
	$actualizarAutomatico -> precio = puntos($_POST["Precio"]);
	$actualizarAutomatico -> imagen_automatico = $_FILES["imagenAutomatico"];
	$actualizarAutomatico -> rutaActual = $_POST["rutaActual"];
	$actualizarAutomatico -> actualizarAutomatico();
}
if ($tipoOperacion == "eliminarAutomatico") {
	$eliminarAutomatico = new ajaxAutomatico();
	$eliminarAutomatico -> id_automatico = $_POST["id_automatico"];
	$eliminarAutomatico -> imagen_automatico = $_POST["rutaImagen"];
	$eliminarAutomatico -> eliminarAutomatico();
}

function puntos($s)
{
$s= str_replace('.','', $s); 
return $s;
}
function miles($m){
$m=number_format($m, 0, ',', '.');
return $m;

}
?>