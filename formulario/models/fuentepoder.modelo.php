<?php
require_once "conexion.php";
Class ModeloFuentePoder {
static public function listarFuentePoderMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearFuentePoder($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :marca,:amperaje,:corriente,:imagen)");
		$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$sql->bindParam(":amperaje", $datos["amperaje"], PDO::PARAM_STR);
		$sql->bindParam(":corriente", $datos["corriente"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarFuentePoder($tabla, $id_fuentepoder) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_fuentepoder = :id");
		$sql->bindParam(":id", $id_fuentepoder, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarFuentePoder($tabla, $id_fuentepoder) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_fuentepoder = :id");
		$sql->bindParam(":id", $id_fuentepoder, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarFuentePoder($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET numero_serie = :numeroserie,superficie =:superficie,paso =:paso, descripcion = :descripcion,ancho = :ancho,material=:material WHERE id_fuentepoder = :id");
			$sql->bindParam(":numeroserie", $datos["numeroserie"], PDO::PARAM_STR);
			$sql->bindParam(":superficie", $datos["superficie"], PDO::PARAM_STR);
			$sql->bindParam(":paso", $datos["paso"], PDO::PARAM_STR);
			$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
			$sql->bindParam(":material", $datos["material"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_fuentepoder"], PDO::PARAM_INT);
}else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET numero_serie = :numeroserie,superficie = :superficie,paso = :paso,descripcion = :descripcion,ancho = :ancho,material=:material, rutaImg = :rutaNueva WHERE id_fuentepoder = :id");
			$sql->bindParam(":numeroserie", $datos["numeroserie"], PDO::PARAM_STR);
			$sql->bindParam(":superficie", $datos["superficie"], PDO::PARAM_STR);
			$sql->bindParam(":paso", $datos["paso"], PDO::PARAM_STR);
			$sql->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
			$sql->bindParam(":material", $datos["material"], PDO::PARAM_STR);
			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_fuentepoder"], PDO::PARAM_INT);
}

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>