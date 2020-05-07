<?php
require_once "../controllers/plc.controller.php";
require_once "../models/plc.modelo.php";
Class ajaxPlc {
	public function crearPlc(){
		$datos = array(
						"modelo"=>$this->modelo,
						"descripcion"=>$this->descripcion,
						"precio"=>$this->precio,					
						"imagen"=>$this->imagen_plc
				
					);

		$respuesta = ControllerPlc::ctrCrearPlc($datos);
		echo $respuesta;
	}
	public function editarPlc(){
		$id_plc = $this->id_plc;
		$respuesta = ControllerPlc::ctrEditarPlc($id_plc);
		$datos = array("id_plc"=>$respuesta["id_plc"],		
				        "modelo"=>$respuesta["modelo"],
				        "descripcion"=>$respuesta["descripcion"],
						"precio"=>miles($respuesta["precio"]),			        
				        "imagen"=>substr($respuesta["rutaImg"], 3)
						);
		echo json_encode($datos);
	}
	public function actualizarPlc(){
		$datos = array( "id_plc"=>$this->id_plc,
						"modelo"=>$this->modelo,
						"descripcion"=>$this->descripcion,
						"precio"=>$this->precio,
						"imagen"=>$this->imagen_plc,		
						"rutaActual"=>$this->rutaActual		
						);
		$respuesta = ControllerPlc::ctrActualizarPlc($datos);
		echo $respuesta;
	}
	public function eliminarPlc(){
		$id_plc = $this->id_plc;
		$ruta = $this->imagen_plc;
		$respuesta = ControllerPlc::ctrEliminarPlc($id_plc,$ruta);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertarplc") {
	$crearNuevoPlc = new ajaxPlc();
	$crearNuevoPlc -> modelo = $_POST["Modelo"];
	$crearNuevoPlc -> descripcion = $_POST["Descripcion"];
	$crearNuevoPlc -> precio = puntos($_POST["Precio"]);

    $crearNuevoPlc -> imagen_plc = $_FILES["imagenPlc"];
	$crearNuevoPlc ->crearPlc();
}

if ($tipoOperacion == "editarPlc") {
	$editarPlc = new ajaxPlc();
	$editarPlc -> id_plc = $_POST["id_plc"];
	$editarPlc -> editarPlc();
}
if ($tipoOperacion == "actualizarPlc") {
	$actualizarPlc = new ajaxPlc();
	$actualizarPlc -> id_plc = $_POST["id_plc"];
	$actualizarPlc -> modelo = $_POST["Modelo"];
	$actualizarPlc -> descripcion = $_POST["Descripcion"];
	$actualizarPlc -> precio = puntos($_POST["Precio"]);

    $actualizarPlc -> imagen_plc = $_FILES["imagenPlc"];
	$actualizarPlc -> rutaActual = $_POST["rutaActual"];
	$actualizarPlc -> actualizarPlc();
}
if ($tipoOperacion == "eliminarPlc") {
	$eliminarPlc = new ajaxPlc();
	$eliminarPlc -> id_plc = $_POST["id_plc"];
	$eliminarPlc -> imagen_plc = $_POST["rutaImagen"];
	$eliminarPlc -> eliminarPlc();
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