<?php
//1)échange de valeur.
echo "1)<br>";
$a = "valeur 1";
$b = "valeur 2";
echo "a=" . $a . ",b=" . $b . "<br>";

$temp = $b;
echo "a=" . $a . ",b=" . $b . "<br>";
$b = $a;
echo "a=" . $a . ",b=" . $b . "<br>";
$a = $temp;
echo "a=" . $a . ",b=" . $b . "<br>";

list($a, $b) = array($b, $a);
echo "a=" . $a . ",b=" . $b . "<br>";

//2)tableau de pays
echo "2)<br>";
$pays = array("France", "Italie", "Espagne");
echo "3)<br>";
var_dump($pays);

echo "4)<br>";
for ($i = 0; $i < count($pays); $i++) {
    echo $pays[$i] . "<br>";
}

echo "5)<br>";
foreach ($pays as $valeur) {
    echo $valeur . "<br>";
}

echo "6)<br>";
$pays = array("France", "Italie", "Espagne");

do {
    $c = key($pays);
    $p = current($pays);
    echo $p . " - ";
} while (next($pays));

echo "7)<br>";
$pays = array(
    "France" => "Paris",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
);

echo "8)<br>";
echo "on a count($pays)=" . count($pays) . ".<br>";

echo "9)<br>";
foreach ($pays as $item => $value) {
    echo "<pre>";
    echo $value . " " . $item;
    echo "</pre>";
}

function enumerer($t)
{

    foreach ($t as $item => $valeur) {
        echo $valeur . '=>' . $item . '<br>';
    }
    return;
}

echo enumerer($pays);

echo "Parcourir le tableau associatif avec boucle foreach : <br>";

foreach ($pays as $key => $value) {
    echo "{$key} => {$value} <br>";
}
print_r($pays);

echo "<br>";
echo "<hr>";
// 12 - La fonction ajouter() peut s'écrire :



function ajouter($t)
{

    $t["pays"] = "capitale";
    foreach ($t as $item => $valeur) {
        echo $valeur . '=>' . $item . '<br>';
    }

    return;
}

echo "<br>";

echo ajouter($pays);

echo "<br>";

// 12 - la fonction ajouter($t) reçoit une copie du tableau $pays. 
// Ainsi c'est cette copie du Tableau $pays qui est modifiée. 
// Le Tableau initial n'est pas modifié !!!

var_dump($pays);
