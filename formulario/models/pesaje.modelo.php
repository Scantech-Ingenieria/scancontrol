<?php
require_once "conexion.php";
Class ModeloPesaje {
static public function listarPesajeMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT a.id_unidad_pesaje,a.cantidad_sensores,a.cantidad_sprocket,a.medida_banda,a.eje,a.entradaalto,a.entradaancho,a.entradaespesor,a.pesajealto,a.pesajeancho,a.pesajeespesor,a.salidaalto,a.salidaancho,a.salidaespesor,a.rutaImg imgpesaje,se.id_sensor,se.tipo_sensor,se.marca marcasensor,se.modelo modelosensor,se.voltaje voltajesensor,se.distancia distanciasensor,se.contacto contactosensor,se.rutaImg imgsensor,s.id_sprockets,s.serie seriesprockets,s.modelo modelosprockets,s.dientes dientessprockets,s.perforacion perforacionsprockets,s.descripcion descripcionsprockets,s.rutaImg imgsprockets,b.id_banda,b.superficie superficiebanda,b.paso pasobanda,b.numero_serie numeroseriebanda,b.descripcion descripcionbanda,b.ancho anchobanda,b.material bandamaterial,b.rutaImg imgbanda,m.id_motor,m.rpm,m.marca marcamotor,m.usillo,m.ancho anchomotor,m.capacidad capacidadmotor,m.rutaImg imgmotor,r.id_rodamientos,r.modelo modelodescanso,r.rodamiento,r.material materialdescanso,r.fijaciones fijacionesdescanso,r.rutaImg imgdescanso,te.id_tableroelectrico,te.altura alturate,te.ancho anchote,te.fondo fondote,te.contactor contactorte,te.rutaImg imgte,tn.id_tableroneumatico,tn.altura alturatn,tn.ancho anchotn,tn.fondo fondotn,tn.rutaImg imgtn  FROM $tabla a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprocket  LEFT JOIN bandas b on b.id_banda=a.tipo_banda LEFT JOIN sensor se on se.id_sensor=a.tipo_sensores LEFT JOIN motor m on m.id_motor=a.tipo_motor LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_rodamientos LEFT JOIN tableroelectrico te on te.id_tableroelectrico=a.tableroelectrico LEFT JOIN tablero_neumatico tn on tn.id_tableroneumatico=a.tableroneumatico");
		$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarPesajeRegistroMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN sprockets s on s.id_sprockets=a.tipo_sprocket  INNER JOIN bandas b on b.id_banda=a.tipo_banda INNER JOIN sensor se on se.id_sensor=a.tipo_sensores WHERE a.id_unidad IS NULL");
		$sql -> execute();
		return $sql -> fetchAll();
}
	static public function mdlCrearPesaje($tabla, $datos,$rutaImagen) {

		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL,:tiposensores,:cantidadsensores,:tiposprockets,:cantidadsprockets,:tipobandas,:bandasmedidas,:eje,:tipomotor,:tiporodamientos,:entradaalto,:entradaancho,:entradaespesor,:pesajealto,:pesajeancho,:pesajeespesor,:salidaalto,:salidaancho,:salidaespesor,:tableroelectrico,:tableroneumatico,:imagen,NULL)");


		$sql->bindParam(":tiposensores", $datos["tiposensores"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsensores", $datos["cantidadsensores"], PDO::PARAM_STR);
		$sql->bindParam(":tiposprockets", $datos["tiposprockets"], PDO::PARAM_STR);
		$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
		$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
		$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
		$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
		$sql->bindParam(":tipomotor", $datos["tipomotor"], PDO::PARAM_STR);
		$sql->bindParam(":tiporodamientos", $datos["tiporodamientos"], PDO::PARAM_STR);
		$sql->bindParam(":entradaalto", $datos["entradaalto"], PDO::PARAM_STR);
		$sql->bindParam(":entradaancho", $datos["entradaancho"], PDO::PARAM_STR);
		$sql->bindParam(":entradaespesor", $datos["entradaespesor"], PDO::PARAM_STR);
		$sql->bindParam(":pesajealto", $datos["pesajealto"], PDO::PARAM_STR);
		$sql->bindParam(":pesajeancho", $datos["pesajeancho"], PDO::PARAM_STR);
		$sql->bindParam(":pesajeespesor", $datos["pesajeespesor"], PDO::PARAM_STR);
		$sql->bindParam(":salidaalto", $datos["salidaalto"], PDO::PARAM_STR);
		$sql->bindParam(":salidaancho", $datos["salidaancho"], PDO::PARAM_STR);
		$sql->bindParam(":salidaespesor", $datos["salidaespesor"], PDO::PARAM_STR);
		$sql->bindParam(":tableroelectrico", $datos["tableroelectrico"], PDO::PARAM_STR);
		$sql->bindParam(":tableroneumatico", $datos["tableroneumatico"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);

	
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarPesaje($tabla, $id_pesaje) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_unidad_pesaje = :id");
    $sql->bindParam(":id", $id_pesaje, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarPesaje($tabla, $id_pesaje) {

		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_unidad_pesaje = :id");
		$sql->bindParam(":id", $id_pesaje, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarPesaje($tabla, $datos,$rutaImagen) {

		if(is_null($rutaImagen)){

			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_sensores = :tiposensores,cantidad_sensores = :cantidadsensores,tipo_sprocket = :tipo,cantidad_sprocket = :cantidadsprockets,tipo_banda = :tipobandas,medida_banda = :bandasmedidas,eje = :eje,tipo_motor = :tipomotor,tipo_rodamientos = :tiporodamientos,entradaalto = :entradaalto,entradaancho = :entradaancho,entradaespesor = :entradaespesor,pesajealto = :pesajealto,pesajeancho = :pesajeancho,pesajeespesor = :pesajeespesor,salidaalto = :salidaalto,salidaancho = :salidaancho,salidaespesor = :salidaespesor,tableroelectrico = :tableroelectrico,tableroneumatico = :tableroneumatico WHERE id_unidad_pesaje = :id");
			$sql->bindParam(":tiposensores", $datos["tiposensores"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsensores", $datos["cantidadsensores"], PDO::PARAM_STR);
            $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
			$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
			$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
			$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
			$sql->bindParam(":tipomotor", $datos["tipomotor"], PDO::PARAM_STR);
		    $sql->bindParam(":tiporodamientos", $datos["tiporodamientos"], PDO::PARAM_STR);	
		    $sql->bindParam(":entradaalto", $datos["entradaalto"], PDO::PARAM_STR);	
		    $sql->bindParam(":entradaancho", $datos["entradaancho"], PDO::PARAM_STR);	
		    $sql->bindParam(":entradaespesor", $datos["entradaespesor"], PDO::PARAM_STR);	
		    $sql->bindParam(":pesajealto", $datos["pesajealto"], PDO::PARAM_STR);	
		    $sql->bindParam(":pesajeancho", $datos["pesajeancho"], PDO::PARAM_STR);	
		    $sql->bindParam(":pesajeespesor", $datos["pesajeespesor"], PDO::PARAM_STR);	
		    $sql->bindParam(":salidaalto", $datos["salidaalto"], PDO::PARAM_STR);	
		    $sql->bindParam(":salidaancho", $datos["salidaancho"], PDO::PARAM_STR);	
		    $sql->bindParam(":salidaespesor", $datos["salidaespesor"], PDO::PARAM_STR);	
		    $sql->bindParam(":tableroelectrico", $datos["tableroelectrico"], PDO::PARAM_STR);	
		    $sql->bindParam(":tableroneumatico", $datos["tableroneumatico"], PDO::PARAM_STR);	
		    $sql->bindParam(":id", $datos["id_pesaje"], PDO::PARAM_INT);

}else{

	$sql = Conexion::conectar()->prepare("UPDATE $tabla SET tipo_sensores = :tiposensores,cantidad_sensores = :cantidadsensores,tipo_sprocket = :tipo,cantidad_sprocket = :cantidadsprockets,tipo_banda = :tipobandas,medida_banda = :bandasmedidas,eje = :eje,tipo_motor = :tipomotor,tipo_rodamientos = :tiporodamientos,entradaalto = :entradaalto,entradaancho = :entradaancho,entradaespesor = :entradaespesor,pesajealto = :pesajealto,pesajeancho = :pesajeancho,pesajeespesor = :pesajeespesor,salidaalto = :salidaalto,salidaancho = :salidaancho,salidaespesor = :salidaespesor,tableroelectrico = :tableroelectrico,tableroneumatico = :tableroneumatico,rutaImg = :rutaNueva WHERE id_unidad_pesaje = :id");
			$sql->bindParam(":tiposensores", $datos["tiposensores"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsensores", $datos["cantidadsensores"], PDO::PARAM_STR);
            $sql->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$sql->bindParam(":cantidadsprockets", $datos["cantidadsprockets"], PDO::PARAM_STR);
			$sql->bindParam(":tipobandas", $datos["tipobandas"], PDO::PARAM_STR);
			$sql->bindParam(":bandasmedidas", $datos["bandasmedidas"], PDO::PARAM_STR);
			$sql->bindParam(":eje", $datos["eje"], PDO::PARAM_STR);
			$sql->bindParam(":tipomotor", $datos["tipomotor"], PDO::PARAM_STR);
		    $sql->bindParam(":tiporodamientos", $datos["tiporodamientos"], PDO::PARAM_STR);	
		    $sql->bindParam(":entradaalto", $datos["entradaalto"], PDO::PARAM_STR);	
		    $sql->bindParam(":entradaancho", $datos["entradaancho"], PDO::PARAM_STR);	
		    $sql->bindParam(":entradaespesor", $datos["entradaespesor"], PDO::PARAM_STR);	
		    $sql->bindParam(":pesajealto", $datos["pesajealto"], PDO::PARAM_STR);	
		    $sql->bindParam(":pesajeancho", $datos["pesajeancho"], PDO::PARAM_STR);	
		    $sql->bindParam(":pesajeespesor", $datos["pesajeespesor"], PDO::PARAM_STR);	
		    $sql->bindParam(":salidaalto", $datos["salidaalto"], PDO::PARAM_STR);	
		    $sql->bindParam(":salidaancho", $datos["salidaancho"], PDO::PARAM_STR);	
		    $sql->bindParam(":salidaespesor", $datos["salidaespesor"], PDO::PARAM_STR);	
		    $sql->bindParam(":tableroelectrico", $datos["tableroelectrico"], PDO::PARAM_STR);	
		    $sql->bindParam(":tableroneumatico", $datos["tableroneumatico"], PDO::PARAM_STR);
		     $sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);

		    $sql->bindParam(":id", $datos["id_pesaje"], PDO::PARAM_INT);


}


		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>