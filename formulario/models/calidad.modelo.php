<?php
require_once "conexion.php";
Class ModeloCalidad {
static public function listarCalidadMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  INNER JOIN bandas b on b.id_banda=a.tipo_banda INNER JOIN rodamientos r on r.id_rodamientos=a.tipo_rodamientos INNER JOIN sensor se on se.id_sensor=a.tipo_sensores");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function listarCalidadRegistroMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  INNER JOIN bandas b on b.id_banda=a.tipo_banda INNER JOIN rodamientos r on r.id_rodamientos=a.tipo_rodamientos INNER JOIN sensor se on se.id_sensor=a.tipo_sensores WHERE id_unidad IS NULL");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearCalidad($tabla, $datos) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :puestos, :tiposprockets, :cantidadsprockets, :tipobandas, :medidabanda, :eje, :cilindros, :tipobotoneras, :cantidadbotoneras, :tiposensores, :cantidadsensores, :racors, :motorusillos, :motorcapacidad, :rpm, :tiporodamientos,NULL)");
		$sql->bindParam(":puestos", $datos["puestos"], PDO::PARAM_STR);
		$sql->bindParam(":tiposprockets", $datos["tiposprockets"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":medidabanda", $datos["medidabanda"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":cilindros", $datos["cilindros"], PDO::PARAM_STR);
		$sql->bindParam(":tipobotoneras", $datos["tipobotoneras"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadbotoneras", $datos["cantidadbotoneras"], PDO::PARAM_STR);
		$sql->bindParam(":tiposensores", $datos["tiposensores"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsensores", $datos["cantidadsensores"], PDO::PARAM_STR);
		$sql->bindParam(":racors", $datos["racors"], PDO::PARAM_STR);
		$sql->bindParam(":motorusillos", $datos["motorusillos"], PDO::PARAM_STR);
		$sql->bindParam(":motorcapacidad", $datos["motorcapacidad"], PDO::PARAM_STR);
		$sql->bindParam(":rpm", $datos["rpm"], PDO::PARAM_STR);
		$sql->bindParam(":tiporodamientos", $datos["tiporodamientos"], PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarCalidad($tabla, $id_calidad) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_calidad = :id");
		$sql->bindParam(":id", $id_calidad, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarCalidad($tabla, $id_calidad) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_calidad = :id");
		$sql->bindParam(":id", $id_calidad, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarCalidad($tabla, $datos) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET numero_puestos = :puestos,tipo_sprockets = :tiposprockets,cantidad_sprockets = :cantidadsprockets,tipo_banda = :tipobandas,medida_banda = :medidabanda,eje = :eje,cilindros = :cilindros,tipo_botoneras = :tipobotoneras,cantidad_botoneras = :cantidadbotoneras,tipo_sensores = :tiposensores,cantidad_sensores = :cantidadsensores,racors = :racors,motor_usillos = :motorusillos,motor_capacidad = :motorcapacidad,rpm = :rpm,tipo_rodamientos = :tiporodamientos WHERE id_calidad = :id");
		$sql->bindParam(":puestos", $datos["puestos"], PDO::PARAM_STR);
		$sql->bindParam(":id", $datos["id_calidad"], PDO::PARAM_INT);
		$sql->bindParam(":tiposprockets", $datos["tiposprockets"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":medidabanda", $datos["medidabanda"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":cilindros", $datos["cilindros"], PDO::PARAM_STR);
		$sql->bindParam(":tipobotoneras", $datos["tipobotoneras"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadbotoneras", $datos["cantidadbotoneras"], PDO::PARAM_STR);
		$sql->bindParam(":tiposensores", $datos["tiposensores"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsensores", $datos["cantidadsensores"], PDO::PARAM_STR);
		$sql->bindParam(":racors", $datos["racors"], PDO::PARAM_STR);
		$sql->bindParam(":motorusillos", $datos["motorusillos"], PDO::PARAM_STR);
		$sql->bindParam(":motorcapacidad", $datos["motorcapacidad"], PDO::PARAM_STR);
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