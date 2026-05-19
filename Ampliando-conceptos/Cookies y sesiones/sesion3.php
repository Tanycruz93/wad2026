<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>

<?php

    //Capturar las variables que se ha propagada
    session_start();

    if(isset($_SESSION['iniciada']) == true){

        echo "Nombre: " . $_SESSION['nombre'];
        echo "<br>";

        echo "Edad: " . $_SESSION['edad'];
        echo "<br>";

    }
    else{

        echo "No se ha definido la sesión";

    }

?>

</body>
</html>