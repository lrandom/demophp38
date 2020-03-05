<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //bai 1
    $sum = 0;
    $a = 1;
    while ($a <= 100) {
        $sum += $a;
        $a++;
    }
    echo 'Tong 100 so dau tien' . $sum;

    //bai 2
    $a = 20;
    while ($a <= 25) {
        if ($a % 3 == 0) {
            echo $a . '<br>';
        }
        $a++;
    }

    ?>
</body>

</html>