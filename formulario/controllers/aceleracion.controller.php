<?php
error_reporting(0);

Class ControllerAceleracion {
	public function listarAceleracionCtr() {
		$tabla = "unidad_acel";
		$respuesta = ModeloAceleracion::listarAceleracionMdl($tabla);
		return $respuesta;
	}
	public function listarAceleracionRegistroCtr() {
		$tabla = "unidad_acel";
		$respuesta = ModeloAceleracion::listarAceleracionRegistroMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearAceleracion($datos) {
		$tabla = "unidad_acel";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}else{
list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/unidadaceleracion";
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
		$respuesta = ModeloAceleracion::mdlCrearAceleracion($tabla, $datos, $rutaImagen);
		return $respuesta;
	}
	static public function ctrEliminarAceleracion($id_aceleracion,$ruta) {
		$tabla = "unidad_acel";
					if ($ruta!='') {
		unlink($ruta);
		}
$respuesta = ModeloAceleracion::mdlEliminarAceleracion($tabla, $id_aceleracion);
		return $respuesta;
	}
	static public function ctrEditarAceleracion($id_aceleracion) {
		$tabla = "unidad_acel";
		$respuesta = ModeloAceleracion::mdlEditarAceleracion($tabla, $id_aceleracion);
		return $respuesta;
	}
	static public function ctrActualizarAceleracion($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "unidad_acel";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/unidadaceleracion";
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
		$respuesta = ModeloAceleracion::mdlActualizarAceleracion($tabla, $datos, $rutaImagen);
		return $respuesta;
	}
}


?>