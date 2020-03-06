<?php


require_once "conexion.php";


Class Modelotabla {

static public function listartablaMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla b INNER JOIN clientes cli on cli.id_cliente=b.cliente");
		$sql -> execute();
		return $sql -> fetchAll();


	}



static public function listarCliMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();


	}





	static public function mdlCreartabla($tabla, $datos) {

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :nombre,:cliente,:descripcion,:ubicacion,:fecha,:estado)");
		
		$sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$sql->bindParam(":cliente", $datos["cliente"], PDO::PARAM_STR);


		$sql->bindParam(":ubicacion", $datos["ubicacion"], PDO::PARAM_STR);

		$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);

		$sql->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$sql->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);

	

		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEliminartabla($tabla, $id_tabla) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$sql->bindParam(":id", $id_tabla, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditartabla($tabla, $id_tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
		$sql->bindParam(":id", $id_tabla, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizartabla($tabla, $datos) {

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET address = :address,cliente = :cliente,descripcion = :descripcion,ubicacion=:ubicacion WHERE id = :id");

			$sql->bindParam(":address", $datos["titulotabla"], PDO::PARAM_STR);
			$sql->bindParam(":cliente", $datos["Clientetabla"], PDO::PARAM_STR);
	

			$sql->bindParam(":descripcion", $datos["Descripciontabla"], PDO::PARAM_STR);
			$sql->bindParam(":ubicacion", $datos["Ubicaciontabla"], PDO::PARAM_STR);

			$sql->bindParam(":id", $datos["id_tabla"], PDO::PARAM_INT);

		

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

}


?>