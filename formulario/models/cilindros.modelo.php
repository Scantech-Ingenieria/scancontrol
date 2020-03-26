<?php
require_once "conexion.php";
Class ModeloCilindros {
static public function listarCilindrosMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearCilindros($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :modelo,:imagen)");
		$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarCilindros($tabla, $id_cilindros) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_cilindros = :id");
		$sql->bindParam(":id", $id_cilindros, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarCilindros($tabla, $id_cilindros) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_cilindros = :id");
		$sql->bindParam(":id", $id_cilindros, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarCilindros($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET modelo = :modelo WHERE id_cilindros = :id");
			$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_cilindros"], PDO::PARAM_INT);
}else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET modelo = :modelo,rutaImg = :rutaNueva WHERE id_cilindros = :id");
			$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_cilindros"], PDO::PARAM_INT);
}

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>