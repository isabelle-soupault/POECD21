<?php
$age = 25;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 2 - Exercice 1</title>
</head>
<body>
    <div class="container">
        <h1>Exercice 1</h1>

        <p text-center> Créer une variable age et l'initialiser avec une valeur.  
    Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
    </div>

    <div class="container text-center mt-4">

        <?php
        if ($age >= 18){
             ?> <p> Vous êtes majeur et vous avez  <?= $age ?> ans. </p> <?php 
        } else{
            ?><p>Vous êtes mineur, et vous avez  <?= $age ?> ans.</p> <?php
        }
        ?>


        <?php if ($age >=18 ); ?>
        <p>Vous êtes majeur et vous avez <?= $age ?> ans.</p>
        <?php else :?>
        <p> Vous êtes mineur et vous avez <?= $age ?> ans.</p>
        <?php endif ?>

        <p class="fw-bold">Code utilisé :</p>

        <pre class="border border-dark col-3 offset-5 ">


        </pre>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>


<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

Autre possibilité d'écrire les conditions :

<\?php if ($age >=18 ); ?>
    <p>Vous êtes majeur et vous avez <\?= $age ?> ans.</p>
    <\?php else :?>
    <p> Vous êtes mineur et vous avez <\?= $age ?> ans.</p>
    <\?php endif ?>


->