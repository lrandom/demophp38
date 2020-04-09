<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_POST['type'])) {
    $pdo = new PDO('mysql:host=localhost;dbname=demo_php38', 'root', 'koodinh');
    $pdo->exec('SET NAMES utf8');
    $stm = $pdo->prepare('INSERT INTO products(name,price,description) VALUES(:name, :price, :description)');
    $stm->execute(array(':name' => $_POST['name'], ':price' => $_POST['price'], ':description' => $_POST['description']));
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <input type="text" name="name" placeholder="Name">
        <br>
        <select name="brand">
            <option value="1">Nokia</option>
            <option value="2">>Samsung</option>
        </select>
        <br>
        <select name="type">
            <option value="1">Xách tay</option>
            <option value="2">>Nhập khẩu chính ngạch</option>
        </select>
        <br>
        <input type="number" name="price" placeholder="Giá" />
        <br>
        <input type="number" name="quantity" placeholder="SL" />
        <br>
        <textarea name="description"></textarea>
        <input type="submit" value="Submit" />
    </form>
</body>

</html>