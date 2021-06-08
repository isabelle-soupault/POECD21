<?php
    $sum = (3+4);
    $difference = (100-20);
    $product = (40*15);
    $quotient = (40/15);
    $modulo = (75%15);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 1 - Exercice 8</title>
</head>
<body>
<div class="container">
    <h1>Exercice 8</h1>

    <p text-center> Créer 5 variables sum, difference, product, quotient, modulo.
Dans la première mettre le résultat de l'opération 3 + 4.
Dans la deuxième mettre le résultat de l'opération 100 - 20.
Dans la troisième mettre le résultat de l'opération 45 * 15. Dans la quatrième mettre le résultat de l'opération 45 / 15. Dans la cinquième mettre le reste de la division entière 75 / 15.

Afficher le contenu des variables.</p>

</div>
<div class="container text-center mt-4">

    <p>
    Résultat de l'opération 3 + 4 = <?= $sum ?>.<br>
    Résultat de l'opération 100-20 = <?= $difference ?>.<br>
    Résultat de l'opération 40 * 15 = <?= $product ?>. <br>
    Résultat de l'opération 40 / 15 = <?= $quotient ?>. <br>
    Résultat de l'opération 75 modulo 15 = <?= $modulo ?>.
    </p>
    
    <p class="fw-bold">Code utilisé :</p>

    <pre class="border border-dark col-6 offset-4 ">
$sum = (3+4);
$difference = (100-20);
$product = (40*15);
$quotient = (40/15);
$modulo = (75%15);
    </pre>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
