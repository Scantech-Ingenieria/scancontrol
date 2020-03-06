<?php


require_once "conexion.php";


Class ModeloCalidad {


static public function listarCalidadMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();


	}



	static public function mdlCrearCalidad($tabla, $datos) {

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :puestos)");
		$sql->bindParam(":puestos", $datos["puestos"], PDO::PARAM_STR);

	


		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEliminarCalidad($tabla, $id_calidad) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_calidad = :id");

		$sql->bindParam(":id", $id_calidad, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarCalidad($tabla, $id_calidad) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_calidad = :id");
		$sql->bindParam(":id", $id_calidad, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}

	static public function mdlActualizarCalidad($tabla, $datos) {

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET numero_puestos = :puestos WHERE id_calidad = :id");

			$sql->bindParam(":puestos", $datos["puestos"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_calidad"], PDO::PARAM_INT);

		

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

}


?>