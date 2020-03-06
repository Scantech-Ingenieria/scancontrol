<?php

require_once "../controllers/paletas.controller.php";
require_once "../models/paletas.modelo.php";

Class ajaxPaletas {


	public function crearPaletas(){
		$datos = array(
						


						"tipopaletas"=>$this->tipopaletas,
						"medidapaletas"=>$this->medidapaletas,
						"medidabujes"=>$this->medidabujes,
						"medidahousing"=>$this->medidahousing,
						"medidaeje"=>$this->medidaeje,
						"medidabrazo"=>$this->medidabrazo,
						"cilindro"=>$this->cilindro,
						"racors"=>$this->racors


					





					);

		$respuesta = ControllerPaletas::ctrCrearPaletas($datos);

		echo $respuesta;
	}
	public function editarPaletas(){
		$id_paletas = $this->id_paletas;

		$respuesta = ControllerPaletas::ctrEditarPaletas($id_paletas);

		$datos = array("id_paletas"=>$respuesta["id_paletas"],
					
						"tipo_paleta"=>$respuesta["tipo_paleta"],
					
						"medida_paleta"=>$respuesta["medida_paleta"],
				        "medida_bujes_paleta"=>$respuesta["medida_bujes_paleta"],
				        "medidas_housing"=>$respuesta["medidas_housing"],			
				        "medidas_eje_paleta"=>$respuesta["medidas_eje_paleta"],
				        "medidas_brazo_leva"=>$respuesta["medidas_brazo_leva"],
				        "cilindrado"=>$respuesta["cilindrado"],
				        "racors"=>$respuesta["racors"]





						);

		echo json_encode($datos);

	}
	public function actualizarPaletas(){
		$datos = array( "id_paletas"=>$this->id_paletas,
						"tipopaletas"=>$this->tipopaletas,
						"medidapaletas"=>$this->medidapaletas,
						"medidabujes"=>$this->medidabujes,
						"medidahousing"=>$this->medidahousing,
						"medidaeje"=>$this->medidaeje,
						"medidabrazo"=>$this->medidabrazo,
						"cilindro"=>$this->cilindro,
						"racors"=>$this->racors
				
						);

		$respuesta = ControllerPaletas::ctrActualizarPaletas($datos);

		echo $respuesta;
		
	}
	public function eliminarPaletas(){
		$id_paletas = $this->id_paletas;


		$respuesta = ControllerPaletas::ctrEliminarPaletas($id_paletas);

		echo $respuesta;

	}

}

$tipoOperacion = $_POST["tipoOperacion"];

if($tipoOperacion == "insertarpaletas") {
	$crearNuevoPaletas = new ajaxPaletas();


	$crearNuevoPaletas -> tipopaletas = $_POST["TipoPaletas"];

	$crearNuevoPaletas -> medidapaletas = $_POST["MedidaPaletas"];
	$crearNuevoPaletas -> medidabujes = $_POST["MedidaBujes"];
	$crearNuevoPaletas -> medidahousing = $_POST["MedidaHousing"];


	$crearNuevoPaletas -> medidaeje = $_POST["MedidaEje"];
	$crearNuevoPaletas -> medidabrazo = $_POST["MedidaBrazoLeva"];
	$crearNuevoPaletas -> cilindro = $_POST["Clilindrado"];
	$crearNuevoPaletas -> racors = $_POST["Racors"];






	$crearNuevoPaletas ->crearPaletas();
}

if ($tipoOperacion == "editarPaletas") {
	$editarPaletas = new ajaxPaletas();
	$editarPaletas -> id_paletas = $_POST["id_paletas"];
	$editarPaletas -> editarPaletas();
}
if ($tipoOperacion == "actualizarPaletas") {
	$actualizarPaletas = new ajaxPaletas();


	$actualizarPaletas -> id_paletas = $_POST["id_paletas"];
	$actualizarPaletas -> tipopaletas = $_POST["TipoPaletas"];
	$actualizarPaletas -> medidapaletas = $_POST["MedidaPaletas"];
    $actualizarPaletas -> medidabujes = $_POST["MedidaBujes"];
	$actualizarPaletas -> medidahousing = $_POST["MedidaHousing"];
	$actualizarPaletas -> medidaeje = $_POST["MedidaEje"];
	$actualizarPaletas -> medidabrazo = $_POST["MedidaBrazoLeva"];
	$actualizarPaletas -> cilindro = $_POST["Clilindrado"];
	$actualizarPaletas -> racors = $_POST["Racors"];



	$actualizarPaletas -> actualizarPaletas();
}
if ($tipoOperacion == "eliminarPaletas") {
	$eliminarPaletas = new ajaxPaletas();
	$eliminarPaletas -> id_paletas = $_POST["id_paletas"];
	$eliminarPaletas -> eliminarPaletas();
}

?>