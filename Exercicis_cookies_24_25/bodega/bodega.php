<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $majoredat = $_POST["majoredat"] ?? "";
    $idioma = $_POST["idioma"] ?? "";
    $moneda = $_POST["moneda"] ?? "";

    if (
        in_array($majoredat, ["si", "no"], true) &&
        in_array($idioma, ["ca", "es", "en"], true) &&
        in_array($moneda, ["eur", "gbp", "usd"], true)
    ) {
        setcookie("majoredat", $majoredat, time() + 30 * 24 * 60 * 60);
        setcookie("idioma", $idioma, time() + 30 * 24 * 60 * 60);
        setcookie("moneda", $moneda, time() + 30 * 24 * 60 * 60);

        header("Location: informacio.php");
        exit;
    }

    $error = "Selecciona una opción en cada pregunta.";
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Bodega</title>
</head>
<body>
    <h1>Bodega</h1>

    <?php if ($error !== "") { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>

    <form method="post" action="bodega.php">
        <p>Ets major d'edat?</p>
        <label>
            <input type="radio" name="majoredat" value="si" required>
            Sí
        </label>
        <label>
            <input type="radio" name="majoredat" value="no">
            No
        </label>

        <p>En quin idioma vols veure la informació?</p>
        <select name="idioma" required>
            <option value="">Selecciona un idioma</option>
            <option value="ca">Català</option>
            <option value="es">Español</option>
            <option value="en">English</option>
        </select>

        <p>Quina moneda vols utilitzar?</p>
        <select name="moneda" required>
            <option value="">Selecciona una moneda</option>
            <option value="eur">Euros (€)</option>
            <option value="gbp">Lliures (£)</option>
            <option value="usd">Dòlars ($)</option>
        </select>

        <p><button type="submit">Veure la botiga</button></p>
    </form>
</body>
</html>
