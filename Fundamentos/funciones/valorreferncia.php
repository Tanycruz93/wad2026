<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    // Paso por valor y por referencia

    function mifuncion($num1){

        $num1 = $num1 + 2;

    }

    function otrafuncion(&$num1){

        $num1 = $num1 + 2;

    }

    $num1 = 4;

    mifuncion($num1);

    echo $num1;

    echo "<br>";

    otrafuncion($num1);

    echo $num1;

?>

</body>
</html>