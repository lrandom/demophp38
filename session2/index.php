<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo '<p>' . $i . '</p>';
    }

    $index = 0;
    do {
        $index++;
        echo '<p>do while' . $index . '</p>';
    } while ($index <= 10);

    $index = 0;
    while ($index <= 10) {
        $index++;
        echo '<p>while do' . $index . '</p>';
    }

    $mang = array("key1" => 1, "key2" => 3);
    foreach ($mang as $key => $value) {
        echo $key . ' ' . $value;
    }

    $mang = array(1, 2, 4, 5, 5);
    foreach ($variable as  $value) {
        echo $value;
    }

    for ($i = 0; $i < 5; $i++) {
        if ($i == 3) {
            echo $i;
            break; //0123
        }
    }

    for ($i = 0; $i < 5; $i++) {
        if ($i == 2) {
            continue;
        }
        echo $i; //0134
    }

    for ($i = 0; $i < 5; $i++) {
        if ($i == 3) {
            return;
        }
    }
    ?>
</body>

</html>