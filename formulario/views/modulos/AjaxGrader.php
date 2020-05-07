<?php
 session_start();  
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "scancontrol";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$cont=count($_POST['pvp']);
$registro = $_POST['pvp'];
$id = $_POST['id'];
for ($i=0; $i < $cont; $i++) { 
if (strpos($id[$i], 'calidad') !== false) {
$resultadocalidad = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'alimentacion') !== false) {
$resultadoalimentacion = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'aceleracion') !== false) {
$resultadoaceleracion = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'pesaje') !== false) {
$resultadopesaje = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'descarga') !== false) {
$resultadodescarga = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
}
if (!isset($resultadocalidad)) {
	$resultadocalidad='NULL';
}
if (!isset($resultadoalimentacion)) {
	$resultadoalimentacion='NULL';
}
	if (!isset($resultadoaceleracion)) {
	$resultadoaceleracion='NULL';
}
	if (!isset($resultadodescarga)) {
	$resultadodescarga='NULL';
}
$query = "INSERT INTO unidades_balanza(id_unidad_al,id_unidad_acel,id_unidad_desc,id_calidad) VALUES(".$resultadoalimentacion.",".$resultadoaceleracion.",".$resultadodescarga.",".$resultadocalidad.")";	 
 if ($conn->query($query) === TRUE) { 
  mysqli_insert_id($conn); 
   unset($_SESSION["shopping_cart"]);
     echo "ok";        
}else{
	echo "no guardo";
}

?>