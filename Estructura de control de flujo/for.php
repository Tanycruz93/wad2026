<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    $num = 5;

    //Estructura de control de flujo for y foreach

    for($i=1; $i<=10; $i++){
        //echo $i;
        //echo "<br>";
    }

    for($j=10; $j>=1; $j--){
        //echo $j;
        //echo "<br>";
    }

    for($k=2; $k<=100; $k++){

        if($k % 2 == 0){

            echo $k;
            echo "<br>";

        }

    }

    //Tabla de multiplicar comentada

    /*
    for($j=1; $j<=10; $j++){

        echo $j . " x " . $num . " = " . $j*$num;
        echo "<br>";

    }
    */

?>

</body>
</html>