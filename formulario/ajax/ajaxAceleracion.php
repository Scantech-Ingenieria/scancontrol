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
						"tipommotor"=>$this->tipommotor,
						"tipodescanso"=>$this->tipodescanso,
						"imagen"=>$this->imagen_aceleracion

					);

		$respuesta = ControllerAceleracion::ctrCrearAceleracion($datos);
		echo $respuesta;
	}
	public function editarAceleracion(){
		$id_aceleracion = $this->id_aceleracion;
		$respuesta = ControllerAceleracion::ctrEditarAceleracion($id_aceleracion);
		$datos = array("id_unidad_acel"=>$respuesta["id_unidad_acel"],
				        "tipo_sprockets"=>$respuesta["tipo_sprockets"],
						"cantidad_sprockets"=>$respuesta["cantidad_sprockets"],
						"banda_modular_tipo"=>$respuesta["banda_tipo"],
						"banda_medidas"=>$respuesta["banda_medidas"],
						"eje"=>$respuesta["eje"],
						"tipo_motor"=>$respuesta["tipo_motor"],
						"tipo_descanso"=>$respuesta["tipo_descanso"],
							"imagen"=>substr($respuesta["rutaImg"], 3)
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
						"tipomotor"=>$this->tipomotor,
						"tipodescanso"=>$this->tipodescanso,
						"imagen"=>$this->imagen_aceleracion,		
						"rutaActual"=>$this->rutaActual	
						);

		$respuesta = ControllerAceleracion::ctrActualizarAceleracion($datos);
		echo $respuesta;
	}
	public function eliminarAceleracion(){
		$id_aceleracion = $this->id_aceleracion;
			$ruta = $this->imagen_aceleracion;

		$respuesta = ControllerAceleracion::ctrEliminarAceleracion($id_aceleracion,$ruta);
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
	$crearNuevoAceleracion -> tipommotor = $_POST["TipoMotor"];
	$crearNuevoAceleracion -> tipodescanso = $_POST["TipoDescanso"];
    $crearNuevoAceleracion -> imagen_aceleracion = $_FILES["imagenAceleracion"];

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
	$actualizarAceleracion -> tipomotor = $_POST["TipoMotor"];
	$actualizarAceleracion -> tipodescanso = $_POST["TipoDescanso"];
	$actualizarAceleracion -> imagen_aceleracion = $_FILES["imagenAceleracion"];
	$actualizarAceleracion -> rutaActual = $_POST["rutaActual"];
	$actualizarAceleracion -> actualizarAceleracion();
}
if ($tipoOperacion == "eliminarAceleracion") {
	$eliminarAceleracion = new ajaxAceleracion();
	$eliminarAceleracion -> id_aceleracion = $_POST["id_aceleracion"];
	$eliminarAceleracion -> imagen_aceleracion = $_POST["rutaImagen"];

	$eliminarAceleracion -> eliminarAceleracion();
}

?>