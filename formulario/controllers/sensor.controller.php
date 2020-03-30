<?php
error_reporting(0);

Class ControllerSensor {
	public function listarSensorCtr() {
		$tabla = "sensor";
		$respuesta = ModeloSensor::listarSensorMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearSensor($datos) {
		$tabla = "sensor";
				if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}else{
		list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/sensor";
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

		$respuesta = ModeloSensor::mdlCrearSensor($tabla, $datos,$rutaImagen);
		return $respuesta;
	}
	static public function ctrEliminarSensor($id_sensor,$ruta) {
		$tabla = "sensor";
	if ($ruta!='') {
		unlink($ruta);
		}
$respuesta = ModeloSensor::mdlEliminarSensor($tabla, $id_sensor);

		return $respuesta;
	}
	static public function ctrEditarSensor($id_sensor) {
		$tabla = "sensor";
		$respuesta = ModeloSensor::mdlEditarSensor($tabla, $id_sensor);
		return $respuesta;
	}
	static public function ctrActualizarSensor($datos) {
		//Validamos si no viene imagen para actualizar solo la tabla
		$tabla = "sensor";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/sensor";
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
		$respuesta = ModeloSensor::mdlActualizarSensor($tabla, $datos,$rutaImagen);
		return $respuesta;
	}
}


?>