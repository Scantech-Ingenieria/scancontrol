<?php


require_once "conexion.php";


Class ModeloPaletas {


static public function listarPaletasMdl($tabla) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();


	}



	static public function mdlCrearPaletas($tabla, $datos) {

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :tipopaletas,:medidapaletas,:medidabujes,:medidahousing,:medidaeje,:medidabrazo,:cilindro,:racors)");
		$sql->bindParam(":tipopaletas", $datos["tipopaletas"], PDO::PARAM_STR);
		$sql->bindParam(":medidapaletas", $datos["medidapaletas"], PDO::PARAM_STR);
		$sql->bindParam(":medidabujes", $datos["medidabujes"], PDO::PARAM_STR);
		$sql->bindParam(":medidahousing", $datos["medidahousing"], PDO::PARAM_STR);
		$sql->bindParam(":medidaeje", $datos["medidaeje"], PDO::PARAM_STR);
		$sql->bindParam(":medidabrazo", $datos["medidabrazo"], PDO::PARAM_STR);
		$sql->bindParam(":cilindro", $datos["cilindro"], PDO::PARAM_STR);
		$sql->bindParam(":racors", $datos["racors"], PDO::PARAM_STR);


	

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

	static public function mdlActualizarPaletas($tabla, $datos) {

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_paleta = :tipopaletas,medida_paleta = :medidapaletas,medida_bujes_paleta = :medidabujes,medidas_housing=:medidahousing,medidas_eje_paleta=:medidaeje,medidas_brazo_leva=:medidabrazo,cilindrado=:cilindro,racors=:racors WHERE id_paletas = :id");


			$sql->bindParam(":racors", $datos["racors"], PDO::PARAM_STR);

			$sql->bindParam(":cilindro", $datos["cilindro"], PDO::PARAM_STR);
			$sql->bindParam(":medidabrazo", $datos["medidabrazo"], PDO::PARAM_STR);
			$sql->bindParam(":medidaeje", $datos["medidaeje"], PDO::PARAM_STR);

			$sql->bindParam(":medidahousing", $datos["medidahousing"], PDO::PARAM_STR);
			$sql->bindParam(":medidabujes", $datos["medidabujes"], PDO::PARAM_STR);
			$sql->bindParam(":medidapaletas", $datos["medidapaletas"], PDO::PARAM_STR);
			$sql->bindParam(":tipopaletas", $datos["tipopaletas"], PDO::PARAM_STR);

			$sql->bindParam(":id", $datos["id_paletas"], PDO::PARAM_INT);


		

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}

	}

}


?>