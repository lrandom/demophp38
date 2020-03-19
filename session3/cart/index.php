<?php session_start();
// session_unset();
// exit();
$products = array(
    array('id' => 1, 'name' => 'Iphone 3', 'price' => 3000000),
    array('id' => 2, 'name' => 'Iphone 4', 'price' => 4000000)
);

//nếu tồn tại dữ liệu id đẩy lển
if (isset($_GET['id'])) {
    // nếu id là số
    if (is_numeric($_GET['id'])) {
        //lấy id ra
        $id = $_GET['id'];

        //duyệt mảng sản phẩm ( sau này thay bằng lấy sp trong csdl)
        foreach ($products as $hiep) {
            //nếu tồn tại sp có id đẩy lên
            if ($hiep['id'] == $id) {
                //nếu tồn tại giỏ hàng rồi
                if (isset($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];
                    $flag = false;
                    //tăng số luợng sp nếu đã có sp này trong giỏ hàng
                    for ($i = 0; $i < count($cart); $i++) {
                        if ($cart[$i]['id'] == $id) {
                            $cart[$i]['quantity'] = $cart[$i]['quantity'] + 1;
                            $flag = true; //da ton tai mot cai san pham có id như vay trong gio hang
                            break;
                        }
                    }

                    // thêm mới sp vào giỏ hàng
                    if ($flag == false) {
                        $item = array(
                            'id' => $hiep['id'],
                            'name' => $hiep['name'],
                            'quantity' => 1,
                            'price' => $hiep['price']
                        );
                        array_push($cart, $item);
                    }
                    $_SESSION['cart'] = $cart;
                } else {
                    // đẩy sp vào giỏ hàng
                    $item = array(
                        'id' => $hiep['id'],
                        'name' => $hiep['name'],
                        'quantity' => 1,
                        'price' => $hiep['price']
                    );
                    $cart = array($item);
                    $_SESSION['cart'] = $cart;
                }
                break;
            }
        }
        header('Location:cart.php');
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