<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>

<?php

class Alumno {

    private $nombre = null;
    private $apellidos = null;

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {     
        $this->apellidos = $apellidos;
    }

    function calcularLetras($nombre) {
        return strlen($this->nombre);
    }

}

$alumno1 = new Alumno();

$alumno1->setNombre("Luisja");
$alumno1->setApellidos("Marquina García");

$nombrealumno1 = $alumno1->getNombre();
echo $nombrealumno1;
echo "<br>";

$apellidosalumno1 = $alumno1->getApellidos();
echo $apellidosalumno1;
echo "<br>";

$letras = $alumno1->calcularLetras($nombrealumno1);
echo $letras;
echo "<br>";

if(class_exists("Alumno")){
    echo "Clase " . get_class($alumno1) . " definida";
}

echo "<br>";

$metodosalumno = get_class_methods("Alumno");
var_dump($metodosalumno);

echo "<br>";

$propiedadesalumno = get_class_vars("Alumno");
var_dump($propiedadesalumno);

?>

</body>
</html>