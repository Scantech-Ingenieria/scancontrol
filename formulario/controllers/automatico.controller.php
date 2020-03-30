<?php
error_reporting(0);

Class ControllerAutomatico {
	public function listarAutomaticoCtr() {
		$tabla = "automatico";
		$respuesta = ModeloAutomatico::listarAutomaticoMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearAutomatico($datos) {
		$tabla = "automatico";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}else{
list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/automatico";
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
		
		$respuesta = ModeloAutomatico::mdlCrearAutomatico($tabla, $datos, $rutaImagen);
		return $respuesta;
	}
	static public function ctrEliminarAutomatico($id_automatico,$ruta) {
		$tabla = "automatico";
if ($ruta!='') {
		unlink($ruta);
		}
$respuesta = ModeloAutomatico::mdlEliminarAutomatico($tabla, $id_automatico);
	
		return $respuesta;
	}
	static public function ctrEditarAutomatico($id_automatico) {
		$tabla = "automatico";
		$respuesta = ModeloAutomatico::mdlEditarAutomatico($tabla, $id_automatico);
		return $respuesta;
	}
	static public function ctrActualizarAutomatico($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "automatico";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/automatico";
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
		$respuesta = ModeloAutomatico::mdlActualizarAutomatico($tabla, $datos, $rutaImagen);
		return $respuesta;
	}
}
?>