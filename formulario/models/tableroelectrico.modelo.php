<?php
require_once "conexion.php";
Class ModeloTableroelectrico {
static public function listarTableroelectricoMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function listarTelectricoautomaticoMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN automatico a ON a.id_automatico=t.tipo_automatico");
		$sql -> execute();
		return $sql -> fetchAll();
	}
		static public function listarTelectricofuenteMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN fuentepoder f ON f.id_fuentepoder=t.tipo_fuente");
		$sql -> execute();
		return $sql -> fetchAll();
	}
static public function listarTelectricovdfMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN variador_frecuencia v ON v.id_vdf=t.tipo_vdf
			");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearTableroelectrico($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :altura,:ancho,:fondo,:contactor,:imagen)");
		$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
		$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
		$sql->bindParam(":fondo", $datos["fondo"], PDO::PARAM_STR);
		$sql->bindParam(":contactor", $datos["contactor"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
$sql -> execute(); 
	$sqle = Conexion::conectar()->prepare("SELECT * FROM tableroelectrico order by id_tableroelectrico desc limit 1");
$sqle -> execute();
	foreach ($sqle as $key => $value){
    $id_tablero=$value["id_tableroelectrico"];
}
$automaticos=count($datos["cantidadautomaticos"]);
$cantidadautomaticos = $datos["cantidadautomaticos"];
$tipoautomaticos = $datos["tipoautomaticos"];
$descripcionautomaticos = $datos["descripcionautomaticos"];


	if($automaticos >=1){
for ($i=0; $i <$automaticos ; $i++) { 
if ($tipoautomaticos[$i]!='') {

$sqlautomatico = Conexion::conectar()->prepare("INSERT INTO telectrico_automatico(id_tablero_electrico,cantidad,tipo_automatico,descripcion) VALUES('". $id_tablero."','".$cantidadautomaticos[$i]."', '".$tipoautomaticos[$i]."','".$descripcionautomaticos[$i]."')");
$sqlautomatico -> execute();
}
}
}
$fuentepoder=count($datos["tipofuentepoder"]);
$tipofuentepoder=$datos["tipofuentepoder"];
if($fuentepoder >=1){
for ($i=0; $i <$fuentepoder ; $i++) { 
if ($tipofuentepoder[$i]!='') {
$sqlfuentepoder = Conexion::conectar()->prepare("INSERT INTO telectrico_fuente(id_tablero_electrico,tipo_fuente) VALUES('". $id_tablero."','".$tipofuentepoder[$i]."')");
$sqlfuentepoder -> execute();
}
}
}
$vdf=count($datos["cantidadvdf"]);
$cantidadvdf=$datos["cantidadvdf"];
$tipovdf=$datos["tipovdf"];
$descripcionvdf = $datos["descripcionvdf"];


if($vdf >=1){
for ($i=0; $i <$vdf ; $i++) { 

if ($tipovdf[$i]!='') {

$sqlvdf = Conexion::conectar()->prepare("INSERT INTO telectrico_vdf(id_tablero_electrico,cantidad,tipo_vdf,descripcion) VALUES('". $id_tablero."','".$cantidadvdf[$i]."','".$tipovdf[$i]."','".$descripcionvdf[$i]."')");
$sqlvdf -> execute();
}
}
}
$estado=true;
		if( $estado==true ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarTautomatico($tabla, $id_tautomatico) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_telectrico_automatico = :id");
		$sql->bindParam(":id", $id_tautomatico, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarTfuente($tabla, $id_tfuente) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_telectrico_fuente = :id");
		$sql->bindParam(":id", $id_tfuente, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}	static public function mdlEliminarTvdf($tabla, $id_tvdf) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_telectrico_vdf = :id");
		$sql->bindParam(":id", $id_tvdf, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
		static public function mdlEliminarTableroelectrico($tabla, $id_tableroelectrico) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_tableroelectrico = :id");
		$sql->bindParam(":id", $id_tableroelectrico, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarTableroelectrico($tabla, $id_tableroelectrico) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_tableroelectrico = :id");
		$sql->bindParam(":id", $id_tableroelectrico, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}

		static public function mdlEditarTableroautomaticos($tabla, $id_tableroelectrico) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN automatico a ON a.id_automatico=t.tipo_automatico WHERE t.id_tablero_electrico = :id");
		$sql->bindParam(":id", $id_tableroelectrico, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetchAll();
	}
			static public function mdlEditarTablerovdf($tabla, $id_tableroelectrico) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN variador_frecuencia a ON a.id_vdf=t.tipo_vdf WHERE t.id_tablero_electrico = :id");
		$sql->bindParam(":id", $id_tableroelectrico, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetchAll();
	}

		static public function mdlEditarTablerofuente($tabla, $id_tableroelectrico) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN fuentepoder f ON f.id_fuentepoder=t.tipo_fuente WHERE t.id_tablero_electrico = :id");
		$sql->bindParam(":id", $id_tableroelectrico, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlActualizarTableroelectrico($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET altura = :altura,ancho =:ancho,fondo =:fondo, contactor = :contactor WHERE id_tableroelectrico = :id");
			$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
			$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
			$sql->bindParam(":fondo", $datos["fondo"], PDO::PARAM_STR);
			$sql->bindParam(":contactor", $datos["contactor"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_tableroelectrico"], PDO::PARAM_INT);
}else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET altura = :altura,ancho =:ancho,fondo =:fondo, contactor = :contactor, rutaImg = :rutaNueva WHERE id_tableroelectrico = :id");
		$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
			$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
			$sql->bindParam(":fondo", $datos["fondo"], PDO::PARAM_STR);
			$sql->bindParam(":contactor", $datos["contactor"], PDO::PARAM_STR);
			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_tableroelectrico"], PDO::PARAM_INT);
}
$sql->execute();

$automaticos=count($datos["cantidadautomaticos"]);
if($automaticos >=1){
for ($i=0; $i <$automaticos ; $i++) { 
$id_automatico=$datos['idautomatico'][$i];
$cantidad=$datos['cantidadautomaticos'][$i];
$tipo_automatico=$datos['tipoautomaticos'][$i];
$descripcionautomaticos=$datos['descripcionautomaticos'][$i];

$sqlautomatico = Conexion::conectar()->prepare("UPDATE telectrico_automatico SET cantidad = $cantidad,tipo_automatico = $tipo_automatico,descripcion ='$descripcionautomaticos' WHERE id_telectrico_automatico = '".$id_automatico."'");
$sqlautomatico -> execute();
}
}
$automaticoseditar=count($datos["cantidadautomaticoseditar"]);
$cantidadautomaticoseditar=$datos["cantidadautomaticoseditar"];
$tipoautomaticoseditar=$datos["tipoautomaticoseditar"];
$id_tableroelectrico=$datos["id_tableroelectrico"];
$descripcionautomaticoseditar=$datos['descripcionautomaticoseditar'];
if($automaticoseditar >=1){
for ($i=0; $i <$automaticoseditar ; $i++) { 

$sqlautomaticoeditar = Conexion::conectar()->prepare("INSERT INTO telectrico_automatico(id_tablero_electrico,cantidad,tipo_automatico,descripcion) VALUES('". $id_tableroelectrico."','".$cantidadautomaticoseditar[$i]."', '".$tipoautomaticoseditar[$i]."','".$descripcionautomaticoseditar[$i]."')");
$sqlautomaticoeditar -> execute();
}
}

$fuente=count($datos["idfuente"]);
if($fuente >=1){
for ($i=0; $i <$fuente ; $i++) { 
$id_fuente=$datos['idfuente'][$i];
$tipofuentepoder=$datos['tipofuentepoder'][$i];
$sqlfuente = Conexion::conectar()->prepare("UPDATE telectrico_fuente SET tipo_fuente = $tipofuentepoder WHERE id_telectrico_fuente = '".$id_fuente."'");
$sqlfuente -> execute();
}
}

$fuenteeditar=count($datos["tipofuentepodereditar"]);
$Tipofuentepodereditar=$datos["tipofuentepodereditar"];
$id_tableroelectrico=$datos["id_tableroelectrico"];


if($fuenteeditar >=1){
for ($i=0; $i <$fuenteeditar ; $i++) { 

$sqlfuenteeditar = Conexion::conectar()->prepare("INSERT INTO telectrico_fuente(id_tablero_electrico,tipo_fuente) VALUES('". $id_tableroelectrico."', '".$Tipofuentepodereditar[$i]."')");
$sqlfuenteeditar -> execute();
}
}


$vdf=count($datos["idvdf"]);
if($vdf >=1){
for ($i=0; $i <$vdf ; $i++) { 
$idvdf=$datos['idvdf'][$i];
$cantidadvdf=$datos['cantidadvdf'][$i];
$tipovdf=$datos['tipovdf'][$i];
$descripcionvdf=$datos['descripcionvdf'][$i];


$sqlvdf = Conexion::conectar()->prepare("UPDATE telectrico_vdf SET cantidad = $cantidadvdf,tipo_vdf = $tipovdf,descripcion = '$descripcionvdf' WHERE id_telectrico_vdf = '".$idvdf."'");
$sqlvdf -> execute();
}
}

$vdfeditar=count($datos["tipovdfeditar"]);
$tipovdfeditar=$datos["tipovdfeditar"];
$cantidadvdfeditar=$datos["cantidadvdfeditar"];
$descripcionvdfeditar=$datos['descripcionvdfeditar'];


if($vdfeditar >=1){
for ($i=0; $i <$vdfeditar ; $i++) { 

$sqlvdfeditar = Conexion::conectar()->prepare("INSERT INTO telectrico_vdf(id_tablero_electrico,cantidad,tipo_vdf,descripcion) VALUES('". $id_tableroelectrico."','". $cantidadvdfeditar[$i]."', '".$tipovdfeditar[$i]."','".$descripcionvdfeditar[$i]."')");
$sqlvdfeditar -> execute();
}
}
$estado=true;


		if($estado==true) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>