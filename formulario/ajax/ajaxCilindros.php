<?php
require_once "../controllers/cilindros.controller.php";
require_once "../models/cilindros.modelo.php";
Class ajaxCilindros {
	public function crearCilindros(){
		$datos = array(
						"nombre"=>$this->nombre,
						"diametro"=>$this->diametro,
						"largo"=>$this->largo,
						"materialcuerpo"=>$this->materialcuerpo,
						"materialvastago"=>$this->materialvastago,
						"medidahilo"=>$this->medidahilo,
						"precio"=>$this->precio,						
						"imagen"=>$this->imagen_cilindros
				
					);

		$respuesta = ControllerCilindros::ctrCrearCilindros($datos);
		echo $respuesta;
	}
	public function editarCilindros(){
		$id_cilindros = $this->id_cilindros;
		$respuesta = ControllerCilindros::ctrEditarCilindros($id_cilindros);
		$datos = array("id_cilindros"=>$respuesta["id_cilindros"],		
				        "nombre"=>$respuesta["nombre"],
				        "diametro"=>$respuesta["diametro"],
				        "largo"=>$respuesta["largo"],
				        "materialcuerpo"=>$respuesta["materialcuerpo"],
				        "materialvastago"=>$respuesta["materialvastago"],
				        "medidahilo"=>$respuesta["medidahilo"],
						"precio"=>miles($respuesta["precio"]),
				        "imagen"=>substr($respuesta["rutaImg"], 3)
						);
		echo json_encode($datos);
	}
	public function actualizarCilindros(){
		$datos = array( "id_cilindros"=>$this->id_cilindros,
						"nombre"=>$this->nombre,
						"diametro"=>$this->diametro,
						"largo"=>$this->largo,
						"materialcuerpo"=>$this->materialcuerpo,
						"materialvastago"=>$this->materialvastago,
						"medidahilo"=>$this->medidahilo,
						"precio"=>$this->precio,						
						"imagen"=>$this->imagen_cilindros,		
						"rutaActual"=>$this->rutaActual		
						);
		$respuesta = ControllerCilindros::ctrActualizarCilindros($datos);
		echo $respuesta;
	}
	public function eliminarCilindros(){
		$id_cilindros = $this->id_cilindros;
		$ruta = $this->imagen_cilindros;
		$respuesta = ControllerCilindros::ctrEliminarCilindros($id_cilindros,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertarcilindros") {
	$crearNuevoCilindros = new ajaxCilindros();
	$crearNuevoCilindros -> nombre = $_POST["Nombre"];
	$crearNuevoCilindros -> diametro = $_POST["Diametro"];
	$crearNuevoCilindros -> largo = $_POST["Largo"];
	$crearNuevoCilindros -> materialcuerpo = $_POST["MaterialCuerpo"];
	$crearNuevoCilindros -> materialvastago = $_POST["MaterialVastago"];
	$crearNuevoCilindros -> medidahilo = $_POST["MedidaHilo"];
	$crearNuevoCilindros -> precio = puntos($_POST["Precio"]);
    $crearNuevoCilindros -> imagen_cilindros = $_FILES["imagenCilindros"];
	$crearNuevoCilindros ->crearCilindros();
}

if ($tipoOperacion == "editarCilindros") {
	$editarCilindros = new ajaxCilindros();
	$editarCilindros -> id_cilindros = $_POST["id_cilindros"];
	$editarCilindros -> editarCilindros();
}
if ($tipoOperacion == "actualizarCilindros") {
	$actualizarCilindros = new ajaxCilindros();
	$actualizarCilindros -> id_cilindros = $_POST["id_cilindros"];
	$actualizarCilindros -> nombre = $_POST["Nombre"];
	$actualizarCilindros -> diametro = $_POST["Diametro"];
	$actualizarCilindros -> largo = $_POST["Largo"];
	$actualizarCilindros -> materialcuerpo = $_POST["MaterialCuerpo"];
	$actualizarCilindros -> materialvastago = $_POST["MaterialVastago"];
	$actualizarCilindros -> medidahilo = $_POST["MedidaHilo"];
	$actualizarCilindros -> precio = puntos($_POST["Precio"]);
    $actualizarCilindros -> imagen_cilindros = $_FILES["imagenCilindros"];
	$actualizarCilindros -> rutaActual = $_POST["rutaActual"];
	$actualizarCilindros -> actualizarCilindros();
}
if ($tipoOperacion == "eliminarCilindros") {
	$eliminarCilindros = new ajaxCilindros();
	$eliminarCilindros -> id_cilindros = $_POST["id_cilindros"];
	$eliminarCilindros -> imagen_cilindros = $_POST["rutaImagen"];
	$eliminarCilindros -> eliminarCilindros();
}
function puntos($s)
{
$s= str_replace('.','', $s); 
return $s;
}
function miles($m){
$m=number_format($m, 0, ',', '.');
return $m;

}
?>