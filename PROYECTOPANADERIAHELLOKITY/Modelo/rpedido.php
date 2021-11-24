<?php
$conn = mysqli_connect('localhost','root','','pasteleria');

$consulta = "SELECT * FROM cliente";
$resultado = mysqli_query($conn, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

// Motrar el resultado de los registro de la base de datos
// Encabezado de la tabla
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Fecha Solitud</th>";
echo "<th>Fecha Entrega</th>";
echo "<th>Nombre</th>";
echo "</tr>";
// Bucle while que recorre cada registro y muestra cada campo en la tabla.
while ($columna = mysqli_fetch_array( $resultado ))
{
  echo "<tr>";
  echo "<td>" .$columna['id'] . "</td><td>" . $columna['fechasolicitud'] . "</td><td>" . $columna['fechaentrega'] . "</td>". $columna['descripcion'] . "</td>". $columna['fechafinalentrega'] . "</td>";
  echo "</tr>";
}

echo "</table>"; // Fin de la tabla

// cerrar conexión de base de datos
mysqli_close($conn);

?>
