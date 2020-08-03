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
if (strpos($id[$i], 'Calidad') !== false) {
$resultadocalidad = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'Alimentacion') !== false) {
$resultadoalimentacion = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'Aceleracion') !== false) {
$resultadoaceleracion = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'Pesaje') !== false) {
$resultadopesaje = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'Descarga') !== false) {
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
	if (!isset($resultadopesaje)) {
	$resultadopesaje='NULL';
}
$grader = $_POST['grader'];
$cliente = $_POST['cliente'];
$query = "INSERT INTO unidades_balanza(cliente,grader,id_unidad_al,id_unidad_acel,id_unidad_desc,id_calidad,id_pesaje) VALUES('".$cliente."','".$grader."',".$resultadoalimentacion.",".$resultadoaceleracion.",".$resultadodescarga.",".$resultadocalidad.",".$resultadopesaje.")";	 
 if ($conn->query($query) === TRUE) { 
  mysqli_insert_id($conn); 
   unset($_SESSION["shopping_cart"]);
     echo "ok";        
}else{
	echo "no guardo";
}

?>