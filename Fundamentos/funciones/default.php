<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    // Obtener y modificar la zona horaria

    echo "Zona horaria " . date_default_timezone_get();

    echo "<br>";

    date_default_timezone_set("America/Los_Angeles");

    echo "Zona horaria " . date_default_timezone_get();

    echo "<br>";

?>

</body>
</html>