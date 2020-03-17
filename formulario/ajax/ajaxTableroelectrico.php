<?php
require_once "../controllers/tableroelectricos.controller.php";
require_once "../models/tableroelectricos.modelo.php";
Class ajaxTableroelectrico {
	public function crearTableroelectrico(){
		$datos = array(
						"numeroserie"=>$this->numeroserie,
						"descripcion"=>$this->descripcion,
						"ancho"=>$this->ancho,
						"material"=>$this->material,
						"imagen"=>$this->imagen_tableroelectrico,
						"superficie"=>$this->superficie,
						"paso"=>$this->paso
					);

		$respuesta = ControllerTableroelectrico::ctrCrearTableroelectrico($datos);
		echo $respuesta;
	}
	public function editarTableroelectrico(){
		$id_tableroelectrico = $this->id_tableroelectrico;
		$respuesta = ControllerTableroelectrico::ctrEditarTableroelectrico($id_tableroelectrico);
		$datos = array("id_tableroelectrico"=>$respuesta["id_tableroelectrico"],
						"numeroserie"=>$respuesta["numero_serie"], 
						  "superficie"=>$respuesta["superficie"],
				          "paso"=>$respuesta["paso"],
						"descripcion"=>$respuesta["descripcion"],
				        "ancho"=>$respuesta["ancho"],
				        "material"=>$respuesta["material"],
				        "imagen"=>substr($respuesta["rutaImg"], 3)
						);
		echo json_encode($datos);
	}
	public function actualizarTableroelectrico(){
		$datos = array( "id_tableroelectrico"=>$this->id_tableroelectrico,
						"numeroserie"=>$this->numeroserie,
						"descripcion"=>$this->descripcion,
						"ancho"=>$this->ancho,
						"material"=>$this->material,
						"imagen"=>$this->imagen_tableroelectrico,		
						"rutaActual"=>$this->rutaActual,		
						"superficie"=>$this->superficie,
						"paso"=>$this->paso

						);
		$respuesta = ControllerTableroelectrico::ctrActualizarTableroelectrico($datos);
		echo $respuesta;
	}
	public function eliminarTableroelectrico(){
		$id_tableroelectrico = $this->id_tableroelectrico;
		$ruta = $this->imagen_tableroelectrico;
		$respuesta = ControllerTableroelectrico::ctrEliminarTableroelectrico($id_tableroelectrico,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertartableroelectrico") {
	$crearNuevoTableroelectrico = new ajaxTableroelectrico();
	$crearNuevoTableroelectrico -> superficie = $_POST["Superficie"];
	$crearNuevoTableroelectrico -> paso = $_POST["Paso"];
	$crearNuevoTableroelectrico -> numeroserie = $_POST["NumeroSerie"];
	$crearNuevoTableroelectrico -> descripcion = $_POST["DescripcionTableroelectrico"];
	$crearNuevoTableroelectrico -> ancho = $_POST["Ancho"];
	$crearNuevoTableroelectrico -> material = $_POST["Material"];
 $crearNuevoTableroelectrico -> imagen_tableroelectrico = $_FILES["imagenTableroelectrico"];
	$crearNuevoTableroelectrico ->crearTableroelectrico();
}

if ($tipoOperacion == "editarTableroelectrico") {
	$editarTableroelectrico = new ajaxTableroelectrico();
	$editarTableroelectrico -> id_tableroelectrico = $_POST["id_tableroelectrico"];
	$editarTableroelectrico -> editarTableroelectrico();
}
if ($tipoOperacion == "actualizarTableroelectrico") {
	$actualizarTableroelectrico = new ajaxTableroelectrico();
	$actualizarTableroelectrico -> id_tableroelectrico = $_POST["id_tableroelectrico"];
	$actualizarTableroelectrico -> numeroserie = $_POST["NumeroSerie"];
	$actualizarTableroelectrico -> descripcion = $_POST["DescripcionTableroelectrico"];
	$actualizarTableroelectrico -> ancho = $_POST["Ancho"];
	$actualizarTableroelectrico -> material = $_POST["Material"];
	$actualizarTableroelectrico -> imagen_tableroelectrico = $_FILES["imagenTableroelectrico"];
	$actualizarTableroelectrico -> rutaActual = $_POST["rutaActual"];
	$actualizarTableroelectrico -> superficie = $_POST["Superficie"];
	$actualizarTableroelectrico -> paso = $_POST["Paso"];
	$actualizarTableroelectrico -> actualizarTableroelectrico();
}
if ($tipoOperacion == "eliminarTableroelectrico") {
	$eliminarTableroelectrico = new ajaxTableroelectrico();
	$eliminarTableroelectrico -> id_tableroelectrico = $_POST["id_tableroelectrico"];
	$eliminarTableroelectrico -> imagen_tableroelectrico = $_POST["rutaImagen"];
	$eliminarTableroelectrico -> eliminarTableroelectrico();
}

?>