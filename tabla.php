

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
/*.fondo{
background-image: url('images/fondo4.jpg');	
}*/
.fondo{
	background:  #445275;
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
hr {
  height: 1px;
  background-color: white;
  margin-bottom: 0px;
  margin-top: 0px;
}
</style>
<?php
session_start();
include 'conexion.php';
 if( !isset($_SESSION["nombre"]) ){
        header("Location:index.php");
    }
?>
<h4 style="color:white;margin-left: 10px;margin-top: 10px;">Scancontrol</h4>
<hr>
<div class="row">
	<div id="num0"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num1"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num2"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num3"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num4"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num5"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num6"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num7"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num8"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num9"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num10"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num11"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num12"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num13"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num14"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num15"  class='col-12 col-sm-6 col-md-3'></div>
	<div id="num16"  class='col-12 col-sm-6 col-md-3'></div>
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
    minutos = hora
    document.form_reloj.reloj.value = horaImprimible
    setTimeout("mueveReloj()",1000)
}
</script>

<div class="row" style="width: 100%;background: white; display: flex ;
   justify-content: center;
   align-items: center;">
<div class='col-4 col-sm-2 col-md-2'>
		<div class="logo" style="width:100%;height: 40px; float: left;" ><h1>
		<img src="images/logo2.png" width="200px" height="35px" style="vertical-align:inherit;margin-left: 10px;" >
	</h1>
	</div>

</div>
<div class='col-8 col-sm-5 col-md-5'>
	<MARQUEE id="dolar" SCROLLAMOUNT=30 width="100%" style="font-family:'PT Serif';font-size: 30px;"> 
	</MARQUEE>
</div>
<div class='col-12 col-sm-2 col-md-2' style="padding-right: 0px;
    ">
<MARQUEE HEIGHT=50 SCROLLDELAY=150 DIRECTION=up id="tiempo"> 
</MARQUEE>
</div>
<div class='col-6 col-sm-1 col-md-1' style="padding-right: 0px;
     padding-left: 0px;">
	<body onload="mueveReloj()">
<form name="form_reloj">
<input type="text" name="reloj" size="12" disabled style="background-color : white;border-color:#ffffff00; color : black; font-family : Verdana, Arial, Helvetica; font-size : 13pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()">
</form>
</body>
</div>
<div class='col-6 col-sm-2 col-md-2' style="padding-right: 0px;
     padding-left: 0px;">
	<script type="text/javascript">
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
</div>
	</div>
	<script type="text/javascript">
$(document).ready(function() {
var audio = document.getElementById("audio");

function tiempo(){
	var tiempo
  $.ajax({
    dataType: 'json',
    url: 'https://api.tutiempo.net/json/?lan=es&apid=z5Eaazqqazzzc4l&lid=55739',
    data: tiempo,
    success: function(tiempo) {
dia = tiempo.day1.date.substr(7,2)
mes = tiempo.day1.date.substr(5,1)
ano=tiempo.day1.date.substr(0,4)
fechadia1 = dia+'-'+mes+'-'+ano
dia2 = tiempo.day2.date.substr(7,2)
mes2 = tiempo.day2.date.substr(5,1)
ano2=tiempo.day2.date.substr(0,4)
fechadia2 = dia2+'-'+mes2+'-'+ano2
dia3 = tiempo.day3.date.substr(7,2)
mes3 = tiempo.day3.date.substr(5,1)
ano3=tiempo.day3.date.substr(0,4)
fechadia3 = dia3+'-'+mes3+'-'+ano3

$("#tiempo").html("<h5 style='font-family:PT Serif;'>"+tiempo.locality.name+"</h5><br><h5 style='font-family:PT Serif;'>Dia "+fechadia1+"</h5><br><h5>Min : "+tiempo.day1.temperature_min+"° Max"+tiempo.day1.temperature_max+"°</h5><br><h5>"+tiempo.day1.text+"<img src='iconostiempo/"+tiempo.day1.icon+".png'></h5><br><h5 style='font-family:PT Serif;'>Dia "+fechadia2+"</h5><br><h5>Min : "+tiempo.day2.temperature_min+"° Max"+tiempo.day2.temperature_max+"°</h5><br><br><h5>"+tiempo.day2.text+"<img src='iconostiempo/"+tiempo.day2.icon+".png'></h5><br><h5 style='font-family:PT Serif;'>Dia "+fechadia3+"</h5><br><h5>Min : "+tiempo.day3.temperature_min+"° Max"+tiempo.day3.temperature_max+"°</h5><br><h5>"+tiempo.day3.text+"<img src='iconostiempo/"+tiempo.day3.icon+".png'></h5>");
    }
})
}

function dolar(){
 var dolar
  $.ajax({
    dataType: 'json',
    url: 'https://api.desarrolladores.datos.gob.cl/indicadores-financieros/v1/dolar/hoy.json/?auth_key=095c61666b48a9a8a6e018dc55bbd8c4d7b7a63e&limit=1000000',
    data: dolar,
    success: function(dolar) {
console.log (dolar)
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

$("#num"+i+"").html("<div style='color:white;padding:5px;'><div style='background: #3A4562; padding: 0px;'><div class='col-12 col-sm-12 col-md-12'><div><h5 style='text-align: left;font-size: 16px;text-transform: uppercase;font-weight: bold;margin-bottom:0px;text-align:center;padding-top:10px;padding-bottom:10px;'>"+data.records[i].nombre_cliente+"</h5><hr><div class='row' style='font-size:12px;'><div class='col-md-12' style='text-align:left;'><div class='col-md-12' style='text-align: left; width:100%;margin-top:5px;'>" + data.records[i].descripcion + " </div><div class='col-md-12' style='text-align: left;font-size: 12px;'>Ultima conexión: "+data.records[i].info+"</div><div class='col-md-12'  style='font-size: 12px;font-weight: bold;'>IP: "+data.records[i].address+"</div><div class='col-md-12' style='text-align: left;font-size: 12px;'>Ubicación: "+data.records[i].ubicacion+"</div><div class='col-md-12'>Contacto :</div><div class='col-md-12' >Mobile :</div><div class='col-md-12'>Anydesk :</div><div class='col-md-12' style='text-align: left;font-size: 12px;'><button type='button' style='width:100%;margin-top:5px;margin-bottom:5px;' id='estado"+i+"' class='btn btn-sm'></button></div></div></div></div></div></div></div></div>");
if (data.records[i].nombre_cliente=="Caleta Bay") {
var cb = data.records[i].nombre_cliente.substr(0,1)
var cb2 = data.records[i].nombre_cliente.substr(7,1)
$("#cam"+i+"").html("<h1 style='text-transform: uppercase;margin-top:50px;color:white;'>"+cb+cb2+"</h1>"
	)
}

if (data.records[i].estado=='offline' || data.records[i].info.substr(11,2) != minutos || data.records[i].info.substr(8,2) != day ) {
$('#estado'+i+'').addClass('btn-danger');
$('#cam'+i+'').addClass('desconectado');
$('#estado'+i+'').text('Desconectado');
}else{
	$('#estado'+i+'').addClass('btn-success');
	$('#estado'+i+'').text('Conectado');

$('#cam'+i+'').addClass('conectado');
}
                    }
    },
  })
}
setInterval(dolar,1000);
setInterval(tiempo,1000);
setInterval(datos,1000);

})
</script>
</body>
</html>





