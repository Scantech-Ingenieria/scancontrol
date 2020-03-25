<?php
require_once "conexion.php";
Class ModeloVdf {
static public function listarVdfMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearVdf($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :potencia,:marca,:imagen)");
		$sql->bindParam(":potencia", $datos["potencia"], PDO::PARAM_STR);
		$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarVdf($tabla, $id_vdf) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_vdf = :id");
		$sql->bindParam(":id", $id_vdf, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarVdf($tabla, $id_vdf) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_vdf = :id");
		$sql->bindParam(":id", $id_vdf, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}

	static public function mdlActualizarVdf($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET potencia = :potencia,marca = :marca WHERE id_vdf = :id");
			$sql->bindParam(":potencia", $datos["potencia"], PDO::PARAM_STR);
			$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_vdf"], PDO::PARAM_INT);
}else{
$sql = Conexion::conectar()->prepare("UPDATE $tabla SET potencia = :potencia,marca = :marca,rutaImg = :rutaNueva WHERE id_vdf = :id");
			$sql->bindParam(":potencia", $datos["potencia"], PDO::PARAM_STR);
			$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_vdf"], PDO::PARAM_INT);
			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
}
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

}


?>