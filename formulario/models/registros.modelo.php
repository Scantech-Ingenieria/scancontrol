<?php
require_once "conexion.php";
Class Modeloregistros {
static public function listarregistrosMdl($registros) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $registros b INNER JOIN clientes cli on cli.id_cliente=b.cliente");
		$sql -> execute();
		return $sql -> fetchAll();
	}
static public function listarCliMdl($registros) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $registros");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearregistros($registros, $datos) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $registros() VALUES (NULL, :balanza,:alimentacion,:aceleracion,:descarga)");
		$sql->bindParam(":balanza", $datos["balanza"], PDO::PARAM_STR);
		$sql->bindParam(":alimentacion", $datos["alimentacion"], PDO::PARAM_STR);
		$sql->bindParam(":aceleracion", $datos["aceleracion"], PDO::PARAM_STR);
		$sql->bindParam(":descarga", $datos["descarga"], PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarregistros($registros, $id_registros) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $registros WHERE id = :id");

		$sql->bindParam(":id", $id_registros, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarregistros($registros, $id_registros) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $registros WHERE id = :id");
		$sql->bindParam(":id", $id_registros, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarregistros($registros, $datos) {
			$sql = Conexion::conectar()->prepare("UPDATE $registros SET address = :address,cliente = :cliente,descripcion = :descripcion,ubicacion=:ubicacion WHERE id = :id");
			$sql->bindParam(":address", $datos["tituloregistros"], PDO::PARAM_STR);
			$sql->bindParam(":cliente", $datos["Clienteregistros"], PDO::PARAM_STR);
			$sql->bindParam(":descripcion", $datos["Descripcionregistros"], PDO::PARAM_STR);
			$sql->bindParam(":ubicacion", $datos["Ubicacionregistros"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_registros"], PDO::PARAM_INT);

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

}


?>