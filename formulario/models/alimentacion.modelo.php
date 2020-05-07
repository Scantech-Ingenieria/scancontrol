<?php
require_once "conexion.php";
Class ModeloAlimentacion {
static public function listarAlimentacionMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT a.id_unidad_alim,a.cantidad_sprockets,a.banda_medidas,a.eje,a.largo_banda,a.rutaImg alimentacionimg,s.id_sprockets,s.serie spro_serie,s.modelo spro_modelo,s.dientes,s.perforacion,s.descripcion descr_spro,s.rutaImg sproimg,b.id_banda,b.superficie,b.paso,b.numero_serie serie_banda,b.descripcion banda_descripcion,b.ancho ancho_banda,b.material,b.rutaImg bandaimg,r.id_rodamientos,r.modelo modelo_descanso,r.rodamiento,r.material material_descanso,r.fijaciones,r.rutaImg descansoimg,m.id_motor,m.rpm,m.marca,m.usillo,m.ancho corriente,m.capacidad potencia,m.rutaImg motorimg  FROM $tabla a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  LEFT JOIN bandas b on b.id_banda=a.banda_tipo LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN motor m on m.id_motor=a.tipo_motor");
		$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarAlimentacionRegistroMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  INNER JOIN bandas b on b.id_banda=a.banda_modular_tipo INNER JOIN rodamientos r on r.id_rodamientos=a.rodamientos WHERE id_unidad_al IS NULL");
		$sql -> execute();
		return $sql -> fetchAll();
}
	static public function mdlCrearAlimentacion($tabla, $datos,$rutaImagen) {

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL,:tipo,:cantidadsprockets,:tipobandas,:bandasmedidas,:eje,:largobanda,:tipommotor,:tipodescanso,:imagen,NULL)");
		$sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":largobanda", $datos["largobanda"], PDO::PARAM_STR);
		$sql->bindParam(":tipommotor", $datos["tipommotor"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);

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

	static public function mdlActualizarAlimentacion($tabla, $datos,$rutaImagen) {

		if(is_null($rutaImagen)){
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_sprockets = :tipo,cantidad_sprockets = :cantidadsprockets,banda_tipo = :tipobandas,banda_medidas = :bandasmedidas,eje = :eje,largo_banda =:largo_banda,tipo_motor = :tipommotor,tipo_descanso = :tipodescanso WHERE id_unidad_alim = :id");

            $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
			$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
			$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
			$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
			$sql->bindParam(":tipommotor", $datos["tipommotor"], PDO::PARAM_STR);
			$sql->bindParam(":largo_banda", $datos["largobanda"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_alimentacion"], PDO::PARAM_INT);
			}else{
					$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_sprockets = :tipo,cantidad_sprockets = :cantidadsprockets,banda_tipo = :tipobandas,banda_medidas = :bandasmedidas,eje = :eje,largo_banda =:largo_banda,tipo_motor = :tipommotor,tipo_descanso = :tipodescanso,rutaImg = :rutaNueva WHERE id_unidad_alim = :id");

            $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
			$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
			$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
			$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
			$sql->bindParam(":tipommotor", $datos["tipommotor"], PDO::PARAM_STR);
			$sql->bindParam(":largo_banda", $datos["largobanda"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_alimentacion"], PDO::PARAM_INT);
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