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
						"tipopaletas"=>$this->tipopaletas,
						"cantidadpaletas"=>$this->cantidadpaletas,
						"eje"=>$this->eje,
						"altura"=>$this->altura,
						"buffer"=>$this->buffer,
						"tipomotor"=>$this->tipomotor,
						"tipodescanso"=>$this->tipodescanso,
						"tipocilindro"=>$this->tipocilindro,
						"imagen"=>$this->imagen_descarga
				
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
						"tipo_paletas"=>$respuesta["tipo_paletas"],
						"cantidad_paletas"=>$respuesta["cantidad_paletas"],
						"eje"=>$respuesta["eje"],
						"altura"=>$respuesta["altura"],
						"buffer"=>$respuesta["buffer"],
						"tipo_motor"=>$respuesta["tipo_motor"],
						"tipo_descanso"=>$respuesta["tipo_descanso"],
						"tipo_cilindro"=>$respuesta["tipo_cilindro"],
						"imagen"=>substr($respuesta["rutaImg"], 3)
						
						);

		echo json_encode($datos);
	}
	public function actualizarDescarga(){
		$datos = array( "id_descarga"=>$this->id_descarga,
				"tipo"=>$this->tipo,
						"cantidadsprockets"=>$this->cantidadsprockets,
						"tipobandas"=>$this->tipobandas,
						"bandasmedidas"=>$this->bandasmedidas,
						"tipopaletas"=>$this->tipopaletas,
						"cantidadpaletas"=>$this->cantidadpaletas,
						"eje"=>$this->eje,
						"altura"=>$this->altura,
						"buffer"=>$this->buffer,
						"tipomotor"=>$this->tipomotor,
						"tipodescanso"=>$this->tipodescanso,
						"tipocilindro"=>$this->tipocilindro,
						"imagen"=>$this->imagen_descarga,		
						"rutaActual"=>$this->rutaActual	
					
						);

		$respuesta = ControllerDescarga::ctrActualizarDescarga($datos);
		echo $respuesta;
	}
	public function eliminarDescarga(){
		$id_descarga = $this->id_descarga;
			$ruta = $this->imagen_descarga;

		$respuesta = ControllerDescarga::ctrEliminarDescarga($id_descarga,$ruta);
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
	$crearNuevoDescarga -> tipopaletas = $_POST["TipoPaletas"];
	$crearNuevoDescarga -> cantidadpaletas = $_POST["CantidadPaletas"];
	$crearNuevoDescarga -> eje = $_POST["Eje"];
	$crearNuevoDescarga -> altura = $_POST["Altura"];
	$crearNuevoDescarga -> buffer = $_POST["Buffer"];
	$crearNuevoDescarga -> tipomotor = $_POST["TipoMotor"];
	$crearNuevoDescarga -> tipodescanso = $_POST["TipoDescanso"];
	$crearNuevoDescarga -> tipocilindro = $_POST["TipoCilindro"];
    $crearNuevoDescarga -> imagen_descarga = $_FILES["imagenDescarga"];

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
	$actualizarDescarga -> tipopaletas = $_POST["TipoPaletas"];
	$actualizarDescarga -> cantidadpaletas = $_POST["CantidadPaletas"];
	$actualizarDescarga -> eje = $_POST["Eje"];
	$actualizarDescarga -> altura = $_POST["Altura"];
	$actualizarDescarga -> buffer = $_POST["Buffer"];
	$actualizarDescarga -> tipomotor = $_POST["TipoMotor"];
	$actualizarDescarga -> tipodescanso = $_POST["TipoDescanso"];
	$actualizarDescarga -> tipocilindro = $_POST["TipoCilindro"];
	$actualizarDescarga -> imagen_descarga = $_FILES["imagenDescarga"];
	$actualizarDescarga -> rutaActual = $_POST["rutaActual"];
	$actualizarDescarga -> actualizarDescarga();
}
if ($tipoOperacion == "eliminarDescarga") {
	$eliminarDescarga = new ajaxDescarga();
	$eliminarDescarga -> id_descarga = $_POST["id_descarga"];
	$eliminarDescarga -> imagen_descarga = $_POST["rutaImagen"];

	$eliminarDescarga -> eliminarDescarga();
}

?>