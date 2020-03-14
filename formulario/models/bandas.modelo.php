<?php
require_once "conexion.php";
Class ModeloBanda {
static public function listarBandaMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearBanda($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :numeroserie,:descripcion,:ancho,:material,:imagen)");
		$sql->bindParam(":numeroserie", $datos["numeroserie"], PDO::PARAM_STR);
		$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
		$sql->bindParam(":material", $datos["material"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarBanda($tabla, $id_banda) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_banda = :id");
		$sql->bindParam(":id", $id_banda, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarBanda($tabla, $id_banda) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_banda = :id");
		$sql->bindParam(":id", $id_banda, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarBanda($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET numero_serie = :numeroserie,descripcion = :descripcion,ancho = :ancho,material=:material WHERE id_banda = :id");
			$sql->bindParam(":numeroserie", $datos["numeroserie"], PDO::PARAM_STR);
			$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
			$sql->bindParam(":material", $datos["material"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_banda"], PDO::PARAM_INT);
}else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET numero_serie = :numeroserie,descripcion = :descripcion,ancho = :ancho,material=:material, rutaImg = :rutaNueva WHERE id_banda = :id");
			$sql->bindParam(":numeroserie", $datos["numeroserie"], PDO::PARAM_STR);
			$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
			$sql->bindParam(":material", $datos["material"], PDO::PARAM_STR);
			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_banda"], PDO::PARAM_INT);
}

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>