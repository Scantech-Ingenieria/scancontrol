<?php
require_once "conexion.php";
Class ModeloPaletas {
static public function listarPaletasMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearPaletas($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :tipopaletas,:medidapaletas,:decs,:dics,:acs,:aci,:dici,:altura,:ancho,:fondo,:perfo,:anclaje,:alturaeje,:diametroeje,:medidabrazo,:cilindro,:racors,:orientacion,:precio,:imagen)");
		$sql->bindParam(":tipopaletas", $datos["tipopaletas"], PDO::PARAM_STR);
		$sql->bindParam(":medidapaletas", $datos["medidapaletas"], PDO::PARAM_STR);
		$sql->bindParam(":decs", $datos["decs"], PDO::PARAM_STR);
		$sql->bindParam(":dics", $datos["dics"], PDO::PARAM_STR);
		$sql->bindParam(":acs", $datos["acs"], PDO::PARAM_STR);
		$sql->bindParam(":aci", $datos["aci"], PDO::PARAM_STR);
		$sql->bindParam(":dici", $datos["dici"], PDO::PARAM_STR);
		$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
		$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
		$sql->bindParam(":fondo", $datos["fondo"], PDO::PARAM_STR);
		$sql->bindParam(":perfo", $datos["perfo"], PDO::PARAM_STR);
		$sql->bindParam(":anclaje", $datos["anclaje"], PDO::PARAM_STR);
		$sql->bindParam(":alturaeje", $datos["alturaeje"], PDO::PARAM_STR);
		$sql->bindParam(":diametroeje", $datos["diametroeje"], PDO::PARAM_STR);
		$sql->bindParam(":medidabrazo", $datos["medidabrazo"], PDO::PARAM_STR);
		$sql->bindParam(":cilindro", $datos["cilindro"], PDO::PARAM_STR);
		$sql->bindParam(":racors", $datos["racors"], PDO::PARAM_STR);
		$sql->bindParam(":orientacion", $datos["orientacion"], PDO::PARAM_STR);
		$sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarPaletas($tabla, $id_paletas) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_paletas = :id");
		$sql->bindParam(":id", $id_paletas, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarPaletas($tabla, $id_paletas) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_paletas = :id");
		$sql->bindParam(":id", $id_paletas, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarPaletas($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_paleta = :tipopaletas,medida_paleta = :medidapaletas,decs = :decs,dics=:dics,acs=:acs,aci=:aci,dici=:dici,altura=:altura,ancho=:ancho,fondo=:fondo,perforacion=:perfo,anclaje=:anclaje,alturaeje=:alturaeje,diametroeje=:diametroeje,medidas_brazo_leva=:medidabrazo,cilindrado=:cilindro,racors=:racors,orientacion =:orientacion,precio = :precio WHERE id_paletas = :id");
			$sql->bindParam(":tipopaletas", $datos["tipopaletas"], PDO::PARAM_STR);
		$sql->bindParam(":medidapaletas", $datos["medidapaletas"], PDO::PARAM_STR);
		$sql->bindParam(":decs", $datos["decs"], PDO::PARAM_STR);
		$sql->bindParam(":dics", $datos["dics"], PDO::PARAM_STR);
		$sql->bindParam(":acs", $datos["acs"], PDO::PARAM_STR);
		$sql->bindParam(":aci", $datos["aci"], PDO::PARAM_STR);
		$sql->bindParam(":dici", $datos["dici"], PDO::PARAM_STR);
		$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
		$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
		$sql->bindParam(":fondo", $datos["fondo"], PDO::PARAM_STR);
		$sql->bindParam(":perfo", $datos["perfo"], PDO::PARAM_STR);
		$sql->bindParam(":anclaje", $datos["anclaje"], PDO::PARAM_STR);
		$sql->bindParam(":alturaeje", $datos["alturaeje"], PDO::PARAM_STR);
		$sql->bindParam(":diametroeje", $datos["diametroeje"], PDO::PARAM_STR);
		$sql->bindParam(":medidabrazo", $datos["medidabrazo"], PDO::PARAM_STR);
		$sql->bindParam(":cilindro", $datos["cilindro"], PDO::PARAM_STR);
		$sql->bindParam(":racors", $datos["racors"], PDO::PARAM_STR);
		$sql->bindParam(":orientacion", $datos["orientacion"], PDO::PARAM_STR);
		$sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$sql->bindParam(":id", $datos["id_paletas"], PDO::PARAM_INT);

		}else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_paleta = :tipopaletas,medida_paleta = :medidapaletas,decs = :decs,dics=:dics,acs=:acs,aci=:aci,dici=:dici,altura=:altura,ancho=:ancho,fondo=:fondo,perforacion=:perfo,anclaje=:anclaje,alturaeje=:alturaeje,diametroeje=:diametroeje,medidas_brazo_leva=:medidabrazo,cilindrado=:cilindro,racors=:racors,orientacion =:orientacion,precio = :precio,rutaImg = :rutaNueva WHERE id_paletas = :id");

			$sql->bindParam(":tipopaletas", $datos["tipopaletas"], PDO::PARAM_STR);
		$sql->bindParam(":medidapaletas", $datos["medidapaletas"], PDO::PARAM_STR);
		$sql->bindParam(":decs", $datos["decs"], PDO::PARAM_STR);
		$sql->bindParam(":dics", $datos["dics"], PDO::PARAM_STR);
		$sql->bindParam(":acs", $datos["acs"], PDO::PARAM_STR);
		$sql->bindParam(":aci", $datos["aci"], PDO::PARAM_STR);
		$sql->bindParam(":dici", $datos["dici"], PDO::PARAM_STR);
		$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
		$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
		$sql->bindParam(":fondo", $datos["fondo"], PDO::PARAM_STR);
		$sql->bindParam(":perfo", $datos["perfo"], PDO::PARAM_STR);
		$sql->bindParam(":anclaje", $datos["anclaje"], PDO::PARAM_STR);
		$sql->bindParam(":alturaeje", $datos["alturaeje"], PDO::PARAM_STR);
		$sql->bindParam(":diametroeje", $datos["diametroeje"], PDO::PARAM_STR);
		$sql->bindParam(":medidabrazo", $datos["medidabrazo"], PDO::PARAM_STR);
		$sql->bindParam(":cilindro", $datos["cilindro"], PDO::PARAM_STR);
		$sql->bindParam(":racors", $datos["racors"], PDO::PARAM_STR);
		$sql->bindParam(":orientacion", $datos["orientacion"], PDO::PARAM_STR);
		$sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
		$sql->bindParam(":id", $datos["id_paletas"], PDO::PARAM_INT);

		}
		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}
?>