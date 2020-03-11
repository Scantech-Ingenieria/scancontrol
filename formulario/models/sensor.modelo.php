<?php
require_once "conexion.php";
Class ModeloSensor {
static public function listarSensorMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearSensor($tabla, $datos) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL,:tipo,:marca, :modelo,:voltaje,:distancia)");

		$sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$sql->bindParam(":voltaje", $datos["voltaje"], PDO::PARAM_STR);
		$sql->bindParam(":distancia", $datos["distancia"], PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarSensor($tabla, $id_sensor) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_sensor = :id");
		$sql->bindParam(":id", $id_sensor, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarSensor($tabla, $id_sensor) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_sensor = :id");
		$sql->bindParam(":id", $id_sensor, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarSensor($tabla, $datos) {

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_sensor=:tipo,marca = :marca,modelo = :modelo,voltaje = :voltaje,distancia = :distancia WHERE id_sensor = :id");

		$sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$sql->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$sql->bindParam(":voltaje", $datos["voltaje"], PDO::PARAM_STR);
		$sql->bindParam(":distancia", $datos["distancia"], PDO::PARAM_STR);
		$sql->bindParam(":id", $datos["id_sensor"], PDO::PARAM_INT);
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>