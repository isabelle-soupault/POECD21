<?php
$gender = 'Homme';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 2 - Exercice 5</title>
</head>
<body>
<div class="container">
    <h1>Exercice 5</h1>

    <p text-center> Traduire ce code avec des if et des else : 

<\?php
  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?></p>

</div>
<div class="container text-center mt-4">

<?php 

if ($gender != 'Homme') {
    ?> <p>C'est une développeuse :)</p> <?php ;
} else {
    ?> <p>C'est un développeur :)</p> <?php
}
?>  
<p style="color:  <?php echo ($gender != 'Homme') ? 'pink' : 'blue';?> ">Bonjour</p>  
   
   
   </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--
Pourquoi utiliser une ternaire plutôt que if / else :
ne pas changer la façon d'écrire le html.
 Par exemple décider de changer une couleur de texte en fonction d'une condition.

exemple :<p style="color:  <\?php echo ($gender != 'Homme') ? 'pink' : 'blue';?> ">Bonjour</p>  

->