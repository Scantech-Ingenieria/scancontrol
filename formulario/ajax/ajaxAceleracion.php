<?php

require_once "../controllers/aceleracion.controller.php";
require_once "../models/aceleracion.modelo.php";

Class ajaxAceleracion {


	public function crearAceleracion(){
		$datos = array(
						

						"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"eje"=>$this->eje,
						"motorusillo"=>$this->motorusillo,
						"motorcapacidad"=>$this->motorcapacidad
					
				

					);

		$respuesta = ControllerAceleracion::ctrCrearAceleracion($datos);

		echo $respuesta;
	}
	public function editarAceleracion(){
		$id_aceleracion = $this->id_aceleracion;

		$respuesta = ControllerAceleracion::ctrEditarAceleracion($id_aceleracion);

		$datos = array("id_unidad_acel"=>$respuesta["id_unidad_acel"],
					
						"tipo_sprockets"=>$respuesta["tipo_sprockets"],
					
						"cantidad_sprockets"=>$respuesta["cantidad_sprocket"],
						"banda_modular_tipo"=>$respuesta["tipo_banda"],
						"banda_medidas"=>$respuesta["medida_banda"],
						"eje"=>$respuesta["eje"],
						"motor_usillo"=>$respuesta["motor_usillo"],
						"motor_capacidad"=>$respuesta["motor_capacidad"]
					



						);

		echo json_encode($datos);

	}
	public function actualizarAceleracion(){
		$datos = array( "id_aceleracion"=>$this->id_aceleracion,
						"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"eje"=>$this->eje,
						"motorusillo"=>$this->motorusillo,
						"motorcapacidad"=>$this->motorcapacidad
					

						
				
						);

		$respuesta = ControllerAceleracion::ctrActualizarAceleracion($datos);

		echo $respuesta;
	}
	public function eliminarAceleracion(){
		$id_aceleracion = $this->id_aceleracion;


		$respuesta = ControllerAceleracion::ctrEliminarAceleracion($id_aceleracion);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertaraceleracion") {
	$crearNuevoAceleracion = new ajaxAceleracion();

	$crearNuevoAceleracion -> tipo = $_POST["TipoSprockets"];
	$crearNuevoAceleracion -> cantidadsprockets = $_POST["CantidadSprockets"];
	$crearNuevoAceleracion -> tipobandas = $_POST["TipoBandas"];
	$crearNuevoAceleracion -> bandasmedidas = $_POST["BandasMedidas"];
	$crearNuevoAceleracion -> eje = $_POST["Eje"];
	$crearNuevoAceleracion -> motorusillo = $_POST["MotorUsillo"];
	$crearNuevoAceleracion -> motorcapacidad = $_POST["MotorCapacidad"];

	$crearNuevoAceleracion ->crearAceleracion();
}

if ($tipoOperacion == "editarAceleracion") {
	$editarAceleracion = new ajaxAceleracion();
	$editarAceleracion -> id_aceleracion = $_POST["id_aceleracion"];
	$editarAceleracion -> editarAceleracion();
}
if ($tipoOperacion == "actualizarAceleracion") {
	$actualizarAceleracion = new ajaxAceleracion();
	$actualizarAceleracion -> id_aceleracion = $_POST["id_aceleracion"];
	$actualizarAceleracion -> tipo = $_POST["TipoSprockets"];
	$actualizarAceleracion -> cantidadsprockets = $_POST["CantidadSprockets"];
	$actualizarAceleracion -> tipobandas = $_POST["TipoBandas"];
	$actualizarAceleracion -> bandasmedidas = $_POST["BandasMedidas"];
	$actualizarAceleracion -> eje = $_POST["Eje"];
	$actualizarAceleracion -> motorusillo = $_POST["MotorUsillo"];
	$actualizarAceleracion -> motorcapacidad = $_POST["MotorCapacidad"];


	$actualizarAceleracion -> actualizarAceleracion();
}
if ($tipoOperacion == "eliminarAceleracion") {
	$eliminarAceleracion = new ajaxAceleracion();
	$eliminarAceleracion -> id_aceleracion = $_POST["id_aceleracion"];
	$eliminarAceleracion -> eliminarAceleracion();
}

?>