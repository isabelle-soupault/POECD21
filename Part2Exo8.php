<?php
 $number = 15;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 2 - Exercice 8</title>
</head>
<body>
<div class="container">
    <h1>Exercice 8</h1>

    <p text-center> Traduire ce code avec des if et des else :
<\?php
  $number = 11;
  echo ($number % 5 == 0 && $number % 3 == 0)
  ? 'FizzBuzz'
  : ( $number % 3 == 0
    ? 'Fizz'
    : ($number % 5 == 0 ? 'Buzz' : $number)
    );
?></p>

</div>
<div class="container text-center mt-4">
<p>rendu du code en brut</p>

Traduire ce code avec des if et des else :

        <?php
        //   $number = 11;
        echo ($number % 5 == 0 && $number % 3 == 0)
        ? 'FizzBuzz'
        : ( $number % 3 == 0
            ? 'Fizz'
            : ($number % 5 == 0 ? 'Buzz' : $number)
            );
        ?>
    <hr>
        <?php
        if ($number % 5 == 0 && $number %3 ==0){
            ?> <p>FizzBuzz</p> <?php ;
        } elseif  ($number % 3 == 0){
            ?> <p>Fizz</p> <?php ;
        } elseif ($number % 5 == 0) {
            ?> <p>Buzz</p> <?php ;
        } else {
            ?> <p><?= $number ?> </p> <?php ;
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


Ici ce sont des ternaires imbriquées. C'est un test très courant qui permet de voir comment on maîtrise les conditions et les modulos.

->
