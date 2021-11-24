<?php
$conn = mysqli_connect('localhost','root','','pasteleria');



$id_pedido = $_POST['id_pedido'];
$fechasolicitud = $_POST['fechasolicitud'];
$fechaentrega = $_POST['fechaentrega'];
$descripcion = $_POST['descripcion'];
$pedido_cliente_fk = $_POST['pedido_cliente_fk'];


$insertar = "INSERT INTO pedido (id_pedido, fechasolicitud, fechaentrega, descripcion, pedido_cliente_fk) VALUES ('$id_pedido','$fechasolicitud','$fechaentrega','$descripcion', '$pedido_cliente_fk')";
//Ejecutamos
$ejecutar = mysqli_query($conn,$insertar);


if(!$ejecutar){
     echo "Error al crear Pedido" . $insertar. "<br>" . mysqli_error($conn);
}else{
     echo "<br>Pedido creado correctamente </br> <a href='../index.html'> Volver<a/>";
}

//Cerrar la conexion luego de usarla
mysqli_close($conn);

?>
