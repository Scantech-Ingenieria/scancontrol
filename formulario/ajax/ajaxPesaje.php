<?php
require_once "../controllers/pesaje.controller.php";
require_once "../models/pesaje.modelo.php";
Class ajaxPesaje {
public function crearPesaje(){
		$datos = array(
						"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"eje"=>$this->eje,
						"motorusillo"=>$this->motorusillo,
						"motorcapacidad"=>$this->motorcapacidad,
						"tiposensores"=>$this->tiposensores,
						"cantidadsensores"=>$this->cantidadsensores,
						"rpm"=>$this->rpm,
						"tiporodamientos"=>$this->tiporodamientos

					);

		$respuesta = ControllerPesaje::ctrCrearPesaje($datos);
		echo $respuesta;
	}
	public function editarPesaje(){
		$id_pesaje = $this->id_pesaje;

		$respuesta = ControllerPesaje::ctrEditarPesaje($id_pesaje);

		$datos = array("id_unidad_pesaje"=>$respuesta["id_unidad_pesaje"],
						"tipo_sensores"=>$respuesta["tipo_sensores"],
						"cantidad_sensores"=>$respuesta["cantidad_sensores"],
						"tipo_sprockets"=>$respuesta["tipo_sprocket"],
						"cantidad_sprockets"=>$respuesta["cantidad_sprocket"],
						"banda_modular_tipo"=>$respuesta["tipo_banda"],
						"banda_medidas"=>$respuesta["medida_banda"],
						"eje"=>$respuesta["eje"],
						"motor_usillo"=>$respuesta["motor_usillo"],
						"motor_capacidad"=>$respuesta["motor_capacidad"],
					   "rpm"=>$respuesta["rpm"],
						"tipo_rodamientos"=>$respuesta["tipo_rodamientos"]
						);
		echo json_encode($datos);
	}
	public function actualizarPesaje(){
		$datos = array( "id_pesaje"=>$this->id_pesaje,
			            "tiposensores"=>$this->tiposensores,
						"cantidadsensores"=>$this->cantidadsensores,
						"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"eje"=>$this->eje,
						"motorusillo"=>$this->motorusillo,
						"motorcapacidad"=>$this->motorcapacidad,
						"rpm"=>$this->rpm,
						"tiporodamientos"=>$this->tiporodamientos
					
						);
		$respuesta = ControllerPesaje::ctrActualizarPesaje($datos);
		echo $respuesta;
	}
	public function eliminarPesaje(){
		$id_pesaje = $this->id_pesaje;
		$respuesta = ControllerPesaje::ctrEliminarPesaje($id_pesaje);
	echo $respuesta;
	}
}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarpesaje") {
	$crearNuevoPesaje = new ajaxPesaje();
	$crearNuevoPesaje -> tiposensores = $_POST["TipoSensores"];
	$crearNuevoPesaje -> cantidadsensores = $_POST["CantidadSensores"];
	$crearNuevoPesaje -> tipo = $_POST["TipoSprockets"];
	$crearNuevoPesaje -> cantidadsprockets = $_POST["CantidadSprockets"];
	$crearNuevoPesaje -> tipobandas = $_POST["TipoBandas"];
	$crearNuevoPesaje -> bandasmedidas = $_POST["BandasMedidas"];
	$crearNuevoPesaje -> eje = $_POST["Eje"];
	$crearNuevoPesaje -> motorusillo = $_POST["MotorUsillo"];
	$crearNuevoPesaje -> motorcapacidad = $_POST["MotorCapacidad"];
	$crearNuevoPesaje -> rpm = $_POST["RPM"];
	$crearNuevoPesaje -> tiporodamientos = $_POST["TipoRodamientos"];


	$crearNuevoPesaje ->crearPesaje();
}
if ($tipoOperacion == "editarPesaje") {
	$editarPesaje = new ajaxPesaje();
	$editarPesaje -> id_pesaje = $_POST["id_pesaje"];
	$editarPesaje -> editarPesaje();
}
if ($tipoOperacion == "actualizarPesaje") {
	$actualizarPesaje = new ajaxPesaje();
	$actualizarPesaje -> id_pesaje = $_POST["id_pesaje"];
	$actualizarPesaje -> tiposensores = $_POST["TipoSensores"];
	$actualizarPesaje -> cantidadsensores = $_POST["CantidadSensores"];
	$actualizarPesaje -> tipo = $_POST["TipoSprockets"];
	$actualizarPesaje -> cantidadsprockets = $_POST["CantidadSprockets"];
	$actualizarPesaje -> tipobandas = $_POST["TipoBandas"];
	$actualizarPesaje -> bandasmedidas = $_POST["BandasMedidas"];
	$actualizarPesaje -> eje = $_POST["Eje"];
	$actualizarPesaje -> motorusillo = $_POST["MotorUsillo"];
	$actualizarPesaje -> motorcapacidad = $_POST["MotorCapacidad"];
	$actualizarPesaje -> rpm = $_POST["RPM"];
	$actualizarPesaje -> tiporodamientos = $_POST["TipoRodamientos"];
	$actualizarPesaje -> actualizarPesaje();
}
if ($tipoOperacion == "eliminarPesaje") {
	$eliminarPesaje = new ajaxPesaje();
	$eliminarPesaje -> id_pesaje = $_POST["id_pesaje"];
	$eliminarPesaje -> eliminarPesaje();
}

?>