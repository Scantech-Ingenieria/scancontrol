<?php
require_once "../controllers/cilindros.controller.php";
require_once "../models/cilindros.modelo.php";
Class ajaxCilindros {
	public function crearCilindros(){
		$datos = array(
						"modelo"=>$this->modelo,
						"imagen"=>$this->imagen_cilindros
				
					);

		$respuesta = ControllerCilindros::ctrCrearCilindros($datos);
		echo $respuesta;
	}
	public function editarCilindros(){
		$id_cilindros = $this->id_cilindros;
		$respuesta = ControllerCilindros::ctrEditarCilindros($id_cilindros);
		$datos = array("id_cilindros"=>$respuesta["id_cilindros"],		
				        "modelo"=>$respuesta["modelo"],
				        "imagen"=>substr($respuesta["rutaImg"], 3)
						);
		echo json_encode($datos);
	}
	public function actualizarCilindros(){
		$datos = array( "id_cilindros"=>$this->id_cilindros,
						"modelo"=>$this->modelo,
						"imagen"=>$this->imagen_cilindros,		
						"rutaActual"=>$this->rutaActual		
						);
		$respuesta = ControllerCilindros::ctrActualizarCilindros($datos);
		echo $respuesta;
	}
	public function eliminarCilindros(){
		$id_cilindros = $this->id_cilindros;
		$ruta = $this->imagen_cilindros;
		$respuesta = ControllerCilindros::ctrEliminarCilindros($id_cilindros,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertarcilindros") {
	$crearNuevoCilindros = new ajaxCilindros();
	$crearNuevoCilindros -> modelo = $_POST["Modelo"];
    $crearNuevoCilindros -> imagen_cilindros = $_FILES["imagenCilindros"];
	$crearNuevoCilindros ->crearCilindros();
}

if ($tipoOperacion == "editarCilindros") {
	$editarCilindros = new ajaxCilindros();
	$editarCilindros -> id_cilindros = $_POST["id_cilindros"];
	$editarCilindros -> editarCilindros();
}
if ($tipoOperacion == "actualizarCilindros") {
	$actualizarCilindros = new ajaxCilindros();
	$actualizarCilindros -> id_cilindros = $_POST["id_cilindros"];
	$actualizarCilindros -> modelo = $_POST["Modelo"];
    $actualizarCilindros -> imagen_cilindros = $_FILES["imagenCilindros"];
	$actualizarCilindros -> rutaActual = $_POST["rutaActual"];
	$actualizarCilindros -> actualizarCilindros();
}
if ($tipoOperacion == "eliminarCilindros") {
	$eliminarCilindros = new ajaxCilindros();
	$eliminarCilindros -> id_cilindros = $_POST["id_cilindros"];
	$eliminarCilindros -> imagen_cilindros = $_POST["rutaImagen"];
	$eliminarCilindros -> eliminarCilindros();
}

?>