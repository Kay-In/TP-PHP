<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de Multiplication</title>
</head>

<body>
    <h1>Une table de multiplication</h1>
    <table border=1 width=100%>
        <thead><?php for ($i = 1; $i < 11; $i++) { ?>
                <td align="center"><?php echo $i ?></td>
            <?php  } ?>
        </thead>
        <tbody>
            <?php
            for ($abcisse = 2; $abcisse < 11; $abcisse++) {
                echo "<tr>";
                for ($ordonnée = 1; $ordonnée < 11; $ordonnée++) {
                    echo "<td align='center'>" . $abcisse * $ordonnée . "</td>";
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>