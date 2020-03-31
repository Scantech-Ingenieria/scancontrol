<?php
require_once "../controllers/motor.controller.php";
require_once "../models/motor.modelo.php";
Class ajaxMotor {
	public function crearMotor(){
		$datos = array(
						"rpm"=>$this->rpm,
						"marca"=>$this->marca,

						"usillo"=>$this->usillo,
						"ancho"=>$this->ancho,
						"capacidad"=>$this->capacidad,
						"imagen"=>$this->imagen_motor
				
					);

		$respuesta = ControllerMotor::ctrCrearMotor($datos);
		echo $respuesta;
	}
	public function editarMotor(){
		$id_motor = $this->id_motor;
		$respuesta = ControllerMotor::ctrEditarMotor($id_motor);
		$datos = array("id_motor"=>$respuesta["id_motor"],	
				        "marca"=>$respuesta["marca"],

				        "rpm"=>$respuesta["rpm"],
				        "usillo"=>$respuesta["usillo"],
				        "ancho"=>$respuesta["ancho"],
				        "capacidad"=>$respuesta["capacidad"],
				        "imagen"=>substr($respuesta["rutaImg"], 3)
						);
		echo json_encode($datos);
	}
	public function actualizarMotor(){
		$datos = array( "id_motor"=>$this->id_motor,
				        "rpm"=>$this->rpm,
				        "marca"=>$this->marca,

						"usillo"=>$this->usillo,
						"ancho"=>$this->ancho,
						"capacidad"=>$this->capacidad,
						"imagen"=>$this->imagen_motor,		
						"rutaActual"=>$this->rutaActual		
						);
		$respuesta = ControllerMotor::ctrActualizarMotor($datos);
		echo $respuesta;
	}
	public function eliminarMotor(){
		$id_motor = $this->id_motor;
		$ruta = $this->imagen_motor;
		$respuesta = ControllerMotor::ctrEliminarMotor($id_motor,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertarmotor") {
	$crearNuevoMotor = new ajaxMotor();
	$crearNuevoMotor -> marca = $_POST["Marca"];

	$crearNuevoMotor -> rpm = $_POST["Rpm"];
	$crearNuevoMotor -> usillo = $_POST["Usillo"];
	$crearNuevoMotor -> ancho = $_POST["Ancho"];
	$crearNuevoMotor -> capacidad = $_POST["Capacidad"];
    $crearNuevoMotor -> imagen_motor = $_FILES["imagenMotor"];
	$crearNuevoMotor ->crearMotor();
}

if ($tipoOperacion == "editarMotor") {
	$editarMotor = new ajaxMotor();
	$editarMotor -> id_motor = $_POST["id_motor"];
	$editarMotor -> editarMotor();
}
if ($tipoOperacion == "actualizarMotor") {
	$actualizarMotor = new ajaxMotor();
	$actualizarMotor -> id_motor = $_POST["id_motor"];
    $actualizarMotor -> rpm = $_POST["Rpm"];
	$actualizarMotor -> marca = $_POST["Marca"];
    
	$actualizarMotor -> usillo = $_POST["Usillo"];
	$actualizarMotor -> ancho = $_POST["Ancho"];
	$actualizarMotor -> capacidad = $_POST["Capacidad"];
    $actualizarMotor -> imagen_motor = $_FILES["imagenMotor"];
	$actualizarMotor -> rutaActual = $_POST["rutaActual"];
	$actualizarMotor -> actualizarMotor();
}
if ($tipoOperacion == "eliminarMotor") {
	$eliminarMotor = new ajaxMotor();
	$eliminarMotor -> id_motor = $_POST["id_motor"];
	$eliminarMotor -> imagen_motor = $_POST["rutaImagen"];
	$eliminarMotor -> eliminarMotor();
}

?>