<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $mang = array(1, 2, 1, 3, 4, 2, 6);
    $max = $mang[0];
    $min = $mang[0];
    $sum = 0;
    foreach ($mang as $r) {
        if ($max < $r) {
            $max = $r;
        }
        if ($min > $r) {
            $min = $r;
        }
        $sum += $r;
    }
    echo 'So lon nhat la' . $max . '<br>';
    echo 'So nho nhat la' . $min;
    echo 'TBC la' . ($sum / count($mang));
    ?>
</body>

</html>