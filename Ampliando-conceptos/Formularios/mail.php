<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>

<?php

$to = "markutovich@gmail.com";
$subject = "Email de confirmación";
$message = "Hola confirma haciendo click en el siguiente enlace";
$from = "administrador@dominio.com";

$headers = "From: $from";

mail($to, $subject, $message, $headers);

echo "Mail enviado";

?>

</body>
</html>