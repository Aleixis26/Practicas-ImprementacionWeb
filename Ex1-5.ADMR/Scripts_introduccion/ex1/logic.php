<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Envía el formulario de contacto.");
}

$nombre = trim($_POST["nombre"] ?? "");
$apellido = trim($_POST["apellido"] ?? "");
$email = trim($_POST["email"] ?? "");
$mensaje = trim($_POST["mensaje"] ?? "");

if ($nombre === "" || $apellido === "" || $mensaje === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Completa todos los campos correctamente.");
}

$nombre = htmlspecialchars($nombre, ENT_QUOTES, "UTF-8");
$email = htmlspecialchars($email, ENT_QUOTES, "UTF-8");
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Missatge rebut</title>
</head>
<body>
    <p>Missatge rebut, <?php echo $nombre; ?>. Gràcies per contactar. Et respondrem a <?php echo $email; ?></p>
    <a href="index.html">Tornar</a>
</body>
</html>