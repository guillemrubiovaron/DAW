<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones PHP</title>
</head>

<body>

    <?php

    //Funcion simple sin pasar parametros ni retornar nada
    say_hellow();

    function say_hellow()
    {
        echo "Hellow";
    }

    echo "</br>";
    echo "</br>";
    //Funcion pasando parametros por valor y devolviendo un valor

    function multiplicacion(int $a, int $b): int
    {
        $resultat = $a * $b;

        return $resultat;
    }
    $num1=5;
    $num2=7;

    echo "La multiplicació entre  ".$num1." y ".$num2." dona un resultat de : ".multiplicacion($num1,$num2);

    echo "</br>";
    echo "</br>";
    //Funcio que retorna 2 valors

    $primerRetorno="Retorno 1";
    $segundoRetorno="Retorno 2";

    function arrayFunction($var1,$var2){
        $primerRetorno = $var1;
        $segundoRetorno = $var2;
        
        return array($primerRetorno, $segundoRetorno);
    }
    //guardamso el array de retorno y mostramos
    $arrayResultado=arrayFunction($primerRetorno,$segundoRetorno);

    foreach ($arrayResultado as $key => $valor) {
        echo $valor;
        echo "</br>";
    }
  

    ?>

</body>

</html>