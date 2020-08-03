<?php
require_once "../controllers/pesaje.controller.php";
require_once "../models/pesaje.modelo.php";
Class ajaxPesaje {
public function crearPesaje(){
		$datos = array(
						"descripcion"=>$this->descripcion,			
						"tiposensores"=>$this->tiposensores,
						"cantidadsensores"=>$this->cantidadsensores,
						"tiposprockets"=>$this->tiposprockets,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"eje"=>$this->eje,
						"tipomotor"=>$this->tipomotor,
						"tiporodamientos"=>$this->tiporodamientos,
						"entradaalto"=>$this->entradaalto,
						"entradaancho"=>$this->entradaancho,
						"entradaespesor"=>$this->entradaespesor,
						"pesajealto"=>$this->pesajealto,
						"pesajeancho"=>$this->pesajeancho,
						"pesajeespesor"=>$this->pesajeespesor,
						"salidaalto"=>$this->salidaalto,
						"salidaancho"=>$this->salidaancho,
						"salidaespesor"=>$this->salidaespesor,
						"tableroelectrico"=>$this->tableroelectrico,
						"tableroneumatico"=>$this->tableroneumatico,
						"imagen"=>$this->imagen
					);

		$respuesta = ControllerPesaje::ctrCrearPesaje($datos);
		echo $respuesta;
	}
	public function editarPesaje(){
		$id_pesaje = $this->id_pesaje;

		$respuesta = ControllerPesaje::ctrEditarPesaje($id_pesaje);

		$datos = array("id_unidad_pesaje"=>$respuesta["id_unidad_pesaje"],
						"descripcion"=>$respuesta["descripcion"],
						"tipo_sensores"=>$respuesta["tipo_sensores"],
						"cantidad_sensores"=>$respuesta["cantidad_sensores"],
						"tipo_sprockets"=>$respuesta["tipo_sprocket"],
						"cantidad_sprockets"=>$respuesta["cantidad_sprocket"],
						"banda_modular_tipo"=>$respuesta["tipo_banda"],
						"banda_medidas"=>$respuesta["medida_banda"],
						"eje"=>$respuesta["eje"],
						"tipo_motor"=>$respuesta["tipo_motor"],
						"tipo_rodamientos"=>$respuesta["tipo_rodamientos"],
						"entradaalto"=>$respuesta["entradaalto"],
						"entradaancho"=>$respuesta["entradaancho"],
						"entradaespesor"=>$respuesta["entradaespesor"],
						"pesajealto"=>$respuesta["pesajealto"],
						"pesajeancho"=>$respuesta["pesajeancho"],
						"pesajeespesor"=>$respuesta["pesajeespesor"],
						"salidaalto"=>$respuesta["salidaalto"],
						"salidaancho"=>$respuesta["salidaancho"],
						"salidaespesor"=>$respuesta["salidaespesor"],
						"tableroelectrico"=>$respuesta["tableroelectrico"],
						"tableroneumatico"=>$respuesta["tableroneumatico"],
						"imagen"=>substr($respuesta["rutaImg"], 3)



						);
		echo json_encode($datos);
	}
	public function actualizarPesaje(){
		$datos = array( "id_pesaje"=>$this->id_pesaje,
						"descripcion"=>$this->descripcion,						
			            "tiposensores"=>$this->tiposensores,
						"cantidadsensores"=>$this->cantidadsensores,
						"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"eje"=>$this->eje,
						"tipomotor"=>$this->tipomotor,
						"tiporodamientos"=>$this->tiporodamientos,
						"entradaalto"=>$this->entradaalto,
						"entradaancho"=>$this->entradaancho,
						"entradaespesor"=>$this->entradaespesor,
						"pesajealto"=>$this->pesajealto,
						"pesajeancho"=>$this->pesajeancho,
						"pesajeespesor"=>$this->pesajeespesor,
						"salidaalto"=>$this->salidaalto,
						"salidaancho"=>$this->salidaancho,
						"salidaespesor"=>$this->salidaespesor,
						"tableroelectrico"=>$this->tableroelectrico,
						"tableroneumatico"=>$this->tableroneumatico,
	                     "imagen"=>$this->imagen_pesaje,		
						"rutaActual"=>$this->rutaActual	
						);
		$respuesta = ControllerPesaje::ctrActualizarPesaje($datos);
		echo $respuesta;
	}
	public function eliminarPesaje(){
		$id_pesaje = $this->id_pesaje;
			$ruta = $this->imagen_descarga;
		
		$respuesta = ControllerPesaje::ctrEliminarPesaje($id_pesaje,$ruta);
	echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarpesaje") {
	$crearNuevoPesaje = new ajaxPesaje();
	$crearNuevoPesaje -> descripcion = $_POST["Descripcion"];
	$crearNuevoPesaje -> tiposensores = $_POST["TipoSensores"];
	$crearNuevoPesaje -> cantidadsensores = $_POST["CantidadSensores"];
	$crearNuevoPesaje -> tiposprockets = $_POST["TipoSprockets"];
	$crearNuevoPesaje -> cantidadsprockets = $_POST["CantidadSprockets"];
	$crearNuevoPesaje -> tipobandas = $_POST["TipoBandas"];
	$crearNuevoPesaje -> bandasmedidas = $_POST["BandasMedidas"];
	$crearNuevoPesaje -> eje = $_POST["Eje"];
	$crearNuevoPesaje -> tipomotor = $_POST["TipoMotor"];
	$crearNuevoPesaje -> tiporodamientos = $_POST["TipoDescanso"];
	$crearNuevoPesaje -> entradaalto = $_POST["EntradaAlto"];
	$crearNuevoPesaje -> entradaancho = $_POST["EntradaAncho"];
	$crearNuevoPesaje -> entradaespesor = $_POST["EntradaEspesor"];
	$crearNuevoPesaje -> pesajealto = $_POST["PesajeAlto"];
	$crearNuevoPesaje -> pesajeancho = $_POST["PesajeAncho"];
	$crearNuevoPesaje -> pesajeespesor = $_POST["PesajeEspesor"];
	$crearNuevoPesaje -> salidaalto = $_POST["SalidaAlto"];
	$crearNuevoPesaje -> salidaancho = $_POST["SalidaAncho"];
	$crearNuevoPesaje -> salidaespesor = $_POST["SalidaEspesor"];
	$crearNuevoPesaje -> tableroelectrico = $_POST["TableroElectrico"];
	$crearNuevoPesaje -> tableroneumatico = $_POST["TableroNeumatico"];
    $crearNuevoPesaje -> imagen= $_FILES["imagenPesaje"];
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
	$actualizarPesaje -> descripcion = $_POST["Descripcion"];
	$actualizarPesaje -> tiposensores = $_POST["TipoSensores"];
	$actualizarPesaje -> cantidadsensores = $_POST["CantidadSensores"];
	$actualizarPesaje -> tipo = $_POST["TipoSprockets"];
	$actualizarPesaje -> cantidadsprockets = $_POST["CantidadSprockets"];
	$actualizarPesaje -> tipobandas = $_POST["TipoBandas"];
	$actualizarPesaje -> bandasmedidas = $_POST["BandasMedidas"];
	$actualizarPesaje -> eje = $_POST["Eje"];
	$actualizarPesaje -> tipomotor = $_POST["TipoMotor"];
	$actualizarPesaje -> tiporodamientos = $_POST["TipoRodamientos"];
	$actualizarPesaje -> entradaalto = $_POST["AltoEntrada"];
	$actualizarPesaje -> entradaancho = $_POST["AnchoEntrada"];
	$actualizarPesaje -> entradaespesor = $_POST["EspesorEntrada"];
	$actualizarPesaje -> pesajealto = $_POST["AltoPesaje"];
	$actualizarPesaje -> pesajeancho = $_POST["AnchoPesaje"];
	$actualizarPesaje -> pesajeespesor = $_POST["EspesorPesaje"];
	$actualizarPesaje -> salidaalto = $_POST["AltoSalida"];
	$actualizarPesaje -> salidaancho = $_POST["AnchoSalida"];
	$actualizarPesaje -> salidaespesor = $_POST["EspesorSalida"];
	$actualizarPesaje -> tableroelectrico = $_POST["TableroElectrico"];
	$actualizarPesaje -> tableroneumatico = $_POST["TableroNeumatico"];
	$actualizarPesaje -> imagen_pesaje = $_FILES["imagenPesaje"];
	$actualizarPesaje -> rutaActual = $_POST["rutaActual"];
	$actualizarPesaje -> actualizarPesaje();
}
if ($tipoOperacion == "eliminarPesaje") {
	$eliminarPesaje = new ajaxPesaje();
	$eliminarPesaje -> id_pesaje = $_POST["id_pesaje"];
	$eliminarPesaje -> imagen_pesaje = $_POST["rutaImagen"];

	$eliminarPesaje -> eliminarPesaje();
}

?>