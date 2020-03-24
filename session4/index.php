<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function calculateNumber()
    {
        echo '<p>This is function</p>';
    }
    ?>

    <?php
    calculateNumber();

    function calculateNumberTwo($a, $b)
    {
        echo '<p>Total is' . ($a + $b) . '</p>';
    }

    calculateNumberTwo(10, 10);

    function calculateNumberThree($a, $b = 50)
    {
        return $a + $b;
    }

    $sum = calculateNumberThree(10);
    echo $sum;
    ?>
</body>

</html>