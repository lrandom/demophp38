<?php
session_start();
if (isset($_SESSION['success'])) {
    unset($_SESSION['success']);
}
require_once('./../commons/head.php');
require_once('./../../models/users.php');
if (isset($_POST['username'])) {
    $users = new Users();
    $insertId = $users->insert($_POST);
    if (isset($_FILES['file']) && $_FILES['file']['name'] != '') {
        $filename = './../../uploads/' . time() . $_FILES['file']['name'];
        echo $filename;
        // exit();
        move_uploaded_file($_FILES['file']['tmp_name'], $filename);
        $users->updateAvatar($filename, $insertId);
    }
    if ($insertId != 0) {
        $_SESSION['success'] = 'Thêm thành công';
    }
}


?>

<body>
    <?php
    require_once('./../commons/nav_menu.php');
    ?>


    <div class="container">
        <?php
        if (isset($_SESSION['success'])) {
        ?>
        <div class="alert alert-primary" role="alert">
            <?php echo $_SESSION['success'] ?>
        </div>
        <?php
        }
        ?>
        <form method="post" enctype="multipart/form-data">

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                    <input type="text" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">address</label>
                <div class="col-sm-10">
                    <input type="text" name="address">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                    <input type="password" name="password">
                </div>
            </div>

            <div class="form-group row">
                <label>Ảnh đại diện</label>
                <div class="col-sm-10">
                    <input type="file" name="file" />
                </div>
            </div>

            <input type="submit" class="btn btn-primary"></input>
        </form>
    </div>
</body>
<?php
require_once('./../commons/footer.php');
?>