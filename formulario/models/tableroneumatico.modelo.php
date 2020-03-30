<?php
require_once "conexion.php";
Class ModeloTableroneumatico {
static public function listarTableroneumaticoMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function listarTneumaticoautomaticoMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN automatico a ON a.id_automatico=t.tipo_automatico");
		$sql -> execute();
		return $sql -> fetchAll();
	}
		static public function listarTneumaticofuenteMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN fuentepoder f ON f.id_fuentepoder=t.tipo_fuente");
		$sql -> execute();
		return $sql -> fetchAll();
	}
static public function listarTneumaticomanifoldMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN manifold v ON v.id_manifold=t.tipo_manifold
			");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function listarTneumaticoplcMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN plc v ON v.id_plc=t.tipo_plc
			");
		$sql -> execute();
		return $sql -> fetchAll();
	}

	static public function mdlCrearTableroneumatico($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :altura,:ancho,:fondo,:imagen)");
		$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
		$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
		$sql->bindParam(":fondo", $datos["fondo"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
$sql -> execute(); 
	$sqle = Conexion::conectar()->prepare("SELECT * FROM tablero_neumatico order by id_tableroneumatico desc limit 1");
$sqle -> execute();
	foreach ($sqle as $key => $value){
    $id_tablero=$value["id_tableroneumatico"];
}
$automaticos=count($datos["cantidadautomaticos"]);
$cantidadautomaticos = $datos["cantidadautomaticos"];
$tipoautomaticos = $datos["tipoautomaticos"];
$descripcionautomaticos = $datos["descripcionautomaticos"];


	if($automaticos >=1){
for ($i=0; $i <$automaticos ; $i++) { 
if ($tipoautomaticos[$i]!='') {

$sqlautomatico = Conexion::conectar()->prepare("INSERT INTO tneumatico_automatico(id_tablero_neumatico,cantidad,tipo_automatico,descripcion) VALUES('". $id_tablero."','".$cantidadautomaticos[$i]."', '".$tipoautomaticos[$i]."', '".$descripcionautomaticos[$i]."')");
$sqlautomatico -> execute();
}
}
}
$fuentepoder=count($datos["tipofuentepoder"]);
$tipofuentepoder=$datos["tipofuentepoder"];
$cantidadfuentepoder=$datos["cantidadfuentepoder"];
$descripcionfuentepoder = $datos["descripcionfuentepoder"];


if($fuentepoder >=1){
for ($i=0; $i <$fuentepoder ; $i++) { 
if ($tipofuentepoder[$i]!='') {
$sqlfuentepoder = Conexion::conectar()->prepare("INSERT INTO tneumatico_fuente(id_tablero_neumatico,cantidad,tipo_fuente,descripcion) VALUES('". $id_tablero."','".$cantidadfuentepoder[$i]."','".$tipofuentepoder[$i]."','".$descripcionfuentepoder[$i]."')");
$sqlfuentepoder -> execute();
}
}
}

$manifold=count($datos["tipomanifold"]);
$tipomanifold=$datos["tipomanifold"];

if($manifold >=1){
for ($i=0; $i <$manifold ; $i++) { 

if ($tipomanifold[$i]!='') {

$sqlmanifold = Conexion::conectar()->prepare("INSERT INTO tneumatico_manifold(id_tablero_neumatico,tipo_manifold) VALUES('". $id_tablero."','".$tipomanifold[$i]."')");
$sqlmanifold -> execute();
}
}
}

$plc=count($datos["tipoplc"]);
$tipoplc=$datos["tipoplc"];
$cantidadplc=$datos["cantidadplc"];

if($plc >=1){
for ($i=0; $i <$plc ; $i++) { 
if ($tipoplc[$i]!='') {
$sqlplc = Conexion::conectar()->prepare("INSERT INTO tneumatico_plc(id_tablero_neumatico,cantidad,tipo_plc) VALUES('". $id_tablero."','".$cantidadplc[$i]."','".$tipoplc[$i]."')");
$sqlplc -> execute();
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
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_tneumatico_automatico = :id");
		$sql->bindParam(":id", $id_tautomatico, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarTfuente($tabla, $id_tfuente) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_tneumatico_fuente = :id");
		$sql->bindParam(":id", $id_tfuente, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
		static public function mdlEliminarTvdf($tabla, $id_tvdf) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_tneumatico_manifold = :id");
		$sql->bindParam(":id", $id_tvdf, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
			static public function mdlEliminarTplc($tabla, $id_tplc) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_tneumatico_plc = :id");
		$sql->bindParam(":id", $id_tplc, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
		static public function mdlEliminarTableroneumatico($tabla, $id_tableroneumatico) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_tableroneumatico = :id");
		$sql->bindParam(":id", $id_tableroneumatico, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarTableroneumatico($tabla, $id_tableroneumatico) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_tableroneumatico = :id");
		$sql->bindParam(":id", $id_tableroneumatico, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}

		static public function mdlEditarTableroautomaticos($tabla, $id_tableroneumatico) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN automatico a ON a.id_automatico=t.tipo_automatico WHERE t.id_tablero_neumatico = :id");
		$sql->bindParam(":id", $id_tableroneumatico, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetchAll();
	}
			static public function mdlEditarTableromanifold($tabla, $id_tableroneumatico) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN manifold a ON a.id_manifold=t.tipo_manifold WHERE t.id_tablero_neumatico = :id");
		$sql->bindParam(":id", $id_tableroneumatico, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetchAll();
	}

		static public function mdlEditarTablerofuente($tabla, $id_tableroneumatico) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN fuentepoder f ON f.id_fuentepoder=t.tipo_fuente WHERE t.id_tablero_neumatico = :id");
		$sql->bindParam(":id", $id_tableroneumatico, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetchAll();
	}
		static public function mdlEditarTableroplc($tabla, $id_tableroneumatico) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN plc f ON f.id_plc=t.tipo_plc WHERE t.id_tablero_neumatico = :id");
		$sql->bindParam(":id", $id_tableroneumatico, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlActualizarTableroneumatico($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET altura = :altura,ancho =:ancho,fondo =:fondo WHERE id_tableroneumatico = :id");
			$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
			$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
			$sql->bindParam(":fondo", $datos["fondo"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_tableroneumatico"], PDO::PARAM_INT);
}else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET altura = :altura,ancho =:ancho,fondo =:fondo, rutaImg = :rutaNueva WHERE id_tableroneumatico = :id");
		$sql->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
			$sql->bindParam(":ancho", $datos["ancho"], PDO::PARAM_STR);
			$sql->bindParam(":fondo", $datos["fondo"], PDO::PARAM_STR);
			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_tableroneumatico"], PDO::PARAM_INT);
}
$sql->execute();

$automaticos=count($datos["cantidadautomaticos"]);
if($automaticos >=1){
for ($i=0; $i <$automaticos ; $i++) { 
$id_automatico=$datos['idautomatico'][$i];
$cantidad=$datos['cantidadautomaticos'][$i];
$tipo_automatico=$datos['tipoautomaticos'][$i];
$descripcion_automatico=$datos['descripcionautomaticos'][$i];

$sqlautomatico = Conexion::conectar()->prepare("UPDATE tneumatico_automatico SET cantidad = $cantidad,tipo_automatico = $tipo_automatico,descripcion = '$descripcion_automatico' WHERE id_tneumatico_automatico = '".$id_automatico."'");
$sqlautomatico -> execute();
}
}
$automaticoseditar=count($datos["cantidadautomaticoseditar"]);
$cantidadautomaticoseditar=$datos["cantidadautomaticoseditar"];
$tipoautomaticoseditar=$datos["tipoautomaticoseditar"];
$descripcionautomaticoseditar=$datos["descripcionautomaticoseditar"];
$id_tableroneumatico=$datos["id_tableroneumatico"];

if($automaticoseditar >=1){
for ($i=0; $i <$automaticoseditar ; $i++) { 

$sqlautomaticoeditar = Conexion::conectar()->prepare("INSERT INTO tneumatico_automatico(id_tablero_neumatico,cantidad,tipo_automatico,descripcion) VALUES('". $id_tableroneumatico."','".$cantidadautomaticoseditar[$i]."', '".$tipoautomaticoseditar[$i]."', '".$descripcionautomaticoseditar[$i]."')");
$sqlautomaticoeditar -> execute();
}
}

$fuente=count($datos["idfuente"]);
if($fuente >=1){
for ($i=0; $i <$fuente ; $i++) { 
$id_fuente=$datos['idfuente'][$i];
$tipofuentepoder=$datos['tipofuentepoder'][$i];
$cantidadfuentepoder=$datos['cantidadfuentepoder'][$i];
$descripcionfuentepoder=$datos['descripcionfuentepoder'][$i];


$sqlfuenteneumatico = Conexion::conectar()->prepare("UPDATE tneumatico_fuente SET cantidad = $cantidadfuentepoder,tipo_fuente = $tipofuentepoder,descripcion = '$descripcionfuentepoder' WHERE id_tneumatico_fuente = '".$id_fuente."'");
$sqlfuenteneumatico -> execute();
}
}

$fuenteeditar=count($datos["tipofuentepodereditar"]);
$Tipofuentepodereditar=$datos["tipofuentepodereditar"];
$cantidadfuentepodereditar=$datos["cantidadfuentepodereditar"];
$descripcionfuentepodereditar=$datos["descripcionfuentepodereditar"];

$id_tableroneumatico=$datos["id_tableroneumatico"];


if($fuenteeditar >=1){
for ($i=0; $i <$fuenteeditar ; $i++) { 

$sqlfuenteeditar = Conexion::conectar()->prepare("INSERT INTO tneumatico_fuente(id_tablero_neumatico,tipo_fuente,cantidad,descripcion) VALUES('". $id_tableroneumatico."', '".$Tipofuentepodereditar[$i]."', '".$cantidadfuentepodereditar[$i]."', '".$descripcionfuentepodereditar[$i]."')");
$sqlfuenteeditar -> execute();
}
}


$manifold=count($datos["idmanifold"]);
if($manifold >=1){
for ($i=0; $i <$manifold ; $i++) { 
$idmanifold=$datos['idmanifold'][$i];
$tipomanifold=$datos['tipomanifold'][$i];

$sqlmanifold = Conexion::conectar()->prepare("UPDATE tneumatico_manifold SET tipo_manifold = $tipomanifold WHERE id_tneumatico_manifold = '".$idmanifold."'");
$sqlmanifold -> execute();
}
}

$manifoldeditar=count($datos["tipomanifoldeditar"]);
$tipomanifoldeditar=$datos["tipomanifoldeditar"];



if($manifoldeditar >=1){
for ($i=0; $i <$manifoldeditar ; $i++) { 

$sqlmanifoldeditar = Conexion::conectar()->prepare("INSERT INTO tneumatico_manifold(id_tablero_neumatico,tipo_manifold) VALUES('". $id_tableroneumatico."','".$tipomanifoldeditar[$i]."')");
$sqlmanifoldeditar -> execute();
}
}

$plc=count($datos["idplc"]);
if($plc >=1){
for ($i=0; $i <$plc ; $i++) { 
$idplc=$datos['idplc'][$i];
$tipoplc=$datos['tipoplc'][$i];
$cantidadplc=$datos['cantidadplc'][$i];

$sqlplc = Conexion::conectar()->prepare("UPDATE tneumatico_plc SET cantidad = $cantidadplc,tipo_plc = $tipoplc WHERE id_tneumatico_plc = '".$idplc."'");
$sqlplc -> execute();
}
}

$plceditar=count($datos["tipoplceditar"]);
$tipoplceditar=$datos["tipoplceditar"];
$cantidadplceditar=$datos["cantidadplceditar"];


if($plceditar >=1){
for ($i=0; $i <$plceditar ; $i++) { 

$sqlplceditar = Conexion::conectar()->prepare("INSERT INTO tneumatico_plc(id_tablero_neumatico,cantidad,tipo_plc) VALUES('". $id_tableroneumatico."','".$cantidadplceditar[$i]."','".$tipoplceditar[$i]."')");
$sqlplceditar -> execute();
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