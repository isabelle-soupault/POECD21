<?php 
$km = 1;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 1 - Exercice 3</title>
</head>
<body>
<div class="container">
    <h1>Exercice 3</h1>

    <p text-center> Créer une variable km. L'initialiser à 1. Afficher son contenu.  
Changer sa valeur par 3. Afficher son contenu.  
Changer sa valeur par 125. Afficher son contenu.</p>

</div>
<div class="container text-center mt-4">
<!--     <\?php 
    $km='1';
    ?>
    <p>
    <\?php echo $km; ?>
    </p>
    <p>
    <\?php echo $km='3'; ?>
    </p>
    <p>
    <\?php echo $km='125'; ?>
    </p> -->

<p> <?= $km ?> </p>
<p><?= $km = 3 ?></p>
<p><?= $km = 125 ?></p>

    
    <p class="fw-bold">Code utilisé :</p>

    <pre class="border border-dark col-3 offset-5 ">
$km = '1';
echo $km;
echo $km='3';
echo $km='125';
    </pre>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

OK


->