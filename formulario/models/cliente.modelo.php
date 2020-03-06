<?php


require_once "conexion.php";


Class ModeloCliente {

	static public function listarClienteMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();


	}

	static public function mdlCrearCliente($tabla, $datos) {

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :nombre)");
		$sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEliminarCliente($tabla, $id_cliente) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_cliente = :id");

		$sql->bindParam(":id", $id_cliente, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarCliente($tabla, $id_cliente) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_cliente = :id");
		$sql->bindParam(":id", $id_cliente, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarCliente($tabla, $datos) {

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET nombre_cliente = :nombre WHERE id_cliente = :id");

			$sql->bindParam(":nombre", $datos["nombrecliente"], PDO::PARAM_STR);
	
			$sql->bindParam(":id", $datos["id_cliente"], PDO::PARAM_INT);

		

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

}


?>