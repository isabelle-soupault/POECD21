<?php
$var_a = null;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 2 - Exercice 6</title>
</head>
<body>
<div class="container">
    <h1>Exercice 6</h1>

    <p text-center> Traduire ce code avec des if et des else :
<\?php
  $var_a = null;
  echo $var_a ?: 'Je suis une variable sans valeur';
?>
</p>
</div>
<div class="container text-center mt-4">
                <?php
                echo $var_a ?: 'Je suis une variable sans valeur';
                ?>
                <hr>
                <?php
                if($var_a == null){
                    ?> <p> Je suis une variable sans valeur</p> <?php ;
                } else {
                    ?> <p> <?= $var_a ?></p><?php ;
                }
                ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--
 if ($var_a != null){
     echo $var_a . ': je suis une variable sans valeur';
 }


->