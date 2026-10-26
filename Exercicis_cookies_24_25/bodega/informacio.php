<?php
if (
    !isset($_COOKIE["majoredat"], $_COOKIE["idioma"], $_COOKIE["moneda"]) ||
    !in_array($_COOKIE["majoredat"], ["si", "no"], true) ||
    !in_array($_COOKIE["idioma"], ["ca", "es", "en"], true) ||
    !in_array($_COOKIE["moneda"], ["eur", "gbp", "usd"], true)
) {
    header("Location: bodega.php");
    exit;
}

$majoredat = $_COOKIE["majoredat"];
$idioma = $_COOKIE["idioma"];
$moneda = $_COOKIE["moneda"];

if ($moneda === "eur") {
    $simbol = "€";
    $preuVi = "39";
    $preuVermut = "15";
} elseif ($moneda === "gbp") {
    $simbol = "£";
    $preuVi = "33";
    $preuVermut = "13";
} else {
    $simbol = "$";
    $preuVi = "42";
    $preuVermut = "16";
}

if ($idioma === "ca") {
    $titol = "La nostra botiga";
    $missatgeMenor = "No et podem vendre alcohol si ets menor d'edat.";
    $missatgeProductes = "Els nostres productes:";
    $vi = "Vi Les Terrasses";
    $vermut = "Vermut negre";
    $missatgeEdat = "Ets major d'edat.";
} elseif ($idioma === "es") {
    $titol = "Nuestra tienda";
    $missatgeMenor = "No podemos venderte alcohol si eres menor de edad.";
    $missatgeProductes = "Nuestros productos:";
    $vi = "Vino Les Terrasses";
    $vermut = "Vermut negro";
    $missatgeEdat = "Eres mayor de edad.";
} else {
    $titol = "Our shop";
    $missatgeMenor = "We cannot sell alcohol to anyone under the age of 18.";
    $missatgeProductes = "Our products:";
    $vi = "Les Terrasses wine";
    $vermut = "Red vermouth";
    $missatgeEdat = "You are of legal drinking age.";
}
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($idioma); ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($titol); ?></title>
</head>
<body>
    <h1><?php echo htmlspecialchars($titol); ?></h1>

    <?php if ($majoredat === "no") { ?>
        <p><?php echo htmlspecialchars($missatgeMenor); ?></p>
    <?php } else { ?>
        <p><?php echo htmlspecialchars($missatgeEdat); ?></p>
        <p><?php echo htmlspecialchars($missatgeProductes); ?></p>
        <ul>
            <li><?php echo htmlspecialchars($vi); ?>: <?php echo htmlspecialchars($preuVi . " " . $simbol); ?></li>
            <li><?php echo htmlspecialchars($vermut); ?>: <?php echo htmlspecialchars($preuVermut . " " . $simbol); ?></li>
        </ul>
    <?php } ?>

    <p><a href="bodega.php">Tornar a les opcions</a></p>
</body>
</html>
