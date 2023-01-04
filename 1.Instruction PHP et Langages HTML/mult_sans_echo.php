<?php

$html = "<!DOCTYPE html>";
$html .= "<html lang='fr'>";
$html .= "<head>";
$html .= "<title>Table de Multiplication</title>";

$html .= "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>";
$html .= "<link href='css/bootstrap.css' rel='stylesheet'/>";
$html .= "<link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet'>";

$html .= "</head>";
$html .= "<body>";
$html .= "<h1>Une Table de Multiplication</h1>";
$html .= "<table border=1 width=100%><thead>";
for ($i = 1; $i < 11; $i++) {
    $html .= "<td align='center'>";
    $html .= $i;
    $html .= "</td>";
};
$html .= "</thead><tbody>";
for ($abcisse = 2; $abcisse < 11; $abcisse++) {
    $html .= "<tr>";
    for ($ordonnee = 1; $ordonnee < 11; $ordonnee++) {
        $html .= "<td align='center'>";
        $html .= $abcisse * $ordonnee;
        $html .= "</td>";
    }
}
$html .= "</tr></tbody></table>";

echo $html;
