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

    <p text-center> Créer un formulaire sur la page index.php avec :  
Une liste déroulante pour la civilité (Mr ou Mme)
Un champ texte pour le nom
Un champ texte pour le prénom 

Ce formulaire doit rediriger vers la page index.php. 
Vous avez le choix de la méthode.</p>

</div>
<div class="container text-center mt-4">

<form action="index.php" method="post">
        <select name="civilite" id="">
            <option value="mr">Mr</option>
            <option value="mrs">Mme</option>
            
        </select>

        <label for="name"> Votre nom</label>
            <input type="text" name="nom" id="name">

        <label for="surname">Votre prénom</label>
            <input type="text" name="prenom" id="surname">

            <input type="submit" value="Valider!">

</form>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>