<?php
error_reporting(0);

Class ControllerVdf {
	public function listarVdfCtr() {
		$tabla = "variador_frecuencia";
		$respuesta = ModeloVdf::listarVdfMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearVdf($datos) {
		$tabla = "variador_frecuencia";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}else{
list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/vdf";
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

		$respuesta = ModeloVdf::mdlCrearVdf($tabla, $datos,$rutaImagen);
		return $respuesta;
	}
	static public function ctrEliminarVdf($id_vdf,$ruta) {
		$tabla = "variador_frecuencia";
	if ($ruta!='') {
		unlink($ruta);
		}
$respuesta = ModeloVdf::mdlEliminarVdf($tabla, $id_vdf);

		return $respuesta;
	}
	static public function ctrEditarVdf($id_vdf) {
		$tabla = "variador_frecuencia";
		$respuesta = ModeloVdf::mdlEditarVdf($tabla, $id_vdf);
		return $respuesta;
	}
	static public function ctrActualizarVdf($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "variador_frecuencia";
			if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/vdf";
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
		$respuesta = ModeloVdf::mdlActualizarVdf($tabla, $datos, $rutaImagen);
		return $respuesta;

	}
}


?>