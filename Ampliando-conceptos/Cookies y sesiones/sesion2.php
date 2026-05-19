<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>

<?php

    session_start();

    $_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = "Luisja";
    $_SESSION['edad'] = 39;

    echo " Identificador de la sesión:" . session_id();
    echo "<br>";

    echo " Nombre de la sesión:" . session_name();
    echo "<br>";

    echo "Nombre: " . $_SESSION['nombre'];
    echo "<br>";

    echo "Edad: " . $_SESSION['edad'];
    echo "<br>";

    echo "<a href='sesion3.php'> Comprobar las variables en otra web </a>";
    echo "<br>";

    echo "<a href='sesion4.php'> Finaliza la sesión </a>";
    echo "<br>";

?>

</body>
</html>