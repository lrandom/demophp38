<?php
session_start();
if (isset($_SESSION['success'])) {
    unset($_SESSION['success']);
}
require_once('./../commons/head.php');
require_once('./../../models/users.php');
$users = new Users();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (is_numeric($id)) {
        $obj = $users->getByid($id);
    } else {
        header('Location:index.php');
    }
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $users->update($_POST);
    if (isset($_FILES['file']) && $_FILES['file']['name'] != '') {
        $filename = './../../uploads/' . time() . $_FILES['file']['name'];

        //xoá file đi
        if (file_exists($obj['avt'])) {
            try {
                unlink($obj['avt']);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        move_uploaded_file($_FILES['file']['tmp_name'], $filename);
        $users->updateAvatar($filename, $id);
    }

    header('Location:edit.php?id=' . $id);
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

            <input type="hidden" name="id" value="<?php echo $obj['id'] ?>" />
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone" value="<?php echo $obj['phone'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">address</label>
                <div class="col-sm-10">
                    <input type="text" name="address" value="<?php echo $obj['address'] ?>">
                </div>
            </div>

            <div class="form-group row">
                <label>Ảnh đại diện</label>
                <img src="<?php echo $obj['avt']; ?>" />
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