<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    //break

    for($i=1; $i<=10; $i++){

        //echo "valor de i:" . $i;
        //echo "<br>";

        if($i == 3){

            break;

        }

    }


    for($j=1; $j<=10; $j++){

        echo "valor de j:" . $j;
        echo "<br>";

        for($k=1; $k<=10; $k++){

            echo "valor de k:" . $k;
            echo "<br>";

            if($k == 3){

                break 2;

            }

        }

    }

?>

</body>
</html>