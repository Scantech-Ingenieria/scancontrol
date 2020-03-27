<?php
require_once "../controllers/tableroneumatico.controller.php";
require_once "../models/tableroneumatico.modelo.php";

Class ajaxTableroneumatico {
	public function crearTableroneumatico(){
		$datos = array(
			            "altura"=>$this->altura,
						"ancho"=>$this->ancho,
						"fondo"=>$this->fondo,
						"cantidadautomaticos"=>$this->cantidadautomaticos,
						"tipoautomaticos"=>$this->tipoautomaticos,
						"descripcionautomaticos"=>$this->descripcionautomaticos,
						"cantidadfuentepoder"=>$this->cantidadfuentepoder,
						"tipofuentepoder"=>$this->tipofuentepoder,
						"descripcionfuentepoder"=>$this->descripcionfuentepoder,
						"tipomanifold"=>$this->tipomanifold,
						"cantidadplc"=>$this->cantidadplc,
						"tipoplc"=>$this->tipoplc,
						"imagen"=>$this->imagen_tableroneumatico
					);

		$respuesta = ControllerTableroneumatico::ctrCrearTableroneumatico($datos);
		echo $respuesta;
	}
	public function editarTableroneumatico(){
		$id_tableroneumatico = $this->id_tableroneumatico;
		$respuesta = ControllerTableroneumatico::ctrEditarTableroneumatico($id_tableroneumatico);
		$datos = array("id_tableroneumatico"=>$respuesta["id_tableroneumatico"],
						"altura"=>$respuesta["altura"], 
						  "ancho"=>$respuesta["ancho"],
				          "fondo"=>$respuesta["fondo"],
				        "imagen"=>substr($respuesta["rutaImg"], 3)
						);


		echo json_encode($datos);
	}
	public function editarTableroautomaticos(){
		$id_tableroneumatico = $this->id_tableroneumatico;
		$respuesta = ControllerTableroneumatico::ctrEditarTableroautomaticos($id_tableroneumatico);

	echo json_encode($respuesta);
	}
		public function editarTablerofuente(){
		$id_tableroneumatico = $this->id_tableroneumatico;
		$respuesta = ControllerTableroneumatico::ctrEditarTablerofuente($id_tableroneumatico);

	echo json_encode($respuesta);
	}
		public function editarTableroplc(){
		$id_tableroneumatico = $this->id_tableroneumatico;
		$respuesta = ControllerTableroneumatico::ctrEditarTableroplc($id_tableroneumatico);

	echo json_encode($respuesta);
	}
		public function editarTableromanifold(){
		$id_tableroneumatico = $this->id_tableroneumatico;
		$respuesta = ControllerTableroneumatico::ctrEditarTableromanifold($id_tableroneumatico);

	echo json_encode($respuesta);
	}
	public function actualizarTableroneumatico(){
		$datos = array( "id_tableroneumatico"=>$this->id_tableroneumatico,
				        "idautomatico"=>$this->idautomatico,
				        "idfuente"=>$this->idfuente,
				        "idmanifold"=>$this->idmanifold,
				        "idplc"=>$this->idplc,
				        "altura"=>$this->altura,
						"ancho"=>$this->ancho,
						"fondo"=>$this->fondo,
						"cantidadautomaticos"=>$this->cantidadautomaticos,
						"cantidadplc"=>$this->cantidadplc,
						"cantidadfuentepoder"=>$this->cantidadfuentepoder,
						"tipoautomaticos"=>$this->tipoautomaticos,
						"tipofuentepoder"=>$this->tipofuentepoder,
						"tipomanifold"=>$this->tipomanifold,
						"tipoplc"=>$this->tipoplc,
						"descripcionautomaticos"=>$this->descripcionautomaticos,
						"descripcionfuentepoder"=>$this->descripcionfuentepoder,
		                "cantidadautomaticoseditar"=>$this->cantidadautomaticoseditar,
						"cantidadplceditar"=>$this->cantidadplceditar,
						"cantidadfuentepodereditar"=>$this->cantidadfuentepodereditar,
						"descripcionfuentepodereditar"=>$this->descripcionfuentepodereditar,
						"descripcionautomaticoseditar"=>$this->descripcionautomaticoseditar,
						"tipoautomaticoseditar"=>$this->tipoautomaticoseditar,
		                 "tipofuentepodereditar"=>$this->tipofuentepodereditar,
						"tipomanifoldeditar"=>$this->tipomanifoldeditar,
						"tipoplceditar"=>$this->tipoplceditar,
						"imagen"=>$this->imagen_tableroneumatico,
						"rutaActual"=>$this->rutaActual
						);
		$respuesta = ControllerTableroneumatico::ctrActualizarTableroneumatico($datos);
		echo $respuesta;
	}
	public function eliminarTableroneumatico(){
		$id_tableroneumatico = $this->id_tableroneumatico;
		$ruta = $this->imagen_tableroneumatico;
		$respuesta = ControllerTableroneumatico::ctrEliminarTableroneumatico($id_tableroneumatico,$ruta);
		echo $respuesta;
	}
		public function eliminarTautomatico(){
		$id_tautomatico = $this->id_tautomatico;
		$respuesta = ControllerTableroneumatico::ctrEliminarTautomatico($id_tautomatico);
		echo $respuesta;
	}
		public function eliminarTfuente(){
		$id_tfuente = $this->id_tfuente;
		$respuesta = ControllerTableroneumatico::ctrEliminarTfuente($id_tfuente);
		echo $respuesta;
	}
		public function eliminarTvdf(){
		$id_tvdf = $this->id_tvdf;
		$respuesta = ControllerTableroneumatico::ctrEliminarTvdf($id_tvdf);
		echo $respuesta;
	}

}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertartableroneumatico") {
	$crearNuevoTableroneumatico = new ajaxTableroneumatico();
	$crearNuevoTableroneumatico -> altura = $_POST["Altura"];
	$crearNuevoTableroneumatico -> ancho = $_POST["Ancho"];
	$crearNuevoTableroneumatico -> fondo = $_POST["Fondo"];
	$crearNuevoTableroneumatico -> cantidadautomaticos = $_POST["Cantidadautomaticos"];
	$crearNuevoTableroneumatico -> tipoautomaticos = $_POST["Tipoautomaticos"];
	$crearNuevoTableroneumatico -> descripcionautomaticos = $_POST["DescripcionAutomatico"];
	$crearNuevoTableroneumatico -> cantidadfuentepoder = $_POST["CantidadFuentePoder"];
	$crearNuevoTableroneumatico -> tipofuentepoder = $_POST["TipoFuentePoder"];
	$crearNuevoTableroneumatico -> descripcionfuentepoder = $_POST["DescripcionFuentePoder"];
	$crearNuevoTableroneumatico -> tipomanifold = $_POST["TipoManifold"];
	$crearNuevoTableroneumatico -> cantidadplc = $_POST["CantidadPlc"];
	$crearNuevoTableroneumatico -> tipoplc = $_POST["TipoPlc"];
    $crearNuevoTableroneumatico -> imagen_tableroneumatico = $_FILES["imagenTableroneumatico"];
	$crearNuevoTableroneumatico ->crearTableroneumatico();
}

if ($tipoOperacion == "editarTableroneumatico") {
	$editarTableroneumatico = new ajaxTableroneumatico();
	$editarTableroneumatico -> id_tableroneumatico = $_POST["id_tableroneumatico"];
	$editarTableroneumatico -> editarTableroneumatico();
}
if ($tipoOperacion == "editarTableroautomaticos") {
	$editarTableroautomaticos = new ajaxTableroneumatico();
	$editarTableroautomaticos -> id_tableroneumatico = $_POST["id_tableroneumatico"];
	$editarTableroautomaticos -> editarTableroautomaticos();
}
if ($tipoOperacion == "editarTablerofuente") {
	$editarTablerofuente = new ajaxTableroneumatico();
	$editarTablerofuente -> id_tableroneumatico = $_POST["id_tableroneumatico"];
	$editarTablerofuente -> editarTablerofuente();
}
if ($tipoOperacion == "editarTableroplc") {
	$editarTableroplc = new ajaxTableroneumatico();
	$editarTableroplc -> id_tableroneumatico = $_POST["id_tableroneumatico"];
	$editarTableroplc -> editarTableroplc();
}
if ($tipoOperacion == "editarTableromanifold") {
	$editarTableromanifold = new ajaxTableroneumatico();
	$editarTableromanifold -> id_tableroneumatico = $_POST["id_tableroneumatico"];
	$editarTableromanifold -> editarTableromanifold();
}
if ($tipoOperacion == "actualizarTableroneumatico") {
	$actualizarTableroneumatico = new ajaxTableroneumatico();
	$actualizarTableroneumatico -> altura = $_POST["Altura"];
    $actualizarTableroneumatico -> ancho = $_POST["Ancho"];
	$actualizarTableroneumatico -> fondo = $_POST["Fondo"];
	$actualizarTableroneumatico -> id_tableroneumatico = $_POST["id_tableroneumatico"];
	$actualizarTableroneumatico -> idautomatico = $_POST["idAutomatico"];
	$actualizarTableroneumatico -> idfuente = $_POST["idFuente"];
	$actualizarTableroneumatico -> idmanifold = $_POST["idManifold"];
	$actualizarTableroneumatico -> idplc = $_POST["idPlc"];
	$actualizarTableroneumatico -> cantidadautomaticos = $_POST["Cantidadautomaticos"];
	$actualizarTableroneumatico -> cantidadfuentepoder = $_POST["CantidadFuentePoder"];
	$actualizarTableroneumatico -> tipoautomaticos = $_POST["Tipoautomaticos"];
	$actualizarTableroneumatico -> tipofuentepoder = $_POST["TipoFuentePoder"];
	$actualizarTableroneumatico -> tipomanifold = $_POST["TipoManifold"];
	$actualizarTableroneumatico -> tipoplc = $_POST["TipoPlc"];
	$actualizarTableroneumatico -> descripcionautomaticos = $_POST["DescripcionAutomatico"];
	$actualizarTableroneumatico -> descripcionfuentepoder = $_POST["DescripcionFuentePoder"];
	$actualizarTableroneumatico -> cantidadautomaticoseditar = $_POST["CantidadautomaticosEditar"];
	$actualizarTableroneumatico -> cantidadfuentepodereditar = $_POST["CantidadFuentePoderEditar"];
	$actualizarTableroneumatico -> cantidadplc = $_POST["CantidadPlc"];
		$actualizarTableroneumatico -> descripcionautomaticoseditar = $_POST["DescripcionAutomaticoEditar"];
	$actualizarTableroneumatico -> descripcionfuentepodereditar = $_POST["DescripcionFuentePoderEditar"];
	$actualizarTableroneumatico -> tipoautomaticoseditar = $_POST["TipoautomaticosEditar"];
	$actualizarTableroneumatico -> tipofuentepodereditar = $_POST["TipoFuentePoderEditar"];
	$actualizarTableroneumatico -> tipomanifoldeditar = $_POST["TipoManifoldEditar"];
	$actualizarTableroneumatico -> tipoplceditar = $_POST["TipoPlcEditar"];
	$actualizarTableroneumatico -> cantidadplceditar = $_POST["CantidadPlcEditar"];
    $actualizarTableroneumatico -> imagen_tableroneumatico = $_FILES["imagenTableroneumatico"];
	$actualizarTableroneumatico -> rutaActual = $_POST["rutaActual"];
	$actualizarTableroneumatico -> actualizarTableroneumatico();
}
if ($tipoOperacion == "eliminarTableroneumatico") {
	$eliminarTableroneumatico = new ajaxTableroneumatico();
	$eliminarTableroneumatico -> id_tableroneumatico = $_POST["id_tableroneumatico"];
	$eliminarTableroneumatico -> imagen_tableroneumatico = $_POST["rutaImagen"];
	$eliminarTableroneumatico -> eliminarTableroneumatico();
}
if ($tipoOperacion == "eliminarTautomatico") {
	$eliminarTautomatico = new ajaxTableroneumatico();
	$eliminarTautomatico -> id_tautomatico = $_POST["id_automatico"];
	$eliminarTautomatico -> eliminarTautomatico();
}

if ($tipoOperacion == "eliminarTfuente") {
	$eliminarTfuente = new ajaxTableroneumatico();
	$eliminarTfuente -> id_tfuente = $_POST["id_fuente"];
	$eliminarTfuente -> eliminarTfuente();
}

if ($tipoOperacion == "eliminarTvdf") {
	$eliminarTvdf = new ajaxTableroneumatico();
	$eliminarTvdf -> id_tvdf = $_POST["id_vdf"];
	$eliminarTvdf -> eliminarTvdf();
}
?>