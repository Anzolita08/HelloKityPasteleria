<?php

$conn = mysqli_connect('localhost','root','','pasteleria');

$id_cliente = $_POST['id_cliente'];
$direccion = $_POST['direccion'];
$nombre = $_POST['nombre'];

$insertar = "INSERT INTO cliente (id_cliente, direccion, nombre) VALUES ('$id_cliente','$direccion','$nombre')";
//Ejecutamos
$ejecutar = mysqli_query($conn,$insertar);
//Verificamos la ejecucion
if(!$ejecutar){
     echo "Error al crear cliente: " . $insertar. "<br>" . mysqli_error($conn);
}else{
echo "<br>Cliente creado correctamente </br> <a href='../index.html'> Volver<a/>";
}
//Cerrar la conexion leugo de usarla
mysqli_close($conn);

?>
