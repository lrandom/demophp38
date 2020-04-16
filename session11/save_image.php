<?php
$pdo = new PDO('mysql:host=localhost;dbname=shop_laptop', 'root', 'koodinh');
if (isset($_POST['name'])) {
    $path =null;
    if (isset($_FILES['img']) && $_FILES['img']!=null) {
        $path = 'uploads/'.$_FILES['img']['name'];
        //upfiles
        move_uploaded_file($_FILES['img']['tmp_name'], $path);
    }

    $name = $_POST['name'];
    $stm=$pdo->prepare('INSERT INTO brands(name,image) VALUES("'.$name.'","'.$path.'")');
    $stm->execute();
    //localhost/demophp38/session11/.$path; - > BASE_URL . $path;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    
    <form enctype="multipart/form-data" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="file" name="img">
        <input type="submit" name="submit" value="Submit">
    </form>


    <?php
    $images=$pdo->query('SELECT image from brands');
    foreach ($images as $r) {
        echo '<img src="http://localhost/demophp38/session11/'.$r['image'].'">';
    }
    ?>
</body>
</html>