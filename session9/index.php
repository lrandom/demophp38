<?php
session_start();
if (isset($_GET['logout'])) {
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        header("Location:login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        echo  'Hello' . '&nbsp;' . $user['username'];
        echo '<a href="?logout">Đx<a>';
    }
    ?>
</body>

</html>