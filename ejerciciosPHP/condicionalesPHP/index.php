<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicionales PHP</title>
</head>

<body>
    <?php
    /*
    //EXEMPEL AMB IF

    $nota = 7;

    if ($nota < 0) {
        echo "Imposible tenir una nota més baixa que 0.";
    } elseif ($nota >= 0 && $nota < 5) {
        echo "La teva nota no arriba al 5, estas per sota de la mitja.";
    } elseif ($nota == 5) {
        echo "Estas aprovat just.";
    } elseif ($nota > 5 && $nota < 10) {
        echo "Estas aprovat amb més d'un 5, la teva nota es $nota .";
    } elseif ($nota == 10) {
        echo "Felicitats tens un 10!!!";
    } else {
        echo "Fanfarron... no hi ha notes per sobre del 10!!!";
    }
*/
    //EXEMPLE MES IF ELSE IF
    /*
    $mes = 4;

    if ($mes < 1) {
        echo "Mes inexsistent, no hi ha mesos amb numero negatiu.";
    } elseif ($mes == 1) {
        echo "Enero";
    } elseif ($mes == 2) {
        echo "Febrero";
    } elseif ($mes == 3) {
        echo "Marzo";
    } elseif ($mes == 4) {
        echo "Abril";
    } elseif ($mes == 5) {
        echo "Mayo";
    } elseif ($mes == 6) {
        echo "Junio";
    } elseif ($mes == 7) {
        echo "Julio";
    } elseif ($mes == 8) {
        echo "Agosto";
    } elseif ($mes == 9) {
        echo "Septiembre";
    } elseif ($mes == 10) {
        echo "Octubre";
    } elseif ($mes == 11) {
        echo "Noviembre";
    } elseif ($mes == 12) {
        echo "Diciembre";
    } else {
        echo "Mes inexsistent.";
    }

    */
    //EXEMPLE MES AMB SWITCH
    /*
    $mes = 4;

    switch ($mes) {
        case 1:
            echo 'Enero';
            break;
        case 2:
            echo 'Febrero';
            break;
        case 3:
            echo 'Marzo';
            break;
        case 4:
            echo 'Abril';
            break;
        case 5:
            echo 'Mayo';
            break;
        case 6:
            echo 'Junio';
            break;
        case 7:
            echo 'Julio';
            break;
        case 8:
            echo 'Agosto';
            break;
        case 9:
            echo 'Septiembre';
            break;
        case 10:
            echo 'Octubre';
            break;
        case 11:
            echo 'Noviembre';
            break;
        case 12:
            echo 'Diciembre';
            break;
        default:
            echo 'No exsiste este mes';
            break;
    }
    
    */

    //ESTRUCTURAS DE REPETICION
    //for
    $tabla = 1;
    define("MAXIMO_TABLA", 5); //con define hacemos las constantes.
    echo "<table cellpadding='15' border='3' >";

    for ($tabla; $tabla <= MAXIMO_TABLA; $tabla++) {
        echo "<th align='left' bgcolor=ddddhh><h2>Tabla del  $tabla</h2></br>";
        for ($i = 0; $i <= 10; $i++) {
            $multiplicacion = $tabla * $i;
            echo " $tabla X $i = $multiplicacion </br>";
        }
        echo "</th>";
    }

    echo "</table>";

    //while
    /*
    echo "Con While:</br>";
    $a = 0;
    while ($a < 11) {
        echo "$a</br>";
        $a++;
    }*/

    //do while
    /*
    echo "Con Do While:</br>";
    $b = 0;
    do {
        echo "$b</br>";
        $b++;
    } while ($b <= 10);
    */

    //FOR EACH
    /*
    foreach ($variable as $key => $value) {
        # code...
    }*/

    ?>

</body>

</html>