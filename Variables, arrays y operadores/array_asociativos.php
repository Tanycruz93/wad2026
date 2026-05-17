<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    // Arrays asociativos

    $navegadores = array(
        "navegador1" => "Chrome",
        "navegador2" => "Firefox",
        "navegador3" => "Opera"
    );

    $datos = array(
        "nombre" => "Luisja",
        "edad" => 39,
        "profesor" => true,
        3 => 100
    );

    echo "Navegador 3: " . $navegadores["navegador3"];
    echo "<br>";

    echo "Nombre: " . $datos["nombre"];
    echo "<br>";

    echo "dato 3: " . $datos[3];
    echo "<br>";

    var_dump($navegadores);

    var_dump($datos);

?>

</body>
</html>