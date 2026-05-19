<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    // Funciones variadas de arrays

    $frutas = array("naranja", "plátano", "manzana", "frambuesa");

    $elementos = count($frutas);

    echo $elementos;

    echo "<br>";

    $actual = current($frutas);

    echo $actual;

    echo "<br>";

    end($frutas);

    $actual = current($frutas);

    echo $actual;

    echo "<br>";

    reset($frutas);

    $meses = array(
        0 => "Enero",
        1 => "Febrero",
        2 => "Marzo",
        3 => "Abril",
        4 => "Mayo",
        5 => "Junio"
    );

    $clave = array_search("Junio", $meses);

    if($clave){

        echo $clave . " " . $meses[$clave];

    }else{

        echo "Elemento no encontrado";

    }

?>

</body>
</html>