<?php
require_once "../controllers/descarga.controller.php";
require_once "../models/descarga.modelo.php";
Class ajaxDescarga {
	public function crearDescarga(){
		$datos = array(
						"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"eje"=>$this->eje,
						"motorusillo"=>$this->motorusillo,
						"motorcapacidad"=>$this->motorcapacidad,
						"tipopaletas"=>$this->tipopaletas,
						"cantidadpaletas"=>$this->cantidadpaletas,
						"rpm"=>$this->rpm,
						"tiporodamientos"=>$this->tiporodamientos	
					);
		$respuesta = ControllerDescarga::ctrCrearDescarga($datos);
		echo $respuesta;
	}
	public function editarDescarga(){
		$id_descarga = $this->id_descarga;
		$respuesta = ControllerDescarga::ctrEditarDescarga($id_descarga);
		$datos = array("id_unidad_descarga"=>$respuesta["id_unidad_descarga"],
						"tipo_sprockets"=>$respuesta["tipo_sprocket"],
						"cantidad_sprockets"=>$respuesta["cantidad_sprocket"],
						"banda_modular_tipo"=>$respuesta["tipo_banda"],
						"banda_medidas"=>$respuesta["medida_banda"],
						"eje"=>$respuesta["eje"],
						"motor_usillo"=>$respuesta["motor_usillo"],
						"motor_capacidad"=>$respuesta["motor_capacidad"],
						"tipo_paletas"=>$respuesta["id_tipo_paletas"],
						"cantidad_paletas"=>$respuesta["cantidad_paletas"],
						"rpm"=>$respuesta["rpm"],
						"tipo_rodamientos"=>$respuesta["tipo_rodamientos"]
						);

		echo json_encode($datos);
	}
	public function actualizarDescarga(){
		$datos = array( "id_descarga"=>$this->id_descarga,
						"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"eje"=>$this->eje,
						"motorusillo"=>$this->motorusillo,
						"motorcapacidad"=>$this->motorcapacidad,
						"tipopaletas"=>$this->tipopaletas,
						"cantidadpaletas"=>$this->cantidadpaletas,
						"rpm"=>$this->rpm,
						"tiporodamientos"=>$this->tiporodamientos	
					
						);

		$respuesta = ControllerDescarga::ctrActualizarDescarga($datos);
		echo $respuesta;
	}
	public function eliminarDescarga(){
		$id_descarga = $this->id_descarga;
		$respuesta = ControllerDescarga::ctrEliminarDescarga($id_descarga);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertardescarga") {
	$crearNuevoDescarga = new ajaxDescarga();
	$crearNuevoDescarga -> tipo = $_POST["TipoSprockets"];
	$crearNuevoDescarga -> cantidadsprockets = $_POST["CantidadSprockets"];
	$crearNuevoDescarga -> tipobandas = $_POST["TipoBandas"];
	$crearNuevoDescarga -> bandasmedidas = $_POST["BandasMedidas"];
	$crearNuevoDescarga -> eje = $_POST["Eje"];
	$crearNuevoDescarga -> motorusillo = $_POST["MotorUsillo"];
	$crearNuevoDescarga -> motorcapacidad = $_POST["MotorCapacidad"];
	$crearNuevoDescarga -> tipopaletas = $_POST["TipoPaletas"];
	$crearNuevoDescarga -> cantidadpaletas = $_POST["CantidadPaletas"];
	$crearNuevoDescarga -> rpm = $_POST["RPM"];
	$crearNuevoDescarga -> tiporodamientos = $_POST["TipoRodamientos"];
	$crearNuevoDescarga ->crearDescarga();
}

if ($tipoOperacion == "editarDescarga") {
	$editarDescarga = new ajaxDescarga();
	$editarDescarga -> id_descarga = $_POST["id_descarga"];
	$editarDescarga -> editarDescarga();
}
if ($tipoOperacion == "actualizarDescarga") {
	$actualizarDescarga = new ajaxDescarga();
	$actualizarDescarga -> id_descarga = $_POST["id_descarga"];
	$actualizarDescarga -> tipo = $_POST["TipoSprockets"];
	$actualizarDescarga -> cantidadsprockets = $_POST["CantidadSprockets"];
	$actualizarDescarga -> tipobandas = $_POST["TipoBandas"];
	$actualizarDescarga -> bandasmedidas = $_POST["BandasMedidas"];
	$actualizarDescarga -> eje = $_POST["Eje"];
	$actualizarDescarga -> motorusillo = $_POST["MotorUsillo"];
	$actualizarDescarga -> motorcapacidad = $_POST["MotorCapacidad"];
	$actualizarDescarga -> tipopaletas = $_POST["TipoPaletas"];
	$actualizarDescarga -> cantidadpaletas = $_POST["CantidadPaletas"];
    $actualizarDescarga -> rpm = $_POST["RPM"];
	$actualizarDescarga -> tiporodamientos = $_POST["TipoRodamientos"];
	$actualizarDescarga -> actualizarDescarga();
}
if ($tipoOperacion == "eliminarDescarga") {
	$eliminarDescarga = new ajaxDescarga();
	$eliminarDescarga -> id_descarga = $_POST["id_descarga"];
	$eliminarDescarga -> eliminarDescarga();
}

?>