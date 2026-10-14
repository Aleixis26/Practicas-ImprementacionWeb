<?php
$precio = $_POST["precio"] ?? "";
$iva = $_POST["iva"] ?? "";

if (!is_numeric($precio) || !in_array($iva, ["4", "10", "21"], true)) {
    exit("Introduce un precio y un tipo de IVA válidos.");
}

$total = $precio * (1 + $iva / 100);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Precio con IVA</title>
</head>
<body>
    <p>Precio con IVA: <?php echo number_format($total, 2, ",", "."); ?> €</p>
    <a href="index.html">Volver</a>
</body>
</html>
