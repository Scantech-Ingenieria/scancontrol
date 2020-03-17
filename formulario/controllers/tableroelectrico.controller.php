<?php
Class ControllerTableroelectrico {
	public function listarTableroelectricoCtr() {
		$tabla = "tableroelectricos";
		$respuesta = ModeloTableroelectrico::listarTableroelectricoMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearTableroelectrico($datos) {
		$tabla = "tableroelectricos";

list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/tableroelectricos";
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
		$respuesta = ModeloTableroelectrico::mdlCrearTableroelectrico($tabla, $datos,$rutaImagen);
		return $respuesta;
	}
	static public function ctrEliminarTableroelectrico($id_tableroelectrico,$ruta) {
		$tabla = "tableroelectricos";
	if ( unlink($ruta) ) {
		$respuesta = ModeloTableroelectrico::mdlEliminarTableroelectrico($tabla, $id_tableroelectrico);
		}
		return $respuesta;
	}
	static public function ctrEditarTableroelectrico($id_tableroelectrico) {
		$tabla = "tableroelectricos";
		$respuesta = ModeloTableroelectrico::mdlEditarTableroelectrico($tabla, $id_tableroelectrico);
		return $respuesta;
	}
	static public function ctrActualizarTableroelectrico($datos) {
		$tabla = "tableroelectricos";

	if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/tableroelectricos";
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
		$respuesta = ModeloTableroelectrico::mdlActualizarTableroelectrico($tabla, $datos, $rutaImagen);
		return $respuesta;

	}
}


?>