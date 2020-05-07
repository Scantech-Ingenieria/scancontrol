<?php
error_reporting(0);

Class ControllerAlimentacion {
	public function listarAlimentacionCtr() {
		$tabla = "unidad_alim";
		$respuesta = ModeloAlimentacion::listarAlimentacionMdl($tabla);
		return $respuesta;
	}
	public function listarAlimentacionRegistroCtr() {
		$tabla = "unidad_alim";
		$respuesta = ModeloAlimentacion::listarAlimentacionRegistroMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearAlimentacion($datos) {
		$tabla = "unidad_alim";
				if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}else{
list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/unidadalimentacion";
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
		$respuesta = ModeloAlimentacion::mdlCrearAlimentacion($tabla, $datos,$rutaImagen);
		return $respuesta;
	}

	static public function ctrEliminarAlimentacion($id_alimentacion,$ruta) {
		$tabla = "unidad_alim";
				if ($ruta!='') {
		unlink($ruta);
		}
$respuesta = ModeloAlimentacion::mdlEliminarAlimentacion($tabla, $id_alimentacion);
		return $respuesta;
	}
	static public function ctrEditarAlimentacion($id_alimentacion) {
		$tabla = "unidad_alim";
		$respuesta = ModeloAlimentacion::mdlEditarAlimentacion($tabla, $id_alimentacion);
		return $respuesta;
	}
	static public function ctrActualizarAlimentacion($datos) {
		$tabla = "unidad_alim";
			if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/unidadalimentacion";
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
		$respuesta = ModeloAlimentacion::mdlActualizarAlimentacion($tabla, $datos, $rutaImagen);
		return $respuesta;
	}
}

?>