<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>
<?php

//Funciones mates

$edad = 22;
$nota = 7.34;

if(is_int($edad)){
    echo "Edad es un entero";
}

if(is_int($nota)){
    echo "Nota es un entero";
}else{
    echo "Nota no es un entero";
}

echo "<br>";

echo number_format("1000000");
echo "<br>";

echo number_format("1000000",2);
echo "<br>";

echo number_format("1000000",2,",",".");

?>
</body>
</html>