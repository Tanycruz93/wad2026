<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>
<?php

$miarchivo = fopen("archivo1.txt", "r+");

if ($miarchivo == false) {
    echo "error al abrir el archivo1.txt";
}

// echo fgets($miarchivo);

// $todo = file_get_contents("archivo1.txt");
// echo $todo;

$arrayarchivo = file("archivo1.txt");
var_dump($arrayarchivo);

?>
</body>
</html>