<?php
session_start();

if (isset($_POST['username']) && isset($_POST['pwd'])) {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=demo_php38', 'root', 'koodinh');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stm = $pdo->prepare('SELECT * FROM users WHERE username=:username AND pwd=:pwd');
        $stm->execute(array(':username' => $username, ':pwd' => md5($pwd)));
        $user = $stm->fetchAll();
        if (count($user) == 1) {
            $_SESSION['user'] = $user[0];
            header("Location:index.php");
        } else {
            echo 'not exist';
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
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
    <form action="" method="post">
        <input type="text" name="username" required="true" />
        <input type="password" name="pwd" required="true" />
        <input type="submit" value="Submit" />
    </form>
</body>

</html>