<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    // Funciones para modificar arrays

    $frutas = array("naranja", "plátano", "manzana", "frambuesa");

    var_dump($frutas);

    echo "<br>";

    $eliminado = array_pop($frutas);

    var_dump($eliminado);

    echo "<br>";

    var_dump($frutas);

    echo "<br>";

    array_push($frutas, "pera");

    var_dump($frutas);

    echo "<br>";

?>

</body>
</html>