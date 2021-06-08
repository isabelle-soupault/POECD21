<?php
    $lastname ='DS';
    $firstname='Iza';
    $age = 35;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 1 - Exercice 7</title>
</head>
<body>
<div class="container">
    <h1>Exercice 7</h1>

    <p text-center> Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  Attention age est de type entier.  
Afficher : Bonjour + lastname + firstname + , tu as + age + ans.</p>

</div>
<div class="container text-center mt-4">

    <p>
        Bonjour <?php echo $lastname ?> <?php echo $firstname ?>, tu as <?php echo $age ?> ans. :) 
    </p>
<hr>
    <p>Bonjour <?= $lastname; $firstname ?>, tu as <?= $age ?> ans. :)</p>
    
    <p class="fw-bold">Code utilisé :</p>

    <pre class="border border-dark col-7 offset-3 ">
$lastname ='DS';
$firstname='Iza';
$age = 35;

Bonjour <\?php echo $lastname ?> <\?php echo $firstname ?>, tu as <\?php echo $age ?> ans. :) 


Avec une concaténation :
echo 'Bonjour' .$firstname.' '.$lastname.', tu as '.$age.' ans. :)'
    </pre>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>


<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

Ici on voulait montrer que même si on a un nombre ($age) il est quand même possible de mettre la valeur dans une phrase. Ceci est possible car c'est faiblement typé.


->