<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/index.php">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <title>My Savings | Resultado</title>
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
        $prestamo = 0;  
        $inicial = 0; 
        $cuotas = 0;
        $SaldoPrestamo =0;
        $ValorCuota = 0;
        $prestamo = $_POST["prestamo"];
        $cuotas = $_POST["cuotas"];
        $inicial = 0.30 * $prestamo;
        $SaldoPrestamo = (0.70 * $prestamo) + (0.0093 * $cuotas);
        $ValorCuota = round($SaldoPrestamo/$cuotas, 3);
        //$fecha = date("Y-m-d", $_POST["fecha"]);
        $fecha = $_POST["fecha"];
        
        //$fecha = strtotime(str_replace('-', '/', $fecha));
        $fechaFinal = date("Y-m-d",strtotime($fecha. "+$cuotas month"));

        
        //echo date("m-d-Y",strtotime($fecha."+ 1 month"));
    ?>
    <div class="resultados">
    <div class="columna">
        <h1>Número de cuotas</h1>
            <?php
                for ($i = 1; $i<=$cuotas; $i++){
                echo $i. "<br>";
                }
            ?>
    </div>

    <div class="columna">
        <H1>Fecha de pago</H1>
            <?php
                for ($k = 1; $k <=$cuotas; $k++){
                    $fecha = date("Y-m-d",strtotime($fecha. "+1 month"));
                    echo $fecha . "<br>";
                }
        ?>
    </div>

    <div class="columna">
        <h1>Valor Cuota</h1>
            <?php
                for($a = 1; $a <=$cuotas; $a++){
                    echo $ValorCuota. "<br>";
            }
        ?>
    </div>

    <div class="columna">
        <h1>Subtotal Pagado</h1>
            <?php
                $subtotal = 0;
                for ($d = 1; $d <=$cuotas; $d++){
                echo ($subtotal = $subtotal + $ValorCuota) ."<br>"; 
            }
        ?>
    </div>
    </div>
</body>
</html>