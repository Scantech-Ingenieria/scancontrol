<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/fondo.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form method="post" class="login100-form validate-form" id="myForm">
					<h1 class="login100-form-title p-t-20 p-b-45">
						Scan Control
					</h1>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Usuario es requerido">
						<input class="input100" type="text" name="user" placeholder="Usuario" autocomplete="off" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Contraseña es requerida">
						<input class="input100" type="password" name="password" placeholder="Contraseña" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
      <div id="resultado"></div>
      <div class="row" style="width: 100%; margin-left: 2px;">
<div class="container-login100-form-btn p-t-10 col-md-6" >
						<button  name='btnlog' type="submit"value='Enviar'id="btn1"class="login100-form-btn">
							Ingresar
						</button>
					
					</div>
						<div class="container-login100-form-btn p-t-10 col-md-6">
						<button   name='btnlog'  type="submit" value='Enviar' id="btn2"  class="buton2" >
							Admin
						</button>
					</div>
      </div>
					<div class="text-center w-full p-t-25 p-b-230">
						<a href="http://scantech.cl/" class="txt1" target="_blank">
							www.Scantech.cl
						</a>
					</div> 
				</form> 
			</div>
		</div>
	</div>
	 <script>
$(document).ready(function() {
 $(function(){
        $("#btn1").on("click", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("myForm"));
            formData.append("dato", "valor");
            //formData.append(f.attr("name"), $(this)[0].files[0]);
            $.ajax({
                url: "accion.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
         processData: false,
            }).done(function(res){
                console.log(res)
                if (res== "exito") {
            window.location = "tabla.php";
                }else{
                	$("#resultado").html("<div class='alert alert-danger'>Datos incorrectos. Inténtelo nuevamente.</div>");
                }
                });
        });
    });
 $(function(){
        $("#btn2").on("click", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("myForm"));
            formData.append("dato", "valor");
            //formData.append(f.attr("name"), $(this)[0].files[0]);
            $.ajax({
                url: "accionform.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
         processData: false,
            }).done(function(res){
                console.log(res)
                if (res== "exito") {
            window.location = "formulario/index.php";
                }else{
                	$("#resultado").html("<div class='alert alert-danger'>Datos incorrectos. Inténtelo nuevamente.</div>");
                }
                });
        });
    });
 })
    </script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>