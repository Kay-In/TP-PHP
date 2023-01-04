<?php

$tab = array(
    "php7@free.fr", "sacha8@gmail.com", "ariel3@wanadoo.fr",
    "webmestre@wanadoo.fr", "marcelduchamp9@gmail.com", "picasso69@gmail.com",
    "vangogh6@gmail.com", "matis63@free.fr", "degas45@wanadoo.fr"
);
var_dump($tab);

// récupération du nom de domaine
foreach ($tab as $ind => $val) {
    $dom = explode("@", $val);
    $domaine[] = $dom[1];
};
var_dump($domaine);

//Calcul du nombre d'occurence d'un nom de domaine.

$nb = array_count_values($domaine);

var_dump($nb);

//nombre total d'adreese 

$total = count($tab);
var_dump($total);

//pourcentage des fournisseurs

foreach ($nb as $fourn => $numb) {
    $percent[$fourn] = ($numb * 100) / $total;
    echo "Fournisseur d'accés:$fourn=" . round($percent[$fourn], 2) . "%<br>";
};
