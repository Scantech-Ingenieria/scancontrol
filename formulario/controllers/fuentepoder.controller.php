<?php
error_reporting(0);

Class ControllerFuentePoder {
	public function listarFuentePoderCtr() {
		$tabla = "fuentepoder";
		$respuesta = ModeloFuentePoder::listarFuentePoderMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearFuentePoder($datos) {
		$tabla = "fuentepoder";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}else{
list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/fuentepoder";
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

		$respuesta = ModeloFuentePoder::mdlCrearFuentePoder($tabla, $datos,$rutaImagen);
		return $respuesta;
	}
	static public function ctrEliminarFuentePoder($id_fuentepoder,$ruta) {
		$tabla = "fuentepoder";
	if ($ruta!='') {
		unlink($ruta);
		}
		$respuesta = ModeloFuentePoder::mdlEliminarFuentePoder($tabla, $id_fuentepoder);
		
		return $respuesta;
	}
	static public function ctrEditarFuentePoder($id_fuentepoder) {
		$tabla = "fuentepoder";
		$respuesta = ModeloFuentePoder::mdlEditarFuentePoder($tabla, $id_fuentepoder);
		return $respuesta;
	}
	static public function ctrActualizarFuentePoder($datos) {
		$tabla = "fuentepoder";

	if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/fuentepoder";
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
		$respuesta = ModeloFuentePoder::mdlActualizarFuentePoder($tabla, $datos, $rutaImagen);
		return $respuesta;

	}
}


?>