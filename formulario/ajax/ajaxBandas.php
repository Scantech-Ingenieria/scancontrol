<?php
require_once "../controllers/bandas.controller.php";
require_once "../models/bandas.modelo.php";
Class ajaxBanda {
	public function crearBanda(){
		$datos = array(
						"numeroserie"=>$this->numeroserie,
						"descripcion"=>$this->descripcion,
						"ancho"=>$this->ancho,
						"material"=>$this->material,
						"imagen"=>$this->imagen_banda,
						"superficie"=>$this->superficie,
						"paso"=>$this->paso
					);

		$respuesta = ControllerBanda::ctrCrearBanda($datos);
		echo $respuesta;
	}
	public function editarBanda(){
		$id_banda = $this->id_banda;
		$respuesta = ControllerBanda::ctrEditarBanda($id_banda);
		$datos = array("id_banda"=>$respuesta["id_banda"],
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
	public function actualizarBanda(){
		$datos = array( "id_banda"=>$this->id_banda,
						"numeroserie"=>$this->numeroserie,
						"descripcion"=>$this->descripcion,
						"ancho"=>$this->ancho,
						"material"=>$this->material,
						"imagen"=>$this->imagen_banda,		
						"rutaActual"=>$this->rutaActual,		
						"superficie"=>$this->superficie,
						"paso"=>$this->paso

						);
		$respuesta = ControllerBanda::ctrActualizarBanda($datos);
		echo $respuesta;
	}
	public function eliminarBanda(){
		$id_banda = $this->id_banda;
		$ruta = $this->imagen_banda;
		$respuesta = ControllerBanda::ctrEliminarBanda($id_banda,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertarbanda") {
	$crearNuevoBanda = new ajaxBanda();
	$crearNuevoBanda -> superficie = $_POST["Superficie"];
	$crearNuevoBanda -> paso = $_POST["Paso"];
	$crearNuevoBanda -> numeroserie = $_POST["NumeroSerie"];
	$crearNuevoBanda -> descripcion = $_POST["DescripcionBanda"];
	$crearNuevoBanda -> ancho = $_POST["Ancho"];
	$crearNuevoBanda -> material = $_POST["Material"];
 $crearNuevoBanda -> imagen_banda = $_FILES["imagenBanda"];
	$crearNuevoBanda ->crearBanda();
}

if ($tipoOperacion == "editarBanda") {
	$editarBanda = new ajaxBanda();
	$editarBanda -> id_banda = $_POST["id_banda"];
	$editarBanda -> editarBanda();
}
if ($tipoOperacion == "actualizarBanda") {
	$actualizarBanda = new ajaxBanda();
	$actualizarBanda -> id_banda = $_POST["id_banda"];
	$actualizarBanda -> numeroserie = $_POST["NumeroSerie"];
	$actualizarBanda -> descripcion = $_POST["DescripcionBanda"];
	$actualizarBanda -> ancho = $_POST["Ancho"];
	$actualizarBanda -> material = $_POST["Material"];
	$actualizarBanda -> imagen_banda = $_FILES["imagenBanda"];
	$actualizarBanda -> rutaActual = $_POST["rutaActual"];
	$actualizarBanda -> superficie = $_POST["Superficie"];
	$actualizarBanda -> paso = $_POST["Paso"];
	$actualizarBanda -> actualizarBanda();
}
if ($tipoOperacion == "eliminarBanda") {
	$eliminarBanda = new ajaxBanda();
	$eliminarBanda -> id_banda = $_POST["id_banda"];
	$eliminarBanda -> imagen_banda = $_POST["rutaImagen"];
	$eliminarBanda -> eliminarBanda();
}

?>