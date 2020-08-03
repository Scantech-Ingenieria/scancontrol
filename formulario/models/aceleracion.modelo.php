<?php
require_once "conexion.php";
Class ModeloAceleracion {
static public function listarAceleracionMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT a.id_unidad_acel,a.descripcion aceldescrip,a.cantidad_sprockets,a.banda_medidas,a.eje,a.rutaImg imgaceleracion,s.id_sprockets,s.serie spro_serie,s.modelo spro_modelo,s.dientes,s.perforacion,s.descripcion descr_spro,s.precio preciospro,s.rutaImg sproimg,b.id_banda,b.superficie,b.paso,b.numero_serie serie_banda,b.descripcion banda_descripcion,b.ancho ancho_banda,b.material,b.precio bandaprecio,b.rutaImg bandaimg,r.id_rodamientos,r.modelo modelo_descanso,r.rodamiento,r.material material_descanso,r.fijaciones,r.precio descansoprecio,r.rutaImg descansoimg,m.id_motor,m.rpm,m.marca,m.usillo,m.ancho corriente,m.capacidad potencia,m.precio motorprecio,m.rutaImg motorimg  FROM $tabla a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  LEFT JOIN bandas b on b.id_banda=a.banda_tipo LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN motor m on m.id_motor=a.tipo_motor");
		$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarAceleracionRegistroMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  INNER JOIN bandas b on b.id_banda=a.tipo_banda WHERE id_unidad IS NULL");
		$sql -> execute();
		return $sql -> fetchAll();
}
	static public function mdlCrearAceleracion($tabla, $datos,$rutaImagen) {

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL,:descripcion,:tipo,:cantidadsprockets,:tipobandas,:bandasmedidas,:eje,:tipommotor,:tipodescanso,:imagen,NULL)");
	    $sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
	    $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":tipommotor", $datos["tipommotor"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);

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
	static public function mdlActualizarAceleracion($tabla, $datos,$rutaImagen) {

		if(is_null($rutaImagen)){
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET descripcion = :descripcion,tipo_sprockets = :tipo,cantidad_sprockets = :cantidadsprockets,banda_tipo = :tipobandas,banda_medidas = :bandasmedidas,eje = :eje,tipo_motor = :tipomotor,tipo_descanso = :tipodescanso WHERE id_unidad_acel = :id");
	        $sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);			
            $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
			$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
			$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
			$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
			$sql->bindParam(":tipomotor", $datos["tipomotor"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_aceleracion"], PDO::PARAM_INT);
		}else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET descripcion = :descripcion,tipo_sprockets = :tipo,cantidad_sprockets = :cantidadsprockets,banda_tipo = :tipobandas,banda_medidas = :bandasmedidas,eje = :eje,tipo_motor = :tipomotor,tipo_descanso = :tipodescanso,rutaImg = :rutaNueva WHERE id_unidad_acel = :id");
	        $sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
            $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
			$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
			$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
			$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
			$sql->bindParam(":tipomotor", $datos["tipomotor"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_aceleracion"], PDO::PARAM_INT);
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