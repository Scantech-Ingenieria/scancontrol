<?php
require_once "../controllers/calidad.controller.php";
require_once "../models/calidad.modelo.php";
Class ajaxCalidad {


	public function crearCalidad(){
		$datos = array(
						"puestos"=>$this->puestos,
						"tiposprockets"=>$this->tiposprockets,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"medidabanda"=>$this->medidabanda,
						"eje"=>$this->eje,
						"cilindros"=>$this->cilindros,
						"tipobotoneras"=>$this->tipobotoneras,
						"cantidadbotoneras"=>$this->cantidadbotoneras,
						"tiposensores"=>$this->tiposensores,
						"cantidadsensores"=>$this->cantidadsensores,
						"racors"=>$this->racors,
						"tipomotor"=>$this->tipomotor,
						"tipodescanso"=>$this->tipodescanso,
						"imagen"=>$this->imagen_calidad

					);

		$respuesta = ControllerCalidad::ctrCrearCalidad($datos);
		echo $respuesta;
	}
	public function editarCalidad(){
		$id_calidad = $this->id_calidad;
		$respuesta = ControllerCalidad::ctrEditarCalidad($id_calidad);
		$datos = array("id_calidad"=>$respuesta["id_calidad"],	
						"puestos"=>$respuesta["numero_puestos"],
						"tipo_sprockets"=>$respuesta["tipo_sprockets"],
						"cantidad_sprockets"=>$respuesta["cantidad_sprockets"],
						"tipo_banda"=>$respuesta["tipo_banda"],
						"medida_banda"=>$respuesta["medida_banda"],
						"eje"=>$respuesta["eje"],
						"cilindros"=>$respuesta["cilindros"],
						"tipo_botoneras"=>$respuesta["tipo_botoneras"],
						"cantidad_botoneras"=>$respuesta["cantidad_botoneras"],
						"tipo_sensores"=>$respuesta["tipo_sensores"],
						"cantidad_sensores"=>$respuesta["cantidad_sensores"],
						"racors"=>$respuesta["racors"],
						"tipomotor"=>$respuesta["tipo_motor"],
						"tipo_descanso"=>$respuesta["tipo_descanso"],
						"imagen"=>substr($respuesta["rutaImg"], 3)

						);

		echo json_encode($datos);
	}
	public function actualizarCalidad(){
		$datos = array( "id_calidad"=>$this->id_calidad,
						"puestos"=>$this->puestos,
						"tiposprockets"=>$this->tiposprockets,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"medidabanda"=>$this->medidabanda,
						"eje"=>$this->eje,
						"cilindros"=>$this->cilindros,
						"tipobotoneras"=>$this->tipobotoneras,
						"cantidadbotoneras"=>$this->cantidadbotoneras,
						"tiposensores"=>$this->tiposensores,
						"cantidadsensores"=>$this->cantidadsensores,
						"racors"=>$this->racors,
						"tipomotor"=>$this->tipomotor,		
						"tipodescanso"=>$this->tipodescanso,
						"imagen"=>$this->imagen_calidad,		
						"rutaActual"=>$this->rutaActual	
						);

		$respuesta = ControllerCalidad::ctrActualizarCalidad($datos);
		echo $respuesta;
	}
	public function eliminarCalidad(){
		$id_calidad = $this->id_calidad;
		$ruta = $this->imagen_calidad;

		$respuesta = ControllerCalidad::ctrEliminarCalidad($id_calidad,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertarcalidad") {
	$crearNuevoCalidad = new ajaxCalidad();
	$crearNuevoCalidad -> puestos = $_POST["Puestos"];
	$crearNuevoCalidad -> tiposprockets = $_POST["TipoSprockets"];
	$crearNuevoCalidad -> cantidadsprockets = $_POST["CantidadSprocket"];
	$crearNuevoCalidad -> tipobandas = $_POST["TipoBandas"];
	$crearNuevoCalidad -> medidabanda = $_POST["MedidaBanda"];
	$crearNuevoCalidad -> eje = $_POST["Eje"];
	$crearNuevoCalidad -> cilindros = $_POST["TipoCilindros"];
	$crearNuevoCalidad -> tipobotoneras = $_POST["TipoBotoneras"];
	$crearNuevoCalidad -> cantidadbotoneras = $_POST["CantidadBotoneras"];
	$crearNuevoCalidad -> tiposensores = $_POST["TipoSensores"];
	$crearNuevoCalidad -> cantidadsensores = $_POST["CantidadSensores"];
	$crearNuevoCalidad -> racors = $_POST["Racors"];
	$crearNuevoCalidad -> tipomotor = $_POST["TipoMotor"];
	$crearNuevoCalidad -> tipodescanso = $_POST["TipoDescanso"];
    $crearNuevoCalidad -> imagen_calidad = $_FILES["imagenCalidad"];
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
	$actualizarCalidad -> tiposprockets = $_POST["TipoSprockets"];
	$actualizarCalidad -> cantidadsprockets = $_POST["CantidadSprocket"];
	$actualizarCalidad -> tipobandas = $_POST["TipoBandas"];
	$actualizarCalidad -> medidabanda = $_POST["MedidaBanda"];
	$actualizarCalidad -> eje = $_POST["Eje"];
	$actualizarCalidad -> cilindros = $_POST["TipoCilindros"];
	$actualizarCalidad -> tipobotoneras = $_POST["TipoBotoneras"];
	$actualizarCalidad -> cantidadbotoneras = $_POST["CantidadBotoneras"];
	$actualizarCalidad -> tiposensores = $_POST["TipoSensores"];
	$actualizarCalidad -> cantidadsensores = $_POST["CantidadSensores"];
	$actualizarCalidad -> racors = $_POST["Racors"];
	$actualizarCalidad -> tipomotor = $_POST["TipoMotor"];
	$actualizarCalidad -> tipodescanso= $_POST["TipoDescanso"];
    $actualizarCalidad -> imagen_calidad = $_FILES["imagenCalidad"];
	$actualizarCalidad -> rutaActual = $_POST["rutaActual"];

	$actualizarCalidad -> actualizarCalidad();
}
if ($tipoOperacion == "eliminarCalidad") {
	$eliminarCalidad = new ajaxCalidad();
	$eliminarCalidad -> id_calidad = $_POST["id_calidad"];
	$eliminarCalidad -> imagen_calidad = $_POST["rutaImagen"];

	$eliminarCalidad -> eliminarCalidad();
}

?>