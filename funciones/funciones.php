<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    // funciones

    $numero1 = 5;
    $numero2 = 10;

    function sumar(){

        echo "Soy un función para sumar";
        echo "<br>";

    }

    sumar();

    function sumarnumeros($num1, $num2){

        echo $num1 + $num2;
        echo "<br>";

    }

    sumarnumeros($numero1, 1);

    function sumarnumeroretorno($num1, $num2){

        return $num1 + $num2;

    }

    $resultado = sumarnumeroretorno($numero1, $numero2);

    echo $resultado;

?>

</body>
</html>