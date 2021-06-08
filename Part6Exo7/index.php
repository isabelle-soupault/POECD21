<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 6 - Exercice 7</title>
</head>
<body>
<div class="container">
    <h1>Exercice 7</h1>

    <p text-center> Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>

</div>
<div class="container text-center mt-4">

<?php if(empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['file'])): ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <select name="civilite" id="">
            <option value="mr">Mr</option>
            <option value="mrs">Mme</option>
        </select>
        <label for="name"> Votre nom</label>
            <input type="text" name="nom" id="name">
        <label for="prenom">Votre prénom</label>
            <input type="text" name="prenom" id="surname">
        <input type="file" name="file" id="docpicker" accept=".doc,.docx,.pdf">
        <input type="submit" value="Valider!">

<?php else : ?>
    <script> form {display:none;}</script>
    <p> La civilité de notre utilisateur est : <?= $_POST['civilite'] ?> <br>
    Le prénom de notre utilisateur est : <?= $_POST['prenom'] ?> <br>
    et le nom de famille de notre utilisateur est <?= $_POST['nom'] ?> <br>
    Le fichier mis à disposition se nomme  <?= $_FILES['file']['name'] ?> <br> 
    Et son extansion est de type  <?= $_FILES['file']['type'] ?> <br> 
<?php

endif ?>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>