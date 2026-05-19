<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>

<body>

<?php

    // Función getdate

    $hoy = getdate();

    var_dump($hoy);

    if($hoy["month"] == "May"){

        echo "Mayo";

    }

?>

</body>
</html>