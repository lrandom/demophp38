<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    setcookie('school', 'NIIT', time() + 60 * 60); //1 tieng 

    if (isset($_COOKIE['school'])) {
        //true
        echo '<p>Tồn tại cookie</p>';
        echo $_COOKIE['school'];
    } else {
        //false
        echo '<p>Không tòn tại</p>';
    }

    if (isset($_GET['xoa'])) {
        //xoa cookie
        setcookie('school', '', time() - 60 * 60);
        unset($_COOKIE['school']);
    }
    ?>

    <a href="?xoa">Xoa cookie</a>
</body>

</html>