<?php

$conn = mysqli_connect('localhost','root','','pasteleria');


$id = $_POST['id'];
$nombrepastel = $_POST['nombrepastel'];
$tipo = $_POST['tipo'];
$peso = $_POST['peso'];
$pastel_id = $_POST['pastel_id'];


$insertar = "INSERT INTO pastel (id, nombrepastel, tipo, peso, pastel_id) VALUES ('$id','$nombrepastel','$tipo','$peso', '$pastel_id')";
//Ejecutamos
$ejecutar = mysqli_query($conn,$insertar);
//Verificamos la ejecucion

if(!$ejecutar){
     echo "Error al crear ingrediente: " . $insertar. "<br>" . mysqli_error($conn);
}else{
     echo "<br>Ingrediente creado correctamente </br> <a href='../index.html'> Volver<a/>";
}

//Cerrar la conexion luego de usarla
mysqli_close($conn);

?>
