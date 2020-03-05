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
    foreach ($mang as  $value) {
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
            //return;
        }
    }

    $mang = array(1, 2, 3, 4, 5);

    //duyệt mảng
    foreach ($mang as $r) {
        echo $r . '<br>';
    };

    //cach dn 2
    $mang2[0] = 2;
    $mang2[1] = 1;
    $mang2[2] = 3;

    //cach dn 3
    $mang3[] = 1;
    $mang3[] = 2;

    //mang lien hop
    $mangAssoc = array(
        'fullname' => 'Luan',
        'age' => 28,
        'school' => 'NIIT'
    );

    foreach ($mangAssoc as $k => $v) {
        echo '<p>' . $k . '-' . $v . '</p>';
    }

    //mang hai chieu
    $mang2d = array(
        array(1, 2, 3, 4),
        array(3, 3, 4, 5)
    );

    foreach ($mang2d as $r) {
        foreach ($r as $r1) {
            echo $r1 . '<br>';
        }
    }

    for ($i = 0; $i < count($mang2d); $i++) {
        for ($j = 0; $j < count($mang2d[$i]); $j++) {
            echo $mang2d[$i][$j];
        }
    }
    //mang ba chieu
    $mang3d = array(
        array(
            array(
                1, 3, 4, 5, 6, 7
            ),
            array(
                4, 5, 6, 7, 8, 9
            )
        )
    );

    $mangAssoc2d = array(
        array(
            'fullname' => 'Luan',
            'age' => 28
        ),
        array(
            'fullname' => 'Nam',
            'age' => 20
        )
    );

    foreach ($mangAssoc2d as $r) {
        foreach ($r as $key => $value) {
            echo $key . '-' . $value . '<br>';
        }
    }

    $name = 'Luan';
    $sayHi = 'My name is $name';
    echo $sayHi;
    print_r($sayHi);

    echo strlen($sayHi);
    echo strpos($sayHi, 'My');

    ?>


</body>

</html>