<?php
require_once "conexion.php";
Class ModeloSprockets {
static public function listarSprocketsMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearSprockets($tabla, $datos,$rutaImagen) {

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :numeroserie,:modelo,:dientes,:perforacion,:descripcion,:imagen)");
		$sql->bindParam(":numeroserie", $datos["numeroserie"], PDO::PARAM_STR);
		$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$sql->bindParam(":dientes", $datos["dientes"], PDO::PARAM_STR);
		$sql->bindParam(":perforacion", $datos["perforacion"], PDO::PARAM_STR);
		$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);

		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarSprockets($tabla, $id_sprockets) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_sprockets = :id");
		$sql->bindParam(":id", $id_sprockets, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarSprockets($tabla, $id_sprockets) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_sprockets = :id");
		$sql->bindParam(":id", $id_sprockets, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarSprockets($tabla, $datos,$rutaImagen) {

		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET serie = :numeroserie,modelo = :modelo,dientes = :dientes,perforacion = :perforacion,descripcion = :descripcion WHERE id_sprockets = :id");
			$sql->bindParam(":numeroserie", $datos["numeroserie"], PDO::PARAM_STR);
			$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
			$sql->bindParam(":dientes", $datos["dientes"], PDO::PARAM_STR);
			$sql->bindParam(":perforacion", $datos["perforacion"], PDO::PARAM_STR);
			$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_sprockets"], PDO::PARAM_INT);
		}
		else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET serie = :numeroserie,modelo = :modelo,dientes = :dientes,perforacion = :perforacion,descripcion = :descripcion, rutaImg = :rutaNueva WHERE id_sprockets = :id");
			$sql->bindParam(":numeroserie", $datos["numeroserie"], PDO::PARAM_STR);
			$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
			$sql->bindParam(":dientes", $datos["dientes"], PDO::PARAM_STR);
			$sql->bindParam(":perforacion", $datos["perforacion"], PDO::PARAM_STR);
			$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_sprockets"], PDO::PARAM_INT);


		}
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}
?>