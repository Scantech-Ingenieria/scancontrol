<?php
require_once "conexion.php";
Class ModeloCalidad {
static public function listarCalidadMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function listarCalidadSprocketsMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprockets");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function listarCalidadBandasMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a LEFT JOIN bandas b on b.id_banda=a.tipo_banda ");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function listarCalidadRodamientosMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a  LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function listarCalidadSensorMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a LEFT JOIN sensor se on se.id_sensor=a.tipo_sensores ");
		$sql -> execute();
		return $sql -> fetchAll();
	}
		static public function listarCalidadCilindrosMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a  LEFT JOIN cilindros c on c.id_cilindros = a.cilindros ");
		$sql -> execute();
		return $sql -> fetchAll();
	}
		static public function listarCalidadMotorMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a LEFT JOIN motor m on m.id_motor=a.tipo_motor");
		$sql -> execute();
		return $sql -> fetchAll();
	}

	static public function listarCalidadRegistroMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT a.id_calidad,a.numero_puestos,a.cantidad_sprockets,a.tipo_banda,a.medida_banda,a.eje,a.tipo_botoneras,a.cantidad_botoneras,a.racors,a.rutaImg imgcalidad,s.id_sprockets,s.serie seriesprockets,s.modelo modelosprockets,s.dientes dientessprockets,s.perforacion perforacionsprockets,s.descripcion descripcionsprockets,s.rutaImg imgsprockets,b.id_banda,b.superficie,b.paso,b.numero_serie seriebanda,b.descripcion bandadescripcion,b.ancho anchobanda,b.material materialbanda,b.rutaImg imgbanda,ci.id_cilindros,ci.nombre nombrecilindros,ci.diametro diametrocilindros,ci.largo largocilindros,ci.materialcuerpo,ci.materialvastago,ci.medidahilo,ci.rutaImg imgcilindros,se.id_sensor,se.tipo_sensor sensortipo,se.marca marcasensor,se.modelo modelosensor,se.voltaje voltajesensor,se.distancia distanciasensor,se.contacto contactosensor,se.rutaImg imgsensor,r.id_rodamientos,r.modelo modelodescanso,r.rodamiento rodamientodescanso,r.material descansomaterial,r.fijaciones fijacionesdescanso,r.rutaImg imgdescanso,m.id_motor,m.rpm,m.marca marcamotor,m.usillo usillomotor,m.ancho anchomotor,m.capacidad capacidadmotor,m.rutaImg imgmotor FROM $tabla a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  LEFT JOIN bandas b on b.id_banda=a.tipo_banda LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN sensor se on se.id_sensor=a.tipo_sensores LEFT JOIN cilindros ci on ci.id_cilindros=a.cilindros LEFT JOIN motor m on m.id_motor=a.tipo_motor WHERE id_unidad IS NULL");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearCalidad($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :puestos, :tiposprockets, :cantidadsprockets, :tipobandas, :medidabanda, :eje, :cilindros, :tipobotoneras, :cantidadbotoneras, :tiposensores, :cantidadsensores, :racors, :tipomotor, :tipodescanso,:imagen,NULL)");
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
		$sql->bindParam(":tipomotor", $datos["tipomotor"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);

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
	static public function mdlActualizarCalidad($tabla, $datos,$rutaImagen) {

		if(is_null($rutaImagen)){
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET numero_puestos = :puestos,tipo_sprockets = :tiposprockets,cantidad_sprockets = :cantidadsprockets,tipo_banda = :tipobandas,medida_banda = :medidabanda,eje = :eje,cilindros = :cilindros,tipo_botoneras = :tipobotoneras,cantidad_botoneras = :cantidadbotoneras,tipo_sensores = :tiposensores,cantidad_sensores = :cantidadsensores,racors = :racors,tipo_motor = :tipomotor,tipo_descanso = :tipodescanso WHERE id_calidad = :id");
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
		$sql->bindParam(":tipomotor", $datos["tipomotor"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
	}else{
	$sql = Conexion::conectar()->prepare("UPDATE $tabla SET numero_puestos = :puestos,tipo_sprockets = :tiposprockets,cantidad_sprockets = :cantidadsprockets,tipo_banda = :tipobandas,medida_banda = :medidabanda,eje = :eje,cilindros = :cilindros,tipo_botoneras = :tipobotoneras,cantidad_botoneras = :cantidadbotoneras,tipo_sensores = :tiposensores,cantidad_sensores = :cantidadsensores,racors = :racors,tipo_motor = :tipomotor,tipo_descanso = :tipodescanso,rutaImg = :rutaNueva WHERE id_calidad = :id");
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
		$sql->bindParam(":tipomotor", $datos["tipomotor"], PDO::PARAM_STR);
		$sql->bindParam(":tipodescanso", $datos["tipodescanso"], PDO::PARAM_STR);
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