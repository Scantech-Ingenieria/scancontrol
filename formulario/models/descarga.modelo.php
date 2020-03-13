<?php
require_once "conexion.php";
Class ModeloDescarga {
static public function listarDescargaMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprocket  INNER JOIN bandas b on b.id_banda=a.tipo_banda INNER JOIN paletas p on p.id_paletas=a.id_tipo_paletas");
		$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarDescargaRegistroMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprocket  INNER JOIN bandas b on b.id_banda=a.tipo_banda INNER JOIN paletas p on p.id_paletas=a.id_tipo_paletas WHERE id_unidad IS NULL");
		$sql -> execute();
		return $sql -> fetchAll();
}
	static public function mdlCrearDescarga($tabla, $datos) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL,:tipo,:cantidadsprockets,:tipobandas,:bandasmedidas,:eje,:motorusillo,:motorcapacidad,:tipopaletas,:cantidadpaletas,:rpm,:tiporodamientos,NULL)");
		$sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":motorusillo", $datos["motorusillo"], PDO::PARAM_STR);
		$sql->bindParam(":motorcapacidad", $datos["motorcapacidad"], PDO::PARAM_STR);
		$sql->bindParam(":tipopaletas", $datos["tipopaletas"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadpaletas", $datos["cantidadpaletas"], PDO::PARAM_STR);
		$sql->bindParam(":rpm", $datos["rpm"], PDO::PARAM_STR);
		$sql->bindParam(":tiporodamientos", $datos["tiporodamientos"], PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarDescarga($tabla, $id_descarga) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_unidad_descarga = :id");
		$sql->bindParam(":id", $id_descarga, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarDescarga($tabla, $id_descarga) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_unidad_descarga = :id");
		$sql->bindParam(":id", $id_descarga, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarDescarga($tabla, $datos) {

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_sprocket = :tipo,cantidad_sprocket = :cantidadsprockets,tipo_banda = :tipobandas,medida_banda = :bandasmedidas,eje = :eje,motor_usillo = :motorusillo,motor_capacidad = :motorcapacidad,id_tipo_paletas = :tipopaletas,cantidad_paletas = :cantidadpaletas,rpm = :rpm,tipo_rodamientos = :tiporodamientos WHERE id_unidad_descarga = :id");

            $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
			$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
			$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
			$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
			$sql->bindParam(":motorusillo", $datos["motorusillo"], PDO::PARAM_STR);
			$sql->bindParam(":motorcapacidad", $datos["motorcapacidad"], PDO::PARAM_STR);
			$sql->bindParam(":tipopaletas", $datos["tipopaletas"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadpaletas", $datos["cantidadpaletas"], PDO::PARAM_STR);
			$sql->bindParam(":rpm", $datos["rpm"], PDO::PARAM_STR);
		    $sql->bindParam(":tiporodamientos", $datos["tiporodamientos"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_descarga"], PDO::PARAM_INT);
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}
?>