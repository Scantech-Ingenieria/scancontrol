<?php 

require_once "model.php";



 if (isset($_POST['user'])) {
			$tabla = "admin";
			$usuario = $_POST["user"];

			$respuesta = ModeloSesion::iniciarSesionMdl($tabla, $usuario);
			
			if($respuesta["nombre"] == $_POST["user"] && $respuesta["clave"] == $_POST["password"]) {
				    session_start();

				$_SESSION["autenticar"] = "ok";
				$_SESSION["nombre"] = $respuesta["nombre"];
			
   

   


				echo 'exito';

			} else {
				echo '	<div class="alert alert-danger">
						Datos incorrectos. Inténtelo nuevamente.
					</div>	';
			}
		}



?>