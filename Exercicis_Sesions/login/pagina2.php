<?php
session_start();

if (!isset($_SESSION["usuari"])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pàgina 2</title>
</head>
<body>
    <p>Usuari: <?php echo htmlspecialchars($_SESSION["usuari"]); ?></p>
    <h1>Pàgina d'informació 2</h1>
    <p>Aquesta és la segona pàgina d'informació.</p>
    <p><a href="pagina1.php">Anar a la pàgina 1</a></p>
</body>
</html>
