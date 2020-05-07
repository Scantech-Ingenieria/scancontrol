<?php
require_once "conexion.php";
Class Modeloregistros {
static public function listarregistrosMdl($registros) {
		$sql = Conexion::conectar()->prepare("SELECT ba.id_unidad_balanza,ba.id_balanza,ba.id_unidad_al,ba.id_unidad_acel,ba.id_unidad_desc,ba.id_calidad,ca.rutaImg imgcalidad,ca.numero_puestos puestosca,ca.tipo_sprockets sprocketca,ca.cantidad_sprockets sprocketscantidadca,ca.tipo_banda tipobandaca,ca.medida_banda medidabandaca,ca.eje ejeca,ca.cilindros cilindrosca,ca.tipo_botoneras tipobotonerasca,ca.cantidad_botoneras cantidadbotonerasca,ca.tipo_sensores tiposensoresca,ca.racors racorsca,ca.tipo_motor tipomotorca,ca.tipo_descanso tipodescansoca,acel.rutaImg imgacel,alim.rutaImg imgalim,alim.tipo_sprockets sprocketalim,alim.cantidad_sprockets cantidadsprocketsalim,alim.banda_tipo bandaalim,alim.banda_medidas bandamedidasalim,alim.eje ejealim,alim.tipo_motor motoralim,alim.tipo_descanso descansoalim,des.rutaImg imgdes FROM $registros ba LEFT JOIN estacion_calidad ca on ca.id_calidad= ba.id_calidad LEFT JOIN unidad_acel acel on  acel.id_unidad_acel= ba.id_unidad_acel  LEFT JOIN unidad_alim alim on  alim.id_unidad_alim= ba.id_unidad_al  LEFT JOIN unidad_descarga des on  des.id_unidad_descarga= ba.id_unidad_desc
-- INNER JOIN unidad_alim a on ba.id_unidad_al=a.id_unidad_alim
");
		$sql -> execute();
		return $sql -> fetchAll();
	}
static public function listarCliMdl($registros) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $registros");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearregistros($registros, $datos) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $registros() VALUES (NULL, :balanza,:alimentacion,:aceleracion,:descarga,:calidad,:pesaje)");
		$sql->bindParam(":balanza", $datos["balanza"], PDO::PARAM_STR);
		$sql->bindParam(":alimentacion", $datos["alimentacion"], PDO::PARAM_STR);
		$sql->bindParam(":aceleracion", $datos["aceleracion"], PDO::PARAM_STR);
		$sql->bindParam(":descarga", $datos["descarga"], PDO::PARAM_STR);
		$sql->bindParam(":calidad", $datos["calidad"], PDO::PARAM_STR);
		$sql->bindParam(":pesaje", $datos["pesaje"], PDO::PARAM_STR);

		$sql -> execute();

	$sqle = Conexion::conectar()->prepare("SELECT * FROM $registros order by id_unidad_balanza desc limit 1");
		$sqle -> execute();
	foreach ($sqle as $key => $value){
    $id_unidad=$value["id_unidad_balanza"];
    $id_alim=$value["id_unidad_al"];
    $id_acel=$value["id_unidad_acel"];
    $id_desc=$value["id_unidad_desc"];
    $id_calidad=$value["id_calidad"];
    $id_pesaje=$value["id_pesaje"];

}
	$sqlacel = Conexion::conectar()->prepare("UPDATE  unidad_acel SET id_unidad = :id_unidad WHERE id_unidad_acel=  :id_acel");
	$sqlacel->bindParam(":id_unidad", $id_unidad, PDO::PARAM_STR);
	$sqlacel->bindParam(":id_acel", $id_acel, PDO::PARAM_STR);
	$sqlalim = Conexion::conectar()->prepare("UPDATE unidad_alim SET id_unidad_al = :id_unidad WHERE id_unidad_alim=  :id_alim");
	$sqlalim->bindParam(":id_unidad", $id_unidad, PDO::PARAM_STR);
	$sqlalim->bindParam(":id_alim", $id_alim, PDO::PARAM_STR);
		$sqldesc = Conexion::conectar()->prepare("UPDATE unidad_descarga SET id_unidad = :id_unidad WHERE id_unidad_descarga=  :id_desc");
	$sqldesc->bindParam(":id_unidad", $id_unidad, PDO::PARAM_STR);
	$sqldesc->bindParam(":id_desc", $id_desc, PDO::PARAM_STR);
		$sqlcal = Conexion::conectar()->prepare("UPDATE estacion_calidad SET id_unidad = :id_unidad WHERE id_calidad=  :id_calidad");
	$sqlcal->bindParam(":id_unidad", $id_unidad, PDO::PARAM_STR);
	$sqlcal->bindParam(":id_calidad", $id_calidad, PDO::PARAM_STR);
			$sqlpes = Conexion::conectar()->prepare("UPDATE unidad_pesaje SET id_unidad = :id_unidad WHERE id_unidad_pesaje=  :id_pesaje");
	$sqlpes->bindParam(":id_unidad", $id_unidad, PDO::PARAM_STR);
	$sqlpes->bindParam(":id_pesaje", $id_pesaje, PDO::PARAM_STR);


		if($sqlacel->execute() & $sqlalim->execute() & $sqldesc->execute() & $sqlcal->execute()& $sqlpes->execute() ){
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