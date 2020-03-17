<?php
Class ControllerRodamientos {
	public function listarRodamientosCtr() {
		$tabla = "rodamientos";
		$respuesta = ModeloRodamientos::listarRodamientosMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearRodamientos($datos) {
		$tabla = "rodamientos";
		list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/descanso";
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
		$respuesta = ModeloRodamientos::mdlCrearRodamientos($tabla, $datos,$rutaImagen);
		return $respuesta;
	}
	static public function ctrEliminarRodamientos($id_rodamientos,$ruta) {
		$tabla = "rodamientos";
		if ( unlink($ruta) ) {
$respuesta = ModeloRodamientos::mdlEliminarRodamientos($tabla, $id_rodamientos);
}
		return $respuesta;
	}
	static public function ctrEditarRodamientos($id_rodamientos) {
		$tabla = "rodamientos";
		$respuesta = ModeloRodamientos::mdlEditarRodamientos($tabla, $id_rodamientos);
		return $respuesta;
	}
	static public function ctrActualizarRodamientos($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "rodamientos";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/descanso";
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
		$respuesta = ModeloRodamientos::mdlActualizarRodamientos($tabla, $datos, $rutaImagen);
		return $respuesta;
	}
}


?>