<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    $a1 = array("rojo", "verde");
    $a2 = array("azul", "amarillo");

    $unido = array_merge($a1, $a2);

    var_dump($unido);

?>

</body>
</html>