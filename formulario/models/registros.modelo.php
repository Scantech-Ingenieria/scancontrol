<?php
require_once "conexion.php";
Class Modeloregistros {
static public function listarregistrosMdl($registros) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $registros ba
INNER JOIN balanzas bala on ba.id_balanza=bala.id
INNER JOIN clientes cli on bala.cliente=cli.id_cliente
INNER JOIN unidad_acel acel on ba.id_unidad_acel=acel.id_unidad_acel
INNER JOIN unidad_alim alim on ba.id_unidad_alim=alim.id_unidad_alim
INNER JOIN unidad_descarga des on ba.id_unidad_desc=des.id_unidad_descarga
INNER JOIN estacion_calidad ca on ba.id_calidad=ca.id_calidad");



		$sql -> execute();
		return $sql -> fetchAll();
	}


static public function listarCliMdl($registros) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $registros");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearregistros($registros, $datos) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $registros() VALUES (NULL, :balanza,:alimentacion,:aceleracion,:descarga,:calidad)");
		$sql->bindParam(":balanza", $datos["balanza"], PDO::PARAM_STR);
		$sql->bindParam(":alimentacion", $datos["alimentacion"], PDO::PARAM_STR);
		$sql->bindParam(":aceleracion", $datos["aceleracion"], PDO::PARAM_STR);
		$sql->bindParam(":descarga", $datos["descarga"], PDO::PARAM_STR);
		$sql->bindParam(":calidad", $datos["calidad"], PDO::PARAM_STR);

		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarregistros($registros, $id_registros) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $registros WHERE id_unidad_balanza = :id");

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