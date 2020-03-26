<?php
//var_dump($_FILES);
if (isset($_FILES['file']) && $_FILES['file']['name'] != null) {
    $size = $_FILES['file']['size'];

    $error = [];
    //nếu mà kích cỡ file mà lớn hơn 3 mb
    if ($size > 3 * 1024 * 1024) {
        $error[] = 'Kích thuớc file phải nhỏ hơn 3mb';
    }

    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if ($ext != 'png') {
        $error[] = 'File phải có định dạng png';
    }

    if (count($error) == 0) {
        $dir = date('m', time()) . '_' . date('yy', time()) . '/'; // 3_2020 định dạng;
        $dir = 'uploads/' . $dir; // uploads/3_2020;

        // tạo thư mục mới nếu chưa tồn tại (tạo thư mục theo tháng và năm)
        if (!file_exists($dir) && !is_dir($dir)) {
            mkdir($dir, 0777); //make directory
        }

        $tmpFile = $_FILES['file']['tmp_name'];
        $realPath = $dir . time() . str_replace(' ', '_', $_FILES['file']['name']);
        //di chuyển file từ thư mục tạm sang thư mục thật
        move_uploaded_file($tmpFile, $realPath);
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
    if (isset($error) && count($error) != 0) {
        foreach ($error as $r) {
    ?>
    <p><?php echo $r; ?></p>
    <?php
        }
    }
    ?>
    <form enctype="multipart/form-data" method="post">
        <input type="file" name="file" />
        <input type="submit" value="Submit" />
    </form>
</body>

</html>