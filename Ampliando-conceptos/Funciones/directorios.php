<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>
<?php

echo getcwd();

$directorio = scandir(getcwd());
var_dump($directorio);

chdir("../");
echo getcwd();

?>
</body>
</html>