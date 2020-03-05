<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $mang = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    /*foreach ($mang as $r) {
        $soNguyenTo = true;
        for ($i = 2; $i < $r; $i++) {
            if ($r % $i == 0) {
                $soNguyenTo = false;
                break;
            }
        }
        if ($r != 1 && $soNguyenTo) {
            echo $r;
        }
    }
    echo ' la so nguyen to<br>';*/

    //tim so hoan hao
    foreach ($mang as $r) {
        $sum = 0;
        for ($i = 1; $i < $r; $i++) {
            if ($r % $i == 0) {
                $sum += $i;
            }
        }
        if ($sum == $r) {
            echo $r . ' so hoan hao';
        }
    }
    ?>
</body>

</html>