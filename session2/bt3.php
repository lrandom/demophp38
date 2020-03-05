<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sum = 0;
    for ($i = 0; $i < 100; $i++) {
        /*if ($i == 50) {
            break;
        }*/

        /*if ($i == 70) {
            continue;
        }*/
        $sum += $i;
    }
    echo 'Tong cua 100 so nguyen lien tiep la' . $sum;
    ?>
</body>

</html>