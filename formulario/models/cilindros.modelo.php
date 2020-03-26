<?php
require_once "conexion.php";
Class ModeloCilindros {
static public function listarCilindrosMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearCilindros($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :nombre,:diametro,:largo,:materialcuerpo,:materialvastago,:medidahilo,:imagen)");
		$sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$sql->bindParam(":diametro", $datos["diametro"], PDO::PARAM_STR);
		$sql->bindParam(":largo", $datos["largo"], PDO::PARAM_STR);
		$sql->bindParam(":materialcuerpo", $datos["materialcuerpo"], PDO::PARAM_STR);
		$sql->bindParam(":materialvastago", $datos["materialvastago"], PDO::PARAM_STR);
		$sql->bindParam(":medidahilo", $datos["medidahilo"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarCilindros($tabla, $id_cilindros) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_cilindros = :id");
		$sql->bindParam(":id", $id_cilindros, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarCilindros($tabla, $id_cilindros) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_cilindros = :id");
		$sql->bindParam(":id", $id_cilindros, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarCilindros($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre,diametro = :diametro,largo = :largo,materialcuerpo = :materialcuerpo,materialvastago = :materialvastago,medidahilo = :medidahilo WHERE id_cilindros = :id");
			$sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$sql->bindParam(":diametro", $datos["diametro"], PDO::PARAM_STR);
		$sql->bindParam(":largo", $datos["largo"], PDO::PARAM_STR);
		$sql->bindParam(":materialcuerpo", $datos["materialcuerpo"], PDO::PARAM_STR);
		$sql->bindParam(":materialvastago", $datos["materialvastago"], PDO::PARAM_STR);
		$sql->bindParam(":medidahilo", $datos["medidahilo"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_cilindros"], PDO::PARAM_INT);
}else{

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre,diametro = :diametro,largo = :largo,materialcuerpo = :materialcuerpo,materialvastago = :materialvastago,medidahilo = :medidahilo,rutaImg = :rutaNueva WHERE id_cilindros = :id");
			$sql->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$sql->bindParam(":diametro", $datos["diametro"], PDO::PARAM_STR);
		$sql->bindParam(":largo", $datos["largo"], PDO::PARAM_STR);
		$sql->bindParam(":materialcuerpo", $datos["materialcuerpo"], PDO::PARAM_STR);
		$sql->bindParam(":materialvastago", $datos["materialvastago"], PDO::PARAM_STR);
		$sql->bindParam(":medidahilo", $datos["medidahilo"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_cilindros"], PDO::PARAM_INT);
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