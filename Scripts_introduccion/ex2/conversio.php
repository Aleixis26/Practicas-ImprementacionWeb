<?php
$cantidad = $_POST["cantidad"] ?? "";
$tipo = $_POST["tipo"] ?? "";

if (!is_numeric($cantidad) || $cantidad <= 0) {
    exit("Introduce una cantidad válida.");
}

if ($tipo === "eur_a_usd") {
    $resultado = $cantidad * 1.1;
    $moneda = "$";
} elseif ($tipo === "usd_a_eur") {
    $resultado = $cantidad / 1.1;
    $moneda = "€";
} else {
    exit("Selecciona un tipo de conversión válido.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <p>Resultado: <?php echo number_format($resultado, 2); ?> <?php echo $moneda; ?></p>
    <a href="index.html">Volver</a>
</body>
</html>
