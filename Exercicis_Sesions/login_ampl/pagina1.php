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
    <title>Pàgina 1</title>
</head>
<body>
    <p>
        Usuari: <?php echo htmlspecialchars($_SESSION["usuari"]); ?>
        - <a href="logout.php">Tancar sessió</a>
    </p>
    <h1>Pàgina d'informació 1</h1>
    <p>Aquesta és la primera pàgina d'informació.</p>
    <p><a href="pagina2.php">Anar a la pàgina 2</a></p>
</body>
</html>
