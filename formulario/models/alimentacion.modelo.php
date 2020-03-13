<?php
require_once "conexion.php";
Class ModeloAlimentacion {
static public function listarAlimentacionMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  INNER JOIN bandas b on b.id_banda=a.banda_modular_tipo INNER JOIN rodamientos r on r.id_rodamientos=a.rodamientos");
		$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarAlimentacionRegistroMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  INNER JOIN bandas b on b.id_banda=a.banda_modular_tipo INNER JOIN rodamientos r on r.id_rodamientos=a.rodamientos WHERE id_unidad_al IS NULL");
		$sql -> execute();
		return $sql -> fetchAll();
}
	static public function mdlCrearAlimentacion($tabla, $datos) {

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL,:tipo,:cantidadsprockets,:tipobandas,:bandasmedidas,:eje,:motorusillo,:motorcapacidad,:motorrpm,:rodamientos,NULL)");
		$sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":motorusillo", $datos["motorusillo"], PDO::PARAM_STR);
		$sql->bindParam(":motorcapacidad", $datos["motorcapacidad"], PDO::PARAM_STR);
		$sql->bindParam(":motorrpm", $datos["motorrpm"], PDO::PARAM_STR);
		$sql->bindParam(":rodamientos", $datos["rodamientos"], PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarAlimentacion($tabla, $id_alimentacion) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_unidad_alim = :id");
		$sql->bindParam(":id", $id_alimentacion, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}

	static public function mdlEditarAlimentacion($tabla, $id_alimentacion) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_unidad_alim = :id");
		$sql->bindParam(":id", $id_alimentacion, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}

	static public function mdlActualizarAlimentacion($tabla, $datos) {

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_sprockets = :tipo,cantidad_sprockets = :cantidadsprockets,banda_modular_tipo = :tipobandas,banda_medidas = :bandasmedidas,eje = :eje,motor_usillo = :motorusillo,motor_capacidad = :motorcapacidad,motor_rpm = :motorrpm,rodamientos = :rodamientos WHERE id_unidad_alim = :id");

            $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
			$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
			$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
			$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
			$sql->bindParam(":motorusillo", $datos["motorusillo"], PDO::PARAM_STR);
			$sql->bindParam(":motorcapacidad", $datos["motorcapacidad"], PDO::PARAM_STR);
			$sql->bindParam(":motorrpm", $datos["motorrpm"], PDO::PARAM_STR);
		$sql->bindParam(":rodamientos", $datos["rodamientos"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_alimentacion"], PDO::PARAM_INT);
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>