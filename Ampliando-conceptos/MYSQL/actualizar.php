<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>

<?php

$minombre = $_GET["nombre"];
$modificar = $_GET["seleccionar"];

$host = "localhost";
$usuario = "root";
$pass = "";

//Establecer la conexión con MySQL
$conexion = mysqli_connect($host, $usuario, $pass) or die("Error de conexión");

//Seleccionamos la Base de Datos
mysqli_select_db($conexion, "usuarios");

//Actualizar registro
$sql = "UPDATE clientes SET nombre = '$minombre' WHERE nombre = '$modificar'";

//Ejecutar consulta
mysqli_query($conexion, $sql);

echo "Registro actualizado correctamente";

?>

</body>
</html>