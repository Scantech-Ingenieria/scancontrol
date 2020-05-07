<?php
error_reporting(0);

Class ControllerPesaje {
public function listarPesajeCtr() {
		$tabla = "unidad_pesaje";
		$respuesta = ModeloPesaje::listarPesajeMdl($tabla);
		return $respuesta;
	}
	public function listarPesajeRegistroCtr() {
		$tabla = "unidad_pesaje";
		$respuesta = ModeloPesaje::listarPesajeRegistroMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearPesaje($datos) {
		$tabla = "unidad_pesaje";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}else{
list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/unidadpesaje";
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
		$respuesta = ModeloPesaje::mdlCrearPesaje($tabla, $datos, $rutaImagen);
		return $respuesta;
	}
	static public function ctrEliminarPesaje($id_pesaje,$ruta) {
		if ($ruta!='') {
		unlink($ruta);
		}
		$tabla = "unidad_pesaje";
$respuesta = ModeloPesaje::mdlEliminarPesaje($tabla, $id_pesaje);
		return $respuesta;
	}
	static public function ctrEditarPesaje($id_pesaje) {
		$tabla = "unidad_pesaje";
		$respuesta = ModeloPesaje::mdlEditarPesaje($tabla, $id_pesaje);
		return $respuesta;
	}
	static public function ctrActualizarPesaje($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "unidad_pesaje";
			if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/unidadpesaje";
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
		$respuesta = ModeloPesaje::mdlActualizarPesaje($tabla, $datos, $rutaImagen);
return $respuesta;

	}
}


?>