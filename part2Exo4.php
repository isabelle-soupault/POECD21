<?php
$magnitude=7;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 2 - Exercice 4</title>
</head>
<body>
<div class="container">
        <h1>Exercice 4</h1>

        <p text-center> 
    L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
    Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.

    Magnitude	Phrase
    1	Micro-séisme impossible à ressentir.
    2	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
    3	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
    4	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
    5	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
    6	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
    7	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
    8	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
    9	Séisme capable de tout détruire sur une très vaste zone.
    Gérer tous les cas.  
    Utilser autre chose que des if else.</p>
</div>
<div class="container text-center mt-4">

    <div class="container">
    <p> Il y a eu un seisme sur Terre de magniture <?= $magnitude ?>. <br> Cela se traduit, d'après l'échelle de Richter par un</p>
    </div>

    <?php
    switch ($magnitude){
        case 0 :
            ?><p>Il n'y a pas eu de séisme. </p><?php
            break;
        case 1 :
            ?><p>Micro-séisme impossible à ressentir.</p><?php
            break;
        case 2 :
            ?><p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p><?php
            break;    
        case 3 :
            ?><p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p> <?php
            break;

        case 4 :
            ?><p>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p><?php
            break;
        case 5 :
            ?><p>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes'</p> <?php
            break;
        case 6 :
                ?><p>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre. </p> <?php
                break;
        case 7 :
            ?><p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la disetance.</p><?php
            break;    
        case 8 :
            ?><p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p> <?php
            break;
        
        case 9 :
            ?><p>Séisme capable de tout détruire sur une très vaste zone.. <?php
            break;
        default :
            ?><p>Vous n'avez pas saisi de chiffre situé entre 0 et 9; </p> <?php
            break;
        }

    ?>
    
        <!--     <p class="fw-bold">Code utilisé :</p>

            <pre class="border border-dark col-3 offset-5 ">


        </pre> --> 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

Dans le default, il est mieux de rajouter également le break.
Le break est important car si on ne le met pas lors de la lecture du switch on va aller jusqu'au break suivant. 
Cela peut-être interessant pour les cas o$ on doit afficher des choses identiques ou des choses légèrement différentes.
Différence entre switch et ifelse
If, on se sert surtout des intervals. Si le cas est pré-défini, qu'on est sûr de ce que l'on veut on utilise plutôt le switch.
Cela peut se traduire par :
cas où c'est ça
cas où c'est ça etc.

Le switch n'est pas le bloc le plus utilisé.
->