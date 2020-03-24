<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $number = 550;
    if ($number < 20) {
        die("Please enter a valid number");
    } else {
        echo 'This is valid number';
    }
    echo 'Processing...';
    ?>
</body>

</html>