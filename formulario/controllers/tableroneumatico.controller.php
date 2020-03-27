<?php

Class ControllerTableroneumatico {
	public function listarTableroneumaticoCtr() {
		$tabla = "tablero_neumatico";
		$respuesta = ModeloTableroneumatico::listarTableroneumaticoMdl($tabla);
		return $respuesta;
	}
		public function listarTneumaticoautomaticoCtr() {
		$tabla = "tneumatico_automatico";
		$respuesta = ModeloTableroneumatico::listarTneumaticoautomaticoMdl($tabla);
		return $respuesta;
	}
			public function listarTneumaticofuenteCtr() {
		$tabla = "tneumatico_fuente";
		$respuesta = ModeloTableroneumatico::listarTneumaticofuenteMdl($tabla);
		return $respuesta;
	}
			public function listarTneumaticomanifoldCtr() {
		$tabla = "tneumatico_manifold";
		$respuesta = ModeloTableroneumatico::listarTneumaticomanifoldMdl($tabla);
		return $respuesta;
	}
				public function listarTneumaticoplcCtr() {
		$tabla = "tneumatico_plc";
		$respuesta = ModeloTableroneumatico::listarTneumaticoplcMdl($tabla);
		return $respuesta;
	}
	static public function ctrCrearTableroneumatico($datos) {
		$tabla = "tablero_neumatico";
if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}else{
list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/tableroneumatico";
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
		$respuesta = ModeloTableroneumatico::mdlCrearTableroneumatico($tabla, $datos,$rutaImagen);
		return $respuesta;
	}
	static public function ctrEliminarTableroneumatico($id_tableroneumatico,$ruta) {
		$tabla = "tablero_neumatico";
unlink($ruta);
		$respuesta = ModeloTableroneumatico::mdlEliminarTableroneumatico($tabla, $id_tableroneumatico);
	
		return $respuesta;
	}
	static public function ctrEliminarTautomatico($id_tautomatico) {
		$tabla = "tneumatico_automatico";
		$respuesta = ModeloTableroneumatico::mdlEliminarTautomatico($tabla, $id_tautomatico);
		return $respuesta;
	}
		static public function ctrEliminarTfuente($id_tfuente) {
		$tabla = "tneumatico_fuente";
		$respuesta = ModeloTableroneumatico::mdlEliminarTfuente($tabla, $id_tfuente);
		return $respuesta;
	}
		static public function ctrEliminarTvdf($id_tvdf) {
		$tabla = "tneumatico_vdf";
		$respuesta = ModeloTableroneumatico::mdlEliminarTvdf($tabla, $id_tvdf);
		return $respuesta;
	}
	static public function ctrEditarTableroneumatico($id_tableroneumatico) {
		$tabla = "tablero_neumatico";
		$respuesta = ModeloTableroneumatico::mdlEditarTableroneumatico($tabla, $id_tableroneumatico);
		return $respuesta;
	}
		static public function ctrEditarTableroautomaticos($id_tableroneumatico) {
		$tabla = "tneumatico_automatico";
		$respuesta = ModeloTableroneumatico::mdlEditarTableroautomaticos($tabla, $id_tableroneumatico);
		return $respuesta;
	}
		static public function ctrEditarTablerofuente($id_tableroneumatico) {
		$tabla = "tneumatico_fuente";
		$respuesta = ModeloTableroneumatico::mdlEditarTablerofuente($tabla, $id_tableroneumatico);
		return $respuesta;
	}
		static public function ctrEditarTableroplc($id_tableroneumatico) {
		$tabla = "tneumatico_plc";
		$respuesta = ModeloTableroneumatico::mdlEditarTableroplc($tabla, $id_tableroneumatico);
		return $respuesta;
	}
		static public function ctrEditarTableromanifold($id_tableroneumatico) {
		$tabla = "tneumatico_manifold";
		$respuesta = ModeloTableroneumatico::mdlEditarTableromanifold($tabla, $id_tableroneumatico);
		return $respuesta;
	}
	static public function ctrActualizarTableroneumatico($datos) {
		$tabla = "tablero_neumatico";

	if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		}
		// LA ACTUALIZACIÓN VIENE CON IMAGEN
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/tableroneumatico";
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
		$respuesta = ModeloTableroneumatico::mdlActualizarTableroneumatico($tabla, $datos, $rutaImagen);
		return $respuesta;

	}
}


?>