<?php
require_once "../controllers/grader.controller.php";
require_once "../models/grader.modelo.php";
Class ajaxGrader {

	public function editarGrader(){
		$id_grader = $this->id_grader;
		$respuesta = ControllerGrader::ctrEditarGrader($id_grader);
		$datos = array("id_unidad_balanza"=>$respuesta["id_unidad_balanza"],
				        "Cliente"=>$respuesta["cliente"],
				        "Grader"=>$respuesta["grader"],
				        "Calidad"=>$respuesta["descripcalidad"],
						"Alimentacion"=>$respuesta["descralim"],
						"Aceleracion"=>$respuesta["descraceleracion"],
						"Pesaje"=>$respuesta["descrpesaje"],
						"Descarga"=>$respuesta["descripdescarga"]
		
						);
		echo json_encode($datos);
	}
	public function actualizarGrader(){
		$datos = array( "id_grader"=>$this->id_grader,
			            "grader"=>$this->grader,
						"cliente"=>$this->cliente,
						"calidad"=>$this->calidad,
						"alimentacion"=>$this->alimentacion,
						"aceleracion"=>$this->aceleracion,
						"pesaje"=>$this->pesaje,
						"descarga"=>$this->descarga
						);

		$respuesta = ControllerGrader::ctrActualizarGrader($datos);
		echo $respuesta;
	}
	public function eliminarGrader(){
		$id_grader = $this->id_grader;

		$respuesta = ControllerGrader::ctrEliminarGrader($id_grader);
		echo $respuesta;
	}
}

$tipoOperacion = $_POST["tipoOperacion"];


if ($tipoOperacion == "editarGrader") {
	$editarGrader = new ajaxGrader();
	$editarGrader -> id_grader = $_POST["id_grader"];
	$editarGrader -> editarGrader();
}
if ($tipoOperacion == "actualizarGrader") {
	$actualizarGrader = new ajaxGrader();
	$actualizarGrader -> id_grader = $_POST["id_grader"];
	$actualizarGrader -> grader = $_POST["Grader"];
	$actualizarGrader -> cliente = $_POST["Cliente"];
	$actualizarGrader -> calidad = $_POST["Calidad"];
	$actualizarGrader -> alimentacion = $_POST["Alimentacion"];
	$actualizarGrader -> aceleracion = $_POST["Aceleracion"];
	$actualizarGrader -> pesaje = $_POST["Pesaje"];
	$actualizarGrader -> descarga = $_POST["Descarga"];
	$actualizarGrader -> actualizarGrader();
}
if ($tipoOperacion == "eliminarGrader") {
	$eliminarGrader = new ajaxGrader();
	$eliminarGrader -> id_grader = $_POST["id_grader"];
	$eliminarGrader -> eliminarGrader();
}

?>