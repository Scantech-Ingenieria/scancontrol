<?php

require_once "conexion.php";
Class ModeloAutomatico {
static public function listarAutomaticoMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearAutomatico($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :amperaje,:marca,:tipo,:imagen)");
		$sql->bindParam(":amperaje", $datos["amperaje"], PDO::PARAM_STR);
		$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);

		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarAutomatico($tabla, $id_automatico) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_automatico = :id");
		$sql->bindParam(":id", $id_automatico, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
    static public function mdlEditarAutomatico($tabla, $id_automatico) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_automatico = :id");
		$sql->bindParam(":id", $id_automatico, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarAutomatico($tabla, $datos,$rutaImagen) {

		if( is_null($rutaImagen)) {

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET amperaje = :amperaje,marca = :marca,tipo = :tipo WHERE id_automatico = :id");
			$sql->bindParam(":amperaje", $datos["amperaje"], PDO::PARAM_STR);
			$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_automatico"], PDO::PARAM_INT);
		}else{

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET amperaje = :amperaje,marca = :marca,tipo = :tipo,rutaImg = :rutaNueva WHERE id_automatico = :id");
			$sql->bindParam(":amperaje", $datos["amperaje"], PDO::PARAM_STR);
			$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_automatico"], PDO::PARAM_INT);
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