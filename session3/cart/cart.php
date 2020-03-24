<?php session_start(); ?>
<?php
//nếu tồn tại data get delete
if (isset($_GET['delete'])) {
    //lấy id ra
    $id = $_GET['id'];
    if (isset($_SESSION['cart'])) {
        //lấy mảng trong session ra
        $cart = $_SESSION['cart'];

        //tìm kiếm phần tử theo id trong mảng
        for ($i = 0; $i < count($cart); $i++) {
            if ($id == $cart[$i]['id']) {
                //xoa phan tu tai vi tri i
                array_splice($cart, $i);
                break;
            }
        }

        //gán nguợc lại mảng vào session
        $_SESSION['cart'] = $cart;
    }
}

//nếu như nguơi dùng gửi thông tin mong muốn là tăng số luợng sp
if (isset($_GET['plus'])) {
    $id = $_GET['id'];
    $cart = $_SESSION['cart'];

    //tìm kiếm phần tử theo id trong mảng
    for ($i = 0; $i < count($cart); $i++) {
        if ($id == $cart[$i]['id']) {
            //cập nhật tăng số luợng lên
            $cart[$i]['quantity'] = $cart[$i]['quantity'] + 1;
            break;
        }
    }

    $_SESSION['cart'] = $cart;
}


//nếu như nguơi dùng gửi thông tin mong muốn là tăng số luợng sp
if (isset($_GET['minus'])) {
    $id = $_GET['id'];
    $cart = $_SESSION['cart'];

    //tìm kiếm phần tử theo id trong mảng
    for ($i = 0; $i < count($cart); $i++) {
        if ($id == $cart[$i]['id']) {
            //giảm số luợng đi
            if ($cart[$i]['quantity'] >= 2) {
                $cart[$i]['quantity'] = $cart[$i]['quantity'] - 1;
            }
            break;
        }
    }

    $_SESSION['cart'] = $cart;
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
    if (isset($_SESSION['cart'])) {
        //var_dump($_SESSION['cart']);
        echo '<table>
          <tr><td>Tên sp</td>
          <td>Giá</td>
          <td>Số luợng</td>
          <td>Thao tác</td>
          </tr>';
        foreach ($_SESSION['cart'] as $hiep) {
    ?>
    <tr>
        <td><?php echo $hiep['name']; ?></td>
        <td><?php echo $hiep['price']; ?></td>
        <td><?php echo $hiep['quantity']; ?></td>
        <td>
            <a href="cart.php?delete&id=<?php echo $hiep['id']; ?>">Xoá</a>
            <a href="?id=<?php echo $hiep['id']; ?>&plus">+</a>
            <a href="?id=<?php echo $hiep['id'] ?>&minus">-</a>
        </td>
    </tr>
    <?php
        }
        echo '</table';
    }
    ?>
</body>

</html>