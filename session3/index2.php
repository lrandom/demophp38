<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['school'])) {
        $_SESSION['school'] = 'NIIT';
    }

    if (isset($_SESSION['school'])) {
        echo 'School name is ' . $_SESSION['school'];
    } else {
        echo 'Do not have any school';
    }
    ?>
</body>

</html>