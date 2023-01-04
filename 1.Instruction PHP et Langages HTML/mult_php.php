<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de Multiplication</title>
</head>

<body>
    <?php
    echo "<h1>Une table de multiplication</h1>";
    echo "<table border=1 width=100%><thead>";
    for ($i = 1; $i < 11; $i++) {
        echo "<td align='center'>" . $i . "</td>";
    }
    "</thead><tbody>";
    for ($abcisse = 2; $abcisse < 11; $abcisse++) {
        echo "<tr>";
        for ($ordonnee = 1; $ordonnee < 11; $ordonnee++) {
            echo "<td align='center'>" . $abcisse * $ordonnee . "</td>";
        }
        "</tr>";
        "</tbody></table>";
    }

    ?>
</body>

</html>