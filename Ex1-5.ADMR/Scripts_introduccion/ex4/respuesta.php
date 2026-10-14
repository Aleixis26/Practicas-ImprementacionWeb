<?php
$musica = $_POST["musica"] ?? "";

if ($musica === "rock") {
    $mensaje = "¡El rock tiene mucha energía!";
} elseif ($musica === "pop") {
    $mensaje = "¡El pop siempre tiene canciones pegadizas!";
} elseif ($musica === "jazz") {
    $mensaje = "¡El jazz es genial para disfrutar de la improvisación!";
} elseif ($musica === "clasica") {
    $mensaje = "¡La música clásica es muy relajante!";
} else {
    exit("Selecciona un estilo de música.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tu estilo de música</title>
</head>
<body>
    <p><?php echo $mensaje; ?></p>
    <a href="index.html">Volver</a>
</body>
</html>
