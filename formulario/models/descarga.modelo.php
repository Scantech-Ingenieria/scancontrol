<?php


require_once "conexion.php";


Class ModeloAceleracion {


	


static public function listarAceleracionMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  INNER JOIN bandas b on b.id_banda=a.tipo_banda");
		$sql -> execute();
		return $sql -> fetchAll();

}
	


	static public function mdlCrearAceleracion($tabla, $datos) {

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL,:tipo,:cantidadsprockets,:tipobandas,:bandasmedidas,:eje,:motorusillo,:motorcapacidad)");
	
		$sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":motorusillo", $datos["motorusillo"], PDO::PARAM_STR);
		$sql->bindParam(":motorcapacidad", $datos["motorcapacidad"], PDO::PARAM_STR);
	



		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEliminarAceleracion($tabla, $id_aceleracion) {

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_unidad_acel = :id");

		$sql->bindParam(":id", $id_aceleracion, PDO::PARAM_INT);

		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

	static public function mdlEditarAceleracion($tabla, $id_aceleracion) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_unidad_acel = :id");
		$sql->bindParam(":id", $id_aceleracion, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();

	}


	static public function mdlActualizarAceleracion($tabla, $datos) {

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_sprockets = :tipo,cantidad_sprocket = :cantidadsprockets,tipo_banda = :tipobandas,medida_banda = :bandasmedidas,eje = :eje,motor_usillo = :motorusillo,motor_capacidad = :motorcapacidad WHERE id_unidad_acel = :id");

            $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
			$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
			$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
			$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
			$sql->bindParam(":motorusillo", $datos["motorusillo"], PDO::PARAM_STR);
			$sql->bindParam(":motorcapacidad", $datos["motorcapacidad"], PDO::PARAM_STR);
			
			$sql->bindParam(":id", $datos["id_aceleracion"], PDO::PARAM_INT);

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

}


?>