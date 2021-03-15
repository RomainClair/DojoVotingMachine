<?php

$vote1 = 0;
$vote2 = 0;
$vote3 = 0;
$vote4 = 0;

do {
    $vote = readline("Entrez le numéro de votre candidat - 0 pour quitter");
    switch ($vote) {
        case 1 :
            $vote1++;
            break;
        case 2 :
            $vote2++;
            break;
        case 3 :
            $vote3++;
            break;
        case 4 :
            $vote4++;
            break;
    }
} while ($vote > 0 && $vote < 5);

// Affichage des résultats
echo "Candidat 1 : " . $vote1 . PHP_EOL;
echo "Candidat 2 : " . $vote2 . PHP_EOL;
echo "Candidat 3 : " . $vote3 . PHP_EOL;
echo "Candidat 4 : " . $vote4 . PHP_EOL;
