<?php
require_once "conexion.php";
Class ModeloGrader {
static public function listarGraderMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT a.id_unidad_balanza,a.cliente,a.grader,a.id_unidad_al,a.id_unidad_acel,a.id_unidad_desc,a.id_calidad,a.id_pesaje,e.descripcion descripcalidad,al.descripcion descralim,acel.descripcion descraceleracion,pes.descripcion descrpesaje,descar.descripcion descripdescarga FROM $tabla a LEFT JOIN estacion_calidad e on e.id_calidad=a.id_calidad LEFT JOIN unidad_alim al on al.id_unidad_alim=a.id_unidad_al LEFT JOIN unidad_acel acel on acel.id_unidad_acel=a.id_unidad_acel LEFT JOIN unidad_pesaje pes on pes.id_unidad_pesaje=a.id_pesaje LEFT JOIN unidad_descarga descar on descar.id_unidad_descarga=a.id_unidad_desc ");
		$sql -> execute();
		return $sql -> fetchAll();
}


	static public function mdlEliminarGrader($tabla, $id_grader) {

	$sqlunidad = Conexion::conectar()->prepare("UPDATE $tabla a LEFT JOIN unidad_alim al on al.id_unidad_alim=a.id_unidad_al LEFT JOIN unidad_acel acel on acel.id_unidad_acel=a.id_unidad_acel LEFT JOIN unidad_pesaje pes on pes.id_unidad_pesaje=a.id_pesaje LEFT JOIN unidad_descarga descar on descar.id_unidad_descarga=a.id_unidad_desc  LEFT JOIN estacion_calidad e on e.id_calidad=a.id_calidad SET al.id_unidad_al = NULL,acel.id_unidad = NULL,pes.id_unidad = NULL,descar.id_unidad = NULL,e.id_unidad = NULL  WHERE id_unidad_balanza = :id");
		$sqlunidad->bindParam(":id", $id_grader, PDO::PARAM_INT);

		$sqlunidad->execute();

		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_unidad_balanza = :id");
		$sql->bindParam(":id", $id_grader, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarGrader($tabla, $id_grader) {
		$sql = Conexion::conectar()->prepare("SELECT a.id_unidad_balanza,a.cliente,a.grader,a.id_unidad_balanza,a.cliente,a.grader,a.id_unidad_al,a.id_unidad_acel,a.id_unidad_desc,a.id_calidad,a.id_pesaje,e.descripcion descripcalidad,al.descripcion descralim,acel.descripcion descraceleracion,pes.descripcion descrpesaje,descar.descripcion descripdescarga FROM $tabla a LEFT JOIN estacion_calidad e on e.id_calidad=a.id_calidad LEFT JOIN unidad_alim al on al.id_unidad_alim=a.id_unidad_al LEFT JOIN unidad_acel acel on acel.id_unidad_acel=a.id_unidad_acel LEFT JOIN unidad_pesaje pes on pes.id_unidad_pesaje=a.id_pesaje LEFT JOIN unidad_descarga descar on descar.id_unidad_descarga=a.id_unidad_desc WHERE id_unidad_balanza = :id");
		$sql->bindParam(":id", $id_grader, PDO::PARAM_INT);

		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarGrader($tabla, $datos) {

			$sql = Conexion::conectar()->prepare("UPDATE $tabla a LEFT JOIN unidad_alim al on al.id_unidad_alim=a.id_unidad_al LEFT JOIN unidad_acel acel on acel.id_unidad_acel=a.id_unidad_acel LEFT JOIN unidad_pesaje pes on pes.id_unidad_pesaje=a.id_pesaje LEFT JOIN unidad_descarga descar on descar.id_unidad_descarga=a.id_unidad_desc  LEFT JOIN estacion_calidad e on e.id_calidad=a.id_calidad SET a.grader = :grader,a.cliente = :cliente,al.descripcion = :alimentacion,acel.descripcion = :aceleracion,pes.descripcion = :pesaje,descar.descripcion = :descarga,e.descripcion = :calidad  WHERE id_unidad_balanza = :id");

	        $sql->bindParam(":grader", $datos["grader"], PDO::PARAM_STR);			
            $sql->bindParam(":cliente", $datos["cliente"], PDO::PARAM_STR);
			$sql->bindParam(":calidad", $datos["calidad"], PDO::PARAM_STR);
			$sql->bindParam(":alimentacion", $datos["alimentacion"], PDO::PARAM_STR);
			$sql->bindParam(":aceleracion", $datos["aceleracion"], PDO::PARAM_STR);
			$sql->bindParam(":pesaje", $datos["pesaje"], PDO::PARAM_STR);
			$sql->bindParam(":descarga", $datos["descarga"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_grader"], PDO::PARAM_INT);
		

		
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>