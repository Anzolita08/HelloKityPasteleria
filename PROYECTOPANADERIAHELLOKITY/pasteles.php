<?php
    $conn = mysqli_connect('localhost','root','','pasteleria');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Proyecto</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

<h1 class="site-heading text-center text-black d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Los mejores pasteles</span>
    <span class="site-heading-lower"> <strong>Pasteleria Hello Kitty</strong></span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="index.html">Pedidos
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="clientes.php">Clientes</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="pasteles.php">Pasteles</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="empleados.php">Empleados</a>
          </li>
		  <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="en_espera.php">En espera</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Pasteles</span>
              <span class="section-heading-lower">Tematicos </span>
            </h2>
          </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/cumple.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pastel.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/club.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Pasteles</span>
              <span class="section-heading-lower">En espera</span>
            </h2>
          </div>
        </div>
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <?php
            $consulta = "SELECT * FROM pedido T1 LEFT OUTER JOIN pastel T2 ON T1.id_pedido = T2.pastel_id";
            $resultado = mysqli_query($conn, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

            // Motrar el resultado de los registro de la base de datos
            // Encabezado de la tabla
            echo "<table border='2' align='center'>";
            echo "<tr>";
			echo "<th>Pedido</th>";
            echo "<th>ID</th>";
            echo "<th>Nombre Pastel</th>";
            echo "<th>Tipo</th>";
            echo "<th>Peso</th>";
            echo "</tr>";
            // Bucle while que recorre cada registro y muestra cada campo en la tabla.
            while ($columna = mysqli_fetch_array( $resultado ))
            {
              echo "<tr>";
              echo "<td>" .$columna['id_pedido'] . "</td><td>" .$columna['id'] . "</td><td>" . $columna['nombrepastel'] . "</td><td>" . $columna['tipo'] . "</td><td>" . $columna['peso'] . "</td>";
              echo "</tr>";
            }

            echo "</table>"; // Fin de la tabla

            // cerrar conexión de base de datos
            mysqli_close($conn);

            ?>
          </div>
        </div>
      </div>
    </div>
  </section>



  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small"></p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
