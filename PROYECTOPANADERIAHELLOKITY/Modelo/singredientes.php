<?php

$conn = mysqli_connect('localhost','root','','pasteleria');


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$unidad= 'gr';

$insertar = "INSERT INTO pastel (id, nombre, unidad) VALUES ('$id','$nombre','$unidad')";
//Ejecutamos
$ejecutar = mysqli_query($conn,$insertar);
//Verificamos la ejecucion

if(!$ejecutar){
     echo "Error al crear pastel: " . $insertar. "<br>" . mysqli_error($conn);
}else{
     echo "<br>Pastel creado correctamente </br> <a href='../index.html'> Volver<a/>";
}

//Cerrar la conexion luego de usarla
mysqli_close($conn);

?>
