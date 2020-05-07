<?php
require_once "conexion.php";
Class ModeloManifold {
static public function listarManifoldMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearManifold($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :marca,:medidas,:sockets,:precio,:imagen)");
		$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$sql->bindParam(":medidas", $datos["medidas"], PDO::PARAM_STR);
		$sql->bindParam(":sockets", $datos["sockets"], PDO::PARAM_STR);
		$sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);

		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarManifold($tabla, $id_manifold) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_manifold = :id");
		$sql->bindParam(":id", $id_manifold, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarManifold($tabla, $id_manifold) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_manifold = :id");
		$sql->bindParam(":id", $id_manifold, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarManifold($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET marca = :marca,medidas = :medidas,sockets = :sockets,precio = :precio WHERE id_manifold = :id");
			$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":medidas", $datos["medidas"], PDO::PARAM_STR);
			$sql->bindParam(":sockets", $datos["sockets"], PDO::PARAM_STR);
		$sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);

			$sql->bindParam(":id", $datos["id_manifold"], PDO::PARAM_INT);
}else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET marca = :marca,medidas = :medidas,sockets = :sockets,precio = :precio,rutaImg = :rutaNueva WHERE id_manifold = :id");
				$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":medidas", $datos["medidas"], PDO::PARAM_STR);
			$sql->bindParam(":sockets", $datos["sockets"], PDO::PARAM_STR);
		$sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);

			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_manifold"], PDO::PARAM_INT);
}

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>