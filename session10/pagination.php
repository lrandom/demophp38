<?php
$pdo = new PDO('mysql:host=localhost;dbname=demo_php38', 'root', 'koodinh');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $count = 5;
    $offset = ($page - 1) * $count;
    $stm = $pdo->prepare('SELECT * FROM products LIMIT ' . $offset . ',' . $count);
    $stm->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
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
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>price</td>
            <td>Description</td>
        </tr>

        <?php
        while ($row = $stm->fetch()) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['description']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>


    <?php
    //tinh tổng số bản ghi
    $row = $pdo->query('select count(*) as count from products');
    foreach ($row as $r) {
        $allRows = $r['count'];
    }
    $page = ceil($allRows / $count); //11/5 = 2.2 xấp xỉ 3 -> 2 trang
    for ($i = 0; $i < $page; $i++) {
        $pageCount = $i + 1;
        echo '<a href="?page=' . $pageCount . '">' . $pageCount . '</a>';
    }
    ?>
</body>

</html>