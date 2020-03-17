<?php
require_once "../controllers/rodamientos.controller.php";
require_once "../models/rodamientos.modelo.php";

Class ajaxRodamientos {
	public function crearRodamientos(){
		$datos = array(				
						"modelo"=>$this->modelo,
						"rodamiento"=>$this->rodamiento,
						"material"=>$this->material,
						"fijaciones"=>$this->fijaciones,
						"imagen"=>$this->imagen_descanso
					);
		$respuesta = ControllerRodamientos::ctrCrearRodamientos($datos);
		echo $respuesta;
	}
	public function editarRodamientos(){
		$id_rodamientos = $this->id_rodamientos;
		$respuesta = ControllerRodamientos::ctrEditarRodamientos($id_rodamientos);
		$datos = array("id_rodamientos"=>$respuesta["id_rodamientos"],	
						"modelo"=>$respuesta["modelo"],
						"rodamiento"=>$respuesta["rodamiento"],
						"material"=>$respuesta["material"],
						"fijaciones"=>$respuesta["fijaciones"],
						"imagen"=>substr($respuesta["rutaImg"], 3)

						);
		echo json_encode($datos);
	}
	public function actualizarRodamientos(){
		$datos = array( "id_rodamientos"=>$this->id_rodamientos,
						"modelo"=>$this->modelo	,
						"rodamiento"=>$this->rodamiento	,
						"material"=>$this->material	,
						"fijaciones"=>$this->fijaciones	,
						"rutaActual"=>$this->rutaActual,
						"imagen"=>$this->imagen_descanso
						);
		$respuesta = ControllerRodamientos::ctrActualizarRodamientos($datos);
		echo $respuesta;
	}
	public function eliminarRodamientos(){
		$id_rodamientos = $this->id_rodamientos;
		$ruta = $this->imagen_descanso;
		$respuesta = ControllerRodamientos::ctrEliminarRodamientos($id_rodamientos,$ruta);
		echo $respuesta;
	}
}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarrodamientos") {
	$crearNuevoRodamientos = new ajaxRodamientos();
	$crearNuevoRodamientos -> modelo = $_POST["Modelo"];
	$crearNuevoRodamientos -> rodamiento = $_POST["Rodamiento"];
	$crearNuevoRodamientos -> material = $_POST["Material"];
	$crearNuevoRodamientos -> fijaciones = $_POST["Fijaciones"];
    $crearNuevoRodamientos -> imagen_descanso = $_FILES["imagenDescanso"];
	$crearNuevoRodamientos ->crearRodamientos();
}

if ($tipoOperacion == "editarRodamientos") {
	$editarRodamientos = new ajaxRodamientos();
	$editarRodamientos -> id_rodamientos = $_POST["id_rodamientos"];
	$editarRodamientos -> editarRodamientos();
}
if ($tipoOperacion == "actualizarRodamientos") {
	$actualizarRodamientos = new ajaxRodamientos();
	$actualizarRodamientos -> id_rodamientos = $_POST["id_rodamientos"];
	$actualizarRodamientos -> modelo = $_POST["Modelo"];
    $actualizarRodamientos -> rodamiento = $_POST["Rodamiento"];
	$actualizarRodamientos -> material = $_POST["Material"];
	$actualizarRodamientos -> fijaciones = $_POST["Fijaciones"];
    $actualizarRodamientos -> imagen_descanso = $_FILES["imagenDescanso"];
	$actualizarRodamientos -> rutaActual = $_POST["rutaActual"];



	$actualizarRodamientos -> actualizarRodamientos();
}
if ($tipoOperacion == "eliminarRodamientos") {
	$eliminarRodamientos = new ajaxRodamientos();
	$eliminarRodamientos -> id_rodamientos = $_POST["id_rodamientos"];
	$eliminarRodamientos -> imagen_descanso = $_POST["rutaImagen"];

	$eliminarRodamientos -> eliminarRodamientos();
}

?>