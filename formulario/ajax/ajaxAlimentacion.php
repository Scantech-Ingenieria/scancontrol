<?php

require_once "../controllers/alimentacion.controller.php";
require_once "../models/alimentacion.modelo.php";

Class ajaxAlimentacion {


	public function crearAlimentacion(){
		$datos = array(
						

						"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"eje"=>$this->eje,
						"motorusillo"=>$this->motorusillo,
						"motorcapacidad"=>$this->motorcapacidad,
						"motorrpm"=>$this->motorrpm
				

					);

		$respuesta = ControllerAlimentacion::ctrCrearAlimentacion($datos);

		echo $respuesta;
	}
	public function editarAlimentacion(){
		$id_alimentacion = $this->id_alimentacion;

		$respuesta = ControllerAlimentacion::ctrEditarAlimentacion($id_alimentacion);

		$datos = array("id_unidad_alim"=>$respuesta["id_unidad_alim"],
					
						"tipo_sprockets"=>$respuesta["tipo_sprockets"],
					
						"cantidad_sprockets"=>$respuesta["cantidad_sprockets"],
						"banda_modular_tipo"=>$respuesta["banda_modular_tipo"],
						"banda_medidas"=>$respuesta["banda_medidas"],
						"eje"=>$respuesta["eje"],
						"motor_usillo"=>$respuesta["motor_usillo"],
						"motor_capacidad"=>$respuesta["motor_capacidad"],
						"motor_rpm"=>$respuesta["motor_rpm"]



						);

		echo json_encode($datos);

	}
	public function actualizarAlimentacion(){
		$datos = array( "id_alimentacion"=>$this->id_alimentacion,
						"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"eje"=>$this->eje,
						"motorusillo"=>$this->motorusillo,
						"motorcapacidad"=>$this->motorcapacidad,
						"motorrpm"=>$this->motorrpm

						
				
						);

		$respuesta = ControllerAlimentacion::ctrActualizarAlimentacion($datos);

		echo $respuesta;
	}
	public function eliminarAlimentacion(){
		$id_alimentacion = $this->id_alimentacion;


		$respuesta = ControllerAlimentacion::ctrEliminarAlimentacion($id_alimentacion);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertaralimentacion") {
	$crearNuevoAlimentacion = new ajaxAlimentacion();

	$crearNuevoAlimentacion -> tipo = $_POST["TipoSprockets"];
	$crearNuevoAlimentacion -> cantidadsprockets = $_POST["CantidadSprockets"];
	$crearNuevoAlimentacion -> tipobandas = $_POST["TipoBandas"];
	$crearNuevoAlimentacion -> bandasmedidas = $_POST["BandasMedidas"];
	$crearNuevoAlimentacion -> eje = $_POST["Eje"];
	$crearNuevoAlimentacion -> motorusillo = $_POST["MotorUsillo"];
	$crearNuevoAlimentacion -> motorcapacidad = $_POST["MotorCapacidad"];
	$crearNuevoAlimentacion -> motorrpm = $_POST["MotorRpm"];

	$crearNuevoAlimentacion ->crearAlimentacion();
}

if ($tipoOperacion == "editarAlimentacion") {
	$editarAlimentacion = new ajaxAlimentacion();
	$editarAlimentacion -> id_alimentacion = $_POST["id_alimentacion"];
	$editarAlimentacion -> editarAlimentacion();
}
if ($tipoOperacion == "actualizarAlimentacion") {
	$actualizarAlimentacion = new ajaxAlimentacion();
	$actualizarAlimentacion -> id_alimentacion = $_POST["id_alimentacion"];
	$actualizarAlimentacion -> tipo = $_POST["TipoSprockets"];
	$actualizarAlimentacion -> cantidadsprockets = $_POST["CantidadSprockets"];
	$actualizarAlimentacion -> tipobandas = $_POST["TipoBandas"];
	$actualizarAlimentacion -> bandasmedidas = $_POST["BandasMedidas"];
	$actualizarAlimentacion -> eje = $_POST["Eje"];
	$actualizarAlimentacion -> motorusillo = $_POST["MotorUsillo"];
	$actualizarAlimentacion -> motorcapacidad = $_POST["MotorCapacidad"];
	$actualizarAlimentacion -> motorrpm = $_POST["MotorRpm"];

	$actualizarAlimentacion -> actualizarAlimentacion();
}
if ($tipoOperacion == "eliminarAlimentacion") {
	$eliminarAlimentacion = new ajaxAlimentacion();
	$eliminarAlimentacion -> id_alimentacion = $_POST["id_alimentacion"];
	$eliminarAlimentacion -> eliminarAlimentacion();
}

?>