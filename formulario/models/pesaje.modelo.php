<?php
require_once "conexion.php";
Class ModeloPesaje {
static public function listarPesajeMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprocket  INNER JOIN bandas b on b.id_banda=a.tipo_banda INNER JOIN sensor se on se.id_sensor=a.tipo_sensores");
		$sql -> execute();
		return $sql -> fetchAll();
}
	static public function mdlCrearPesaje($tabla, $datos) {

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL,:tiposensores,:cantidadsensores,:tipo,:cantidadsprockets,:tipobandas,:bandasmedidas,:eje,:motorusillo,:motorcapacidad,:rpm,:tiporodamientos)");
	
		$sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":motorusillo", $datos["motorusillo"], PDO::PARAM_STR);
		$sql->bindParam(":motorcapacidad", $datos["motorcapacidad"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsensores", $datos["cantidadsensores"], PDO::PARAM_STR);
		$sql->bindParam(":tiposensores", $datos["tiposensores"], PDO::PARAM_STR);
		$sql->bindParam(":rpm", $datos["rpm"], PDO::PARAM_STR);
		$sql->bindParam(":tiporodamientos", $datos["tiporodamientos"], PDO::PARAM_STR);

	
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarPesaje($tabla, $id_pesaje) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_unidad_pesaje = :id");
    $sql->bindParam(":id", $id_pesaje, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarPesaje($tabla, $id_pesaje) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_unidad_pesaje = :id");
		$sql->bindParam(":id", $id_pesaje, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarPesaje($tabla, $datos) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_sensores = :tiposensores,cantidad_sensores = :cantidadsensores,tipo_sprocket = :tipo,cantidad_sprocket = :cantidadsprockets,tipo_banda = :tipobandas,medida_banda = :bandasmedidas,eje = :eje,motor_usillo = :motorusillo,motor_capacidad = :motorcapacidad,rpm = :rpm,tipo_rodamientos = :tiporodamientos WHERE id_unidad_pesaje = :id");
			$sql->bindParam(":tiposensores", $datos["tiposensores"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsensores", $datos["cantidadsensores"], PDO::PARAM_STR);
            $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
			$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
			$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
			$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
			$sql->bindParam(":motorusillo", $datos["motorusillo"], PDO::PARAM_STR);
			$sql->bindParam(":motorcapacidad", $datos["motorcapacidad"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_pesaje"], PDO::PARAM_INT);
			$sql->bindParam(":rpm", $datos["rpm"], PDO::PARAM_STR);
		$sql->bindParam(":tiporodamientos", $datos["tiporodamientos"], PDO::PARAM_STR);
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>