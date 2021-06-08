<?php
$a = 'texte';
$aa= 15;
$aaa=-1;
$b = 12.12;
$c = 15;
$d = True;
$e = text;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 1 - Exercice 4</title>
</head>
<body>
<div class="container">
<h1>Exercice 4</h1>

<p text-center>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.  
Les afficher.</p>

</div>
<div class="container text-center mt-4">

<?php

settype($aa, 'string');
var_dump($aa);
settype($aaa, 'bool');
var_dump($aaa);
?>

<p> <?= $a ?></p>
<p> <?= $aa ?></p>
<p> <?= $aaa ?></p>
<p> <?= $b ?></p>
<p> <?= $c ?></p>
<p> <?= $d ?></p>
<p> <?= $e ?></p>

    <?php 
    var_dump($a);
    var_dump($aa);
    var_dump($aaa);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    ?>



<p class="fw-bold">Code utilisé :</p>

<pre class="border border-dark col-3 offset-5 ">
$a = 'texte';
var_dump($a);
echo $a;

$b = 12.12;
var_dump($b);
echo $b;

$c = 15;
var_dump($c);
echo $c;

$d = True;
var_dump($d);
echo $d;

</pre>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

Typages des chaines.

amélioration de l'affichage

    <ul>
    <li><\?= $a ?></li>
    <li><\?= $aa ?></li>
    <li><\?= $aaa ?></li>
    <li><\?= $b ?></li>
    <li><\?= $c ?></li>
    <li><\?= $d ?></li>
    <li><\?= $e ?></li>
    </ul>




->



