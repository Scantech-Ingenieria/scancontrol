<?php
class Conexion {
	public function Conectar () {
		$link = new PDO("mysql:host=localhost;dbname=scancontrol",
			"root",
			"",
		// $link = new PDO("mysql:host=localhost;dbname=scantech_api",
		// 	"scantech",
		// 	"Scan2018",
		// $link = new PDO("mysql:host=localhost;dbname=fundac78_principal",
		// 	"fundac78_fundac78",
		// 	"gW]{&&iPjK3c",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
		return $link;
	}
}

?>