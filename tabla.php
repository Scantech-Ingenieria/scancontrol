

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
</head>
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

<script language="JavaScript">
function mueveReloj(){
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()
    str_segundo = new String (segundo)
    if (str_segundo.length == 1)
       segundo = "0" + segundo
    str_minuto = new String (minuto)
    if (str_minuto.length == 1)
       minuto = "0" + minuto
    str_hora = new String (hora)
    if (str_hora.length == 1)
       hora = "0" + hora
    horaImprimible = hora + " : " + minuto + " : " + segundo
    document.form_reloj.reloj.value = horaImprimible
    setTimeout("mueveReloj()",1000)
}
</script>




	<div style="background:black;height: 40px;width:100%;position:absolute;top:670px;">
	<div class="logo" style="width:10%;height: 40px; float: left;" ><h1>
		<img src="images/logo2.png" width="200px" height="35px" style="vertical-align:inherit;margin-left: 10px;" >
	</h1>
	</div>
	
<div style="width:13%;float: right;color:white;margin-top: 7px;font-size: 1.1em;"><script type="text/javascript">
//<![CDATA[
function makeArray() {
for (i = 0; i<makeArray.arguments.length; i++)
this[i + 1] = makeArray.arguments[i];}
var months = new makeArray('Enero','Febrero','Marzo','Abril','Mayo',
'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
var date = new Date();
var day = date.getDate();
var month = date.getMonth() + 1;
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;
document.write( day + " de " + months[month] + " del " + year);
//]]>
</script>
</div>
	<div style="width:12%;float: right;color:white;margin-top: 5px;">
<body onload="mueveReloj()">
<form name="form_reloj">
<input type="text" name="reloj" size="10" disabled style="background-color : Black;border-color:black; color : White; font-family : Verdana, Arial, Helvetica; font-size : 13pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()">
</form>
</body>
</div>
<div class="cinta" style="width:65%;float: right;color:white;">
		<MARQUEE id="dolar" SCROLLAMOUNT=30 style="font-family:'PT Serif';font-size: 30px;"></MARQUEE>
	</div>
</div>
</div>
	</div>
	<script type="text/javascript">
$(document).ready(function() {
var audio = document.getElementById("audio");
function dolar(){
 var dolar
  $.ajax({
    dataType: 'json',
    url: 'https://api.desarrolladores.datos.gob.cl/indicadores-financieros/v1/dolar/hoy.json/?auth_key=095c61666b48a9a8a6e018dc55bbd8c4d7b7a63e&limit=10000',
    data: dolar,
    success: function(dolar) {
console.log (dolar.dolar.valor)
$("#dolar").html("<h2 style='font-family:PT Serif;'>Valor Dolar : $"+dolar.dolar.valor+" con fecha : "+dolar.dolar.fecha+"</h2>");

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
}else{
	$('#estado'+i+'').addClass('btn-success');
$('#cam'+i+'').addClass('conectado');
}
                    }
    },
  })
}
setInterval(datos,1000);
setInterval(dolar,1000);
})
</script>
</body>
</html>





