<?php

require_once "../controllers/bandas.controller.php";
require_once "../models/bandas.modelo.php";

Class ajaxBanda {


	public function crearBanda(){
		$datos = array(
						
						"numeroserie"=>$this->numeroserie,
		
						"descripcion"=>$this->descripcion,
						"ancho"=>$this->ancho,

						"material"=>$this->material




					);

		$respuesta = ControllerBanda::ctrCrearBanda($datos);

		echo $respuesta;
	}
	public function editarBanda(){
		$id_banda = $this->id_banda;

		$respuesta = ControllerBanda::ctrEditarBanda($id_banda);

		$datos = array("id_banda"=>$respuesta["id_banda"],
					
						"numeroserie"=>$respuesta["numero_serie"],
					
						"descripcion"=>$respuesta["descripcion"],
				        "ancho"=>$respuesta["ancho"],
				        "material"=>$respuesta["material"]



						);

		echo json_encode($datos);

	}
	public function actualizarBanda(){
		$datos = array( "id_banda"=>$this->id_banda,
						"numeroserie"=>$this->numeroserie,
						"descripcion"=>$this->descripcion,
						"ancho"=>$this->ancho,
						"material"=>$this->material
				
						);

		$respuesta = ControllerBanda::ctrActualizarBanda($datos);

		echo $respuesta;
	}
	public function eliminarBanda(){
		$id_banda = $this->id_banda;


		$respuesta = ControllerBanda::ctrEliminarBanda($id_banda);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarbanda") {
	$crearNuevoBanda = new ajaxBanda();


	$crearNuevoBanda -> numeroserie = $_POST["NumeroSerie"];

	$crearNuevoBanda -> descripcion = $_POST["DescripcionBanda"];
	$crearNuevoBanda -> ancho = $_POST["Ancho"];

	$crearNuevoBanda -> material = $_POST["Material"];




	$crearNuevoBanda ->crearBanda();
}

if ($tipoOperacion == "editarBanda") {
	$editarBanda = new ajaxBanda();
	$editarBanda -> id_banda = $_POST["id_banda"];
	$editarBanda -> editarBanda();
}
if ($tipoOperacion == "actualizarBanda") {
	$actualizarBanda = new ajaxBanda();
	$actualizarBanda -> id_banda = $_POST["id_banda"];
	$actualizarBanda -> numeroserie = $_POST["NumeroSerie"];
	$actualizarBanda -> descripcion = $_POST["DescripcionBanda"];
	$actualizarBanda -> ancho = $_POST["Ancho"];
	$actualizarBanda -> material = $_POST["Material"];


	$actualizarBanda -> actualizarBanda();
}
if ($tipoOperacion == "eliminarBanda") {
	$eliminarBanda = new ajaxBanda();
	$eliminarBanda -> id_banda = $_POST["id_banda"];
	$eliminarBanda -> eliminarBanda();
}

?>