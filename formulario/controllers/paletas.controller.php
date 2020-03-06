<?php

Class ControllerPaletas {



	public function listarPaletasCtr() {
		$tabla = "paletas";
		$respuesta = ModeloPaletas::listarPaletasMdl($tabla);

		return $respuesta;
	}

	static public function ctrCrearPaletas($datos) {
		$tabla = "paletas";

		$respuesta = ModeloPaletas::mdlCrearPaletas($tabla, $datos);

		return $respuesta;

	}

	static public function ctrEliminarPaletas($id_paletas) {

		$tabla = "paletas";

$respuesta = ModeloPaletas::mdlEliminarPaletas($tabla, $id_paletas);


		return $respuesta;

	}

	static public function ctrEditarPaletas($id_paletas) {

		$tabla = "paletas";
		$respuesta = ModeloPaletas::mdlEditarPaletas($tabla, $id_paletas);


		return $respuesta;
	}

	static public function ctrActualizarPaletas($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "paletas";
		

		$respuesta = ModeloPaletas::mdlActualizarPaletas($tabla, $datos);

		return $respuesta;

	}
}


?>