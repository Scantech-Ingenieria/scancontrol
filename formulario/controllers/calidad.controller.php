<?php
error_reporting(0);

Class ControllerCalidad {
	public function listarCalidadCtr() {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::listarCalidadMdl($tabla);
		return $respuesta;
	}
	public function listarCalidadSprocketsCtr() {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::listarCalidadSprocketsMdl($tabla);
		return $respuesta;
	}

	public function listarCalidadBandasCtr() {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::listarCalidadBandasMdl($tabla);
		return $respuesta;
	}
	public function listarCalidadRodamientosCtr() {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::listarCalidadRodamientosMdl($tabla);
		return $respuesta;
	}
	public function listarCalidadSensorCtr() {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::listarCalidadSensorMdl($tabla);
		return $respuesta;
	}
	public function listarCalidadCilindrosCtr() {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::listarCalidadCilindrosMdl($tabla);
		return $respuesta;
	}public function listarCalidadMotorCtr() {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::listarCalidadMotorMdl($tabla);
		return $respuesta;
	}
		public function listarCalidadRegistroCtr() {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::listarCalidadRegistroMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearCalidad($datos) {
		$tabla = "estacion_calidad";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}else{
list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/estacioncalidad";
		if($datos["imagen"]["type"] == "image/jpeg"){
			$rutaImagen = $directorio."/".md5($datos["imagen"]["tmp_name"]).".jpeg";
			$origen = imagecreatefromjpeg($datos["imagen"]["tmp_name"]);
			$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
			imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
			imagejpeg($destino, $rutaImagen);
		}
		if($datos["imagen"]["type"] == "image/png"){
			$rutaImagen = $directorio."/".md5($datos["imagen"]["name"]).".png";
			$origen = imagecreatefrompng($datos["imagen"]["tmp_name"]);
			$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
			imagealphablending($destino, FALSE);
			imagesavealpha($destino, TRUE);
			imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
			imagepng($destino, $rutaImagen);
		}
	}
		$respuesta = ModeloCalidad::mdlCrearCalidad($tabla, $datos,$rutaImagen);
		return $respuesta;
	}
	static public function ctrEliminarCalidad($id_calidad,$ruta) {
		$tabla = "estacion_calidad";
			if ($ruta!='') {
		unlink($ruta);
		}
$respuesta = ModeloCalidad::mdlEliminarCalidad($tabla, $id_calidad);
		return $respuesta;
	}
	static public function ctrEditarCalidad($id_calidad) {
		$tabla = "estacion_calidad";
		$respuesta = ModeloCalidad::mdlEditarCalidad($tabla, $id_calidad);
		return $respuesta;
	}
	static public function ctrActualizarCalidad($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "estacion_calidad";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/estacioncalidad";
			if($datos["imagen"]["type"] == "image/jpeg"){
				$rutaImagen = $directorio."/".md5($datos["imagen"]["tmp_name"]).".jpeg";
				$origen = imagecreatefromjpeg($datos["imagen"]["tmp_name"]);
				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
				imagejpeg($destino, $rutaImagen);
			}
			if($datos["imagen"]["type"] == "image/png"){
				$rutaImagen = $directorio."/".md5($datos["imagen"]["name"]).".png";
				$origen = imagecreatefrompng($datos["imagen"]["tmp_name"]);
				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
				imagealphablending($destino, FALSE);
				imagesavealpha($destino, TRUE);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
				imagepng($destino, $rutaImagen);
			}
		}
		$respuesta = ModeloCalidad::mdlActualizarCalidad($tabla, $datos, $rutaImagen);
		return $respuesta;
	}
}
?>