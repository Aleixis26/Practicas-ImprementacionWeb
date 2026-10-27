<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuari = $_POST["usuari"] ?? "";
    $contrasenya = $_POST["contrasenya"] ?? "";

    if ($usuari !== "" && $usuari === $contrasenya) {
        $_SESSION["usuari"] = $usuari;
        header("Location: pagina1.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Error de login</title>
</head>
<body>
    <p>Usuari o contrasenya incorrectes.</p>
    <p><a href="index.html">Tornar al login</a></p>
</body>
</html>
