<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_SESSION["cistella"])) {
    unset($_SESSION["cistella"]);
    $missatge = "Compra confirmada. Gràcies per la teva compra!";
} else {
    $missatge = "No hi ha cap compra per confirmar.";
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Compra confirmada</title>
</head>
<body>
    <p><?php echo htmlspecialchars($missatge); ?></p>
    <p><a href="index.html">Tornar a la botiga</a></p>
</body>
</html>
