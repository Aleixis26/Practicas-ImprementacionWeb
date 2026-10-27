<?php
$hora = (int) date("G");

if ($hora >= 5 && $hora < 14) {
    $saludo = "Bon dia";
} elseif ($hora >= 14 && $hora < 19) {
    $saludo = "Bona tarda";
} else {
    $saludo = "Bona nit";
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Salutació</title>
</head>
<body>
    <p><?php echo $saludo; ?>. Són les <?php echo date("H:i:s"); ?>.</p>
</body>
</html>
