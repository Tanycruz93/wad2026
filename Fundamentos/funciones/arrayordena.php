<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    // Arrays y ordenación

    $dias = array(
        "Lunes",
        "Martes",
        "Miércoles",
        "Jueves",
        "Viernes",
        "Sábado",
        "Domingo"
    );

    //var_dump($dias);

    // "<br>";

    //asort ($dias);
    //sort($dias);

    //var_dump($dias);
    //echo "<br>";

    $numeros = array(10,11,8,103,99,54);
//var_dump($numeros);
    //echo "<br>";
   // ksort ($numeros);
    //var_dump($numeros);
    //echo "<br>";

    $ARRAYSNOMBRES = array("JAVIER" => "29", "Patricia" => "18", "Emilio" => "26");
    var_dump($ARRAYSNOMBRES);
    echo "<br>";

    ksort ($ARRAYSNOMBRES);
    var_dump($ARRAYSNOMBRES);
    echo "<br>";
?>

</body>
</html>