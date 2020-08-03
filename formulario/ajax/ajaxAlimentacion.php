<?php

require_once "../controllers/alimentacion.controller.php";
require_once "../models/alimentacion.modelo.php";

Class ajaxAlimentacion {
	public function crearAlimentacion(){
		$datos = array(
						"descripcion"=>$this->descripcion,			
						"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"eje"=>$this->eje,
						"largobanda"=>$this->largobanda,
						"tipommotor"=>$this->tipommotor,
						"tipodescanso"=>$this->tipodescanso,
						"imagen"=>$this->imagen_alimentacion
					);

		$respuesta = ControllerAlimentacion::ctrCrearAlimentacion($datos);
		echo $respuesta;
	}
	public function editarAlimentacion(){
		$id_alimentacion = $this->id_alimentacion;

		$respuesta = ControllerAlimentacion::ctrEditarAlimentacion($id_alimentacion);

		$datos = array("id_unidad_alim"=>$respuesta["id_unidad_alim"],
						"descripcion"=>$respuesta["descripcion"],
						"tipo_sprockets"=>$respuesta["tipo_sprockets"],
						"cantidad_sprockets"=>$respuesta["cantidad_sprockets"],
						"banda_modular_tipo"=>$respuesta["banda_tipo"],
						"banda_medidas"=>$respuesta["banda_medidas"],
						"eje"=>$respuesta["eje"],
						"largo_banda"=>$respuesta["largo_banda"],
						"tipo_motor"=>$respuesta["tipo_motor"],
		
						"tipo_descanso"=>$respuesta["tipo_descanso"],
						"imagen"=>substr($respuesta["rutaImg"], 3)
						);
		echo json_encode($datos);
	}
	public function actualizarAlimentacion(){
		$datos = array( "id_alimentacion"=>$this->id_alimentacion,
			            "descripcion"=>$this->descripcion,	
						"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"largobanda"=>$this->largobanda,
						
						"eje"=>$this->eje,
						"tipommotor"=>$this->tipommotor,
						"tipodescanso"=>$this->tipodescanso,
							"imagen"=>$this->imagen_alimentacion,		
						"rutaActual"=>$this->rutaActual	

					
						);

		$respuesta = ControllerAlimentacion::ctrActualizarAlimentacion($datos);
		echo $respuesta;
	}
	public function eliminarAlimentacion(){
		$id_alimentacion = $this->id_alimentacion;
			$ruta = $this->imagen_calidad;
		$respuesta = ControllerAlimentacion::ctrEliminarAlimentacion($id_alimentacion,$ruta);
		echo $respuesta;
	}
}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertaralimentacion") {
	$crearNuevoAlimentacion = new ajaxAlimentacion();
	$crearNuevoAlimentacion -> descripcion = $_POST["Descripcion"];
	$crearNuevoAlimentacion -> tipo = $_POST["TipoSprockets"];
	$crearNuevoAlimentacion -> cantidadsprockets = $_POST["CantidadSprockets"];
	$crearNuevoAlimentacion -> tipobandas = $_POST["TipoBandas"];
	$crearNuevoAlimentacion -> bandasmedidas = $_POST["BandasMedidas"];
	$crearNuevoAlimentacion -> eje = $_POST["Eje"];
	$crearNuevoAlimentacion -> largobanda = $_POST["LargoBanda"];
	$crearNuevoAlimentacion -> tipommotor = $_POST["TipoMotor"];
	$crearNuevoAlimentacion -> tipodescanso = $_POST["TipoDescanso"];
    $crearNuevoAlimentacion -> imagen_alimentacion = $_FILES["imagenAlimentacion"];

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
	$actualizarAlimentacion -> descripcion = $_POST["Descripcion"];	
	$actualizarAlimentacion -> tipo = $_POST["TipoSprockets"];
	$actualizarAlimentacion -> cantidadsprockets = $_POST["CantidadSprockets"];
	$actualizarAlimentacion -> tipobandas = $_POST["TipoBandas"];
	$actualizarAlimentacion -> bandasmedidas = $_POST["BandasMedidas"];
	$actualizarAlimentacion -> largobanda = $_POST["LargoBanda"];

	$actualizarAlimentacion -> eje = $_POST["Eje"];
	$actualizarAlimentacion -> tipommotor = $_POST["TipoMotor"];
	$actualizarAlimentacion -> tipodescanso = $_POST["TipoDescanso"];
	$actualizarAlimentacion -> imagen_alimentacion = $_FILES["imagenAlimentacion"];
	$actualizarAlimentacion -> rutaActual = $_POST["rutaActual"];


	$actualizarAlimentacion -> actualizarAlimentacion();
}
if ($tipoOperacion == "eliminarAlimentacion") {
	$eliminarAlimentacion = new ajaxAlimentacion();
	$eliminarAlimentacion -> id_alimentacion = $_POST["id_alimentacion"];
	$eliminarCalidad -> imagen_calidad = $_POST["rutaImagen"];

	$eliminarAlimentacion -> eliminarAlimentacion();
}

?>