<?php

class ControllerEnrutamiento {

	public function enrutamiento() {

		$ruta = $_GET["ruta"];

		if ($ruta == "clientes" || 
		 $ruta == "tabla" || 
		 $ruta == "index" || 
		 $ruta == "unidadalimentacion" || 
         $ruta == "unidadaceleracion" || 
         $ruta == "unidaddescarga" || 
         $ruta == "bandas" || 
         $ruta == "paletas" || 
         $ruta == "sprockets" || 
         $ruta == "vdf" || 
         $ruta == "automatico" || 
         $ruta == "estacioncalidad"

		) {

			include "views/modulos/".$ruta.".php";

		} else {
			include "views/modulos/error404.php";
		}


	}
}

?>