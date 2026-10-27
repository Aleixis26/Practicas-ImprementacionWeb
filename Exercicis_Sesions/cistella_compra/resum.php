<?php
session_start();

$productes = [
    "llibre" => ["nom" => "Llibre", "preu" => 10],
    "quadern" => ["nom" => "Quadern", "preu" => 5]
];
$total = 0;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resum de la compra</title>
</head>
<body>
    <h1>Resum de la compra</h1>

    <?php if (!empty($_SESSION["cistella"])) { ?>
        <ul>
            <?php foreach ($_SESSION["cistella"] as $id => $quantitat) {
                $subtotal = $productes[$id]["preu"] * $quantitat;
                $total += $subtotal;
            ?>
                <li>
                    <?php echo htmlspecialchars($productes[$id]["nom"]); ?>:
                    <?php echo $quantitat; ?> unitats x
                    <?php echo $productes[$id]["preu"]; ?> € =
                    <?php echo $subtotal; ?> €
                </li>
            <?php } ?>
        </ul>
        <p>Total: <?php echo $total; ?> €</p>
        <form action="confirmar.php" method="post">
            <button type="submit">Confirmar compra</button>
        </form>
    <?php } else { ?>
        <p>La cistella està buida.</p>
    <?php } ?>

    <p><a href="cistella_compra.php">Tornar a la cistella</a></p>
</body>
</html>
