<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 6 - Exercice 5</title>
</head>
<body>
<div class="container">
    <h1>Exercice 5</h1>

    <p text-center> Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, affichez-les à la place du formulaire. Sinon affichez le formulaire.

Utiliser qu'une seule page.</p>

</div>
<div class="container text-center mt-4">

<?php if(empty($_POST['nom']) && empty($_POST['prenom'])): ?>
    <form action="index.php" method="post">
        <select name="civilite" id="">
            <option value="mr">Mr</option>
            <option value="mrs">Mme</option>
        </select>
        <label for="name"> Votre nom</label>
            <input type="text" name="nom" id="name">
        <label for="prenom">Votre prénom</label>
            <input type="text" name="prenom" id="surname">

            <input type="submit" value="Valider!">
<?php else : ?>
    <p> La civilité de notre utilisateur est : <?= $_POST['civilite'] ?> <br>
    Le prénom de notre utilisateur est : <?= $_POST['prenom'] ?> <br>
    et le nom de famille de notre utilisateur est <?= $_POST['nom'] ?>  </p>
    <script> form {display:none;}</script>
<?php endif ?>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>