Aquí tienes ambos archivos:

final.php

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>
<body>
<?php
echo "<a href='menu.php?eleccion=1'>1. Comprobar usuario</a>";
echo "<p></p>";
echo "<a href='menu.php?eleccion=2'>2. Mostrar menú de nuevo</a>";
echo "<p></p>";
echo "<a href='menu.php?eleccion=3'>3. Mostrar fichero ejecutado</a>";
echo "<p></p>";
echo "<a href='menu.php?eleccion=4'>4. Recorrer Array</a>";
echo "<p></p>";
echo "<a href='menu.php?eleccion=5'>5. Monedas y Países ordenados</a>";
echo "<p></p>";
echo "<a href='menu.php?eleccion=6'>6. Calcular letra DNI</a>";
echo "<p></p>";
echo "<a href='menu.php?eleccion=7'>7. Mostrar año</a>";
?>
</body>
</html>

menu.php

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prácticas PHP</title>
</head>
<body>
<?php
const NOMBRE = "admin";
$password = 6234;
$temario = ["Variables", "Estructuras", "Funciones", "Frameworks"];
function calcular_letra($dni) {
    $letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
    $posicion = $dni % 23;
    echo "Tu letra es del dni: " . $letras[$posicion];
    echo "<p></p>";
}
switch ($_GET["eleccion"]) {
    case 1:
        if (NOMBRE == "admin") {
            echo "Usuario correcto";
            if ($password != 1234) {
                echo "Password correcta";
            } elseif ($password == 0000) {
                echo "Modifica tu password";
            }
        } else {
            echo "Usuario incorrecto";
        }
        break;
    case 2:
        include 'final.php';
        break;
    case 3:
        echo "Se está ejecutando el siguiente fichero " . $_SERVER['PHP_SELF'];
        break;
    case 4:
        $elementos = count($temario);
        echo "Temario completo <br />";
        $i = 0;
        while ($i < $elementos) {
            echo $temario[$i] . "<br />";
            $i++;
        }
        echo "<p></p>";
        $eliminada = array_pop($temario);
        echo "Temario sin el último tema: " . $eliminada . " <br />";
        $elementos = count($temario);
        $j = 0;
        while ($j < $elementos) {
            echo $temario[$j] . "<br />";
            $j++;
        }
        echo "<p></p>";
        break;
    case 5:
        $monedapais = array(
            array('pais' => 'España', 'moneda' => 'Euro'),
            array('pais' => 'Reino Unido', 'moneda' => 'Libra'),
            array('pais' => 'EEUU', 'moneda' => 'Dolar'),
            array('pais' => 'Francia', 'moneda' => 'Euro'),
            array('pais' => 'Portugal', 'moneda' => 'Euro')
        );
        sort($monedapais);
        foreach ($monedapais as $elemento) {
            if ($elemento['moneda'] != "Dolar") {
                var_dump($elemento);
            }
        }
        break;
    case 6:
        calcular_letra(71276958);
        break;
    case 7:
        echo date("Y");
        break;
    default:
        echo "Valor no válido";
}
?>
<a href="final.php">Volver al menú</a>
</body>
</html>