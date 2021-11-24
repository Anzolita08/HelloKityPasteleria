<?php

$servername = "localhost";
$database = "pasteleria";
$username = "root";
$password = "";


// Crear conexion
$conn = mysqli_connect($servername, $username, '', $database);
// verificar conexion
if (!$conn) {
    die("Conexion fallida MySQL: " . mysqli_connect_error());
}
echo "Conexion exitosa MySQL.<br></br>";


// Conexion BD
//$bd = mysqli_select_db ($conn, $database);
// verificar conexion
//if (!$bd) {
//    die("Conexion BD fallida: " . mysqli_connect_error());
//}
//echo "Conexion BD exitosa.<br></br>";

?>
