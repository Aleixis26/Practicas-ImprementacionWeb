<?php
session_start();

$productes = [
    "llibre" => ["nom" => "Llibre", "preu" => 10],
    "quadern" => ["nom" => "Quadern", "preu" => 5]
];
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $producte = $_POST["producte"] ?? "";
    $quantitat = filter_input(INPUT_POST, "quantitat", FILTER_VALIDATE_INT);

    if (isset($productes[$producte]) && $quantitat !== false && $quantitat !== null && $quantitat > 0) {
        if (!isset($_SESSION["cistella"])) {
            $_SESSION["cistella"] = [];
        }

        if (!isset($_SESSION["cistella"][$producte])) {
            $_SESSION["cistella"][$producte] = 0;
        }

        $_SESSION["cistella"][$producte] += $quantitat;
    } else {
        $error = "Selecciona un producte i una quantitat més gran que zero.";
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>La meva cistella</title>
</head>
<body>
    <h1>La meva cistella</h1>

    <?php if ($error !== "") { ?>
        <p><?php echo htmlspecialchars($error); ?></p>
    <?php } ?>

    <?php if (!empty($_SESSION["cistella"])) { ?>
        <ul>
            <?php foreach ($_SESSION["cistella"] as $id => $quantitat) { ?>
                <li>
                    <?php echo htmlspecialchars($productes[$id]["nom"]); ?>:
                    <?php echo $quantitat; ?> unitats
                </li>
            <?php } ?>
        </ul>
    <?php } else { ?>
        <p>La cistella encara és buida.</p>
    <?php } ?>

    <p><a href="index.html">Tornar a la botiga</a></p>
    <p><a href="resum.php">Finalitzar compra</a></p>
</body>
</html>
