<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/index.php">
  <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
  <title>My Savings | Transferencias</title>
</head>

<body>
  <header>
    <div class="logocontainer">
      <a href="../index.html"><img class="logo" src="../images/logo.png" alt=""></a>
    </div>
    <nav>
      <div class="nav">
        <ul>
          <li><a href="#">Préstamo</a></li>
          <li><a href="#">Transferencias</a></li>
          <li><a href="#">Personas</a></li>
          <li><a href="#">Atención al Usuario</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <?php
  echo '<link href="../css/index.css" type="text/css" rel="stylesheet">';
  $cedula = $_POST["cedula"];
  $tipodocumento = $_POST["tipodocumento"];
  $nombre = $_POST["nombre"];
  $numero = $_POST["numero"];
  $direccion = $_POST["direccion"];
  $departamento = $_POST["departamento"];
  $estado = $_POST["estado"];
  $mail = $_POST["mail"];
  $servicio = $_POST["servicio"];
  ?>
  <div class="resultado-transferencia">
    <?php
    echo "Cedula:", $cedula;
    ?>
    <br>
    <?php
    echo "Tipo De Documento:", $tipodocumento;
    ?>
    <br>
    <?php
    echo "Nombre:", $nombre;
    ?>
    <br>
    <?php
    echo "Número de Celular:", $numero;
    ?>
    <br>
    <?php
    echo "Dirección de residencia:", $direccion;
    ?>
    <br>
    <?php
    echo "Departamento:", $departamento;
    ?>
    <br>
    <?php
    echo "Estado Civil:", $estado;
    ?>
    <br>
    <?php
    echo "Correo Electrónico:", $mail;
    ?>
    <br>
    <?php
    echo "Tipo De Servicio:", $servicio;
    ?>
    <br>
  </div>



</body>

</html>