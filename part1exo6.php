<?php
    $name='Iza';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 1 - Exercice 6</title>
</head>
<body>
<div class="container">
    <h1>Exercice 6</h1>

    <p text-center> Créer une variable name et l'initialiser avec la valeur de votre choix.  
Afficher : Bonjour + name + , comment vas tu ?.</p>

</div>
<div class="container text-center mt-4">

    <p>
    Bonjour <?php echo $name ?>, comment vas-tu ?
    </p>
<hr>

<p> Bonjour <?= $name ?>, comment vas-tu ? </p>

    
    <p class="fw-bold">Code utilisé :</p>
    <pre class="border border-dark col-4 offset-4 ">
$name='Iza'
Bonjour <\ ?php echo $name ?>, comment vas tu ?
    </pre>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

On rappelle qu'en PHP, la concaténation se réalise avec des points.
Le mieux reste de faire comme dans la seconde solution car c'est "plus clair" et "plus propre"



->