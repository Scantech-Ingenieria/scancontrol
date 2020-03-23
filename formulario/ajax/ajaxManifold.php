<?php
require_once "../controllers/manifold.controller.php";
require_once "../models/manifold.modelo.php";
Class ajaxManifold {
	public function crearManifold(){
		$datos = array(
						"marca"=>$this->marca,
						"medidas"=>$this->medidas,
						"sockets"=>$this->sockets,
						"imagen"=>$this->imagen_manifold
				
					);

		$respuesta = ControllerManifold::ctrCrearManifold($datos);
		echo $respuesta;
	}
	public function editarManifold(){
		$id_manifold = $this->id_manifold;
		$respuesta = ControllerManifold::ctrEditarManifold($id_manifold);
		$datos = array("id_manifold"=>$respuesta["id_manifold"],		
				        "marca"=>$respuesta["marca"],
				        "medidas"=>$respuesta["medidas"],
				        "sockets"=>$respuesta["sockets"],
				        "imagen"=>substr($respuesta["rutaImg"], 3)
						);
		echo json_encode($datos);
	}
	public function actualizarManifold(){
		$datos = array( "id_manifold"=>$this->id_manifold,
						"marca"=>$this->marca,
						"medidas"=>$this->medidas,
						"sockets"=>$this->sockets,
						"imagen"=>$this->imagen_manifold,		
						"rutaActual"=>$this->rutaActual		
						);
		$respuesta = ControllerManifold::ctrActualizarManifold($datos);
		echo $respuesta;
	}
	public function eliminarManifold(){
		$id_manifold = $this->id_manifold;
		$ruta = $this->imagen_manifold;
		$respuesta = ControllerManifold::ctrEliminarManifold($id_manifold,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertarmanifold") {
	$crearNuevoManifold = new ajaxManifold();
	$crearNuevoManifold -> marca = $_POST["Marca"];
	$crearNuevoManifold -> medidas = $_POST["MedidasSalidas"];
	$crearNuevoManifold -> sockets = $_POST["Sockets"];
    $crearNuevoManifold -> imagen_manifold = $_FILES["imagenManifold"];
	$crearNuevoManifold ->crearManifold();
}

if ($tipoOperacion == "editarManifold") {
	$editarManifold = new ajaxManifold();
	$editarManifold -> id_manifold = $_POST["id_manifold"];
	$editarManifold -> editarManifold();
}
if ($tipoOperacion == "actualizarManifold") {
	$actualizarManifold = new ajaxManifold();
	$actualizarManifold -> id_manifold = $_POST["id_manifold"];
	$actualizarManifold -> marca = $_POST["Marca"];
	$actualizarManifold -> medidas = $_POST["MedidasSalidas"];
	$actualizarManifold -> sockets = $_POST["Sockets"];
    $actualizarManifold -> imagen_manifold = $_FILES["imagenManifold"];
	$actualizarManifold -> rutaActual = $_POST["rutaActual"];
	$actualizarManifold -> actualizarManifold();
}
if ($tipoOperacion == "eliminarManifold") {
	$eliminarManifold = new ajaxManifold();
	$eliminarManifold -> id_manifold = $_POST["id_manifold"];
	$eliminarManifold -> imagen_manifold = $_POST["rutaImagen"];
	$eliminarManifold -> eliminarManifold();
}

?>