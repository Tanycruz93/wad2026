
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>
<body>
<?php
$minombre = $_GET["nombre"];
$servidor = "localhost";
$usuario = "root";
$pass = "";
$conexion = mysqli_connect($servidor, $usuario, $pass)
or die("Error de conexión");
mysqli_select_db($conexion, "usuarios");
$consultar = "SELECT nombre FROM clientes";
$registros = mysqli_query($conexion, $consultar);
$encontrado = false; // ← IMPORTANTE
while($registro = mysqli_fetch_row($registros)){
    echo "Nombre: " . $registro[0];
    echo "<br>";
    if($registro[0] == $minombre){
        $encontrado = true;
    }
}
if($encontrado){
    echo $minombre . " se encuentra en la base de datos";
}
else{
    echo $minombre . " NO se encuentra en la base de datos";
}
?>
</body>
</html>