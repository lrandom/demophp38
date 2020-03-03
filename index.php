<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Định nghĩa biến
    $name = "NIIT";
    $number = 10;
    $flag = true;
    $flagName = "Viet Nam";
    $flag_name = "Viet Nam";
    echo '<p>Hello ' . $name . '</p>';

    //Định nghĩa hằng
    define('BASE_URL', 'http://localhost/demophp38');
    echo BASE_URL;


    $a = 2;
    $name = ($a == 1) ? 1 : 0;

    echo $name;
    /*if ($a == 1) {
        $name = 1;
    } else {
        $name = 0;
    }*/

    $amount = 200000;
    if ($amount >= 200000) {
        echo 'Di xem phim';
    }

    if ($amount >= 200000) {
        echo 'Di xem phim';
    } else {
        echo 'Di uong tra da';
    }

    if ($amount >= 200000) {
        echo 'Di xem phim';
    } elseif ($amount < 200000 && $amount >= 150000) {
        echo 'Di uong tra sua';
    } elseif ($amount <= 150000) {
        echo 'Di ve';
    }

    if ($amount >= 200000) {
        if ($amount >= 50000) {
        }
    }

    $var = 40;
    switch ($var) {
        case 10:
            echo 'Gia tri la 10';
            break;

        case 20:
            echo 'Gia tri la 20';
            break;

        default:
            echo 'Ko phu hop voi truong hop nao o tren';
            break;
    }


    ?>
</body>

</html>