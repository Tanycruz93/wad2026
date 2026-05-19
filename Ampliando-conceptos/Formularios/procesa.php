<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>

<?php

    if(isset($_POST['usuario'])){
        if(!empty($_POST['usuario'])){
            $usuario = $_POST['usuario'];
            echo "Nombre del usuario " . $usuario;
        }
    }

    if(isset($_POST['password'])){
        if(!empty($_POST['password'])){
            $password = $_POST['password'];
            echo "<br>";
            echo "password del usuario " . $password;
        }
    }

?>

</body>
</html>
