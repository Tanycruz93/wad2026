<?php

if(isset($_GET['aceptar'])){
    $caducidad = time() + (60*60*24*365);
    setcookie('micookie',1,$caducidad);
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>

<?php

if(!isset($_GET['aceptar']) && !isset($_COOKIE['micookie'])):

?>

<div>
    <h2> Cookies </h2>
    <a href="?aceptar=1">Aceptar Cookies</a>
</div>

<?php

endif;

?>

</body>
</html>