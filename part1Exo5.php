<?php
$varExo5 = 0;
var_dump($varExo5);

var_dump($varExo5=25);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 1 - Exercice 5</title>
</head>
<body>
<div class="container">
    <h1>Exercice 5</h1>

    <p text-center> Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur avec la fonction var_dump.
Donner une valeur à cette variable et l'afficher.</p>

</div>
<div class="container text-center mt-4">

    
    <p class="fw-bold">Code utilisé :</p>

    <pre class="border border-dark col-3 offset-5 ">
$varExo5=0;
var_dump($varExo5);
var_dump($varExo5=25);
    </pre>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

Rien pour un entier est une valeur qui a "peu" d'influence.
Si on ne veut pas mettre de settype, on peut alors initialiser avec 0.
Le  null a donc une valeur, il a une signification et on a des raisons de l'appliquer.
En général on met null pour des objets.
On rappelle que le php est faiblement typé, donc ça peut vite devenir compliqué

Rappel : le var_dump n'a pas vocation à rester après la phase de développement. Il disparaît dès la phase de tests.

->