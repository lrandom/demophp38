<?php
require_once('./../commons/head.php');
require_once('./../../helper.php');
require_once('./../../models/users.php');

$users = new Users();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'delete':
            if (is_numeric($_GET['id'])) {
                $obj = $users->getById($_GET['id']);
                if (file_exists($obj['avt'])) {
                    unlink($obj['avt']);
                }
                $users->delete($_GET['id']);
            }
            break;

        default:
            # code...
            break;
    }
}
?>

<body>
    <?php
    require_once('./../commons/nav_menu.php');
    ?>


    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Avt</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <br>
            <a class="btn btn-primary" href="add.php">Thêm</a>
            <br>
            <br>

            <tbody>
                <?php
                if (isset($_GET['page'])) {
                    $offset = ($_GET['page'] - 1) * 2;
                } else {
                    $offset = 0;
                }
                $list = $users->getAll($offset, 2);
                foreach ($list as $r) {
                ?>
                <tr>
                    <td><?php echo $r['id'] ?></td>
                    <td><?php echo $r['username'] ?></td>
                    <td><?php echo $r['address'] ?></td>
                    <td><?php echo $r['phone'] ?></td>
                    <td><img style="width:50px;height:50px;" src="<?php echo $r['avt']; ?>" /></td>
                    <td>
                        <a class="btn btn-danger" href="?action=delete&id=<?php echo $r['id'] ?>">Xoá</a>
                        <a class="btn btn-warning" href="edit.php?id=<?php echo $r['id'] ?>">Sửa</a>
                    </td>
                </tr>
                <?php
                }

                ?>

            </tbody>
        </table>

        <?php
        generatePage($users->getPDO(), 'users', 2);

        ?>
    </div>
</body>
<?php
require_once('./../commons/footer.php');
?>