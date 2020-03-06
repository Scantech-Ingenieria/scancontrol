

<!DOCTYPE html>
<html lang="es">
<!-- Head -->
<head>
<title>Scan Control</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Diamond Pricing Tables template Responsive, Login form web template,Flat Pricing w3tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<!-- Default-JavaScript-File -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- //Default-JavaScript-File -->

<!-- default-css-files -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<!-- default-css-files -->

<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" /><!-- popup css -->  

<!-- style.css-file -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- //style.css-file -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
</head>
<!-- Head -->
<body class="fondo">



<style type="text/css">
	

.fondo{

background-image: url('images/fondo4.jpg');	
}

#logo{
background-image: url('images/logo2.png');
  background-size: 100% 100%;

width:100%;height: 100%;

}
	.desconectado{
		background: red;

	}
	.conectado{
		background: #3386FF;

	}
	#audio{
display: none
}

</style>

<?php


session_start();

include 'conexion.php';


 if( !isset($_SESSION["nombre"]) ){
        header("Location:index.php");
    }
 

?>

<audio id="audio" controls>
<source type="audio/mpeg" src="audio/Alarm.mp3">
</audio>

<!-- /plans -->
<div class="plans-section">
	<div class="plans-main" id="padre">
	

	<div id="num0"></div>
	<div id="num1"></div>
	<div id="num2"></div>
	<div id="num3"></div>
	<div id="num4"></div>
	<div id="num5"></div>
	<div id="num6"></div>
	<div id="num7"></div>
	<div id="num8"></div>
	<div id="num9"></div>
	<div id="num10"></div>
	<div id="num11"></div>
	<div id="num12"></div>
	<div id="num13"></div>
	<div id="num14"></div>
	<div id="num15"></div>
	<div id="num16"></div>

			

	</div>

	<div style="background:black;height: 40px;width:100%;position:absolute;top:670px;">
	<div class="logo" style="width:10%;height: 40px; float: left;" ><h1>
		<img src="images/logo2.png" width="200px" height="35px" style="vertical-align:inherit;margin-left: 10px;" >
	</h1>
	</div>
	<div class="cinta" style="width:88%;float: right;color:white;">
		<MARQUEE id="dolar" SCROLLAMOUNT=30 style="font-family:'PT Serif';font-size: 30px;"></MARQUEE>
	</div>

</div>
</div>

		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});														
			});
		</script>
	
	

		
	</div>
	<script type="text/javascript">
	
$(document).ready(function() {

var audio = document.getElementById("audio");



function dolar(){
 var dolar
  $.ajax({
    dataType: 'json',
    url: 'https://mindicador.cl/api/dolar',
    data: dolar,

    success: function(dolar) {


console.log (dolar.serie[0].valor)


$("#dolar").html("<h2 style='font-family:PT Serif;'>Valor Dolar : $"+dolar.serie[0].valor+" con fecha : "+dolar.serie[0].fecha+"</h2>");



    }



})

}

	function datos(){

  var data
  $.ajax({
    dataType: 'json',
    url: 'http://scantech.cl/api/balanza/read.php',
    data: data,

    success: function(data) {
      // begin accessing JSON data here
    
var size = data.records.length;

 for(i=0; i<size; i++){



var cadena= data.records[i].nombre_cliente

				 $("#num"+i+"").html("<div class='price-grid'  style='color:black;padding: 20px;'><div  class='price-block price-block1 agile' style='background: #f5f5f5;    padding: 0px;'><div class='row'><div class='col-4 col-sm-4 col-md-4' id='cam"+i+"' ><h1 style='text-transform: uppercase;margin-top:50px;color:white;'>"+cadena.substr(0,2)+"</h1></div><div class='col-6 col-sm-6 col-md-8'><div class='price-gd-top pric-clr1' style='border-left-color:#92a8d1;' ><h5 style='text-align: left;color:black;font-size: 12px;text-transform: uppercase;font-weight: bold;margin-bottom:0px;'>"+data.records[i].nombre_cliente+"</h5><div class='row'><div class='col-md-10' style='text-align:left;	margin-bottom: 10px;'><span style='text-align: left;color:black; font-size: 12px;'>" + data.records[i].info + " </span><br><span style='font-size: 12px;font-weight: bold;'>"+data.records[i].address+"</span><br><span style='text-align: left;color:black;font-size: 12px;'>"+data.records[i].descripcion+"</span><br><span style='text-align: left;color:black;font-size: 12px;'>"+data.records[i].ubicacion+"</span><br><span style='text-align: left;color:black;font-size: 12px;'>Estado :  <button type='button' id='estado"+i+"' class='btn btn-sm'>"+data.records[i].estado+"</button></span></div></div></div></div></div></div></div>");

		


if (data.records[i].nombre_cliente=="Caleta Bay") {
var cb = data.records[i].nombre_cliente.substr(0,1)
var cb2 = data.records[i].nombre_cliente.substr(7,1)

$("#cam"+i+"").html("<h1 style='text-transform: uppercase;margin-top:50px;color:white;'>"+cb+cb2+"</h1>"

	)
}

if (data.records[i].estado=='offline') {

$('#estado'+i+'').addClass('btn-danger');
$('#cam'+i+'').addClass('desconectado');


// audio.play();
 // audio.pause();

}else{
	$('#estado'+i+'').addClass('btn-success');
$('#cam'+i+'').addClass('conectado');

}


// var sp1 = document.createElement("tr");

// // darle un atributo id llamado 'newSpan'
// sp1.setAttribute("id", "row1");

// var sp2 = document.getElementById("row1");
// var parentDiv = sp2.parentNode;
// parentDiv.replaceChild(sp1, sp2);



                    }



    },
  })
}






// function removernodos(){


// var parrafo = document.getElementById("padre");

// parrafo.parentNode.removeChild(parrafo);


// document.childNodes[1].lastChild


// }



// function reemplazarnodos(){

// var nuevo_nodo= document.createElement("div");
// nuevo_nodo.setAttribute("id","contenedor");



// var parrafo = document.getElementById("padre");
// var antiguo_nodo = document.getElementById("contenedor");

// parrafo.replaceChild(nuevo_nodo,antiguo_nodo);

// }

// setInterval(reemplazarnodos,5000);
setInterval(datos,1000);
setInterval(dolar,1000);




})








</script>
</body>
</html>





