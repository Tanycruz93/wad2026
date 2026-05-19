<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>

<?php

    session_start();

    if(isset($_SESSION['iniciada']) == true){

        session_unset();
        session_destroy();

        if(isset($_SESSION['nombre'])){

            echo "Nombre: " . $_SESSION['nombre'];
            echo "<br>";

        }
        else{

            echo "La variable de sesión nombre no está definida";

        }

    }
    else{

        echo "No se ha definido la sesión";

    }

?>

</body>
</html>