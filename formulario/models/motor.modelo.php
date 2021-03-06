<?php
require_once "conexion.php";
Class ModeloMotor {
static public function listarMotorMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearMotor($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :rpm,:marca,:usillo,:ancho,:capacidad,:precio,:imagen)");
		$sql->bindParam(":rpm", $datos["rpm"], PDO::PARAM_STR);
		$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$sql->bindParam(":usillo", $datos["usillo"], PDO::PARAM_STR);
		$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
		$sql->bindParam(":capacidad", $datos["capacidad"], PDO::PARAM_STR);
		$sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarMotor($tabla, $id_motor) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_motor = :id");
		$sql->bindParam(":id", $id_motor, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarMotor($tabla, $id_motor) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_motor = :id");
		$sql->bindParam(":id", $id_motor, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarMotor($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET rpm = :rpm,marca = :marca,usillo = :usillo,ancho = :ancho,capacidad = :capacidad,precio = :precio WHERE id_motor = :id");
			$sql->bindParam(":rpm", $datos["rpm"], PDO::PARAM_STR);
		$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$sql->bindParam(":usillo", $datos["usillo"], PDO::PARAM_STR);
		$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
		$sql->bindParam(":capacidad", $datos["capacidad"], PDO::PARAM_STR);
		$sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$sql->bindParam(":id", $datos["id_motor"], PDO::PARAM_INT);
}else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET rpm = :rpm,marca = :marca,usillo = :usillo,ancho = :ancho,capacidad = :capacidad,precio = :precio,rutaImg = :rutaNueva WHERE id_motor = :id");
		$sql->bindParam(":rpm", $datos["rpm"], PDO::PARAM_STR);
		$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$sql->bindParam(":usillo", $datos["usillo"], PDO::PARAM_STR);
		$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
		$sql->bindParam(":capacidad", $datos["capacidad"], PDO::PARAM_STR);
		$sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
		$sql->bindParam(":id", $datos["id_motor"], PDO::PARAM_INT);
}

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>