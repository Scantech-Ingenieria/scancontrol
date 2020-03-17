<?php
require_once "conexion.php";
Class ModeloRodamientos {
static public function listarRodamientosMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearRodamientos($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :modelo,:rodamiento,:material,:fijaciones,:imagen)");
		$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$sql->bindParam(":rodamiento", $datos["rodamiento"], PDO::PARAM_STR);
		$sql->bindParam(":material", $datos["material"], PDO::PARAM_STR);
		$sql->bindParam(":fijaciones", $datos["fijaciones"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);


		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarRodamientos($tabla, $id_rodamientos) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_rodamientos = :id");
		$sql->bindParam(":id", $id_rodamientos, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarRodamientos($tabla, $id_rodamientos) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_rodamientos = :id");
		$sql->bindParam(":id", $id_rodamientos, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarRodamientos($tabla, $datos,$rutaImagen) {
if( is_null($rutaImagen)) {
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET modelo = :modelo,rodamiento =:rodamiento,material =:material,fijaciones =:fijaciones WHERE id_rodamientos = :id");
		$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$sql->bindParam(":rodamiento", $datos["rodamiento"], PDO::PARAM_STR);
		$sql->bindParam(":material", $datos["material"], PDO::PARAM_STR);
		$sql->bindParam(":fijaciones", $datos["fijaciones"], PDO::PARAM_STR);
		$sql->bindParam(":id", $datos["id_rodamientos"], PDO::PARAM_INT);
}else{

	$sql = Conexion::conectar()->prepare("UPDATE $tabla SET modelo = :modelo,rodamiento =:rodamiento,material =:material,fijaciones =:fijaciones,rutaImg =:rutaNueva WHERE id_rodamientos = :id");
		$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$sql->bindParam(":rodamiento", $datos["rodamiento"], PDO::PARAM_STR);
		$sql->bindParam(":material", $datos["material"], PDO::PARAM_STR);
		$sql->bindParam(":fijaciones", $datos["fijaciones"], PDO::PARAM_STR);
		$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
		$sql->bindParam(":id", $datos["id_rodamientos"], PDO::PARAM_INT);


}

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>