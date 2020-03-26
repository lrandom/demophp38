<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*$file = fopen('demo.txt', 'r');
    if ($file == false) {
        echo 'Không thể mở file';
        exit();
    }

    $filesize = filesize('demo.txt');
    $content = fread($file, $filesize);
    fclose($file);*/

    $file = fopen('demo1.txt', 'w');
    if ($file == false) {
        echo 'Không thể mở file';
        exit();
    }

    fwrite($file, "HI HI, Sầu tím thiệp hồng");
    fclose($file);
    ?>
    <p><?php //echo $content 
        ?></p>
</body>

</html>