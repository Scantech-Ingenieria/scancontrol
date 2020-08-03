<?php
require_once "conexion.php";
Class ModeloDescarga {
static public function listarDescargaMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT a.id_unidad_descarga,a.descripcion descdescrip, a.cantidad_sprocket,a.medida_banda,a.eje,a.altura,a.buffer,a.cantidad_paletas,a.rutaImg descargaimg,s.id_sprockets,s.serie spro_serie,s.modelo spro_modelo,s.dientes,s.perforacion,s.descripcion descr_spro,s.rutaImg sproimg,b.id_banda,b.superficie,b.paso,b.numero_serie serie_banda,b.descripcion banda_descripcion,b.ancho ancho_banda,b.material,b.rutaImg bandaimg,r.id_rodamientos,r.modelo modelo_descanso,r.rodamiento,r.material material_descanso,r.fijaciones,r.rutaImg descansoimg,m.id_motor,m.rpm,m.marca,m.usillo,m.ancho corriente,m.capacidad potencia,m.rutaImg motorimg,p.id_paletas,p.tipo_paleta,p.medida_paleta,p.decs,p.dics,p.acs,p.aci,p.dici,p.altura altura_paleta,p.ancho ancho_paleta,p.fondo fondo_paleta,p.perforacion perforacion_paleta,p.anclaje,p.alturaeje,p.diametroeje,p.medidas_brazo_leva,p.cilindrado cilindrado_paleta,p.racors,p.orientacion,p.rutaImg paletaimg,c.id_cilindros,c.nombre nombre_cilindro,c.diametro diametro_cilindro,c.largo largo_cilindro,c.materialcuerpo,c.materialvastago,c.medidahilo,c.rutaImg cilindroImg  FROM $tabla a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprocket  LEFT JOIN bandas b on b.id_banda=a.tipo_banda LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN motor m on m.id_motor=a.tipo_motor LEFT JOIN paletas p on p.id_paletas=a.tipo_paletas LEFT JOIN cilindros c on c.id_cilindros=a.tipo_cilindro");
		$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarDescargaRegistroMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprocket  INNER JOIN bandas b on b.id_banda=a.tipo_banda INNER JOIN paletas p on p.id_paletas=a.id_tipo_paletas WHERE id_unidad IS NULL");
		$sql -> execute();
		return $sql -> fetchAll();
}
	static public function mdlCrearDescarga($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL,:descripcion,:tipo,:cantidadsprockets,:tipobandas,:bandasmedidas,:tipopaletas,:cantidadpaletas,:eje,:altura,:buffer,:tipomotor,:tipodescanso,:tipocilindro,:imagen,NULL)");
			$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
		$sql->bindParam(":tipopaletas", $datos["tipopaletas"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadpaletas", $datos["cantidadpaletas"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
		$sql->bindParam(":buffer", $datos["buffer"], PDO::PARAM_STR);
		$sql->bindParam(":tipomotor", $datos["tipomotor"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
		$sql->bindParam(":tipocilindro", $datos["tipocilindro"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);


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
	static public function mdlActualizarDescarga($tabla, $datos,$rutaImagen) {

		if(is_null($rutaImagen)){

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET descripcion = :descripcion,tipo_sprocket = :tipo,cantidad_sprocket = :cantidadsprockets,tipo_banda = :tipobandas,medida_banda = :bandasmedidas,tipo_paletas = :tipopaletas,cantidad_paletas = :cantidadpaletas,eje = :eje,altura = :altura,buffer = :buffer,tipo_motor = :tipomotor,tipo_descanso = :tipodescanso,tipo_cilindro = :tipocilindro WHERE id_unidad_descarga = :id");
		    $sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);

	    $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
		$sql->bindParam(":tipopaletas", $datos["tipopaletas"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadpaletas", $datos["cantidadpaletas"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
		$sql->bindParam(":buffer", $datos["buffer"], PDO::PARAM_STR);
		$sql->bindParam(":tipomotor", $datos["tipomotor"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
		$sql->bindParam(":tipocilindro", $datos["tipocilindro"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_descarga"], PDO::PARAM_INT);
		}else{
	$sql = Conexion::conectar()->prepare("UPDATE $tabla SET descripcion = :descripcion,tipo_sprocket = :tipo,cantidad_sprocket = :cantidadsprockets,tipo_banda = :tipobandas,medida_banda = :bandasmedidas,tipo_paletas = :tipopaletas,cantidad_paletas = :cantidadpaletas,eje = :eje,altura = :altura,buffer = :buffer,tipo_motor = :tipomotor,tipo_descanso = :tipodescanso,tipo_cilindro = :tipocilindro,rutaImg = :rutaNueva WHERE id_unidad_descarga = :id");

	    $sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
	    $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
		$sql->bindParam(":tipopaletas", $datos["tipopaletas"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadpaletas", $datos["cantidadpaletas"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
		$sql->bindParam(":buffer", $datos["buffer"], PDO::PARAM_STR);
		$sql->bindParam(":tipomotor", $datos["tipomotor"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
		$sql->bindParam(":tipocilindro", $datos["tipocilindro"], PDO::PARAM_STR);
		$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);

			$sql->bindParam(":id", $datos["id_descarga"], PDO::PARAM_INT);

		}
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}
?>