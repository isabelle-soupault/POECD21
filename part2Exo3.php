<?php
$gender='Femme';
$age= -15;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 2 - Exercice 3</title>
</head>
<body>
<div class="container">
    <h1>Exercice 3</h1>

    <p text-center> Créer deux variables age et gender. La variable gender peut prendre comme valeur :
Homme
Femme

En fonction de l'âge et du genre afficher la phrase correspondante :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineur 

Gérer tous les cas. </p>

</div>
<div class="container text-center mt-4">
<?php 
if($gender == 'Homme' && $age>=18 && $age <= 116 ){
    ?> <p>Vous êtes un homme et vous êtes majeur. </p> <?php
    }elseif($gender == 'Homme' && $age <= 18 && $age > 0) {
        ?> <p>Vous êtes un homme et vous êtes mineur.</p> <?php
    } elseif ($gender == 'Homme' && $age > 116){
        ?> <p>Vous êtes de sexe masculin mais votre age ne semble pas compatible avec l'espèce humaine.</p> <?php
    }elseif ($gender == 'Homme' && $age <= 0){
        ?> <p>Si vous n'êtes pas encore né mais que vous êtes de sexe masculin, peut-être êtes-vous un homme venant  du futur ?</p> <?php
    }elseif($gender == 'Femme' && $age >=18){
        ?> <p>Vous êtes une Femme et vous êtes majeure</p> <?php
    }elseif ($gender == 'Femme' && $age <= 18 && $age > 0) {
        ?> <p>Vous êtes une femme et vous êtes mineure.</p> <?php
    }elseif ($gender == 'Femme' && $age > 116){
        ?> <p>Vous êtes de sexe féminin mais votre age ne semble pas compatible avec l'espèce humaine.</p> <?php
    }elseif ($gender == 'Femme' && $age <= 0){
        ?> <p>Si vous n'êtes pas encore née mais que vous êtes de sexe fémin, peut-être êtes-vous une femme venant du futur ?</p> <?php
    } elseif ($gender!=='Homme' || $gender !== 'Femme') {
        ?> <p>Vous n'est pas genré. :)'</p> <?php
    }
?>

    <p class="fw-bold">Code utilisé :</p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

if ($gender == 'Homme'){
    if ($age >= 18){
        echo ('VOus êtes un homme et majeur');
    } else echo ('Vous êtes un homme et vous êtes mineur')
} else {
    if ($age >= 18){
        echo ('VOus êtes une femme et majeure');
    } else echo ('Vous êtes un femme et vous êtes mineure')
}

Il était également possible de faire toutes les conditions, de les enregistrer dans des variables et ensuite faire un seul et unique echo à la fin pour avoir le résultat
->