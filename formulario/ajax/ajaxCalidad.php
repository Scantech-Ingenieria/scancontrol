<?php

require_once "../controllers/calidad.controller.php";
require_once "../models/calidad.modelo.php";

Class ajaxCalidad {


	public function crearCalidad(){
		$datos = array(
						
						"puestos"=>$this->puestos
					
					
				

					);

		$respuesta = ControllerCalidad::ctrCrearCalidad($datos);

		echo $respuesta;
	}
	public function editarCalidad(){
		$id_calidad = $this->id_calidad;

		$respuesta = ControllerCalidad::ctrEditarCalidad($id_calidad);

		$datos = array("id_calidad"=>$respuesta["id_calidad"],
					
						"puestos"=>$respuesta["numero_puestos"]
			

			

						);

		echo json_encode($datos);

	}
	public function actualizarCalidad(){
		$datos = array( "id_calidad"=>$this->id_calidad,
						"puestos"=>$this->puestos
						
						
				
						);

		$respuesta = ControllerCalidad::ctrActualizarCalidad($datos);

		echo $respuesta;
	}
	public function eliminarCalidad(){
		$id_calidad = $this->id_calidad;


		$respuesta = ControllerCalidad::ctrEliminarCalidad($id_calidad);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarcalidad") {
	$crearNuevoCalidad = new ajaxCalidad();


	$crearNuevoCalidad -> puestos = $_POST["Puestos"];








	$crearNuevoCalidad ->crearCalidad();
}

if ($tipoOperacion == "editarCalidad") {
	$editarCalidad = new ajaxCalidad();
	$editarCalidad -> id_calidad = $_POST["id_calidad"];
	$editarCalidad -> editarCalidad();
}
if ($tipoOperacion == "actualizarCalidad") {
	$actualizarCalidad = new ajaxCalidad();
	$actualizarCalidad -> id_calidad = $_POST["id_calidad"];
	$actualizarCalidad -> puestos = $_POST["Puestos"];


	


	$actualizarCalidad -> actualizarCalidad();
}
if ($tipoOperacion == "eliminarCalidad") {
	$eliminarCalidad = new ajaxCalidad();
	$eliminarCalidad -> id_calidad = $_POST["id_calidad"];
	$eliminarCalidad -> eliminarCalidad();
}

?>