<?php
error_reporting(0);

Class ControllerDescarga {
	public function listarDescargaCtr() {
		$tabla = "unidad_descarga";
		$respuesta = ModeloDescarga::listarDescargaMdl($tabla);
		return $respuesta;
	}
		public function listarDescargaRegistroCtr() {
		$tabla = "unidad_descarga";
		$respuesta = ModeloDescarga::listarDescargaRegistroMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearDescarga($datos) {
		$tabla = "unidad_descarga";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}else{
list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/unidaddescarga";
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
		$respuesta = ModeloDescarga::mdlCrearDescarga($tabla, $datos, $rutaImagen);
		return $respuesta;
	}
	static public function ctrEliminarDescarga($id_descarga,$ruta) {
		$tabla = "unidad_descarga";
						if ($ruta!='') {
		unlink($ruta);
		}
$respuesta = ModeloDescarga::mdlEliminarDescarga($tabla, $id_descarga);
		return $respuesta;
	}
	static public function ctrEditarDescarga($id_descarga) {
		$tabla = "unidad_descarga";
		$respuesta = ModeloDescarga::mdlEditarDescarga($tabla, $id_descarga);
		return $respuesta;
	}
	static public function ctrActualizarDescarga($datos) {
	$tabla = "unidad_descarga";
	if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/unidaddescarga";
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
	$respuesta = ModeloDescarga::mdlActualizarDescarga($tabla, $datos, $rutaImagen);
		return $respuesta;
	}
}
?>