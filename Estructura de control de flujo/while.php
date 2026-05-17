<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    //Estructura de control de flujo while

    $num = 0;
    $respuesta = "Oporto";
    $intentos = 1;

    while($num <= 10){

        echo $num;
        echo "<br>";

        $num++;

    }

    while($respuesta != "Lisboa"){

        echo "Intento " . $intentos;
        echo "<br>";

        if($intentos == 3){

            $respuesta = "Lisboa";

        }

        $intentos++;

    }

?>

</body>
</html>