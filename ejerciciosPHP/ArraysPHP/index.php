<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
</head>

<body>

    <?php

    //ARRAY INDEXADO
    //opcion 1:
    /* $colors = array("Rojo", "Amarillo", "Azul", "Negro", "Blanco", "Verde");

    //opcion 2:
    //$colors = ["Rojo","Amarillo","Azul","Negro","Blanco","Verde"];

    echo "<h3>Array indexado:</h3>";
    for ($i = 0; $i < count($colors); $i++) {
        echo $colors[$i];
        echo "</br>";
    }
*/
    //FOREACH
    /*
    foreach ($colors as $color) {
        echo "$color </br>";
    }
    */

    echo "</br></br>";

    //ARRAY ASOCIATIVOS
    echo "<h3>Array Asociativo:</h3></br>";
    $coches = array(
        "Jose" => "Clio",
        "Pepe" => "C4",
        "Maria" => "Renault 19"
    );

    foreach ($coches as $key => $coche) {
        echo $key . '-' . $coche . '</br>';
    }

    echo "</br></br>";

    //ARRAY MULTIDIMENSIONAL
    echo "<h3>Array Multidimensional:</h3></br>";
    $numeros =  array(
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8]

    );
    for ($i = 0; $i < count($numeros); $i++) {
        echo "Linea " . $i . "</br>";
        for ($j = 0; $j < count($numeros[$i]); $j++) {

            echo "Posicion[" . $i . "][" . $j . "]: " . $numeros[$i][$j];
            echo "</br>";
        }
        echo "</br>";
    };

    echo "</br></br>";

    //ARRAY MULTIDIMENSIONAL ASOCIATIVO

    echo "<h3>Array Multidimensional Asociativo:</h3></br>";
    $notasAlumnes = [
        "Devin" => [5.4, 8.5, 9.9],
        "Xiao" => [9, 7.7, 8.4],
        "Santi" => [6.4, 9.7, 7.5]

    ];

    foreach ($notasAlumnes as $key => $notasAlumne) {
        echo $key . " : ";
        foreach ($notasAlumne as $nota) {
            echo $nota;
        }
        echo "</br>";
    };

    echo "</br></br>";

    //FUNCION SORT ARRAY 

    $numerosDesordenados = [5, 43, 3, 55, 43, 2, 6, 5, 7, 8, 9, 34, 22, 23, 45, 99, 54, 3, 6, 1, 100];

    //imprimimos tal y como esta.
    echo "<h3>Numeros sin ordenar</h3></br>";
    foreach ($numerosDesordenados as $numero) {
        echo $numero;
        echo "</br>";
    }
    //Ordenamos y imprimimos.
    echo "<h3>Numeros ordenados</h3></br>";
    sort($numerosDesordenados);
    foreach ($numerosDesordenados as $numero) {
        echo $numero;
        echo "</br>";
    }

    echo "</br></br>";

    //Crea en PHP un array de colors amb els valors ???blau???, ???vermell???, ???groc??? i ???verd???.
    //D??na valor a una variable color i mostra per pantalla en quina posici?? es troba el color. 
    //En cas de no trobar el color, fes que es mostri un missatge d???error.

    $colors = array("blau", "vermell", "groc", "verd", "gris");
    $color = "blau";
    $trobat = false;
    //MANERA 1
    /*
    $position = 0;  
    $trobat = false;

    foreach ($colors as $key => $colorDinsLarray) {
        if ($colorDinsLarray == $color) {
            $trobat = true;
            $position = $key;
        }
    }

    if ($trobat) {
        echo "Color " . $color . " trobat a l'array en posici?? [" . $position . "].";
    } else {
        echo "Color no trobat a l'array.";
    }
    echo "</br>";

    */

    //MANERA 2

    echo "Manera 2:</br>";
    $indice = array_search($color, $colors, false);
    if ($indice !== false) {
        echo "Color " . $color . " trobat a la posici?? [" . $indice . "]";
    } else {
        echo "Color no trobat";
    }
    echo "</br>";

    //MANERA 3

    $iterador = 0;
    while (!$trobat && $iterador <= count($colors)) {

        if ($colors[$iterador] == $color) {
            $trobat = true;
        }
        if (!$trobat) {
            $iterador++;
        }
    }


    if ($trobat) {
        echo "manera 3</br>";
        echo "Color " . $color . " trobat a l'array en posici?? [" . $iterador . "].";
    } else {
        echo "Color no trobat a l'array.";
    }


    echo "</br>";
    echo "</br>";
    //Escriu un programa en PHP en el que a una variable li assignem un DNI, busca aquest DNI a l???array anterior 
    //i mostra en una p??gina web l?????ndex on es troba i el nom de la persona.

    $personasArray = [
        //KEY            //VALOR
        "465867960A"  => "Marc P??rez",
        "465867961B"  => "Maria Alonso",
        "465867962C"  => "Anna Fern??ndez",
        "465867963D"  => "Isabel Varela",
        "465867964E"  => "Jordi Escrib??"
    ];

    // MAnera 1 
    /*
    $trobat = false;
    $dniBuscar = "465867963D";
    foreach ($personasArray as $key => $persona) {
        if ($key == $dniBuscar) {
            echo "DNI: " . $dniBuscar . " es de: " . $personasArray[$key];
            $trobat = true;
        }
    }
    if (!$trobat) {
        echo "Aquest dni no esta associat a ning??";
    }
*/
    echo "Buscar DNI en array";

    //Manera 2
    $dniBuscar = "465867963D";

    $indice = array_search($dniBuscar, array_keys($personasArray));
    if ($indice !== false) { // Ponemos !== porque si el dni a buscar coincide con indice 0 o 1, puede dar a confusion con true o false
        echo "DNI  " . $dniBuscar . " trobat a la posici?? [" . $indice . "] nom associat : " . $personasArray[$dniBuscar];
    } else {
        echo "DNI no trobat.";
    }






    ?>

</body>

</html>