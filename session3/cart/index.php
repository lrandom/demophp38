<?php session_start();
$products = array(
    array('id' => 1, 'name' => 'Iphone 3', 'price' => 3000000),
    array('id' => 2, 'name' => 'Iphone 4', 'price' => 4000000)
);
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
            <td>Tên Sản Phẩm</td>
            <td>Giá</td>
            <td>Thao tác</td>
        </tr>

        <?php

        foreach ($products as $product) {
            echo '<tr>';
            echo '<td>' . $product['name'] . '</td>';
            echo '<td>' . $product['price'] . '</td>';
            echo '<td><a href="index.php?id=' . $product['id'] . '">Thêm vào giỏ hàng</a></td>';
            echo '</tr>';
        }
        ?>

    </table>
</body>

</html>