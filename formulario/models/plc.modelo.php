<?php
require_once "conexion.php";
Class ModeloPlc {
static public function listarPlcMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearPlc($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :modelo,:descripcion,:imagen)");
		$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarPlc($tabla, $id_plc) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_plc = :id");
		$sql->bindParam(":id", $id_plc, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarPlc($tabla, $id_plc) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_plc = :id");
		$sql->bindParam(":id", $id_plc, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarPlc($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET modelo = :modelo,descripcion = :descripcion WHERE id_plc = :id");
			$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);

			$sql->bindParam(":id", $datos["id_plc"], PDO::PARAM_INT);
}else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET modelo = :modelo,descripcion = :descripcion,rutaImg = :rutaNueva WHERE id_plc = :id");
			$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_plc"], PDO::PARAM_INT);
}

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>